<?php 

include_once('settings.php');

$options['services']  = array(
 
  		'fields'    => array(
       'section_title' => array(
        				'title' => 'h2 Section Heading {SECTION_TITLE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => false
      					),
       'section_subtitle' =>  array(
        				'title' => 'Section description {SECTION_SUBTITLE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => false
      					),  
   		 'section_bgimage' =>array(
        				'title' => 'Background image {SECTION_BGIMAGE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => false
      					),      
      ),
 
  		"item_values" => array(
  				'item_icon' =>array(
        				'title' => 'Icon (insert icon full name) {ITEM_ICON}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xlarge'),
        				'inuse' => true
      					),
  				'item_title' =>array(
        				'title' => 'Short title {ITEM_TITLE}',
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
  				'item_class' =>array(
        				'title' => 'Item class colour {ITEM_CLASS}',
                'type' => 'dropdown',
                'writeParms' => array('optArray'=>$classlist),
        				'inuse' => true
      					), 	
  				'item_animation' =>array(
        				'title' => 'Item animation effect {ITEM_ANIMATION}',
                'type' => 'dropdown',
                'writeParms' => array('optArray'=>$animationeffects),
        				'inuse' => true
      					),							
  				'item_delay' =>array(
        				'title' => 'Item animation delay {ITEM_DELAY}',
                'type' => 'dropdown',
                'writeParms' => array('optArray'=>$delaylist),
        				'inuse' => true
      					), 								                   
  			),
      );
      

?>