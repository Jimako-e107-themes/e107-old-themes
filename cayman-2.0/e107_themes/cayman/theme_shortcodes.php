<?php

$sitetheme = e107::getPref('sitetheme');
require_once(e_THEME.$sitetheme."/shortcodes/default_shortcodes.php");

class theme_shortcodes extends default_theme_shortcodes
{
  
  	private $odd = false;
	private $social_count = 0;
 
    public function __construct()
	{
            $this->sitetheme = e107::getPref('sitetheme');
            e107::getSingleton('theme_settings', e_THEME.$this->sitetheme.'/theme_settings.php'); 
    }
    
    
	/**
	 * Special Header Shortcode for dynamic menuarea templates.
	 * @shortcode {---HEADER---}
	 * @return string
	 */
     
	public function sc_header()
	{
        $text = ''; 
    	$layout =  preg_replace('/[\W]/', '', THEME_LAYOUT);     
        
        $parm['type'] = 'header'; 
	    $parm['key']  =  'default';
        $parm['path'] =  'header_default.html';    

        $tmp = theme_settings::get_jmlayouts();
 
        if($tmp[THEME_LAYOUT]['layout_header']) {
            $parm['file'] =  $tmp[THEME_LAYOUT]['layout_header'];
        }
 
        $text = $this->sc_layout_header($parm);  	 
        return $text;   
    }
    
	/**
	 * Special Footer Shortcode for dynamic menuarea templates.
	 * @shortcode {---FOOTER---}
	 * @return string
	 */
	public function sc_footer()
	{
        $text = ''; 
    	$layout =  preg_replace('/[\W]/', '', THEME_LAYOUT);     
        
        $parm['type'] = 'footer'; 
	    $parm['key']  =  'default';
        $parm['path'] =  'footer_default.html';    

        $tmp = theme_settings::get_jmlayouts();
 
        if($tmp[THEME_LAYOUT]['layout_footer']) {
            $parm['file'] =  $tmp[THEME_LAYOUT]['layout_footer'];
        }
 
        $text = $this->sc_layout_footer($parm);  	 
        return $text;   
    }
   
    
	/* {NAVBAR_BRANDING} */
	public function sc_navbar_branding()
	{ 
 
		$pref = e107::pref('theme', 'branding');
		switch ($pref)
		{
		case 'logo':
			$brand = '{SITELOGO: h=70}';
			break;
		case 'sitenamelogo':
			$brand = "{SITELOGO: h=50}" . SITENAME;
			break;
		case 'sitename':
		default:
			$brand = SITENAME;
			break;
		}
		$text = '<a class="navbar-brand large" href="{SITEURL}" >' . $brand . '</a>';
		$text = e107::getParser()->parseTemplate($text);
		return $text;
	}
 

	/* {XURL_ICONS_WOW_DELAY} */
	function sc_xurl_icons_wow_delay() {
		$this->social_count++;
		$text = 'data-wow-delay="0.'.$this->social_count.'s"';
		return $text;
	}
	
	/* {NEWS_IMAGE_CLASSES} */
	function sc_news_image_classes()
	{
		$this->odd = !$this->odd;
		return ($this->odd) ? 'fadeInLeft' : 'text-left fadeInRight col-md-push-6 ';
	}

	/* {NEWS_ARTICLE_CLASSES} */
	function sc_news_article_classes()
	{
	  return ($this->odd) ? 'fadeInRight text-right' : 'fadeInLeft text-left  col-md-pull-6  ';
	}
 
	/*  {THEME_CHAPTER_NAVIGATION} */
	function sc_theme_chapter_navigation($parm, $mode='') {
   
		$sc  = e107::getScBatch('page');  //e107::getScBatch('page', null, 'cpage') returns data of latest page of this chapter on CH Page
		$data = $sc->getVars();
 
		 e107::getScBatch('page', null, 'cpage');
	 
		$chapter_sef = $data['chapter_sef'];
		$navigation = "{CHAPTER_MENUS: name={$chapter_sef}&template=navigation}";
		$navigation = e107::getParser()->parseTemplate($navigation, true);
		return $navigation;
	}

	/* {PAGES_SEARCH} */
	function sc_pages_search() {
 
		//add this to layout or theme prefs 
		$caption = 'Your custom text... From where - layout or theme? Or chapter description? ';

		$text = '<form method="get" id="searchform" class="form-search knowledgebase" action="'.defset('e_SEARCH').'">
				<input type="hidden" name="r" value="0" data-original-title="" title="">
				<input type="hidden" name="t" value="page" data-original-title="" title="">
				<input type="hidden" name="forum" value="all" data-original-title="" title="">
		 		<div class="input-group">
				 <input class="form-control input-lg" type="text" name="q" size="20" value="" id="autocomplete-dynamic" maxlength="50" data-original-title="" required title="" placeholder="'.defset('LAN_SEARCH').'">
				    
					<span class="input-group-btn">
					<input type="submit" id="searchsubmit"  name="s" value="search" class="btn btn-cayman btn-primary nomargtop">
					</span>
				</div>
		</form>';
		return $text;
		return e107::getRender()->tablerender($caption, $text, 'pagesearch');		
	}

	/* {VARIABLE_PAGE_HEADER} */
	function sc_variable_page_header() { 
 
	   $default = '<section>
	   <div class="carousel business_carousel slide bgmove">
		   <!-- Carousel items -->
		   <div class="carousel-inner">
			   <!-- slider item -->
			   <div class="item active">
				   <!-- image -->
				   <div class="slider-bg darker-span">
					   <img class="kenburnsreverse" src="{LAYOUT_BGIMAGE: template=src}" alt="slider">
				   </div>
				   <div class="slider_overlay">
				   </div>
				   <div class="container">
					   <div class="row">
						   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
							   <div class="carousel-content">
								   <div class="slider-thumb animated1">
									   <h1><b>{---CAPTION---}</b></h1>
								   </div>
								 
								   <a href="#startcontent" aria-label="Content section" class="downarrowpoint wow zoomIn goscroll"><i class="fa fa-angle-double-down"></i></a>
							   </div>
						   </div>
					   </div>
				   </div>
			   </div>
		   	</div>
		   </div>
		</section>';
		
		if(defined("PREVIEWTHEME")) {
		   return   e107::getParser()->parseTemplate($default , true); 
		}
		if(defined("e_IFRAME")&& e_IFRAME ) {
			return   e107::getParser()->parseTemplate($default , true); 
		}		 
		if(defined("e_ROUTE")) {
			switch(e_ROUTE) {
				case   "page/view/index":
				case   "page/view/other":	
					return '';
				case   "xgallery/index/category":
				case   "xgallery/index/list": 
					$pageheader = '{MASTHEAD: mode=gallery&template=parallaximage}';
					$pageheader = e107::getParser()->parseTemplate($pageheader , true); 
					return $pageheader;
				break;
				default: 
					return   e107::getParser()->parseTemplate($default , true); 
				}
			}
			else {
				return   e107::getParser()->parseTemplate($default , true); 
			}	
		}	


		/**
		 * {PORTFOLIO_ITEMS}
		 * @return string
		 */
		function sc_portfolio_items()
		{
			//	return e107::getParser()->parseTemplate("{CHAPTER_MENUS: name=portfolio}",true);
			$template = e107::getCoreTemplate('chapter', 'portfolio');
			$sc = e107::getScBatch('page', null, 'cpage');

			// TO GET ID OF BOOK WITH PORTFOLIO
			$where = "chapter_visibility IN (" . USERCLASS_LIST . ") AND chapter_template = 'portfolio'";
			$book_id = e107::getDb()->retrieve('page_chapters', 'chapter_id', $where);

			// TO GET ALL PAGES, WITH THEIR CHAPTERS WITH BOOK PORTFOLIO

			$query = "SELECT * FROM #page AS p LEFT JOIN #page_chapters as ch ON p.page_chapter=ch.chapter_id WHERE ch.chapter_parent = " . intval($book_id) . " ORDER BY p.page_order DESC ";

			if($pageArray = e107::getDb()->retrieve($query, true))
			{
				$sc->setVars($pageArray[0]); // set so book/chapter info is available to 'start' template.
				$text = e107::getParser()->parseTemplate($template['listPages']['start'], true, $sc);

				foreach($pageArray as $page)
				{
					$sc->setVars($page);
					$text .= e107::getParser()->parseTemplate($template['listPages']['item'], true, $sc);
				}

				$text .= e107::getParser()->parseTemplate($template['listPages']['end'], true, $sc);
			}
			else
			{
				$text = LAN_AG_THEME_14;
			}
			return $text;
		}
        
        
        /* {CHAPTER_IMAGE_SRC} */
        function sc_chapter_image_src($parm = array()) {
           	$sc  = e107::getScBatch('page' );
            $data = $sc->getVars();
	 
            if($data['chapter_id']) {
                $row = e107::getDb()->retrieve('page_chapters','chapter_id, chapter_image','chapter_id = '.$data['chapter_id'].' LIMIT 1');
 
                if($row['chapter_image']) {
                  $image = e107::getParser()->thumbUrl($row['chapter_image'], array('w'=>0, 'h'=>0));
                  $text =  "style='background-image:url({$image})'";
                  return $text;
                }
                else {
                   $text = '';
                   return $text;
                }
            }
          
        }


        /* {PAGE_IMAGE_SRC} */
        function sc_page_image_src($parm = array()) {
			$sc  = e107::getScBatch('page', null, 'cpage');
		 	$data = $sc->getVars();

			if($data['menu_image']) {
 
				$image = e107::getParser()->thumbUrl($data['menu_image'], array('w'=>0, 'h'=>0));
				 
			}
            return $image;
	 }		
}