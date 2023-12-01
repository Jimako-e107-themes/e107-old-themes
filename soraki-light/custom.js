$(document).ready(function() {
    var a = $("form ");
    a.find("div.checkbox").each(function() {
        $(this).removeClass("checkbox").addClass("oldcheckbox"), $label = $(this).find("label").each(function() {
            $(this).removeClass("checkbox-inline").addClass("checkbox"), $input = $(this).find("input"), 
            $input.before('<span class="icons"><span class="first-icon fa fa-square-o"></span><span class="second-icon fa fa-check-square-o"></span></span>'), "checked" == $input.attr("checked") && $(this).addClass("checkbox checked")
        })
    }), a.find("div.checkboxes").each(function() {
        $(this).removeClass("checkboxes").addClass("oldcheckbox"), 
        $label = $(this).find("label").each(function() {
            $(this).removeClass("checkbox-inline").addClass("checkbox"), $input = $(this).find("input"), $input.before('<span class="icons"><span class="first-icon fa fa-square  fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span>'), "checked" == $input.attr("checked") && $(this).addClass("checkbox checked")
        })
    }), a.find("div.radio").each(function() {
        $(this).removeClass("radio").addClass("oldradio"), $label = $(this).find("label").each(function() {
            $(this).removeClass("radio-inline").addClass("radio"), $input = $(this).find("input"), $input.before('<span class="icons"><span class="first-icon fa fa-circle-o fa-base"></span><span class="second-icon fa fa-dot-circle-o fa-base"></span></span>'), "checked" == $input.attr("checked") && $(this).addClass("radio checked")
        })
    })
    var element = $('.icon.secure-image');
    element.removeClass("icon"); 
});
 
 	$('.carousel').carousel({
      interval: 4000
    });
 