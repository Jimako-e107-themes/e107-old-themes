<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2017 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }
e107::includeLan(e_LANGUAGEDIR.e_LANGUAGE.'/lan_sitelinks.php');

 
/**
 * Class for handling all navigation links site-wide. ie. admin links, admin-menu links, admin-plugin links, front-end sitelinks etc. 
 */
class alt_e_navigation   extends e_navigation
{
	/**
	 * @var array Admin link structure
	 */
	var $admin_cat = array();
	
	/**
	 * @var boolean active check main
	 */
	public $activeSubFound = false;
	
	/**
	 * @var boolean active check sub
	 */
	public $activeMainFound = false;
	
	
	var $iconArray = array();

 
	/**
	 * TODO Cache check2021
	 */
	public function render($data, $template, $useCache = true) 
	{
		if(empty($data) || empty($template) || !is_array($template)) return '';
 
		$sc 			= e107::getScBatch('alt_navigation');	//this is change
        
		$sc->template 	= $template; 
        
		$head			= e107::getParser()->parseTemplate($template['start'],true);
		$foot 			= e107::getParser()->parseTemplate($template['end'],true);
		$ret 			= "";
		
		$sc->counter	= 1;
		$this->activeMainFound = false;

		foreach ($data as $_data) 
		{		
            
            $active			= ($this->isActive($_data, $this->activeMainFound)) ? "_active" : ""; //check2021
			$sc->setDepth(0);
			$sc->setVars($_data); // isActive is allowed to alter data
            if(!empty($_data['link_sub'])) {   //check2021
              $itemTmpl = $template['item_submenu'.$active]; 
            }
            else {
              $itemTmpl = $template['item'.$active];
            }
			 
			$ret 			.= e107::getParser()->parseTemplate($itemTmpl, true, $sc);
			$sc->active		= ($active) ? true : false;
			if($sc->active)
			{
				$this->activeMainFound = true;
			}
			$sc->counter++;		
		}
		
		return ($ret != '') ? $head.$ret.$foot : '';
	}
 
}

 


/**
 * Navigation Shortcodes
 * @todo SEF 
 */
class alt_navigation_shortcodes extends navigation_shortcodes
{
	
	public $template;
	public $counter;
	public $active;
	public $depth = 0;
 

		/**
		 * Return the parsed sublinks of the current link
		 * @example {ALT_LINK_SUB}
		 * @return string
		 */
		function sc_alt_link_sub($parm = null)
		{

			if(empty($this->var['link_sub']))
			{
				return false;
			}

			if(is_string($this->var['link_sub'])) // html override option.
			{
				//	e107::getDebug()->log($this->var);

				return $this->var['link_sub'];
			}

			$this->depth++;
 
			// Assume it's an array.

           if(!empty($this->var['link_sub'])&& isset($this->template['submenu_lowerstart']) && $this->var['link_parent'] > 0 ) { 
          
           	$startTemplate =   $this->template['submenu_lowerstart'];
              $endTemplate = $this->template['submenu_lowerend'];
           }
           else {
              $startTemplate =  $this->template['submenu_start'];
              $endTemplate = $this->template['submenu_end'];
           }


			$text = e107::getParser()->parseTemplate(str_replace(array('{LINK_SUB}','{NAV_SUB}'), '', $startTemplate), true, $this);

			foreach($this->var['link_sub'] as $val)
			{
				$active = (e107::getNav()->isActive($val, $this->activeSubFound, true)) ? "_active" : "";

				$this->setVars($val);    // isActive is allowed to alter data
				$tmpl = !empty($val['link_sub']) ? varset($this->template['submenu_loweritem' . $active]) : varset($this->template['submenu_item' . $active]);
				$text .= e107::getParser()->parseTemplate($tmpl, true, $this);
				if($active)
				{
					$this->activeSubFound = true;
				}
			}

			$text .= e107::getParser()->parseTemplate(str_replace(array('{LINK_SUB}','{NAV_SUB}'), '', $endTemplate), true, $this);

			return $text;
		}	
	/**
	 * Return the parsed sublinks of the current link
	 * @return string
	 */	
	function sc_link_sub($parm='')
	{
		if(empty($this->var['link_sub']))
		{
			return false;
		}

		if(is_string($this->var['link_sub'])) // html override option.
		{

		//	e107::getDebug()->log($this->var);

			return $this->var['link_sub'];
		}

		$this->depth++;
 
		// Assume it's an array.


 if(!empty($this->var['link_sub'])&& isset($this->template['submenu_lowerstart']) && $this->var['link_parent'] > 0 ) { 

 	$startTemplate =   $this->template['submenu_start'];
    $endTemplate = $this->template['submenu_start'];
 }
 else {
    $startTemplate =  $this->template['submenu_start'];
    $endTemplate = $this->template['submenu_end'];
 }
	
		$text = e107::getParser()->parseTemplate(str_replace(array('{LINK_SUB}','{NAV_SUB}'), '', $startTemplate), true, $this);
 
		foreach($this->var['link_sub'] as $val)
		{
			$active	= (e107::getNav()->isActive($val, $this->activeSubFound, true)) ? "_active" : "";
			$this->setVars($val);	// isActive is allowed to alter data
            
            $tmpl = !empty($val['link_sub']) ? varset($this->template['submenu_loweritem' . $active]) : varset($this->template['submenu_item' . $active]);
            
        if(!empty($val['link_sub'])) {
         //  $tmpl =  varset($this->template['submenu_loweritem' . $active]);
            
           $text .= e107::getParser()->parseTemplate($tmpl, true, $this);
        }
        else {
         // $tmpl =  varset($this->template['submenu_item' . $active]);
           $text .= e107::getParser()->parseTemplate($tmpl, TRUE, $this);
        }
 
      
			if($active) $this->activeSubFound = true;		
		}

        $text .= e107::getParser()->parseTemplate(str_replace(array('{LINK_SUB}','{NAV_SUB}'), '', $endTemplate), true, $this);
		
		return $text;
	}
 
}
