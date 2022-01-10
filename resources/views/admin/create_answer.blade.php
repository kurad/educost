            @extends('layouts.app')
         @section('content')

    
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Add Answer</h2>
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
                                    <h2>Add Answers to the question</h2>
                                 </div>
                              </div>
                              @if(Session::has('fail'))
                               <div class="alert alert-success">
                                   {{Session::get('success')}}
                               </div>
                              @endif
                              <div class="col-md-8">
                              <form action="{{route('store_answer')}}" method="POST">
                                 @csrf

                                 
                                 
                                 <div class="form-group">
                                    <label for="unit_id">Select Lesson</label>
                                    @foreach($questions as $key=>$question)
                                    <input type="text" name="lesson" id="lessons" class="form-control" value="{{$question->lesson_title}}" disabled>
                                    @endforeach
                                 </div>
                                 <div class="form-group">
                                    <label for="question">Question</label>
                                    @foreach($questions as $key=>$question)
                                    <textarea class="form-control" id="question" name="question" placeholder="Type your question" disabled>
                                       {!! html_entity_decode($question->question) !!}
                                    </textarea>
                                    @endforeach
                                 </div>
                                 <div class="form-group">
                                    <label for="question">Type answer for above question</label>
                                    
                                    <textarea class="form-control" id="answer" name="answer" placeholder="Type answers for the above question(s)">
                                       
                                    </textarea>
                                    
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
            <script>
               tinymce.init({
                 selector: 'textarea#question', // Replace this CSS selector to match the placeholder element for TinyMCE
                 plugins: 'code table lists',
                 toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
            });
               tinymce.init({
                 selector: 'textarea#answer', // Replace this CSS selector to match the placeholder element for TinyMCE
                 plugins: 'code table lists',
                 toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
            });
            </script>
            @endsection