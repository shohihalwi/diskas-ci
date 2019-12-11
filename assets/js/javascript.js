$(document).ready(function (e) {
    // Material Select

    // $('.mdb-select').materialSelect({});

    // carousel owl

    $(".carousel").owlCarousel({
        loop: true,
        margin: 16,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });

    // scroll navbar
    var menu = $('.navbar-scrollable');
    var origOffsetY = menu.offset().top + 2;

    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            $('.navbar').addClass('fixed-top');
            $('.logo-default').show();
            $('.logo-light').hide();
        } else {
            $('.navbar').removeClass('fixed-top');
            $('.logo-default').hide();
            $('.logo-light').show();
        }
    }
    document.onscroll = scroll;

    $('.need-validate').submit(function () {
        // Get the Login Name value and trim it
        var name = $.trim($('.required-field').val());

        // Check if empty of not
        if (name  === '') {
            $('.required-field').addClass('border-danger');
            return false;
        }
    });


});

// Auth

function onSignIn(googleUser) {
    var id_token = googleUser.getAuthResponse().id_token;
    var profile = googleUser.getBasicProfile();
    var params = 'token='+id_token+'&name='+profile.getName()+'&avatar='+profile.getImageUrl()+'&email='+profile.getEmail();

    var xhr = new XMLHttpRequest();
    xhr.open('POST', base_url+'/authentication/google');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        console.log('Status: ' + xhr.responseText);
        console.log('then load id APP');
        $(".noLoggedSessions").hide();
        $(".loggedSessions").show();
        $(".loggedUserImage").attr("src", profile.getImageUrl());
        $(".loggedUserName").html(profile.getName());
    };
    xhr.send(params);
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });

    var xhr = new XMLHttpRequest();
    xhr.open('GET',base_url+'/authentication/signout' );
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        console.log('Status: ' + xhr.responseText);
        $(".loggedSessions").hide();
        $(".noLoggedSessions").show();
    };
    xhr.send();
}

$(".noLoggedSessions").show();


function copyLink() {
    var dummy = document.createElement('input'),
        text = window.location.href;

    document.body.appendChild(dummy);
    dummy.value = text;
    dummy.select();
    document.execCommand('copy');
    document.body.removeChild(dummy);

    var btn = document.getElementById("copylink");
    btn.innerHTML = "Copied";
}

