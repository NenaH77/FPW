/**
 * Created by NenaH77 on 2/6/15.
 */
$(function() {
    //make menus drop automatically
    $('ul.nav li.dropdown').hover(function() {
        $('.dropdown-menu', this).fadeIn();
    }, function(){
        $('.dropdown-menu', this).fadeOut('fast');
    });

}); //jQuery is loaded