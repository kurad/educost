
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>EduCost</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      
      @include("layouts.css")
      @livewireStyles
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index.html"><img class="logo_icon img-responsive" src="{{asset('assets/2/images/logo/logo_icon.png')}}" alt="#" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <!--<div class="user_img"><img class="img-responsive" src="{{asset('assets/2/images/layout_img/user_img.jpg')}}" alt="#" /></div>-->
                        <div class="user_info">
                           <h6>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               @include("layouts.navigation")
            </nav>
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="{{asset('assets/2/images/logo/educost_logo.png')}}" alt="#" /></a>
                        </div>
                        <div class="right_topbar">
                           <div class="icon_info">
                              <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul>
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="{{asset('assets/2/images/layout_img/user_img.jpg')}}" alt="#" /><span class="name_user">{{ Auth::user()->first_name }}</span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile.html">My Profile</a>
                                       <a class="dropdown-item" href="settings.html">Settings</a>
                                       <a class="dropdown-item" href="help.html">Help</a>
                                       <a class="dropdown-item" href="{{route('logout')}}"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
               </div>
               <!-- end topbar -->
               <!-- dashboard inner -->
                @yield('content')
               <!-- end dashboard inner -->
            </div>
         </div>
      </div>
      <script src="{{asset('assets/2/js/jquery.min.js') }}"></script>
      <script src="{{asset('assets/2/js/popper.min.js') }}"></script>
      <script src="{{asset('assets/2/js/bootstrap.min.js') }}"></script>
      <!-- wow animation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script src="{{asset('assets/2/js/animate.js') }}"></script>
      <!-- select country -->
    <script src="{{asset('assets/2/js/bootstrap-select.js') }}"></script>
     <!-- owl carousel -->
    <script src="{{asset('assets/2/js/owl.carousel.js') }}"></script> 
      <!-- chart js -->
    <script src="{{asset('assets/2/js/Chart.min.js') }}"></script>
    <script src="{{asset('assets/2/js/Chart.bundle.min.js') }}"></script>
    <script src="{{asset('assets/2/js/utils.js') }}"></script>
    <script src="{{asset('assets/2/js/analyser.js') }}"></script>
      <!-- nice scrollbar -->
    <script src="{{asset('assets/2/js/perfect-scrollbar.min.js') }}"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
      <!-- custom js -->
    <script src="{{asset('assets/2/js/custom.js') }}"></script>
    <script src="{{asset('assets/2/js/chart_custom_style1.js') }}"></script>
    <script src="{{asset('assets/js/tinymce/tinymce.min.js') }}"></script>
   </body>
   <script>
      window.addEventListener('show-form', event =>{
         $('#formLevel').modal('show');
      })

       window.addEventListener('show-form', event =>{
         $('#formSubject').modal('show');
      })

      window.addEventListener('hide-form', event =>{
         $('#formLevel').modal('hide');
      })
      window.addEventListener('hide-form', event =>{
         $('#formSubject').modal('hide');
      })
   </script>
   <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>

   <script>
      ClassicEditor
      .create( document.querySelector( '#objectives' ) )
      .then( editor => {
        console.log( editor );
     } )
      .catch( error => {
        console.error( error );
     } );
  </script>
   @livewireScripts
</html>