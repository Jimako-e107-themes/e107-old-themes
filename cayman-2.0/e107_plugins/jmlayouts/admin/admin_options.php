<?php

// Generated e107 Plugin Admin Area

require_once '../../../class2.php';
if (!getperms('P'))
{
	e107::redirect('admin');
	exit;
}

require_once "admin_leftmenu.php";
 
// e107::lan('jmlayout',true);
$curVal = e107::pref('jmlayouts');

class jmlayouts_ui extends e_admin_ui
{

	protected $pluginTitle = 'Theme Options';
	protected $pluginName = 'jmlayouts';

	protected $table = NULL;
	protected $fieldpref = array();
	protected $prefs = array();
	protected $id = NULL;

	protected $fields = array(
		'pref_custom' => array(
			'title' => '',
			'tab' => 0,
			'type' => 'method',
			'data' => false,
			'help' => '',
			'writeParms' => array('size' => 'block-level'),
		),

	);

	public $sitetheme = '';
	public $filepath = '';
	public $custom_fields = array();




	public function renderHelp()
	{
		$caption = LAN_HELP;
		$text = 'This is the older way how to add some custom fields to your site before theme preferences were introduced. If you need any content independent of a theme, you can use this. <hr>
		If you need data related to layout, use layout prefs. <hr>
		This is the way how your theme can add/edit plugin prefs without changing plugin code';

		return array('caption' => $caption, 'text' => $text);
	}

	protected $afterSubmitOptions = array('edit');

	public function init()
	{
		$this->setDefaultAction('edit');
		$triggers['submit'] = array(LAN_UPDATE, 'update', 0);
		$this->setDefaultTrigger($triggers);
		

	}

	public function beforeCreate($new_data, $old_data)
	{
		$this->beforeUpdate($new_data, $old_data, NULL);
	}

	// ------- Customize Update --------

	public function beforeUpdate($new_data, $old_data, $id)
	{

		$plugin_pref = e107::pref('jmlayout');
 
		e107::getPlugConfig('jmlayout')->set('custom', $new_data['custom'])->save(true);

		$plugin_pref = e107::pref('jmlayout');
	 
		$new_data['pref_custom'] = null;
		return false;
	}

}

class jmlayouts_form_ui extends e_admin_form_ui
{

	public $options_folder = 'jmlayout';  
	public $sitetheme = '';
	public $folder = '';
	public $notused = false;

	public function init()
	{
		$this->sitetheme = e107::getPref('sitetheme');
		$value = e107::getThemeConfig($this->sitetheme)->getPref();
		$this->folder  = varset($value['parent_theme'], $this->sitetheme);
	 
		$this->filepath = e_THEME . $this->folder . '/jmlayouts/options_custom.php';
		$name = 'custom';
		if ((file_exists($this->filepath)))
		{
			require_once $this->filepath;
			$this->custom_fields = $options; 
			$text = "Custom preferences file from theme folder ". strtoupper($this->folder)." were used.";
			e107::getMessage()->addInfo($text);
		}
		else
		{
			$this->notused = true;
			$text = "Your theme doesn't have custom file options. Copy it to your theme from plugin default folder and customize it. ";
			e107::getMessage()->addWarning($text);
			 
		}
		 
	}
	public function pref_custom($curVal, $mode)
	{
 
		$curVal = e107::pref('jmlayout' );
		  
		$value = array();
		$name = 'custom';

		if (!empty($curVal))
		{
			$value = e107::unserialize($curVal);
		}
		 
		switch ($mode)
		{
		case 'read': // Edit Page
			$text = "Are you cheating?";
			return $text;
			break;

		case 'write': // Edit Page
			$name = 'custom';
			$custom_value = $value[$name];
			$text = $this->getFields('custom', $custom_value);
			return $text;
			break;
		}

		return null;
	}

	public function getFields($name = '', $value = array())
	{
		if ($name == '')
		{
			return '';
		}
		$textremove = '';
 
		//single fields, mainly headers
		$settings = $this->custom_fields;   
		if ($settings['fields'] > 0)
		{
			$nameitem = $name . '[fields]';
			foreach ($settings['fields'] as $fieldkey => $field)
			{    
				if ($field['inuse'])
				{
					$text .= "<tr><td width='200'>" . $field['title'] . ": </td><td>";
					$text .= $this->renderElement($nameitem . '[' . $fieldkey . ']', $value['fields'][$fieldkey], $field);
					$text .= "</td></tr>";
				}
				else
				{
					$textremove .= "<input type='hidden' name=" . $nameitem . '[' . $fieldkey . ']' . "  value=''  title=''>";
				}
			}
		}
		return $text . $textremove;
	}
 
}

new jmlayouts_adminArea();

require_once e_ADMIN . "auth.php";

e107::getAdminUI()->runPage();

require_once e_ADMIN . "footer.php";
exit;
