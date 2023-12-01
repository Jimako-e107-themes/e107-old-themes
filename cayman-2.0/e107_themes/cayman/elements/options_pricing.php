<?php 
 
$options['pricing']  = array(
 
  	'fields'    => array(
       'section_title' => array(
        	'title' => 'Section Heading {SECTION_TITLE}',
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
    ),
  	'item_values' => array (
        'item_title' =>array(
			'title' => 'Title  {ITEM_TITLE}',
		 'type'  => 'text', 
		 'writeParms' => array('size'=>'xlarge'),
		 'inuse' => true
	   ),
  		'item_columnclass' =>array(
        	'title' => 'Item class {ITEM_COLUMNCLASS}',
                'type'  => 'dropdown',
                'writeParms' =>  array(
                'col-md-4'=> 'col-md-4', 
                'col-md-3'=>'col-md-3',  
                'col-md-2'=>'col-md-2',
                'col-md-6'=> 'col-md-6',                 
                 ),
        	'inuse' => true
      	),
		'item_class' =>array(
			'title' => 'Item class {ITEM_CLASS}',
			'type'  => 'dropdown',
			'writeParms' =>  array(''=>'', 'featured'=> 'featured'), 
			'inuse' => true
		),   

		'item_price' =>array(
        	'title' => 'Item price {ITEM_PRICE}',
            'type'  => 'text',
            'writeParms' => array('size'=>'xxlarge'),
        	'inuse' => true
      	),   
		'item_subtitle' =>array(
        	'title' => 'Item subtitle (per month) {ITEM_SUBTITLE}',
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
      	'item_button' =>array(
        	'title' => 'Item button text {ITEM_BUTTON}',
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
 