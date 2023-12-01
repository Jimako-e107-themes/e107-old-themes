<?php
/*
* Copyright (c) 2012 e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
* $Id: e_shortcode.php 12438 2011-12-05 15:12:56Z secretr $
*
* Navigation Template 
*/

/* desktop */
$NAVIGATION_TEMPLATE["main"]["start"] 				    = '';
$NAVIGATION_TEMPLATE["main"]["item"] 					= "<li><a href='{NAV_LINK_URL}'{NAV_LINK_OPEN} title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>";
$NAVIGATION_TEMPLATE["main"]["item_active"] 			= "<li class='active'><a href='{NAV_LINK_URL}'{NAV_LINK_OPEN} title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>";

$NAVIGATION_TEMPLATE['main']['item_submenu'] = '
	<li class="dropdown {NAV_LINK_IDENTIFIER}">
		<a href="{NAV_LINK_URL}" title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_NAME}</a> 
		{NAV_LINK_SUB}
	</li>
';

$NAVIGATION_TEMPLATE['main']['item_submenu'] = '
	<li class="dropdown active    {NAV_LINK_IDENTIFIER}">
		<a href="{NAV_LINK_URL}" title="{NAV_LINK_DESCRIPTION}">{NAV_LINK_NAME}</a> 
		{NAV_LINK_SUB}
	</li>
';
$NAVIGATION_TEMPLATE["main"]["end"] 					= "";
$NAVIGATION_TEMPLATE["main"]["submenu_start"] 			= '<ul class="dropdown-menu text-left">';
$NAVIGATION_TEMPLATE["main"]["submenu_item"]			= $NAVIGATION_TEMPLATE["main"]["item"];
$NAVIGATION_TEMPLATE["main"]["submenu_loweritem"] 		= $NAVIGATION_TEMPLATE["main"]["item"];
$NAVIGATION_TEMPLATE["main"]["submenu_item_active"] 	= $NAVIGATION_TEMPLATE["main"]["item"] ;
$NAVIGATION_TEMPLATE["main"]["submenu_end"] 			= "</ul>";


// Footer links.  - ie. 3 columns of links. 

$NAVIGATION_TEMPLATE["footer"]["start"] 				= '<ul class="list-unstyled footer-nav text-center">';
$NAVIGATION_TEMPLATE["footer"]["item"] 					= "<li><a href='{NAV_LINK_URL}'{NAV_LINK_OPEN} title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>";
$NAVIGATION_TEMPLATE["footer"]["item_submenu"] 			= $NAVIGATION_TEMPLATE["footer"]["item"] ;
$NAVIGATION_TEMPLATE["footer"]["item_active"] 			= "<li class='active'{NAV_LINK_OPEN}><a href='{NAV_LINK_URL}' title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer"]["end"] 					= "</ul>";
$NAVIGATION_TEMPLATE["footer"]["submenu_start"] 		= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_item"]			= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_loweritem"] 	= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_item_active"] 	= "";
$NAVIGATION_TEMPLATE["footer"]["submenu_end"] 			= "";

 


$NAVIGATION_TEMPLATE["footer-column"]["start"] 				= '<ul class="list-unstyled f-nav">';
$NAVIGATION_TEMPLATE["footer-column"]["item"] 					= "<li><a href='{NAV_LINK_URL}'{NAV_LINK_OPEN} title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>";
$NAVIGATION_TEMPLATE["footer-column"]["item_submenu"] 			= $NAVIGATION_TEMPLATE["footer"]["item"];
$NAVIGATION_TEMPLATE["footer-column"]["item_active"] 			= "<li class='active'{NAV_LINK_OPEN}><a href='{NAV_LINK_URL}' title=\"{NAV_LINK_DESCRIPTION}\">{NAV_LINK_ICON}{NAV_LINK_NAME}</a></li>\n";
$NAVIGATION_TEMPLATE["footer-column"]["end"] 					= "</ul>\n";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_start"] 		= "";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_item"]			= "";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_loweritem"] 	= "";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_item_active"] 	= "";
$NAVIGATION_TEMPLATE["footer-column"]["submenu_end"] 			= "";
