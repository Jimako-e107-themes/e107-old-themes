<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

$SIGNIN_TEMPLATE = [];


$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<a class="pull-left" href="{---}">{LAN=LAN_LOGINMENU_3}</a>';
$SIGNIN_WRAPPER['signin']['SIGNIN_FPW_HREF'] = '<a class="pull-right" href="{---}">{LAN=LAN_LOGINMENU_4}</a>';

$SIGNIN_TEMPLATE['signin'] = '

<h4 class="heading5 text-uppercase">{LAN=LAN_LOGINMENU_51}</h4>
 
<form class="login-form text-center" method="post" onsubmit="hashLoginPassword(this);return true" action="'.e_REQUEST_HTTP.'" accept-charset="UTF-8">
<fieldset>
 <div class="form-group">{SIGNIN_INPUT_USERNAME}</div>
 <div class="form-group">{SIGNIN_INPUT_PASSWORD}</div>
   <input class="btn-primary active lg-round text-center fwBold text-uppercase" type="submit" name="userlogin" id="bs3-userlogin" value="{LAN=LAN_LOGINMENU_51}">
</fieldset>
{SIGNIN_FORM=end}
 
			<div class="wrap">
                {SIGNIN_SIGNUP_HREF}
				{SIGNIN_FPW_HREF} 
			</div>
 
';



$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<li class="list-group-item"><a id="signin-sc-admin" href="{---}"><span class="fa fa-cogs"></span> {LAN=LAN_LOGINMENU_11}</a></li>';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '<li class="dropdown dropdown-pm">{---}</li>';


$SIGNIN_TEMPLATE['signout'] = '

		<ul class="list-group login-menu-logged nav nav-list">
			{SIGNIN_PM_NAV}
	 
				<li class="list-group-item">
					<a href="{SIGNIN_USERSETTINGS_HREF}"><span class="fa fa-cog"></span> {LAN=LAN_SETTINGS}</a>
				</li>
				<li class="list-group-item">
					<a role="button" href="{SIGNIN_PROFILE_HREF}"><span class="fa fa-user"></span> {LAN=LAN_LOGINMENU_13}</a>
				</li>
		 
				{SIGNIN_ADMIN_HREF}
				<li class="list-group-item"><a  href="{SIGNIN_LOGOUT_HREF}"><span class="fa fa-power-off"></span> {LAN=LAN_LOGOUT}</a></li>
				 
		 
		</ul>
		
		';

