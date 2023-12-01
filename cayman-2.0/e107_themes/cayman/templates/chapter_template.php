<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/
/**
 * Template for Book and Chapter Listings, as well as navigation on those pages. 
 */
 

$CHAPTER_TEMPLATE['default']['listPages']['caption']				= "{CHAPTER_NAME}";
$CHAPTER_TEMPLATE['default']['listChapters']['caption']				= "{BOOK_NAME}";

$CHAPTER_TEMPLATE['singlechapter'] 	 	= array();
$CHAPTER_TEMPLATE['portfolio'] 	 	= array();

$CHAPTER_TEMPLATE['default']['listPages']['header']				= ' 
<section class="pagetitle defaultlistPages parallax parallax-image" {CHAPTER_IMAGE_SRC}>
<div class="wrapsection">
	<div class="overlay" style="background:#303543;opacity:0.4;">
	</div>
	<div class="container">
		<div class="parallax-content">
			<div class="block2 text-center" style="padding:10px 0;color:#fff;">
				<h3>
				<span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s">
				<b>{CHAPTER_NAME}</b>
				</span>
				</h3>
				<h4>
				<span class="text2 big wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
				{CHAPTER_DESCRIPTION} </span>
				</h4>
			</div>
		</div>
	</div>
</div>
</section>';

$CHAPTER_TEMPLATE['default']['listChapters']['header']				= 
'<section class="pagetitle defaultlistChapters parallax parallax-image" {CHAPTER_IMAGE_SRC}>
<div class="wrapsection">
	<div class="overlay" style="background:#303543;opacity:0.4;">
	</div>
	<div class="container">
		<div class="parallax-content">
			<div class="block2 text-center" style="padding:10px 0;color:#fff;">
				<h3>
				<span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s">
				<b>{BOOK_NAME}</b>
				</span>
				</h3>
				<h4>
				<span class="text2 big wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
				{BOOK_DESCRIPTION} </span>
				</h4>
			</div>
		</div>
	</div>
</div>
</section>';

$CHAPTER_TEMPLATE['default']['listPages']['start'] 					= '{CHAPTER_BREADCRUMB}<ul class="page-pages-list">';
$CHAPTER_TEMPLATE['default']['listPages']['item'] 					= "<li><a href='{CPAGEURL}'>{CPAGETITLE}</a></li>";
$CHAPTER_TEMPLATE['default']['listPages']['end'] 					= "</ul>";	

	
$CHAPTER_TEMPLATE['default']['listChapters']['start']				= '<ul class="page-chapters-list">';
$CHAPTER_TEMPLATE['default']['listChapters']['item']				= "<li><h4><a href='{CHAPTER_URL}'>{CHAPTER_NAME}</a></h4>{PAGES}";
$CHAPTER_TEMPLATE['default']['listChapters']['end']					= "</ul>";

$CHAPTER_TEMPLATE['default']['listBooks']['start']					= "<ul class='page-book-list'>";
$CHAPTER_TEMPLATE['default']['listBooks']['item']					= "<li><h3><a href='{BOOK_URL}'>{BOOK_NAME}</a></h3>{CHAPTERS}";
$CHAPTER_TEMPLATE['default']['listBooks']['end']					= "</ul>";


$CHAPTER_TEMPLATE['portfolio']['listChapters']['caption']				= "{BOOK_NAME}";
$CHAPTER_TEMPLATE['portfolio']['listChapters']['header']				= ' 
<section class="pagetitle portfoliolistChapters parallax parallax-image" {CHAPTER_IMAGE_SRC} >
<div class="wrapsection">
	<div class="overlay" style="background:#303543;opacity:0.4;">
	</div>
	<div class="container">
		<div class="parallax-content">
			<div class="block2 text-center" style="padding:10px 0;color:#fff;">
				<h3>
				<span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s">
				<b>{BOOK_NAME}</b>
				</span>
				</h3>
				<h4>
				<span class="text2 big wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
				{BOOK_DESCRIPTION} </span>
				</h4>
			</div>
		</div>
	</div>
</div>
</section>';	
$CHAPTER_TEMPLATE['portfolio']['listChapters']['start']				=  $CHAPTER_TEMPLATE['portfolio']['listChapters']['header'].  
'<section class="page-wrapper">
    <div id="portfolio-filter" class="text-center">
	   <ul class="portfolio-filter-list">
         	<li><a href="#" class="active" data-cat="*">ALL</a></li>';
$CHAPTER_TEMPLATE['portfolio']['listChapters']['item']				= '<li><a href="#" data-cat=".{CHAPTER_ANCHOR}">{CHAPTER_NAME}</a></li>';
 
$CHAPTER_TEMPLATE['portfolio']['listChapters']['end']					= "	
    </ul>
</div>
{PORTFOLIO_ITEMS}
";
 
 
/* TEMP FIX GITHUB ISSUE #4402 */
if(($_GET['ch']) > 0 ) {  
    //correct template for chapter page
    $CHAPTER_TEMPLATE['default']['listPages']['start'] =  $CHAPTER_TEMPLATE['default']['listPages']['header'].$CHAPTER_TEMPLATE['default']['listPages']['start'];
    
    //correct template for chapter page 
    $CHAPTER_TEMPLATE['singlechapter']['listPages']['caption']				= '{CHAPTER_NAME}';
    $CHAPTER_TEMPLATE['singlechapter']['listPages']['header']	= '
    <section class="parallax parallax-image singlechapterlistPages" {CHAPTER_IMAGE_SRC}>
	<div class="wrapsection">
		<div class="overlay" style="background:#303543;opacity:0.4;">
		</div>
		<div class="container">
			<div class="parallax-content">
				<div class="block2 text-center max80" style="padding:130px 0;color:#fff;">
					<h3>
					<span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s">
					<b>{---CAPTION---}</b></span>
					</h3>
                    <h4>
                    <span class="text2 big wow zoomIn transformnone" data-wow-delay="0.4s" data-wow-duration="2s">{CHAPTER_DESCRIPTION}</span></h4><br/>
				    <div class="hero-box col-sm-8 col-sm-offset-2">{PAGES_SEARCH}</div>
				</div>
			</div>
		</div>
	</div>
    </section> 
    ';
    
    $CHAPTER_TEMPLATE['singlechapter']['listPages']['start'] 					= $CHAPTER_TEMPLATE['singlechapter']['listPages']['header']	.'   
    <section class="page-wrapper gray">
    	<div class="container knowledgebase">
    		<div class="row">
    			<!--left-->
    			<div class="col-md-3" id="leftCol">
    				{THEME_CHAPTER_NAVIGATION}
    			</div>
    			<!--/left-->
    			<!--right-->
    			<div class="col-md-9">
    ';
    	$CHAPTER_TEMPLATE['singlechapter']['listPages']['item'] 					= '<h3 id="{CPAGEANCHOR}">{CPAGETITLE}</h3>
    	<div class="content">{CPAGEBODY}</div>';
    	$CHAPTER_TEMPLATE['singlechapter']['listPages']['end'] 					= "
                        </div>
    			<!--/right-->
    		</div>
    	</div>
    </section>
    ";  
    
    // portfolio on chapter page, it shouldn't be used, just for sure... 
    $CHAPTER_TEMPLATE['portfolio']['listPages']['caption']		= ''; 
    $CHAPTER_TEMPLATE['portfolio']['listPages']['start'] 				= $CHAPTER_TEMPLATE['default']['listPages']['header']. '
    <section class="page-wrapper">
      <div id="portfolio-items" class="portfolio-items">{SETIMAGE: w=400&h=289&crop=1}' ;
    $CHAPTER_TEMPLATE['portfolio']['listPages']['item'] 				= '
    	<article class="{CHAPTER_ANCHOR}">
    	<a href="{CPAGEBUTTON=href}">
    	{CMENUIMAGE}
    	<div class="overlay">
    		<i class="fa fa-camera"></i>
    		<h3>{CPAGETITLE}</h3>
    		<span>{CHAPTER_NAME}</span>
    	</div>
    	</a>
    	</article>'; 
    $CHAPTER_TEMPLATE['portfolio']['listPages']['end'] 					= '
    </div>
    </section>
    ';
 
}
elseif(($_GET['bk']) > 0 ) {  
    
    $CHAPTER_TEMPLATE['singlechapter'] = $CHAPTER_TEMPLATE['default'];     //for singlechapter we want default list of chapters on book page
    
    // list page on book page
    $CHAPTER_TEMPLATE['portfolio']['listPages']['caption']		= ''; 
    $CHAPTER_TEMPLATE['portfolio']['listPages']['start'] 				= '
    <div id="portfolio-items" class="portfolio-items">{SETIMAGE: w=400&h=289&crop=1}' ;
    $CHAPTER_TEMPLATE['portfolio']['listPages']['item'] 				= '
    	<article class="{CHAPTER_ANCHOR}">
    	<a href="{CPAGEBUTTON=href}">
    	{CMENUIMAGE}
    	<div class="overlay">
    		<i class="fa fa-camera"></i>
    		<h3>{CPAGETITLE}</h3>
    		<span>{CHAPTER_NAME}</span>
    	</div>
    	</a>
    	</article>'; 
    $CHAPTER_TEMPLATE['portfolio']['listPages']['end'] 					= '
    </div>
    </section>
    ';
    
    //correct template for book page
    $CHAPTER_TEMPLATE['default']['listChapters']['start'] =  $CHAPTER_TEMPLATE['default']['listChapters']['header'].$CHAPTER_TEMPLATE['default']['listChapters']['start'];

}
else {       
    //frontpage bk is not filled
    $CHAPTER_TEMPLATE['portfolio']['listChapters'] = $CHAPTER_TEMPLATE['default']['listChapters']; 
}
 
 
	

 
$CHAPTER_TEMPLATE['nav']['listChapters']['caption']					= "Articles";

$CHAPTER_TEMPLATE['nav']['listChapters']['start'] 					= '<ul class="list-group page-nav">';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['item']					= '
																	<li class="list-group-item">
																		<a role="button" href="{LINK_URL}" >
																		 {LINK_NAME} 
																		</a> 
																	</li>
																	';
	

$CHAPTER_TEMPLATE['nav']['listChapters']['item_submenu']	 		= '
																	<li class="list-group-item">
																		<a role="button" href="{LINK_URL}" >
																		 {LINK_NAME} 
																		</a> 
																		{LINK_SUB}
																	</li>
																	';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['item_submenu_active']		= '
																	<li class="list-group-item active">
																		<a role="button"  href="{LINK_URL}">
																		 {LINK_NAME}
																		</a>
																		{LINK_SUB}
																	</li>
																	';	
																	
$CHAPTER_TEMPLATE['nav']['listChapters']['item_active'] 			= '
																	<li class="list-group-item active">
																		<a crole="button" href="{LINK_URL}">
																		 {LINK_NAME}
																		</a>
																	</li>
																	';	

$CHAPTER_TEMPLATE['nav']['listChapters']['end'] 					= '</ul>';		

	
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_start'] 			= '<ul class="page-nav" id="{LINK_IDENTIFIER}" role="menu" >';
	
	
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_item'] 			= '
																	<li role="menuitem" >
																		<a href="{LINK_URL}">{LINK_NAME}</a>
																		{LINK_SUB}
																	</li>
																	';
	
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_loweritem']		= '
																		<li role="menuitem" >
																			<a href="{LINK_URL}">{LINK_NAME}</a>
																			{LINK_SUB}
																		</li>
																	';
$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_loweritem_active'] = '
																			<li role="menuitem" class="active">
																				<a href="{LINK_URL}">{LINK_NAME}</a>
																				{LINK_SUB}
																			</li>
																		';

$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_item_active'] 	= '
																			<li role="menuitem" class="active">
																				<a href="{LINK_URL}">{LINK_NAME}</a>
																				{LINK_SUB}
																			</li>
																		';

$CHAPTER_TEMPLATE['nav']['listChapters']['submenu_end'] 			= '</ul>';	


$CHAPTER_TEMPLATE['nav']['listBooks'] = $CHAPTER_TEMPLATE['nav']['listChapters'];
$CHAPTER_TEMPLATE['nav']['listPages'] = $CHAPTER_TEMPLATE['nav']['listChapters'];
$CHAPTER_TEMPLATE['nav']['showPage'] = $CHAPTER_TEMPLATE['nav']['listChapters'];


// Used by e107_plugins/page/chapter_menu.php & /page.php?bk=x
$CHAPTER_TEMPLATE['panel']['listChapters']['caption']			= "{BOOK_NAME}";
$CHAPTER_TEMPLATE['panel']['listChapters']['start']				= "<!-- Chapter Template: Panel listChapters --><div class='chapter-panel-list'>";
$CHAPTER_TEMPLATE['panel']['listChapters']['item']				= "<div class='col-xs-12 col-md-4 text-center'>
																	<h2>{CHAPTER_NAME}</h2>
         															<h1><a href='{CHAPTER_URL}' >{CHAPTER_ICON}</a></h1><p>{CHAPTER_DESCRIPTION}</p><p>{CHAPTER_BUTTON}</p></div>";
$CHAPTER_TEMPLATE['panel']['listChapters']['end']				= "</div>";


$CHAPTER_TEMPLATE['panel']['listPages']['caption']				= "{CHAPTER_NAME}";
$CHAPTER_TEMPLATE['panel']['listPages']['start'] 				= "<!-- Chapter Template: Panel listPages -->{CHAPTER_BREADCRUMB}<div class='chapter-pages-list'>";
$CHAPTER_TEMPLATE['panel']['listPages']['item'] 				= "<div class='section'><div class='row'>{CPAGEMENU}</div></div>";
$CHAPTER_TEMPLATE['panel']['listPages']['end'] 					= "</div>";	



$CHAPTER_TEMPLATE['grid']['listPages']['caption']				= "{CHAPTER_NAME}";
$CHAPTER_TEMPLATE['grid']['listPages']['start']				    = "<!-- Chapter Template: Grid listPages -->{SETIMAGE: w=450}{CHAPTER_BREADCRUMB}<div class='chapter-pages-list'><div class='row'>";
$CHAPTER_TEMPLATE['grid']['listPages']['item']				    = "<div class='col-xs-12 col-md-4 text-center'>{CPAGEMENU}</div>";
$CHAPTER_TEMPLATE['grid']['listPages']['end']				    = "</div></div>";



$CHAPTER_TEMPLATE['grid']['listChapters']['start']				= "<!-- Chapter Template: Grid listChapters -->{SETIMAGE: w=450}<div class='row'>";
$CHAPTER_TEMPLATE['grid']['listChapters']['item']				= "<div class='col-xs-12 col-md-4 text-center'>
																	{CHAPTER_IMAGE}
																	<h2><a href='{CHAPTER_URL}' >{CHAPTER_NAME}</a></h2><p>{CHAPTER_DESCRIPTION}</p><p>{CHAPTER_BUTTON}</p></div>";
$CHAPTER_TEMPLATE['grid']['listChapters']['end']				= "</div>";




