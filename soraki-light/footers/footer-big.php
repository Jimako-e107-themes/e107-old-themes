<?php 

$bgfooter = THEME_ABS.'assets/img/thumb.jpg'; 

$LAYOUT['_footer_'] = ' 
    <footer class="footer footer-big footer-transparent" style="background-image: url('.$bgfooter.');">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                   MENU=41
                   {SETSTYLE=footer}
                   {MENU=41}
                   {DEFAULT_MENUAREA=41}
                </div>
                <div class="col-md-3 col-md-offset-1">
                   MENU=42
                   {SETSTYLE=footer}
                   {MENU=42}
                   {DEFAULT_MENUAREA=42}
                </div>
                <div class="col-md-3">
                   MENU=43
                   {SETSTYLE=footer}
                   {MENU=43}
                   {DEFAULT_MENUAREA=43}
                </div>
                <div class="col-md-3">
                    MENU=44
                   {SETSTYLE=footer}
                   {MENU=44}
                   {DEFAULT_MENUAREA=44}
                </div>
            </div>
            <hr />
            <div class="copyright">
                {SITEDISCLAIMER}
            </div>
        </div>
    </footer>';