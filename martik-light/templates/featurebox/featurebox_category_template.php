<?php
/*
* Copyright (c) e107 Inc 2013 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
*
* Featurebox core category templates
*/

// TODO - list of all available shortcodes & schortcode parameters
$FEATUREBOX_CATEGORY_TEMPLATE = array();

// Bootstrap 3
 
// v2.x Default - Bootstrap. 

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['list_start'] = '
    <div id="carousel">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <div class="carousel slide" data-ride="carousel">
              {FEATUREBOX_NAVIGATION|bootstrap3_carousel=loop&uselimit=1}

<div class="carousel-inner">
';

$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['list_end'] = '
				</div>
	 			 <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="fa fa-angle-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="fa fa-angle-right"></span>
              </a>	
        </div>
    </div> <!-- end carousel -->

<!-- end carousel -->
';
 
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['nav_start'] = '<!-- Indicators --><ol class="carousel-indicators">';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['nav_item'] = '<li data-target="#carousel-example-generic" data-slide-to="{FEATUREBOX_COUNTER=0}" class="{FEATUREBOX_ACTIVE}"></li>';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['nav_end'] = '</ol>';
$FEATUREBOX_CATEGORY_TEMPLATE['bootstrap3_carousel']['nav_separator'] = '';
 

$FEATUREBOX_CATEGORY_INFO = array(
	'bootstrap_carousel' 	=> array('title' => '---', 		'description' => "Bootstrap's Hero slider"),
	'bootstrap3_carousel' 	=> array('title' => 'Bootstrap v3 Carousel', 		'description' => "Bootstrap's Hero slider"),
	'bootstrap_tabs'		=> array('title' => '---'	,	 	'description' => 'Tabbed Feature box items'),
	'default' 				=> array('title' => '---', 					'description' => 'Flat - show by category limit'),
	'accordion' 			=> array('title' => '---'	, 	'description' => 'Accordion utilizing jQuery UI'),
  'dynamic' 				=> array('title' => '---', 	'description' => 'Load items on click (AJAX)'),
);

 
?>