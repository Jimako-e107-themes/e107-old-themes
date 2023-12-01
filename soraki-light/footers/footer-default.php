<?php 
//Note:  DEFAULT_MENUAREA shortcode is part of JM Theme plugin
$LAYOUT['_footer_'] = ' 
    <footer class="footer footer-big footer-black">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                   {NAVIGATION: type=footer&layout=footer} 
                   {SETSTYLE=footer}
                   {MENU=41} 
                </div>
                <div class="col-md-3 col-md-offset-1">
                   {SETSTYLE=footer}
                   {MENU=42}
                    
                </div>
                <div class="col-md-3">
                   {SETSTYLE=footer}
                   {MENU=43}
                    
                </div>
                 <div class="col-md-3">
                   {SETSTYLE=footer}
                   {MENU=44}
                    
                </div>
            </div>
            <hr />
            <div class="copyright">
                {SITEDISCLAIMER}
            </div>
        </div>
    </footer>  
    </div> <!-- wrapper --> 
';