
$ = jQuery.noConflict();

$(document).ready(function(){

// Blog page - Filter first item auto click on load and add class active
    $(".filter-section ul li:eq(6)").addClass("active");
jQuery(function(){
    $(".filter-section ul li:eq(6)").click();
});
})