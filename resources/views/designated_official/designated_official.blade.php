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
                        <h3>Add Registered Guide</h3>
                    </div>
                    <div class='card-body'>
                        <form id="add_Official">
                            @csrf
                            <div class="row justify-content-center  text-center">
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label"><b>Offical</b></label>
                                    <select name="official_type" id="" class="form-control">
                                         <option disabled selected>Select Official</option>
                                        <option value="1">Designated Offical</option>
                                        <option value="2">Police Offical</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row shadow-lg p-3 mb-5 bg-body rounded mt-2">
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Travel Operator Name</label>
                                    <input type="text" id="inputPassword5" name="name[]" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Address</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="address[]" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Contact Number</label>
                                    <input type="text" id="inputPassword5" class="form-control" name="contact_number[]" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-4">
                                    <label for="inputPassword5" class="form-label">Email</label>
                                    <input type="email" id="inputPassword5" class="form-control" name="email[]" aria-describedby="passwordHelpBlock">
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
</x-app-layout>
<script type="text/javascript">
    $("#rowAdder").click(function() {
        newRowAdd =
            '<div class="row shadow-lg p-3 mb-5 bg-body rounded mt-2" id="row">' +
            '<div class="col-md-4"><label for="inputPassword5" class="form-label">Travel Operator Name</label>' +
            '<input type="text" id="inputPassword5" name="name[]" class="form-control" aria-describedby="passwordHelpBlock">' +
            '</div>' +
            '<div class="col-md-4">' +
            '<label for="inputPassword5" class="form-label">Address</label>' +
            '<input type="text" id="inputPassword5" name="address[]" class="form-control" aria-describedby="passwordHelpBlock"></div>' +
            '<div class="col-md-4">' +
            '<label for="inputPassword5" class="form-label">Contact Number</label><input type="text" name="contact_number[]" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"></div>' +
            '<div class="col-md-4">' +
            '<label for="inputPassword5" class="form-label">Email</label>' +
            '<input type="email" id="inputPassword5" name="email[]" class="form-control" aria-describedby="passwordHelpBlock">' +
            '</div>' +
            '<div class="col-md-4"><button class="btn btn-danger mt-4 btn-sm rounded-0" id="DeleteRow" type="button"><i class="bi bi-trash"></i> Delete</button>' +
            '</div></div>';

        $('#newinput').append(newRowAdd);
    });

    $("body").on("click", "#DeleteRow", function() {
        $(this).parents("#row").remove();
    })
    $(document).on("submit", "#add_Official", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{route('AddOfficial')}}",
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
                        text: "Official data has been saved successfully",
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
                console.log(data.error);
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