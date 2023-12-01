<?php

if(!defined('e107_INIT'))
{
	exit();
}



	class theme implements e_theme_render
	{

        public function init()
        {

            e107::lan('theme');
            
            ////// Your own css fixes ////////////////////////////////////////////////////
           // define("CORE_CSS", false);
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
            e107::meta("viewport", "width=device-width, initial-scale=1.0");
        }        


        public function register_css()  //fix me, use sass only for needed stuff
        {
            e107::css('theme',  'css/bootstrap.css');
            e107::css('theme',  'css/plugins.css');
            e107::css('theme',  'css/style.css');         
            e107::css('theme',  'css/responsive.css');             
            e107::css('theme',  'css/colors.css');  
            
            if(e_PAGE == "menus.php")  {
                    e107::css('theme',  'menumanagerfix.css');  
            }
           
        }
  
        public function register_js()
        {
            
            //  e107::css('url', $this->assets_path.'/js/soft-design-system.min.js', 'jquery');
            e107::js('footer',  THEME.'js/plugins.js', 'jquery');  
            e107::js('footer',  THEME.'js/jquery.main.js', 'jquery');
 
        } 
        
        public function register_fonts()
        {
            e107::css('url', 'https://fonts.googleapis.com/css?family=Cinzel:400,700,900|Josefin+Sans:300,300i,400,400i,600,700');
            e107::css('url', 'https://fonts.googleapis.com/css?family=Philosopher:400,700%7CPinyon+Script');
        }
 
        public function register_icons()
        {
              e107::css('theme',  'css/icofont.css');
             e107::css('theme',  'css/pe-icon-7-stroke.css');
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
        
        
		/**
		 * @param string $text
		 * @return string without p tags added always with bbcodes
		 * note: this solves W3C validation issue and CSS style problems
		 * use this carefully, mainly for custom menus, let decision on theme developers
		 */

		function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
		{

			$text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

			return $text;
		}


		function tablestyle($caption, $text, $mode='', $options = array())
		{

			$style = varset($options['setStyle'], 'default');
            
            $text = $this->remove_ptags($text);
			
            // Override style based on mode.
			switch($mode)
			{
			   case "search_result":
 				 $style = "footer-label";
				 break;                
               case "wm":
				 $style = "wmessage";
				 break;               
               case "contact-info":
			   case "contact-form":	
			   case "news":
				 $style = "nocaption";
				 break;
			}

			echo "\n<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";
 

	//		echo "\n<!-- tablestyle:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";

			if(deftrue('e_DEBUG'))
			{
				echo "\n<!-- \n";
				echo json_encode($options, JSON_PRETTY_PRINT);
				echo "\n-->\n\n";
			}
 
			switch($style)
			{

				case 'default':
                      // used in full layout +  {---CAPTION---}, so no $caption is used
 	                  echo $text;
	            break;


				case 'main':
                	// used in full layout +  {---CAPTION---}, so no $caption is used
					echo '<div id="content" class="main col-xs-12 col-md-12">';
					echo $text;
					echo '</div>';
				break;
                
                case 'home-column':
                    if(!empty($caption))
    				{
                       echo  '<h2 class="heading2">' . $caption . '</h2>';
                    }
                    echo $text;
                break;
 				 
                case "wmessage":
						echo '    
        					<!-- header of the page -->
        					<header class="col-xs-12 text-center header wow fadeInUp" data-wow-delay="0.4s">
        						<span class="title fontpinyon">'.SITENAME.'</span>
        						<h1 class="heading text-uppercase">' . $caption . '</h1>
        						<div class="header-img">
        							<img src="'.THEME.'images/bdr-img.png" alt="image description" class="img-responsive">
        						</div>';
                        echo $text;
        				echo '</header>';
 
                break;                   
                
				case "blog-sec":
                    echo '<section class="blog-sec container">'; 
				    if(!empty($caption))
					{
						echo '
                        <div class="row">
        					<!-- header of the page -->
        					<header class="col-xs-12 text-center header wow fadeInUp" data-wow-delay="0.4s">
        						<span class="title fontpinyon">'.SITENAME.'</span>
        						<h1 class="heading text-uppercase">' . $caption . '</h1>
        						<div class="header-img">
        							<img src="'.THEME.'images/bdr-img.png" alt="image description" class="img-responsive">
        						</div>
        					</header>
        				</div>
                        ';
                     
					}	
					echo $text;
					echo '</section>';
					break;                
                

				case 'footer-colums':
					if(!empty($caption))
					{
						echo '<h3 class="heading3">' . $caption . '</h3>';
					}	
					echo $text;
					break;

				case 'footer-label':
					if(!empty($caption))
					{
						echo '<span class="heading3">' . $caption . ' </span>';
					}	
					echo $text."<br>";
					break;	

				case "nocaption":
					echo $text;
					break;
    
                case "sidebar":
                    echo '<section class="widget category-widget">';
					if(!empty($caption))
					{
						echo '<h2 class="heading2 text-uppercase"><span>' . $caption . '</span></h2>';
					}                    
				    echo $text;
                    echo "</section>";
                    break;

			    default:

					// default style
					// only if this always work, play with different styles

					if(!empty($caption))
					{
						echo '<h4>' . $caption . '</h4>';
					}
					echo $text;

				return;
			}

		}

	}
