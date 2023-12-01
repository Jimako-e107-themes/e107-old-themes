<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes. 
 *
*/


class theme_shortcodes extends e_shortcode
{
	// public $override = true;

	function __construct()
	{
		
	}
 
	/* {NAVBAR_BRANDING} */
	function sc_navbar_branding()
	{
		$pref = e107::pref('theme', 'branding');

		switch ($pref)
		{
			case 'logo':
				$brand = '{SITELOGO: h=30}';
				break;

			case 'sitenamelogo':
				$brand = "{SITELOGO: h=30}" . SITENAME;
				break;

			case 'sitename':
			default:
				$brand = SITENAME;
				break;

		}

		$text = '<a class="navbar-brand" href="{SITEURL}" alt="{SITENAME}">' . $brand . '</a>';
		$text = e107::getParser()->parseTemplate($text);
		return $text;
	}
  
	// {SECTION_ICON_BOXES}
	function sc_section_icon_boxes() { 
   /* custom shortcode for openmind theme using e107 menus */	
	$text = '
	<section>
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="block block-light block-center">
							{CMENU=icon-menu-1}
						</div>
					</div>
					<div class="col-md-3">
						<div class="block block-light block-center">
							{CMENU=icon-menu-2}
						</div>
					</div>
					<div class="col-md-3">
						<div class="block block-light block-center">
							{CMENU=icon-menu-3}
						</div>
					</div>
					<div class="col-md-3">
						<div class="block block-light block-center">
							{CMENU=icon-menu-4}
						</div>
					</div>
				</div>
			</div>
		</section>';
		$text = e107::getParser()->parseTemplate($text);
	   return $text;
	}

   	//{SITESEARCH}
	 function sc_sitesearch() { 
		$text = '
			<form class="search" method="get"   action="'.e_HTTP.'search.php"  >'; 
		$text .= "<input type='hidden' name='r' value='0' data-original-title='' /> ";
		$text .='  
			<input type="search" class="search" placeholder="'.LAN_SEARCH.'" id="q" name="q">
      <button type="submit" value=""><img src="'.THEME_ABS.'assets/img/search.png" alt="'.LAN_SEARCH.'"></button>
			</form>';
		return $text;
	}
}
 
?>
