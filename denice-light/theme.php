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
 
//e107::css("theme", "bootstrap3/css/bootstrap.css");  
e107::css("theme", "assets/css/ct-paper.css"); 
e107::css("theme", "assets/css/demo.css"); 
e107::css("theme", "assets/css/examples.css"); 


//e107::css("url", "http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css");
e107::css("url", "https://fonts.googleapis.com/css?family=Montserrat");
e107::css("url", "http://fonts.googleapis.com/css?family=Open+Sans:400,300");
 
 
e107::js("theme", "assets/js/jquery-ui-1.10.4.custom.min.js", 'jquery');

//e107::js("theme", "bootstrap3/js/bootstrap.js", 'jquery');  
//<!--  Plugins -->
e107::js("theme", "assets/js/ct-paper-checkbox.js", 'jquery');   
e107::js("theme", "assets/js/ct-paper-radio.js", 'jquery'); 
e107::js("theme", "assets/js/bootstrap-select.js", 'jquery');   
e107::js("theme", "assets/js/bootstrap-datepicker.js", 'jquery');

e107::js("theme", "assets/js/ct-paper.js", 'jquery');   
e107::js("theme", "custom.js", 'jquery'); 

 
if(THEME_LAYOUT == 'singlesignup') {
	define('e_IFRAME','1');
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
 


 
$LAYOUT['_header_'] = '
    <nav class="navbar navbar-default" role="navigation-demo" id="demo-navbar">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{SITEURL}">{BOOTSTRAP_BRANDING}</a>       
        </div>    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navigation-example-2">
          <ul class="nav navbar-nav navbar-right"> 
            {NAVIGATION=main}
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-->
    </nav> 
';
$LAYOUT['_footer_'] = '
    <footer class="footer-demo section-dark">
        <div class="container">
            {NAVIGATION: type=footer&layout=footer}
            <div class="copyright pull-right">
              {SITEDISCLAIMER}
            </div>
        </div>
    </footer>
    ';
$bgimage = THEME.'assets/paper_img/cat.jpg';       
$LAYOUT['homepage'] =  '
    
    <div class="alert alert-danger landing-alert">
         <div class="container text-center">
             <h5>Get a 10% discount on selected products until the 5th of November!</h5>
        </div>
    </div>
   {SETSTYLE=none}
   {FEATUREBOX}
   
   {SETSTYLE=default}
	 {MENU=1}
   {---}
   {SETSTYLE=default}
	 {MENU=2}   
   
   <div class="wrapper">
        <div class="landing-header" style="background-image: url('.$bgimage.');">
            <div class="container">
                <div class="motto">
                    <h1 class="title-uppercase">Example page</h1>
                    <h3>Start designing your landing page here.</h3>
                    <br />
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn"><i class="fa fa-play"></i>Watch video</a>
                    <a class="btn">Download</a>
                </div>
            </div>    
        </div>
        <div class="main">        
                        
            <div class="section section-light-brown landing-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 column">
                            <h4>First Attribute</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. 
                            A paragraph describing a feature will be enough.</p>
                            <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="col-md-4 column">
                            <h4>Second Attribute</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. 
                            A paragraph describing a feature will be enough.</p>
                            <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                        <div class="col-md-4 column">
                            <h4>Third Attribute</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. 
                            A paragraph describing a feature will be enough.</p>
                            <a class="btn btn-danger btn-simple" href="#">See more <i class="fa fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section section-dark text-center landing-section">
                <div class="container">
                    <h2>Let\'s talk about us</h2>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="'.THEME.'/assets/paper_img/chet_faker_2.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                            <h5>Chet Faker <br /><small class="text-muted">Music</small></h5>
                            <p>You can write here details about one of your team members. 
                            You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="'.THEME.'/assets/paper_img/flume.jpg" alt="Thumbnail Image" class="img-circle img-responsive">
                            <h5>Flume <br /><small class="text-muted">Production</small></h5>
                            <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="'.THEME.'/assets/paper_img/banks.jpg" alt="Thumbnail Image" class="img-circle img-circle img-responsive">
                            <h5>Banks <br /><small class="text-muted">Music</small></h5>
                            <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>     
    </div>
{---}

'; 

$LAYOUT['full'] =  '
<div class="wrapper">
  {SETSTYLE=full}
  <div class="demo-header demo-header-image">
      <div class="motto">
          <h1 class="title-uppercase">Paper Kit</h1>
          <h3>Make your mark with a new design.</h3>
      </div>
    </div>
   <div class="main">
      <div class="section">
        <div class="container tim-container">
		      <div class="row">
		        <div class="col-md-12"> {ALERTS}   
		         {---}
		         </div>
		      </div>
		 		</div>
		  </div>   
		</div>
  </div>
 ';

$LAYOUT['sidebar_right'] =  '
<div class="section section-white">
  <div class="wrapper">
    <div class="container">
      <div class="row">
   			<div class="col-xs-12 col-md-8">	
   		  {ALERTS}
				{---}
 			</div>
        	<div id="sidebar" class="col-xs-12 col-md-4">
        	{SETSTYLE=menu}
        		{MENU=1}
        	</div>
      </div>
    </div>
  </div>
</div>';


/* with e_IFRAME is layout ignored */
$LAYOUT['singlesignup'] =  '
{---}

';


 
 
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
 /*  <h5>This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
              <br>
              <a href="#" class="btn btn-danger btn-fill">See Details</a> */
 
	if($id == 'wm')  
	{	
		echo '	
		<div class="section text-center landing-section">
		  <div class="container">
		      <div class="row">
		          <div class="col-md-8 col-md-offset-2">
		              <h2>'.$caption.'</h2>
		              '.$text.' 
		          </div>
		      </div>
		  </div>
		</div>';	
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
		$copyright = e107::getParser()->parseTemplate('{SITEDISCLAIMER}',true);

    echo '
      <div class="wrapper">
        <div class="register-background"> 
            <div class="filter-black"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 ">
                            <div class="register-card">';
 
        	if(!empty($caption))
	        {
	            echo '<h3 class="text-center" >'.$caption.'</h3>';
	        }
           echo  $text;
           
           echo    ' </div>
                </div>     
            <div class="footer register-footer text-center">
                    <h6>'.$copyright.'</h6>
            </div>
        </div>
    </div>';	
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

	if(!empty($caption))
	{
		echo '<h2 class="caption">'.$caption.'</h2>';
	}

	echo $text;


					
	return;
	
	
	
}

?>
