@extends('app')

@section('meta')
  <meta property="og:image" content="" />
@endsection

@section('content')

  @include('menu', [
    "list" => $departments
  ])

  <header class="{{$college}}">
		<div class="bg"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="section-heading header-content">
            <div class="header-content-inner">
              <span class="tofu icon"></span>
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
      <div class="row">
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
                <dt>{{$aname}}</dt><dd>{{$value}}</dd>
              @endforeach
            </dl>
          </div>
        </div>
      @endforeach

    </div>
  </section>
@endsection
