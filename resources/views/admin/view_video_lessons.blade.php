            @extends('layouts.app')
         @section('content')
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Video Lessons</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     @foreach($view_lesson as $key=>$lesson)
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Lesson {{$lesson->lesson_title}}</h2>
                                 </div>
                              </div>
                             <p>Objective: {{$lesson->objectives}}</p>

                             <div class="media">
                                <div class="media-body">
                                 <iframe width="560" height="315" src="{{ $lesson->video_link }}" frameborder="0" allowfullscreen>
                                    </iframe>
                                    
                                </div>
                            </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <!-- end dashboard inner -->
            @endsection