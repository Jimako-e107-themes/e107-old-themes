<?php


#### Panel Template - Used by menu_class.php  for Custom Menu Content. 


	$MENU_TEMPLATE['default']['start'] 					= ''; 
	$MENU_TEMPLATE['default']['body'] 					= '{CMENUBODY}'; 
	$MENU_TEMPLATE['default']['end'] 					= ''; 

	$MENU_TEMPLATE['button']['start'] 					= '<div class="cpage-menu">'; 
	$MENU_TEMPLATE['button']['body'] 					= '<div>{CMENUBODY}</div>{CPAGEBUTTON}';
	$MENU_TEMPLATE['button']['end'] 					= '</div>'; 

	### Additional control over image thumbnailing is possible via SETIMAGE e.g. {SETIMAGE: w=200&h=150&crop=1}
	$MENU_TEMPLATE['buttom-image']['start'] 			= '<div class="cpage-menu">'; 
	$MENU_TEMPLATE['buttom-image']['body'] 				= '<div>{CMENUIMAGE}</div>{CPAGEBUTTON}';
	$MENU_TEMPLATE['buttom-image']['end'] 				= '</div>'; 



	$MENU_TEMPLATE['service-boxes']['start'] 	= '
<section class="page-wrapper gray">
<div class="container">		
	<h2 class="title">{CHAPTER_NAME}</h2>
	<div class="row">
		<div class="col-md-12 text-center">
			<p class="lead">
				 {CHAPTER_DESCRIPTION}
			</p>
		</div>
	</div>
	<div class="row">'; 
	$MENU_TEMPLATE['service-boxes']['body'] 	= '
			<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="{CPAGEFIELD: name=delay}">
			<div class="octa">
			</div>
			<i class="fa fa-{CMENUICON=css}"></i>
			<div class="feature-content">
				<h3>{CMENUTITLE}</h3>
				<p>
					 {CMENUBODY}
				</p>
			</div>
		</div>'; 
	$MENU_TEMPLATE['service-boxes']['end'] 	= '			
	   </div>
		</div>
	</section>'; 
 
 
	$MENU_TEMPLATE['demos']['start'] 	= '
<section class="page-wrapper bot0">
<h2 class="title">{CHAPTER_NAME}</h2>
<p class="tagline">
	 {CHAPTER_DESCRIPTION}
</p>
<div id="portfolio-filter" class="text-center">
	<ul class="portfolio-filter-list">
		<li><a href="#" class="active" data-cat="*">ALL</a></li>
		<li><a href="#" data-cat=".design">design</a></li>
		<li><a href="#" data-cat=".fashion">fashion</a></li>
		<li><a href="#" data-cat=".photo">photography</a></li>
		<li><a href="#" data-cat=".video">video</a></li>
		<li><a href="#" data-cat=".shooting">shooting</a></li>
	</ul>
</div>
<div id="portfolio-items" class="portfolio-items">
 '; 
	$MENU_TEMPLATE['demos']['body'] 	= '
	<article class="{CPAGEFIELD: name:tags}">
	<a href="{CPAGEURL}">
	{CMENUIMAGE}
	<div class="overlay">
		<i class="fa fa-camera"></i>
		<h3>{CMENUTITLE}</h3>
		<span>{CPAGEFIELD: name:tags}</span>
	</div>
	</a>
	</article>'; 
	$MENU_TEMPLATE['demos']['end'] 	= '			
</div>
</section>'; 
 
 
	$MENU_TEMPLATE['about-us']['start'] 			= '{SETIMAGE: w=0&h=0}'; 
	$MENU_TEMPLATE['about-us']['body'] 				= '
<section class="split biglogo">  
<div class="col-md-6" style="min-height:420px;background-size:cover; ">{CMENUIMAGE}
	<div class="overlay" style="background:#303543;opacity:0.4;">
	
	</div>   
</div>
 
<div class="col-md-6 darkbgcolor" style="min-height:420px;">
	<h2 class="title">{CMENUTITLE}</h2>
 
	{CMENUBODY}
</div>
</section>';
	$MENU_TEMPLATE['about-us']['end'] 				= '';  
  
  
  
	$MENU_TEMPLATE['showcase-white']['start'] 			= '{SETIMAGE: w=0&h=0}'; 
	$MENU_TEMPLATE['showcase-white']['body'] 				= ' 
<section class="page-wrapper">
<div class="container">
	<div class="row">
		<div class="col-md-6 picture wow fadeInLeft">
			<a href="{CMENUURL}" target="_blank">
			<img class="wrapimg" src="{CMENUIMAGE=url}" alt="{CMENUTITLE}">
			</a>
		</div>
		<div class="col-md-6 article wow fadeInRight text-right">
			<h3>{CPAGETITLE}</h3>
			<div class="lead">
{CPAGEBODY}
			</div>
			<div class="space">
			</div>
 
      <a class="btn btn-minimal nomargtop" href="{CMENUURL}" target="_blank">Demo</a>
		</div>
	</div>
</div>
</section>
 ';
	$MENU_TEMPLATE['showcase-white']['end'] 				= '';  
       
         
	$MENU_TEMPLATE['showcase-grey']['start'] 			= '{SETIMAGE: w=0&h=0}'; 
	$MENU_TEMPLATE['showcase-grey']['body'] 				= ' 
<section class="page-wrapper gray">
<div class="container">
	<div class="row">
		<div class="col-md-6 article wow fadeInRight">
			<h3>{CPAGETITLE}</h3>
			<div class="lead">
{CPAGEBODY}
			</div>
			<div class="space">
			</div>
			<a class="btn btn-minimal  nomargtop" href="{CMENUURL}" target="_blank">Demo</a>
		</div>
		<div class="col-md-6 picture text-right wow fadeInLeft">
			<a href="{CMENUURL}" target="_blank">
			<img class="wrapimg" src="{CMENUIMAGE=url}" alt="{CMENUTITLE}">
			</a>
		</div>
	</div>
</div>
</section>
 ';
	$MENU_TEMPLATE['showcase-grey']['end'] 				= '';  	
	
?>