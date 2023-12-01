<?php

// Generated e107 Plugin Admin Area 

require_once('../../../class2.php');
if (!getperms('P')) 
{
	e107::redirect('admin');
	exit;
}

e107::lan('jmelements',true);
require_once("admin_menu.php");

//  TODO: check if there is $mode
define('JM_THEME_PREF_SECTION', $_GET['mode']);
 
class jmelement_ui extends e_admin_ui
{		
 
	protected $pluginName		= 'jmelements';
	protected $pluginTitle		= LAN_JM_ELEMENTS_LAN_01;

	//	protected $eventName		= 'jmelements-jmelement'; // remove comment to enable event triggers in admin. 		
	protected $table			= 'jmelement';
	protected $pid				= 'element_id';
	protected $perPage			= 1; 
	protected $batchDelete		= false;
	protected $batchExport     	= false;
	protected $batchCopy		= false;
 
  	protected $sortField		= 'element_order';
    
   	protected $listQry      	= '';   
	
	protected $prefs = array(); 
    
	protected $listOrder		= 'element_order ASC';
	
    protected $afterSubmitOptions = array('edit');
            
    protected $fields 		= array (         
    'element_options'		=> array('title'=> '', 'tab'=>0, 'type'=>'method', 'data' => 'json', 
		  'width' => '38%', 'help' => '', 'readParms' => '', 'writeParms' => array("nolabel"=>1),  
		  'class' => 'left', 'thclass' => 'left',  ),
    'options' 					=> array('title'=> LAN_OPTIONS,				'type' => 'method',			'width' => '10%', 'forced'=>TRUE, 'thclass' => 'center last', 'class' => 'left', 'readParms'=>'sort=1')
    );
 
	function init() {
	   $this->setDefaultAction('edit');
	   $this->listQry      	= "SELECT * FROM `#jmelement` WHERE element_mode  = '".$this->mode."' ";
    }
    
	public function beforeCreate($new_data,$old_data)
	{
		return $new_data;
	}

	public function afterCreate($new_data, $old_data, $id)
	{
		// do something
	}

	public function onCreateError($new_data, $old_data)
	{
		// do something		
	}		
	
	
	// ------- Customize Update --------
	
	public function beforeUpdate($new_data, $old_data, $id)
	{

		return $new_data;
	}

	public function afterUpdate($new_data, $old_data, $id)
	{
		// do something	
	}
	
	public function onUpdateError($new_data, $old_data, $id)
	{
		// do something		
	}	
		
		
}

class jmelement_form_ui extends e_admin_form_ui
{
	use JMelementsTrait;
  
	function options($parms, $value, $id, $attributes)
	{
   		return '';
	}
	  
	function element_options($curVal, $mode)
	{
		$value = array();
		//	$curVal = e107::pref('jmtheme', JM_THEME_PREF_SECTION, false);
    	$text = '';
    
		if (!empty($curVal))
		{
			$value = e107::unserialize($curVal);
		}

		switch ($mode)
		{
		case 'read': // Edit Page
			$text = "Are you cheating?";
			return $text;
			break;
 
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
 
		$text = "<table class='table table-condensed table-bordered'  style='table-element: fixed;' ><tbody> ";
		$text.= "<tr><td  class='bg-primary' colspan=2>". $setting['element_title']. 
		"<br />".LAN_DESCRIPTION.": ".$setting['element_description']. 
		"<br />".LAN_JM_ELEMENTS_LAN_17.":  {ELEMENTS: mode=".$setting['element_mode']."&template=".$setting['element_template']."}".  
		"<br />".LAN_JM_ELEMENTS_LAN_12.": ". $this->element_path($name). 
		"<br />".LAN_JM_ELEMENTS_LAN_15.": in yourtheme/templates/  ". $setting['element_template']." 
		</td> </tr>";
		$textremove = '';
    
    	//single fields, mainly headers 
    	$settings =  	$CONFIG_TEMPLATE[$name];
		if ($settings['fields'] > 0 )
		{
		  $nameitem =  'element_options[fields]';
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
		$nameitem =   'element_options[items]'; 
		$amt = range(0, $setting['element_items'] - 1 );
		$item = 0;
		foreach($amt as $v)
		{
				
			$name = $nameitem."[".$v."]";
			$val =  $value['items'][$v] ;
			++$item; 
			$text .= "<tr ><td colspan=2 class='bg-primary' style='vertical-align: middle!important;'>".LAN_JM_ELEMENTS_LAN_16.": ".$item."</td></tr>";
			
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
    
    $text.= "</tbody></table>";	
    
		return $text.$textremove;
	}
}
		
new jmelements_adminArea();

require_once(e_ADMIN."auth.php");

 

e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

