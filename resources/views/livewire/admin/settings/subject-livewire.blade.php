<div>
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
								<h2>All Subjects</h2>
							</div>
						</div>
						@if(Session::has('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
						@endif

						<div class="table_section padding_infor_info">
							<botton wire:click.prevent="addNewSubject" class="btn btn-success pull-right"><span class="fa fa-plus"></span>Add Subject</botton><br><br>
							<div class="table-responsive-sm">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Level</th>
											<th>Subject</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($subjects as $subject)
										<tr>
											<td>{{$subject->id}}</td>
											<td>{{$subject->level_name}}</td>
											<td>{{$subject->subject_name}}</td>
											<td>
												<a href="#" class="btn btn-primary"><span class="fa fa-pencil-square-o"></span></a> |
												<a href="#" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
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

	<!-- Modal -->
<div class="modal fade" id="formSubject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Subject</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form autocomplete="off" wire:submit.prevent="createSubject">

      		<div class="form-group">
      			<label for="level_name">Select Level</label>

      			<select wire:model.defer="state.level_id" name="level_id" class="form-control">
      				<option value="">-- Select Level --</option>
      				@foreach($levels as $level)
      				<option value="{{$level->id}}">{{$level->level_name}}</option>
      				@endforeach
      			</select>

      		</div>
      		<div class="form-group">
      			<label for="level_name">Subject Name</label>
      			<input wire:model.defer="state.subject_name" type="text" class="form-control" name="subject_name">
      		</div>

      		<div class="modal-footer">
        
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      	</form>
      </div>

    </div>
  </div>
</div>
</div>
