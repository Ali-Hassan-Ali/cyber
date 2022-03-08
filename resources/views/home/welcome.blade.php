@extends('home.layout.app')

@section('content')

@section('title', __('home.welcome'))

    <section class="banner_main">
        <div class="container">
            <div class="row d_flex">
                <div class="col-md-7">
                  <div class="text-img">
                     <figure><img src="{{ asset('home_files/images/web1.jpg') }}" /></figure>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="text-bg">
                     <h1>تحديات <br> الامن السيبراني</h1>
                     
                  </div>
               </div>
            </div>
         </div>
    </section>
      <!-- end banner -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-top-70 padding-bottom-0" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('home_files/assets/images/left-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                    <div class="left-heading">
                        <h2 class="section-title">start challing</h2>
                    </div>
                    <div class="left-text">
                        <p>.........................................................................<br>
                        ............................................................................. </p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading">
                        <h2 class="section-title">help in company</h2>
                    </div>
                    <div class="left-text">
                        <p>.........................................................................................................<br> ............................................................................</p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('home_files/assets/images/right-image.png') }}" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

@endsection