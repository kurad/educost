           <div>
            @include('admin.courses.create5')
            @include('admin.courses.update')
            
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Lessons</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>All Lessons</h2>
                                 </div>
                              </div>
                              @if(Session::has('message'))
                               <div class="alert alert-success">
                                   {{Session::get('message')}}
                               </div>
                              @endif

                              <div class="table_section padding_infor_info">
                                 <button class="btn btn-success pull-right" data-toggle="modal" data-target="#exampleModal" ><span class="fa fa-plus"></span>Add Lesson</button>
                                 @if($isModalOpen)
                                 @include('admin.courses.create5')
                                 @endif
                                 <br><br><br>
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Level</th>
                                             <th>Subject</th>
                                             <th>Unit</th>
                                             <th>Lesson Title</th>
                                             <th>Actions</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($lessons as $lesson)
                                          <tr>
                                             <td>{{$lesson->id}}</td>
                                             <td>{{$lesson->level_name}}</td>
                                             <td>{{$lesson->subject_name}}</td>
                                             <td>{{$lesson->unit_name}}</td>
                                             <td>{{$lesson->lesson_title}}</td>
                                             <td>
                                                
                                                <a href="#" class="btn btn-success" wire:click="view_lesson({{ $lesson->id }})"><span class="fa fa-eye"></span></a>

                                                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $lesson->id }})" class="btn btn-primary btn-sm">Edit</button>
                                             </td>
                                          </tr>
                                          @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->

</div>