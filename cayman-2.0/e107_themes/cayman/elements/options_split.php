<?php 
 

$options['split']  = array(
  	   'fields'    => array(
       'section_intro' => array(
        				'title' => 'Small intro text <span>by </span>Creative Tim {SECTION_INTRO}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),       
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
       'section_desc' =>  array(
        				'title' => 'Section description {SECTION_DESC}',
                'type'  => 'textarea',
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
 
 
      );
      

 