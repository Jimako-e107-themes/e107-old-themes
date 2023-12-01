<?php

if (!defined('e107_INIT')) {
    exit();
}
 
////// Multilanguages/ /////////////////////////////////////////////////////////
e107::lan('theme');
 
            
    class theme implements e_theme_render
    {
        public function init()
        {
            $no_core_css = true;
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
     
            ////////////////////////////////////////////////////////////////////////////////
            define("THEME_LEGACY", false); //warning it is ignored somewhere
            //define("THEME_DISCLAIMER", "Copyright &copy; 2015 Skin by <a href='http://artphilia.de'>Artphilia Designs</a>. All rights reserved.");
            define("THEME_DISCLAIMER", " ");
            ////// Your own css fixes ////////////////////////////////////////////////////
            define("CORE_CSS", false);  //copy core e107.css to theme and remove problematic rules
        }


        public function set_metas()
        {
            e107::meta('viewport', 'width=device-width, initial-scale=1.0');
        }
      
        public function register_css()
        {
            /*
			    <!-- ===============================================-->
				<!--    Stylesheets-->
				<!-- ===============================================-->
				<link href="assets/lib/prismjs/prism.css" rel="stylesheet">
				<link href="assets/lib/loaders.css/loaders.min.css" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700" rel="stylesheet">
				<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
				<link href="assets/lib/remodal/remodal.css" rel="stylesheet">
				<link href="assets/lib/remodal/remodal-default-theme.css" rel="stylesheet">
				<link href="assets/lib/owl.carousel/owl.carousel.css" rel="stylesheet">
				<link href="assets/lib/lightbox2/css/lightbox.css" rel="stylesheet">
				<link href="assets/lib/semantic-ui-accordion/accordion.min.css" rel="stylesheet">
				<link href="assets/lib/semantic-ui-transition/transition.min.css" rel="stylesheet">
				<link href="assets/css/theme.css" rel="stylesheet">
			*/

       
            e107::css('theme', 'assets/lib/prismjs/prism.css');
            e107::css('theme', 'assets/lib/loaders.css/loaders.min.css');
			e107::css('url', "https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700");
			e107::css('url', "https://fonts.googleapis.com/css?family=Source+Sans+Pro");
            e107::css('theme', 'assets/lib/remodal/remodal.css');
            e107::css('theme', 'assets/lib/owl.carousel/owl.carousel.css');
            e107::css('theme', 'assets/lib/lightbox2/css/lightbox.css');
            e107::css('theme', 'assets/lib/semantic-ui-accordion/accordion.min.css');
			e107::css('theme', 'assets/lib/semantic-ui-transition/transition.min.css');
			e107::css('theme', 'assets/css/theme.css');

        }
                
        public function register_js()
        {
            /*
			<!-- ===============================================-->
			<!--    JavaScripts-->
			<!-- ===============================================-->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/popper.min.js"></script>
			<script src="assets/js/bootstrap.js"></script>
			<script src="assets/js/plugins.js"></script>
			<script src="assets/lib/prismjs/prism.js"></script>
			<script src="assets/lib/loaders.css/loaders.css.js"></script>
			<script src="assets/js/stickyfill.min.js"></script>
			<script src="assets/lib/remodal/remodal.js"></script>
			<script src="assets/lib/jtap/jquery.tap.js"></script>
			<script src="https://www.google.com/recaptcha/api.js"></script>
			<script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL"></script>
			<script src="assets/lib/owl.carousel/owl.carousel.js"></script>
			<script src="assets/lib/isotope-layout/isotope.pkgd.min.js"></script>
			<script src="assets/lib/isotope-packery/packery-mode.pkgd.min.js"></script>
			<script src="assets/lib/lightbox2/js/lightbox.js"></script>
			<script src="assets/lib/semantic-ui-accordion/accordion.min.js"></script>
			<script src="assets/lib/semantic-ui-transition/transition.min.js"></script>
			<script src="assets/lib/prismjs/prism.js"></script>
			<script src="assets/js/stickyfill.min.js"></script>
			<script src="assets/lib/sticky-kit/sticky-kit.min.js"></script>
			<script src="assets/js/theme.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap" async></script>
			*/

			e107::js('theme', 'assets/js/popper.min.js', 'jquery');
			e107::js('theme', 'assets/js/bootstrap.js', 'jquery');
			e107::js('theme', 'assets/js/plugins.js', 'jquery');
			e107::js('theme', 'assets/lib/prismjs/prism.js', 'jquery');
			e107::js('theme', 'assets/lib/loaders.css/loaders.css.js', 'jquery');
			e107::js('theme', 'assets/js/stickyfill.min.js', 'jquery');
			e107::js('theme', 'assets/lib/remodal/remodal.js', 'jquery');

			e107::js('theme', 'assets/lib/jtap/jquery.tap.js', 'jquery');
			e107::js('url', 'https://www.google.com/recaptcha/api.js', 'jquery');
			e107::js('url', 'https://cdn.polyfill.io/v2/polyfill.min.js?features=es6,Array.prototype.includes,CustomEvent,Object.entries,Object.values,URL', 'jquery');
			e107::js('theme', 'assets/lib/owl.carousel/owl.carousel.js', 'jquery');
			e107::js('theme', 'assets/lib/isotope-layout/isotope.pkgd.min.js', 'jquery');
			e107::js('theme', 'assets/lib/isotope-packery/packery-mode.pkgd.min.js"', 'jquery');
			e107::js('theme', 'assets/lib/lightbox2/js/lightbox.js', 'jquery');
			e107::js('theme', 'assets/lib/semantic-ui-accordion/accordion.min.js', 'jquery');
			e107::js('theme', 'assets/lib/semantic-ui-transition/transition.min.js', 'jquery');
			e107::js('theme', 'assets/lib/prismjs/prism.js', 'jquery');
			e107::js('theme', 'assets/js/stickyfill.min.js', 'jquery');
			e107::js('theme', 'assets/lib/sticky-kit/sticky-kit.min.js', 'jquery');
			e107::js('theme', 'assets/js/theme.js', 'jquery');
			e107::js('url', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyARdVcREeBK44lIWnv5-iPijKqvlSAVwbw&callback=initMap', 'jquery');

            e107::js('theme', 'fix.js', 'jquery');
        }
                 
        public function register_fonts()
        {
            e107::css('url', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap&subset=latin-ext');
            e107::css('url', 'https://fonts.googleapis.com/css?family=Courgette&display=swap&subset=latin-ext');
            e107::css('url', 'https://fonts.googleapis.com/css?family=Montserrat:400,700,200|Open+Sans+Condensed:700&subset=latin-ext');
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
      
      
      
        /**
         * @param string $text
         * @return string without p tags added always with bbcodes
         * note: this solves W3C validation issue and CSS style problems
         * use this carefully, mainly for custom menus, let decision on theme developers
         */

        public function remove_ptags($text = '') // FIXME this is a bug in e107 if this is required.
        {
            $text = str_replace(array("<!-- bbcode-html-start --><p>", "</p><!-- bbcode-html-end -->"), "", $text);

            return $text;
        }


        public function tablestyle($caption, $text, $mode='', $options = array())
        {
            $style = varset($options['setStyle'], 'default');

			if (deftrue('e_DEBUG')) {
            	echo "\n<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";
			}
 

            if (deftrue('e_DEBUG')) {
                echo "\n<!-- \n";
                echo json_encode($options, JSON_PRETTY_PRINT);
                echo "\n-->\n\n";
            }

			$id = varset($options['uniqueId']);
			switch ($id) {
				case "cmenu-about":
					$style = 'none';
                    break;
			}
            // Override style based on mode.
            switch ($mode) {
                case 'wmessage':
                case 'wm':
                    $style = 'wmessage';
                    break;
 
            }
			if (deftrue('e_DEBUG')) {
            	echo "\n<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->\n\n";
			}
 

            switch ($style) {
 
				case "wmessage": 
					echo '
					<h1 class="text-white fs-2 fs-sm-4 fs-xl-5 display-4">'.$caption.'</h1>
					<h5 class="fs-0 fs-sm-1 mt-3 mt-md-5 text-white">'.$text.'</h5>';
					break;	

				case "none":
					echo $text;

              break;
                    
              case "default":
                echo $caption.$text;
              break;
                   
              default:

                    // default style
                    // only if this always work, play with different styles

                    if (!empty($caption)) {
                        echo '<h4>' . $caption . '</h4>';
                    }
            
                    echo $text;
                  
                    return;
            }
        }
    }
