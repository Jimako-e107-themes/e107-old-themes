<?php
/*
* Copyright (c) e107 Inc 2009 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id$
*
* Featurebox core item templates
*/

global $sc_style;


// e107 v2.x Defaults. 


$FEATUREBOX_TEMPLATE['bootstrap_carousel_default'] = '{SETIMAGE: w=2048&h=1536}
<div class="item {FEATUREBOX_ACTIVE}">
	<div class="page-header header-filter" style="background-image: url(\'{FEATUREBOX_IMAGE=src}\');">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-5 text-right">
					<h1 class="title">{FEATUREBOX_TITLE}</h1>
					<h4>{FEATUREBOX_TEXT}</h4>
					<br />
					{FEATUREBOX_BUTTON}
				</div>
			</div>
		</div>
  </div>
</div>    
';
$FEATUREBOX_TEMPLATE['bootstrap_carousel_left'] = '{SETIMAGE: w=2048&h=1536}
<div class="item {FEATUREBOX_ACTIVE}">
	<div class="page-header header-filter" style="background-image: url(\'{FEATUREBOX_IMAGE=src}\');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h1 class="title">{FEATUREBOX_TITLE}</h1>
					<h4>{FEATUREBOX_TEXT}</h4>
					<br />
					{FEATUREBOX_BUTTON}
				</div>
			</div>
		</div>
  </div>
</div> 
';
$FEATUREBOX_TEMPLATE['bootstrap_carousel_right'] = '{SETIMAGE: w=2048&h=1536}
<div class="item {FEATUREBOX_ACTIVE}">
	<div class="page-header header-filter" style="background-image: url(\'{FEATUREBOX_IMAGE=src}\');">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-5 text-right">
					<h1 class="title">{FEATUREBOX_TITLE}</h1>
					<h4>{FEATUREBOX_TEXT}</h4>
					<br />
		    	<div class="buttons">
					{FEATUREBOX_BUTTON: class=btn btn-danger btn-lg}   </div>
				</div>
			</div>
		</div>
  </div>
</div> 

';

$FEATUREBOX_TEMPLATE['bootstrap_carousel_image'] = '{SETIMAGE: w=2048&h=1536}
 <div class="item {FEATUREBOX_ACTIVE}">
      {FEATUREBOX_IMAGE=placeholder}
 </div>
';

$FEATUREBOX_TEMPLATE['default'] = '';
$FEATUREBOX_TEMPLATE['image_right'] = '';
$FEATUREBOX_TEMPLATE['accordion'] = '';
$FEATUREBOX_TEMPLATE['tabs'] = '';



$FEATUREBOX_INFO = array(
	
	'bootstrap_carousel_default' 	=> array('title' => 'Bootstrap Carousel Text Center', 							'description' => 'Title and Description'),
	'bootstrap_carousel_image' 		=> array('title' => 'Bootstrap Carousel (Image-Only)', 		'description' => 'Image Only'),
	'bootstrap_carousel_left' 		=> array('title' => 'Bootstrap Carousel Text Left', 		'description' => 'Image aligned left with title and text on the right'),
	'bootstrap_carousel_right' 		=> array('title' => 'Bootstrap Carousel Text Right', 	'description' => 'Image aligned right with title and text on the left'),
	
	'default' 						=> array('title' => '----', 								'description' => 'Title and description - no image'),
	'image_left'					=> array('title' => '----'	, 			'description' => 'Left floated image'),
	'image_right' 					=> array('title' => '----',				'description' => 'Right floated image'),

	// 'camera'						=> array('title' => 'Camera item',							'description' => 'For use with the "camera" category'),
	// 'camera_caption' 				=> array('title' => 'Camera item with caption',				'description' => 'For use with the "camera" category'),
	'accordion' 					=> array('title' => '----',						'description' => 'For use with accordion'),
	'tabs' 							=> array('title' => '----',								'description' => 'For use with tabs')
);    
?>