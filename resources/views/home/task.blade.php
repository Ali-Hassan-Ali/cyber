@extends('home.layout.app')

@section('content')

@section('title', __('home.tasks'))

<!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="text-bg">
                     <h1>Power ful<br> Web Hosting</h1>
                     <span>Landing Page 2019</span>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                     <a href="">Get Started </a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="text-img">
                     <figure><img src="{{ asset('home_files/images/img.png') }}" /></figure>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- Services  -->
      <div id="service" class="Services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>{{ $challenges->name }}</h2>
                     <p>{{ $challenges->description }}</p>
                  </div>
               </div>
            </div>
           
            <div class="row">
                
                @foreach ($tasks as $task)
                	
	               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
	                  <div class="Services-box1">  
	                     <p> المستوى : {{ $task->level }}</p>
	                     <p>نقاط التحدي   : {{ $task->point }}</p>
	                     <p> {{ $task->description }} : وصف  التحدي  </p>
	                     <br>
	                     <a href="{{ $task->link }}"> رابط التحدي  </a>
	                     <div class="challeng">
	                      <textarea class="textarea" placeholder="locaion flag" type="text" name="Message"></textarea>
	                     </div>
	                     <button>ارسال </button>
	                  </div>
	               </div>

                @endforeach

            </div>
         </div>
      </div>
      <!-- end Servicess -->

@endsection