<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/

if(!defined('e107_INIT'))
{
	exit;
}

$PAGE_WRAPPER = array();

$PAGE_WRAPPER['default']['CPAGESUBTITLE']   = '<h3 class="text-center">{---}</h3>';
$PAGE_WRAPPER['default']['CPAGEMESSAGE']    = '{---}<div class="clear"><!-- --></div>';
$PAGE_WRAPPER['default']['CPAGEAUTHOR']     = "{---}, ";
$PAGE_WRAPPER['default']['CPAGENAV']        = '<div class="f-right pull-right float-right col-md-3">{---}</div>';


#### default template - BC ####
 
// paralax background - waiting for issue 4438 and {PAGE_IMAGE_SRC} 
$PAGE_TEMPLATE['default']['header']  =  '
<section class="pagetitle parallax parallax-image" style="background-image:url({PAGE_IMAGE_SRC});">
<div class="wrapsection">
	<div class="overlay" style="background:#303543;opacity:0.4;">
	</div>
	<div class="container">
		<div class="parallax-content">
			<div class="block2 text-center max80" style="padding:120px 0;color:#fff;">
				<h1 class="h3">
				<span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s">
				<b>{CPAGETITLE}</b></span>
				</h1>
				<h2 >
				<span class="text2 big wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
				{CPAGESUBTITLE}
				</span>
				</h2>
				<a href="#startcontent" class="downarrowpoint wow zoomIn goscroll"><i class="fa fa-angle-double-down"></i></a>
			</div>
		</div>
	</div>
</div>
</section>';


 
$PAGE_TEMPLATE['default']['page'] = '
		{PAGE}
		{PAGECOMMENTS}
	';

// always used - it's inside the {PAGE} sc from 'page' template
$PAGE_TEMPLATE['default']['start'] = $PAGE_TEMPLATE['default']['header'].
'<div id="{CPAGESEF}" id="startcontent"  class="cpage_body cpage-body">
  {CHAPTER_BREADCRUMB}';

$PAGE_TEMPLATE['default']['mode'] = 'none';
$PAGE_TEMPLATE['default']['title'] = 'none';

// page body
$PAGE_TEMPLATE['default']['body'] = '
<section class="page-wrapper gray">
	<div class="container">
			{CPAGEMESSAGE}
			<div class="clear"><!-- --></div>
			{CPAGEBODY}
			<div class="clear"><!-- --></div>
			{CPAGERATING}
			{CPAGEEDIT}
	</div>
</section>';

// {CPAGEFIELD: name=image}

$PAGE_WRAPPER['default']['CPAGEEDIT'] = "<div class='text-right text-end'>{---}</div>";

// used only when password authorization is required
$PAGE_TEMPLATE['default']['authorize'] = '
		<div class="cpage-restrict ">
			{message}
			{form_open}
			<div class="panel panel-default">
				<div class="panel-heading">{caption}</div>
					<div class="panel-body">
					    <div class="form-group">
				       		 <label class="col-sm-3 control-label">{label}</label>
					        <div class="col-sm-9">
					               {password} {submit} 
					        </div>
			     		</div>
					</div>
      			</div>
			{form_close}
		</div>
	';

// used when access is denied (restriction by class)
$PAGE_TEMPLATE['default']['restricted'] = '
		{text}
	';

// used when page is not found
$PAGE_TEMPLATE['default']['notfound'] = '
		{text}
	';

// always used
$PAGE_TEMPLATE['default']['end'] = '{CPAGERELATED: types=page,news}</div>';

// options per template - disable table render
//	$PAGE_TEMPLATE['default']['noTableRender'] = false; //XXX Deprecated

// define different tablerender mode here
$PAGE_TEMPLATE['default']['tableRender'] = 'cpage';




$PAGE_TEMPLATE['default']['related']['start'] = '{SETIMAGE: w=350&h=350&crop=1}<h2 class="caption">{LAN=LAN_RELATED}</h2><div class="row">';
$PAGE_TEMPLATE['default']['related']['item'] = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$PAGE_TEMPLATE['default']['related']['end'] = '</div>';

// $PAGE_TEMPLATE['default']['editor'] = '<ul class="fa-ul"><li><i class="fa fa-li fa-edit"></i> Level 1</li><li><i class="fa fa-li fa-cog"></i> Level 2</li></ul>';


#### no container around body, use for page with elements and template with its own container
$PAGE_TEMPLATE['custom'] = $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['custom']['body'] = '<!-- full -->
			{CPAGEMESSAGE}
			<div class="clear"><!-- --></div>
			{CPAGEBODY}
			<div class="clear"><!-- --></div>
			{CPAGERATING}
			{CPAGEEDIT}';

//menu image has to be filled
$PAGE_TEMPLATE['moving-background'] 			= $PAGE_TEMPLATE['default'];

$PAGE_TEMPLATE['moving-background']['header']  =  
'<section>
	   <div class="carousel business_carousel slide bgmove">
		   <!-- Carousel items -->
		   <div class="carousel-inner">
			   <!-- slider item -->
			   <div class="item active">
				   <!-- image -->
				   <div class="slider-bg darker-span">
				       {SETIMAGE: w=0&h=0}
					   <img class="kenburnsreverse" src="{PAGE_IMAGE_SRC}" >
				   </div>
				   <div class="slider_overlay">
				   </div>
				   <div class="container">
					   <div class="row">
						   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							   <div class="carousel-content">
								   <div class="slider-thumb animated1">
									   <h1><b>{CPAGETITLE}</b></h1>
								   </div>
								   <div class="slider-thumb animated2">
									   <h4>{CPAGESUBTITLE}</h4>
								   </div>
								   <a href="#startcontent" aria-label="Content section" class="downarrowpoint wow zoomIn goscroll"><i class="fa fa-angle-double-down"></i></a>
							   </div>
						   </div>
					   </div>
				   </div>
			   </div>
		   	</div>
	 </div>
 </section>';
 
$PAGE_TEMPLATE['moving-background']['start'] 	= $PAGE_TEMPLATE['moving-background']['header'].
'<div id="{CPAGESEF}" id="startcontent"  class="cpage_body cpage-body">
  {CHAPTER_BREADCRUMB}'; 
 
$PAGE_WRAPPER['profile']['CMENUIMAGE: template=profile'] = '<span class="page-profile-image pull-left col-xs-12 col-sm-4 col-md-4">{---}</span>';
$PAGE_TEMPLATE['profile'] = $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['profile']['body'] = '
		{CPAGEMESSAGE}
		{CPAGESUBTITLE}
		<div class="clear"><!-- --></div>

		{CPAGENAV|default}
		{SETIMAGE: w=320}
		{CMENUIMAGE: template=profile}
		{CPAGEBODY}

		<div class="clear"><!-- --></div>
		{CPAGERATING}
		{CPAGEEDIT}
	';
	
	
 
$PAGE_TEMPLATE['fragments'] = $PAGE_TEMPLATE['default'];
$PAGE_TEMPLATE['fragments']['body'] = '
		{CPAGEMESSAGE}
		{CPAGESUBTITLE}
		<div class="clear"><!-- --></div>
 
        <div class="container"><div class="row">
		{CPAGEBODY}
        </div></div>
        {HTML_FRAGMENT: type=element&key=funfacts}
        {HTML_FRAGMENT: type=element&key=timeline}
        {HTML_FRAGMENT: type=element&key=videocontent}
        {HTML_FRAGMENT: type=element&key=team}
        {HTML_FRAGMENT: type=element&key=customers}
		
        {HTML_FRAGMENT: type=element&key=features}
        {HTML_FRAGMENT: type=element&key=contact}
        <div class="clear"><!-- --></div>
		{CPAGERATING}
		{CPAGEEDIT}
	';
		
    







	
	
	
