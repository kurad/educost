<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Educost | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="{{asset('assets/css/theme-color/default-theme.css')}}" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">    

   
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

  </head>
  <body> 

  <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
    </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  
  <!-- End header  -->
  <!-- Start menu -->
  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
          <a class="navbar-brand" href="index.html"><i class="fa fa-university"></i><span>Educost</span></a>
          <!-- IMG BASED LOGO  -->
          <!-- <a class="navbar-brand" href="index.html"><img src="assets/img/logo.png" alt="logo"></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="#">Home</a></li>            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Course <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Course Archive</a></li>                
                <li><a href="#">Course Detail</a></li>                
              </ul>
            </li>           
            <li><a href="#">Gallery</a></li>          
            <li><a href="#">Contact</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <!--<li><a href="#">Login as Student</a></li>  -->              
            
          </ul>                     
        </div><!--/.nav-collapse -->        
      </div>     
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
  <div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End search box -->
  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{asset('assets/2/images/layout_img/edu.jpg')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Welcome To EduCost</h4>
        <span></span>
        <h3>The paramount companion to your greatest achievements. </h3>
        <p></p>
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{asset('assets/2/images/layout_img/g7.jpg')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Best Education Online platform Ever</h4>
        <span></span>
        <h3>Learn with us and hit the target in a blink of an eye.</h3>
        
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="{{asset('assets/2/images/layout_img/g3.jpg')}}" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">
        <h4>Exclusively For Education</h4>
        <span></span>
        <h3>Amazing grades and the brightest future start with us</h3>
        
        <a href="#" class="mu-read-more-btn">Read More</a>
      </div>
    </div>
    <!-- Start single slider item -->    
  </section>
  <!-- End Slider -->
  <!-- Start service  -->

  <section id="mu-service">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-service-area">
           
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-play"></span>
              <h3>Video Tutorials</h3>
              <p>Replacing the theoretical with stunning and easy-to-understand videos, simulations, and Charts.</p>
              <br><br>
            </div>
            <!-- Start single service -->
             <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-plane"></span>
              <h3>Virtual Field Trips</h3>
              <img src="{{asset('assets/2/images/virtual_trip.jpg')}}" style="height:124px; width: 180px;">
            </div>
            <!-- Start single service -->
            <!-- Start single service -->
            <div class="mu-service-single">
              <span class="fa fa-question-circle"></span>
              <h3>Revision Questions</h3>
              <p>Practice makes perfect. Access thousands of revision questions and answers for free.</p><br><br><br>
            </div>
            <!-- Start single service -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End service  -->

  <!-- Start about us -->
  <section id="mu-about-us">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-about-us-area">           
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-left">
                  <!-- Start Title -->
                  <div class="mu-title">
                    <h2>About Us</h2>              
                  </div>
                  <!-- End Title -->
                  <p>Educost.rw is an online educational platform that has been created in December 2021. It was founded and managed by two Rwandan science teachers.</p>
                  
                  <p>We provide a wide range of services like providing students with the best resources to cater to their needs at any time.  Moreover, we provide the teachers with a variety of questions and answers and a bank of quizzes to help their students. The platform also has section providing videos courses, simulations, and images to help both students and teachers to visualize the scientific concepts with ease. Most importantly, we help each anyone who has a PC to have a digital library which contains thousands of books, be it for literature, science subjects… and some novels are provided as audiobooks to help people with audio impairment also enjoy the reading.</p>
                  <p>This is the only Rwandan educational website created by professional teachers who know the true needs of learners and educators for a glorious success. </p>
                  <p>We are committed to helping the learners and teachers get authentic resources without wasting their time wandering and surfing around the internet. </p>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="mu-about-us-right">                            
                <a id="mu-abtus-video" href="https://www.youtube.com/embed/HN3pm9qYAUs" target="mutube-video">
                  <img src="{{asset('assets/img/about-us.jpg')}}" alt="img">
                </a>                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End about us -->

  <!-- Start features section -->
  <section id="mu-features">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-features-area">
            <!-- Start Title -->
            <div class="mu-title">
              <h2>Our Features</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsa ea maxime mollitia, vitae voluptates, quod at, saepe reprehenderit totam aliquam architecto fugiat sunt animi!</p>
            </div>
            <!-- End Title -->
            <!-- Start features content -->
            <div class="mu-features-content">
              <div class="row">
                <div class="col-lg-4 col-md-4  col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-book"></span>
                    <h4>E-Books</h4>
                    <p>Learn from the past and plan the future. With our digital library you will live a thousand lives.</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-users"></span>
                    <h4>Expert Teachers</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-laptop"></span>
                    <h4>Course Materials</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-flask"></span>
                    <h4>Science Experiments</h4>
                    <p>The true method of competency is experimenting. Exploit our experiments to understand better the scientific concepts behind.</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-film"></span>
                    <h4>Video Lessons</h4>
                    <p>Replacing the theoretical with stunning and easy-to-understand videos, simulations, and Charts.</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                  <div class="mu-single-feature">
                    <span class="fa fa-plane"></span>
                    <h4>Virtual Field Trips</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus non dolorem excepturi libero itaque sint labore similique maxime natus eum.</p>
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End features content -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End features section -->

  <!-- Start latest course section -->

  <!---->
  
  <!-- End latest course section -->

  <!-- Start our teacher -->
  @include("teacher.teachers")
  <!-- End our teacher -->

  

  <!-- Start footer -->
  <footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
      <div class="container">
        <div class="mu-footer-top-area">
          <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Information</h4>
                <ul>
                  <li><a href="#">About Us</a></li>
                  <li><a href="">Features</a></li>
                  <li><a href="">Courses</a></li>
                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Student Help</h4>
                <ul>
                  <li><a href="">Get Started</a></li>
                  <li><a href="#">My Questions</a></li>
                  <li><a href="">Notes</a></li>
                  <li><a href="">Latest Course</a></li>
                  <li><a href="">Academic News</a></li>                  
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>News letter</h4>
                <p>Get latest update, news & Teaching materials</p>             
              </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3">
              <div class="mu-footer-widget">
                <h4>Contact</h4>
                <address>
                  <p>P.O. Box 320, Bugesera-Rwanda</p>
                  <p>Phone: (+250)788407941 </p>
                  <p>Website: www.educost.rw</p>
                  <p>Email: info@educost.rw</p>
                </address>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end footer top -->
    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; All Right Reserved. Designed by <a href="http://educost.rw/" rel="nofollow">EduCost</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->
  
  <!-- jQuery library -->
  <script src="assets/js/jquery.min.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  
  
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script> 

  </body>
</html>
