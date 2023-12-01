<?php 

$textcolour =  e107::getLayouts('jmelements', 'textcolour' , 'front', null, false, false );
$iconcolour =  e107::getLayouts('jmelements', 'iconcolour' , 'front', null, false, false );

ksort($textcolour);
ksort($iconcolour);


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
   		 'section_bgimage' =>array(
        				'title' => 'Background image {SECTION_BGIMAGE}',
                'type'  => 'image',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
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
          'item_class' =>array(
        				'title' => 'Icon (insert icon full name) {ITEM_CLASS}',
                'type'  => 'dropdown',
                'writeParms' =>  array(''=>'', 'card-white'=> 'card-white', 'card-black'=>'card-black',  
                'card-plain'=>'card-plain',
                'card-raised'=>'card-raised'), 
        				'inuse' => true
      					),   
                
          'item_data_background_color' =>array(
                'title' => 'Item background-color {ITEM_DATA_BACKGROUND_COLOR}',
                'type'  => 'dropdown',
                'writeParms' =>  array(''=>'', 'orange'=> 'orange', 'black'=>'black',  
                'grey'=>'grey' ), 
        				'inuse' => true
      					), 
                
  				'item_title' =>array(
        				'title' => 'Short title {ITEM_TITLE}, use <small> tag for currency',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => true
      					), 
          'item_titleclass' =>array(
        				'title' => 'Title class {ITEM_TITLECLASS}',
                'type'  => 'dropdown',
                'writeParms' =>  array(''=>'', 'title-gold'=>'title-gold', 'text-danger'=> 'text-danger' ), 
        				'inuse' => false
      					),  
  				'item_subtitle' =>array(
        				'title' => 'Subtitle {ITEM_SUBTITLE}',
                'type'  => 'text',
                'writeParms' => array('size'=>'xxlarge'),
        				'inuse' => false
      					),    
          'item_subtitleclass' =>array(
        				'title' => 'Subtitle class {ITEM_SUBTITLECLASS}',
                'type'  => 'dropdown',
                'writeParms' =>  array(''=>'', 'subtitle-black'=>'subtitle-black', 'subtitle-white'=> 'subtitle-white' ), 
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

  				'item_price' =>array(
        				'title' => 'Item price {ITEM_PRICE}    use < small > tag for currency',
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