<?php
/**
 * Copyright (C) e107 Inc (e107.org), Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
 * $Id$
 * 
 * News default templates
 */

if (!defined('e107_INIT'))  exit;

global $sc_style;

###### Default list item (temporary) - TODO rewrite news ######
//$NEWS_MENU_TEMPLATE['list']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['list']['end']         = '</ul>';

$NEWS_MENU_TEMPLATE['list']['start']       = '<div class="thumbnails">';
$NEWS_MENU_TEMPLATE['list']['end']         = '</div>';


// XXX The ListStyle template offers a listed summary of items with a minimum of 10 items per page. 
// As displayed by news.php?cat.1 OR news.php?all 
// {NEWSBODY} should not appear in the LISTSTYLE as it is NOT the same as what would appear on news.php (no query) 

// Template/CSS to be reviewed for best bootstrap implementation 
$NEWS_TEMPLATE['list']['caption']	= '{NEWSCATEGORY}';
$NEWS_TEMPLATE['list']['start']	= '{SETIMAGE: w=400&h=350&crop=1}';
$NEWS_TEMPLATE['list']['end']	= '';
$NEWS_TEMPLATE['list']['item']	= '

		<div class="row row-fluid">
				<div class="span3 col-md-3">
                   <div class="thumbnail">
                        {NEWSTHUMBNAIL=placeholder}
                    </div>
				</div>
				<div class="span9 col-md-9">
                   <h3 class="media-heading">{NEWSTITLELINK}</h3>
                      <p>
                       	{NEWSSUMMARY}
					</p>
                    <p>
                       <a href="{NEWSURL}" class="btn btn-small btn-primary">'.LAN_READ_MORE.'</a>
                   </p>
 				</div>
		</div>

';
 
 

$NEWS_TEMPLATE['default']['item'] = '
<div class="article panel">
    {SETIMAGE: w=800}
    <h2>{NEWSTITLELINK}</h2>
    <p class="lead">by {NEWSAUTHOR}</p>
    <div class="options">
        <div class="btn-group">{NEWSCOMMENTLINK: glyph=comments&class=btn btn-default}{PRINTICON: class=btn btn-default}{PDFICON}{SOCIALSHARE}{ADMINOPTIONS: class=btn btn-default}</div>
    </div>
    <hr>
    <div class="row info">
   	    <div class="col-md-4">{GLYPH=time} {NEWSDATE=short} </div>
       	<div class="col-md-8 text-right">{GLYPH=tags} &nbsp;{NEWSTAGS} &nbsp; {GLYPH=folder-open} &nbsp;{NEWSCATEGORY} </div>
   	</div>
    <hr>
    <div class="article-body clearfix">
        <div class="col-md-5 n-img">
            {NEWSIMAGE: item=1}
        </div>
        <p class="article-summary">{NEWSSUMMARY}</p>
        {NEWSBODY}
    </div>
</div>
';



###### Default view item (temporary)  ######
//$NEWS_MENU_TEMPLATE['view']['start']       = '<ul class="nav nav-list news-menu-months">';
//$NEWS_MENU_TEMPLATE['view']['end']         = '</ul>';

// As displayed by news.php?extend.1



###### news_categories.sc 
$NEWS_TEMPLATE['category']['body'] = '
	<div style="padding:5px"><div style="border-bottom:1px inset black; padding-bottom:1px;margin-bottom:5px">
	{NEWSCATICON}&nbsp;{NEWSCATEGORY}
	</div>
	{NEWSCAT_ITEM}
	</div>
';

$NEWS_TEMPLATE['category']['item'] = '
	<div style="width:100%;padding-bottom:2px">
	<table style="width:100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
	<td style="width:2px;vertical-align:top">&#8226;
	</td>
	<td style="text-align:left;vertical-align:top;padding-left:3px">
	{NEWSTITLELINK}
	<br />
	</td></tr>
	</table>
	</div>
';