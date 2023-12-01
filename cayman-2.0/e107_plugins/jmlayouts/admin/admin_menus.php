<?php
// Generated e107 Plugin Admin Area

require_once '../../../class2.php';
if (!getperms('P'))
{
	e107::redirect('admin');
	exit;
}

e107::lan('jmlayouts', true);

require_once "admin_leftmenu.php";

if (e_PAGE == "admin_menus.php")
{
	// core is using something else, not minified and only on frontend
	// credit for this notification system belongs Spinnet Planet
	e107::js('footer', e_PLUGIN . "jmlayouts/admin/js/bootstrap-notify.min.js", 'jquery');
	e107::js('footer', e_PLUGIN . "jmlayouts/admin/js/jmlayouts_admin.js", 'jquery');
}

class jmlayouts_menus_adminArea extends jmlayouts_adminArea
{
	protected $modes = array(
		'menus' => array(
			'controller' => 'menus_ui',
			'path' => null,
			'ui' => 'menus_form_ui',
			'uipath' => null,
		),
	);
}

class menus_ui extends e_admin_ui
{
	protected $pluginTitle = LAN_JM_THEME_LAN_01;
	protected $pluginName = 'jmlayout';
	//	protected $eventName		= 'jmlayout-menus'; // remove comment to enable event triggers in admin.
	protected $table = 'menus';
	protected $pid = 'menu_id';
	protected $perPage = 50;
	protected $batchDelete = true;
	protected $batchExport = true;
	protected $batchCopy = true;
	protected $listOrder = 'menu_id DESC';
	protected $fields = array(
		'checkboxes' => array('title' => '', 'type' => null, 'data' => null, 'width' => '5%', 'thclass' => 'center', 'forced' => true, 'class' => 'center', 'toggle' => 'e-multiselect', 'readParms' => array(), 'writeParms' => array()),
		'menu_id' => array('title' => LAN_ID, 'data' => 'int', 'width' => '5%', 'help' => '', 'readParms' => array(), 'writeParms' => array(), 'class' => 'left', 'thclass' => 'left'),
		'menu_name' => array('title' => LAN_TITLE, 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'inline' => true, 'help' => '', 'readParms' => array(), 'writeParms' => array(), 'class' => 'left', 'thclass' => 'left'),
		'menu_layout' => array('title' => 'Layout', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'filter' => true, 'help' => '', 'readParms' => array(), 'writeParms' => array(), 'class' => 'left', 'thclass' => 'left', 'batch' => false),
		'menu_location' => array('title' => 'Location', 'type' => 'text', 'data' => 'str',
			'width' => 'auto', 'filter' => true, 'inline' => false, 'help' => '',
			'readParms' => array(), 'writeParms' => array(), 'class' => 'left',
			'thclass' => 'left', 'batch' => false),
		'menu_order' => array('title' => LAN_ORDER, 'type' => 'number', 'data' => 'int', 'width' => 'auto', 'help' => '', 'readParms' => array(), 'writeParms' => array(), 'class' => 'left', 'thclass' => 'left'),
		'menu_class' => array('title' => LAN_USERCLASS, 'type' => 'userclass', 'data' => 'str', 'width' => 'auto', 'batch' => true, 'filter' => true, 'help' => '', 'readParms' => array(), 'writeParms' => array(), 'class' => 'left', 'thclass' => 'left'),
		'menu_pages' => array('title' => 'Pages', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'help' => '', 'readParms' => array(), 'writeParms' => array(), 'class' => 'left', 'thclass' => 'left'),
		'menu_path' => array('title' => 'Path', 'type' => 'text', 'data' => 'str', 'width' => 'auto', 'help' => '', 'readParms' => array(), 'writeParms' => array(), 'class' => 'left', 'thclass' => 'left'),

		'menu_parms' => array('title' => 'Parms', 'type' => 'textarea', 'data' => 'str', 'width' => 'auto', 'help' => '', 'readParms' => array(), 'writeParms' => array(), 'class' => 'left', 'thclass' => 'left', 'filter' => false, 'batch' => false),
		'options' => array('title' => LAN_OPTIONS, 'type' => null, 'data' => null,
			'width' => '10%', 'thclass' => 'center last', 'class' => 'center last',
			'forced' => true, 'readParms' => array('editClass' => e_UC_NOBODY), 'writeParms' => array('noedit' => true)),
	);

	protected $fieldpref = array('menu_name', 'menu_location', 'menu_order', 'menu_class', 'menu_layout');

	// protected $preftabs        = array('General', 'Other' );
	protected $prefs = array(
	);

	public function init()
	{
		//https://github.com/e107inc/e107/commit/77baec4f063eb2a0272553f9f263db4dd0b74e8a wait for next release
		$this->postFiliterMarkup = $this->DeleteMenusButton();
		$this->postFilterMarkup = $this->DeleteMenusButton();

	}
	// ------- Customize Create --------

	public function beforeCreate($new_data, $old_data)
	{
		return $new_data;
	}

	public function afterCreate($new_data, $old_data, $id)
	{
		// do something
	}

	public function onCreateError($new_data, $old_data)
	{
		// do something
	}

	// ------- Customize Update --------

	public function beforeUpdate($new_data, $old_data, $id)
	{
		return $new_data;
	}

	public function afterUpdate($new_data, $old_data, $id)
	{
		// do something
	}

	public function onUpdateError($new_data, $old_data, $id)
	{
		// do something
	}

	// left-panel help menu area. (replaces e_help.php used in old plugins)
	public function renderHelp()
	{
		$text = "<b>Deleting not used menus</b><br />";
		$text .= "<div>This should be used if you have tried too many themes or before install Demo content. Menus that are added to menuareas will not be deleted. You can delete them manually (batch option is available).
			<br>
			For adding available menus for the actual theme just go to the Menu manager. They will be created automatically. </div>";
		return array('caption' => LAN_JM_THEME_MENUS_LAN_01, 'text' => $text);
	}

	public function DeleteMenusButton()
	{
		$text = "</fieldset></form><div class='e-container'>
			<table id='table_delete_notusedmenus' style='" . ADMIN_WIDTH . "' class='table adminlist table-striped'>";
		$text .=
			"<button id='delete_notusedmenus' type='button' table='menus'
			idName='notused' class='btn btn-danger'>" . LAN_JM_THEME_MENUS_LAN_01 . "</button></div>";
		$text .= "</td></tr></table></div><form><fieldset>";
		return $text;
	}

}

class menus_form_ui extends e_admin_form_ui
{
}

new jmlayouts_menus_adminArea();

require_once e_ADMIN . "auth.php";
e107::getAdminUI()->runPage();

require_once e_ADMIN . "footer.php";
exit;
 