<?php 
 
$textcolour =  e107::getLayouts('jmelements', 'textcolour' , 'front', null, false, false );
$iconcolour =  e107::getLayouts('jmelements', 'iconcolour' , 'front', null, false, false );

ksort($textcolour);
ksort($iconcolour);

$options['imagefeatures']  = array(
  	   'fields'    => array(
       'section_title' => array(
        				'title' => 'h2 Section Heading {SECTION_TITLE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),
       'section_subtitle' =>  array(
        				'title' => 'Section description {SECTION_SUBTITLE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),  
   		 'section_bgimage' =>array(
        				'title' => 'Background image {SECTION_BGIMAGE}',
                'type'  => 'image',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),      
      	),
 
  		"item_values" => array(
  				'item_iconname' =>array(
        				'title' => 'Full icon name  {ITEM_ICONNAME}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xlarge'),
        				'inuse' => true
      					),
  				'item_iconclass' =>array(
        				'title' => 'Class for icon style  {ITEM_ICONCLASS}',
                'type'  => dropdown,
                'writeParms' => $iconcolour,
        				'inuse' => true
						  ),
				'item_titleclass' =>array(
				'title' => 'Title class {ITEM_TITLECLASS}',
				'type'  => 'dropdown',
				'writeParms' =>  $textcolour, 
						'inuse' => true
							),  
  				'item_title' =>array(
        				'title' => 'Short title {ITEM_TITLE} ',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),    
  				'item_desc' =>array(
        				'title' => 'Small description {ITEM_DESC}',
                'type'  => 'textarea',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
						),   
				'item_image' =>array(
						'title' =>  'Item Image {ITEM_IMAGE}',
						'type'  => 'image',
						'writeParms' => array('size'=>'xlarge'),
								'inuse' => true
						), 
  		    'item_button' =>array(
        				'title' => 'Item button text {ITEM_BUTTON}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					), 
  		    'item_buttonclass' =>array(
        				'title' => 'Item button text {ITEM_BUTTONCLASS}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),                 
            'item_url' =>array(
        				'title' => 'Background image URL {ITEM_URL}',
                'type'  => 'url',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),                 
  			),
      );
      

?>