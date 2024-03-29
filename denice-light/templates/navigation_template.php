<?php
/*
* Copyright (c) 2012 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Navigation Template 
*/

 
// TEMPLATE FOR {NAVIGATION=main}
$NAVIGATION_TEMPLATE['main']['start'] = '<ul class="nav navbar-nav nav-main">';

// Main Link single link, no children
$NAVIGATION_TEMPLATE['main']['item'] = '  
	<li>
		<a  role="button" href="{LINK_URL}"{LINK_OPEN} title="{LINK_NAME} {LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		</a> 
	</li>
';

// Main Link - active state  single link, no children
$NAVIGATION_TEMPLATE['main']['item_active'] = '
	<li class="active">
		<a class="e-tip" role="button"  data-target="#" href="{LINK_URL}"{LINK_OPEN} title="{LINK_NAME} {LINK_DESCRIPTION}">
		 {LINK_ICON} {LINK_NAME}
		</a>
	</li>
';

// Main Link which has a sub menu. 
$NAVIGATION_TEMPLATE['main']['item_submenu'] = '
	<li class="dropdown {LINK_IDENTIFIER}">
		<a class="dropdown-toggle"  role="button" data-toggle="dropdown" data-target="#" href="{LINK_URL}" title="{LINK_NAME} {LINK_DESCRIPTION}">
		 {LINK_ICON}{LINK_NAME} 
		 <span class="caret"></span>
		</a> 
		{LINK_SUB}
	</li>
';

// Main Link which has a sub menu - active state.
$NAVIGATION_TEMPLATE['main']['item_submenu_active'] = '
	<li class="dropdown active {LINK_IDENTIFIER}">
		<a class="dropdown-toggle" role="button" data-toggle="dropdown" data-target="#" href="{LINK_URL}">
		 {LINK_ICON}{LINK_NAME}
		 <span class="caret"></span>
		</a>
		{LINK_SUB}
	</li>
';	

$NAVIGATION_TEMPLATE['main']['end'] = '</ul>';	

// Sub menu 
$NAVIGATION_TEMPLATE['main']['submenu_start'] = '
		<ul class="dropdown-menu submenu-start submenu-level-{LINK_DEPTH}" role="menu" >
';

// Sub menu Link, last item of any submenu 
$NAVIGATION_TEMPLATE['main']['submenu_item'] = '
			<li role="menuitem" class="link-depth-{LINK_DEPTH}">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
			</li>
';

// Sub menu Link - active state, last item of any submenu
$NAVIGATION_TEMPLATE['main']['submenu_item_active'] = '
			<li role="menuitem" class="active link-depth-{LINK_DEPTH}">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
			</li>
';
$NAVIGATION_TEMPLATE['main']['submenu_end'] = '</ul>';

// Sub menu as grandparent - 2 levels of children
$NAVIGATION_TEMPLATE['main']['submenu_lowerstart'] = '
		<ul class="dropdown-menu submenu-start lower submenu-level-{LINK_DEPTH}" role="menu" >
';

// Sub Menu Link which has a sub menu. 
$NAVIGATION_TEMPLATE['main']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu lower">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['main']['submenu_loweritem_active'] = '
			<li role="menuitem" class="dropdown-submenu active">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['main']['submenu_lowerend'] = '</ul>';



// TEMPLATE FOR {NAVIGATION=side}

$NAVIGATION_TEMPLATE['side']['start'] 				= '<ul class="listgroup nav-side">
														';

$NAVIGATION_TEMPLATE['side']['item'] 				= '<li class="list-group-item"><a href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['item_submenu'] 		= '<li class="nav-header">{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>
														';

$NAVIGATION_TEMPLATE['side']['item_active'] 		= '<li class="list-group-item active"{LINK_OPEN}><a class="list-group-item active" href="{LINK_URL}" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['side']['end'] 				= '</ul>
														';

$NAVIGATION_TEMPLATE['side']['submenu_start'] 		= '';

$NAVIGATION_TEMPLATE['side']['submenu_item']		= '<li class="list-group-item" ><a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['side']['submenu_item_active'] = '<li class="active"><a href="{LINK_URL}">{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['side']['submenu_end'] 		= '';


// small footer, footer links horizontal
// if you need caption, use shortcode menu with {NAVIGATION: type=xxx&layout=footer}

$NAVIGATION_TEMPLATE["footer"]["start"] 				= '<nav class="pull-left"><ul>';
$NAVIGATION_TEMPLATE["footer"]["item"] 					= "<li><a href='{LINK_URL}'{LINK_OPEN} title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["item_active"] 			= "<li class='active'{LINK_OPEN}><a href='{LINK_URL}' title=\"{LINK_DESCRIPTION}\">{LINK_ICON}{LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["item_submenu"] 			=   '{LINK_SUB}';
$NAVIGATION_TEMPLATE["footer"]["end"] 					= "</ul></nav>";
$NAVIGATION_TEMPLATE["footer"]["submenu_start"] 		= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_item"]			= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_loweritem"] 	= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_item_active"] 	= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_end"] 			= "";


$NAVIGATION_TEMPLATE['alt']['start'] 				= '<ul class="nav nav-list">
														';

$NAVIGATION_TEMPLATE['alt']['item'] 				= '<li><a href="{LINK_URL}"{LINK_OPEN} title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['alt']['item_submenu'] 		= '<li class="nav-header">{LINK_ICON}{LINK_NAME}{LINK_SUB}</li>
														';

$NAVIGATION_TEMPLATE['alt']['item_active'] 		= '<li class="active"{LINK_OPEN}><a href="{LINK_URL}" title="{LINK_DESCRIPTION}">{LINK_ICON}{LINK_NAME}</a></li>
														';

$NAVIGATION_TEMPLATE['alt']['end'] 				= '</ul>
														';

$NAVIGATION_TEMPLATE['alt']['submenu_start'] 		= '';

$NAVIGATION_TEMPLATE['alt']['submenu_item']		= '<li><a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['submenu_loweritem'] = '
			<li role="menuitem" class="dropdown-submenu">
				<a href="{LINK_URL}"{LINK_OPEN}>{LINK_ICON}{LINK_NAME}</a>
				{LINK_SUB}
			</li>
';

$NAVIGATION_TEMPLATE['alt']['submenu_item_active'] = '<li class="active"><a href="{LINK_URL}">{LINK_ICON}{LINK_NAME}</a></li>';

$NAVIGATION_TEMPLATE['alt']['submenu_end'] 		= '';


$NAVIGATION_TEMPLATE['alt5'] 						= $NAVIGATION_TEMPLATE['alt'];
$NAVIGATION_TEMPLATE['alt6'] 						= $NAVIGATION_TEMPLATE['alt'];

$NAVIGATION_TEMPLATE['alt5']['start'] 				= '<ul class="nav nav-list nav-alt5">';
$NAVIGATION_TEMPLATE['alt6']['start'] 				= '<ul class="nav nav-list nav-alt6">';




?>