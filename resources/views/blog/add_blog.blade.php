<!-- summernote css/js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h3 style="text-transform: uppercase">Add New Blog Details</h3>
                    </div>
                    <hr>

                    <div class='card-body'>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <form  id="add_desc_blog_form" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <label for="inputPassword5" class="form-label">Blog Title</label>
                                                    <input type="text" id="inputPassword5" name="blog_title" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6">
                                                    <label for="inputPassword5" class="form-label">Blog Category</label>
                                                    <select  class="form-control" id="selectbox" name="blog_category">                                
                                                            <option value="#" selected disabled>Select Blog Category</option>    
                                                            @foreach ($blogCategry as $blog)
                                                            <option value="{{($blog->id) }}"> {{($blog->category_name) }}</option> 
                                                            @endforeach
                                                    </select>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <label for="inputPassword5" class="form-label">Creator Name</label>
                                                    <input type="text" id="inputPassword5" class="form-control" name="creator_name" >
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-lg-12 ">
                                                <div class="form-group">
                                                    <label class="form-control-label" for="input-username">Blog Description</label>
                                                    <textarea class="form-control summernote"  id="editor" name="blog_description" rows="10"></textarea>
                                                </div>
                                            </div>
                                            
                                                <div class="row mt-3">
                                                    <div class="col-lg-6">
                                                        <label for="formFile" class="form-label">Banner image<span class="text-danger">*</span></label>
                                                        <input class="form-control" type="file" id="formFile" name="image">
                                                    </div>
                                                </div>
                                        <div class="row mt-3">
                                            <div class="col-lg-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </div> 
                                        </div>
                                        </form>
                                        {{-- Test ENd --}} 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- Validatin Modal --}}
     <div class="modal fade" id="error_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title" id="staticBackdropLabel">Validation Error</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 <ul id="validation_message"></ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning rounded-0 btn-sm" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Validatin Modal End--}}
</x-app-layout>
<script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/ckeditor/ckeditor.js"></script>
  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/jquery.min.js"></script>
  <script src='http://ckeditor.com/cke4/addon/wordcount.js'></script>
<script type="text/javascript">
    $("#rowAdder").click(function() {
        newRowAdd =
            '<div class="row" id="row">' +
            '<div class="col-md-8 mt-2"><label for="inputPassword5" class="form-label">Banner image</label>' +
            '<input type="file" id="inputPassword5" name="banner_image[]" class="form-control">' +
            '</div>' ;

        $('#newinput').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow", function() {
        $(this).parents("#row").remove();
    })
    $(document).on("submit", "#add_desc_blog_form", function(e) {
        // alert("Frm Subbmt");
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        // console.log(formData);
        $.ajax({
            type: "POST",
            url: "{{route('PostNewBlog')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
           data: 
            formData,
            cache: false,
            processData: false,
            contentType: false
        }).done(function(data) {
            if (data.messege == 'success') {
                Swal.fire({
                        title: "Success",
                        text: "Blog Details has been saved successfully",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willStore) => {
                        if (willStore) {
                            location.reload();
                        }
                    });
            }
            if(data.message=="validationFails"){
                var message=[]
                $.each(data.error, function(index, value) {
                    const textValue = index.split(".");
                    const line_number =parseInt(textValue[1])+1;
                    message.push('<li><b class="text-danger">Validation error on row number '+line_number+' </b>: '+value+'</li>');
                });
                $("#validation_message").html(message)
                $('#error_modal').modal('show');            
            }
            if (data.messege == 'error') {
                Swal.fire({
                    title: "Failed",
                    text: "Something Went Wrong",
                    icon: "error",
                    buttons: false,
                    dangerMode: true,
                })
            }

        });
    });

    $(() => {
  CKEDITOR.config.toolbar = [
    { name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Undo', 'Redo' ] },
    { name: 'links', items: [ 'Link', 'Unlink'] },
    { name: 'insert', items: [ 'Image', 'Table' ] },
    { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline'] },
    { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock'] },
    { name: 'styles', items: [ 'FontSize' ] },
    { name: 'colors', items: [ 'TextColor' ] },
    { name: 'others', items: [ '-' ] },
    { name: 'document', items : [ 'Source'] },
  ];  
  CKEDITOR.on( 'dialogDefinition', function( ev ) {
    // Take the dialog name and its definition from the event data.
    var dialogName = ev.data.name;
    var dialogDefinition = ev.data.definition;
    if ( dialogName == 'link' ) {
        // Get a reference to the "Link Info" tab.
        var targetTab = dialogDefinition.getContents( 'target' );

        var targetField = targetTab.elements[0].children[0];
        
        targetField['items'] = [["New Window (_blank)", "_blank"]];
        targetField['default'] = '_blank';

      var advancedtab = dialogDefinition.getContents( "advanced" );
      advancedtab['hidden'] = true;
    } else  if(dialogName === 'image'){
      var imageInfo = dialogDefinition.getContents('info');
      console.log('ccc', imageInfo)
    }
});
  CKEDITOR.replace('editor');
  $('#export').click(() => {
    $('#result').html(CKEDITOR.instances.editor.getData().toString());
  })
});

</script>
