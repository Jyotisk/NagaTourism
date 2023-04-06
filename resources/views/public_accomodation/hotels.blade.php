<x-guest-layout>
    <div class="parallax-image">
        <div>
            <h3 class="parallax-title">Hotels</h3>
        </div>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="login-wrapper">
        <div class="bg-mask">
            <img src="{{asset('img/pic-2.jpg')}}" />
        </div>
        <div class="container mt-5 mb-5 ">
            <div class="row mb-4 g-4">
                <div class="col-md-12">
                    <h3 class="head-title">Hotels</h3>
                    <div class='card mt-3'>
                        <div class='card-header text-center'>
                            <h3>LIST OF HOTELS IN KOHIMA </h3>
                        </div>
                        <div class='card-body'>
                            <div class="table-responsive">
                                <table class="table hotel-list w-100 table-striped">
                                    <thead>
                                        <th>Sl.No</th>
                                        <th>Hotel Name</th>
                                        <th>Location</th>
                                        <th>Contact Number</th>
                                        <th>Alt Contact Number</th>
                                        <th>Email</th>
                                        <th>Alt Email</th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.css" />
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.js"></script>

<script>
    $('.hotel-list').DataTable({
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
            "url": "{{ route('Hotellists')}}",
        },
        "columns": [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },

            {
                "data": "hotel_name"
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



        ],

    });
</script>