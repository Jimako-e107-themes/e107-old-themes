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
	'videos' 	=> array('title' => "Videos (experimental)", 				'description' => 'unused'),
);


// Default
  
$NEWS_VIEW_WRAPPER['default']['item']['NEWSRELATED'] = '<hr />{---}<hr />';

$NEWS_VIEW_TEMPLATE['default']['caption'] = null; // null; // add a value to user tablerender()
$NEWS_VIEW_TEMPLATE['default']['item'] = '
{SETIMAGE: w=200&h=200}
<div class="news-card mb-3 card'.$theme_settings['news-card'].'">
    <div class="news-card-header card-header'.$theme_settings['news-card-header'].' ">
            <h3 class="card-title">{NEWSTITLELINK=extend}</h3>
            <span class="hpnote">{LAN=LAN_THEME_8}&nbsp;{NEWSDATE=short}&nbsp;&nbsp;{LAN=LAN_THEME_9}&nbsp;{NEWSAUTHOR}&nbsp;&nbsp;{LAN=LAN_THEME_11}&nbsp;{NEWSCATEGORY}&nbsp;&nbsp;{NEWSCOMMENTS}&nbsp;{GLYPH=tags} &nbsp;{NEWSTAGS}</span>
    </div>
	<div class="news-card-body card-body">
		<div class="newscont">
			{NEWSIMAGE: item=1}
			<p class="lead">{NEWS_SUMMARY}</p>
            <p class="card-text">
			{NEWS_BODY=body}
			{NEWS_BODY=extended}</p>
		</div>
	</div>
	<div class="news-card-footer card-footer">
		{EMAILICON}
		{PDFICON}
		{NEWSCOMMENTLINK: glyph=comments}{PRINTICON}{ADMINOPTIONS}{SOCIALSHARE}
	</div>
</div>

	<div class="view-item">
           


		<div class="body">
			 
			</div>
			<div class="news-videos-1">
			{NEWSVIDEO: item=1}
		 	{NEWSVIDEO: item=2}
		 	{NEWSVIDEO: item=3}
			</div>


			<br />
			 
			
			<div class="row  news-images-1">
        		<div class="col-md-6">{NEWSIMAGE: item=2}</div>
        		<div class="col-md-6">{NEWSIMAGE: item=3}</div>
        	</div>
        	<div class="row news-images-2">
        		<div class="col-md-6">{NEWSIMAGE: item=4}</div>
        		<div class="col-md-6">{NEWSIMAGE: item=5}</div>
            </div>
            
            {NEWSVIDEO: item=4}
			{NEWSVIDEO: item=5}
			
            
			
			
		</div>


		<hr>
		 

	</div>

	{NEWSRELATED}

	<ul class="pagination justify-content-between my-5 news-view-pagination">
		<li class="page-item col-md-4">{NEWS_NAV_PREVIOUS}</li>
		<li class="page-item col-md-4 text-center">{NEWS_NAV_CURRENT}</li>
		<li class="page-item col-md-4 text-right text-end">{NEWS_NAV_NEXT}</li>
	</ul>

';


/*
 * 	<hr />
	<h3>About the Author</h3>
	<div class="media">
			<div class="media-left">{SETIMAGE: w=80&h=80&crop=1}{NEWS_AUTHOR_AVATAR: shape=circle}</div>
			<div class="media-body">
				<h4>{NEWS_AUTHOR}</h4>
					{NEWS_AUTHOR_SIGNATURE}
					<a class="btn btn-xs btn-primary" href="{NEWS_AUTHOR_ITEMS_URL}">My Articles</a>
			</div>
	</div>
 */


// @todo add more templates. eg. 'videos' , 'slideshow images', 'full width image'  - help and ideas always appreciated.


// Videos
 $NEWS_VIEW_TEMPLATE['videos']['item'] = '<div class="view-item"><div class="alert alert-warning">Empty news_view_template.php (videos) - have ideas? let us know.</div></div>';


// Navigation/Pagination
$NEWS_VIEW_TEMPLATE['nav']['previous'] = '<a rel="prev" href="{NEWS_URL}">{GLYPH=fa-chevron-left}<span class="mx-1">{NEWS_TITLE} {NEWS_ID}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['current'] = '<a class="text-center" href="{NEWS_NAV_URL}">{LAN=BACK}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['next'] = '<a rel="next" class="text-right" href="{NEWS_URL}"><span class="mx-1">{NEWS_ID} {NEWS_TITLE}</span>{GLYPH=fa-chevron-right}</a> ';
