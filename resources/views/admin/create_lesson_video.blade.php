            @extends('layouts.app')
         @section('content')

    
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
                                    <h2>Create Video Lesson</h2>
                                 </div>
                              </div>
                              @if(Session::has('fail'))
                               <div class="alert alert-success">
                                   {{Session::get('success')}}
                               </div>
                              @endif
                              <div class="col-md-6">
                              <form action="{{route('create_video')}}" method="POST">
                                 @csrf

                                 <div class="form-group">
                                    <label for="level_id">Select Level</label>
                                    
                                    <select name="level_id" id="levels" class="form-control">
                                       <option value="">-- Select Level --</option>
                                       @foreach($levels as $key=>$level)
                                       <option value="{{$key}}">{{$level}}</option>
                                       @endforeach
                                    </select>
                                    
                                 </div>
                                 <div class="form-group">
                                    <label for="subject_id">Select Subject</label>
                                    
                                    <select name="subject_id" id="subjects" class="form-control"></select> 
                                 </div>
                                 <div class="form-group">
                                    <label for="unit_id">Select Unit</label>
                                    <select name="unit_id" id="units" class="form-control"></select>
                                 </div>
                                 <div class="form-group">
                                    <label for="lesson_title">Lesson title</label>
                                    <input type="text" class="form-control" name="lesson_title">
                                 </div>
                                 <div class="form-group">
                                    <label for="objectives">Learning Objectives</label>
                                    <input type="text" class="form-control" name="objectives">
                                 </div>
                                 <div class="form-group">
                                    <label for="video">Video Link</label>
                                    <input type="text" class="form-control" name="video_link">
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

               <script type=text/javascript>
                 $('#levels').change(function(){
                 var levelID = $(this).val();  
                 if(levelID){
                   $.ajax({
                     type:"GET",
                     url:"{{url('getSubjects')}}?level_id="+levelID,
                     success:function(res){        
                     if(res){
                       $("#subjects").empty();
                       $("#subjects").append('<option>Select Subject</option>');
                       $.each(res,function(key,value){
                         $("#subjects").append('<option value="'+key+'">'+value+'</option>');
                       });
                     
                     }else{
                       $("#subjects").empty();
                     }
                     }
                   });
                 }else{
                   $("#subjects").empty();
                   $("#units").empty();
                   $("#lessons").empty();
                 }   
                 });
                 $('#subjects').on('change',function(){
                 var subjectID = $(this).val();  
                 if(subjectID){
                   $.ajax({
                     type:"GET",
                     url:"{{url('getUnits')}}?subject_id="+subjectID,
                     success:function(res){        
                     if(res){
                        $("#units").empty();
                        $("#units").append('<option>Select Unit</option>');
                       $.each(res,function(key,value){
                         $("#units").append('<option value="'+key+'">'+value+'</option>');
                       });
                     
                     }else{
                       $("#units").empty();
                     }
                     }
                   });
                 }else{
                   $("#units").empty();
                   $("#lessons").empty();
                 }
                   
                 });

                /* $('#units').on('change',function(){
                 var unitID = $(this).val();  
                 if(unitID){
                   $.ajax({
                     type:"GET",
                     url:"{{url('getLessons')}}?unit_id="+unitID,
                     success:function(res){        
                     if(res){
                        $("#lessons").empty();
                        $("#lessons").append('<option>Select Lesson</option>');
                       $.each(res,function(key,value){
                         $("#lessons").append('<option value="'+key+'">'+value+'</option>');
                       });
                     
                     }else{
                       $("#lessons").empty();
                     }
                     }
                   });
                 }else{
                   
                   $("#lessons").empty();
                 }
                   
                 });*/
            </script>
            @endsection