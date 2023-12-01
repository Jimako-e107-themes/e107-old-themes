<?php
   $options['testimonial']  = array(
  		'fields'    => array(
       'section_intro' => array(
        				'title' => 'Section intro f.e. Here are some {SECTION_INTRO}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),
       'section_title' => array(
        				'title' => 'Section Heading f.e. Clients Testimonials {SECTION_TITLE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),
       'section_subtitle' =>  array(
        				'title' => 'Section description {SECTION_SUBTITLE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => false
      					),  
  		 'section_bgimage' =>array(
        				'title' => 'Background image {SECTION_BGIMAGE}',
                'type'  => 'image',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),    
      ),
 
  		"item_values" => array(
  				'item_photo' =>array(
                'title' =>  'Testimonial photo {ITEM_PHOTO}',
                'type'  => 'image',
                'writeParms' => array('size'=>'xlarge'),
        				'inuse' => true
      					),
  				'item_title' =>array(
        				'title' => 'Testimonial name {ITEM_TITLE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),  
  				'item_subtitle' =>array(
        				'title' => 'Testimonial subtitle {ITEM_SUBTITLE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),  
  				'item_desc' =>array(
        				'title' => 'Testimonial description {ITEM_DESC}',
                'type'  => 'textarea',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),  
  				'item_url' =>array(
        				'title' => 'Testimonial link {ITEM_URL}',
                'type'  => 'url',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),                  
  			),
      );
?>