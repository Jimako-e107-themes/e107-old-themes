<?php 

$options['faqs']  = array(
 
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
      
  				'item_columnclass' =>array(
        				'title' => 'Item class {ITEM_COLUMNCLASS}',
                'type'  => 'dropdown',
                'writeParms' =>  array(''=>'', 
                'col-md-4'=> 'col-md-4', 
                'col-md-3'=>'col-md-3',  
                'col-md-2'=>'col-md-2',
                'col-md-4 mr-auto'=> 'col-md-4 to right', 
                'col-md-4 ml-auto'=> 'col-md-4 to left',                 
                 ),
        				'inuse' => true
      					),
  				'item_iconclass' =>array(
        				'title' => 'Class for icon style  {ITEM_ICONCLASS}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xlarge'),
        				'inuse' => true
      					),
  				'item_iconname' =>array(
        				'title' => 'Full icon name  {ITEM_ICONNAME}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xlarge'),
        				'inuse' => true
      					),
  				'item_quesion' =>array(
        				'title' => 'Short title {ITEM_QUESION}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),   
  				'item_answer' =>array(
        				'title' => 'Small description {ITEM_ANSWER}',
                'type'  => 'textarea',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					),   
  			'item_startdiv' =>array(
        				'title' => 'For special layout {ITEM_STARTDIV}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xlarge'),
        				'inuse' => true
      					),  
        
        'item_enddiv' =>array(
        				'title' => 'For special layout {ITEM_ENDDIV}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xlarge'),
        				'inuse' => true
      					),                 
  			),
      );
      

?>