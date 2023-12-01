<?php

/**
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * @file
 * Bootstrap 3 Theme for e107 v2.x.
 */
 

if(!defined('e107_INIT'))
{
	exit;
}
 
define("BOOTSTRAP", 3);
define("FONTAWESOME", 4);
define('VIEWPORT', "width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0");

/* example for set specific body class  */

if(!defined('e_SEARCH')) {  
  define('e_SEARCH', e_HTTP.'search.php');
}
 
e107::css("theme", "assets/css/bootstrap.min.css");  
e107::css("theme", "assets/css/material-kit.css?v=1.3.0"); 
 

//e107::css("url", "http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css");
e107::css("url", "https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons");
 

 e107::js("theme", "assets/js/bootstrap.min.js", 'jquery');  
//<!--  Plugins -->
e107::js("theme", "assets/js/material.min.js", 'jquery');   
e107::js("theme", "assets/js/material-kit.js?v=1.3.0", 'jquery'); 
 
 
e107::js("theme", "custom.js", 'jquery'); 

 
if(THEME_LAYOUT == 'singlesignup') {
 	define('e_IFRAME', false );
} 
 
/**
 * @param string $caption
 * @example  []Heading 1
 * @example  [Heading2] 
 * @return empty string if correct syntax is used
 */
function checkcaption( $caption ) 
{
	// get rid of any leading and trailing spaces
	$title = trim( $caption );
	// check the first and last character, if [ and ] set the title to empty  - this always doesn't work because admin stuff in captions
	if ( $title[0]== '[' && $title[strlen($title) - 1] == ']' ) $title = '';   
	// so just put [] at the beginning of menu title
	if ( $title[0]== '[' && $title[1] == ']' ) $title = '';  
	return $title;
} 
 


$bgimage1 = THEME_ABS.'assets/img/cover_4.jpg';  
$bgimage2 = THEME_ABS.'assets/img/cover_4_blur.jpg';  


$LAYOUT['_header_'] = '
<nav class="navbar navbar-transparent navbar-absolute">
        	<div class="container">
            	<!-- Brand and toggle get grouped for better mobile display -->
            	<div class="navbar-header">
            		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                		<span class="sr-only">Toggle navigation</span>
    		            <span class="icon-bar"></span>
    		            <span class="icon-bar"></span>
    		            <span class="icon-bar"></span>
            		</button>
            		<a class="navbar-brand" href="http://www.creative-tim.com">Creative Tim</a>
            	</div>

            	<div class="collapse navbar-collapse" id="navigation-example">
					     <ul class="nav navbar-nav navbar-right">
               {NAVIGATION=main}
               </ul>
            	</div>
        	</div>
        </nav>
 
';
$LAYOUT['_footer_'] = '
    <footer class="footer">
        <div class="container">
            {NAVIGATION: type=main&layout=footer}
            <div class="copyright pull-right">
                {SITEDISCLAIMER}
            </div>
        </div>
    </footer>
 ';


$bgimage1 = THEME_ABS.'assets/img/bg9.jpg';  
$bgimage2 = THEME_ABS.'assets/img/bg2.jpg';   
$bgimage3 = THEME_ABS.'assets/img/dg3.jpg';   
$bgimage4 = THEME_ABS.'assets/img/examples/card-blog3.jpg';


    
$LAYOUT['homepage'] =  '
{SETSTYLE=none}   <div class="wrapper">
{FEATUREBOX}
	<div class="main ">
  <div class="container">            
     <div class="section text-center"> 
       <div class="row">				
          {SETSTYLE=wm}
    			{---}   
        </div>
       </div> 
		</div>
	</div>
</div>

'; 

$LAYOUT['full'] =  '
<div class="wrapper">
	<div class="header">
 <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('.$bgimage2. ');">
		<div class="container">
    		<div class="row">
        		<div class="col-md-8 col-md-offset-2">
                    <h1 class="title">About Us</h1>
                        <h4>Meet the amazing team behind this project and find out more about how we work.</h4>
                </div>
            </div>
        </div>
	</div>      
	</div>
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised">
		<div class="container">
        <div class="row">
			{---}
         </div>
		</div>
	</div>
</div>
 ';

$LAYOUT['sidebar_right'] =  '
<div class="wrapper">
	<div class="header">
 <div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('.$bgimage2. ');">
		<div class="container">
    		<div class="row">
        		<div class="col-md-8 col-md-offset-2">
                    <h1 class="title">About Us</h1>
                        <h4>Meet the amazing team behind this project and find out more about how we work.</h4>
                </div>
            </div>
        </div>
	</div>      
	</div>
	<!-- you can use the class main-raised if you want the main area to be as a page with shadows -->
	<div class="main main-raised">
		<div class="container">
        <div class="row">
			{---}
        </div>
		</div>
	</div>
</div>

';


/* with e_IFRAME is layout ignored */
$LAYOUT['singlesignup'] =  '
<div class="main">
    <div class="container tim-container" >
        <div class="row tim-row"  data-class="btn-info" >   {ALERTS}
       {---} 
    </div>      
    </div>
    <div class="space"></div>
</div>  <!-- end main -->';
 

 
 
 /**
 * @param string $caption
 * @param string $text
 * @param string $id : id of the current render
 * @param array $info : current style and other menu data. 
 */
function tablestyle($caption, $text, $id='', $info=array()) 
{
//	global $style; // no longer needed. 
	
	$style = $info['setStyle'];
	
	echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";
	
	$type = $style;
	if(empty($caption))
	{
		$type = 'box';
	}
	
	if($style == 'navdoc' || $style == 'none')
	{
		echo $text;
		return;
	}
	
  
  if($id == 'coppa')  { $style = 'singlesignup'; }
  if($id == 'signup')  { $style = 'singlesignup'; }  
  if($id == 'login_page')  { $style = 'singlesignup'; }  
  
 
 // Let's talk product
 /*        
      <h4>Every landing page needs a small description after the big bold title, thats why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>                    
      <br>                    
      <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">						
        <i class="fa fa-play"></i> Watch video 					</a>	 */
 
	if($id == 'wm')  
	{	
  
echo '
    <div class="col-md-6 col-md-offset-3 text-center">					
      <h1 class="title">'.$caption.'</h1>                    
       '.$text.'
    </div>
		  ';	
		return;	
 
	}
	/*
	if($id == 'featurebox') // Example - If rendered from 'featurebox' 
	{
		
	}	
	*/
	echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";
	if($style == 'singlesignup')
	{                                 
 
    echo '
 
                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card">';
 
        	if(!empty($caption))
	        {
	            echo '<h3 class="text-center" >'.$caption.'</h3>';
	        }
           echo  $text;
           
           echo    ' </div>
                </div>     
   ';	
		return;
	}
  
  	
	if($style == 'jumbotron')
	{
		echo '<div class="jumbotron">
      	<div class="container">';
        	if(!empty($caption))
	        {
	            echo '<h1>'.$caption.'</h1>';
	        }
        echo '
        	'.$text.'
      	</div>
    	</div>';	
		return;
	}
	
	if($style == 'col-md-4' || $style == 'col-md-6' || $style == 'col-md-8')
	{
		echo ' <div class="col-xs-12 '.$style.'">';
		
		if(!empty($caption))
		{
            echo '<h2>'.$caption.'</h2>';
		}

		echo '
          '.$text.'
        </div>';
		return;	
		
	}
		
	if($style == 'menu')
	{
		echo '<div class="panel panel-default">
	  <div class="panel-heading">'.$caption.'</div>
	  <div class="panel-body">
	   '.$text.'
	  </div>
	</div>';
		return;
		
	}	

	if($style == 'portfolio')
	{
		 echo '
		 <div class="col-lg-4 col-md-4 col-sm-6">
            '.$text.'
		</div>';	
		return;
	}



	// default.
  echo '<section  style="padding-top: 30px;    padding-bottom: 30px;">';
	if(!empty($caption))
	{
		echo '<h2 class="caption">'.$caption.'</h2>';
	}

	echo  $text. "</section>";


					
	return;
	
	
	
}

?>
