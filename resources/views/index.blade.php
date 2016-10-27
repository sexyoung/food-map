@extends('app')

@section('meta')
  <meta property="og:image" content="" />
@endsection

@section('content')

  @include('menu', [
    "list" => [
      "intro" => "大學介紹",
      "features" => "探索學院"
    ]
  ])

  <header>
		<div class="bg"></div>
      <div class="container">
          <div class="row">
              <div class="col-sm-12 text-center">
                  <div class="section-heading header-content">
                    <div class="header-content-inner">
                      <h1>食尚大學 跨食代的冒險 </h1>
                      <p class="text-muted">
                        經歷過荷西統治、日治時期、國民政府來臺 <br />
                        屹立不搖的臺灣各大美食學院，等你來探索!
                      </p>
                      <hr>
                      <a href="#intro" class="btn btn-outline btn-xl page-scroll">大學介紹</a>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </header>

  <section id="intro" class="intro bg-primary text-center">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>大學介紹</h2>
                    <p>觸手可及而永垂不朽的經典</p>
                    <hr>
                </div>
            </div>
          </div>
          <div class="container-fluid">
            <div class="col-md-12">
              <i class="icon-book-open text-primary"></i>
              <h3>食尚文化歷史</h3>
              <p class="text">
                臺灣飲食文化，從最早期的台灣原住民飲食、荷蘭及西班牙殖民者文化、
                到清治時期閩南、客家人的飲食，日治時期的日本料理與引進西方飲食、
                而後中華民國國民政府播遷來台，帶來中國大陸各省的飲食文化，
                發展出一套揉合大江南北與西餐的飲食文化。
              </p>
              <p class="text">
                而食尚大學是臺灣處處可見，來自不同經典不朽的「臺灣美食學院」所構成的美食大學，
                發展至今每道美食都有各自的擁護者與勢力。食尚大學內依照種類分出九大學院。
                每道菜的獨天得厚，不只臺灣人，更是有許多外國食客紛紛前往入學。
              </p>
              <p class="text">
                而您，又是哪一間學院的呢？
              </p>
            </div>
          </div>
      </div>
  </section>

  <section id="features" class="features">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="section-heading">
                      <h2>探索學院</h2>
                      <p class="text-muted">
                        遍地全臺各俱特色的九大學院
                      </p>
                      <hr>
                  </div>
              </div>
          </div>
          <div class="row">
              <div class="col-md-12">
                  <div class="container-fluid">
                      <div class="row">
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon rice"></i>
                                  <h3>飯學院</h3>
                                  <p class="text-muted">
                                    橫跨東方民族，可以自由地與任何料理搭配，只要看得到人，就看得到它。
                                  </p>
                                  <a href="{{url("rice")}}" class="btn btn-success">參觀飯學院</a>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon tofu"></i>
                                  <h3>豆腐學院</h3>
                                  <p class="text-muted">
                                    黃豆編織而成的美麗衣裳，料理方式也是變化萬千，不管是湯或小菜都有它。
                                  </p>
                                  <a href="{{url("tofu")}}" class="btn btn-success">參觀豆腐學院</a>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon chicken"></i>
                                  <h3>鹹酥雞學院</h3>
                                  <p class="text-muted">
                                    出沒夜市攤販小吃裡的香雞，路過經過你的鼻子不會錯過。
                                  </p>
                                  <a href="{{url("chicken")}}" class="btn btn-success">參觀鹹酥雞學院</a>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon noodles"></i>
                                  <h3>麵線學院</h3>
                                  <p class="text-muted">
                                    九天玄女指點創制的長壽麵，金梭玉帛、牽絲如縷，簡直巧奪天工。
                                  </p>
                                  <a href="{{url("noodles")}}" class="btn btn-success">參觀麵線學院</a>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon oysters"></i>
                                  <h3>蚵仔學院</h3>
                                  <p class="text-muted">
                                    淡水海水交界處，它躲在岸石下安靜醞釀著深不可測的大海甘甜。
                                  </p>
                                  <a href="{{url("oysters")}}" class="btn btn-success">參觀蚵仔學院</a>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon beef"></i>
                                  <h3>牛肉學院</h3>
                                  <p class="text-muted">
                                    所有美味集結在一碗，札實、肥美、飽滿三種享受一次滿足。
                                  </p>
                                  <a href="{{url("beef")}}" class="btn btn-success">參觀牛肉學院</a>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon squid"></i>
                                  <h3>羹學院</h3>
                                  <p class="text-muted">
                                    似湯非湯的料理，與海產完美結合，滑順又飛快的滋味滿足心頭！
                                  </p>
                                  <a href="{{url("squid")}}" class="btn btn-success">參觀羹學院</a>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon staple"></i>
                                  <h3>名產學院</h3>
                                  <p class="text-muted">
                                    出門旅行除了玩，更要留下在地才有的東西，買的是名產，送的是誠意。
                                  </p>
                                  <a href="{{url("staple")}}" class="btn btn-success">參觀名產學院</a>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon pearl"></i>
                                  <h3>珍珠學院</h3>
                                  <p class="text-muted">
                                    飲品類無人不知的珍珠，不只紅遍台灣，更是揚名國際，人手幾乎一杯！
                                  </p>
                                  <a href="{{url("pearl")}}" class="btn btn-success">參觀珍珠學院</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </section>

@endsection
