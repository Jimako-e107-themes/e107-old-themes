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
$CHAPTER_TEMPLATE['default']['listPages']['start'] 					= "{CHAPTER_BREADCRUMB}<ul class='page-pages-list'>";
$CHAPTER_TEMPLATE['default']['listPages']['item'] 					= "<li><a href='{CPAGEURL}'>{CPAGETITLE}</a></li>";
$CHAPTER_TEMPLATE['default']['listPages']['end'] 					= "</ul>";	

$CHAPTER_TEMPLATE['default']['listChapters']['caption']				= "{BOOK_NAME}";	
$CHAPTER_TEMPLATE['default']['listChapters']['start']				= "<ul class='page-chapters-list'>";
$CHAPTER_TEMPLATE['default']['listChapters']['item']				= "<li><h4><a href='{CHAPTER_URL}'>{CHAPTER_NAME}</a></h4>{PAGES}";
$CHAPTER_TEMPLATE['default']['listChapters']['end']					= "</ul>";

$CHAPTER_TEMPLATE['default']['listBooks']['start']					= "<ul class='page-chapters-list'>";
$CHAPTER_TEMPLATE['default']['listBooks']['item']					= "<li><h3><a href='{BOOK_URL}'>{BOOK_NAME}</a></h3>{CHAPTERS}";
$CHAPTER_TEMPLATE['default']['listBooks']['end']					= "</ul>";

  
/* BOOSTS SYSTEM */
//{BOOK_CHAPTERS: name=book-sef-url&template=xxxxx&limit=3} 
//{BOOK_CHAPTERS: name=home-boot&template=boot-navigation&limit=8}
//$CHAPTER_TEMPLATE[---TEMPLATE --]['listChapters']

$CHAPTER_TEMPLATE['boot-navigation']['listChapters']['start'] 			= ' ';
$CHAPTER_TEMPLATE['boot-navigation']['listChapters']['end'] 			= ' ';
$CHAPTER_TEMPLATE['boot-navigation']['listChapters']['item'] 			= ' 
              <div class="col-6 minh-25vh minh-md-33vh sidebar-item-wrapper py-5" data-content="{CHAPTER_ANCHOR}">
                <div class="bg-holder" style="background-image:url({CHAPTER_IMAGE_SRC});">
                </div>
                <!--/.bg-holder-->

                <div class="sidebar-item">
                  <img class="mb-2 mb-md-3 nav-icon" src="{CHAPTER_ICON_SRC}" alt="{CHAPTER_TITLE}">
                  <h2 class="font-weight-light text-white fs-1 fs-xl-2 fs-xxl-3">{CHAPTER_TITLE}</h2>
                </div>
              </div>
 
';





/* use page templates if you need advanced content */

$CHAPTER_TEMPLATE['boot-content']['listChapters']['start']  = ' ';
$CHAPTER_TEMPLATE['boot-content']['listChapters']['item'] 	 = '
<div class="page position-absolute t-0 w-100" id="{CHAPTER_ANCHOR}">
	<div class="row no-gutters minh-100vh">
	  <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-lg-0">
		<section class="pt-5 pt-xl-7 pt-xxl-8">
            <div class="container-fluid">
			     {CHAPTER_PAGES: template=boot-content}
            </div>
		</section>
		<footer class="page-footer">
		<div class="bg-holder" style="background-image:url({CHAPTER_IMAGE_SRC});background-position: 0 27%; transform: scale(1.1);">
		</div>
		<div class="row justify-content-center">
		  <div class="col-lg-10">
			<div class="row align-items-center">
			{SITEDISCLAIMER}
			</div>
		  </div>
		</div>
	  </footer>
	  </div>
      
	  <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-lg-relative">
		<div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="{THEME}assets/img/times.svg" width="25" alt=""/><img class="d-lg-none" src="{THEME}assets/img/times-black.svg" width="18" alt=""/></span>
		  <div class="bg-holder" style="background-image:url({CHAPTER_IMAGE_SRC});">
		  </div>
		  <h1 class="page-title">{CHAPTER_DESCRIPTION}</h1>
		</div>
	  </div>
	</div>
  </div>';
  $CHAPTER_TEMPLATE['boot-content']['listChapters']['end'] 				= ' ';

  $CHAPTER_TEMPLATE['boot-content']['listPages']['caption']				    = " ";
  $CHAPTER_TEMPLATE['boot-content']['listPages']['start'] 					= " ";
  $CHAPTER_TEMPLATE['boot-content']['listPages']['item'] 					= " ";
  $CHAPTER_TEMPLATE['boot-content']['listPages']['end'] 					= " ";	