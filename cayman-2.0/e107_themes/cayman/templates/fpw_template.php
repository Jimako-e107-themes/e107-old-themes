<?php
// $Id$


if (!defined('e107_INIT')) { exit; }


$FPW_TEMPLATE['form'] = '
<div class="col-md-8 col-md-offset-2">
	<p>{FPW_TEXT}</p>
	<div class="form-group">{FPW_USEREMAIL}</div>
	<div class="form-group">{FPW_CAPTCHA_IMG}{FPW_CAPTCHA_INPUT}</div>
	{FPW_SUBMIT}		
	</div>
</div>';
 
$FPW_TEMPLATE['header'] = '<section class="page-wrapper membersonly">
<div class="container">{LOGO=login}';
$FPW_TEMPLATE['footer']  = '</div></section>';






