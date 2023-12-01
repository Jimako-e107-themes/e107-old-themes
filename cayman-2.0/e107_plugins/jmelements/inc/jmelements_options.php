<?php

if (!defined('e107_INIT'))
{
	exit;
}

trait JMElementsTrait
{
	function elements_content($name = '')
	{
    $sitetheme = e107::getPref('sitetheme');
    
    //Note: easy solution would be to demand for key to have name 'custom_services'. But this way it lacks portability and easy customization just by copying
    //so hard at the beginning, easy at the end
    
    if ($name)
		{  
			if(substr( $name, 0, 7 ) === "custom_")  {
			    $tmp = explode('_', $name, 2);  
			    $element_name = $tmp[1];        
			    $path =  e_THEME. $sitetheme. '/elements/custom/options_' . $element_name . '.php';    
                if (file_exists($path)) {     
			  	  include_once ($path);
                }
			}
			elseif(substr( $name, 0, 8 ) === "default_")  {
			    $tmp = explode('_', $name, 2);  
			    $element_name = $tmp[1];
			    $path =  e_PLUGIN. 'jmelements/default/options_' . $element_name . '.php';
                if (file_exists($path)) {     
			  	  include_once ($path);
                }
			}			
			else {
			  $element_name = $name;
			  include_once (e_THEME. $sitetheme. '/elements/options_' . $name . '.php');
               if (file_exists($path)) {     
			  	  include_once ($path);
                }
			}
			
		}
		else return '';    
		return $options[$element_name];
	}

	function element_path($name)
	{
    $sitetheme = e107::getPref('sitetheme');
    
		if ($name)
		{  
			if(substr( $name, 0, 7 ) === "custom_")  {
			    $tmp = explode('_', $name, 2);  
			    $element_name = $tmp[1];               
			    $path =  e_THEME. $sitetheme. '/elements/custom/options_' . $element_name . '.php';         
 
			}
			elseif(substr( $name, 0, 8 ) === "default_")  {
			    $tmp = explode('_', $name, 2);  
			    $element_name = $tmp[1];
			    $path =  e_PLUGIN. 'jmelements/default/options_' . $element_name . '.php';
 
			}			
			else {
			  $element_name = $name;
			  $path = e_THEME. $sitetheme. '/elements/options_' . $name . '.php' ;
			}
			
		}
		else return ''; 
		return $path;	
	
	}


	function elements_panels()
	{
		$panels[] = array(
			'name' => LAN_JM_ELEMENTS_LAN_06,
			'mode' => 'header',
			'action' => 'opt1',
			'url' => '',
			'inuse' => true,
		);
		$elements = e107::getDb()->retrieve('jmelement', 'element_id, element_mode, element_setting, element_title, element_order', ' ORDER BY element_order', true);
		foreach($elements as $element)
		{
			$panels[] = array(
				'name' => $element['element_title'],
				'mode' => $element['element_mode'],
				'action' => 'edit&id='.$element['element_id'],
				'url' => 'admin_elements.php'
			);
		}

		return $panels;
	}
}
 