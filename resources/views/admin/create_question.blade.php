         @extends('layouts.app')
         @section('content')  
         @section('script')
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
         @endsection
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
                              <div class="col-md-8">
                              <form action="{{route('create_question')}}" method="POST">
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
                                    <label for="unit_id">Select Lesson</label>
                                    <select name="lesson_id" id="lessons" class="form-control"></select>
                                 </div>
                                 <div class="form-group">
                                    <label for="question">Question</label>
                                    <textarea class="form-control" id="tinymce" name="question" placeholder="Type your question">
                                       
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
                        <p>Copyright © 2022 Designed by <a href="educost.rw">Educost</a>. All rights reserved.</p>
                     </div>
                  </div>
               </div>
               <!-- end dashboard inner -->

               <script>
               tinymce.init({
                 selector: 'textarea#tinymce', // Replace this CSS selector to match the placeholder element for TinyMCE
                 plugins: 'code table lists',
                 toolbar: 'undo redo | formatselect| bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
            });
            </script>
            @endsection