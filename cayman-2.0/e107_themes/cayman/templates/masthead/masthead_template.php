<?php
 
$MASTHEAD_TEMPLATE['parallaximage']['element'] = '
<!-- PARALLAX HEADER
================================================== -->
<section class="pagetitle parallax parallax-image" style="background-image:url({IMAGE_BG});">
<div class="wrapsection" style="background-image:url({PARENT_THEME_PATH}/assets/img/pattern.png);background-repeat:repeat;">
	<div class="overlay" style="background:#303543;opacity:0.4;">
	</div>
	<div class="container">
		<div class="parallax-content">
			<div class="block2 text-center max80" style="padding:0px;color:#fff;">
				
				<h1><span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s">
				<b>{---CAPTION---}</b> </h1>
				</span>
				<h2>
				<span class="text2 big wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
				{MASTHEAD_SUBHEADING}</span>
				 </h2>
				<a href="#start" aria-label="move-down" class="downarrowpoint wow zoomIn goscroll"><i class="fa fa-angle-double-down"></i></a>
			</div>
		</div>
	</div>
</div>
</section>
<!-- GALLERY
================================================== -->
<section id="start" class="page-wrapper bot0">
<h2 class="title">{MASTHEAD_SUBTTITLE}</h2>
<p class="tagline">{MASTHEAD_INTRO}</p>
</section> ';
 
 