<?php
if ( ! defined('e107_INIT')) { exit(); }


$sitetheme = e107::getPref('sitetheme');
e107::getSingleton('theme_settings', e_THEME.$sitetheme.'/theme_settings.php');  

e107::lan('theme');

class theme implements e_theme_render
{
    public function init()
    {
 
		// defines 
 
		define("THEME_DISCLAIMER", "<br /><i>".MAW_THEME_1."</i>");
		define("USER_WIDTH", "width:100%"); 
		define ("NEXTPREV_NOSTYLE", "TRUE");
		define("IMODE", "dark");

		// News Categories Menu
		define('NEWSCAT_COLS',false);			
		// Othernew + Othernus2
		define('OTHERNEWS_COLS',false); // no tables, only divs. 
		define('OTHERNEWS_LIMIT', 10); // Limit to 5. 
		define('OTHERNEWS2_COLS',false); // no tables, only divs. 
		define('OTHERNEWS2_LIMIT', 5); // Limit to 5. 
		// Comments
		define('COMMENTLINK', e107::getParser()->toGlyph('fa-comment'));
		define('COMMENTOFFSTRING', '');
		// Personal Messages Menu
		define("PM_INBOX_ICON", "<i class='fa fa-envelope' style='margin-right:3px;'></i>");
		define("PM_OUTBOX_ICON", "<i class='fa fa-envelope-o' style='margin-right:3px;'></i>");
		define("BULLET", e107::getParser()->toGlyph('fa-check'));


        ////// Your own css fixes ////////////////////////////////////////////////////
        define('CORE_CSS', false);
        e107::css('theme', 'e107.css');

        ////// Theme meta tags /////////////////////////////////////////////////////////
        $this->set_metas();

        /////// Theme css  /////////////////////////////////////////////////////////////
        $this->register_css();

        /////// Theme js  /////////////////////////////////////////////////////////////
        $this->register_js();

        /////// Theme fonts ///////////////////////////////////////////////////////////
        $this->register_fonts();

        /////// Theme icons ///////////////////////////////////////////////////////////
        $this->register_icons();

        $this->getInlineCodes();
    }

    public function set_metas()
    { 
        e107::meta('viewport', 'width=device-width, initial-scale=1.0');
    }

    public function register_css()
    {
		//e107::css('url','https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cyborg/bootstrap.min.css');
		//e107::css('url','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
		//e107::css('theme','maw/css/ie10-viewport-bug-workaround.css');

		e107::css('theme', 'css/bootstrap.css'); 
        
		e107::css('theme', 'css/cyborg_style.css'); 

 

	//e107::css('theme', 'e107.css');
    //    e107::css('theme', 'css/style.css');
    //    e107::css('theme', 'css/main_custom.css');
    }

    public function register_js()
    {
		//e107::js('theme', 'vendors/bootstrap/bootstrap.bundle.min.js');
		e107::js('theme', 'custom.js');
    }

    public function register_fonts()
    {
    }

    public function register_icons()
    {
    }

    public function getInlineCodes()
    {
        /* override with theme prefs */
        $inlinecss = e107::pref('theme', 'inlinecss', false);
        if ($inlinecss) {
            e107::css('inline', $inlinecss);
        }
        $inlinejs = e107::pref('theme', 'inlinejs');
        if ($inlinejs) {
            e107::js('footer-inline', $inlinejs);
        }
    }

    public function tablestyle($caption, $text, $mode = '', $options = array())
    {
        $style = varset($options['setStyle'], 'default');

        if (true) {
            echo '
			<!-- tablestyle initial:  style='.$style.'  mode='.$mode.'  UniqueId='.varset($options['uniqueId']).' -->
			';
            echo "\n<!-- \n";

            echo json_encode($options, JSON_PRETTY_PRINT);

            echo "\n-->\n\n";
        }

        switch ($mode) {
            case 'news':
	 
				$style = "nocaption";
            break;
        }
        if (true) {
            echo '
			<!-- tablestyle initial:  style='.$style.'  mode='.$mode.'  UniqueId='.varset($options['uniqueId']).' -->
			';
            echo "\n<!-- \n";

            echo json_encode($options, JSON_PRETTY_PRINT);

            echo "\n-->\n\n";
        }
        switch ($style) {
			case "nocaption": 
				echo $text;
				break;
			case "no-caption":
				echo "<div class='menus ".$mode." card no-caption'><div class='text clearfix'>$text</div></div>\n";
				break;
				default:
				echo "<div class='menus ".$mode." card default'><h4 class='menus-caption'>$caption</h4>\n<div class='text clearfix'>$text</div></div>\n";
				break;
        return;
    	}
	}	
}
 
 
  