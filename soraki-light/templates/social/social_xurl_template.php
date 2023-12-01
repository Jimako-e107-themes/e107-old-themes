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
   
   $SOCIAL_XURL_TEMPLATE['default']['start'] = '
   <div class="social-line">
         <div class="container">
            <div class="row">';
   $SOCIAL_XURL_TEMPLATE['default']['item'] =
   '<div class="col-md-3">
                     <a href="{XURL_ICONS_HREF}" class="btn btn-round btn-fill btn-social btn-{XURL_ICONS_ID}">
                         <i class="fa fa-{XURL_ICONS_ID}"></i> {XURL_ICONS_TITLE}
                     </a>
                 </div>';
   $SOCIAL_XURL_TEMPLATE['default']['end'] = '
            </div>
         </div>
     </div>';
     
 