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

/*
if(!isset($CONTACT_INFO))
{
	$CONTACT_INFO = "
	<table style='".USER_WIDTH."' cellpadding='1' cellspacing='7'>
	<tr>
		<td>
		{SITECONTACTINFO}
		<br />
		</td>
	</tr>
	</table>";
}
*/

$CONTACT_TEMPLATE['info'] = "";


$CONTACT_TEMPLATE['menu'] =  '
	<div class="contactMenuForm">
		<div class="control-group form-group">
			<label for="contactName">'.LANCONTACT_03.'</label>
				{CONTACT_NAME}
		 </div>
		 
		<div class="control-group form-group">
			<label class="control-label" for="contactEmail">'.LANCONTACT_04.'</label>
				{CONTACT_EMAIL}
		</div>
		<div class="control-group form-group">
			<label for="contactBody" >'.LANCONTACT_06.'</label>
				{CONTACT_BODY=rows=5&cols=30}
		</div>
		{CONTACT_SUBMIT_BUTTON}
	</div>       
 ';
 
 
	// Option I - new sc style variable and format, global available per shortcode (mode also applied)
	// sc_style is renamed to sc_wrapper and uppercased now - distinguished from the legacy $sc_style variable and compatible with the new template standards, we deprecate $sc_style soon
 
	// $SC_WRAPPER['CONTACT_EMAIL_COPY'] 		= "<tr><td>{---}".LANCONTACT_07."</td></tr>";
	// $SC_WRAPPER['CONTACT_PERSON'] 			= "<tr><td>".LANCONTACT_14."<br />{---}</td></tr>";
	// $SC_WRAPPER['CONTACT_IMAGECODE'] 			= "<tr><td>".LANCONTACT_16."<br />{---}";
	// $SC_WRAPPER['CONTACT_IMAGECODE_INPUT'] 	= "{---}</td></tr>";
 
 	
	// Option II - Wrappers, used ONLY with batch objects, requires explicit wrapper registration
	// In this case (see contact.php) e107::getScBatch('contact')->wrapper('contact/form')
	// Only one Option is used - WRAPPER > SC_STYLE

	$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE'] 			= "<div class='col-md-6'>  {---}</div>";
	$CONTACT_WRAPPER['form']['CONTACT_IMAGECODE_INPUT'] 	= "<div class='col-md-6'>{---}</div>";
	$CONTACT_WRAPPER['form']['CONTACT_EMAIL_COPY'] 			= "<div class='control-group form-group'>{---}".LANCONTACT_07."</div>";
	$CONTACT_WRAPPER['form']['CONTACT_PERSON']				= "<div class='control-group form-group'><label for='contactPerson'>".LANCONTACT_14."</label>{---}</div>";

	$CONTACT_TEMPLATE['form'] = "
 	<div class='regularform onwhite w680 wow flipInY text-center'>
	<form action='".e_SELF."' method='post' id='contactform' >

		{CONTACT_NAME: class=col-md-12&placeholder=".LANCONTACT_03." *}
    {CONTACT_EMAIL: class=col-md-12&placeholder=".LANCONTACT_04." *}
    {CONTACT_SUBJECT: class=col-md-12&placeholder=".LANCONTACT_05." *}

		{CONTACT_EMAIL_COPY}
		{CONTACT_BODY: class=col-md-12&placeholder=".LANCONTACT_06." *}
 

	{CONTACT_IMAGECODE}
	{CONTACT_IMAGECODE_INPUT}
 
	{CONTACT_SUBMIT_BUTTON: class=contact submit btn btn-minimal}
 
         	
	</form>
	</div>";

	// Customize the email subject
	// Variables:  CONTACT_SUBJECT and CONTACT_PERSON as well as any custom fields set in the form. )
	$CONTACT_TEMPLATE['email']['subject'] = "{CONTACT_SUBJECT}";

	

?>
