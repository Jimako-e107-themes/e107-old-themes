<?php
if (!defined('e107_INIT')) { exit; }
require_once("../../../class2.php");
 
/* Notes for future re-using
   Always use prefs as first option, it saves time
*/ 
e107::lan('jmelements');

/******  ALL CONFIGURATION  ***************************************************/

define('JMELEMENTS_OPTIONS', e_PLUGIN . 'jmelements/inc/jmelements_options.php');
require_once(JMELEMENTS_OPTIONS);

/******  ALL CONFIGURATION  ***************************************************/
class jmelements_adminArea extends e_admin_dispatcher
{
  	use JMElementsTrait;          
	protected $adminMenu = array();
	protected $menuTitle = LAN_JM_ELEMENTS_LAN_02;
	
  function init()
  {
  	$panels = $this->elements_panels();
 
    $this->adminMenu['main/list'] = array('caption'=>LAN_JM_ELEMENTS_LAN_03, 'perm' => 'P', 'url'=>'admin_config.php');
    $this->modes['main'] = array(
    				'controller' => 'jmelement_ui',
    				'path' => null,
    				'ui' => 'jmelement_form_ui',
    				'uipath' => null
    );
        
    $panels = $this->elements_panels();
 
         
  	foreach($panels as $value)
  	{
    	$mode = $value['mode'];
        $action = $value['action'];
        if (empty($action))
        {
			$action = 'prefs';
        } 
    
		$menu = $mode . '/'.$action;
		$this->adminMenu[$menu] = array(
			'caption' => $value['name'],
			'perm' => 'P',
			'url' => $value['url']
		);
        
        if($mode != 'header') {
        
         $this->adminMenu[$menu] = array(
  				'caption' => $value['name'],
  				'perm' => 'P',
  				'url' => $value['url']
  			);
        
    			$this->modes[$mode] = array(
    				'controller' => 'jmelement_ui',
    				'path' => null,
    				'ui' => 'jmelement_form_ui',
    				'uipath' => null
    			);
        }
        else {     
          $this->adminMenu[$menu] = array(
  				'header' => $value['name'] 
  			);
        
      }  		 
  	}
  }
}