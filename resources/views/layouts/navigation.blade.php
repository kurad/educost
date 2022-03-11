<div class="sidebar_blog_2">
                  <h4>General</h4>
                  <ul class="list-unstyled components">
                    @if(Auth::user()->role_id==1)
                     <li><a href="{{route('dashboard')}}"><i class="fa fa-clock-o orange_color {{ request()->is('admin/dashboard') ? 'active':''}}"></i> <span>Dashboard</span></a></li>
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
                           <li><a href="{{route('lesson.index')}}">> <span>Courses</span></a></li>
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
                              <a href="{{route('level.index')}}">> <span>Levels</span></a>
                           </li>
                           <li>
                              <a href="{{route('subject.index')}}">> <span>Subjects</span></a>
                           </li>
                           <li>
                              <a href="{{route('units')}}">> <span>Units</span></a>
                           </li>
                           <li>
                              <a href="#">> <span>Lessons</span></a>
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