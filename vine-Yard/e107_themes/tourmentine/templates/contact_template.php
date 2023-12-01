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

$CONTACT_WRAPPER['info']['CONTACT_INFO'] = "<div>{---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=organization'] = "{---}";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=message'] = "<p>{---}</p>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=address'] = '<span class="fa fa-map-marker"></span><address>{---}</address>';
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=email1'] = '<span class="fa fa-envelope"></span>{---}';
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=email2'] = '<span class="fa fa-envelope"></span>{---}';
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone1'] = '<span class="fa fa-phone"></span>{---}';
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone2'] = '<span class="fa fa-phone"></span>{---}';
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=phone3'] = '<span class="fa fa-phone"></span>{---}';
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=fax'] = "<div>{GLYPH=fa-fax} {---}</div>";
$CONTACT_WRAPPER['info']['CONTACT_INFO: type=hours'] = "<div>{GLYPH=fa-clock} {---}</div>";

$CONTACT_TEMPLATE['info'] = '
<div class="row">
<div class="col-xs-12">
	<!-- contact list of the page -->
	<ul class="list-unstyled contact-list text-center">
		<li>
			{CONTACT_INFO: type=phone1}
		</li>
		<li>
			{CONTACT_INFO: type=address}
		</li>
		<li>
			{CONTACT_INFO: type=email1}
		</li>
	</ul>
</div>
</div>
<div class="row">
<!-- header of the page -->
<header class="col-xs-12 text-center header">
	<span class="title fontpinyon">{CONTACT_INFO: type=organization}</span>
	<h1 class="heading text-uppercase">{LAN=LAN_CONTACT_00}</h1>
	<div class="header-img">
		<img src="{THEME}images/bdr-img.png" alt="image description" class="img-responsive">
	</div>
	{CONTACT_INFO: type=message}
	<!-- socail network of the page -->
	{XURL_ICONS: template=contact}
</header>
</div>' ;


$CONTACT_TEMPLATE['menu'] =  '
	<div class="contactMenuForm">
		<div class="control-group form-group mb-3">
			<label for="contactName">{LAN=CONTACT_03}</label>
				{CONTACT_NAME}
		 </div>
		 
		<div class="control-group form-group mb-3">
			<label class="control-label" for="contactEmail">{LAN=CONTACT_04}</label>
				{CONTACT_EMAIL}
		</div>
		<div class="control-group form-group mb-3">
			<label for="contactBody" >{LAN=CONTACT_06}</label>
				{CONTACT_BODY=rows=5&cols=30}
		</div>
		<div class="form-group mb-3"><label for="gdpr">{LAN=CONTACT_24}</label>
			<div class="checkbox form-check">
				<label>{CONTACT_GDPR_CHECK} {LAN=CONTACT_21}</label>
				<div class="help-block">{CONTACT_GDPR_LINK}</div> 
			</div>
		</div>
		{CONTACT_SUBMIT_BUTTON: class=btn btn-sm btn-small btn-primary button}
	</div>       
 ';
 


// Shortcode wrappers.
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= "<div class='control-group form-group'>  {---}";
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= "{---}</div>";
$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}{LAN=CONTACT_07}</div>";
$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>{LAN=CONTACT_14}</label>{---}</div>";




$CONTACT_TEMPLATE['form'] = "
	<form action='".e_SELF."' method='post' id='contactForm' class='contact-form mt-5' >
    <fieldset>
	{CONTACT_PERSON}
    {CONTACT_NAME: placeholder=".LAN_CONTACT_03."}
    {CONTACT_EMAIE: placeholder=".LAN_CONTACT_04."}
    {CONTACT_SUBJECT: placeholder=".LAN_CONTACT_05."}
    {CONTACT_EMAIL_COPY}
    {CONTACT_BODY: rows=5&placeholder=".LAN_CONTACT_06."}
	{CONTACT_IMAGECODE}
	{CONTACT_IMAGECODE_INPUT}

    <label class='text-uppercase'>{LAN=CONTACT_24}</label> 
    <div class='form-group mar wrap'>
		{CONTACT_GDPR_CHECK} <span>{LAN=CONTACT_21}</span>
	</div>
                                
	<div class='form-group'>
	{CONTACT_SUBMIT_BUTTON: class=btn-primary active lg-round text-uppercase}
	</div>
    </fieldset>
	</form>";


// Set the layout and  order of the info and form.
$CONTACT_TEMPLATE['layout'] = '

{---CONTACT-INFO---}
<div class="row">
	<div class="col-sm-6">
		<h2 class="heading2 text-uppercase">{LAN=LAN_CONTACT_02}</h2>
		{---CONTACT-FORM---}
	</div>
	<div class="col-sm-6">
		<div class="map-holder">
		{CONTACT_MAP: zoom=city}
		</div>
	</div>
</div>
 
';
 
	// Customize the email subject
	// Variables:  CONTACT_SUBJECT and CONTACT_PERSON as well as any custom fields set in the form. )
$CONTACT_TEMPLATE['email']['subject'] = "{CONTACT_SUBJECT}";





