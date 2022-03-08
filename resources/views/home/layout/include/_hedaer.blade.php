<header>
   <!-- header inner -->
   <div class="header">
      <div class="container">
         <div class="row">
              <div class="logo_section">
               <div class="full">
                  <div class="center-desk">
                     <div class="logo">
                        <a href="{{ route('welcome') }}"><img src="{{ asset('home_files/images/logo.png') }}" alt="#" /></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                   <nav class="navigation navbar navbar-expand-md navbar-dark ">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                         <a class="nav-link" href="Home.html"style="font-size: 25px;">الرئيسية</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="{{ route('challenges') }}"style="font-size: 25px;">التحديات </a>
                        </li>
                        <li class="nav-item ">
                           <a class="nav-link" href="Score Top.html"style="font-size: 25px;">بيانات قائمة  المتصدرين </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="Contact.html"style="font-size: 25px;">الاتصال بنا</a>
                        </li>
                        
                     </ul>
                   </nav>
            </div>
         </div>
      </div>
   </div>
   
</header>