<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;


$NEWS_TEMPLATE = array();


$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


$NEWS_INFO = array(
	'default' 	=> array('title' => LAN_DEFAULT, 	'description' => 'unused'),
	'list' 	    => array('title' => LAN_LIST, 		'description' => 'unused'),
	'2-column'  => array(),  
);

 

// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '{SETIMAGE: w=970&h=500&crop=1}';
$NEWS_TEMPLATE['list']['end']	= '<div class="text-center">{NEWS_PAGINATION}</div>';
$NEWS_TEMPLATE['list']['item']	= '
<div class="news-wrapper">
<div class="news-item">
	<div class="row">
		<div class="col-md-6 picture wow fadeInLeft">
			<a href="{NEWS_URL}">
			<img class="wrapimg" src="{NEWS_IMAGE: type=src&placeholder=true}" alt="{NEWS_CATEGORY_NAME} - {NEWS_TITLE}">
			</a>
		</div>
		<div class="col-md-6 article wow fadeInRight text-right">
			<a href="{NEWS_URL}" title="{NEWS_TITLE}"><h3>{NEWS_TITLE}</h3></a>
			<p class="lead">
				{NEWS_SUMMARY}
			</p>
			<div class="space">
			</div>
			<a class="btn btn-xs btn-primary nomargtop" href="{NEWS_URL}">{LAN=LAN_READ_MORE}</a>
		</div>
	</div>
</div>
</div>
';

$NEWS_TEMPLATE['default']['caption'] = '<section class="page-wrapper"><div class="container">{NEWS_CATEGORY_NAME}</div></section>';
$NEWS_TEMPLATE['default']['start']	= '{SETIMAGE: w=970&h=500&crop=1}<div class="news-frontend">';
$NEWS_TEMPLATE['default']['end']	= '</div>
<div class="text-center">{NEWS_PAGINATION}</div>';
$NEWS_TEMPLATE['default']['item']	= '
<div class="page-wrapper">
<div class="container">
	<div class="row">
		<div class="col-md-6 picture wow {NEWS_IMAGE_CLASSES} ">
			<a href="{NEWS_URL}">
			<img class="wrapimg" src="{NEWS_IMAGE: type=src&placeholder=true}" alt="{NEWS_CATEGORY_NAME} - {NEWS_TITLE}">
			</a>
		</div>
		<div class="col-md-6 image  wow {NEWS_ARTICLE_CLASSES} ">
			<a href="{NEWS_URL}" title="{NEWS_TITLE}"><h3>{NEWS_TITLE}</h3></a>
			<p class="lead">
				{NEWS_SUMMARY}
			</p>
			<div class="space">
			</div>
			<a class="btn btn-minimal nomargtop" href="{NEWS_URL}">{LAN=LAN_READ_MORE}</a>
		</div>
	</div>
</div>
</div>
';

$NEWS_TEMPLATE['category']          = $NEWS_TEMPLATE['list'];

$NEWS_TEMPLATE['category']['start'] = '{SETIMAGE: w=970&h=500&crop=1}
<div class="tagline">{NEWS_CATEGORY_DESCRIPTION}</div>';
 
$NEWS_TEMPLATE['category']['caption'] = '{NEWSCATEGORY}'; 
 

### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '{SETIMAGE: w=970&h=500&crop=1} 
<section class="page-wrapper gray">
<h4 class="title">You Might Also Like</h4>
<div class="row">';
$NEWS_TEMPLATE['related']['item'] = '
 <div class="col-md-6 wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
	<div class="thumbbox1">
		<a href="{RELATED_URL}">{RELATED_IMAGE}</a>
		<h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3>
		<div class="description">
			{RELATED_SUMMARY}
		</div>
	</div>
</div>';
$NEWS_TEMPLATE['related']['end'] = '</div></section>';

 