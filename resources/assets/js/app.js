(function($) {

  let foods = [
    {name: "飯學院", code: "rice"},
    {name: "豆腐學院", code: "tofu"},
    {name: "鹹酥雞學院", code: "chicken"},
    {name: "麵線學院", code: "vermicelli"},
    {name: "蚵仔學院", code: "oysters"},
    {name: "牛肉學院", code: "beef-noodles"},
    {name: "羹學院", code: "thick-soup"},
    {name: "名產學院", code: "staple"},
    {name: "珍珠學院", code: "pearl"},
  ];

    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 100
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 50
        }
    })

    /**
     * facebook app
     */
     // This is called with the results from from FB.getLoginStatus().
     function statusChangeCallback(response) {
       // The response object is returned with a status field that lets the
       // app know the current login status of the person.
       // Full docs on the response object can be found in the documentation
       // for FB.getLoginStatus().
       if (response.status === 'connected') {
         // Logged into your app and Facebook.
        //  testAPI();
        let collage = foods[+response.authResponse.userID%9];

        FB.ui({
  			  method: 'share',
          mobile_iframe: true,
  				hashtag: '#我是食尚大學' + collage.name,
  			  href: location.origin + "/" + collage.code + "?from=fb",
  			}, function(response){
  				console.warn(response);
  			});


       } else if (response.status === 'not_authorized') {
         // The person is logged into Facebook, but not your app.
         document.getElementById('status').innerHTML = 'Please log ' +
           'into this app.';
       } else {
         // The person is not logged into Facebook, so we're not sure if
         // they are logged into this app or not.
         document.getElementById('status').innerHTML = 'Please log ' +
           'into Facebook.';
       }
     }

     // This function is called when someone finishes with the Login
     // Button.  See the onlogin handler attached to it in the sample
     // code below.
     function checkLoginState() {
       console.warn("這邊這海?");
       FB.getLoginStatus(function(response) {
         statusChangeCallback(response);
       });
     }

     window.fbAsyncInit = function() {
       FB.init({
         appId      : $("meta[property='fb:app_id']").attr("content"),
         cookie     : true,  // enable cookies to allow the server to access
                             // the session
         xfbml      : true,  // parse social plugins on this page
         version    : 'v2.7' // use graph api version 2.5
       });

       // Now that we've initialized the JavaScript SDK, we call
       // FB.getLoginStatus().  This function gets the state of the
       // person visiting this page and can return one of three states to
       // the callback you provide.  They can be:
       //
       // 1. Logged into your app ('connected')
       // 2. Logged into Facebook, but not your app ('not_authorized')
       // 3. Not logged into Facebook and can't tell if they are logged into
       //    your app or not.
       //
       // These three cases are handled in the callback function.

     };

     // Load the SDK asynchronously
     (function(d, s, id) {
       var js, fjs = d.getElementsByTagName(s)[0];
       if (d.getElementById(id)) return;
       js = d.createElement(s); js.id = id;
       js.src = "https://connect.facebook.net/zh_TW/sdk.js";
       fjs.parentNode.insertBefore(js, fjs);
     }(document, 'script', 'facebook-jssdk'));

     // Here we run a very simple test of the Graph API after login is
     // successful.  See statusChangeCallback() for when this call is made.
     function testAPI() {
       console.log('Welcome!  Fetching your information.... ');
       FB.api('/me', function(response) {
         console.log('Successful login for: ' + response.name);
         document.getElementById('status').innerHTML =
           'Thanks for logging in, ' + response.name + '!';
       });
     }

     function fb_login(){
         FB.login(statusChangeCallback, {
             scope: 'email'
         });
     }

     $(".btn-fb").on('click', fb_login);

     $(".block .img").css("background-image", function(i, style){
       return "url(" + $(this).data("src") + ")";
     });

})(jQuery); // End of use strict
