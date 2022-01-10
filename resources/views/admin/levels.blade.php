            @extends('layouts.app')
         @section('content')
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

                              <div class="table_section padding_infor_info">
                                 <a href="{{route('show_create_level')}}" class="btn btn-success pull-right"><span class="fa fa-plus"></span>Add Level</a><br><br>
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
               <!-- end dashboard inner -->
            @endsection