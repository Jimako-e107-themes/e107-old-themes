<?php

/**
 * @file
 * Provides information about external libraries.
 */


/**
 * Class theme_library.
 */
class theme_library
{

	/**
	 * Provides information about external libraries.
	 */
	function config()
	{
		return array();
	}

	/**
	 * Alters library information before detection and caching takes place.
	 */
	function config_alter(&$libraries)
	{
       // $libraries['cdn.fontawesome'] = array();
       /*    unset($libraries['cdn.fontawesome5']['files']['css']);
        unset($libraries['cdn.fontawesome5']['files']['js']);
        unset($libraries['cdn.fontawesome5']['variants']);
       */   
        
        unset($libraries['cdn.bootstrap4']['files']['css']);
        unset($libraries['cdn.bootstrap4']['files']['js']);
        unset($libraries['cdn.bootstrap4']['variants']);
        
        unset($libraries['bootstrap4']['files']['css']);
        unset($libraries['bootstrap4']['files']['js']);
        unset($libraries['bootstrap4']['variants']);     
        
	}

}