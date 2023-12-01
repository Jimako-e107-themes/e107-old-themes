<?php

if (!defined('e107_INIT')) { exit; }

e107::lan('theme', 'admin',true);

// Theme Configuration File.
class theme_config implements e_theme_config
{

	function config($type='front')
	{

		$brandingOpts = array('sitename'=>LAN_THEMEPREF_04, 'logo' => LAN_THEMEPREF_05, 'sitenamelogo'=>LAN_THEMEPREF_06);

		$fields = array(
			'branding'          => array('title'=>LAN_THEMEPREF_00, 'type'=>'dropdown', 'writeParms'=>array('optArray'=> $brandingOpts)),
	 
		);

		return $fields;

	}


	function help()
	{
	 	return '';
	}
}

/*
// Custom Methods
class theme_config_form extends e_form
{

	function custom_method($value,$mode,$parms) // named the same as $fields key.(eg. 'branding') Used when type = 'method'
	{

		return $this->text('custom_method', $value);

	}

}
*/