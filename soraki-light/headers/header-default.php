<?php

 $LAYOUT['_header_'] = '
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button id="menu-toggle" type="button" class="navbar-toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar bar1"></span>
        <span class="icon-bar bar2"></span>
        <span class="icon-bar bar3"></span>
      </button>
      <a class="navbar-brand" href="{SITEURL}">{BOOTSTRAP_BRANDING}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      {NAVIGATION: type=main&layout=main}
    </div><!-- /.navbar-collapse -->
  </div>
</nav>
<div class="wrapper">
      
';

?>