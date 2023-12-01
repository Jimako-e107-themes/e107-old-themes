<?php

// Generated e107 Plugin Admin Area 

require_once('../../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

require_once("admin_menu.php");

//  TODO: check if there is $mode
define('JM_THEME_PREF_SECTION', $_GET['mode']);
 
// e107::lan('jmelements',true);
$curVal = e107::pref('jmelements');
 
 
class jmelements_ui extends e_admin_ui
{		
	 
    protected $pluginTitle		= 'Theme Options';
		protected $pluginName		= 'jmelements';
		protected $table			= '';
		protected $pid				= '';
 
		protected $prefs = array(                  
			  'jmelementssection'		=> array('title'=> '', 'tab'=>0, 'type'=>'method', 'data' => 'json', 
      			'width' => '38%', 'help' => '', 'readParms' => '', 'writeParms' => array("nolabel"=>1),  'class' => 'left', 'thclass' => 'left',  ),
   
		); 
 
		// changing pref name before saving
		public function beforePrefsSave($new_data, $old_data)
		{
			$this->prefs = array();
			$this->prefs = array(
				JM_THEME_PREF_SECTION => array(
					'title' => '',
					'tab' => 0,
					'type' => 'method',
					'data' => 'json',
					'width' => '38%',
					'help' => '',
					'readParms' => '',
					'writeParms' => array(
						"nolabel" => 1
					) ,
					'class' => 'left',
					'thclass' => 'left',
				) ,
			);
			$dataFields = $validateRules = array();
			foreach($this->prefs as $key => $att)
			{
		
				// create dataFields array
		
				$dataFields[$key] = vartrue($att['data'], 'string');
		
				// create validation array
		
				if (vartrue($att['validate']))
				{
					$validateRules[$key] = array(
						(true === $att['validate'] ? 'required' : $att['validate']) ,
						varset($att['rule']) ,
						$att['title'],
						varset($att['error'], $att['help'])
					);
				}
		
				/* Not implemented in e_model yet
				elseif(vartrue($att['check']))
				{
				$validateRules[$key] = array($att['check'], varset($att['rule']), $att['title'], varset($att['error'], $att['help']));
				}*/
			}
		
			$this->_pref->setDataFields($dataFields)->setValidationRules($validateRules);
		}
		
		// return back general pref name
		public function PrefsSaveTrigger()
		{
			$data = $this->getPosted();
     
			$beforePref = $data;
			unset($beforePref['e-token'], $beforePref['etrigger_save']);
			$tmp = $this->beforePrefsSave($beforePref, $this->getConfig()->getPref());
			if (!empty($tmp))
			{
				$data = $tmp;
			}
		
			foreach($this->prefs as $k => $v) // fix for empty checkboxes - need to save a value.
			{
				if (!isset($data[$k]) && $v['data'] !== false && ($v['type'] === 'checkboxes' || $v['type'] === 'checkbox'))
				{
					$data[$k] = null;
				}
			}
		
			foreach($data as $key => $val)
			{
				if (!empty($this->prefs[$key]['multilan']))
				{
					if (is_string($this->getConfig()->get($key))) // most likely upgraded to multilan=>true, so reset to an array structure.
					{
						$this->getConfig()->setPostedData($key, array(
							e_LANGUAGE => $val
						) , false);
					}
					else
					{
						$lang = key($val);
						$value = $val[$lang];
						$this->getConfig()->setData($key . '/' . $lang, str_replace("'", '&#39;', $value));
					}
				}
				else
				{
					$this->getConfig()->setPostedData($key, $val, false);
				}
			}
		
			$this->getConfig()->save(true);
			$this->getConfig()->setMessages();
			$this->prefs = array();
			$this->setDataFields = 'jmelementssection';
			$this->prefs = array(
				'jmelementssection' => array(
					'title' => '',
					'tab' => 0,
					'type' => 'method',
					'data' => 'json',
					'width' => '38%',
					'help' => '',
					'readParms' => '',
					'writeParms' => array(
						"nolabel" => 1
					) ,
					'class' => 'left',
					'thclass' => 'left',
				) ,
			);
		}
		
		
		
}

class jmelements_form_ui extends e_admin_form_ui
{
	use JMElementsTrait;
	function jmelementssection($curVal, $mode)
	{
		$value = array();
		$curVal = e107::pref('jmelements', JM_THEME_PREF_SECTION, false);
    $text = '';
    
		if (!empty($curVal))
		{
			$value = e107::unserialize($curVal);
		}

		switch ($mode)
		{
		case 'write': // Edit Page
			$text = $this->getFields(JM_THEME_PREF_SECTION, $value);
			return $text;
			break;
		}

		return null;
	}

	function getFields($name = '', $value = array())
	{
		if ($name == '')
		{
			return '';
		}
    
    $setting = e107::getDb()->retrieve('jmelement', '*', 'element_mode="'.$name.'"' );
        
		$CONFIG_TEMPLATE[$name] = $this->elements_content($setting['element_setting']);

    
    
		$text = "<table class='table table-condensed table-bordered'  style='table-layout: fixed;' ><tbody> ";
		$text.= "<tr><td  class='bg-primary' colspan=2>". $setting['element_title']. 
    "<br>". $setting['element_description']. 
    "<br>Content settings: yourtheme/elements/options_". $setting['element_setting'].".php ".  
    "<br>Shortcode: {ELEMENTS: mode=".$name."}  - if template name is the same as mode value 
     <br>Shortcode: {ELEMENTS: mode=".$name."&template=". $setting['element_template']."} - or other template with the same data </td> </tr>";
    
		$text.= "<tr><td  class='bg-default' colspan=2>" . $CONFIG_TEMPLATE[$name]['section_message'] . "</td> </tr>";
    $textremove = '';
    
    	//single fields, mainly headers 
    	$settings =  	$CONFIG_TEMPLATE[$name];
		if ($settings['fields'] > 0 )
		{
		$nameitem = $name.'[fields]';
			foreach($settings['fields'] as $fieldkey => $field)
			{
				if ($field['inuse'])
				{
					$text.= "<tr><td>" . $field['title'] . ": </td><td>";
					$text.= $this->renderElement($nameitem . '[' . $fieldkey . ']', $value['fields'][$fieldkey], $field);
					$text.= "</td></tr>";
				}
				else
				{
					$textremove.= "<input type='hidden' name=" . $nameitem . '[' . $fieldkey . ']' . "  value=''  title=''>";
				}
			}
		}

		// repeated elements
		$elementconfig =  	$CONFIG_TEMPLATE[$name];
		if($setting['element_items'] > 0) {
		$nameitem = $name.'[items]';
		$amt = range(0, $setting['element_items'] - 1 );
		$item = 0;
		foreach($amt as $v)
			{
					
				$name = $nameitem."[".$v."]";
				$val =  $value['items'][$v] ;
				++$item; 
				$text .= "<tr ><td colspan=2 class='bg-primary' style='vertical-align: middle!important;'>Item: ".$item."</td></tr>";
				
					$text .= "";
				$i = 1;
				
				foreach($elementconfig['item_values'] as $fieldkey => $field)   {
					 
           	if ($field['inuse'])  {		
                
              //print_a($name);  print_a($fieldkey);  print_a($val[$fieldkey]);
      				$text .= "<tr><td class='bg-default'>".$field["title"]."</td><td>";
      				$text.= $this->renderElement($name . '[' . $fieldkey . ']', $val[$fieldkey], 
      				$field);
      				++$i; 
           }
           else {
             $textremove.= "<input type='hidden' name=" . $name . '[' . $fieldkey . ']' . "  value=''  title=''>";
           } 						 	 
				}             
					$text .= "</td></tr> ";
				}            
			}
    

		return $text.$textremove;
	}
}
		
new jmelements_adminArea();

require_once(e_ADMIN."auth.php");

 

e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

