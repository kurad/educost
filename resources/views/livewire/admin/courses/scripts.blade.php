@push('js')
    
  <script src="https://cdn.ckeditor.com/ckeditor5/25.0.0/classic/ckeditor.js"></script>

      <!--<script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>-->

      
    <script>
        ClassicEditor.create(document.querySelector('#objectives'));
        ClassicEditor.create(document.querySelector('#teaching_resource'));
        $('form').submit(function() {
           
            @this.set('state.objectives', $('#objectives').val());
            @this.set('state.teaching_resource', $('#teaching_resource').val());
            
        })
    </script>
@endpush