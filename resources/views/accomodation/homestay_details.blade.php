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
                        <h3>Homestay Lists</h3>
                    </div>
                    <div class='card-body'>
                        <table class="table homestay-list w-100">
                            <thead>
                                <th>Homestay/PG Name</th>
                                <th>Location</th>
                                <th>Contact Number</th>
                                <th>Alt Contact Number</th>
                                <th>Email</th>
                                <th>Alt Email</th>
                                <th>Action</th>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- edit modal -->
    <div class="modal fade" id="edit_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header text-white" style="background-color:#443ea2">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit_form">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Homestay Name:</label>
                            <input type="text" class="form-control" id="homestay_name" name="homestay_name">
                            <span id="homestay_name_error" class="text-danger"></span>
                            <input type="hidden" class="form-control" id="homestay_id" name="homestay_id">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Location:</label>
                            <input type="text" class="form-control" id="location" name="location">
                            <span id="location_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Contact Number:</label>
                            <input type="text" class="form-control" id="contact_no" name="contact_no">
                            <span id="contact_no_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Alt Contact Number:</label>
                            <input type="text" class="form-control" id="alt_contact_no" name="alt_contact_no">
                            <span id="alt_contact_no_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Email:</label>
                            <input type="text" class="form-control" id="email" name="email">
                            <span id="email_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Alt Email:</label>
                            <input type="text" class="form-control" id="alt_email" name="alt_email">
                            <span id="alt_email_error" class="text-danger"></span>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm rounded-0">Save Change</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.js"></script>

<!-- <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script> -->
<script>
    $('.homestay-list').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": true,
        buttons: [
            // 'copyHtml5',
            // 'excelHtml5',
            // 'csvHtml5',
            // 'pdfHtml5'
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        dom: 'Blfrtip',
        "language": {
            "processing": 'Loading data...'
        },

        "ajax": {
            "url": "{{ route('DatatableHomestayList')}}",
            // "data": function(d) {
            //     d.dis_id = $('#district').val();
            //     d.block_id = $('#block').val();
            //     d.panchayat_id = $('#panchyat').val();
            //     d.program_id = $('#program').val();
            //     d.level_id = $('#level').val();
            //     d.des_id = $('#designation').val();
            //     d.ser_status = $('#service_status').val();
            // }
        },
        "columns": [
            // {
            //     data: 'DT_Row_Index',
            //     name: 'DT_Row_Index'
            // },

            {
                "data": "homestay_name"
            },
            {
                "data": "location"
            },
            {
                "data": "contact_no"
            },
            {
                "data": "alt_contact_no"
            },
            {
                "data": "email"
            },
            {
                "data": "alt_email"
            },
            {
                "data": "id",
                "render": function(data, type, row, meta) {
                    if (type === 'display') {
                        data = '<a class="btn btn-warning btn-sm edit rounded-0" style="text-decoration:none" href="' + row.id + '">Edit</a><a class="btn btn-danger btn-sm delete rounded-0" style="text-decoration:none" href="' + row.id + '">Delete</a>';
                    }
                    return data;
                }
            },



        ],

    });
    $(document).on("click", ".delete", function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Do you want to delete the homestay?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'No',
            denyButtonText: `Delete`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                Swal.fire('Changes are not saved', '', 'info')
            } else if (result.isDenied) {
                $.ajax({
                    type: "POST",
                    url: "{{route('DeleteHomestayData')}}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        'id': $(this).attr('href')
                    },
                    dataType: "json",
                    encode: true,
                }).done(function(data) {
                    if (data.message == 'success') {
                        $('.homestay-list').DataTable().ajax.reload();
                        Swal.fire('Deleted!', '', 'danger')
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
            }
        })
    })
    $(document).on("click", ".edit", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{route('GetEditHomestayData')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                'id': $(this).attr('href')
            },
            dataType: "json",
            encode: true,
        }).done(function(data) {
            if (data.message == 'success') {
                $("#edit_modal").modal("show");
                $("#homestay_id").val(data.data.id);
                $("#homestay_name").val(data.data.homestay_name);
                $("#location").val(data.data.location);
                $("#alt_contact_no").val(data.data.alt_contact_no);
                $("#contact_no").val(data.data.contact_no);
                $("#email").val(data.data.email);
                $("#alt_email").val(data.data.alt_email);

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
    $(document).on("submit", "#edit_form", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{route('EditHomestayData')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: $(this).serialize(),
            dataType: "json",
            encode: true,
        }).done(function(data) {
            if (data.message == 'success') {
                Swal.fire({
                        title: "Success",
                        text: "homestay data has been updated successfully",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willStore) => {
                        if (willStore) {
                            $('.homestay-list').DataTable().ajax.reload();
                            $("#edit_modal").modal("hide");

                        }
                    });
            }
            if (data.message == "validationFails") {
                $.each(data.error, function(index, value) {
                    $('#' + index + '_error').html(value);
                    console.log('#' + index + '_error')
                });
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
</script>