@extends('app')

@section('meta')
  <title>{{env("WEB_NAME"). " - $college_name"}}</title>
  <meta property="og:title" content="{{"我的學院是 - $college_name | ".env("WEB_NAME")}}" />
  <meta property="og:description" content="{{str_replace("<br />","，",$college_intro)}}" />
  <meta property="og:image" content="{{url("images/fb-$college.jpg")}}" />
  <meta property="og:url" content="{{url("/$college")}}" />
@endsection

@section('content')
  @include('partials.menu', [
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
            <div class="carousel">

              <div class="img active" data-src="/images/{{$key}}.jpg">
                <div class="apply-hint">
                  想刊登照片? 請按
                  <a href="#" class="apply">申請入學</a>
                </div>
              </div>

            </div>
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
      @foreach ($departments as $key => $department)
        $.get('get-photos/{{$key}}')
         .done(function(pages){
           $(".modal-body .alert").addClass("hide");
           $("#{{$key}} .carousel").append(pages.map(function(page) {
             return $("<div>", {
               class: "img",
               html: $("<div>", {
                 class: "apply-hint",
                 html: page.page_name +
                     "︱<a target='_blank' class='fb' href='https://facebook.com/"+page.page_id+"'>粉絲頁</a>"+
                     "︱<a target='_blank' class='map' href='http://maps.google.com?q="+page.location+"'>地圖</a>"
               }),
               style: "background-image: url("+page.photo+")"
             }).append($("<a>", {
               class: "apply-to",
               html: "我也要刊登照片",
               href: "#"
             }));
           }));

           if(pages.length > 0){
             let index = {};
             index["{{$key}}"] = -1;
             setInterval(function () {
               // now mouse location dom
               const carousel = $(':hover').last().closest(".carousel");
               if(carousel.length > 0){
                 if(carousel.closest(".department").attr("id") !== "{{$key}}"){
                    $("#{{$key}} .carousel .img").removeClass("active");
                    $("#{{$key}} .carousel .img:eq("+ (++index["{{$key}}"] % pages.length + 1) +")").addClass("active");
                 }
               }else{
                  $("#{{$key}} .carousel .img").removeClass("active");
                  $("#{{$key}} .carousel .img:eq("+ (++index["{{$key}}"] % pages.length + 1) +")").addClass("active");
               }
             }, 3000);
           }
         });
      @endforeach

      $(".block").on("click", "a.apply, a.apply-to", function(event) {
        event.preventDefault();

        $(".modal select").val($(this).closest(".department").attr("id"))

        $('#applyModal').modal({
          backdrop: 'static'
        });

      })
    });
  </script>
@endsection
