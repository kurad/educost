<!-- Modal -->
<div>
<div wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Lesson</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
                <form method="POST">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <input type="hidden" wire:model="lesson_id">
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
                                    <select name="unit_id" wire:model="unit_id" class="form-control">
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
                                    <input type="text" wire:model="lesson_title" class="form-control" name="lesson_title">
                                 </div>
                                 <div class="form-group">
                                    <label for="objectives">Learning Objectives</label>
                                    <textarea class="form-control" wire:model="objectives" id="objectives" name="objectives"></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label for="teaching_resource">Teaching Resource</label>
                                    <textarea class="form-control" wire:model="teaching_resource" name="teaching_resource"></textarea>
                                
                                 </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  
                </form>
                <div class="modal-footer">
                    <button wire:click="closeModalPopover()" type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="update()" class="btn btn-primary close-modal">Save changes</button>
            </div>
            </div>
            
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/ckeditor5/32.0.0/classic/ckeditor.js"></script>
<script>
                        ClassicEditor
                                .create( document.querySelector( '#objectivess' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>
</div>