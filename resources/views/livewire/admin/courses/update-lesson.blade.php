<div>
    <div class="midde_cont">
     <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Edit Lessons</h2>
                </div>
            </div>
        </div>
    <form >

        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body"> 
                                  
                        <div class="row">
                            <div class="col-md-12">
                                 
                                <div class="white_shd full margin_bottom_30">
                                   
                                    <input type="text" wire:model="$lesson->id" name="lesson_id">
                                    <div class="col-md-6">
                                        <div wire:ignore class="form-group">
                                            <label for="lesson_title">Lesson title</label>
                                            <input type="text" wire:model="lesson_title" class="form-control" name="lesson_title">
                                            @error('lesson_title') <span >{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div wire:ignore class="form-group">
                                            <label for="objectives"><strong>Learning Objectives</strong></label>
                                            <textarea wire:model="objectives" class="form-control" id="objectives" name="objectives"></textarea>
                                            @error('objectives') <span >{{ $message }}</span> @enderror
                                        </div>
                                        <div wire:ignore class="form-group">
                                            <label for="teaching_resource">Teaching Resources</label>
                                            <textarea wire:model="teaching_resource" class="form-control" id="teaching_resource" name="teaching_resource"></textarea>
                                            @error('teaching_resource') <span >{{ $message }}</span> @enderror
                                        </div>
                                        <button type="button" wire:click.prevent="update()" class="btn btn-primary close-modal">Save changes</button>
                                        <a href="/admin/lesson" class="btn btn-secondary">Cancel</a>
                                    </div>
           
                                </div>
                                
                            </div>
                        </div>
                        
                </div>
            </div>
        </div>  
    </form>
</div>
</div>
</div>
