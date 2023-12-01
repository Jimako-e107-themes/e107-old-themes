<?php

if (!defined('e107_INIT')) {
    exit;
}
 

if (defined('e_PAGE')) {
    if (e_PAGE == 'login.php' && !e107::getPref('membersonly_enabled')) {
        define('e_IFRAME', '0');
    }
}

$sitetheme = e107::getPref('sitetheme');
e107::getSingleton('theme_settings', e_THEME.$sitetheme.'/theme_settings.php');  

e107::lan('theme');

class theme implements e_theme_render
{
    public function init()
    {
       
        ////// Your own css fixes ////////////////////////////////////////////////////
        define('CORE_CSS', false);
  
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
        e107::css('theme', 'css/bootstrap.min.css');
        e107::css('theme', 'css/style.min.css');
        e107::css('theme', 'css/main_custom.css');
    }

    public function register_js()
    {
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
            case 'nocaption':
                $style = 'nocaption' ;
            break;
        }

        switch ($style) {
            case 'nocaption':
            case 'main':
                echo   $text  ;
            break;

            case 'sidebar':
                echo 
                '<div class="block">
                    <div class="title">'.$caption.'</div>
                    <div class="content">'.$text.'</div>
                </div>';
            break;
            case 'footerbar':
                echo '
					<h1 class="text-center dtitle">'.$caption.'</h1>
					<div class="footerbar">'.$text.'</div>';
            break;
            case 'topmenu':
            case 'bottommenu':
            case 'full':
            case 'default':
            default:
				if(!empty($caption))
				{
					echo '<h1 class="h3 text-center dtitle hometoptitle">'.$caption.'</h1>';
				}

                echo $text;
                break;
        }
        return;
    }
}
