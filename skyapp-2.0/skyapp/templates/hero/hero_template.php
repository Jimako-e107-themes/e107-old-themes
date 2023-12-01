<?php

// Template File
// hero Template file

if (!defined('e107_INIT')) { exit; }

$HERO_TEMPLATE = array();
 
$HERO_TEMPLATE['default']['start'] 	= '';
$HERO_TEMPLATE['default']['end']  	= '';

$HERO_TEMPLATE['default']['header']    = '<section class="section-showcase"><div class="container showcase-content">';
$HERO_TEMPLATE['default']['footer']  	= '</div></section>';
$HERO_TEMPLATE['default']['start'] 	    = 
' <h1>{HERO_TITLE}</h1>
  <p class="lead">{HERO_DESCRIPTION}</p> 
  <div class="downloads">
     <a href="{HERO_BUTTON1_URL}" class="btn btn-hero rounded-0 p-0">{HERO_BUTTON1_ICON}<span>{HERO_BUTTON1_LABEL}</span></a>
     <a href="{HERO_BUTTON2_URL}" class="btn btn-hero rounded-0 p-0">{HERO_BUTTON2_ICON}<span>{HERO_BUTTON2_LABEL}</span></a>  
  
  </div>';

 








