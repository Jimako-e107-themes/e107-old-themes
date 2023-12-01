<?php
$TAGCLOUD_MENU_TEMPLATE = array();
          
$TAGCLOUD_MENU_TEMPLATE['default']['caption']       = '{TAGCLOUD_MENU_CAPTION}';
$TAGCLOUD_MENU_TEMPLATE['default']['start']       = '<ul class="list-unstyled tags-list">';
$TAGCLOUD_MENU_TEMPLATE['default']['item']       = "<li><a class='tag' href='{TAG_URL}'><span class='size{TAG_SIZE}'>{TAG_NAME}</span></a></li>";
$TAGCLOUD_MENU_TEMPLATE['default']['end']       = '<div style="clear:both"></div></ul>';
      
  /* example  for the same size tag
$TAGCLOUD_MENU_TEMPLATE['default']['caption']   = '{TAGCLOUD_MENU_CAPTION}';
$TAGCLOUD_MENU_TEMPLATE['default']['start']     = '<div class="tag-cloud">';
$TAGCLOUD_MENU_TEMPLATE['default']['item']      = '<span class="badge"><a href="{TAG_URL}">{TAG_NAME}</a> ({TAG_COUNT})</span>';
$TAGCLOUD_MENU_TEMPLATE['default']['end']       = '</div>';
 
 <ul class="list-unstyled tags-list">
								<li><a href="javascript:void(0);">Music</a></li>
								<li><a href="javascript:void(0);">Travel</a></li>
								<li><a href="javascript:void(0);">video</a></li>
								<li><a href="javascript:void(0);">Ecommerce</a></li>
								<li><a href="javascript:void(0);">feature</a></li>
								<li><a href="javascript:void(0);">text</a></li>
								<li><a href="javascript:void(0);">sports</a></li>
								<li><a href="javascript:void(0);">fashion</a></li>
								<li><a href="javascript:void(0);">store</a></li>
							</ul>
 
 */