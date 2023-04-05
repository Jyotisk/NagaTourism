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
                        <h3>Add Destinations</h3>
                    </div>
                    <div class='card-body'>
                        <form id="add_destination" enctype="multipart/form-data">
                            @csrf
                            <div class="row shadow-lg p-3 mb-5 bg-body rounded mt-2">
                                <div class="col-md-12">
                                    <label for="inputPassword5" class="form-label">Header<span class="text-danger">*</span></label>
                                    <input type="text" id="inputPassword5" name="header" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Date<span class="text-danger">*</span></label>
                                    <input type="date" id="inputPassword5" class="form-control" name="blog_date" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Added By</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="blog_by">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Source Link</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="source_link">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPassword5" class="form-label">Description</label>
                                    <textarea name="description" id="" cols="30" rows="6" class="form-control"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Image<span class="text-danger">*</span></label><br>
                                    <input type="file" id="inputPassword5" class="form-control-file" name="image">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Category<span class="text-danger">*</span></label><br>
                                    <select name="category" class="form-control" id="">
                                        <option value="" disabled>Select Category</option>
                                        @foreach($blogs AS $blog)
                                        <option value="{{$blog->id}}">{{$blog->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-md-8">
                                    <br>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input checkbox_check" name="add_more_status" type="checkbox" id="add_more" value="1">
                                        <label class="form-check-label text-dark" style="font-size:large;" for="flexSwitchCheckDefault">Add More Details</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row shadow-lg p-3 bg-body rounded mt-2" id="more_details" style="display:none">
                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Image<span class="text-danger">*</span></label><br>
                                    <input type="file" id="inputPassword5" class="form-control-file" name="more_image[]">
                                    <input type="hidden" id="inputPassword5" class="form-control-file" name="add_more_image[]" value="1">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword5" class="form-label">Image By</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="more_image_by[]" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPassword5" class="form-label">Description</label>
                                    <textarea name="more_description[]" id="" cols="30" rows="6" class="form-control"></textarea>
                                </div>
                            </div>
                            <div id="newinput">
                            </div>
                            <div class="row justify-content-end text-end mt-2" id="add_more_button" style="display:none">
                                <div class="col-md-4">
                                    <button id="rowAdder" type="button" class="btn btn-dark btn-sm rounded-0">
                                        <span class="bi bi-plus-square-dotted">
                                        </span> ADD MORE
                                    </button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm rounded-0 mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //error modal -->
    <div class="modal fade" id="error_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Validation Error</h5>
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
</x-app-layout>
<script type="text/javascript">
    $("#rowAdder").click(function() {
        newRowAdd =
            '<div class="row shadow-lg p-3 bg-body rounded mt-2" id="row">' +
            '<input type="hidden" id="inputPassword5" class="form-control-file" name="add_more_image[]" value="1">'+
            '<div class="col-md-6">' +
            '<label for="inputPassword5" class="form-label">Image</label><br>' +
            '<input type="file" id="inputPassword5" class="form-control-file" name="more_image[]">' +
            '</div>' +
            '<div class="col-md-6">' +
            ' <label for="inputPassword5" class="form-label">Image By</label>' +
            '<input type="text" id="inputPassword5" class="form-control" name="more_image_by[]" aria-describedby="passwordHelpBlock">' +
            '</div>' +
            '<div class="col-md-12">' +
            '<label for="inputPassword5" class="form-label">Description</label>' +
            '<textarea name="more_description[]" id="" cols="30" rows="6" class="form-control"></textarea>' +
            ' </div>' +
            '<div class="col-md-4"><button class="btn btn-danger mt-4 btn-sm rounded-0" id="DeleteRow" type="button"><i class="bi bi-trash"></i> Delete</button>' +
            '</div></div>';

        $('#newinput').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow", function() {
        $(this).parents("#row").remove();
    })
    $(document).on("submit", "#add_destination", function(e) {
        e.preventDefault();
        var formData = new FormData($(this)[0]);
        console.log(formData)
        $.ajax({
            type: "POST",
            url: "{{route('AddDestination')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: 
                formData
            ,
            cache: false,
            processData: false,
            contentType: false
            // dataType: "json",
            // encode: true,
        }).done(function(data) {
            if (data.message == 'success') {
                Swal.fire({
                        title: "Success",
                        text: "Data Saved Successfully",
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
            if (data.message == "validationFails") {
                var message = []
                $.each(data.error, function(index, value) {
                    const textValue = index.split(".");
                    const line_number = parseInt(textValue[1]) + 1;
                    if (index == 'header' || 'blog_date' || 'image') {
                        message.push('<li><b class="text-danger">Validation error</b>: ' + value + '</li>');
                    }
                     else {
                        message.push('<li><b class="text-danger">Validation error on row number ' + line_number + ' </b>: ' + value + '</li>');
                        // $("#validation_message").html('<li><b class="text-danger">Validation error on row number '+line_number+' </b>: '+value+'</li>')
                    }
                });
                $("#validation_message").html(message)
                $('#error_modal').modal('show');
            }
            if (data.message == 'error') {
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
    $(document).on("click", "#add_more", function(e) {
        if ($('input.checkbox_check').is(':checked')) {
            $("#more_details").slideDown();
            $("#newinput").slideDown();
            $("#add_more_button").slideDown();
        } else {
            $("#more_details").slideUp();
            $("#newinput").slideUp();
            $("#add_more_button").slideUp();

        }
    })
</script>