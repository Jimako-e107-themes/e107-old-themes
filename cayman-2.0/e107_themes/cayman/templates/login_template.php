<?php
// $Id$

if (!defined('e107_INIT')) { exit; }

 /*
$LOGIN_WRAPPER['page']['LOGIN_TABLE_USERNAME'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_PASSWORD'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_SECIMG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_TEXTBOC'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_REMEMBERME'] = "<div class='form-group checkbox'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SUBMIT'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_FOOTER_USERREG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_LOGINMESSAGE'] = "<div class='alert alert-danger'>{---}</div>";
 */

$LOGIN_TEMPLATE['page']['body'] = '
 <div class="dentalform wow flipInY text-center" style="max-width: 500px; margin: 0 auto;">
	{LOGIN_TABLE_LOGINMESSAGE}
    <h4>'.LAN_LOGIN_4.'</h4>';
	if (e107::pref('core', 'password_CHAP') == 2)
	{
		$LOGIN_TEMPLATE['page']['body'] .= "
    	<div style='text-align: center' id='nologinmenuchap'>"."Javascript must be enabled in your browser if you wish to log into this site"."
		</div>
    	<span style='display:none' id='loginmenuchap'>";
	}
	else
	{
	  $LOGIN_TEMPLATE['page']['body'] .= "<span>";
	}
	$LOGIN_TEMPLATE['page']['body'] .= '
        {LOGIN_TABLE_USERNAME: class=tbox}
        {LOGIN_TABLE_PASSWORD: class=tbox}
        {SOCIAL_LOGIN: size=3x}
		{LOGIN_TABLE_SECIMG_SECIMG} {LOGIN_TABLE_SECIMG_TEXTBOC}
        {LOGIN_TABLE_REMEMBERME}
        {LOGIN_TABLE_SUBMIT: class=contact submit btn btn-ghost}

 </div> ';
 
$LOGIN_TEMPLATE['page']['header'] = '<section class="page-wrapper membersonly">
<div class="container">{LOGO=login}';
$LOGIN_TEMPLATE['page']['footer']  = '</div>
<div class="login-page-footer">
<div class="login-page-signup-link"><p>{LOGIN_TABLE_SIGNUP_LINK}</p></div>
<div class="login-page-fpw-link"><p>{LOGIN_TABLE_FPW_LINK}</p></div>
</div>
</section>';
	



