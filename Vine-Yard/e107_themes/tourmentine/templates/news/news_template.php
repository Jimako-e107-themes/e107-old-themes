<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;


$NEWS_TEMPLATE = array();
 
$NEWS_INFO = array(
	'default' 	=> array('title' => LAN_DEFAULT, 	'description' => 'unused'),
	'list' 	    => array('title' => LAN_LIST, 		'description' => 'unused'),
);


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 


// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '<div class="col-xs-12">
{SETIMAGE: w=470&h=350&crop=1}';
 

$NEWS_TEMPLATE['list']['end']	= '</end>';
$NEWS_TEMPLATE['list']['item']	= '
		<div class="blog-col style3">
		<div class="img-holder">
		<a href="{NEWS_URL}"> {NEWSIMAGE: item=1}</a>
		</div>
		<div class="txt-holder">
			{NEWSDATE_CUSTOM}
			
			<h3 class="heading4 fwNormal">{NEWS_TITLE: link=1}</h3>
			<p>{NEWS_SUMMARY}</p>
			<a href="{NEWS_URL}" class="read-more text-uppercase">{LAN=LAN_READ_MORE} <i class="fa fa-long-arrow-right"></i></a>
		</div>
		</div>
 
';
 
 
$NEWS_TEMPLATE['default']['caption'] = '{LAN=LAN_PLUGIN_NEWS_NAME}';  
$NEWS_TEMPLATE['default']['start']	= ' ';

$NEWS_TEMPLATE['default']['end']	= ' ';
 
$NEWS_TEMPLATE['default']['item'] = 
'<div class="col-xs-12 col-sm-6">
	{SETIMAGE: w=570&h=425}
	<div class="blog-col style6">
		<div class="img-holder">
			<a href="{NEWS_URL}"> {NEWSIMAGE: item=1}</a>
		</div>
		<div class="txt-holder text-center">
			<h3 class="heading5">{NEWSTITLE: link=1}</h3>
			<ul class="list-unstyled comment-nav">
				<li>{GLYPH=time} &nbsp;{NEWSDATE=short}</li>
				<li>/</li>
				<li>{NEWSCATEGORY}<li>/</li> {NEWSCOMMENTS}</li>  
			</ul>
			<a href="{NEWS_URL}" class="read-more text-uppercase">{LAN=LAN_READ_MORE}<i class="fa fa-long-arrow-right"></i></a>
		</div>
	</div>
</div>';



$NEWS_TEMPLATE['category']          = $NEWS_TEMPLATE['list'];
 


### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['caption']    = '{LAN=RELATED}';
$NEWS_TEMPLATE['related']['start']      = '{SETIMAGE: w=350&h=350&crop=1}<div class="row">';
$NEWS_TEMPLATE['related']['item']       = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$NEWS_TEMPLATE['related']['end']        = '</div>';