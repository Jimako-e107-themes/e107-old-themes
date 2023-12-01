<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2021 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * e107 Bootstrap Theme Shortcodes.
 *
*/


class theme_shortcodes extends e_shortcode
{

    /**
     * Special Header Shortcode for dynamic menuarea templates.
     * @shortcode {---HEADER---} - it is not working in menu manager
     * @return string
     */
    public function sc_html_header()
    {
        $path = e_THEME."tourmentine/headers/header_default.html";
        
        if (file_exists($path)) {
            $text = file_get_contents($path);
        } else {
            return '';
        }
 
        $text = e107::getParser()->parseTemplate($text);
        return $text;
 
    }

    public function sc_footer()
    {
        $path = e_THEME."tourmentine/footers/footer_default.html";
        
        if (file_exists($path)) {
            $text = file_get_contents($path);
        } else {
            return '';
        }

        if (e_PAGE == 'menus.php') {
            return $text;
        } else {
            $text = e107::getParser()->parseTemplate($text);
            return $text;
        }
    }


    /* term snippet is used for form elements, simpler version with just one param */
    /* {HTML_FRAGMENT: key=slider} */
    /* {HTML_FRAGMENT: key=features} */
    /* {HTML_FRAGMENT: key=aboutus} */
    public function sc_html_fragment($parm = array())
    {
        if (!isset($parm['key'])) {
            return '';
        }
        $key = varset($parm['key'], 'index');
        $theme = e107::getPref('sitetheme');
        $themepath = e_THEME.$theme;
 
        $path = "{$themepath}/html/{$key}.html";
     
        if (file_exists($path)) {
            $text = file_get_contents($path);
        } else {
            return '';
        }

        if (e_PAGE == 'menus.php') {
            $text = e107::getParser()->parseTemplate($text);  //it breaks some themes, careful
            return $text;
        } else {
            $text = e107::getParser()->parseTemplate($text);
            return $text;
        }
    }
 
    /* {NAVBAR_BRANDING} */
    public function sc_navbar_branding()
    {
        $pref_branding = e107::pref('theme', 'branding');
        $pref_branding = 'sitenametag';
         
        switch ($pref_branding) {
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
 
        $text = '<a class="brand" href="{SITEURL}" alt="{SITENAME}">' . $brand . '</a>';
        if ($pref_branding == 'sitenametag') {
            $text .= '<br><div class="supra-sitetag">{SITETAG}</div>';
        }
 
        $text = e107::getParser()->parseTemplate($text);
        return $text;
    }


    /* {NAVBAR_SITELOGO} */
    public function sc_navbar_sitelogo($parm = array())
    {

        // Paths to image file, link are relative to site base
        $tp = e107::getParser();

        $logopref = e107::getConfig('core')->get('sitelogo');
        $logop = $tp->replaceConstants($logopref);
            
        if (vartrue($logopref) && is_readable($logop)) {
            $logo = $tp->replaceConstants($logopref, 'abs');
            $path = $tp->replaceConstants($logopref);
        }

        $opts = array('alt'=>SITENAME, 'class'=>'navbar-brand-img');
    
        $opts['h'] = 0;
        $opts['w'] = 0;

        $image = $tp->toImage($logo, $opts);

        return $image;
    }

    /* {SITESEARCH} */
    public function sc_sitesearch()
    {
        $text = '
		<div class="search-holder">
			<form class="select-form" role="search" method="get" id="searchformnav" action="'.e_HTTP.'search.php">
				<fieldset>
				<input type="search" class="form-control fwNormal bdr" placeholder="'.LAN_SEARCH.'" required id="q" name="q">
				<button class="sub-btn" type="submit"><i class="fa fa-search"></i></button>
				</fieldset>
			</form>	
			<a href="javascript:void(0);" class="search-opener icon"><i class="fa fa-times"></i></a></li>			
		</div>';
        return $text;
    }

 
    /* make contact shortcodes global for using in pages */
    /* {THEME_CONTACT_INFO: type=message} */
    /* {THEME_CONTACT_INFO: type=coordinates} - for google maps */
    
    public function sc_theme_contact_info($parm=null)
    {
        $ipref = e107::getPref('contact_info');
        $type = varset($parm['type']);
 
        if (empty($type) || empty($ipref[$type])) {
            return null;
        }

        $tp = e107::getParser();
        $ret = '';

        switch ($type) {
            case "organization":
                $ret = $tp->toHTML($ipref[$type], true, 'TITLE');
                break;

            case 'email1':
            case 'email2':
            case 'phone1':
            case 'phone2':
            case 'phone3':
            case 'fax':
                $ret = $tp->obfuscate($ipref[$type]);
                break;

            default:
                $ret = $tp->toHTML($ipref[$type], true, 'BODY');
                // code to be executed if n is different from all labels;
        }

        return $ret;
    }
    
    
    public function getFlag()
    {
        return "<i class='multilan flag-".e_LAN."'></i>";
    }
        
        
    /* {THEME_MULTILAN} */
    public function sc_theme_multilan()
    {
        $tp = e107::getParser();
        $sublinks = array();
        $lng = e107::getLanguage();
        $data = $lng->installed('native');
        
        $activeLangs = true;
        $flags = "language_nav_dropflag";
        $text = '';
        foreach ($data as $ln=>$name) {
            if ($lng->isValid($ln)) {
                $redirect = deftrue("MULTILANG_SUBDOMAIN") ? $lng->subdomainUrl($ln) : SITEURL."?elan=".$ln;

                //	$name = $lng->toNative($ln);
                $iso = $lng->convert($ln);
        
                $title = $tp->toHtml($name, '', 'TITLE');
                $active = (e_LANGUAGE == $ln) ? 'active' : '';
                $link = $redirect;
 
                // $text .= ' <li><a href="'.$link.'" class="'.$active.'" ><img src="'.THEME.'images/flags/'.$ln.'.png" alt="flag" class="img-responsive"> '.$title.'</a></li>';
                
                $text .= ' <li><a href="'.$link.'" class="'.$active.'" ><img src="'.THEME_ABS.'images/flags/'.$ln.'.png" alt="flag" ></a></li>';
            }
        }
        
        $start =  '<div class="setting-wrap"><div class="cart-dropdown right"><div class="setting-drop"><hr>
                                    <h3 class="heading3 text-uppercase">LANGUAGE</h3>
									<ul class="list-unstyled lang-list">';

                                     
                            
        $end =  '</ul></div></div></div>';
                           
        return $start.$text.$end ;
    }


    /* {THEME_FLAGS} */
    public function sc_theme_flags()
    {
        $tp = e107::getParser();
        $sublinks = array();
        $lng = e107::getLanguage();
        $data = $lng->installed('native');
        
        $activeLangs = true;
        $flags = "language_nav_dropflag";
        $text = '';
        foreach ($data as $ln=>$name) {
            if ($lng->isValid($ln)) {
                $redirect = deftrue("MULTILANG_SUBDOMAIN") ? $lng->subdomainUrl($ln) : SITEURL."?elan=".$ln;

                //	$name = $lng->toNative($ln);
                $iso = $lng->convert($ln);
        
                $title = $tp->toHtml($name, '', 'TITLE');
                $active = (e_LANGUAGE == $ln) ? 'active' : '';
                $link = $redirect;
 
                // $text .= ' <li><a href="'.$link.'" class="'.$active.'" ><img src="'.THEME.'images/flags/'.$ln.'.png" alt="flag" class="img-responsive"> '.$title.'</a></li>';
                
                $text .= ' <li><a href="'.$link.'" class="'.$active.'" ><img src="'. THEME_ABS.'images/flags/'.$ln.'.png" alt="flag" ></a></li>';
            }
        }
        
        $start =  '<div class="language-wrap d-flex justify-content-center"><ul class="list-unstyled lang-list">';

                                     
                            
        $end =  '</ul></div>';
                           
        return $start.$text.$end ;
    }

    /**
    /* WAY HOW TO DISPLAY MENUS FROM DEFAULT LAYOUT on other layouts
    /* {DEFAULT_MENUAREA=100}
     **/
    public function sc_default_menuarea($parm)
    {
        $path = $parm;
        /* don't render anything for default layout, let it on core, it has to be set in Menu Manager for default layout */
        if (THEME_LAYOUT == e107::getPref('sitetheme_deflayout')) {
            return "";
        }
        $footermenu = e107::getMenu();
        // tell menu manager that you want menus from default layout
        $footermenu->eMenuActive = $this->getDataLegacyTheme(e107::getPref('sitetheme_deflayout'));
        // render default menus and save it for later use
        $text = $footermenu->renderArea($parm);
        // return it back because it has to work without change in Menu Manager
        $footermenu->eMenuActive = $this->getDataLegacyTheme(THEME_LAYOUT);

        return $text;
    }

    /**
     * Function to retrieve Menu data from tables.
     * original: private function getDataLegacy()
     * change: Layout name as parameter
     */
    private function getDataLegacyTheme($menu_layout_field = '')
    {
        $sql = e107::getDb();
        //original:  $menu_layout_field = THEME_LAYOUT!=e107::getPref('sitetheme_deflayout') ? THEME_LAYOUT : "";
        $menu_layout_field = $menu_layout_field != e107::getPref('sitetheme_deflayout') ? THEME_LAYOUT : "";
        $cacheData = e107::getCache()->retrieve_sys("menus_" . USERCLASS_LIST . "_" . md5(e_LANGUAGE . $menu_layout_field));
        $menu_data = e107::unserialize($cacheData);

        $eMenuArea = array();
        if (empty($menu_data) || !is_array($menu_data)) {
            $menu_qry = 'SELECT * FROM #menus WHERE menu_location > 0 AND menu_class IN (' . USERCLASS_LIST . ') AND menu_layout = "' . $menu_layout_field . '" ORDER BY menu_location,menu_order';
            if ($sql->gen($menu_qry)) {
                while ($row = $sql->fetch()) {
                    $eMenuArea[$row['menu_location']][] = $row;
                }
            }
            $menu_data['menu_area'] = $eMenuArea;
            $menuData = e107::serialize($menu_data, 'json');
            e107::getCache()->set_sys('menus_' . USERCLASS_LIST . '_' . md5(e_LANGUAGE . $menu_layout_field), $menuData);
        } else {
            $eMenuArea = $menu_data['menu_area'];
        }
        return $eMenuArea;
    }


    /* under revision just copies from other theme */
       
    /**
     * Optional {---CAPTION---} processing.
     * @shortcode {---CAPTION---}
     * @return string
     */
    public function sc_caption($caption)
    {
        return $caption;
    }

    /**
     * Optional {---BREADCRUMB---} processing.
     * @shortcode {---BREADCRUMB---}
     * @return string
     */
    /*
    function sc_breadcrumb($array)
    {
       $route = e107::route();

       if(strpos($route,'news/') === 0)
       {
           $array[0]['text'] = 'Blog';
       }

       return e107::getForm()->breadcrumb($array, true);

    }
    */

    /**
     * Will only function on the news page.
     * @example {THEME_NEWS_BANNER: type=date}
     * @example, {THEME_NEWS_BANNER: type=image}
     * @example {THEME_NEWS_BANNER: type=author}
     * @param null $parm
     * @return string|null
     */
    public function sc_theme_news_banner($parm=null)
    {
        /** @var news_shortcodes $news */
        $sc = e107::getScBatch('news');
        $news = $sc->getScVar('news_item');

        $ret = '';
        $type = varset($parm['type']);

        switch ($type) {
            case "title":
                $ret = $sc->sc_news_title();
                break;

            case "date":
                $ret = $sc->sc_news_date();
                break;

            case "comment":
                $ret = $sc->sc_news_comment_count();
                break;

            case "author":
                $ret = $sc->sc_news_author();
                break;

            case "image":
            default:
            if (!empty($news['news_thumbnail'])) {
                $tmp = explode(',', $news['news_thumbnail']);

                $opts = array(
                    'w' => 1800,
                    'h' => null,
                    'crop' => false,
                );

                $ret = e107::getParser()->toImage($tmp[0], $opts);
            }
            
        }

        return $ret;
    }

	/* {NEWSDATE_CUSTOM} */
	function sc_newsdate_custom()  // add override of news_summary shortcode
	{
	 $sc = e107::getScBatch('news');  
	 $data = $sc->getScVar('news_item');
	 
	 

	 $day   = strftime("%d", $data['news_datestamp']);
	 $month = strftime("%b", $data['news_datestamp']);
	 $ret   = '<time class="time text-uppercase">'.$month.'<span class="day">'.$day.'</span></time>';
 
	 return $ret;
	}
}
