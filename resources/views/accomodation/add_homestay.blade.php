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
                        <h3>Add Homestay/PG</h3>
                    </div>
                    <div class='card-body'>
                        <form id="add_homestay">
                            @csrf
                            <div class="row shadow-lg p-3 mb-5 bg-body rounded mt-2">
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Homestay/PG Name</label>
                                    <input type="text" id="inputPassword5" name="homestay_name[]" class="form-control" aria-describedby="passwordHelpBlock">
                                    <span id="homestay_name_error[0]"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Location</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="location[]" aria-describedby="passwordHelpBlock">
                                    <span id="location_error[0]"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Contact Number</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="contact_no[]" aria-describedby="passwordHelpBlock" Maxlength="10">
                                    <span id="contact_no_error[0]"></span>
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Alternate Contact Number</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="alt_contact_no[]" aria-describedby="passwordHelpBlock" Maxlength="10">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Email</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="email[]" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Alternate Email</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="alt_email[]" aria-describedby="passwordHelpBlock">
                                </div>
                            </div>

                            <div id="newinput">
                            </div>
                            <div class="col-md-4 mt-3">
                                <button id="rowAdder" type="button" class="btn btn-dark btn-sm rounded-0">
                                    <span class="bi bi-plus-square-dotted">
                                    </span> ADD
                                </button>
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
            '<div class="row shadow-lg p-3 mb-5 bg-body rounded mt-2" id="row">' +
            '<div class="col-md-4"><label for="inputPassword5" class="form-label">Homestay/PG Name</label>' +
            '<input type="text" id="inputPassword5" name="homestay_name[]" class="form-control" aria-describedby="passwordHelpBlock">' +
            '</div>' +
            '<div class="col-md-4">' +
            '<label for="inputPassword5" class="form-label">Location</label>' +
            '<input type="text" id="inputPassword5" name="location[]" class="form-control" aria-describedby="passwordHelpBlock"></div>' +
            '<div class="col-md-4">' +
            '<label for="inputPassword5" class="form-label">Contact Number</label><input type="text" name="contact_no[]" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"></div>' +
            '<div class="col-md-4">' +
            '<label for="inputPassword5" class="form-label">Alternate Contact Number</label>' +
            '<input type="text" id="inputPassword5" class="form-control" name="alt_contact_no[]" aria-describedby="passwordHelpBlock">' +
            '</div>' +
            '<div class="col-md-4">' +
            '<label for="inputPassword5" class="form-label">Email</label>' +
            '<input type="text" id="inputPassword5" name="email[]" class="form-control" aria-describedby="passwordHelpBlock">' +
            '</div>' +
            ' <div class="col-md-4">' +
            '<label for="inputPassword5" class="form-label">Alternate Email</label>' +
            '<input type="email" id="inputPassword5" class="form-control" name="alt_email[]" aria-describedby="passwordHelpBlock">' +
            '</div>' +
            '<div class="col-md-4"><button class="btn btn-danger mt-4 btn-sm rounded-0" id="DeleteRow" type="button"><i class="bi bi-trash"></i> Delete</button>' +
            '</div></div>';

        $('#newinput').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow", function() {
        $(this).parents("#row").remove();
    })
    $(document).on("submit", "#add_homestay", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{route('AddHomestay')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: $(this).serialize(),
            dataType: "json",
            encode: true,
        }).done(function(data) {
            if (data.messege == 'success') {
                Swal.fire({
                        title: "Success",
                        text: "Homestay data has been saved successfully",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willStore) => {
                        if (willStore) {
                            // location.reload("http://gratiatechnology.live/social/public/proforma-download/"+data.data);
                            location.reload();
                            // window.location = "http://gratiatechnology.live/social/public/proforma-download/" + data.data;
                        }
                    });
            }
            if (data.messege == "validationFails") {
                var message=[]
                $.each(data.error, function(index, value) {
                    const textValue = index.split(".");
                    const line_number =parseInt(textValue[1])+1;
                    message.push('<li><b class="text-danger">Validation error on row number '+line_number+' </b>: '+value+'</li>');
                    // $("#validation_message").html('<li><b class="text-danger">Validation error on row number '+line_number+' </b>: '+value+'</li>')
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
</script>