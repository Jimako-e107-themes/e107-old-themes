<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_themes/templates/comment_template.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */

if (!defined('e107_INIT')) { exit; }


// Shortcode wrappers.
$COMMENT_WRAPPER['item']['COMENT_TIMEDATE']     = '<small>{---}</small>';
$COMMENT_WRAPPER['item']['COMMENT_EDIT']        = '<span class="comment-edit">{---}</span>';
$COMMENT_WRAPPER['item']['COMENT_REPLY']		= '<span class="comment-reply">{---}</span>';
$COMMENT_WRAPPER['item']['COMMENT_AVATAR']  	= '<div class="comment-avatar">{---}</div>';
$COMMENT_WRAPPER['item']['COMMENT_MODERATE']	= '<span class="comment-moderate">{---}</span>';

$COMMENT_WRAPPER['form'] = $COMMENT_WRAPPER['item']; // use the above wrappers for the 'form' as well.

// Templates

$COMMENT_TEMPLATE['form']			= '
	{SETIMAGE: w=90&h=90&crop=1}
	<div class="row thumbbox1">
		<div class="col-md-3 text-center">
			{COMMENT_AVATAR: shape=circle}
		</div>
		<div class="col-md-9 text-left">
			 
				{AUTHOR_INPUT}
				{COMMENT_INPUT}
			 
				{COMMENT_BUTTON: class=btn btn-default e-comment-submit pull-right float-right}
				{COMMENT_SHARE}
			  
		</div>
	</div>'; 

$COMMENT_TEMPLATE['item'] = '
<div class="row thumbbox1">
	{SETIMAGE: w=90&h=90&crop=1}
	<div class="col-md-3 text-center">
		{COMMENT_AVATAR: shape=circle}
		<div class="comment-author">{USERNAME}</div>
		{COMMENT_TIMEDATE=relative}
	</div>
	<div class="col-md-9 text-left">
		<div class="comment-text description" id="{COMMENT_ITEMID}-edit" contentEditable="false">
			{COMMENT}<br>{COMMENT_RATE}
		</div>
		<div class="text-right">
			{COMMENT_STATUS} {COMMENT_REPLY} {COMMENT_EDIT} {COMMENT_MODERATE}
		</div>
	</div>
</div>
';
 
$COMMENT_TEMPLATE['layout'] 		= '
<div>
	{COMMENTFORM}
</div>
<div>
 {COMMENTS}
</div> 
<div style="padding:10px 0px">{MODERATE}</div>';
										

