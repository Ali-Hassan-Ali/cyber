@extends('home.layout.app')

@section('content')

@section('title', __('home.welcome'))

      <!-- Services  -->
      <div id="service" class="Services">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>كل التحديات  </h2>
                      </div>
               </div>
            </div>
            <div class="row">
            	
            	@foreach ($challenges as $challenge)
            		
	               	<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
		            	<a href="">
		                  <div class="Services-box">  
		                     <i><img src="{{ $challenge->image_path }}" alt="#" /></i>
		                     <h3>{{ $challenge->name }}</h3>
		                  </div>
		                </a>
	               	</div>

            	@endforeach
               
              
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
      <!-- end Servicess -->

@endsection