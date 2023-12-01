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
				
class jmelement_ui extends e_admin_ui
{
	var $sitetheme = '';
	public function __construct($request, $response, $params = array())
	{
		parent::__construct($request, $response, $params);
		
		/* settings */
		$this->sitetheme = e107::getPref('sitetheme');
	}


	protected $pluginTitle		= LAN_JM_ELEMENTS_LAN_01;
	protected $pluginName		= 'jmelements';
	//	protected $eventName		= 'jmelements-jmelement'; // remove comment to enable event triggers in admin. 		
	protected $table			= 'jmelement';
	protected $pid				= 'element_id';
	protected $perPage			= 20; 
	protected $batchDelete		= true;
	protected $batchExport     = true;
	protected $batchCopy		= true;
 
	protected $sortField		= 'element_order';
	protected $listOrder		= 'element_order ASC';

		protected $fields 		= array (
           'checkboxes' => array(
        	'title' => '',
        	'type' => null,
        	'data' => null,
        	'width' => '5%',
        	'thclass' => 'center',
        	'forced' => true,
        	'class' => 'center',
        	'toggle' => 'e-multiselect',
        	'readParms' => array() ,
        	'writeParms' => array() ,
        ) , 
        'element_id' => array(
        	'title' => LAN_ID,
        	'data' => 'int',
        	'width' => '5%',
        	'help' => '',
        	'readParms' => array() ,
        	'writeParms' => array() ,
        	'class' => 'left',
        	'thclass' => 'left',
        ) , 
        'element_image' => array(
        	'title' => LAN_PREVIEW,
        	'type' => 'image',
        	'data' => 'str',
        	'width' => '110px',
        	'filter' => false,
        	'inline' => false,
        	'validate' => false,
        	'help' => '',
        	'readParms'=>'thumb=200&thumb_urlraw=0&thumb_aw=200',
        	'writeParms'=> array(
             'post' => "<div class='bg-info' style='color: white;padding: 5px;'> For better imagination how this setting will (should) look  </div>"
           ),
        	'class' => 'left',
        	'thclass' => 'left',
        ) ,
         'element_mode' => array(
        	'title' => LAN_JM_ELEMENTS_LAN_11,
        	'type' => 'text',
        	'data' => 'str',
        	'width' => 'auto',
        	'filter' => true,
        	'inline' => true,
        	'help' => '',
        	'readParms' => array() ,
        	'writeParms' => array(
          'pattern'=>'^[a-z0-9]*',
          'post' => "<div class='bg-info' style='color: white;padding: 5px;'> Code for unique content. Only numbers and letters are allowed. </div>"
          ),
        	'class' => 'left',
        	'thclass' => 'left',
        ) , 
        'element_setting' => array(
        	'title' => LAN_JM_ELEMENTS_LAN_12,
        	'type' => 'dropdown',
        	'data' => 'str',
        	'width' => 'auto',
        	'filter' => true,
        	'inline' => true,
        	'validate' => true,
        	'help' => '',
        	'readParms' => array() ,
        	'writeParms' => array(
           'post' => "<div class='bg-info' style='color: white;padding: 5px;'> Name of setting file. It determines fields and content structure. F.e if you have more info boxes, all can have the same structure. No all fields have to be used.</div>"
          ) ,
        	'class' => 'left',
        	'thclass' => 'left',
        ) ,        
      'element_title' => array(
        	'title' => LAN_JM_ELEMENTS_LAN_13,
        	'type' => 'text',
        	'data' => 'str',
        	'width' => 'auto',
        	'filter' => true,
        	'inline' => true,
        	'validate' => true,
        	'help' => '',
        	'readParms' => array() ,
        	'writeParms' => array('size'=>'xlarge',
          'post' => "<div class='bg-info' style='color: white;padding: 5px;'> Name of unique content in admin left menu.  </div>"
          ) ,
        	'class' => 'left',
        	'thclass' => 'left',
        ) ,
        'element_description' => array(
        	'title' => LAN_DESCRIPTION,
        	'type' => 'textarea',
        	'data' => 'str',
        	'width' => '40%',
        	'help' => '',
          'inline' => true,
        	'readParms' => array() ,
        	'writeParms' => array('size'=>'block-level',
          'post' => "<div class='bg-info' style='color: white;padding: 5px;'> Just place for taking notes for better organizing </div>"
          ) ,
        	'class' => 'left',
        	'thclass' => 'left',
        ) ,
         'element_items' => array(
        	'title' => LAN_JM_ELEMENTS_LAN_14,
        	'type' => 'number',
        	'data' => 'int',
        	'width' => 'auto',
        	'help' => '',
          'inline' => true,
          'filter' => false,
        	'readParms' => array() ,
        	'writeParms' => array(
          'post' => "<div class='bg-info' style='color: white;padding: 5px;'> If element uses repeated items, you can change the number of them here  </div>"
           ) ,
        	'class' => 'left',
        	'thclass' => 'left',
        ) ,
        'element_template' => array(
        	'title' => LAN_JM_ELEMENTS_LAN_15,
        	'type' => 'dropdown',
        	'data' => 'str',
        	'width' => 'auto',
        	'filter' => true,
        	'inline' => true,
        	'validate' => false,
        	'help' => '',
        	'readParms' => array() ,
        	'writeParms' => array('size'=>'xlarge',
          'post' => "<div class='bg-info' style='color: white;padding: 5px;'> template name, it can be overriden in shortcode .  </div>"
          ) ,
        	'class' => 'left',
        	'thclass' => 'left',
        ) ,      
        
        
        'element_order'           => array (  
        'title' => LAN_ORDER,  
        'type' => 'number',  
        'data' => 'int',  
        'width' => 'auto',  
        'help' => '',  
        'readParms' =>  array (),  
        'writeParms' =>  array (),  
        'class' => 'left',  
        'thclass' => 'left' 
        ),      
 
			'element_active' => array ( 'title' => LAN_ACTIVE,
			'type' => 'boolean',
			'data' => 'int',
			'width' => 'auto',  
      'batch'=> true,
			'readParms' => array (),
		  'writeParms' => array (),
			'class' => 'left',
			'thclass' => 'left',
			),
      
         
        'options' => array(
        	'title' => LAN_OPTIONS,
        	'type' => "method",
        	'data' => null,
        	'width' => '10%',
        	'thclass' => 'center last',
        	'class' => 'center last',
        	'forced' => true,
          'readParms' =>  array (), 
        	'writeParms' => array() ,
			) , 
	         
 
 

		//	'options'                 => array (  'title' => LAN_OPTIONS,  'type' => null,  'data' => null, 
    // 'width' => '10%',  'thclass' => 'center last',  'class' => 'center last',  'forced' => true,  'readParms' =>  array (),  'writeParms' =>  array (),),
		);
		
	protected $fieldpref = array('element_image', 'element_title', 'element_mode', 'element_setting', 'element_template', 'element_items', 'element_active');
	

	//	protected $preftabs        = array('General', 'Other' );
	protected $prefs = array(
	); 

	
	public function init()
	{
		
    //old way
		$templates = e107::getLayouts('jmelements','jmelements', 'front', null, true, false);
     
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
 
        
		$this->fields['element_template']['writeParms']['optArray'] = $templates;

		/**********************************************************************/
		//display available options sets
		$files = scandir(e_THEME. $this->sitetheme.'/elements');
  
		// otherwise 'post' is used with no values, bug?
		$settinglist[] = '';

		foreach($files as $file)
		{
		
			if(is_dir(e_THEME. $this->sitetheme.'/elements/'.$file) || $file === '.' || $file === '..')
			{
				continue;
			}

			if (strpos($file, "options_") === 0)   {
				$fname = str_replace(".php","",$file);
				$fname = str_replace("options-","",$fname);
				$fname = str_replace("options_","",$fname);
				$settinglist[$fname] = $file;
			}
		}
		
		//if support custom elements, todo add prefs 
		if(true)  {
			//display available options sets
			$files = scandir(e_THEME. $this->sitetheme.'/elements/custom');
			 
			// otherwise 'post' is used with no values, bug?
	 
			foreach($files as $file)
			{
			
				if(is_dir(e_THEME. $this->sitetheme.'/elements/custom/'.$file) || $file === '.' || $file === '..')
				{
					continue;
				}
	  
				if (strpos($file, "options_") === 0)   {
					$fname = str_replace(".php","",$file);
					$fname = str_replace("options-","",$fname);
					$fname = str_replace("options_","",$fname);
					$settinglist["custom_".$fname] = "custom/".$file;
				}
			}		
		
		}
		
		//if support default elements, todo add prefs 
		if(true)  {
			//display available options sets
			$files = scandir(e_PLUGIN. '/jmelements/default/');
			 
			// otherwise 'post' is used with no values, bug?
	 
			foreach($files as $file)
			{
 
				if(is_dir(e_PLUGIN. '/jmelements/default/'.$file) || $file === '.' || $file === '..')
				{
					continue;
				}
	  
				if (strpos($file, "options_") === 0)   {
					$fname = str_replace(".php","",$file);
					$fname = str_replace("options-","",$fname);
					$fname = str_replace("options_","",$fname);
					$settinglist["default_".$fname] = "default/".$file;
				}
			}		
		
		}
 
		$this->fields['element_setting']['writeParms']['optArray'] = $settinglist; 
		$this->postFilterMarkup = $this->AddButton(); 

	}

	function AddButton()
	{
		$text = "</fieldset></form><div class='e-container'>
		<table id='addbutton' style='".ADMIN_WIDTH."' class='table adminlist table-striped'>";
		$text .=  
		'<a href="admin_config.php?mode=main&action=create"  
		class="btn batch e-hide-if-js btn-primary"><span>'.LAN_JM_ELEMENTS_LAN_18.'</span></a>';
		$text .= "</td></tr></table></div><form><fieldset>";
		return $text;
	}	
		
	// ------- Customize Create --------
	
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

	/**
	 * Override the default Options field.
	 *
	 * @param $parms
	 * @param $value
	 * @param $id
	 * @param $attributes
	 *
	 * @return string
	 */
	function options($parms, $value, $id, $attributes)
	{                      
		$text = '';
   
 		$mode 	= $this->getController()->getListModel()->get('element_mode');
		$id			= $this->getController()->getListModel()->get('element_id');
			
		if($attributes['mode'] == 'read')
		{
		  $att['readParms'] = 'sort=1';
		  $text = "<div class='btn-group'>";
		  
			$level = 1;

 			$linkQ = e_PLUGIN."jmelements/admin/admin_elements.php?mode={$mode}&action=edit&id={$id}";	
			$level_image =  '<img src="'.e_PLUGIN. 'jmelements/images/_icon_32.png" class="icon" alt="" style="margin-left: '.($level * 20).'px" />&nbsp;'  ;
  
			$text .=   "<a class='btn btn-default' href='".$linkQ."' >".$level_image."</a>"  ;
  		
			
			$text .= $this->renderValue('options',$value,$attributes,$id);
			
			$text .= "</div>";							
		}	          
		return $text;  
	}		

}		
		
		
new jmelements_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;

