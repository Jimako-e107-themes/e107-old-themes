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
$NEWS_VIEW_WRAPPER['default']['item']['NEWSIMAGE: item=1'] = '<span class="news-images-main pull-left float-left col-xs-12 col-sm-6 col-md-6">{---}</span>';
$NEWS_VIEW_WRAPPER['default']['item']['NEWSRELATED'] = '<hr />{---}<hr />';

$NEWS_VIEW_TEMPLATE['default']['caption'] = NULL; // null; // add a value to user tablerender()
$NEWS_VIEW_TEMPLATE['default']['item'] = ' 
{SETIMAGE: w=800}
<div class="view-item card">
    <h2>{NEWSTITLELINK}</h2>
    <p class="lead">by {NEWSAUTHOR}</p>
    <hr>
    <div class="row info">
  		<div class="col-md-4">{GLYPH=time} {NEWSDATE=short} </div>
  		<div class="col-md-8 text-right options">{GLYPH=tags} &nbsp;{NEWSTAGS} &nbsp; {GLYPH=folder-open} &nbsp;{NEWSCATEGORY} </div>
    </div>
    <hr>
    <div class="row article-body clearfix d-flex ">
        <div class="n-img">
            {NEWSIMAGE: item=1}
            {NEWSVIDEO: item=1} 
        </div> 
		<div class="n-body">
        {NEWSBODY=body}
		</div>
    </div>
			{SETIMAGE: w=800}
			<div class="row news-images-1">
        		<div class="col-md-6 col-sm-6">
                    {NEWSIMAGE: item=2}
                    {NEWSVIDEO: item=2} 
                </div>
        		<div class="col-md-6 col-sm-6">
                    {NEWSIMAGE: item=3}
                    {NEWSVIDEO: item=3}
                </div>
        	</div>
            <p class="body-extended">
				{NEWSBODY=extended}
			</p>
        	<div class="row news-images-2">
        		<div class="col-md-6 col-sm-6">
                    {NEWSIMAGE: item=4}
                    {NEWSVIDEO: item=4}
                </div>
        		<div class="col-md-6 col-sm-6">
                    {NEWSIMAGE: item=5}
                    {NEWSVIDEO: item=5}
                </div>
            </div>
    <hr>
    <div class="options text-center">
        <div class="btn-group">{PRINTICON: class=btn btn-default}{ADMINOPTIONS: class=btn btn-default}{SOCIALSHARE}</div>
    </div>
			
</div>
<div class="view-item card">
	{NEWSRELATED}
</div>    
	<hr>
<div class="view-item card">    
	{NEWSNAVLINK}
</div>    
';
//$NEWS_MENU_TEMPLATE['view']['separator']   = '<br />';


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
$NEWS_VIEW_TEMPLATE['nav']['previous'] = '<a href="{NEWS_URL}">{GLYPH=fa-chevron-left}<span class="mx-1">{NEWS_TITLE} {NEWS_ID}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['current'] = '<a class="text-center" href="{NEWS_NAV_URL}">{LAN=BACK}</span></a>';
$NEWS_VIEW_TEMPLATE['nav']['next'] = '<a class="text-right" href="{NEWS_URL}"><span class="mx-1">{NEWS_ID} {NEWS_TITLE}</span>{GLYPH=fa-chevron-right}</a> ';
