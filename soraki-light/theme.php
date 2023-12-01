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

if(!defined('e_SEARCH')) {  
  define('e_SEARCH', e_HTTP.'search.php');
}

// load translated strings
e107::lan('theme');

if(THEME_LAYOUT == 'homepage') {
    define('BODYTAG', '<body class="home '.THEME_LAYOUT.'">');
    $bgimage = THEME_ABS.'assets/img/examples/about_5.jpg';
}
if(THEME_LAYOUT == 'sidebar_right') {
    define('BODYTAG', '<body class="blog '.THEME_LAYOUT.'">');
    $bgimage = THEME_ABS.'assets/img/examples/blog_page8.jpg';
} 
if(THEME_LAYOUT == 'singlesignup') {
    define('e_IFRAME', true );
} 

e107::css("theme", "assets/css/gsdk.css"); 
e107::css("theme", "assets/css/demo_free.css"); 
e107::css("theme", "assets/css/demo.css"); 
e107::css("theme", "assets/css/examples.css"); 
e107::css("theme", "assets/css/pe-icon-7-stroke.css"); 

//e107::css("url", "http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css");
 
e107::css("url", "https://fonts.googleapis.com/css?family=Grand+Hotel");
 
 
e107::js("theme", "assets/js/jquery-ui-1.10.4.custom.min.js", 'jquery');
 
//<!--  Plugins -->
e107::js("theme", "assets/js/gsdk-checkbox.js", 'jquery');   
e107::js("theme", "assets/js/gsdk-radio.js", 'jquery'); 
e107::js("theme", "assets/js/gsdk-bootstrapswitch.js", 'jquery');   


//this way you load only needed scripts 
if(THEME_LAYOUT == 'singlecontact') {
    e107::css("theme", "assets/css/soraki-contact.css"); 
    e107::js("url", "https://maps.googleapis.com/maps/api/js", 'jquery');   
    e107::js("theme", "assets/js/soraki-contact.js", 'jquery');  
} 

e107::js("theme", "assets/js/get-shit-done.js", 'jquery');
e107::js("theme", "assets/js/custom.js", 'jquery'); 
e107::js("theme", "custom.js", 'jquery'); 


define('e_CAPTCHA_FONTCOLOR','#000000');

/* We need THEME_LAYOUT without _ and -  **************************************/
$search = array("_","-");
$replace = array("","");
$jmlayout  = str_replace($search,$replace,THEME_LAYOUT);	
define('jm_THEME_LAYOUT', $jmlayout);  

/* Note:  Don't use variable $layout. it breaks things                        */
/******************************************************************************/

/* just for lite version */
$elements_lite = THEME.'elements/elements_lite.php';
if(file_exists($elements_lite)) {        
   include_once($elements_lite);
} 
else {
  $elements_lite = array();
}

/* Fix for Menu Manager *******************************************************/
/* Explanation:  List of available menuareas to add new menu is done by parsing code 
of theme.php file 
/*  using separate files causes not available menuareas dropdown in menu manager
 
/******************************************************************************/
/* BELLOW ARE FALSE $LAYOUTS JUST FOR MENU MANAGER, they are ignored later */
$LAYOUT['homepage'] =  '    
{MENU=11}{---} 
{MENU=41} {MENU=42}  {MENU=43}  {MENU=44} 
';

$LAYOUT['full'] =  '
{MENU=12}{---}
{MENU=41} {MENU=42}  {MENU=43}  {MENU=44} 
'; 

if(THEME_LAYOUT == 'full') {
    $headerpath = THEME.'headers/header-default.php';
} 
else 
$headerpath = THEME.'headers/header-transparent.php';


if(file_exists($headerpath)) {        
   include_once($headerpath);
} 
else {
 $LAYOUT['_header_'] = "";
}

$footerpath = THEME.'footers/footer-default.php';
if(file_exists($footerpath)) {        
   include_once($footerpath);
} 
else {
 $LAYOUT['_footer_'] = "";
}
 
$finallayout = THEME.'layouts/layout-'.THEME_LAYOUT.'.php';
if(file_exists($finallayout)) {        
    include_once($finallayout);
} 
 else {
    //do nothing, let possibility to use old layout
}
 

$LAYOUT['sidebarright'] =  
$elements_lite['imageparallax2'].'
<div class="section section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                {---} 
            </div>  
            <div class="col-md-4 ">
                {SETSTYLE=card}
                {MENU=12}
            </div>
       </div>
    </div>      
</div>';

/* with e_IFRAME is layout ignored */
$LAYOUT['singlesignup'] = '  
      {ALERTS}
       {---}';


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
	
	echo "<!-- tablestyle: style=".$style." id=".$id." layout =".THEME_LAYOUT."  -->\n\n";
	
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
  
  if($id == 'default' &&  THEME_LAYOUT == 'singlesignup'  )  {  $style = 'singlesignup'; }  

    if($style == 'headerintro') {
        $bgimage = THEME_ABS.'assets/img/examples/about_5.jpg';
        echo 
        '    <div class="parallax filter-black">
                <div class="parallax-image">
                    <img src="'.$bgimage.'" alt="..." />
                </div>
                <div class="small-info">
                    <h1>'.$caption.'</h1>
                    <h3>'.$text.'</h3>
                </div>
            </div>';
        return; 

    }

	if($id == 'wm')  
	{	 
        echo '<div class="main" style="background-color: #EEE">
            <div class="container text-center">
                <div class="space-100"></div>
                <h1 class="text-center">'.$caption.'</h1>
                <div class="space-30"></div>   '.$text.'
            
                <div class="space-100"></div>
            </div>
        </div>';	
		return;	 
	}
  
	if($style == 'footer')  
	{	   
        if(!empty($caption))
        {
            echo '<h5 class="title">'.$caption.'</h5>';
        }
        echo $text;	
		return;	
	}
	
	if($style == 'section') {
	 echo '<div class="main">
	    <div class="container tim-container" >
	      ';
        if(!empty($caption))
        {
            echo '<h2 class="section-title">'.checkcaption($caption).'</h2>';
        }	      

	 echo $text;
	 echo "</div></div> ";
	 return;    
	}

	echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";

	if($style == 'singlesignup')
	{                                 
       
        echo ' <div class="parallax filter-black parallax-fullheight ">
        <div class="parallax-image">
            <img src="'.THEME_ABS.'assets/img/examples/about_5.jpg" alt="..." />
        </div>
        
        <div class="row">
        <div class="space-50"></div>
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
        <div class="small-info text-left">';
        if(!empty($caption))
        {
            echo '<h1 class="text-center" >'.$caption.'</h1>';
        }
           echo '<div class="text-left">'.$text.'</div>';
           echo '</div>
    </div></div></div>';
 
		return;
	}
 
 
	if($style == 'card')
	{
        echo '
        <div class="card card-primary">
        <div class="content">
        <h4 class="title">'.$caption.'</h4>
            '.$text.'
            </div>
        </div>';
		return;
		
	}	

  
	// default <h2 class="section-title">{NEWSCATEGORY}</h2>
     
	if(!empty($caption) && !empty($text))
	{
		echo '<h2 class="section-title">'.$caption.'</h2>';
    }
	if(!empty($text))
	{
		echo $text;
	}			
	return;	
}

?>
