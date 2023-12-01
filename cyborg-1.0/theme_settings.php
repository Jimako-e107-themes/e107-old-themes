<?php


class theme_settings
{
    public static function get_jmlayouts() {
    
        if (e107::isInstalled('jmlayouts')) {
            $tmp = e107::getDb()->retrieve('jmlayout', '*', null, true);
            foreach ($tmp as $layout) {
                $mode = $layout['layout_mode'] ;
                $layoutsOptions[$mode] =   $layout;
            }
        }
        else {
			/* without plugin do it manually... */
            $layoutsOptions['home']['layout_header'] = 'header_default.html';   
            $layoutsOptions['home']['layout_footer'] = 'footer_default.html';   
            $layoutsOptions['index']['layout_header'] = 'header_efiction.html';
            $layoutsOptions['index']['layout_footer'] = 'footer_default.html';
        } 
        return $layoutsOptions;
    }
    
    public static function get_membersonly_template()
    {
        $tmp['membersonly_start'] = '{LAYOUT_NAVBAR: key=default} 
          <section class="page-header">
            <div class="container">
              <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-7 mx-auto">';

        $tmp['membersonly_end'] = '
        </div></div></div></section>{LAYOUT_FOOTER: key=social}
        ';

        return $tmp;
    }
    
    public static function get_singleforms() {
	    $tmp['login_logo'] = '<div class="center">{LOGO: login}</div>';
        return $tmp;
	}
 
    
	public static function main_caret($name ='') {
		$tmp ='';
		return $tmp;
	}
    
    public static function alt_ul_class() {
		$main_ul_class = "topmenulist";
		return $main_ul_class;
	}
 
	public static function alt_li_class() {
		$main_li_class = "li";
		return $main_li_class;
	}

	public static function alt_a_class() {
		$main_a_class  = "a";
		return $main_a_class;
	}
    
	public static function alt_sub_div_class() {
		$main_sub_div_class  = "dropdown-menu";
		return $main_sub_div_class;
	}

	public static function alt_sub_a_class() {
		$main_sub_a_class = "dropdown-item border-radius-md";
		return $main_sub_a_class;
	}

	public static function alt_caret($name ='') {
		$tmp ='';
		return $tmp;
	}     

	public static function class_submit_button($name ='') {
		$tmp ='btn btn-primary';
		return $tmp;
	}	
    
 
    public static function get_linkstyle() {
    
 
            $link_settings['main']['dropdown_on'] = " data-bs-toggle='dropdown' data-bs-auto-close='outside' ";
    
            /* 1.st level ul */
            $link_settings['main']['prelink'] = '<ul class="navbar-nav me-auto mb-2 mb-lg-0">';
            $link_settings['main']['postlink'] = '</ul>';
            /* 1.st level li */
            $link_settings['main']['linkstart'] = '<li class="nav-item">';
            $link_settings['main']['linkstart_hilite'] = '<li class="nav-item">';
            $link_settings['main']['linkstart_sub'] = '<li class="nav-item dropdown {LINK_IDENTIFIER}">';
            $link_settings['main']['linkstart_sub_hilite'] = '<li class="nav-item dropdown {LINK_IDENTIFIER}">';
            $link_settings['main']['linkcaret'] = '';
            $link_settings['main']['linkend'] = "</li>";
            
            /* 1.st level a */
            $link_settings['main']['linkclass'] = 'nav-link'; 
	        $link_settings['main']['linkclass_hilite'] = 'nav-link active';
            $link_settings['main']['linkclass_sub'] = 'nav-link dropdown-toggle'; 
            $link_settings['main']['linkclass_sub_hilite'] = 'nav-link dropdown-toggle active';
 

            $link_settings['main_sub']['prelink'] = '<ul class="dropdown-menu shadow">';
            $link_settings['main_sub']['postlink'] = '</ul>';
            
            $link_settings['main_sub']['linkstart'] = '<li class="linkstart">';
            $link_settings['main_sub']['linkstart_hilite'] = '<li class="linkstart active">';
            $link_settings['main_sub']['linkstart_sub'] = '<li class="dropend lower">';
            $link_settings['main_sub']['linkstart_sub_hilite'] = '<li class="active dropend lower">';
            $link_settings['main_sub']['linkcaret'] = '';
            $link_settings['main_sub']['linkend'] = '';
            
            $link_settings['main_sub']['linkclass'] = 'dropdown-item'; 
	        $link_settings['main_sub']['linkclass_hilite'] = 'dropdown-item active';
            $link_settings['main_sub']['linkclass_sub'] = 'dropdown-item dropdown-toggle'; 
            $link_settings['main_sub']['linkclass_sub_hilite'] = 'dropdown-item dropdown-toggle active';       
 
            $link_settings['main_sub_sub']['prelink'] = '<ul class="dropdown-menu shadow">';
            $link_settings['main_sub_sub']['postlink'] = '</ul>';
  
            /* used for signin */ 
            $link_settings['alt'] = $link_settings['main'];
            $link_settings['alt']['prelink'] = '<ul class="navbar-nav">';
            $link_settings['alt']['linkdivider'] = '<li class="divider-vertical"></li>';
            $link_settings['alt']['linkcaret'] = '';
          
            $link_settings['alt_sub']['linkdivider'] = '<li><hr class="dropdown-divider"></li>';
            return $link_settings;
    }
    
    //'.$theme_settings['forum_header_background'].'
    //'.$theme_settings['forum_table_background'].'
    //'.$theme_settings['forum_card_background'].'
    public static function get_forumstyle() {
	    $style['forum_parent_card'] = ' bg-dark ';
        $style['forum_parent_card_header'] = ' bg-primary text-white ';
        $style['forum_row_class'] = ' p-2 bg-transparent   ';
 
        
        return $style;
	}
    
}
