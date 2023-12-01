<?php

if(!defined('e107_INIT'))
{
	exit();
}

e107::lan('theme');

class theme implements e_theme_render
{

	function init()
	{
		define("CORE_CSS", false);

		 
		 e107::css('theme', 'assets/css/main.css');
 
 
	}

	function tablestyle($caption, $text, $mode='', $options = array())
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

		switch($style)
		{

			case "footer-small": 
				echo $text;
			break;

			case "nocaption": 
			case "none":
				echo $text;
			break;

			case "footer": 
				if(!empty($caption))
				{ 
					echo '<h4>' . $caption . '</h4>';
				}
				echo $text;
			break;

			case "menu": 
				echo '<div class="block block-primary-head no-pad">';
				if(!empty($caption))
				{ 
					echo '<h3>' . $caption . '</h3>';
				}
				echo '<div class="block-content">';
				echo $text;
				echo '</div></div>';
			break;
			
			case "main":   //for style with name main, mainly for frontpage
				if(!empty($caption))
				{
					echo '<div class="my-4">' . $caption . '</div>';
				}
				echo $text;
			break;

			case "default":   //for style with name default
				if(!empty($caption))
				{
					echo '<h2 class="page-header page-caption">' . $caption . '</h2>';
				}
				echo $text;
			break;			
		
			default:  //if there is no style

			if(!empty($caption))
			{
				echo '<div class="my-4">' . $caption . '</div>';
			}
			echo $text;
		}
		return;
	}

}
 