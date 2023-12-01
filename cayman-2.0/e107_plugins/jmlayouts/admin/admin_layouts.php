<?php

// Generated e107 Plugin Admin Area
require_once '../../../class2.php';
if (!getperms('P'))
{
	e107::redirect('admin');
	exit;
}

require_once "admin_leftmenu.php";
 
class jmlayouts_ui extends e_admin_ui
{
	protected $pluginName = 'jmlayout';
	protected $pluginTitle = 'JM Theme';

	//	protected $eventName		= 'jmelements-jmelement'; // remove comment to enable event triggers in admin.
	protected $table = 'jmlayout';
	protected $pid = 'layout_id';
	protected $perPage = 1;
	protected $batchDelete = false;
	protected $batchExport = false;
	protected $batchCopy = false;

	protected $sortField = 'layout_order';
 
	protected $prefs = array();

	protected $listOrder = 'layout_order ASC';

	protected $afterSubmitOptions = array('edit');

	private  $sitetheme = '';

	protected $fields = array(
		'layout_header' => array('type' => 'hidden'), 'layout_footer' => array('type' => 'hidden'),
		'layout_options' => array('title' => '', 'tab' => 0, 'type' => 'method', 'data' => 'json',
			'width' => '38%', 'help' => '', 'readParms' => '', 'writeParms' => array("nolabel" => 1), 'class' => 'left', 'thclass' => 'left'),
		'options' => array('title' => LAN_OPTIONS, 'type' => 'method', 'width' => '10%', 'forced' => TRUE, 'thclass' => 'center last', 'class' => 'left', 'readParms' => 'sort=1'),
	);

	public function init()
	{
		$this->setDefaultAction('edit');
		$triggers['submit'] = array(LAN_UPDATE, 'update');
		$this->setDefaultTrigger($triggers);
	}

	// ------- Customize Create --------

	public function beforeCreate($new_data, $old_data)
	{
		return $new_data;
	}

	// ------- Customize Update --------

	public function beforeUpdate($new_data, $old_data, $id)
	{
		return $new_data;
	}

}

class jmlayouts_form_ui extends e_admin_form_ui
{
	 
	private $sitetheme = '';
	private $theme_folder = '';

	public function init()
	{
		$this->sitetheme = e107::getPref('sitetheme');
		$value = e107::getThemeConfig($this->sitetheme)->getPref();
		$this->theme_folder  = varset($value['parent_theme'], $this->sitetheme);
	}

	public function options($parms, $value, $id, $attributes)
	{
		return '';
	}

	public function layout_options($curVal, $mode)
	{
		$value = array();
		
		$text = '';
		$layout_mode = $this->getController()->getFieldVar('layout_mode');
 
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
			$text = $this->getFields($layout_mode, $value);
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

		$jmlayout_values = e107::getDb()->retrieve('jmlayout', '*', "layout_mode  = '" . $name . "'");
 
	    $settings = $this->elements_content($jmlayout_values['layout_setting']);
 
		$text = "<table class='table table-condensed table-bordered'  style='table-layout: fixed;' ><tbody> ";
		$text .= "<tr><td  class='bg-primary' colspan=2>" . $jmlayout_values['layout_title'] .
		"<br>Fields settings: ". $jmlayout_values['layout_setting'] . " </td> </tr>";
		$textremove = '';
  
		if ($settings['fields'] > 0)
		{
			$nameitem = 'layout_options[fields]';
			foreach ($settings['fields'] as $fieldkey => $field)
			{
				if ($field['inuse'])
				{
					$actual_value = isset($value['fields'][$fieldkey]) ? $value['fields'][$fieldkey]: '';

					$text .= "<tr><td>" . $field['title'] . ": </td><td>";
					$text .= $this->renderElement($nameitem . '[' . $fieldkey . ']', $actual_value, $field);
					$text .= "</td></tr>";
				}
				else
				{
					$textremove .= "<input type='hidden' name=" . $nameitem . '[' . $fieldkey . ']' . "  value=''  title=''>";
				}
			}
		}
 
		$text .= "<input type='hidden' name=" . $name . '[' . $fieldkey . ']' . "  value=''  title=''>";
		return $text . $textremove;
	}

	public function elements_content($name = '')
	{   
		if ($name)
		{
			if(e_DEBUG) {
			 	 @require_once e_THEME . $name;
			}
			else {
			 	include_once e_THEME . $name;
			}	
		}
		else
		{
			return '';
		}
		return $options;
	}
}

new jmlayouts_adminArea();

require_once e_ADMIN . "auth.php";

e107::getAdminUI()->runPage();

require_once e_ADMIN . "footer.php";
exit;
