<div>
    <div class="midde_cont">
     <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Create New Lessons</h2>
                </div>
            </div>
        </div>
    <form autocomplete="off" wire:submit.prevent="createLesson">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                        <div class="row">
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
                            </div>
                            <div class="col-md-6">
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                @if (!is_null($selectedSubject))
                                <div class="form-group"> 
                                    <label for="unit_id">Select Unit</label>
                                    <select wire:model.defer="unit_id" name="unit_id" class="form-control">
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
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body"> 
                                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="col-md-6">
                                        <div wire:ignore.self class="form-group">
                                            <label for="lesson_title">Lesson title</label>
                                            <input type="text" wire:model.defer="lesson_title" class="form-control" name="lesson_title">
                                            @error('lesson_title') <span >{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div wire:ignore.self class="form-group">
                                            <label for="objectives"><strong>Learning Objectives</strong></label>
                                            <textarea wire:model.defer="objectives" class="form-control" id="objectives" name="objectives"></textarea>
                                            @error('objectives') <span >{{ $message }}</span> @enderror
                                        </div>
                                        <div wire:ignore class="form-group">
                                            <label for="teaching_resource">Teaching Resources</label>
                                            <textarea wire:model.defer="teaching_resource" class="form-control" id="teaching_resource" name="teaching_resource"></textarea>
                                            @error('teaching_resource') <span >{{ $message }}</span> @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <button type="reset" class="btn btn-secondary">Cancel</button>
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
@include('livewire/admin/courses/scripts')