<?php
 
class theme_shortcodes extends e_shortcode
{

	var $override = true;
  
    /* {CHAPTER_IMAGE_SRC} */
    public function sc_chapter_image_src($parm = array())
    {
        $sc  = e107::getScBatch('page', null, 'cpage');
        $data = $sc->getVars();
 
        if ($data['chapter_image']) {
            $image = e107::getParser()->thumbUrl($data['chapter_image'], array('w'=>0, 'h'=>0));
 
            return $image;
        } else {
            $text = '';
            return $text;
        }
    }
        
        
    /* {CHAPTER_ICON_SRC} */
    public function sc_chapter_icon_src($parm = array())
    {
        $sc  = e107::getScBatch('page', null, 'cpage');
        $data = $sc->getVars();
 
 
        if ($data['chapter_icon']) {
            $image = e107::getParser()->thumbUrl($data['chapter_icon'], array('w'=>0, 'h'=>0));
            // $text =  "style='background-image:url({$image})'";
            //  <img class="mb-2 mb-md-3 nav-icon" src="{CHAPTER_ICON_SRC}" alt="{CHAPTER_TITLE}">
            return $image;
        } else {
            $text = '';
            return $text;
        }
    }

	/* {CHAPTER_PAGES} */
	/* {PAGES is not working with book/chapters menus} + we need directly page content  */
	/* see function listPages($chapt=0) */
	/* fix for https://github.com/e107inc/e107/issues/4402 too */

    public function sc_chapter_pages($parm = array())
    {
        $sc  = e107::getScBatch('page', null, 'cpage');
        $data = $sc->getVars();
		 
		$chapter_tpl_key =  varset($parm['template'], 'default');
	 
		//chapter template is used only for start, middle and end of page listing, page itself use page template - each page can look different way 
		//if page shortcodes are used in chapter template, it will work too
		$chapter_template = e107::getCoreTemplate('chapter', $chapter_tpl_key );

        $chapter_template = $chapter_template['listPages'];
		
		$chapt = $data['chapter_id'];
 
		//sorry #page, you break my editor styling 
		$query = "SELECT * FROM ".MPREFIX."page WHERE page_chapter=".intval($chapt)." AND page_class IN (".USERCLASS_LIST.") ORDER BY page_order ASC ";
	 
		$text = e107::getParser()->parseTemplate($chapter_template['start'], true, $sc); 

		$pageArray = e107::getDb()->retrieve($query, true);
 
		$page_shortcodes =  e107::getScBatch('page',null,'cpage');
 
		// see setPage() for more advanced rendering (password etc)
		foreach($pageArray AS $page) {

			$page_tpl_key =  varset($page['page_template'], 'default');
			$page_template =  e107::getCoreTemplate('page', $page_tpl_key,); 
			
			//this replaced vars for chapter too, no idea how to do new set of batch shortcodes
			$page_shortcodes->setVars($page);
	
			$page_item = e107::getParser()->parseTemplate($page_template['body'], true, $page_shortcodes); 
		
			$text .= $page_item;

		}
 
		//return back chapter data
		$sc->setVars($data);
		$text .= e107::getParser()->parseTemplate($chapter_template['end'], true, $sc); 
 
		
		return $text;
	}	

	/* make contact shortcodes global for using in pages */
	/* {THEME_CONTACT_INFO: type=message} */
	/* {THEME_CONTACT_INFO: type=coordinates} - for google maps */
	
	function sc_theme_contact_info($parm=null)
	{
		$ipref = e107::getPref('contact_info');
		$type = varset($parm['type']);

		if(empty($type) || empty($ipref[$type]))
		{
			return null;
		}

		$tp = e107::getParser();
		$ret = '';

		switch($type)
		{
			case "organization":
				$ret = $tp->toHTML($ipref[$type], true, 'TITLE');
				break;

			case 'email1':
			case 'email2':
			case 'phone1':
			case 'phone2':
			case 'phone3':
			case 'fax':
				$ret = $tp->obfuscate($ipref[$type]);
				break;

			default:
				$ret = $tp->toHTML($ipref[$type], true, 'BODY');
				// code to be executed if n is different from all labels;
		}

		return $ret;
	}

}
