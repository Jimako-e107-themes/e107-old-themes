<?php
if (!defined('e107_INIT')) { exit; }
require_once("../../../class2.php");
 
/* Notes for future re-using
   Always use prefs as first option, it saves time
*/ 
e107::lan('jmlayouts',true);
 
// getTemlate() loads bootstrap3, getLayouts() only first level of array keys

// don't use adminMenuAliases, it works weird way for contact mode  
 
class jmlayouts_adminArea extends e_admin_dispatcher
{
            
	protected $adminMenu = array();
	protected $menuTitle = 'Layouts';

	protected $adminMenuAliases = array(
		'main/edit'	=> 'main/list'
	);
  
	var $sitetheme = '';
  	
  function init()
  {
 
	$this->sitetheme = e107::getPref('sitetheme');
    $this->adminMenu['main/list'] = array('caption'=>LAN_JM_THEME_MENU_LAN_01, 'perm' => 'P', 'url'=>'admin_config.php');
    $this->modes['main'] = array(
    				'controller' => 'jmlayouts_ui',
    				'path' => null,
    				'ui' => 'jmlayouts_form_ui',
    				'uipath' => null
	);
	
	$this->adminMenu['navbar/opt1'] = array('header'=>LAN_JM_THEME_MENU_LAN_02); 
 
	$where = ' ORDER BY layout_order';
	$jmlayouts = e107::getDb()->retrieve('jmlayout', 'layout_id, layout_mode, layout_title', $where, true); 
 
    foreach($jmlayouts as $value)  {

 
		$mode = preg_replace('/[\W]/', '', $value['layout_mode']);
		$actionfull = 'edit&id='.$value['layout_id'];
		 
		$action = 'edit';

		$menu = $mode . '/'.$action;

		$this->adminMenu[$menu] = array(
			'caption' => $value['layout_title'],
			'perm' => 'P',
			'action' => $action,
			'url' => 'admin_layouts.php',
			'link' => 'admin_layouts.php?mode='.$mode .'&amp;action='.$actionfull 
		);
 
		$this->modes[$mode] = array(
			'controller' => 'jmlayouts_ui',
			'path' => null,
			'ui' => 'jmlayouts_form_ui',
			'uipath' => null
	);


    	} 
    $this->modes['custom'] = array(
    				'controller' => 'jmlayouts_ui',
    				'path' => null,
    				'ui' => 'jmlayouts_form_ui',
    				'uipath' => null
	);
     
 
   

  $this->adminMenu['custom/edit'] =  array('caption'=> LAN_JM_THEME_MENU_LAN_05, 'perm' => 'P', 'url'=>'admin_options.php', 'action' => 'edit'); 
 
  $this->adminMenu['navbar/opt2'] = array('header'=>LAN_JM_THEME_MENU_LAN_03);  
  $this->adminMenu['menus/list'] =  array('caption'=> LAN_JM_THEME_MENU_LAN_04, 'perm' => 'P', 'url'=>'admin_menus.php');   
  $this->adminMenu['divider2'] = array('divider'=>	true);
  
 
  }
}