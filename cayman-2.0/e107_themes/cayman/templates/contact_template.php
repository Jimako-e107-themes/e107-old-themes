<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2016 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 * Contact Template
 */
 // $Id$

if (!defined('e107_INIT')) { exit; }

$CONTACT_TEMPLATE['info'] = '
<div class="row">
	<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
		<div class="octa blue">
		</div>
			<i class="fa fa-phone"></i> 
		<div class="feature-content">
			<h3>{LAN=LAN_THEME_CONTACT_25}</h3>
			{CONTACT_INFO: type=phone1}
		</div>
	</div>
	<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
		<div class="octa bluelight">
		</div>
		<i class="fa fa-map"></i>
		<div class="feature-content">
			<h3>{LAN=LAN_THEME_CONTACT_26}</h3>
			{CONTACT_INFO: type=organization}<br>
			{CONTACT_INFO: type=address}
		</div>
	</div>
	<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.7s">
		<div class="octa red">
		</div>
		<i class="fa fa-envelope"></i>
		<div class="feature-content">
			<h3>{LAN=LAN_THEME_CONTACT_27}</h3>
			{CONTACT_INFO: type=email1}
		</div>
	</div>
</div>';
 

$CONTACT_TEMPLATE['menu'] =  '
	<div class="contactMenuForm regularform">
		{CONTACT_NAME: class=col-md-12&placeholder='.LANCONTACT_03.'}
		{CONTACT_SUBJECT: class=col-md-12&placeholder='.LANCONTACT_05.' *}
		{CONTACT_EMAIL: class=col-md-12&placeholder='.LANCONTACT_04.'}
		{CONTACT_BODY: class=col-md-12&placeholder='.LANCONTACT_06.'} 
		{CONTACT_GDPR_CHECK: label='.LANCONTACT_21.'}
		{CONTACT_SUBMIT_BUTTON: class=contact submit btn btn-default}
	</div>';
 
// Shortcode wrappers.
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= "<div class='control-group form-group'><label for='code-verify'>{CONTACT_IMAGECODE_LABEL}</label> {---}";
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= "{---}</div>";
$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='text-left'>{---}&nbsp;{LAN=LANCONTACT_27}</div>";
$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>{LAN=LANCONTACT_14}</label>{---}</div>"; 
 

$CONTACT_TEMPLATE['form'] = "
	<form action='".e_SELF."' method='post' id='contactForm' >

	{CONTACT_PERSON}
	{CONTACT_NAME: class=col-md-12&placeholder=".LANCONTACT_03."}
	{CONTACT_EMAIL: class=col-md-12&placeholder=".LANCONTACT_04."}
	{CONTACT_SUBJECT: class=col-md-12&placeholder=".LANCONTACT_05."}
	{CONTACT_EMAIL_COPY}
	{CONTACT_BODY: class=col-md-12&placeholder=".LANCONTACT_06."}
	 
	{CONTACT_IMAGECODE}
	{CONTACT_IMAGECODE_INPUT}
	
 
	<div class='form-group'> {LAN=LANCONTACT_24} 
		<div class='checkbox'>
			<label>{CONTACT_GDPR_CHECK} {LAN=LANCONTACT_21}</label>
			<div class='help-block'>{CONTACT_GDPR_LINK}</div> 
		</div>
	</div>

	{CONTACT_SUBMIT_BUTTON: class=contact submit btn btn-minimal}
	</form>";
 
$CONTACT_TEMPLATE['email']['subject'] = "{CONTACT_SUBJECT}";

	


