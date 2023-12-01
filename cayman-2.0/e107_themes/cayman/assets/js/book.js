/* activate scrollspy menu */
var $body   = $(document.body);
var navHeight = $('.navbar').outerHeight(true) + 20;
$body.scrollspy({
	target: '#leftCol',
	offset: navHeight
});


$('#sidebar').affix({
	offset: {
	  top: 540
	}
  });

  
/* smooth scrolling sections */
/* change 100 if it stops too height */
$('a[href*=\\#]:not([href=\\#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 100
        }, 1000);
        return false;
      }
    }
});