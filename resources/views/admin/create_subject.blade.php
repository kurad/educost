            @extends('layouts.app')
         @section('content')
<!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Subjects</h2>
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
                                    <h2>New Subject</h2>
                                 </div>
                              </div>
                              @if(Session::has('fail'))
                               <div class="alert alert-success">
                                   {{Session::get('success')}}
                               </div>
                              @endif
                              <div class="col-md-6">
                              <form action="{{route('create_subject')}}" method="POST">
                                 @csrf

                                 <div class="form-group">
                                    <label for="level_name">Select Level</label>
                                    
                                    <select name="level_id" class="form-control">
                                       <option value="">-- Select Level --</option>
                                       @foreach($levels as $level)
                                       <option value="{{$level->id}}">{{$level->level_name}}</option>
                                       @endforeach
                                    </select>
                                    
                                 </div>
                                 <div class="form-group">
                                    <label for="level_name">Subject Name</label>
                                    <input type="text" class="form-control" name="subject_name">
                                 </div>
                                 <button type="submit" class="btn btn-primary">Save</button><br><br>
                              </form>
                           </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- footer -->
                  <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2018 Designed by html.design. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->
            @endsection