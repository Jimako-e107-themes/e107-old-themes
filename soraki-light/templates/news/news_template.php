<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;



$NEWS_TEMPLATE = array();


$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


$NEWS_INFO = array(
	'default' 	=> array('title' => LAN_DEFAULT, 	'description' => 'unused'),
	'list' 	    => array('title' => LAN_LIST, 		'description' => 'unused'),
	'2-column'  => array('title' => "2 Column (experimental)",     'description' => 'unused'), //@todo more default listing options.
);


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '{SETIMAGE: w=400&h=350&crop=1}';
/*
 // (optional)
$NEWS_TEMPLATE['list']['first'] = '
		{SETIMAGE: w=800&h=400}
		<div class="default-item">

          {NEWSIMAGE: item=1}
			<h2 class="news-title">{NEWS_TITLE: link=1}</h2>
          <p class="lead">{NEWS_SUMMARY}</p>
          {NEWSVIDEO: item=1}
          <div class="text-justify">
       
          </div>
           <div class="text-right">
			<a href="{NEWS_URL}" class="btn btn-primary">{LAN=LAN_READ_MORE}</a>
			</div>
        <hr>
		
			</div>
		{SETIMAGE: w=400&h=350&crop=1}
';
*/

$NEWS_TEMPLATE['list']['end']	= '';
$NEWS_TEMPLATE['list']['item']	= '
<div class="card pt-0">
                            <div class="image" style="background-image: url(&quot;{NEWSIMAGE: type=src}&quot;); background-position: center center; background-size: cover;">
                                <img src="{NEWSIMAGE: type=src}" alt="{NEWS_TITLE}" style="display: none;">
                                <div class="filter filter-azure">
                                    <button type="button" class="btn btn-neutral btn-round">
																		{NEWSTAGS: separator=</button><button type="button" class="btn btn-neutral btn-round">}
                                    </button>
                                </div>
                            </div>
                            <div class="content">
                                <p class="category">{NEWSCATEGORY} </p>
                                <a class="card-link" href="{NEWSURL}">
                                    <h4 class="title">{NEWS_SUMMARY}</h4>
                                </a>
                                 <div class="footer">
                                    <div class="author">
                                        <a class="card-link" href="{NEWS_AUTHOR_ITEMS_URL}">
																				{NEWS_AUTHOR_AVATAR: w=30&h=30} 
                                           <span> {NEWSAUTHOR} </span>
                                        </a>
                                    </div>
                                    <div class="stats pull-right">
																		<a href="{NEWSURL}" >'.LAN_READ_MORE.'</a>  
                                    </div>
                                </div>
                            </div>
												</div>
';
 
$NEWS_TEMPLATE['default'] = $NEWS_TEMPLATE['list'];

$NEWS_TEMPLATE['category']          = $NEWS_TEMPLATE['default'];
$NEWS_TEMPLATE['category']['start']	= '<!-- Category News Template -->';
 
### Related 'start' - Options: Core 'single' shortcodes including {SETIMAGE}
### Related 'item' - Options: {RELATED_URL} {RELATED_IMAGE} {RELATED_TITLE} {RELATED_SUMMARY}
### Related 'end' - Options:  Options: Core 'single' shortcodes including {SETIMAGE}
/*
$NEWS_TEMPLATE['related']['start'] = "<hr><h4>".defset('LAN_RELATED', 'Related')."</h4><ul class='e-related'>";
$NEWS_TEMPLATE['related']['item'] = "<li><a href='{RELATED_URL}'>{RELATED_TITLE}</a></li>";
$NEWS_TEMPLATE['related']['end'] = "</ul>";*/

$NEWS_TEMPLATE['related']['start'] = '{SETIMAGE: w=350&h=350&crop=1}<h2 class="caption">You Might Also Like</h2><div class="row">';
$NEWS_TEMPLATE['related']['item'] = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$NEWS_TEMPLATE['related']['end'] = '</div>';