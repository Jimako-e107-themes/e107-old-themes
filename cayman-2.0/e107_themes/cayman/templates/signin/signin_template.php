<?php

// Do not use constants.. use {LAN=xxx} instead.
// Template compatible with Bootstrap 5 only.

$SIGNIN_TEMPLATE = [];

$SIGNIN_WRAPPER['signin']['SIGNIN_SIGNUP_HREF'] = '<li><a  href="{---}"><span class="link-item">{LAN=LAN_LOGINMENU_3}</span></a></li>';
$SIGNIN_TEMPLATE['signin'] = '
{SIGNIN_SIGNUP_HREF}
<li class="dropdown">
	<a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" data-toggle="dropdown"><span class="link-item">{LAN=LAN_LOGINMENU_51}<b class="caret"></b></span> </a>
	<div class="dropdown-menu col-sm-12" style="min-width:250px; padding: 15px; padding-bottom: 0px;">
		{SIGNIN_FORM=start}
		<p>{SIGNIN_INPUT_USERNAME}</p>
		<p>{SIGNIN_INPUT_PASSWORD}</p>
		{SIGNIN_IMAGECODE_NUMBER}
		{SIGNIN_IMAGECODE_BOX}
		<div class="checkbox">
			<label class="string optional" for="bs3-autologin"><input style="margin-right: 10px;" type="checkbox" name="autologin" id="bs3-autologin" value="1">
			{LAN=LAN_LOGINMENU_6}</label>
		</div>
		<div style="padding-bottom:15px">
			<input class="btn btn-primary btn-block" type="submit" name="userlogin" id="bs3-userlogin" value="{LAN=LAN_LOGINMENU_51}">
			<a href="{SIGNIN_FPW_HREF}" class="btn btn-default btn-secondary btn-sm  btn-block">{LAN=LAN_LOGINMENU_4}</a>
			<a href="{SIGNIN_RESEND_LINK=href}" class="btn btn-default btn-secondary btn-sm  btn-block">{LAN=LAN_LOGINMENU_40}</a>
		</div>
	{SIGNIN_FORM=end}
	</div>
</li>';

$SIGNIN_WRAPPER['signout']['SIGNIN_ADMIN_HREF'] = '<li><a class="dropdown-item signin-sc admin" id="signin-sc-admin" href="{---}"><span class="fa fa-cogs"></span> {LAN=LAN_LOGINMENU_11}</a></li>';
$SIGNIN_WRAPPER['signout']['SIGNIN_PM_NAV'] = '<li class="dropdown dropdown-pm">{---}</li>';

$SIGNIN_TEMPLATE['signout'] = '
			{SIGNIN_PM_NAV}
			<li class="dropdown dropdown-avatar"><a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" data-toggle="dropdown" alt="{SIGNIN_USERNAME: username=1}">
            <span class="link-item">{USER_AVATAR: w=30&h=30&crop=1&shape=circle} {SIGNIN_USERNAME: username=1} <b class="caret"></b></a>
				<ul class="sub-menu">
				<li>
					<a href="{SIGNIN_USERSETTINGS_HREF}"><span class="fa fa-cog"></span> {LAN=LAN_SETTINGS}</a>
				</li>
				<li>
					<a href="{SIGNIN_PROFILE_HREF}"><span class="fa fa-user"></span> {LAN=LAN_LOGINMENU_13}</a>
				</li>
				<li class="divider"></li>
				{SIGNIN_ADMIN_HREF}
				<li><a href="{SIGNIN_LOGOUT_HREF}"><span class="fa fa-power-off"></span> {LAN=LAN_LOGOUT}</a></li>
				</ul>
			</li>


		';
