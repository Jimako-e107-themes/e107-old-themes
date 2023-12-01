$(document).ready(function() {
    var a = $("form ");
    a.find("div.checkbox").each(function() {
        $(this).removeClass("checkbox").addClass("oldcheckbox"), 
        $label = $(this).find("label").each(function() {
            $(this).removeClass("checkbox-inline").addClass("checkbox"), 
            $input = $(this).find("input"), $input.after('<span class="checkbox-material"><span class="check"></span></span>') 
        })
    }),   a.find("div.radio").each(function() {
            $label = $(this).find("label").each(function() {
            $(this).removeClass("radio-inline").addClass("radio"), $input = $(this).find("input"), $input.after('<span class="circle"></span><span class="check">')
        })
    })
});


 