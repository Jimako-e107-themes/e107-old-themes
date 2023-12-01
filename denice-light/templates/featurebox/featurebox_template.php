<?php
/*
* Copyright (c) e107 Inc 2009 - e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id$
*
* Featurebox core item templates
*/

global $sc_style;


// e107 v2.x Defaults. 


$FEATUREBOX_TEMPLATE['bootstrap_carousel_default'] = '';
$FEATUREBOX_TEMPLATE['bootstrap_carousel_left'] = '';
$FEATUREBOX_TEMPLATE['bootstrap_carousel_right'] = '';

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
	
	'bootstrap_carousel_default' 	=> array('title' => '----', 							'description' => 'Title and Description'),
	'bootstrap_carousel_image' 		=> array('title' => 'Bootstrap Carousel (Image-Only)', 		'description' => 'Image Only'),
	'bootstrap_carousel_left' 		=> array('title' => '----', 		'description' => 'Image aligned left with title and text on the right'),
	'bootstrap_carousel_right' 		=> array('title' => '----', 	'description' => 'Image aligned right with title and text on the left'),
	
	'default' 						=> array('title' => '----', 								'description' => 'Title and description - no image'),
	'image_left'					=> array('title' => '----'	, 			'description' => 'Left floated image'),
	'image_right' 					=> array('title' => '----',				'description' => 'Right floated image'),

	// 'camera'						=> array('title' => 'Camera item',							'description' => 'For use with the "camera" category'),
	// 'camera_caption' 				=> array('title' => 'Camera item with caption',				'description' => 'For use with the "camera" category'),
	'accordion' 					=> array('title' => '----',						'description' => 'For use with accordion'),
	'tabs' 							=> array('title' => '----',								'description' => 'For use with tabs')
);    
?>