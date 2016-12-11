@extends('app')

@section('meta')
  <title>{{env("WEB_NAME"). " - $college_name"}}</title>
  <meta property="og:title" content="{{"我的學院是 - $college_name | ".env("WEB_NAME")}}" />
  <meta property="og:description" content="{{str_replace("<br />","，",$college_intro)}}" />
  <meta property="og:image" content="{{url("images/fb-$college.jpg")}}" />
  <meta property="og:url" content="{{url("/$college")}}" />
@endsection

@section('content')
  @include('menu', [
    "list" => $departments
  ])
  <header class="{{$college}}">
    <div class="bg" style="background-image: url({{url("/images/".array_rand($departments).".jpg")}})"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="section-heading header-content">
            <div class="header-content-inner">
              <span class="{{$college}} icon"></span>
              <h1>{{$college_name}}</h1>
              <p class="text-muted">
                {!!$college_intro!!}
              </p>
              <hr>
              <a href="#intro" class="btn btn-outline btn-xl page-scroll">學院介紹</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="block">
    <div class="container">
      <div class="row" id="intro">
          <div class="col-lg-12 text-center">
              <div class="section-heading">
                  <h2>{{$college_name}}系所</h2>
                  <p class="text-muted">
                    {{$college_intro_2}}
                  </p>
                  <hr>
              </div>
          </div>
      </div>
      @foreach ($departments as $key => $department)
        <div class="row department" id="{{$key}}">
          <div class="col-sm-6 text-right">
            <div class="img" data-src="/images/{{$key}}.jpg"></div>
          </div>
          <div class="col-sm-6 text-left">
            <h2>{{$department['name']}}系</h2>
            <p class="text-muted">
              {{$department['intro']}}
            </p>
            <dl class="dl-horizontal">
              @foreach ($department['ability'] as $aname => $value)
                <dt>{{$aname}}</dt><dd class="lv{{strlen($value)/3}}">{{$value}}</dd>
              @endforeach
            </dl>
          </div>
        </div>
      @endforeach
    </div>
  </section>
@endsection

@section('js')
  <script type="text/javascript">
    $(document).ready(function() {
      $(window).on("resize", function(event) {
        const wR = 1 / 16 * 9;
        const hR = 1 / 9 * 16;
        var w = $(window).width();
        var h = $("header").height();
        if(w > 1150){
          h = w * wR;
        }else{
          w = h * hR;
        }
        $("header .bg").width(w);
        $("header .bg").height(h);
      });
      $(window).trigger('resize');
    });
  </script>
@endsection
