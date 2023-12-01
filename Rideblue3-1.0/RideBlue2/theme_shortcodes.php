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
		$pref_branding = e107::pref('theme', 'branding');

		switch ($pref_branding)
		{
			case 'logo':
				$brand = '{SITELOGO: h=60}';
				break;

			case 'sitenamelogo':
				$brand = "{SITELOGO: h=60}" . SITENAME;
				break;

			case 'sitename':
			case 'sitenametag':
			default:
				$brand = SITENAME;
				break;


		}

		$text = '<h1 class="dtitle"><a  href="{SITEURL}" alt="{SITENAME}">' . $brand . '</a></h1>';
		if($pref_branding == 'sitenametag')  {
			$text .= '<h2 class="dtitle">{SITETAG}</h2>';

		}
 
		$text = e107::getParser()->parseTemplate($text);
		return $text;
	}

 
 
}



 