<div>

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
                     <form action="{{route('create_lesson')}}" method="POST">
                                 @csrf
                     <div class="row">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Please Select</h2>
                                 </div>
                              </div>
                              @if(Session::has('fail'))
                               <div class="alert alert-success">
                                   {{Session::get('success')}}
                               </div>
                              @endif
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="level_id">Select Level</label>
                                    <select wire:model="selectedLevel"  name="level_id" class="form-control">
                                       <option value="">-- Select Level --</option>
                                       @foreach($levels as $level)
                                       <option value="{{$level->id}}">{{$level->level_name}}</option>
                                       @endforeach
                                    </select> 
                                 </div>

                                @if (!is_null($selectedLevel))
                                 <div class="form-group">
                                    <label for="level_id">Select Subject</label>
                                    <select wire:model="selectedSubject"  name="subject_id" class="form-control">
                                       <option value="">-- Select Subject --</option>
                                       @foreach($subjects as $subject)
                                        <option value="{{ $subject->id }}">{{ $subject->subject_name }}</option>
                                        @endforeach
                                    </select> 
                                 </div>
                                @endif
                                @if (!is_null($selectedSubject))
                                 <div class="form-group">
                                    <label for="unit_id">Select Unit</label>
                                    <select name="unit_id" class="form-control">
                                       <option value="">-- Select Unit --</option>
                                       @foreach($units as $unit)
                                       <option value="{{$unit->id}}">{{$unit->unit_name}}</option>
                                       @endforeach
                                    </select> 
                                 </div>
                                @endif
                              
                           </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label for="lesson_title">Lesson title</label>
                                    <input type="text" class="form-control" name="lesson_title">
                                 </div>
                                 <div class="form-group">
                                    <label for="objectives">Learning Objectives</label>
                                    <textarea class="form-control" name="objectives"></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label for="teaching_resource">Learning Objectives</label>
                                    <textarea class="form-control" name="teaching_resource"></textarea>
                                
                                 </div>
                                 <button type="submit" class="btn btn-primary">Save</button><br><br>
                              </div>
                          </div>
                      </div>
                  </div>
                </form>
            </div>
            </div>
                    <div class="container-fluid">
                     <div class="footer">
                        <p>Copyright © 2022 Designed by EduCost. All rights reserved.</p>
                     </div>
                  </div>
</div>
                