<?php

// Generated e107 Plugin Admin Area

require_once('../../../class2.php');
if (!getperms('P')) {
    e107::redirect('admin');
    exit;
}

// e107::lan('jmlayouts',true);
require_once("admin_leftmenu.php");
                
class jmlayouts_ui extends e_admin_ui
{
    protected $pluginTitle		= 'JM Layouts';
    protected $pluginName		= 'jmlayouts';
    protected $table			= 'jmlayout';
    protected $pid				= 'layout_id';
    protected $perPage			= 20;
    protected $batchDelete		= true;
    protected $batchExport      = true;
    protected $batchCopy		= true;
    protected $sortField		= 'layout_order';
 
    protected $listOrder		= 'layout_order ASC';
        
    protected $fields 		= array(
            'checkboxes' => array(
                'title' => '',
                'type' => null,
                'data' => null,
                'width' => '5%',
                'thclass' => 'center',
                'forced' => true,
                'class' => 'center',
                'toggle' => 'e-multiselect',
                'readParms' => array() ,
                'writeParms' => array() ,
            ),
            'layout_id'   => array(
                'title' => LAN_ID,  'data' => 'int',  'width' => '5%',  'help' => '', 'forced' => true, 'readParms' =>  array(),  'writeParms' =>  array(),  'class' => 'left',  'thclass' => 'left',
            ),

            'layout_mode'  => array(
                'title' => 'Layout name',  'type' => 'dropdown',  'data' => 'safestr'
            ),
            'layout_title'   => array(
                'title' => 'Admin Menu title',
                'type' => 'text',
                'data' => 'str',
                'width' => 'auto',
                'filter' => true,
                'inline' => true,
                'validate' => true,
                'help' => '',
                'readParms' => array() ,
                'writeParms' => array('size'=>'xlarge') ,
                'class' => 'left',
                'thclass' => 'left'
            ),
            'layout_header'           => array(
                'title' => 'Custom Header',
                'type' => 'dropdown',
                'data' => 'str',
                'width' => 'auto',
                'filter' => true,
                'inline' => true,
                'validate' => true,
                'readParms' => array() ,
                'writeParms' => array('size'=>'xxlarge') ,
            ),
            'layout_footer'           => array(
                'title' => 'Custom Footer',
                'type' => 'dropdown',
                'data' => 'str',
                'width' => 'auto',
                'filter' => true,
                'inline' => true,
                'validate' => true,
                'readParms' => array() ,
                'writeParms' => array('size'=>'xxlarge') ,
            ),
            'layout_setting'           => array(
                'title' => 'Settings',
                'type' => 'dropdown',
                'data' => 'str',
                'width' => 'auto',
                'filter' => true,
                'inline' => true,
                'validate' => true,
                'readParms' => array() ,
                'writeParms' => array('size'=>'xxlarge') ,
            ),
            
            'layout_options'  => array('title'=> '', 'tab'=>0,  'type'=>false, 'data' => 'json',
            'width' => '38%', 'help' => '', 'readParms' => '',   'writeParms' => array("nolabel"=>1),  'class' => 'left', 'thclass' => 'left',
            ),
            
            'layout_order'            => array(  'title' => LAN_ORDER,  'type' => 'number',  'data' => 'int'   ),
            'options'   => array(
                'title' => LAN_OPTIONS,
                'title' => LAN_OPTIONS,
                'type' => null,
                'data' => null,
                'width' => '10%',
                'thclass' => 'center last',
                'class' => 'center last',
                'forced' => true,
                'readParms'=>'sort=1',
                'writeParms' => array() ,
            ),
        );
 
    protected $fieldpref = array( 'layout_title', 'layout_mode', 'layout_header', 'layout_footer', 'layout_setting',  'layout_items');
    protected $prefs = array();

    public $sitetheme = '';
    public $defaultparams  = array();
    public $theme_folder = 'jmlayout';    //old themes layouts
 
    public function __construct($request, $response, $params = array())
    {
        parent::__construct($request, $response, $params);
            
        /* settings */
        $this->sitetheme = e107::getPref('sitetheme');
 
        // generate menu items from all layouts from theme.xml
        $pref = e107::getPref();
    
        $search = array("_","-");
        $replace = array("","");

        /**********************************************************************/
        foreach ($pref['sitetheme_layouts'] as $key=>$val) {
            $layoutName = $val['@attributes']['title'] ;
            $key = preg_replace('/[\W]/', '', $key);  //because mode, the same code is for working with $mode
            $this->layouts[$key] = $layoutName;
        }    
        /**********************************************************************/
    }
        
        
    public function init()
    {
        $this->sitetheme = e107::getPref('sitetheme');
        $value = e107::getThemeConfig($this->sitetheme)->getPref();
             
        /**********************************************************************/
        //display keys, not names
        foreach ($this->layouts as $key => $value) {
            $values[$key] = $key;
        }
        $this->fields['layout_mode']['writeParms']['optArray'] = $values;
        /**********************************************************************/
         
        $headerlist = array();
        $directory = e_THEME. $this->sitetheme.'/headers';
        if (is_dir($directory)) 
		{
            $files =  array_diff(scandir($directory), array('..', '.'));
            foreach ($files as $file) {
                if (is_dir($directory."/".$file)) {
                    continue;
                }
                    
                $fname = str_replace(".html", "", $file);
                $headerlist[$file] = $file;
            }
        }
 
        $this->fields['layout_header']['writeParms']['optArray'] = $headerlist;
             
        /**********************************************************************/
        $footerlist = array();
        $directory = e_THEME. $this->sitetheme.'/footers';
        if (is_dir($directory)) 
		{
            $files =  array_diff(scandir($directory), array('..', '.'));
            foreach ($files as $file) {
                if (is_dir($directory."/".$file)) {
                    continue;
                }
 
                $footerlist[$file] = $file;
            }
        }
 
        $this->fields['layout_footer']['writeParms']['optArray'] = $footerlist;
 
        /**********************************************************************/
        //display available options sets
        $settinglist = array();
        $directory = e_THEME. $this->sitetheme.'/jmlayouts';
        if (is_dir($directory)) 
		{
            $files =  array_diff(scandir($directory), array('..', '.'));
            foreach ($files as $file) {
                if (is_dir($directory."/".$file)) {
                    continue;
                }
                $settinglist[$file] = $file;
            }
        }
 
        $this->fields['layout_setting']['writeParms']['optArray'] = $settinglist;
        $this->postFilterMarkup = $this->AddButton();
    }

    public function AddButton()
    {
        $text = "</fieldset></form><div class='e-container'>
      <table  style='".ADMIN_WIDTH."' class='table adminlist table-striped'>";
        $text .=
      '<a href="admin_config.php?mode=main&action=create"  
      class="btn e-hide-if-js btn-primary"><span>Add New Layout (defined in theme.xml)</span></a>';
        $text .=
      '<a href="admin_config.php?mode=main&action=generate"  
      class="btn e-hide-if-js btn-info"><span>Generate layouts</span></a>';
        $text .= "</td></tr></table></div><form><fieldset>";
 
           
        return $text;
    }
    public function beforeUpdate($new_data, $old_data, $id)
    {
        return $new_data;
    }
 
    
    public function GeneratePage()
    {
        $text = e_SELF;  
        foreach ($this->layouts as $layoutmode=>$layoutname) {
            $where = ' layout_mode = "'.$layoutmode.'" LIMIT 1 ';
            $jmlayout = e107::getDb()->retrieve('jmlayout', 'layout_mode, layout_title, layout_setting', $where);
            if ($jmlayout['layout_mode']) {
                //do nothing? Or update name?
            } else {
                $insertdata = array(
                            'layout_mode'=> $layoutmode,
                            'layout_title'=> $layoutname,
                            'layout_setting'=> 'default',
                            'layout_header'=> '',
                            'layout_footer'=> '',
                            'layout_options'=> ''
                        );
                $insertdata['_DUPLICATE_KEY_UPDATE'] = true; //just to be sure
                e107::getDb()->insert('jmlayout', $insertdata);
            }
        }
        header("location: ".e_SELF);
        exit();
    }
}
                


class jmlayouts_form_ui extends e_admin_form_ui
{
}
        
        
new jmlayouts_adminArea();

require_once(e_ADMIN."auth.php");
e107::getAdminUI()->runPage();

require_once(e_ADMIN."footer.php");
exit;
