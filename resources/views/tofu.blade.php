@extends('app')

@section('meta')
  <meta property="og:image" content="" />
@endsection

@section('content')

  @include('menu', [
    "list" => [
      "preserved-egg-tofu" => "皮蛋豆腐系",
      "stinky-tofu" => "臭豆腐系",
      "mapo-tofu" => "麻婆豆腐系"
    ]
  ])

  <header class="tofu">
		<div class="bg"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 text-center">
          <div class="section-heading header-content">
            <div class="header-content-inner">
              <span class="tofu icon"></span>
              <h1>豆腐學院</h1>
              <p class="text-muted">
                黃豆編織而成的美麗衣裳<br />料理方式變化萬千<br />湯或小菜都有它
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
                  <h2>豆腐學院系所</h2>
                  <p class="text-muted">
                    身段柔軟 沒有包袱
                  </p>
                  <hr>
              </div>
          </div>
      </div>
      <div class="row department" id="preserved-egg-tofu">
        <div class="col-sm-6 text-right">
          <div class="img" data-src="/images/preserved-egg-tofu.jpg"></div>
        </div>
        <div class="col-sm-6 text-left">
          <h2>皮蛋豆腐系</h2>
          <p class="text-muted">
            一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十
            一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十
          </p>
          <dl class="dl-horizontal">
            <dt>柔軟指數</dt><dd>☺☺☺☺☺☺</dd>
            <dt>柔軟指數</dt><dd>☺☺☺☺☺☺</dd>
            <dt>柔軟指數</dt><dd>☺☺☺☺☺☺</dd>
          </dl>
        </div>
      </div>

      <div class="row department" id="stinky-tofu">
        <div class="col-sm-6 text-right">
          <div class="img" data-src="/images/stinky-tofu.jpg"></div>
        </div>
        <div class="col-sm-6 text-left">
          <h2>臭豆腐系</h2>
          <p class="text-muted">
            一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十
            一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十
          </p>
          <dl class="dl-horizontal">
            <dt>柔軟指數</dt><dd>☺☺☺☺☺☺</dd>
            <dt>柔軟指數</dt><dd>☺☺☺☺☺☺</dd>
            <dt>柔軟指數</dt><dd>☺☺☺☺☺☺</dd>
          </dl>
        </div>
      </div>

      <div class="row department" id="mapo-tofu">
        <div class="col-sm-6 text-right">
          <div class="img" data-src="/images/mapo-tofu.jpg"></div>
        </div>
        <div class="col-sm-6 text-left">
          <h2>麻婆豆腐系</h2>
          <p class="text-muted">
            一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十
            一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十一二三四五六七八九十
          </p>
          <dl class="dl-horizontal">
            <dt>柔軟指數</dt><dd>☺☺☺☺☺☺</dd>
            <dt>柔軟指數</dt><dd>☺☺☺☺☺☺</dd>
            <dt>柔軟指數</dt><dd>☺☺☺☺☺☺</dd>
          </dl>
        </div>
      </div>
    </div>
  </section>
@endsection
