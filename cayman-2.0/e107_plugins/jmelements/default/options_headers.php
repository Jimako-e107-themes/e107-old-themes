<?php 
         /*
$textcolour =  e107::getLayouts('jmelements', 'textcolour' , 'front', null, false, false );
$iconcolour =  e107::getLayouts('jmelements', 'iconcolour' , 'front', null, false, false );

ksort($textcolour);
ksort($iconcolour);
          */
$btncolour =  e107::getLayouts('jmelements', 'buttons' , 'front', null, false, false );
ksort($btncolour);

$options['headers']  = array(
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
       'button01_text' =>array(
        				'title' => 'Button 1 text f.e. Contact us {BUTTON01_TEXT}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),  
       'button01_url' =>array(
        				'title' => 'Button 1 url f.e {e_BASE}contact.php {BUTTON01_URL}',
                'type'  => 'url',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),
       'button01_class' =>array(
        				'title' => 'Button 1 class   {BUTTON01_CLASS}',
                'type'  => 'dropdown',
                'writeParms' => array('options'=>$btncolour),
        				'inuse' => true
      					),
       'button02_text' =>array(
        				'title' => 'Button 2 text f.e. Contact us {BUTTON02_TEXT}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),  
       'button02_url' =>array(
        				'title' => 'Button 2 url f.e {e_BASE}contact.php {BUTTON02_URL}',
                'type'  => 'url',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),
       'button02_class' =>array(
        				'title' => 'Button 2 class   {BUTTON02_CLASS}',
                'type'  => 'dropdown',
                'writeParms' => array('options'=>$btncolour),
        				'inuse' => true
      					),
                
                
                                   
      	),
 
 
      );
      

?>