<?php

$options['features'] = array(
	'fields' => array(
		'section_title' => array(
			'title' => 'h2 Section Heading {SECTION_TITLE}',
			'type' => 'text',
			'writeParms' => array('size' => 'xxlarge'),
			'inuse' => true,
		),
		'section_subtitle' => array(
			'title' => 'Section description {SECTION_SUBTITLE}',
			'type' => 'text',
			'writeParms' => array('size' => 'xxlarge'),
			'inuse' => true,
		),
		'section_subtitle2' => array(
			'title' => 'Background image {SECTIONSUBTITLE2}',
			'type' => 'text',
			'writeParms' => array('size' => 'xxlarge'),
			'inuse' => true,
		),
	),

	"item_values" => array(
		'item_iconname' => array(
			'title' => 'Full icon name  {ITEM_ICONNAME}',
			'type' => 'text',
			'writeParms' => array('size' => 'xlarge'),
			'inuse' => true,
		),
		'item_delay' => array(
			'title' => 'Item Animation delay {ITEM_DELAY} ',
			'type' => 'text',
			'writeParms' => array('size' => 'xxlarge'),
			'inuse' => true,
		),
		'item_title' => array(
			'title' => 'Short title {ITEM_TITLE} ',
			'type' => 'text',
			'writeParms' => array('size' => 'xxlarge'),
			'inuse' => true,
		),
		'item_desc' => array(
			'title' => 'Small description {ITEM_DESC}',
			'type' => 'textarea',
			'writeParms' => array('size' => 'xxlarge'),
			'inuse' => true,
		),

	),
);
