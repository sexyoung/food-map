<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>

        <button id="shareBtn">abc</button>

        <script>
          document.getElementById('shareBtn').onclick = function(){
            FB.ui({
              method: 'share',
              display: 'popup',
              href: 'https://developers.facebook.com/docs/',
            }, function(response){
              console.warn(response);
            });
          }
        </script>

        <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '1250804464961693',
              xfbml      : true,
              version    : 'v2.7'
            });
          };

          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "http://connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>
