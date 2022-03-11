<div>
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>View Lessons</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     @foreach($lessons as $key=>$lesson)
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Lesson: {{$lesson->lesson_title}}</h2>
                                 </div>
                              </div>
                             <div class="map_section padding_infor_info">
                                 {!! html_entity_decode($lesson->objectives) !!}

                                 
                              </div>
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
               </div>
               <!-- end dashboard inner -->
            </div>