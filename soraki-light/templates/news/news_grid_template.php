<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	$NEWS_GRID_TEMPLATE['col-md-6']['start'] = '<div class="row ">';
	$NEWS_GRID_TEMPLATE['col-md-6']['end'] = '</div>';


// ------------------ col-md-4 -----------------

	$NEWS_GRID_TEMPLATE['col-md-4']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
 
  $NEWS_GRID_TEMPLATE['col-md-4']['item']     = '
		<div class="item col-md-4">
		{SETIMAGE: w=400&h=400&crop=1}												 
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
  </div>';
  
  
	$NEWS_GRID_TEMPLATE['col-md-4']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];
  $NEWS_GRID_TEMPLATE['col-md-6']['item']     = $NEWS_GRID_TEMPLATE['col-md-4']['item']; 
  $NEWS_GRID_TEMPLATE['col-md-6']['featured'] = $NEWS_GRID_TEMPLATE['col-md-4']['item']; 
  $NEWS_GRID_TEMPLATE['col-md-4']['featured'] = $NEWS_GRID_TEMPLATE['col-md-4']['item']; 

// ------------------ col-md-3 -----------------


	$NEWS_GRID_TEMPLATE['col-md-3']['start']    = $NEWS_GRID_TEMPLATE['col-md-6']['start'];
	$NEWS_GRID_TEMPLATE['col-md-3']['featured'] = $NEWS_GRID_TEMPLATE['col-md-6']['featured'];
    $NEWS_GRID_TEMPLATE['col-md-3']['item']     = '<div class="item col-md-3">
													{SETIMAGE: w=400&h=400&crop=1}
													{NEWSTHUMBNAIL=placeholder}
	                                                <h3>{NEWS_TITLE}</h3>
	                                                <p>{NEWS_SUMMARY}</p>
	                                                <p class="text-right"><a class="btn btn-primary btn-othernews" href="{NEWSURL}">' . LAN_READ_MORE . '</a></p>
            							        </div>';
	$NEWS_GRID_TEMPLATE['col-md-3']['end']      = $NEWS_GRID_TEMPLATE['col-md-6']['end'];




// ------------------ media-list -----------------



	$NEWS_GRID_TEMPLATE['media-list']['start'] = '<div class="row news-grid-default">';

	$NEWS_GRID_TEMPLATE['media-list']['featured'] = '<div class="featured item col-sm-6" >
														{SETIMAGE: w=600&h=400&crop=1}
														{NEWSTHUMBNAIL=placeholder}
														 <h3><a href="{NEWS_URL}">{NEWS_TITLE}</a></h3>
														 <p>{NEWS_SUMMARY: limit=60}</p>
													</div>


            							          ';


	$NEWS_GRID_TEMPLATE['media-list']['item'] = '<div class="item col-sm-6">
												{SETIMAGE: w=120&h=120&crop=1}
												<ul class="media-list">
													<li class="media">
													  <div class="media-left media-top">
													    <a href="{NEWS_URL}">
													      {NEWS_IMAGE: type=tag&class=media-object img-rounded&placeholder=1}
													    </a>
													  </div>
													  <div class="media-body">
													    <h4 class="media-heading"><a href="{NEWS_URL}">{NEWS_TITLE}</a></h4>
													    <p>{NEWS_SUMMARY: limit=60}</p>
													  </div>
													  </li>

												</ul>
            							    </div>';


	$NEWS_GRID_TEMPLATE['media-list']['end'] = '</div>';






