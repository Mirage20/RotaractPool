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

 function validateUpdateForm() {
        var teamName = document.forms["updateForm"]["teamName"].value;
        var gender = document.forms["updateForm"]["gender"].value;
        var chkSingle = document.forms["updateForm"]["single"].checked;
        var chkDouble = document.forms["updateForm"]["double"].checked;
        
 
        var error=0;
        
        if (chkDouble && (teamName === null || teamName === "")) {                    
            var fgTeamName = document.getElementById("fgTeamName");             
            fgTeamName.className += " has-error";
            showValidateError('Double category must have a team name');
            error=1;
        }
        
        if (!chkSingle && !chkDouble) {                    
            var fgCategory = document.getElementById("fgCategory");       
            fgCategory.className += " has-error";
            showValidateError('Please select at least one category.');
            error=1;
        }
        
        if (gender === null || gender === "") {                               
            showValidateError('Please select your gender.');
            error=1;
        }
        
        
                
        if(error ===1)
        {
            return false;
        }
        
    }

    function showValidateError(message) {

        var errorBox = document.getElementById("validateError");
        var messegeHTML ='<span class="label label-danger">'+message+'</span>';
        errorBox.innerHTML=messegeHTML;

    }
    
    function hideValidateError(message) {

        var errorBox = document.getElementById("validateError");
        var messegeHTML ='';
        errorBox.innerHTML=messegeHTML;

    }