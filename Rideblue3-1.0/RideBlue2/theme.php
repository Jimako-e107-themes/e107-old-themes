<?php

if (!defined('e107_INIT'))
{
	exit;}

// [multilanguage]
e107::lan('theme');
 

if(defined("e_PAGE")) {
 if(e_PAGE == "login.php" && !e107::getPref('membersonly_enabled')) {
	define('e_IFRAME', '0');
 }   
}

/* override with theme prefs */
$inlinecss = e107::pref('theme', 'inlinecss', FALSE);
if ($inlinecss)
{
	e107::css("inline", $inlinecss);
}
$inlinejs = e107::pref('theme', 'inlinejs');
if ($inlinejs)
{
	e107::js("footer-inline", $inlinejs);
}

class theme implements e_theme_render
{
	public $membersonly_enabled = false;

	public function init()
	{

		/* HEAD part */
		e107::meta('viewport', 'width=device-width, initial-scale=1.0');

	    define("CORE_CSS", false);
		e107::css("theme", "css/style.css");

		

		$this->membersonly_enabled = e107::getPref('membersonly_enabled');


	}

	public function tablestyle($caption, $text, $mode = '', $options = array())
	{
		$style = varset($options['setStyle'], 'default');

		if (e_DEBUG)
		{
			echo "
			<!-- tablestyle initial:  style=" . $style . "  mode=" . $mode . "  UniqueId=" . varset($options['uniqueId']) . " -->
			";
			echo "\n<!-- \n";

			echo json_encode($options, JSON_PRETTY_PRINT);

			echo "\n-->\n\n";
		}

		 
		switch ($style)
		{

			case 'nocaption':
				echo '
				<table class="toppost" style="width: 100%; padding: 8px 0;" cellpadding="0" cellspacing="0">
					 
					<tr>
						<td style="vertical-align: top;">
							<div class="padmaincont">' . $text . '</div>
						</td>
					</tr>
				</table>';
			break;

			case 'sidebar':
				echo '
					<div class="headerbox"><h2>' . $caption . '</h2></div>
					<div class="insidebox">' . $text . '</div>';
			break;
			case 'footerbar':
				echo '
					<h3>' . $caption . '</h3>
					<div class="footerbar">' . $text . '</div>';
			break;
			case 'topmenu':
			case 'bottommenu':
			case 'full':
			case 'default':	
			default:	
				echo '
				<table class="toppost" style="width: 100%; padding: 8px 0;" cellpadding="0" cellspacing="0">
					<tr>
						<td style="vertical-align: top;">
							<h3 class="hometoptitle">' . $caption . '</h3>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top;">
							<div class="padmaincont">' . $text . '</div>
						</td>
					</tr>
				</table>';
				break;
 
		}
		return;
	}

}


 
 