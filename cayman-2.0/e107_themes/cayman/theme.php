<?php

if(!defined('e107_INIT'))
{
	exit();
}

if(defined("e_PAGE")) {
	if(e_PAGE == "login.php" && !e107::getPref('membersonly_enabled')) {
	   define('e_IFRAME', '0');
	}   
}

e107::lan("theme");
 
class theme implements e_theme_render {
 
	function init() {

        $this->sitetheme = e107::getPref('sitetheme');
        e107::getSingleton('theme_settings', e_THEME.$this->sitetheme.'/theme_settings.php'); 
            
        ////// Your own css fixes ////////////////////////////////////////////////////
		define("CORE_CSS", false);
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
		e107::meta("viewport", "width=device-width, initial-scale=1");
	}

	public function register_css()
	{
		
		e107::css('theme', 'assets/css/menu.css');
		e107::css('theme', 'assets/css/animate.css');
		e107::css('theme', 'cayman-style.css');
		e107::css('theme', 'style.css');  //with color/skin variations it has to be loaded manually
	}

	public function register_js()
	{
		e107::js('url','https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js','','','<!--[if lt IE 9]>','');
		e107::js('url','https://oss.maxcdn.com/respond/1.4.2/respond.min.js','','','','<![endif]-->');
 
		e107::js('theme', 'assets/js/plugins.js', 'jquery');
		e107::js('theme', 'assets/js/parallax.js', 'jquery');
		e107::js('theme', 'assets/js/countto.js', 'jquery');
		e107::js('theme', 'assets/js/portfolio.js', 'jquery');		

		if(THEME_LAYOUT == 'home') {
		 	e107::js('theme', 'assets/js/animheader.js', 'jquery');
		}
 
		e107::js('theme', 'assets/js/scripts.js', 'jquery');	
		e107::js('theme', 'fix.js', 'jquery');
        
		if(THEME_LAYOUT == 'book') {
			e107::js('theme', 'assets/js/book.js', 'jquery');
		}
	}
 
	public function register_fonts()
	{
		e107::css('url', 'https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic');		
	}

	public function register_icons()
	{
	}

	public function getInlineCodes()
	{
		$inlinecss = e107::pref('theme', 'custom_css', false);
		if ($inlinecss) {
			e107::css("inline", $inlinecss);
		}
		$inlinejs = e107::pref('theme', 'inlinejs');
		if ($inlinejs) {
			e107::js("footer-inline", $inlinejs);
		}
	}	

    
	function tablestyle($caption, $text, $mode='', $options = array())
	{

		$style = varset($options['setStyle'], 'default');
		$id = $options['uniqueId'];

		if(defined(e_DEBUG) && e_DEBUG) {
			echo "
            <!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->       
            ";
			
		}

		switch($mode) 
		{
			case "wm":
				$style = "wm";
			break;  
			case "news":
				if($style=="main") {
					$style = "none";
				}
				elseif($id == "news-view-default") 
				{
					$caption = '';
				}		 
			break;
			case "comment":
				$style = "section";	
			break;
			case "signup":
			case "coppa":
			case "fpw":
			case "login_page":
				$style = "singleform";	
			break;
			case "contact-form":
			case "pagesearch":
				$style = $mode;
			break;
			case "cpage":
			case "cpage-page-list":
			case "gallery-index-category":
			case "gallery-index-list":
			case "cpage-chapter-list":		
			  $style = 'none';
			break;
		}
 
		if(defined(e_DEBUG) && e_DEBUG) {
			echo "
            <!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->       
            ";
		}
	 
		switch($style)
		{
			case "sidebar":
				echo '<div class="sidebar-menu wow flipInY text-center animated">';
				if(!empty($caption))
				{ 
					echo '<h4>' . $caption . '</h4>';
				}
				echo $text;
				echo '</div>';
			break;

			case "footer":
				if(!empty($caption))
				{ 
					echo '<h3 class="upper widget-title">' . $caption . '</h3>';
				}
				echo $text;
			break;

			case "wm":
				echo '<section class="page-wrapper gray">
				<div class="container">';
				if(!empty($caption))
				{ 
					echo '<h2 class="title">' . $caption . '</h2>';
				}
				echo '<div class="row"><div class="col-md-12">';
				echo '<div class="lead text-center">';
				echo $text;				
				echo '</div></div></div>';
				echo '</div></section>';
			break;

			case "main":
				echo '<section class="page-wrapper" >
				<div class="container">';
				if(!empty($caption))
				{ 
					echo '<h2 class="title">' . $caption . '</h2>';
				}
				echo $text;				
			 
				echo '</div></section>';
			break;
 
			case "singleform":
		 
				if(!empty($caption))
				{ 
					echo '<h2 class="title">' . $caption . '</h2>';
				}
				echo '<div class="container">';
				echo '<div class="row text-center">';
				echo '<div class="col-md-8 col-md-offset-2">';
				echo $text;				
			    echo '</div></div></div>';
		 
			break;

			case "section":
				echo '<section class="page-wrapper gray">';
				if(!empty($caption))
				{ 
					echo '<h4 class="title">' . $caption . '</h4>';
				}								
				echo $text;			
				echo '</section>';

			break;

			case "contact-form":
				echo '<section id="contact" class="page-wrapper gray">';
				echo '<div class="regularform onwhite w680 wow flipInY text-center">';
				if(!empty($caption))
				{ 
					echo '<h2 class="title">' . $caption . '</h2>';
				}		
				echo $text;				
				echo '</div>';
				echo '</section>';
			break;

			case "default":
				if(!empty($caption))
				{ 
					echo '<h2 class="title">' . $caption . '</h2>';
				}
				echo $text;
			break;

			case "pagesearch":
				
				if(!empty($caption))
				{ 
					echo '<h2>';
					echo '<span class="text2 big wow zoomIn transformnone" data-wow-delay="0.4s" data-wow-duration="2s">';
					echo $caption;
					echo '</h2>';
					
				}
				echo '<br/>';
				echo '<div class="hero-box col-sm-8 col-sm-offset-2">';	
				echo $text;	
				echo '</div>';			
				
			break;

			case "none":
				echo $text;
			break;


			default:
			if(!empty($caption))
			{ 
				echo '<h2 class="title">' . $caption . '</h2>';
			}
			echo '<div class="row"><div class="col-md-12">';		 
			echo $text;
			echo '</div></div>';
		}
		return;
	}	
}
