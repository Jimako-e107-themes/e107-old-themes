<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2015 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
*/

if (!defined('e107_INIT')) { exit; }

e107::lan('jmelements',true);

//v2.x Standard for extending menu configuration within Menu Manager. (replacement for v1.x config.php)
// TODO add fields
class jmelements_menu
{
	function __construct()
	{
		// e107::lan('_blank','menu',true); // English_menu.php or {LANGUAGE}_menu.php
	}

	/**
	 * Configuration Fields.
	 * @return array
	 */
	public function config($menu='')
	{
 
    $fields = array();
	$elements = e107::getDb()->retrieve('jmelement', 'element_mode, element_title', ' ORDER BY element_order', true);

	$tmp =  e107::getDb()->retrieve('news_category','category_id,category_name',null, true);
	foreach($tmp as $val)
	{
		$id = $val['category_id'];
		$categories[$id] = $val['category_name'];
	}
	
	$availableelements[] = '';
    foreach($elements as $element)
		{
			$availableelements[$element['element_mode']] = $element['element_title'] ;
		}

		switch($menu)
		{
			 case "shortcode":    
            $fields['shortcode_menuCaption']      = array('title'=> "Caption", 'type'=>'text', 'multilan'=>true, 'writeParms'=>array('size'=>'xxlarge'));
            $fields['shortcode_menuCode']         = array('title'=> "Shortcode code", 'type'=>'text', 'writeParms'=>array('size'=>'xxlarge'));
            $fields['shortcode_menuTableStyle']   = array('title'=> "ID for tablestyle", 'type'=>'text', 'writeParms'=>array('size'=>'xxlarge'));
            return $fields;
            
            case "element":
			  $templates = e107::getLayouts('jmelements', 'jmelements', 'front', null, false, false);
			    
        /* add new templates  the same code in e_menu */
        $default_templates = e107::getLayouts('jmelements','default', 'front', null, false, false);
        $theme_templates = e107::getLayouts('jmelements','theme', 'front', null, false, false);
        $custom_templates = e107::getLayouts('jmelements','custom', 'front', null, false, false);
        foreach($default_templates as $key=>$default_template) {
           $templates['default_'.$key]  = 'Default: '.$default_template;
        }
        foreach($theme_templates as $key=>$theme_template) {
           $templates['theme_'.$key]  = 'Theme: '.$theme_template;
        }  
        foreach($custom_templates as $key=>$custom_template) {
           $templates['custom_'.$key]  = 'Custom: '.$custom_template;
        }          
          
				$fields['shortcode_menuCaption']      = array('title'=> LAN_CAPTION, 'type'=>'text', 'multilan'=>true, 'writeParms'=>array('size'=>'xxlarge'));					 
						$fields['element']         = array('title'=> LAN_JM_ELEMENTS_LAN_06,  'type'=>'dropdown', 'writeParms'=>array('optArray'=>$availableelements  ), 'help'=>'');
						$fields['template']     = array('title'=> LAN_TEMPLATE,  'type'=>'dropdown', 'writeParms'=>array('optArray'=>$templates, 'default'=>'blank'), 'help'=>'');
				$fields['shortcode_menuTableStyle']   = array('title'=>LAN_JM_ELEMENTS_LAN_07, 'type'=>'text', 'writeParms'=>array('size'=>'xxlarge')); 
			break;
 
			case "webticker":
			  $templates = e107::getLayouts('jmelements', 'webticker', 'front', null, false, false);
        $fields['shortcode_menuCaption']      = array('title'=> LAN_CAPTION, 'type'=>'text', 'multilan'=>true, 'writeParms'=>array('size'=>'xxlarge'));	
				$fields['tikerid']  = array('title'=> LAN_JM_ELEMENTS_LAN_08, 'type'=>'text',  'writeParms'=>array('default'=>'webticker'));		
				$fields['init']  = array('title'=> LAN_JM_ELEMENTS_LAN_09, 'type'=>'boolean', 'writeParms'=>array('default'=>1));		 
				$fields['category']     = array('title'=> LAN_CATEGORY, 'type'=>'dropdown', 'writeParms'=>array('optArray'=>$categories, 'default'=>'blank'), 'help'=>'');
				$fields['count']        = array('title'=> LAN_LIMIT, 'tab'=>1, 'type'=>'text', 'writeParms'=>array('pattern'=>'[0-9]*', 'size'=>'mini'));
				$fields['template']     = array('title'=> LAN_TEMPLATE,  'type'=>'dropdown', 'writeParms'=>array('optArray'=>$templates, 'default'=>'blank'), 'help'=>'');
        $fields['shortcode_menuTableStyle']   = array('title'=> LAN_JM_ELEMENTS_LAN_07, 'type'=>'text', 'writeParms'=>array('size'=>'xxlarge')); 
			break;
      
			case "signupform":
			  $templates = e107::getLayouts('jmelements', 'signupform', 'front', null, false, false);
        $fields['shortcode_menuCaption']      = array('title'=> LAN_CAPTION, 'type'=>'text', 'multilan'=>true, 'writeParms'=>array('size'=>'xxlarge'));	
				$fields['template']     = array('title'=> LAN_TEMPLATE,  'type'=>'dropdown', 'writeParms'=>array('optArray'=>$templates, 'default'=>'blank'), 'help'=>'');
        $fields['shortcode_menuTableStyle']   = array('title'=> LAN_JM_ELEMENTS_LAN_07, 'type'=>'text', 'writeParms'=>array('size'=>'xxlarge')); 
			break;
			
		}

	  return $fields;

	}

}

// optional - for when using custom methods above.
/*
class _blank_menu_form extends e_form
{

	function blankCustom($curVal)
	{

		$frm = e107::getForm();
		$opts = array(1,2,3,4);
		$frm->select('blankCustom', $opts, $curVal);


	}


}*/


?>