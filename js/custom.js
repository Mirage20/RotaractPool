/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(window).load(function() {
    $('.loader').fadeOut();
    $('.page-loader').delay(350).fadeOut('slow');
});

$(document).ready(function() {

    var homeSection = $('.home-section');
    var navbar = $('.navbar-custom');
    var navHeight = navbar.height();


    $(window).scroll(function() {

        navbarAnimation(navbar, homeSection, navHeight);
    });
});


function navbarAnimation(navbar, homeSection, navHeight) {
    var topScroll = $(window).scrollTop();
    if (navbar.length > 0 && homeSection.length > 0) {
        if (topScroll >= (navHeight+homeSection.height()-120)) {
           
            navbar.removeClass('navbar-transparent');
        } else {
            navbar.addClass('navbar-transparent');
        }
    }
}
;

$('a.section-scroll').click(function() {
    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1500);
    return false;
});