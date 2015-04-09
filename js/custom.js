/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var recaptchaResponse=null;
var verifyCallback = function(response) {
    recaptchaResponse=response;
};

var onloadCallbackCaptcha = function() {
    grecaptcha.render('recaptcha', {
        'sitekey': '6Lfi-gQTAAAAADjTnx_QEHgbw8Uqm8Jwg90pKosB',
        'callback': verifyCallback
    });
};

$(window).load(function() {
    $('.loader').fadeOut();
    $('.page-loader').delay(350).fadeOut('slow');
    onloadCallbackCaptcha();
});

$(document).ready(function() {

    var homeSection = $('.home-section');
    var navbar = $('.navbar-custom');
    var navHeight = navbar.height();


    $(window).scroll(function() {

        navbarAnimation(navbar, homeSection, navHeight);
    });


    $('#singleselect').prop('checked', true);
    $('#double-section').hide();
    $('#doubleselect').click(function() {
        if ($('#doubleselect').prop('checked')) {
            $('#double-section').slideToggle('slow', function() {
                $('#double-section').show();
            });
        }
        else {
            $('#double-section').slideToggle('slow', function() {
                $('#double-section').hide();
            });
        }
    });
});


function navbarAnimation(navbar, homeSection, navHeight) {
    var topScroll = $(window).scrollTop();
    if (navbar.length > 0 && homeSection.length > 0) {
        if (topScroll >= (navHeight + homeSection.height() - 120)) {

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

function validateRegisterForm() {

    var email = document.forms["registerForm"]["email"].value;
    var name = document.forms["registerForm"]["name"].value;
    var teamName = document.forms["registerForm"]["teamName"].value;
    var gender = document.forms["registerForm"]["gender"].value;
    var chkSingle = document.forms["registerForm"]["single"].checked;
    var chkDouble = document.forms["registerForm"]["double"].checked;
    var email2 = document.forms["registerForm"]["email2"].value;
    var name2 = document.forms["registerForm"]["name2"].value;
    var gender2 = document.forms["registerForm"]["gender2"].value;
    var chkSingle2 = document.forms["registerForm"]["single2"].checked;

    var error = 0;

    if(recaptchaResponse === null || recaptchaResponse === "")
    {
        showValidateError('Please validate the captcha.');
        error = 1;
    }

    if (chkDouble && (name2 === null || name2 === "")) {
        var fgNamePartner = document.getElementById("fgNamePartner");
        fgNamePartner.className += " has-error";
        showValidateError('Please enter your partner\'s full name.');
        error = 1;
    }
    if (chkDouble && (email2 === null || email2 === "")) {
        var fgEmailPartner = document.getElementById("fgEmailPartner");
        fgEmailPartner.className += " has-error";
        showValidateError('Please enter your partner\'s email address.');
        error = 1;
    }



    if (chkDouble && (teamName === null || teamName === "")) {
        var fgTeamName = document.getElementById("fgTeamName");
        fgTeamName.className += " has-error";
        showValidateError('Double category must have a team name');
        error = 1;
    }

    if (gender === null || gender === "") {
        showValidateError('Please select your gender.');
        error = 1;
    }

    if (name === null || name === "") {
        var fgName = document.getElementById("fgName");
        fgName.className += " has-error";
        showValidateError('Please enter your full name.');
        error = 1;
    }

    if (email === null || email === "") {
        var fgEmail = document.getElementById("fgEmail");
        fgEmail.className += " has-error";
        showValidateError('Please enter your email address.');
        error = 1;
    }



    if (!chkSingle && !chkDouble) {
        var fgCategory = document.getElementById("fgCategory");
        fgCategory.className += " has-error";
        showValidateError('Please select at least one category.');
        error = 1;
    }







    if (chkDouble && (gender2 === null || gender2 === "")) {
        showValidateError('Please select your partner\'s gender.');
        error = 1;
    }



    if (error === 1)
    {
        return false;
    }
    return true;
}

function showValidateError(message) {

    var errorBox = document.getElementById("validateError");
    var messegeHTML = '<span class="label label-danger">' + message + '</span>';
    errorBox.innerHTML = messegeHTML;

}

function hideValidateError(message) {

    var errorBox = document.getElementById("validateError");
    var messegeHTML = '';
    errorBox.innerHTML = messegeHTML;

}