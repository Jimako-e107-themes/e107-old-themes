<?php
$options = array(
	'fields' => array(
		"bodyclass" => array(
			'title' => 'Body Classes for this layout',
			'type' => 'text',
			'inuse' => false,
			'writeParms' => array('size' => 'xxlarge'),
		),
		"no-image" => array(
			'title' => 'No background image, neither default one',
			'type' => 'boolean',
			'inuse' => true,
		),
		"background-image-url" => array(
			'title' => 'Background Image Path',
			'type' => 'text',
			'inuse' => true,
			'writeParms' => array('size' => 'xxlarge'),
		),
		"background-image" => array(
			'title' => 'Background Image [if the path is not set]',
			'type' => 'image',
			'inuse' => true,
		),

	),
);
