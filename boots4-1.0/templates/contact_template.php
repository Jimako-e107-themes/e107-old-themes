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

 
$CONTACT_TEMPLATE['info'] = "


";


$CONTACT_TEMPLATE['menu'] =  '
	<div class="contactMenuForm">
		<div class="control-group form-group mb-3">
			<label class="ls text-uppercase mb-0" for="contactName">{LAN=CONTACT_03}</label>
				{CONTACT_NAME}
		 </div>
		 
		<div class="control-group form-group mb-3">
			<label class="ls text-uppercase mb-0" for="contactEmail">{LAN=CONTACT_04}</label>
				{CONTACT_EMAIL}
		</div>
		<div class="control-group form-group mb-3">
			<label class="ls text-uppercase mb-0" for="contactBody" >{LAN=CONTACT_06}</label>
				{CONTACT_BODY=rows=5&cols=30}
		</div>
       {CONTACT_IMAGECODE}
	   {CONTACT_IMAGECODE_INPUT}
		<div class="form-group mb-3"><label for="gdpr">{LAN=CONTACT_24}</label>
			<div class="checkbox form-check">
				<label class="ls text-uppercase mb-0" >{CONTACT_GDPR_CHECK} {LAN=CONTACT_21}</label>
				<div class="help-block">{CONTACT_GDPR_LINK}</div> 
			</div>
		</div>
		{CONTACT_SUBMIT_BUTTON: class=btn btn-block btn-warning mt-4}
	</div>       
 ';
 


// Shortcode wrappers.
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= "<div class='control-group form-group'><label for='code-verify'>{CONTACT_IMAGECODE_LABEL}</label> {---}";
$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= "{---}</div>";
$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}{LAN=CONTACT_07}</div>";
$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>{LAN=CONTACT_14}</label>{---}</div>";

$CONTACT_WRAPPER['menu']['CONTACT_IMAGECODE'] 			= "<div class='control-group form-group'><label for='code-verify'>{CONTACT_IMAGECODE_LABEL}</label> {---}";
$CONTACT_WRAPPER['menu']['CONTACT_IMAGECODE_INPUT'] 	= "{---}</div>";
$CONTACT_WRAPPER['menu']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}{LAN=CONTACT_07}</div>";
$CONTACT_WRAPPER['menu']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>{LAN=CONTACT_14}</label>{---}</div>";


$CONTACT_TEMPLATE['form'] = "
	<form action='".e_SELF."' method='post' id='contactForm' class='mt-5' >".
    $CONTACT_TEMPLATE['menu']
    ."
	</form>";


// Set the layout and  order of the info and form.
$CONTACT_TEMPLATE['layout'] = '
<div class="container-fluid">
<div class="row justify-content-center">
 
   {---CONTACT-FORM---} 
</div>
<div class="row justify-content-center mt-4">
  <div class="col-lg-10">
	<div class="rounded googlemap minh-50vh" data-latlng="{THEME_CONTACT_INFO: type=coordinates}" data-scrollwheel="false" data-icon="{THEME}assets/img/map-marker.png" data-zoom="17" data-theme="Default">
	  <div class="marker-content py-3">
	 	 {THEME_CONTACT_INFO: type=address}
	  </div>
	</div>
  </div>
</div>
</div>  ';
 
	// Customize the email subject
	// Variables:  CONTACT_SUBJECT and CONTACT_PERSON as well as any custom fields set in the form. )
$CONTACT_TEMPLATE['email']['subject'] = "{CONTACT_SUBJECT}";





