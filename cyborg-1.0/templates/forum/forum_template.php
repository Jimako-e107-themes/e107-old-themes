<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */
if (!defined('e107_INIT')) { exit; }
 
/*
$FORUM_MAIN_START	= "<br />MAIN START";
$FORUM_MAIN_PARENT 	= "<br />MAIN PARENT";
$FORUM_MAIN_FORUM		= "<br />MAIN FORUM";
$FORUM_MAIN_END		= "<br />MAIN END";
$FORUM_NEWPOSTS_START	= "<br />NEWPOSTS-START";
$FORUM_NEWPOSTS_MAIN 	= "<br />NEWPOSTS-MAIN";
$FORUM_NEWPOSTS_END 	= "<br />NEWPOSTS END";
$FORUM_TRACK_START	= "<br />TRACK-START";
$FORUM_TRACK_MAIN	= "<br />TRACK-MAIN";
$FORUM_TRACK_END	= "<br />TRACK-END";
*/

// New in v2.x - requires a bootstrap theme be loaded.  

if(class_exists('theme_settings')) {
  $theme_settings = theme_settings::get_forumstyle(); 
}

$FORUM_TEMPLATE['main']['start']			=  "";

$FORUM_TEMPLATE['main']['parent_start']			= 	'
<div class="card '.$theme_settings['forum_parent_card'].' mb-3 shadow-sm">
  <div class="card-header '.$theme_settings['forum_parent_card_header'].' ">
  	<div class="row">
  		<div class="col-lg-7 col-md-6 col-12">  {PARENTIMAGE:h=50}{PARENTNAME} {PARENTSTATUS}	</div>
  		<div class="col-md-2 d-none d-md-block text-center">{LAN=FORUM_0002}/{LAN=FORUM_0003}</div>
  		<div class="col-lg-3 col-md-4 d-none d-md-block">{LAN=FORUM_0004}</div>
  	</div>
  </div><div class="card-body">';

$FORUM_TEMPLATE['main']['parent_end']	    = '</div></div>';

$FORUM_TEMPLATE['main']['forum']			= 	'

<div class="container-fluid row-item ">
  <div class="row align-items-center'.$theme_settings['forum_row_class'].'">
    <div class="col-lg-7 col-md-6 col-12 ">
      {NEWFLAG}{FORUMIMAGE:h=50}{FORUMNAME}<br><small>{FORUMDESCRIPTION}</small>{FORUMSUBFORUMS} 
      <span class="d-md-none"> 
        <i class="fa fa-list ml-2" title="{LAN=FORUM_0002}" aria-hidden="true"></i><span class="sr-only">{LAN=FORUM_0002}</span> {THREADSX} &nbsp; 
        <i class="fa fa-comment-o  ml-2" title="{LAN=FORUM_0003}" aria-hidden="true"></i><span class="sr-only">{LAN=FORUM_0003}</span> {REPLIESX}
        <br><small>{LAN=FORUM_0004}: <span class="post-author">{LASTPOST:type=username}</span> <span class="post-date">{LASTPOST:type=datelink}</span></small>
      </span>
      </div>
    
    <div class="col-md-2 d-none d-md-block text-center">
      {THREADS} / {REPLIES}
    </div>
    <div class="col-lg-3 col-md-4 d-none d-md-block">
       <small><span class="post-author">{LASTPOST:type=username}</i></span> <span>{LASTPOST:type=datelink}</span></small>
    </div>
  </div>
</div>
        ';

//{LASTPOST:type=username} + {LASTPOST:type=datelink} can also be replaced by the legacy shortcodes {LASTPOST} or {LASTPOSTUSER} + {LASTPOSTDATE}

$FORUM_TEMPLATE['main']['end']				= "<div class='forum-footer center'><small>{USERINFO}</small></div> ";

// $FORUM_WRAPPER['main']['forum']['USERINFOX'] = "{FORUM_BREADCRUMB}(html before){---}(html after)";

// Tracking
$FORUM_TEMPLATE['track']['start']       = "{FORUM_BREADCRUMB}<div id='forum-track'>
											<table class='table table-striped table-bordered table-hover ".$theme_settings['forum_table_background']."'>
											<colgroup>
											<col style='width:5%' />
											<col />
											<col style='width:15%' />
											<col style='width:5%' />
											</colgroup>
											<thead>
											<tr>

												<th colspan='2'>{LAN=FORUM_1003}</th>
												<th class='hidden-xs text-center'>{LAN=FORUM_0004}</th>
												<th class='text-center'>{LAN=FORUM_1020}</th>
												</tr>
											</thead>
											";

$FORUM_TEMPLATE['track']['item']        = "<tr>
											<td class='text-center'>{NEWIMAGE}</td>
											<td>{TRACKPOSTNAME}</td>
											<td class='hidden-xs text-center'><small>{LASTPOSTUSER} {LASTPOSTDATE}</small></td>
											<td class='text-center'>{UNTRACK}</td>
											</tr>";


$FORUM_TEMPLATE['track']['end']         = "</table>\n</div>";




/*
$FORUM_TEMPLATE['main-end']				.= "

<div class='center'>
	<small class='muted'>{PERMS}</small>
	</div>
<table style='".USER_WIDTH."' class='fborder table'>\n<tr>
<td colspan='2' style='width:60%' class='fcaption'>{INFOTITLE}</td>\n</tr>\n<tr>
<td rowspan='4' style='width:5%; text-align:center' class='forumheader3'>{LOGO}</td>
<td style='width:auto' class='forumheader3'>{USERINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{INFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{FORUMINFO}</td>\n</tr>
<tr>\n<td style='width:95%' class='forumheader3'>{USERLIST}<br />{STATLINK}</td>\n</tr>\n</table>
";
*/

