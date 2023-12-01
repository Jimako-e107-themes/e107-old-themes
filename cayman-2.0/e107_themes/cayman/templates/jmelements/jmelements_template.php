<?php
 

$JMELEMENTS_TEMPLATE['animatedintro']['start'] =  '
<div id="large-header" class="large-header" style="background-image: url({SECTION_BGIMAGE})">
	<canvas id="demo-canvas"></canvas>
	<h1 class="main-title">{SECTION_INTRO} 
      <span class="thin wow pulse" data-wow-duration="1.8s" data-wow-delay="0.5s" data-wow-iteration="3">{SECTION_TITLE}</span><br/>
	<span class="smallh wow zoomIn"> {SECTION_SUBTITLE}</span><br/>
	<a type="button" href="{BUTTON01_URL}"  class="btn {BUTTON01_CLASS} wow fadeInLeft">{BUTTON01_TEXT}</a>
	<a type="button" href="{BUTTON02_URL}"  class="btn {BUTTON02_CLASS} wow fadeInRight">{BUTTON02_TEXT}</a>
	</h1>
</div>
 ';
$JMELEMENTS_TEMPLATE['animatedintro']['item'] =  '';
$JMELEMENTS_TEMPLATE['animatedintro']['end'] =  '';

$JMELEMENTS_TEMPLATE['features']['start'] =  '
<section class="page-wrapper gray">
<div class="container">
	<h2 class="title">{SECTION_TITLE}</h2>
	<div class="row">
		<div class="col-md-12 text-center">
			<p class="lead">
				 {SECTION_SUBTITLE}<br>{SECTION_SUBTITLE2}
			</p>
		</div>
	</div>
	<div class="row">
 ';
$JMELEMENTS_TEMPLATE['features']['item'] =  '
	<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="{ITEM_DELAY}s">
			<div class="octa">
			</div>
			<i class="fa fa-{ITEM_ICONNAME}"></i>
			<div class="feature-content">
				<h3>{ITEM_TITLE}</h3>
				<p>
					 {ITEM_DESC}
				</p>
			</div>
		</div>
 ';
$JMELEMENTS_TEMPLATE['features']['end'] =  ' 
	</div>
</div>
</section>';

 
 
$JMELEMENTS_TEMPLATE['split']['start'] =  '
<section class="split">
<div class="col-md-6 darkbgcolor text-center" style="min-height:450px;background-size:cover;background-position: center;background-image:url({SECTION_BGIMAGE});">
	<div class="overlay darkbgcolor" style="opacity:0.7;">
	</div>
</div>
<div class="col-md-6 darkbgcolor text-center" style="min-height:450px;padding-top:6%;">
	<div class="overlay accentbgcolor" style="opacity:0.9;">
	</div>
	<div class="thetext">
	    {SECTION_INTRO}
		<h2 class="title" style="line-height:1.8;"><b>{SECTION_TITLE}</b><br/>
		{SECTION_DESC}
	</div>
</div>
</section>
';
$JMELEMENTS_TEMPLATE['split']['item'] =  '';
$JMELEMENTS_TEMPLATE['split']['end'] =  '';





$JMELEMENTS_TEMPLATE['testimonials']['start'] =  '
<section class="page-wrapper">
<div class="row w960">
	<div class="personaltestimonials text-center">
 ';
$JMELEMENTS_TEMPLATE['testimonials']['item'] =  '
<div class="item">
	<h4>{ITEM_TITLE}</h4>
	<p class="lead">
		<i>{ITEM_DESC}.</i>
	</p>
</div>
 ';
$JMELEMENTS_TEMPLATE['testimonials']['end'] =  ' 
	</div>
</div>
</section>
<script>
$(document).ready(function() {
	$(".personaltestimonials").owlCarousel({
		navigation : true, // Show next and prev buttons
		slideSpeed : 400,
		pagination : false,
		autoHeight:true,
		autoPlay:true,
		addClassActive : true,
		navigationText: false,
		singleItem:true
		// "singleItem:true" is a shortcut for:
		// items : 1, 
		// itemsDesktop : false,
		// itemsDesktopSmall : false,
		// itemsTablet: false,
		// itemsMobile : false
	});
  });
  </script>
  ';
  
  

$JMELEMENTS_TEMPLATE['pricing']['start'] =  '
<section class="page-wrapper gray">
<div class="container">
	<h2 class="title">{SECTION_TITLE}</h2>
	<p class="tagline">{SECTION_SUBTITLE}</p>
<div class="row page-content">
 ';
$JMELEMENTS_TEMPLATE['pricing']['item'] =  '
<div class="wow-pricing-table {ITEM_COLUMNCLASS}">
			<div class="wow-pricing {ITEM_CLASS} wow-column-">
				<div class="wow-pricing-header">
					<h3 class="h5">{ITEM_TITLE}</h3>
					<div class="wow-pricing-cost">
						 {ITEM_PRICE} 
					</div>
					<div class="wow-pricing-per">
						  {ITEM_SUBTITLE}
					</div>
				</div>
				<div class="wow-pricing-content">
					{ITEM_DESC}
				</div>
				<div class="wow-pricing-button">
					<a href="{ITEM_URL}" class="wow-button buttonprice" target="_self" rel="nofollow"><span class="wow-button-inner">{ITEM_BUTTON}</span></a>
				</div>
			</div>
		</div>
 ';
$JMELEMENTS_TEMPLATE['pricing']['end'] =  ' 
		</div>
	</div>
</section>';

 