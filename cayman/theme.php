<?php
/**
 * Bootstrap 3 Theme for e107 v2.x
 */
if (!defined('e107_INIT')) { exit; }

define("BOOTSTRAP", 	3);
define("FONTAWESOME", 	4);
define('VIEWPORT', 		"width=device-width, initial-scale=1.0");

e107::library('load', 'bootstrap');
e107::library('load', 'fontawesome');

e107::css('theme', 	'assets/css/menu.css'); 
e107::css('theme', 	'assets/css/animate.css'); 
//e107::css('theme', 	'style.css');
                                                                          
e107::css('url', 	'https://fonts.googleapis.com/css?family=Felipa');
e107::css('url', 	'https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic');
e107::css('url', 	'https://fonts.googleapis.com/css?family=Merriweather:300,400,700,900,300italic,400italic,700italic,900italic');

e107::js('theme','js/html5shiv.js','','2','<!--[if lt IE 9]>','');
e107::js('theme','js/respond.min.js','','2','','<![endif]-->');
 
e107::js("footer", e_THEME_ABS."cayman/assets/js/plugins.js", 'jquery');
e107::js("footer", e_THEME_ABS."cayman/assets/js/parallax.js", 'jquery');
e107::js("footer", e_THEME_ABS."cayman/assets/js/countto.js", 'jquery'); 
e107::js("footer", e_THEME_ABS."cayman/assets/js/portfolio.js", 'jquery');
e107::js("footer", e_THEME_ABS."cayman/assets/js/animheader.js", 'jquery');
e107::js("footer", e_THEME_ABS."cayman/assets/js/scripts.js", 'jquery'); 
 
// Legacy Stuff.
define('OTHERNEWS_COLS',false); // no tables, only divs. 
define('OTHERNEWS_LIMIT', 3); // Limit to 3. 
define('OTHERNEWS2_COLS',false); // no tables, only divs. 
define('OTHERNEWS2_LIMIT', 3); // Limit to 3. 
define('COMMENTLINK', 	e107::getParser()->toGlyph('fa-comment'));
define('COMMENTOFFSTRING', '');

define('PRE_EXTENDEDSTRING', '<br />');

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

	if($style == 'none')
	{
		echo $text;
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

// applied before every layout.
$LAYOUT['_header_'] = '
<div class="page-loader">
	<img src="'.THEME.'assets/img/loader.gif" alt="">
</div>
<!-- Header
================================================== -->
<header id="header">
<div id="mega-menu" class="header header-sticky primary-menu icons-no default-skin zoomIn align-right">
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-default redq" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand large" href="{SITEURL}">{SITENAME}</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> -->
				<div class="collapse navbar-collapse">
					<a class="navbar-brand mobile pull-left" href="#"><span class="logo-style">{SITENAME}</span></a>
					<a class="mobile-menu-close"><i class="fa fa-random"></i></a>
					<ul class="nav navbar-nav nav-list">
						{NAVIGATION=main}
					</ul>
					<!-- end .nav .navbar-nav -->
				</div>
				<!-- end .navbar-collapse -->
				<!-- </div> -->
				<!-- end .container-fluid -->
			</div>
			<!-- end .container -->
			</nav>
			<!-- end nav -->
		</div>
		<!-- end .row -->
	</div>
	<!-- end .container -->
</div>
<!-- end .header -->
</header>
  
	
';
 
 
$banner.='
<div align="center">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- textový banner demo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:970px;height:250px"
     data-ad-client="ca-pub-2906916233936304"
     data-ad-slot="2712841792"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>';
 

// applied after every layout. 
$LAYOUT['_footer_'] = '<hr>
{SETSTYLE=default}
<!-- Footer
================================================== -->
<section id="footer" class="footer">
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
		  {SETSTYLE=none}
      {JM_DISABLEBLOCK_CODE} 
      {JM_GOOGLE_AD: id=2}
 
			{SITEDISCLAIMER}
      
		</div>
	</div>
</div>
</section>
';



// $LAYOUT is a combined $HEADER and $FOOTER, automatically split at the point of "{---}"

$LAYOUT['homepage'] =  '
<!-- Animated Intro
================================================== -->
<div id="large-header" class="large-header">
	<canvas id="demo-canvas"></canvas>
	<h1 class="main-title"><span class="e107">e107 </span><span class="thin wow pulse" data-wow-duration="1.8s" data-wow-delay="0.5s" data-wow-iteration="3">Themes</span><br/>
	<span class="smallh wow zoomIn"> let magic do its work</span><br/>
  <a href="https://www.e107sk.com/" class="btn btn-default wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">Tell me More</a>
	<a href="https://www.e107sk.com/forum" class="btn btn-primary wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;">Support</a>
	</h1>
</div>
<!-- Item
================================================== -->
 
{CHAPTER_MENUS: name=showcase}

<!-- About Us
================================================== -->
<section class="split">
<div class="col-md-6 darkbgcolor text-center" style="min-height:420px;background-size:cover;background-image:url('.e_THEME_ABS.'cayman/images/random7.jpg);">
	<div class="overlay darkbgcolor" style="opacity:0.7;">
	</div>
</div>
<div class="col-md-6 darkbgcolor text-center" style="min-height:420px;padding-top:6%;">
	<div class="overlay accentbgcolor" style="opacity:0.9;">
	</div>
	<div class="thetext">
		<i class="fa fa-download fa-3x"></i>
		<h2 class="title" style="line-height:1.8;"><b>DOWNLOAD</b><br/>
		<span class="transformnone" style="border-top:1px solid;border-bottom:1px solid;padding:5px 0;margin:5px 0;display:inline-block;">
    Questions?</span><br/>
		 </h2>
		<a href="https://www.e107sk/forum" class="btn btn-primary" style="margin-top:0px;"><i class="fa fa-hand-o-right"></i> GET SUPPORT</a>
	</div>
</div>
</section>
{---}
 
';
 
 
$NEWSCAT = "\n\n\n\n<!-- News Category -->\n\n\n\n
	<div style='padding:2px;padding-bottom:12px'>
	<div class='newscat_caption'>
	{NEWSCATEGORY}
	</div>
	<div style='width:100%;text-align:left'>
	{NEWSCAT_ITEM}
	</div>
	</div>
";


$NEWSCAT_ITEM = "\n\n\n\n<!-- News Category Item -->\n\n\n\n
		<div style='width:100%;display:block'>
		<table style='width:100%'>
		<tr><td style='width:2px;vertical-align:middle'>&#8226;&nbsp;</td>
		<td style='text-align:left;height:10px'>
		{NEWSTITLELINK}
		</td></tr></table></div>
";

?>
