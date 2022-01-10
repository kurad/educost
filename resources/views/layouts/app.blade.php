
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
      <link rel="icon" href="{{ asset('assets/2/images/fevicon.png') }}" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{ asset('assets/2/css/bootstrap.min.css') }}" />
      <!-- site css -->
      <link rel="stylesheet" href="{{ asset('assets/2/style.css') }}" />
      <!-- responsive css -->
      <link rel="stylesheet" href="{{ asset('assets/2/css/responsive.css') }}" />
      <!-- color css -->
      <link rel="stylesheet" href="{{ asset('assets/2/css/colors.css') }}" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="{{ asset('assets/2/css/bootstrap-select.css') }}" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="{{ asset('assets/2/css/perfect-scrollbar.css') }}" />
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('assets/2/css/custom.css') }}" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/tinymce/tinymce.min.js') }}"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
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
               <div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                    @if(Auth::user()->role_id==1)
                     <li><a href="{{route('dashboard')}}"><i class="fa fa-clock-o orange_color"></i> <span>Dashboard</span></a></li>
                     <li>
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-tasks yellow_color"></i> <span>Teaching Aids</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="{{route('videos')}}">> <span>Videos</span></a>
                           </li>
                           <li>
                              <a href="#">> <span>Simulations</span></a>
                           </li>
                           <li>
                              <a href="#">> <span>Charts</span></a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-file purple_color"></i> <span>Course Material</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="#">> <span>Notes</span></a></li>
                           <li><a href="#">> <span>Experiments</span></a></li>
                           <li><a href="#">> <span>Video Tutorials</span></a></li>
                           <li><a href="#">> <span>Virtual field trips</span></a></li>
                        </ul>
                     </li>
                     
                     <li><a href="{{route('all_questions')}}"><i class="fa fa-question-circle purple_color2"></i> <span>Questions & Answers</span></a></li>
                     <li><a href="#"><i class="fa fa-question purple_color2"></i> <span>Online Quizzes</span></a></li>
                     <li >
                        <a href="#ebook" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-book yellow_color"></i> <span>EBook</span></a>
                        <ul class="collapse list-unstyled" id="ebook">
                           <li>
                              <a href="#"> <span>PDF</span></a>
                           </li>
                           <li>
                              <a href="#">> <span>Audio</span></a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="#settings" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-gear yellow_color"></i> <span>Settings</span></a>
                        <ul class="collapse list-unstyled" id="settings">
                           <li>
                              <a href="{{route('levels')}}">> <span>Levels</span></a>
                           </li>
                           <li>
                              <a href="{{route('subjects')}}">> <span>Subjects</span></a>
                           </li>
                           <li>
                              <a href="{{route('units')}}">> <span>Units</span></a>
                           </li>
                           <li>
                              <a href="{{route('lessons')}}">> <span>Lessons</span></a>
                           </li>
                        </ul>
                     </li>
                     <li><a href="#"><i class="fa fa-user purple_color2"></i> <span>Users Management</span></a></li>
                     @endif

                    @if(Auth::user()->role_id==2)
                     <li><a href="#"><i class="fa fa-clock-o orange_color"></i> <span>Dashboard</span></a></li>
                     <li class="active">
                        <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-tasks yellow_color"></i> <span>Teaching Aids</span></a>
                        <ul class="collapse list-unstyled" id="dashboard">
                           <li>
                              <a href="dashboard.html">> <span>Videos</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.html">> <span>Simulations</span></a>
                           </li>
                           <li>
                              <a href="dashboard_2.html">> <span>Charts</span></a>
                           </li>
                        </ul>
                     </li>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-file purple_color"></i> <span>Course Material</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="general_elements.html">> <span>Notes</span></a></li>
                           <li><a href="media_gallery.html">> <span>Experiments</span></a></li>
                           <li><a href="icons.html">> <span>Video Tutorials</span></a></li>
                           <li><a href="invoice.html">> <span>Virtual field trips</span></a></li>
                        </ul>
                     </li>
                     
                     <li><a href="{{route('teacher.all_questions')}}"><i class="fa fa-question-circle purple_color2"></i> <span>Questions & Answers</span></a></li>
                     <li><a href=""><i class="fa fa-question purple_color2"></i> <span>Online Quizzes</span></a></li>
                     <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>EBook</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                           <li>
                              <a href="profile.html"> <span>PDF</span></a>
                           </li>
                           <li>
                              <a href="project.html">> <span>Audio</span></a>
                           </li>
                        </ul>
                     </li>
                     @endif
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
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
      <!-- jQuery 
      <script src="{{asset('assets/2/js/jquery.min.js') }}"></script>
      <script src="{{asset('assets/2/js/popper.min.js') }}"></script>
      <script src="{{asset('assets/2/js/bootstrap.min.js') }}"></script>-->
      <!-- wow animation -->
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
   </body>
</html>