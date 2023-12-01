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
 
$sitetheme = e107::getPref('sitetheme');

require_once(e_THEME.$sitetheme."/shortcodes/default_shortcodes.php");

e107::getSingleton('theme_settings', e_THEME.$sitetheme.'/theme_settings.php');  


class theme_shortcodes extends default_theme_shortcodes
{
	// public $override = true;
	public $forumpref;
	public $forum;
	
	function __construct()
	{
		$this->forumpref = (array) e107::pref('forum');
 		
	}
    
    /**
	 * Special Header Shortcode for dynamic menuarea templates.
	 * @shortcode {---HEADER---}
	 * @return string
	 */
     
	public function sc_header()
	{
        $text = ''; 
    	$layout =  preg_replace('/[\W]/', '', THEME_LAYOUT);     
        
        $parm['type'] =  'header'; 
	    $parm['key']  =  'default';
        $parm['path'] =  'header_default.html';    

        $tmp = theme_settings::get_jmlayouts();
 
        if($tmp[THEME_LAYOUT]['layout_header']) {
            $parm['file'] =  $tmp[THEME_LAYOUT]['layout_header'];
        }
 
        $text = $this->sc_layout_header($parm);  	 
        return $text;   
    }
    
	/**
	 * Special Footer Shortcode for dynamic menuarea templates.
	 * @shortcode {---FOOTER---}
	 * @return string
	 */
	public function sc_footer()
	{
        $text = ''; 
    	$layout =  preg_replace('/[\W]/', '', THEME_LAYOUT);     
        
        $parm['type'] = 'footer'; 
	    $parm['key']  =  'default';
        $parm['path'] =  'footer_default.html';    

        $tmp = theme_settings::get_jmlayouts();
 
        if($tmp[THEME_LAYOUT]['layout_footer']) {
            $parm['file'] =  $tmp[THEME_LAYOUT]['layout_footer'];
        }
 
        $text = $this->sc_layout_footer($parm);  	 
        return $text;   
    }
   

	/* {NAVBAR_BRANDING} */
	function sc_navbar_branding()
	{
		$pref_branding = e107::pref('theme', 'branding');

		switch ($pref_branding)
		{
			case 'logo':
				$brand = '{NAVBAR_SITELOGO: h=60}';
				break;
			//class="d-inline-block align-text-top"
			case 'sitenamelogo':
				$brand = "{NAVBAR_SITELOGO: h=60} " . SITENAME;
				break;

			case 'sitename':
			case 'sitenametag':
			default:
				$brand = SITENAME;
				break;
		}
 
		$text = '<a class="navbar-brand" href="{SITEURL}" alt="{SITENAME}">' . $brand . '</a>';
		if($pref_branding == 'sitenametag')  {
			$text .= '<div class="dtitle">{SITETAG}</div>';

		}
 
		$text = e107::getParser()->parseTemplate($text);
		return $text;
	}

	function sc_navbar_sitelogo($parm = array())
	{
 
		// Paths to image file, link are relative to site base
		$tp = e107::getParser();

		$logopref = e107::getConfig('core')->get('sitelogo');
		$logop = $tp->replaceConstants($logopref);
			
		if(vartrue($logopref) && is_readable($logop))
		{
			$logo = $tp->replaceConstants($logopref,'abs');
			$path = $tp->replaceConstants($logopref);
		}

		$dimensions = array();
		
		if((isset($parm['w']) || isset($parm['h'])))
		{
			//
			$dimensions[0] = isset($parm['w']) ? $parm['w'] : 0;
			$dimensions[1] = !empty($parm['h']) ? $parm['h'] : 0;
 
			if(empty($parm['noresize']) && !empty($logopref)) // resize by default - avoiding large files.
			{
				 $logo = $logopref;
			}
		}
 
		$opts = array('alt'=>SITENAME, 'class'=>'sitelogo d-inline-block align-text-middle');

		if(!empty($dimensions[0]))
		{
			$opts['w'] = $dimensions[0];

		}

		if(!empty($dimensions[1]))
		{
			$opts['h'] = $dimensions[1];
		}
 
		$image = $tp->toImage($logo,$opts);
 
		return $image;
	}
    
    
    /* {ALT_NAVIGATION} */
    /**
     * @param null $parm
     * @param string ['type'] main|side|footer|alt|alt5|alt6 (the data)
     * @param string ['layout'] main|side|footer|alt|alt5|alt6| or custom template key.  (the template)
     * @return string
    **/
    
    /*  fix for 3 level navigation menu, first time used in ASP theme 12/2017 */
 
    function sc_alt_navigation($parm = NULL) {
    
        $theme = e107::getPref('sitetheme');
        $themepath = e_THEME.$theme;
        
        include_once(e_THEME.$theme.'/shortcodes/navigation.php');
        return $text;
        
    }
 
 
}



 