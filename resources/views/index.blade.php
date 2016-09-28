@extends('app')

@section('content')
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
              </button>
              <a class="navbar-brand page-scroll" href="#page-top">{{env("WEB_NAME")}}</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li>
                      <a class="page-scroll" href="#intro">大學介紹</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#features">探索學院</a>
                  </li>
                  <li>
                      <a class="page-scroll" href="#contact">我是哪個學院?</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
  </nav>


  <header>
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
{{--
              <div class="col-sm-5">
                  <div class="device-container">
                      <div class="device-mockup iphone6_plus portrait white">
                          <div class="device">
                              <div class="screen">
                                  <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                                  <img src="img/demo-screen-1.jpg" class="img-responsive" alt="">
                              </div>
                              <div class="button">
                                  <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
               --}}
          </div>
      </div>
  </header>

  <section id="intro" class="intro bg-primary text-center">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h2>大學介紹</h2>
                    <p>
                      觸手可及而永垂不朽的經典
                    </p>
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
                        Check out what you can do with this app theme!
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
                                  <i class="icon-screen-smartphone text-primary"></i>
                                  <h3>Device Mockups</h3>
                                  <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon-camera text-primary"></i>
                                  <h3>Flexible Use</h3>
                                  <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon-camera text-primary"></i>
                                  <h3>Flexible Use</h3>
                                  <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon-present text-primary"></i>
                                  <h3>Free to Use</h3>
                                  <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon-lock-open text-primary"></i>
                                  <h3>Open Source</h3>
                                  <p class="text-muted">Since this theme is MIT licensed, you can use it commercially!</p>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon-present text-primary"></i>
                                  <h3>Free to Use</h3>
                                  <p class="text-muted">As always, this theme is free to download and use for any purpose!</p>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon-screen-smartphone text-primary"></i>
                                  <h3>Device Mockups</h3>
                                  <p class="text-muted">Ready to use HTML/CSS device mockups, no Photoshop required!</p>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon-camera text-primary"></i>
                                  <h3>Flexible Use</h3>
                                  <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="feature-item">
                                  <i class="icon-camera text-primary"></i>
                                  <h3>Flexible Use</h3>
                                  <p class="text-muted">Put an image, video, animation, or anything else in the screen!</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
  </section>

  <section class="cta">
      <div class="cta-content">
          <div class="container">
              <h2>Stop waiting.<br>Start building.</h2>
              <a href="#contact" class="btn btn-outline btn-xl page-scroll">Let's Get Started!</a>
          </div>
      </div>
      <div class="overlay"></div>
  </section>

  <section id="contact" class="contact bg-primary">
      <div class="container">
          <h2>我是哪個學院?</h2>
          <ul class="list-inline list-social">
              <li class="social-twitter">
                  <a href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li class="social-facebook">
                  <a href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li class="social-google-plus">
                  <a href="#"><i class="fa fa-google-plus"></i></a>
              </li>
          </ul>
      </div>
  </section>

  <footer>
      <div class="container">
          <p>&copy; 2016 Start Bootstrap. All Rights Reserved.</p>
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


@endsection
