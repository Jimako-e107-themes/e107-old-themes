<?php
	/**
	 * e107 website system
	 *
	 * Copyright (C) 2008-2017 e107 Inc (e107.org)
	 * Released under the terms and conditions of the
	 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
	 *
	 */


	/**
	 * {XURL_ICONS} template
	 */
	 $SOCIAL_XURL_TEMPLATE['default']['start'] = '<p class="xurl-social-icons hidden-print">';
	 $SOCIAL_XURL_TEMPLATE['default']['item'] = '<a target="_blank" href="{XURL_ICONS_HREF}" aria-label="{XURL_ICONS_TITLE}" data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a>';
	 $SOCIAL_XURL_TEMPLATE['default']['end'] = '</p>';

 

	/**
	 * {XURL_ICONS} footer template
	 */
	$SOCIAL_XURL_TEMPLATE['footer']['start'] = '<ul class="social-icons">';
	$SOCIAL_XURL_TEMPLATE['footer']['item'] = '
	<li class="wow bounceIn animated" {XURL_ICONS_WOW_DELAY}><a href="{XURL_ICONS_HREF}" aria-label="{XURL_ICONS_TITLE}" title="{XURL_ICONS_TITLE}"><i class="fa fa-{XURL_ICONS_ID}"></i></a></li>';
	$SOCIAL_XURL_TEMPLATE['footer']['end'] = '</ul>';	 

	/**
     * {XURL_ICONS} dark footer template
     */
    $SOCIAL_XURL_TEMPLATE['darkfooter']['start'] = '<ul class="social-icon sep-top-xs">';
    $SOCIAL_XURL_TEMPLATE['darkfooter']['item'] = '
    <li {XURL_ICONS_WOW_DELAY}><a href="{XURL_ICONS_HREF}" aria-label="{XURL_ICONS_TITLE}" title="{XURL_ICONS_TITLE}"><i class="fa fa-lg fa-{XURL_ICONS_ID}"></i></a></li>';
    $SOCIAL_XURL_TEMPLATE['darkfooter']['end'] = '</ul>';
