<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Extra Large Modal</h2>
  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="col-md-6">
            <form action="{{route('create_lesson')}}" method="POST">
               @csrf
               <div class="form-group">
                  <label for="unit_id">Select Unit</label>
                  <select name="unit_id" class="form-control">
                     <option value="">-- Select Unit --</option>   
                  </select>
               </div>
               <div class="form-group">
                  <label for="lesson_title">Lesson title</label>
                  <input type="text" class="form-control" name="lesson_title">
               </div>
               <div class="form-group">
                  <label for="objectives">Learning Objectives</label>
                  <input type="text" class="form-control" name="objectives">
               </div>
               <div class="form-group">
                  <label for="teaching_resource">Learning Objectives</label>
                  <input type="text" class="form-control" name="teaching_resource">
               </div>
                  <button type="submit" class="btn btn-primary">Save</button><br><br>
                  </form>
               </div>
            </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>
