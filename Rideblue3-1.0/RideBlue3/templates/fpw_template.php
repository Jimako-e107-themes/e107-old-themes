<?php
// $Id$


if (!defined('e107_INIT')) { exit; }

$theme_settings = array();
if(class_exists('theme')) {
 $theme_settings = theme_settings::get_membersonly_template(); 
 $form_settings = theme_settings::get_singleforms(); 
}



$FPW_TEMPLATE['form'] = '
					<div class="row">
						<div class="col-12">
						<p>{FPW_TEXT}</p>
						<div class="form-group row m-2">{FPW_USEREMAIL}</div>
						<div class="form-group row m-2">{FPW_CAPTCHA_IMG}{FPW_CAPTCHA_INPUT}</div>
						  
								<div class="col-12 text-center">
								{FPW_SUBMIT}
								</div>
						 		
						</div>
					</div>
					';

$FPW_TEMPLATE['header'] = $theme_settings['membersonly_start'];
$FPW_TEMPLATE['footer'] = $theme_settings['membersonly_end'];






