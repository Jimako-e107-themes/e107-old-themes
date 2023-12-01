<?php

   $theme = e107::getPref('sitetheme');
   $themepath = e_THEME.$theme;
        
 
   e107::getSingleton('alt_e_navigation', $themepath.'/includes/sitelinks_class.php');  
 
	$types = array(
		'main'		=> 1,
		'side'		=> 2,
		'footer'	=> 3,
		'alt'		=> 4,
		'alt5'		=> 5,
		'alt6'		=> 6,
	);


	$category = 1;
	$tmpl = 'main';
	if (!is_array($parm))
	{
		$category = isset($types[$parm]) ? $types[$parm] : 1;
		$tmpl = $parm ?: 'main';
	}
	elseif (!empty($parm))
	{
		$category = 1;
		$tmpl = 'main';

		if (!empty($parm['type']))
		{
			$cat = $parm['type'];
			$category = varset($types[$cat], 1);
		}

		if (!empty($parm['layout']))
		{
			$tmpl = $parm['layout'];
		}
	}

	$nav			= new alt_e_navigation;

	$template		= e107::getCoreTemplate('navigation', $tmpl);	
	$data 			= $nav->initData($category,$parm);
 
	$text = $nav->render($data, $template);
 