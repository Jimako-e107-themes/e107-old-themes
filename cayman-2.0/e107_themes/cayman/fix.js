$('.dropdown-pm').find('ul.dropdown-menu').each(function() {
	$(this).removeClass('dropdown-menu dropdown-menu-end').addClass('sub-menu');
});

$('.dropdown-pm').find('a.dropdown-item').each(function() {
	$(this).removeClass('dropdown-item');
});