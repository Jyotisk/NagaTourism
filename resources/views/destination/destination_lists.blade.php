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
                        <h3>Destination Lists</h3>
                    </div>
                    <div class='card-body'>
                        <table class="table registered_guide-list w-100">
                            <thead>
                                <th>Sl No</th>
                                <th>Categories</th>
                                <th>Header</th>
                                <th>Blog Date</th>
                                <th>Blog By</th>
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
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header text-white" style="background-color:#443ea2">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit_form">
                    <div class="row">
                        <div class="mb-3 col-md-4 col-lg-4 col-sm-12">
                            <label for="recipient-name" class="col-form-label">Header:</label>
                            <input type="text" class="form-control" name="header" id="header_edit">
                            <input type="hidden" class="form-control" name="id" id="id">
                        </div>
                        <div class="mb-3 col-md-4 col-lg-4 col-sm-12">
                            <label for="message-text" class="col-form-label">Blog Writte By:</label>
                            <input type="text" class="form-control" name="blog_by" id="blog_by_edit">
                        </div>
                        <div class="mb-3 col-md-4 col-lg-4 col-sm-12">
                            <label for="message-text" class="col-form-label">Blog Date:</label>
                            <input type="text" class="form-control" name="blog_date" id="blog_date_edit">
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="message-text" class="col-form-label">Source Link:</label>
                            <input type="text" class="form-control" name="source_link" id="source_link_edit">
                        </div>
                        <div class="mb-3 col-md-12" id="description_edit">
                           
                        </div>
                        <div class="mb-3" id="image_edit">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-sm rounded-0">Save Change</button>
                        </div>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- edit modal -->

    <!-- view modal -->
    <div class="modal fade" id="view_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header text-white" style="background-color:#443ea2">
                    <h5 class="modal-title" id="exampleModalLabel">Destination Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label for="recipient-name" class="col-form-label">Header:</label>
                            <p id="header"></p>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="message-text" class="col-form-label">Blog Writte By:</label>
                            <p id="blog_by"></p>
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="message-text" class="col-form-label">Blog Date:</label>
                            <p id="blog_date"></p>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="message-text" class="col-form-label">Source Link:</label>
                            <p id="source_link"></p>
                        </div>
                        <div class="mb-3 col-md-12">
                            <label for="message-text" class="col-form-label">Desription:</label>
                            <p id="description"></p>
                        </div>
                        <div class="mb-3" id="image">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- view modal  -->
</x-app-layout>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.js"></script>

<script>
    $('.registered_guide-list').DataTable({
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
            "url": "{{ route('DatatableDestinatioList')}}",
        },
        "columns": [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
            {
                "data": "name"
            },
            {
                "data": "header"
            },
            {
                "data": "blog_date"
            },
            {
                "data": "blog_by"
            },
            {
                "data": "id",
                "render": function(data, type, row, meta) {
                    if (type === 'display') {
                        data = '<a class="btn btn-success btn-sm view rounded-0" style="text-decoration:none" href="' + row.id + '">View</a><a class="btn btn-warning btn-sm edit rounded-0" style="text-decoration:none" href="' + row.id + '">Edit</a><a class="btn btn-danger btn-sm delete rounded-0" style="text-decoration:none" href="' + row.id + '">Delete</a>';
                    }
                    return data;
                }
            },

        ],

    });

    $(document).on("click", ".delete", function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Do you want to delete the Registered Guide?',
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
                    url: "{{route('DeleteDestinationData')}}",
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
                        $('.registered_guide-list').DataTable().ajax.reload();
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
    $(document).on("click", ".view", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{route('ViewDestinationData')}}",
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
                $("#header").html(data.destinationdetail.header);
                $("#blog_by").html(data.destinationdetail.blog_by);
                $("#blog_date").html(data.destinationdetail.blog_date);
                $("#description").html(data.destinationdetail.description);
                $("#source_link").html(data.destinationdetail.source_link);
                // $("#image").append('<img src="{{asset("storage/app/public")}}/'+data.destinationdetail.image+'" alt="">');
                $("#image").html('<img src="{{ url("storage/") }}/'+data.destinationdetail.image+'" alt="" title="" style="width:40%"/>')

                $("#view_modal").modal("show");

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
    $(document).on("click", ".edit", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{route('ViewDestinationData')}}",
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
                $("#header_edit").val(data.destinationdetail.header);
                $("#blog_by_edit").val(data.destinationdetail.blog_by);
                $("#blog_date_edit").val(data.destinationdetail.blog_date);
                $("#description_edit").html('<label for="message-text" class="col-form-label">Desription:</label>'+
                            '<textarea name="description" class="form-control" id="" cols="30" rows="3">'+data.destinationdetail.description+'</textarea>');
                $("#source_link_edit").val(data.destinationdetail.source_link);
                $("#id").val(data.destinationdetail.id);
                // $("#image").append('<img src="{{asset("storage/app/public")}}/'+data.destinationdetail.image+'" alt="">');
                $("#image_edit").html('<img src="{{ url("storage/") }}/'+data.destinationdetail.image+'" alt="" title="" style="width:40%"/>')
                $("#edit_modal").modal("show");

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
            url: "{{route('EditDestinationData')}}",
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
                        text: "registered_guide data has been updated successfully",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willStore) => {
                        if (willStore) {
                            $('.registered_guide-list').DataTable().ajax.reload();
                            $("#edit_modal").modal("hide");

                        }
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
            if (data.message == "validationFails") {
                $.each(data.error, function(index, value) {
                    $('#' + index + '_error').html(value);
                    console.log('#' + index + '_error')
                });
            }

        });
    });
</script>
