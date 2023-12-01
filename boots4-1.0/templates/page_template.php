<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
*/

if(!defined('e107_INIT'))
{
	exit;
}

$PAGE_WRAPPER = array();

$PAGE_WRAPPER['default']['CPAGESUBTITLE']   = '<h4>{---}</h4>';
$PAGE_WRAPPER['default']['CPAGEMESSAGE']    = '{---}<div class="clear"><!-- --></div>';
$PAGE_WRAPPER['default']['CPAGEAUTHOR']     = "{---}, ";
$PAGE_WRAPPER['default']['CPAGENAV']        = '<div class="f-right pull-right float-right col-md-3">{---}</div>';


#### default template - BC ####
// used only for parsing comment outside of the page tablerender-ed content
// leave empty if you integrate page comments inside the main page template


$PAGE_TEMPLATE['default']['page'] = '
		{PAGE}
		{PAGECOMMENTS}
	';

// always used - it's inside the {PAGE} sc from 'page' template
$PAGE_TEMPLATE['default']['start'] = '';

// page body
$PAGE_TEMPLATE['default']['body'] = '
<div class="text-center mb-5 mb-lg-6">
<h2 class="fs-2 fs-sm-3">{CPAGETITLE}</h2>
<hr class="hr-ornate" />
</div>
 
<div class="row">
{CPAGESUBTITLE}
{CPAGENAV}
{CPAGEBODY}
{CPAGEEDIT}
</div>
 
	';
//<span class="font-weight-medium">Simple </span> Page  - insert this to have it styled
$PAGE_TEMPLATE['starter']['body'] = '
<div class="row justify-content-center text-center">     
    <div class="col-lg-10">              
        <div class="mb-5 mb-lg-6">  	
            <h2 class="fs-2 fs-sm-3">{CPAGETITLE}</h2>  	
            <hr class="hr-ornate" />
        </div>
        <div class="row justify-content-center">	
            <div class="col-10 col-lg-9 col-xl-6">	
                <p class="lead">{CPAGESUBTITLE}</p>	{CPAGEBODY} 	
                {CPAGEEDIT} 	
            </div>
        </div>
    </div>
</div> 	';


$PAGE_TEMPLATE['about']['body'] = '
<div class="row justify-content-center pb-5" id="{CPAGESEF}">    
    <div class="col-lg-10">    
        <div class="text-center mb-5 mb-lg-6">	
            <h2 class="fs-2 fs-sm-3">{CPAGETITLE}</h2>  	
            <hr class="hr-ornate" />
        </div>
        <div class="row justify-content-center">
            {CPAGEBODY} 
        </div>
    </div>
</div> 	';


// {CPAGEFIELD: name=image}

$PAGE_WRAPPER['default']['CPAGEEDIT'] = "<div class='text-right text-end'>{---}</div>";

// used only when password authorization is required
$PAGE_TEMPLATE['default']['authorize'] = '
		<div class="cpage-restrict ">
			{message}
			{form_open}
			<div class="panel panel-default">
				<div class="panel-heading">{caption}</div>
					<div class="panel-body">
					    <div class="form-group">
				       		 <label class="col-sm-3 control-label">{label}</label>
					        <div class="col-sm-9">
					               {password} {submit} 
					        </div>
			     		</div>
					</div>
      			</div>
			{form_close}
		</div>
	';

// used when access is denied (restriction by class)
$PAGE_TEMPLATE['default']['restricted'] = '
		{text}
	';

// used when page is not found
$PAGE_TEMPLATE['default']['notfound'] = '
		{text}
	';

// always used
$PAGE_TEMPLATE['default']['end'] = '{CPAGERELATED: types=page,news}</div>';

// options per template - disable table render
//	$PAGE_TEMPLATE['default']['noTableRender'] = false; //XXX Deprecated

// define different tablerender mode here
$PAGE_TEMPLATE['default']['tableRender'] = 'cpage';

$PAGE_TEMPLATE['default']['related']['caption'] = '{LAN=RELATED}';
$PAGE_TEMPLATE['default']['related']['start'] = '{SETIMAGE: w=350&h=350&crop=1}<div class="row">';
$PAGE_TEMPLATE['default']['related']['item'] = '<div class="col-md-4"><a href="{RELATED_URL}">{RELATED_IMAGE}</a><h3><a href="{RELATED_URL}">{RELATED_TITLE}</a></h3></div>';
$PAGE_TEMPLATE['default']['related']['end'] = '</div>';

// $PAGE_TEMPLATE['default']['editor'] = '<ul class="fa-ul"><li><i class="fa fa-li fa-edit"></i> Level 1</li><li><i class="fa fa-li fa-cog"></i> Level 2</li></ul>';
 
	
$PAGE_TEMPLATE['contact'] = $PAGE_TEMPLATE['default'];

$PAGE_TEMPLATE['contact']['tableRender'] = 'none';
$PAGE_TEMPLATE['contact']['body'] = '
 
<div class="container-fluid">
<div class="row justify-content-center">
  <div class="col-lg-10">
	<div class="text-center mb-5 mb-lg-6">
	  <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">{CPAGETITLE} </span> {CPAGESUBTITLE}</h2>
	  <hr class="hr-ornate" />
	</div>
	<div class="row">
	  <div class="col-md-6 mb-4 mb-xl-0">
		<h4>Connect with us</h4>
		<p class="mt-3 mb-0"> {CPAGEBODY} </p>
		<div class="row">
		  <div class="col-12">
			<hr class="my-4" />
		  </div>
		  <div class="col-md-6"">
			<div class="row">
			  <div class="col-1"><span class="fas fa-map-marker-alt text-900"></span></div>
			  <div class="col">
				<h5 class="mb-1">{THEME_CONTACT_INFO: type=organization}</h5>
				{THEME_CONTACT_INFO: type=address}
			  </div>
			</div>
		  </div>
		  <div class="col-md-6">
			<div class="row">
			  <div class="col-12">
				<div class="row">
				  <div class="col-1 mr-3"><span class="fas fa-phone text-900"></span></div>
				  <div class="col pl-0">
					<a href="tel:{THEME_CONTACT_INFO: type=phone1}">{THEME_CONTACT_INFO: type=phone1}</a>
				  </div>
				</div>
			  </div>
			  <div class="col-12">
			  <div class="row">
				<div class="col-1 mr-3"><span class="fas fa-phone text-900"></span></div>
				<div class="col pl-0">
				  <a href="tel:{THEME_CONTACT_INFO: type=phone2}">{THEME_CONTACT_INFO: type=phone2}</a>
				</div>
			  </div>
			</div>
			  <div class="col-12">
				<div class="row">
				  <div class="col-1 mr-3"><span class="fas fa-paper-plane text-900"></span></div>
				  <div class="col pl-0">
					<a href="mailto:{THEME_CONTACT_INFO: type=email1}">{THEME_CONTACT_INFO: type=email1}</a>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		  <div class="col-11">
			<hr class="my-4" />
		  </div>
		  <div class="col-auto" style="min-width: 100%;">
		   {XURL_ICONS: template=contact}
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 mb-4 mb-lg-0">
		<h4>{CMENUTITLE}</h4>
		<p>{CMENUBODY}</p>
		{MENU: path=contact/contact}
	  </div>
	</div>
  </div>
</div>
<div class="row justify-content-center mt-4">
  <div class="col-lg-10">
	<div class="rounded googlemap minh-50vh" data-latlng="{THEME_CONTACT_INFO: type=coordinates}" data-scrollwheel="false" data-icon="{THEME}assets/img/map-marker.png" data-zoom="17" data-theme="Default">
	  <div class="marker-content py-3">
	 	 {THEME_CONTACT_INFO: type=address}
	  </div>
	</div>
  </div>
</div>
</div>
<!-- end of .container-->';



	
	
	
