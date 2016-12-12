<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> 導覽選單 <i class="fa fa-bars"></i>
            </button>
            @if (request()->is('/'))
              <a class="navbar-brand page-scroll" href="#page-top">{{env("WEB_NAME")}}</a>
            @else
              <a class="navbar-brand page-scroll" href="/">回首頁</a>
            @endif
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              @foreach ($list as $key => $section)
                <li> <a class="page-scroll" href="#{{$key}}">{{$section['name']}}</a> </li>
              @endforeach
              <li> <a class="page-scroll" href="#which-college">我是哪個學院?</a> </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
