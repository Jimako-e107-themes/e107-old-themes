<?php

// Template File
// hero Template file

if (!defined('e107_INIT')) { exit; }



$HERO_TEMPLATE['default']['header'] 	= '';
$HERO_TEMPLATE['default']['footer'] 	= '';
$HERO_TEMPLATE['default']['start'] 	    = '
<div id="large-header" class="large-header">
	<canvas id="demo-canvas"></canvas>
	<h1 class="main-title">{HERO_TITLE} ';
$HERO_TEMPLATE['default']['item'] 	    = '<span class="thin wow pulse" data-wow-duration="1.8s" data-wow-delay="0.5s" data-wow-iteration="3">{HERO_TEXT}</span><br/>';	
$HERO_TEMPLATE['default']['end'] 	    = '<span class="smallh wow zoomIn">{HERO_DESCRIPTION}</span><br/>
<a type="button" href="{HERO_BUTTON1_URL}" class="btn btn-cayman btn-{HERO_BUTTON1_CLASS} wow fadeInLeft">{HERO_BUTTON1_LABEL}</a> 
<a type="button" href="{HERO_BUTTON2_URL}" class="btn btn-cayman btn-{HERO_BUTTON2_CLASS} wow fadeInRight">{HERO_BUTTON2_LABEL}</a>
</h1>
</div>';












