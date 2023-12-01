<?php

$MENU_TEMPLATE['boot-navigation']['start'] 			= ' ';
$MENU_TEMPLATE['boot-navigation']['end'] 			= ' ';
$MENU_TEMPLATE['boot-navigation']['body'] 			= ' 
<div class="col-6 col-sm-3 minh-25vh h-lg-50vh sidebar-item-wrapper py-5" data-content="{CMENUNAME}">
<div class="bg-holder" style="background-image:url({THEME}/assets/img/navigation/{CMENUNAME}.jpg);">
</div>
<!--/.bg-holder-->

<div class="sidebar-item">
  <img class="mb-2 mb-md-3 nav-icon" src="{CMENUIMAGE=url}" alt="">
  <h2 class="font-weight-light text-white fs-1 fs-xl-2 fs-xxl-3">{CMENUTITLE}</h2>
</div>  
</div>
';
 
	$MENU_TEMPLATE['home-services']['start'] 			= ' ';
	$MENU_TEMPLATE['home-services']['body'] 	     	= '      <div class="page position-absolute t-0 w-100" id="{CMENUNAME}">
        <div class="row no-gutters minh-100vh">
          <div class="col-lg-9 order-1 order-lg-0 page-content pt-6 pt-lg-0">


            <!-- ============================================-->
            <!-- <section> begin ============================-->
            <section class="pt-5 pt-xl-7 pt-xxl-8">

              <div class="container-fluid">
                <div class="row justify-content-center pb-5" id="boots4-story">
                  <div class="col-lg-10">
                    <div class="text-center mb-5 mb-lg-6">
                      <h2 class="fs-2 fs-sm-3"> <span class="font-weight-medium">{CPAGETITLE}</h2>
                      <hr class="hr-ornate" />
                    </div>
                    <div class="row">
                       {CPAGEBODY}
                    </div>
                  </div>
                </div>
                 
              </div>
              <!-- end of .container-->

            </section>
            <!-- <section> close ============================-->
 
    		<footer class="page-footer">
    		<div class="bg-holder" style="background-image:url({THEME}assets/img/sidebars/{CMENUNAME}.jpg);background-position: 0 27%; transform: scale(1.1);">
    		</div>
    		<!--/.bg-holder-->
    
    		<div class="row justify-content-center">
    		  <div class="col-lg-10">
    			<div class="row align-items-center">
				{SITEDISCLAIMER}
    			</div>
    		  </div>
    		</div>
    	  </footer>
          </div>
          <div class="col-lg-3 col-12 t-0 order-0 order-lg-1 position-absolute position-lg-relative">
            <div class="h-lg-100vh sticky-top py-4 sticky-area"><span class="btn-close"><img class="d-none d-lg-block times" src="{THEME}assets/img/times.svg" width="25" alt=""/><img class="d-lg-none" src="{THEME}assets/img/times-black.svg" width="18" alt=""/></span>
              <div class="bg-holder" style="background-image:url({THEME}assets/img/sidebars/{CMENUNAME}.jpg);">
              </div>
              <!--/.bg-holder-->

              <h1 class="page-title">{CMENUTITLE}</h1>
            </div>
          </div>
        </div>
      </div>';
	$MENU_TEMPLATE['home-services']['end'] 				= ' ';
 

    $MENU_TEMPLATE['timeline']['start'] 			= '<div class="row"><div class="col-lg-12 text-center">
										                    <h2 class="section-heading">{CHAPTER_NAME}</h2>
										                    <h3 class="section-subheading text-muted">{CHAPTER_DESCRIPTION}</h3>
										                </div></div><div class="row"><ul class="timeline">{SETIMAGE: w=200&h=200&crop=1}' ;
	$MENU_TEMPLATE['timeline']['body'] 				= '<li {TIMELINE_INVERTED}>
														    <div class="timeline-image">
														        <img class="rounded-circle img-fluid" src="{CMENUIMAGE=url}" alt="">
														    </div>
														    <div class="timeline-panel">
														        <div class="timeline-heading">
														            <h4>{CHAPTER_NAME}</h4>
														            <h4 class="subheading">{CPAGETITLE}</h4>
														        </div>
														        <div class="timeline-body">
														            <p class="text-muted">{CPAGEBODY}</p>
														        </div>
														    </div>
														</li>';
	$MENU_TEMPLATE['timeline']['end'] 				= '
													    <li>
													        <div class="timeline-image">
													            <h4>{TIMELINE_FOOTER}</h4>
													        </div>
													    </li>
													</ul>
													</div>
													';




	$MENU_TEMPLATE['teammember']['start'] 				= '{SETIMAGE: w=225&h=225&crop=1}<div class="row"><div class="col-lg-12 text-center">
										                    <h2 class="section-heading">{CHAPTER_NAME}</h2>
										                    <h3 class="section-subheading text-muted">{CHAPTER_DESCRIPTION}</h3>
										                </div></div><div class="row">' ;
	$MENU_TEMPLATE['teammember']['body'] 				= '<div class="col-sm-4">
										                    <div class="team-member">
										                        <img src="{CMENUIMAGE=url}" class="img-responsive img-circle" alt="">
										                        <h4>{CPAGETITLE}</h4>
										                        <p class="text-muted">{CMENUTITLE}</p>
										                        <ul class="list-inline social-buttons">
										                            <li  class="list-inline-item"><a href="{CPAGEFIELD: name=twitter&mode=raw}"><i class="fa fa-twitter"></i></a>
										                            </li>
										                            <li  class="list-inline-item"><a href="{CPAGEFIELD: name=facebook&mode=raw}"><i class="fa fa-facebook"></i></a>
										                            </li>
										                            <li  class="list-inline-item"><a href="{CPAGEFIELD: name=linkedin&mode=raw}"><i class="fa fa-linkedin"></i></a>
										                            </li>
										                        </ul>
										                    </div>
										                </div>';
	$MENU_TEMPLATE['teammember']['end'] 					= '</div>';



	
?>