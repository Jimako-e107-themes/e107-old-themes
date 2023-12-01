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
	 $SOCIAL_XURL_TEMPLATE['default']['start'] = '<ul class="social-network list-unstyled d-flex justify-content-around">';
	 $SOCIAL_XURL_TEMPLATE['default']['item'] = '<li><a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a></li>';
	 $SOCIAL_XURL_TEMPLATE['default']['end'] = '</ul>';
 
 
 	 $SOCIAL_XURL_TEMPLATE['contact']['start'] = '<ul class="social-network list-unstyled">';
	 $SOCIAL_XURL_TEMPLATE['contact']['item'] = '<li><a target="_blank" rel="noopener noreferrer" href="{XURL_ICONS_HREF}" data-tooltip-position="top" class="e-tip social-icon social-{XURL_ICONS_ID}" title="{XURL_ICONS_TITLE}" aria-label="{XURL_ICONS_TITLE}"><span class="e-social-{XURL_ICONS_ID} {XURL_ICONS_CLASS}"></span></a></li>';
	 $SOCIAL_XURL_TEMPLATE['contact']['end'] = '</ul>';