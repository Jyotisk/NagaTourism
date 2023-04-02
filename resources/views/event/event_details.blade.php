<style>
    #showMore {
        color: red;
        text-decoration: none;
        margin-left: 10px;
    }
    #showMore:hover {
       cursor: pointer;
    }
</style>
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
                        <h3>Event Lists</h3>
                    </div>
                    <div class='card-body'>
                        <table class="table event-list w-100">
                            <thead>
                                <th class="text-center" style="width:15%">Event Title</th>
                                <th class="text-center"  style="width:15%">Event Date</th>
                                <th class="text-center" style="width:40%">Event Description</th>
                                <th class="text-center" style="width:15%">Image</th>
                                <th class="text-center" style="width:15%">Edit | Delete</th>
                            </thead>
                            <tbody>
                                @foreach($eventdetails as $key)
                                    <tr>
                                        <td>{{$key->event_title;}}</td>
                                        <td class="text-center">{{$key->event_date;}}</td>
                                        <td>{{  Str::limit($key->event_description), 20, $end='..........' }}
                                            <a id="showMore" data-bs-toggle="modal" data-bs-target="#myModal{{$key->id;}}" class="eventDescription text-danger"> ShowMore &#8250;&#8250;
                                            </a>
                                        </td>
                                            <!-- The Modal -->
                                            <div class="modal" id="myModal{{$key->id}}">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h5><i class="fas fa-clipboard-list text-white"></i> <strong>Event Description</strong></h5>
                                                        <a type="button" data-bs-dismiss="modal"><i class="fas fa-times"></i></a>
                                                    </div>
                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        {{ $key->event_description }}
                                                    </div>
                                                    <!-- Modal Footer -->
                                                    <div class="modal-footer">
                                                        <a type="button" class="close" data-bs-dismiss="modal">Close</a>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- End Modal -->
                                        <td class="text-center"><a class="btn btn-primary btn-sm viewImage" style="text-decoration:none;width:60%"><i class="fa-solid fa-eye"></i> View</a></td>
                                        <td class="text-center"><a class="btn btn-warning btn-sm edit rounded-0" href={{$key->id}}><i class="fa-solid fa-edit"></i></a>
                                            <a class="btn btn-danger btn-sm delete rounded-0 ms-2"><i class="fa-solid fa-trash-can"></i></a>
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
    <!-- edit modal -->
    <div class="modal fade" id="edit_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit_form">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Event Title:</label>
                            <input type="text" class="form-control" id="eventTitle" name="event_title">
                            <input type="hidden" class="form-control" id="id" name="id">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Event Date:</label>
                            <input type="date" class="form-control" id="eventDate" name="event_date">
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-primary btn-sm rounded-0" style="width:30%">Save Change</button>
                        </div>
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

<script>
    $('.event-list').DataTable();
    $(document).on("click", ".delete", function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Do you want to delete the record?',
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
                    url: "{{route('DeleteEventData')}}",
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
                        $('.event-list').DataTable().ajax.reload();
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
            url: "{{route('GetEditEventData')}}",
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
                $("#hotel_id").val();
                $("#hotel_name").val();
                $("#location").val();
                $("#contact_no").val();
                $("#email").val();

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
            url: "{{route('EditHotelData')}}",
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
                        text: "Hotel data has been updated successfully",
                        icon: "success",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willStore) => {
                        if (willStore) {
                            $('.event-list').DataTable().ajax.reload();
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

        });
    });
</script>
