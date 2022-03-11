<div>
	<div class="midde_cont">
		<div class="container-fluid">
			<div class="row column_title">
				<div class="col-md-12">
					<div class="page_title">
						<h2>Levels</h2>
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
								<h2>All Levels</h2>
							</div>
						</div>
						@if(Session::has('success'))
						<div class="alert alert-success">
							{{Session::get('success')}}
						</div>
						@endif

						<div class="d-flex justify-content-end mt-3">

							<button wire:click.prevent="addNewLevel" class="btn btn-success"><span class="fa fa-plus-circle mr-2"></span>Add Level</button>
						</div>

						<div class="table_section padding_infor_info">
							@if(session()->has('message'))
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								<strong><i class="fa fa-check-circle mr-1"></i>{{ session('message') }}</strong> .
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							@endif
							<div class="table-responsive-sm">
								<table class="table">
									<thead>
										<tr>
											<th>#</th>
											<th>Level</th>
											<th>Actions</th>
										</tr>
									</thead>
									<tbody>
										@foreach($levels as $level)
										<tr>
											<td>{{$level->id}}</td>
											<td>{{$level->level_name}}</td>
											<td>
												<a href="#" class="btn btn-primary"><span class="fa fa-pencil-square-o"></span></a>
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
<div class="modal fade" id="formLevel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Level</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<form autocomplete="off" wire:submit.prevent="createLevel">

      		<div class="form-group">
      			<label for="level_name">Level Name</label>
      			<input type="text" wire:model.defer="state.level_name" class="form-control @error('level_name') is-invalid @enderror" name="level_name">
      			@error('level_name')
      			<div class="invalid-feedback">
      				{{ $message }}
      			</div>
      			@enderror
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
