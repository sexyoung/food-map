<!doctype html>
<html class="no-js" lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="fb:app_id" content="{{env('FACEBOOK_APP_ID')}}" />
      	<meta property="og:type" content="website" />
      	<meta property="og:url" content="{!!request()->fullUrl()!!}" />
        @yield('meta')

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">

        <!-- Custom Fonts -->
        <link href="http://fonts.googleapis.com/earlyaccess/notosanstc.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <link rel="stylesheet" href="http://simplelineicons.com/css/simple-line-icons.css" />

        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body id="page-top">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        @yield('content')

        <section id="which-college" class="which-college bg-primary">
            <div class="container">
                <h2>我是哪個學院?</h2>
                <ul class="list-inline list-social">
                    <li class="rice" data-text="飯學院"> <a href="{{url("rice")}}"></a> </li>
                    <li class="tofu" data-text="豆腐學院"> <a href="{{url("tofu")}}"></a> </li>
                    <li class="chicken" data-text="鹹酥雞學院"> <a href="{{url("chicken")}}"></a> </li>
                    <li class="vermicelli" data-text="麵線學院"> <a href="{{url("vermicelli")}}"></a> </li>
                    <li class="oysters" data-text="蚵仔學院"> <a href="{{url("oysters")}}"></a> </li>
                    <li class="beef-noodles" data-text="牛肉麵學院"> <a href="{{url("beef-noodles")}}"></a> </li>
                    <li class="thick-soup" data-text="羹學院"> <a href="{{url("thick-soup")}}"></a> </li>
                    <li class="staple" data-text="名產學院"> <a href="{{url("staple")}}"></a> </li>
                    <li class="pearl" data-text="珍珠學院"> <a href="{{url("pearl")}}"></a> </li>
                </ul>
                <button class="btn btn-primary btn-lg btn-fb">登入Facebook算出結果</button>
            </div>
        </section>

        <footer>
            <div class="container">
                <p>&copy; 2016 食尚大學 版權聲明，禁止未經授權轉貼節錄.</p>
                <ul class="list-inline">
                    <li>
                        <a href="#">Privacy</a>
                    </li>
                    <li>
                        <a href="#">Terms</a>
                    </li>
                    <li>
                        <a href="#">FAQ</a>
                    </li>
                </ul>
            </div>
        </footer>

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','{{env("GA")}}','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="/js/vendor.js" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vide/0.5.0/jquery.vide.min.js"></script>

        @yield('js')
    </body>
</html>
