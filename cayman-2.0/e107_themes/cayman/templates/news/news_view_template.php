<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */




$NEWS_VIEW_INFO = array(

	'default' 	=> array('title' => LAN_DEFAULT, 							'description' => 'unused'),
 
);


// Default
$NEWS_VIEW_WRAPPER['default']['item']['NEWS_MEDIA: item=2'] = '<div class="col-md-6 news-wrapimg">{---}</div>';
$NEWS_VIEW_WRAPPER['default']['item']['NEWS_MEDIA: item=3'] = '<div class="col-md-6 news-wrapimg">{---}</div>';
$NEWS_VIEW_WRAPPER['default']['item']['NEWS_MEDIA: item=4'] = '<div class="col-md-6 news-wrapimg">{---}</div>';
$NEWS_VIEW_WRAPPER['default']['item']['NEWS_MEDIA: item=5'] = '<div class="col-md-6 news-wrapimg">{---}</div>';

$NEWS_VIEW_TEMPLATE['default']['caption'] = '{NEWS_TITLE}'; // add a value to user tablerender()
$NEWS_VIEW_TEMPLATE['default']['item'] = '
{SETIMAGE: w=970&h=500&crop=1}
<div class="news-wrapper">
	<div class="view-item">
		<div class="row">
			<div class="col-md-12 picture wow fadeInLeft">		 
				<img class="wrapimg" src="{NEWS_IMAGE: type=src&placeholder=true}" alt="{NEWS_CATEGORY_NAME} - {NEWS_TITLE}">
			</div>
			<div class="col-md-12 article wow fadeInRight">
				<div class="space"></div>
				<h2 class="title">{NEWS_TITLE}</h2>
				<hr class="news-heading-sep">
			</div>
			
			<div class="col-md-6"><i class="fa fa-user"></i>&nbsp;{NEWSAUTHOR}&nbsp;<i class="fa fa-calendar"></i>&nbsp;{NEWSDATE=short}</div>
			<div class="col-md-6 text-right options"><i class="fa fa-tags"></i>&nbsp;{NEWSTAGS}&nbsp;<i class="fa fa-folder-open"></i>&nbsp;{NEWSCATEGORY}</div>
			 	   
			<div class="col-md-12 article wow fadeInRight">
				<hr class="news-heading-sep">
				<p class="lead">
					{NEWS_SUMMARY}
				</p>
			</div>
			
			<div class="col-md-12 article wow fadeInRight">
				<div class="news-body">
				{NEWS_BODY=body}
				</div>
				<div class="news-body-extended">
				{NEWS_BODY=extended}
				</div>
			</div>	 
			 
			{NEWS_MEDIA: item=2}
			{NEWS_MEDIA: item=3}
			{NEWS_MEDIA: item=4}
			{NEWS_MEDIA: item=5}
		 	 
		</div>
		<hr />
		<div class="row">
			<div class="col-md-12 wow fadeInRight animated">
				<div class="options">
					<div class="btn-group hidden-print">{NEWSCOMMENTLINK: glyph=comments&class=btn btn-default btn-secondary}{PRINTICON: class=btn btn-default btn-secondary}{PDFICON}{SOCIALSHARE}{ADMINOPTIONS: class=btn btn-default btn-secondary}</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 article wow fadeInRight">
				<h3>About the Author</h3>
			</div>
			<div class="col-md-4 image wow fadeInRight text-center">
			{NEWS_AUTHOR_AVATAR: w=80&h=80&crop=1&shape=circle}
			</div>
			<div class="col-md-8 article wow fadeInRight">
			 	<h4>{NEWS_AUTHOR}</h4>
				<div class="lead">{NEWS_AUTHOR_SIGNATURE}</div>
				<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">{LAN=LAN_THEME_NEWS_01}</a>
			</div>
		</div>
	</div>
</div>


<div class="news-view-pagination row my-3">
	<div class="page-item col-md-4">{NEWS_NAV_PREVIOUS}</div>
	<div class="page-item col-md-4 text-center">{NEWS_NAV_CURRENT}</div>
	<div class="page-item col-md-4 text-right text-end">{NEWS_NAV_NEXT}</div>
</div>

{NEWS_RELATED: types=news&limit=2}
';

 
// Navigation/Pagination
$NEWS_VIEW_TEMPLATE['nav']['previous'] = '<a class="btn btn-wrap  btn-default text-left" href="{NEWS_URL}">{GLYPH=fa-chevron-left}<span class="mx-1">{NEWS_TITLE} {NEWS_ID}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['current'] = '<a class="btn btn-wrap  btn-default text-center" href="{NEWS_NAV_URL}">{LAN=BACK}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['next'] = '<a class="btn btn-wrap  btn-default text-right" href="{NEWS_URL}"><span class="mx-1">{NEWS_ID} {NEWS_TITLE}</span>{GLYPH=fa-chevron-right}</a> ';

