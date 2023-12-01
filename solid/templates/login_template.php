<?php
/*
* e107 website system
*
* Copyright (C) 2008-2013 e107 Inc (e107.org)
* Released under the terms and conditions of the
* GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
*
* e107 Solid theme
*
* #######################################
* #     e107 website system theme       #
* #     by Jimako                    	 #
* #     https://www.e107sk.com          #
* #######################################
*/

if (!defined('e107_INIT'))
{
	exit;}

$login_logo = '';

$theme_prefs = e107::pref('theme');
 

$login_logo = "<div class='center'>{LOGO: login}</div>";
if ($theme_prefs['login_hide_logo'])
{
	$login_logo = '';
}

// Starter for v2. - Bootstrap
$LOGIN_TEMPLATE['page']['header'] = "
	<div style='display:table; height:100%; margin: 0 auto;'>
	 <div style='display:table-cell; vertical-align:middle;'> 
	 	<div id='login-template'>  " . $login_logo . "
		";

$LOGIN_TEMPLATE['page']['body'] = '
		{LOGIN_TABLE_LOGINMESSAGE}
        <h2 class="form-signin-heading">' . LAN_LOGIN_4 . '</h2>';
if (e107::pref('core', 'password_CHAP') == 2)
{
	$LOGIN_TEMPLATE['page']['body'] .= "
    	<div style='text-align: center' id='nologinmenuchap'>" . "Javascript must be enabled in your browser if you wish to log into this site" . "
		</div>
    	<span style='display:none' id='loginmenuchap'>";
}
else
{
	$LOGIN_TEMPLATE['page']['body'] .= "<span>";
}

$LOGIN_WRAPPER['page']['LOGIN_TABLE_USERNAME'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_PASSWORD'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_SECIMG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_TEXTBOC'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_REMEMBERME'] = "<div class='form-group checkbox'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SUBMIT'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_FOOTER_USERREG'] = "<div class='form-group'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_LOGINMESSAGE'] = "<div class='alert alert-danger'>{---}</div>";

// $LOGIN_WRAPPER['page']['LOGIN_TABLE_FPW_LINK'] = "<div class='form-group'>{---}</div>";

$LOGIN_TEMPLATE['page']['body'] .= '
        {LOGIN_TABLE_USERNAME}
        {LOGIN_TABLE_PASSWORD}
        {SOCIAL_LOGIN: size=3x}
		{LOGIN_TABLE_SECIMG_SECIMG} {LOGIN_TABLE_SECIMG_TEXTBOC}
        {LOGIN_TABLE_REMEMBERME}
        {LOGIN_TABLE_SUBMIT=large}

 ';

$LOGIN_TEMPLATE['page']['footer'] = "
			<div class='login-page-footer'>
				<div class='login-page-signup-link'><p>{LOGIN_TABLE_SIGNUP_LINK}</p></div>
				<div class='login-page-fpw-link'><p>{LOGIN_TABLE_FPW_LINK}</p></div>
			</div>
</div></div></div>";