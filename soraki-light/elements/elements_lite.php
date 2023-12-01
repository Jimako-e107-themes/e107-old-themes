<?php
$elements_lite = array();


$bgimage1 = THEME_ABS.'assets/img/cover_4.jpg';  
$bgimage2 = THEME_ABS.'assets/img/cover_4_blur.jpg';  
$elements_lite['header_01'] =
'<div class="blurred-container">
      <div class="motto">
          <div>e107</div>
          <div class="border no-right-border">SO</div>
          <div class="border no-right-border">RA</div><div class="border">KI</div>
          <div>Theme</div>
      </div>
      <div class="img-src" style="background-image: url('.$bgimage1.')"></div>
      <div class="img-src blur" style="background-image: url('.$bgimage2.');  "  ></div>
  </div>';
    
$elements_lite['imageparallax'] =
'  <div class="parallax filter-black">
        <div class="parallax-image">
            <img src="'.THEME_ABS.'assets/img/examples/about_5.jpg" alt="..." />
        </div>
        <div class="small-info">
            <h1>e107 Soraki theme </h1>
            <h3>Inspired by Creative Tim\'s HTML Template.</h3>
        </div>
    </div>';
 
$elements_lite['imageparallax2'] =
'  <div class="parallax filter-black">
        <div class="parallax-image">
            <img src="'.THEME_ABS.'assets/img/examples/blog_page8.jpg" alt="..." />
        </div>
        <div class="small-info">
            <h1>Creative Blog</h1>
            <h3>Find only the best stories from our famous writers.</h3>
        </div>
    </div>';
 
  
$elements_lite['testimonials'] = '<div class="section section-testimonials">
<div class="container">
    <h2 class="section-title">What people think...</h2>
     <div id="testimonials-carousel" class="carousel slide" data-ride="carousel">
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <div class="row">
                    <div class="col-md-6">
                         <div class="card card-plain">
                            <div class="content">
                                <a target="_blank" href="http://www.creative-tim.com/product/get-shit-done-pro">
                                    <h4 class="title">I\'ve bought it, and I have to say that it\'s simply awesome. Creative Tim creates awesome looking templates! :)</h4>
                                </a>
                                 <div class="footer">
                                    <div class="author">
                                        <a class="card-link" href="#">
                                           <img src="'.THEME_ABS.'assets/img/default-avatar.png" alt="..." class="avatar">
                                           <span> Radu Tintescu </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                     <div class="col-md-6">
                         <div class="card card-plain">
                            <div class="content">
                                    <h4 class="title">If you like elegant web design, really check out this
                                        <a target="_blank" href="http://gsdk.creative-tim.com/">link</a>.
                                        It has just about everything you might need and looks great.
                                    </h4>

                                 <div class="footer">
                                    <div class="author">
                                        <a class="card-link" target="_blank" href="https://twitter.com/tudorvintilescu">
                                           <img src="'.THEME_ABS.'assets/img/default-avatar.png" alt="..." class="avatar">
                                           <span> Alex Paduraru </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                </div> <!-- end row -->
            </div>
            <div class="item">
              <div class="row">
                  <div class="col-md-6">
                        <div class="card card-plain">
                            <div class="content">
                                <a target="_blank" href="">
                                    <h4 class="title">Loved the reusable elements in the \'Get Shit Done Kit\'? The PRO version will blow your mind. </h4>
                                </a>
                                 <div class="footer">
                                    <div class="author">
                                        <a class="card-link" target="_blank" href="http://www.awwwards.com/">
                                           <img src="'.THEME_ABS.'assets/img/default-avatar.png" alt="..." class="avatar">
                                           <span> Conacel Elena </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>
                     <div class="col-md-6">
                         <div class="card card-plain">
                            <div class="content">
                                <a target="_blank" href="http://www.creative-tim.com/product/get-shit-done-pro">
                                    <h4 class="title">I\'ve bought it, and I have to say that it\'s simply awesome. Creative Tim creates awesome looking templates! :)</h4>
                                </a>
                                 <div class="footer">
                                    <div class="author">
                                        <a class="card-link" target="_blank" href="#">
                                           <img src="'.THEME_ABS.'assets/img/default-avatar.png" alt="..." class="avatar">
                                           <span> Jay Z </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end card -->
                     </div>

              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#testimonials-carousel" data-slide="prev">
            <span class="fa fa-angle-left"></span>
          </a>
          <a class="right carousel-control" href="#testimonials-carousel" data-slide="next">
            <span class="fa fa-angle-right"></span>
          </a>
    </div>
</div>
</div>';


$elements_lite['pricing_plans'] = 
'<div class="section section-gray">
<div class="container">
    <div class="big-info">
        <h3 class="text-center">Free trial. Cancel when you want. <br>
            <small>All plans include a 14-day free trial</small>
        </h3>
    </div>
    <div class="row">
         <div class="col-md-4">
        <div class="card card-price">
            <div class="content">
                <h6 class="category">Basic</h6>
                <h1 class="price">
                    <small>&euro;</small>29
                </h1>
                <ul class="list-unstyled list-lines">
                    <li>
                        <i class="fa fa-comments"></i> <b>10,000</b> Messages
                    </li>
                    <li>
                        <i class="fa fa-magic"></i> <b>500+</b> Elements
                    </li>
                    <li>
                        <i class="fa fa-male"></i> <b>250</b> Users
                    </li>
                    <li>
                        <i class="fa fa-level-up"></i> <b>Free</b> Updates
                    </li>
                </ul>
            </div>
            <div class="footer">
               <button type="button" class="btn btn-info btn-round btn-block">Buy now!</button>
            </div>
        </div> <!-- end card -->
    </div>
    <div class="col-md-4">
        <div class="card card-price card-price-best-deal">
            <div class="content">
                <h6 class="category">Premium</h6>
                <h1 class="price">
                    <small>&euro;</small>69
                </h1>
                <ul class="list-unstyled list-lines">
                    <li>
                        <i class="fa fa-comments"></i> <b>Unlimited</b> Messages
                    </li>
                    <li>
                        <i class="fa fa-magic"></i> <b>Unlimited</b> Elements
                    </li>
                    <li>
                        <i class="fa fa-male"></i> <b>Unlimited</b> Users
                    </li>
                    <li>
                        <i class="fa fa-dollar"></i> <b>Best Price</b> Deal
                    </li>
                    <li>
                        <i class="fa fa-level-up"></i> <b>Free</b> Updates
                    </li>
                     <li>
                        <i class="fa fa-phone"></i> <b>Premium</b> Support
                    </li>
                </ul>
            </div>
            <div class="footer">
               <button type="button" class="btn btn-info btn-round btn-fill btn-block">Buy now!</button>
            </div>
        </div> <!-- end card -->
    </div>
    <div class="col-md-4">
        <div class="card card-price">
            <div class="content">
                <h6 class="category">Standard</h6>
                <h1 class="price">
                    <small>&euro;</small>49
                </h1>
                 <ul class="list-unstyled list-lines">
                    <li>
                        <i class="fa fa-comments"></i> <b>5,000</b> Messages
                    </li>
                    <li>
                        <i class="fa fa-magic"></i> <b>700+</b> Elements
                    </li>
                    <li>
                        <i class="fa fa-male"></i> <b>200</b> Users
                    </li>
                    <li>
                        <i class="fa fa-level-up"></i> <b>Free</b> Updates
                    </li>
                </ul>
            </div>
            <div class="footer">
               <button type="button" class="btn btn-info btn-round btn-block">Buy now!</button>
            </div>
        </div> <!-- end card -->
    </div>
</div> <!-- end row -->
</div>
</div>';


$elements_lite['features1'] = '
<div class="section section-features-1">
<div class="container">
    <h2 class="section-title">Features <small>(example 1)</small></h2>
    <div class="row">
        <div class="col-md-4">
            <div class="info">
                 <div class="icon">
                     <i class="pe-7s-clock"></i>
                 </div>
                 <div class="description">
                     <h5> Save Time </h5>
                     <p class="text-muted">Spend your time generating new ideas. You don\' have to think of implementing anymore.</p>
                 </div>
             </div>
          </div>
           <div class="col-md-4">
            <div class="info">
                 <div class="icon">
                     <i class="pe-7s-scissors"></i>
                 </div>
                 <div class="description">
                     <h5> Fast Prototyping </h5>
                     <p class="text-muted">Create hundreds of items combinations within seconds and present them to your client.</p>
                 </div>
             </div>
          </div>
          <div class="col-md-4">
            <div class="info">
                 <div class="icon">
                     <i class="pe-7s-science"></i>
                 </div>
                 <div class="description">
                     <h5> Unleash Creativity </h5>
                     <p class="text-muted">The large amount of components with the color variations will make you create an amazing web design.</p>
                 </div>
             </div>
          </div>
    </div>
</div>
</div><!-- section -->';

$elements_lite['features2'] = '
<div class="section section-features-2">
           <div class="container">
               <h2 class="section-title">Features <small>(example 2)</small></h2>
               <div class="row">
                   <div class="col-md-4">
                       <div class="info">
                            <div class="icon icon-azure">
                                <i class="pe-7s-clock"></i>
                            </div>
                            <div class="description">
                                <h5> Save Time </h5>
                                <p class="text-muted">Spend your time generating new ideas. You don\'t have to think of implementing anymore.</p>
                            </div>
                        </div>
                     </div>
                      <div class="col-md-4">
                       <div class="info">
                            <div class="icon icon-orange">
                                <i class="pe-7s-scissors"></i>
                            </div>
                            <div class="description">
                                <h5> Fast Prototyping </h5>
                                <p class="text-muted">Create hundreds of items combinations within seconds and present them to your client.</p>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4">
                       <div class="info">
                            <div class="icon icon-purple">
                                <i class="pe-7s-science"></i>
                            </div>
                            <div class="description">
                                <h5> Unleash Creativity </h5>
                                <p class="text-muted">The large amount of components with the color variations will make you create an amazing web design.</p>
                            </div>
                        </div>
                     </div>
               </div>
           </div>
    </div><!-- section -->';


    $elements_lite['description'] = '
    <div class="section section-description">
           <div class="container">
               <h2 class="section-title">Description</h2>

               <div class="row">
                    <div class="col-md-6">
                       <h5>Easy to integrate</h5>
                       <p>
                           Creative Tim stands for everything a designer looks in his work: clean, functions interfaces for great products. The number of friends with similar attitude can only increase over time, since the vision for a better web is a wish of many designers. </p>
                        </p>Be sure to enroll and browse around for anything that may bring extra value to your project and ask Tim wherever you see something missing. </p>

                   </div>
                   <div class="col-md-6">
                        <div id="description-carousel" class="carousel fade" data-ride="carousel">
                              <!-- Wrapper for slides -->
                              <div class="carousel-inner">
                                <div class="item active">
                                  <img class="img-responsive" src="'.THEME_ABS.'assets/img/examples/home_3.png" alt="..." />
                                </div>
                                <div class="item">
                                  <img class="img-responsive" src="'.THEME_ABS.'assets/img/examples/home_2.png" alt="..." />
                                </div>
                                <div class="item">
                                  <img class="img-responsive" src="'.THEME_ABS.'assets/img/examples/home_1.png" alt="..." />
                                </div>
                              </div>

                              <ol class="carousel-indicators">
                                <li data-target="#description-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#description-carousel" data-slide-to="1"></li>
                                <li data-target="#description-carousel" data-slide-to="2"></li>
                              </ol>
                        </div>
                   </div>
                </div>

                <div class="space-50"></div>
                <hr>
                <div class="space-50"></div>

                <div class="row">
                   <div class="col-md-6">
                      <div class="img-container">
                          <img class="img-responsive" src="'.THEME_ABS.'/assets/img/examples/home_4.png" alt="..." />
                      </div>
                   </div>
                   <div class="col-md-6">
                       <h5>Fast Development</h5>
                       <p>
                           Creative Tim stands for everything a designer looks in his work: clean, functions interfaces for great products. The number of friends with similar attitude can only increase over time, since the vision for a better web is a wish of many designers. </p>
                        </p>Be sure to enroll and browse around for anything that may bring extra value to your project and ask Tim wherever you see something missing. </p>

                   </div>
               </div>
           </div>

    <div class="space-50"></div>
  </div><!-- section -->';
?>