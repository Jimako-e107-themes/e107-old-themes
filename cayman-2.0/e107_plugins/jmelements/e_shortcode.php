<?php
/*
* Copyright (c) e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
*/

if(!defined('e107_INIT'))
{
	exit;
}



    
class jmelements_shortcodes extends e_shortcode
{
	public $override = false;  
  
  public $settings  = false;
  public $elements  = false;
  public $prefs  = false;
  
	function __construct()
	{
     $this->prefs = e107::pref('jmelements');
     $settings =  e107::getDb()->retrieve('jmelement', '*', 'WHERE element_active  ORDER BY element_order' ,true);
 
     foreach($settings as $setting) {
          $this->settings[$setting['element_mode']] =  $setting['element_options'];
     }  
     /* for demo */
     $this->elements = $settings;

	}
 
  /* {ELEMENTS: mode=services&template=service} */
  /* if somethin doesn't work, check correct array name in template file at first. Most of problems */
  
  function sc_elements($parm = null)
  {
    $mode = $parm['mode'];
    $name = $parm['template'];   
    //print_xa($name);
    if ($name)
		{  
			if(substr( $name, 0, 7 ) === "custom_")  {
			    $tmp = explode('_', $name, 2);  
			    $file_name = "custom";
			    $template_key = $tmp[1];
			}
			elseif(substr( $name, 0, 8 ) === "default_")  {
			    $tmp = explode('_', $name, 2);  
			    $file_name = "default";
			    $template_key = $tmp[1];
			}	
			elseif(substr( $name, 0, 6 ) === "theme_")  {    
			    $tmp = explode('_', $name, 2);  
			    $file_name = "theme";
			    $template_key = $tmp[1];
			}	      		
			else {
			    $file_name = "jmelements";
			    $template_key = $name;
			}			
		}
    
    
    if (empty($mode))
    {
      return '';
    }
    
    if (empty($template_key))
    {
      $file_name = "default";
      $template_key = $name;
    }

    if (empty($values))
    {
      $values = e107::unserialize($this->settings[$mode]);
    }  
     
    if (empty($values))
    {
      return '';
    }
 
 
    $template = e107::getTemplate('jmelements', $file_name , $template_key); 
 
    if (empty($template))
    {
      return '';
    }              
    $start = '';
    $end = '';
    $text = '';
    $fieldvar = array();
    $var = array();
    
    /* only if element uses single fields */
    if (array_key_exists('fields', $values)) {
      foreach($values['fields'] as $key => $field)
      {
        $key = strtoupper($key);
        $field = e107::getParser()->replaceConstants($field, 'full');
        $field = e107::getParser()->toHTML($field,  true);
        $fieldsvar[$key] = $field;
      }
    }
 
    $start = e107::getParser()->simpleParse($template['start'], $fieldsvar);
    $end = e107::getParser()->simpleParse($template['end'], $fieldsvar);

    /* only if element uses repeated items */
    if (array_key_exists('items', $values)) {
      $id = 0;
      /* possibility to list them in reverse order, added in 2.1.0 */
      $valuesitems = $values['items'];
      if($parm['reverseorder'])  {
           $valuesitems =   array_reverse($valuesitems);
      }      
      foreach($values['items'] as $row)
      {
      
        /* added support for not exact number of items, so some of them can be empty. First field has to be filled to display something */
        $cur = current($row);
        /* from some reason empty field doesn't return string(0) suddenly, but string(1) " " */
        $cur = trim($cur);                                    
        if (empty($cur)) { continue; }
   
        foreach($row as $key => $field)
        { 
          $key = strtoupper($key);
          $field = e107::getParser()->replaceConstants($field, 'full');
          $field = e107::getParser()->toHTML($field,  true);
          $key = strtoupper($key);
          
          // otherwise template will be needed, saving time
          if($key == 'ITEM_DATA_BACKGROUND_COLOR' && $field) {
            $field =  "data-background-color='{$field}'";
          }
          
          $var[$key] = $field;
        }
         
        if(!empty($var)) {
          ++$id;         
          $var['ITEM_ID'] = $mode.'-'.$id;
          $var['ITEM_ACTIVE'] = ($id == 1 ? ' active ' : '');
          $var['ITEM_COLLAPSE'] = ($id == 1 ? ' in ' : ' collapsed ');
      
          $item = e107::getParser()->simpleParse($template['item'], $var);
 
        }
        $text.= $item;
      }       
    }
    $element = $start . $text . $end;
 
    $element = e107::getParser()->parseTemplate($element);
 
    return $element;
  }
  
  
  
/*---------------------- Webticker ********************************************/

  /* {WEBTICKER:  init=0}   - all js and css in theme  */
 
  function sc_webticker($parm = null) {
    
    if(is_string($parm))
    {
      parse_str($parm, $parms);
    }
    else
    {
      $parms = $parm;
    }

    $init = varset($parms['init'], true);
 
    $layout = varset($parms['template'], "default");
    $limit = vartrue($parms['count'], '10');
 
    $tikerid = vartrue($parms['tikerid'], 'webticker');
    $limit = '0, '.intval($limit);
 
		if($init) {
	    //https://cdnjs.cloudflare.com/ajax/libs/jquery.webticker/3.0.0/jquery.webticker.min.js
			e107::css("jmelements",  "js/jquery.webticker.min.css"); 
      e107::js("jmelements", 			"js/jquery.webticker.min.js");
	    $code = "// Calling WebTicker on the target element
	        var ticker = $('#{$tikerid}');
	        ticker.webTicker();";
	        
		  e107::js("footer-inline",  $code);
		} 
 
    $news   = e107::getObject('e_news_tree');  // get news class.
    $sc     = e107::getScBatch('news'); // get news shortcodes.
    $tp     = e107::getParser(); // get parser.
    $newsCategory = !empty($parms['category']) ? intval($parms['category']) : null;
    $opts = array(
        'db_order'  =>'n.news_sticky DESC, n.news_datestamp DESC', //default is n.news_datestamp DESC
        'db_where'  => "FIND_IN_SET(0, n.news_render_type)", // optional
        'db_limit'  => $limit, // default is 10
    );
    
    // load active news items. ie. the correct userclass, start/end time etc.
    $data = $news->loadJoinActive($newsCategory, false, $opts)->toArray();  // false to utilize the built-in cache.
    
		$template = e107::getTemplate('jmelements', 'webticker', $layout);
    
    $text = '';
    
    $var['WEBTICKER_ID'] = $tikerid;
 
    $start = e107::getParser()->simpleParse($template['start'], $var);
    $end = e107::getParser()->simpleParse($template['end'], $var);
    
    foreach($data as $row)
    {
        $sc->setScVar('news_item', $row); // send $row values to shortcodes.
        $item = $tp->parseTemplate($template['item'], true, $sc); // parse news shortcodes.
        
        
        $text.= $item;
    }
 
    $webticker = $start . $text . $end;
    return $webticker;
  
  }   
 
 
  /* {ELEMENTSDEMO}   */
  function sc_elementsdemo($parm = null) {
 
     foreach($this->elements as $element)  {
       $name = $element['mode'];
        
       $code = "{ELEMENTS: mode=".$element['element_mode']."&template=". $element['element_template']."}";
       
       $text .= "<div class='elementdemo-caption'><h2 class='text-center'>".$element['element_title']."</h2>";
       $text .= "<h3 class='text-center'>".$element['element_description']."</h3>";
       $text .= "<h4  class='text-center'> <code>&#123;ELEMENTS: mode=".$element['element_mode']."&template=". $element['element_template']."&#125; </code> </h4>"; 
       $text .= "</div>";
       $text .=  e107::getParser()->parseTemplate($code);
       
     }
     
     return $text;
  
  }
 

  /* {SIGNUPFORM:  template=default}   - all js and css in theme  */
  function sc_signupform($parm = null) {
  
    if(is_string($parm))
    {
      parse_str($parm, $parms);
    }
    else
    {
      $parms = $parm;
    }
    e107::coreLan('user');
 
    $layout = varset($parms['template'], "default");
  
    $sc     = e107::getScBatch('signup');
    $tp     = e107::getParser(); // get parser.
 
 
		$template = e107::getTemplate('jmelements', 'signupform', $layout);
  
    $text = '';
 
    $start = $tp->simpleParse($template['start'], $var);
    $start = $tp->parseTemplate($template['form'], true, $sc);  
    
    $end = $tp->simpleParse($template['end'], $var);
 
    $signupform = $start . $text . $end;
    return $signupform;
  } 
 
}
