<style>
    .phone {
        background-color: #27aae0 !important;
        padding: 50px;
        height: 100%;
        color: #fff;
    }

    .listHeader {
        text-transform: uppercase;
        background-color: red;
        padding: 15px;
        background-color: #CDE0E8;
        font-size: 1.4rem;
        font-weight: bold;
        color: #0E7EAE;
    }

    .tableBody {
        background-color: #CDE0E8;
    }

    #submitBtn {
        width: 15%;
        background-color: white;
        color: #1EBDF5;
        border: 2px solid #1EBDF5;
    }

    #submitBtn:hover {
        color: white;
        background-color: #1EBDF5;
    }

    .lightext {
        opacity: 0.6;
    }
</style>

<x-guest-layout>
    <div class="parallax-image">
        <div>
            <h3 class="parallax-title">Contact Us</h3>
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
        <div class="container">
            <div class="row mb-4">
                <div class="col-12">
                    <h3 class="head-title">Contact us</h3>
                    <p class="main-text">Directorate of Tourism, Opp: Indoor Stadium, <br>Raj Bhawan Road, Kohima -797001, Nagaland<br><br>nagalandtourism2014@gmail.com</p>
                </div>
                <div class="row g-4">
                    <div class="col-12 col-lg-4">
                        <div class="card w-100 h-100">
                            <div class="card-body">
                                <div class="phone">
                                    <p>Phone: 91 370 2243124</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card w-100 h-100">
                            <div class="card-body">
                                <div class="phone">
                                    <p>ILP queries <span class="m-3">8837222758</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card w-100 h-100">
                            <div class="card-body">
                                <div class="phone">
                                    <p>Incredible India Tourist infoline: <span class="ms-3">1800-11-1363</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row listHeader justify-content-center">
                list of designated officials
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered desgOfficial">
                        <thead class="text-white bg-primary">
                            <th class="text-center">Sl.No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Designation</th>
                            <th class="text-center">Contact No</th>
                        </thead>
                        <tbody class="tableBody">
                            <?php $i = 1; ?>
                            @foreach($desgoffcials as $key)
                            <tr>
                                <td class="text-center">{{$i}}</td>
                                <td>{{$key->name}}</td>
                                <td>{{$key->designation}}</td>
                                <td class="text-center">{{$key->contact_no}}</td>
                            </tr>
                            <?php $i++ ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <h5>Secretariat Staff Contact No.</h5>
            </div>
            <div class="row">
                <div class="table-responsive">
                    <table class="table table-bordered secretariatStaff">
                        <thead>
                            <th class="text-center">Sl.No</th>
                            <th class="text-center">Name</th>
                            <th class="text-center">Designation</th>
                            <th class="text-center">Contact No</th>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach ($secoffcials as $key)
                            <tr>
                                <td class="text-center">{{$i}}</td>
                                <td class="text-center">{{$key->name}}</td>
                                <td class="text-center">{{$key->designation}}</td>
                                <td class="text-center">{{$key->contact_no}}</td>
                            </tr>
                            <?php $i++ ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mb-4 map-section">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229925.06521765393!2d93.77515223816751!3d25.784461023567815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x374621b02c3bec6f%3A0x8efdc40f38ffd140!2sDirectorate%20Of%20Tourism!5e0!3m2!1sen!2sin!4v1680551162614!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="row">
                <h4>Get in Touch</h4>
                <div class="col-md-7" style="background-color: #F4F4F4; padding:2%">
                    <form id="queryForm">
                        @csrf
                        <div class="row g-4">
                            <div class="col-md-12">
                                <label for="">Enter Message</label><span class="text-danger"> *</span>
                                <textarea class="form-control" rows="5" id="message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="">Enter Your Name</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="col-md-6">
                                <label for="">Enter Email Address</label><span class="text-danger"> *</span>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="">Enter Subject</label><span class="text-danger"> *</span>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <button type="submit" class="btn btn-md rounded-0" id="submitBtn">SEND</button>
                        </div>

                    </form>
                </div>
                <div class="col-md-5" style="padding: 3%">

                    <h5><i class="fas fa-thin fa-house"></i> Opp: Indoor Stadium, Raj Bhavan Road,</h5>
                    <span class="lightext">Kohima -797001, Nagaland</span> <br><br>
                    <h5><i class="fas fa-regular fa-clock"></i> Office Hours</h5>
                    <span class="lightext">9:00 am – 4:00 pm</span><br><br>
                    <h5><i class="fas fa-solid fa-phone"></i> +91 370 2243124</h5>
                    <span class="lightext">Mon to Fri 9 am to 4 pm</span><br>
                    <h5>ILP queries -+88 372 22758</h5><br><br>
                    <h5><i class="fas fa-regular fa-envelope"></i> nagalandtourism2014@gmail.com</h5>
                    <span class="lightext">Send us your query anytime!</span>
                </div>
            </div>

        </div>
    </div>


</x-guest-layout>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.css" />
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    $('.desgOfficial').DataTable();
    // $('.secretariatStaff').DataTable();

    $(document).on("submit", "#queryForm", function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "{{route('AddQuery')}}",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: $('#queryForm').serialize(),
            cache: false,
        }).done(function(data) {
            if (data.message == 'success') {
                Swal.fire({
                        title: "Success",
                        text: "Query Sent Successfully",
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
                    if (index == 'official_type') {
                        message.push('<li><b class="text-danger">Validation error</b>: ' + value + '</li>');
                    } else {
                        message.push('<li><b class="text-danger">Validation error on row number ' + line_number + ' </b>: ' + value + '</li>');
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
</script>