<?php
// $Id$

if (!defined('e107_INIT')) { exit; }


$theme_settings = array();
if(class_exists('theme')) {
 $theme_settings = theme_settings::get_membersonly_template(); 
 $form_settings = theme_settings::get_singleforms(); 
}


$LOGIN_TEMPLATE['page']['body'] = '
		{LOGIN_TABLE_LOGINMESSAGE}
        <h1 id="pagetitle" class="h2 text-center">{LAN=LOGIN_4}</h1>';
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
    
    
$LOGIN_WRAPPER['page']['LOGIN_TABLE_USERNAME'] = "<div class='form-group row m-2'><label class='control-label' for='loginname'>{LOGIN_USERNAME_LABEL}</label>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_PASSWORD'] = "<div class='form-group row m-2'><label class='control-label' for='password'>{LAN=LAN_LOGIN_2}</label>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_SECIMG'] = "<div class='form-group row m-2'><label class='control-label' for='code-verify'>" . e107::getSecureImg()->renderLabel()."</label><div class='d-flex secimg'>{---}";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SECIMG_TEXTBOC'] = " <div>{---}</div></div></div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_REMEMBERME'] = "<div class='form-group row m-2 checkbox'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_SUBMIT'] = "<div class='text-center m-2'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_FOOTER_USERREG'] = "<div class='form-group row m-2'>{---}</div>";
$LOGIN_WRAPPER['page']['LOGIN_TABLE_LOGINMESSAGE'] = "<div class='alert alert-danger'>{---}</div>";


// $LOGIN_WRAPPER['page']['LOGIN_TABLE_FPW_LINK'] = "<div class='form-group'>{---}</div>";

$LOGIN_TEMPLATE['page']['body'] .= '
        {LOGIN_TABLE_USERNAME}
        {LOGIN_TABLE_PASSWORD}
        {SOCIAL_LOGIN: size=3x}
		{LOGIN_TABLE_SECIMG_SECIMG} {LOGIN_TABLE_SECIMG_TEXTBOC}
        {LOGIN_TABLE_REMEMBERME}
        {LOGIN_TABLE_SUBMIT}

 ';
 
 
$LOGIN_TEMPLATE['page']['header'] =  $theme_settings['membersonly_start'].'
 <div id="login-template">'.$form_settings['login_logo'];

$LOGIN_TEMPLATE['page']['footer'] =  ' 
    			<div class="login-page-footer" style="text-align: center;">
    				{LOGIN_TABLE_SIGNUP_LINK} | {LOGIN_TABLE_FPW_LINK}
    			</div>
	           </div>'.
$theme_settings['membersonly_end'];
	



