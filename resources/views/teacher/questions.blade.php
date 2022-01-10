      @extends('layouts.app')
         @section('content')
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Questions</h2>
                           </div>
                        </div>
                     </div>
                     <!--Question filters-->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Filter Questions</h2>
                                 </div>
                              </div>
                              <div class="full inbox_inner_section">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="full padding_infor_info">
                                          <div class="mail-box">                           
                              <form action="{{route('create_question')}}" class="row" method="POST">
                                 @csrf
                                 <div class="form-group col-md-3">
                                    <label for="level_id">Select Level</label>
                                    <select name="level_id" id="levels" class="form-control">
                                       <option value="">-- Select Level --</option>
                                       @foreach($levels as $level)
                                       <option value="{{$level->id}}">{{$level->level_name}}</option>
                                       @endforeach
                                    </select>
                                 </div>
                                 <div class="form-group col-md-3">
                                    <label for="subject_id">Select Subject</label>
                                    <select name="subject_id" id="subjects" class="form-control"></select> 
                                 </div>
                                 <div class="form-group col-md-3">
                                    <label for="unit_id">Select Unit</label>
                                    <select name="unit_id" id="units" class="form-control"></select>
                                 </div>
                                 <div class="form-group col-md-3">
                                    <label for="unit_id">Select Lesson</label>
                                    <select name="lesson_id" id="lessons" class="form-control"></select>
                                 </div> 
                                 <div class="form-group col-md-4 align-self-end">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Filter</button>
                                 </div>                                
                              </form>
                              </div>
                              </div>
                              </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- End question filter -->
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>All Questions</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 
                                 <div class="table-responsive-sm">
                                    <table class="table">
                                       <thead>
                                          <tr>
                                             <th>#</th>
                                             <th>Level</th>
                                             <th>Subject</th>
                                             <th>Unit</th>
                                             <th>Lesson Title</th>
                                             <th>Question</th>
                                             <th>Actions</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          @foreach($all_question as $question)
                                          <tr>
                                             <td>{{$question->id}}</td>
                                             <td>{{$question->level_name}}</td>
                                             <td>{{$question->subject_name}}</td>
                                             <td>{{$question->unit_name}}</td>
                                             <td>{{$question->lesson_title}}</td>
                                             <td>{!! html_entity_decode($question->question)!!}</td>
                                             <td>
                                                <a href="{{route('view_question',$question->id)}}" class="btn btn-success"><span class="fa fa-eye"></span></a>
                                                
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

               <script type=text/javascript>
                 $('#levels').change(function(){
                 var levelID = $(this).val();  
                 if(levelID){
                   $.ajax({
                     type:"GET",
                     url:"{{route('getSubjects')}}?level_id="+levelID,
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

                 $('#units').on('change',function(){
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
                   
                 });
            </script>
            @endsection