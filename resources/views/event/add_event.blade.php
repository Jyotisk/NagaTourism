<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- @include('sweet::alert') --}}
    <div class='dashboard-app'>
        <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
        <div class='dashboard-content'>
            <div class='container'>
                <div class='card'>
                    <div class='card-header'>
                        <h3>Add New Event Details</h3>
                    </div>
                    <div class='card-body'>
                        <form id="add_event" method="POST" action="{{route('AddEvent')}}"  enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Event Title <span class="text-danger">&#9733;</span></label>
                                    <input type="text" id="eventTitle" name="event_title" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-4">
                                    <label for="date" class="form-label">Event Date <span class="text-danger">&#9733;</span></label>
                                    <input type="date" id="eventDate" class="form-control" name="event_date" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-4">
                                    <label for="image" class="form-label">Event Image <span class="text-danger">&#9733;</span></label>
                                    <input type="file" id="eventImageMain" class="form-control" name="event_image_main" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-6">
                                    <label for="image" class="form-label">Event Description (Optional)</label>
                                    <textarea name="event_description" id="eventDescription" class="form-control" cols="30" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="col-md-4 mt-3">
                                <input type="checkbox" class="ms-2" id="imageStatus" name="image_status" value="1" style="width: 20px; height:20px">
                                <span>Want to Add Image </span>
                            </div>
                            <div class="col-md-4 mt-3" id="addPhotoBtn" style="display:none">
                                <button id="rowPhotoAdder" type="button" class="btn btn-dark btn-sm rounded-0"><i class="fa-solid fa-plus"></i> Add Photos</button>
                            </div>
                            <div id="photoinput"></div>

                            <div class="col-md-4 mt-3">
                                <input type="checkbox" class="ms-2" id="activityStatus" name="activity_status" value="1" style="width: 20px; height:20px">
                                <span>Want to Add Activities </span>
                            </div>
                            <div class="col-md-4 mt-3" id="addActivityBtn" style="display:none">
                                    <button id="rowActivityAdder" type="button" class="btn btn-dark btn-sm rounded-0"><i class="fa-solid fa-plus"></i> Add Activities</button>
                            </div><br>
                            <div id="activityinput"></div>

                            <div class="row justify-content-center mt-4">
                                <button type="submit" class="btn btn-success btn-md rounded-0 mt-2" style="width:12%"><i class="fa-sharp fa-solid fa-floppy-disk"></i> Submit</button>
                                <a href="" class="btn btn-md btn-danger rounded-0 mt-2 ms-3" id="reset" style="width:12%"><i class="fa-solid fa-rotate"></i> Reset</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script type="text/javascript">
    //photo div
    $('#imageStatus').click(function(){
        $('#addPhotoBtn').toggle();
        if($('#imageStatus').attr('checked', false)) {
            $('.newPhotoRow').hide();
        } else {
            $('.newPhotoRow').show();
        }
    });
    $("#rowPhotoAdder").click(function() {
        newRowAdd =
            '<div class="row newPhotoRow" id="newPhotoRow">'+
            '<div class="col-md-4"><label for="des" class="form-label"></label>' +
            '<input type="file" id="eventImage" class="form-control" name="event_image[]" aria-describedby="passwordHelpBlock">' +
            '</div>' +
            '<div class="col-md-4"><button class="btn btn-danger mt-4 btn-sm rounded-0" id="DeletePRow" type="button"><i class="fa-solid fa-trash"></i> Delete</button>' +
            '</div>';
        $('#photoinput').append(newRowAdd);
    });
    $("body").on("click", "#DeletePRow", function() {
        $(this).parents("#newPhotoRow").remove();
    })

    //activity div
    $('#activityStatus').click(function(){
        $('#addActivityBtn').toggle();
        if($('#activityStatus').attr('checked', false)) {
            $('.newActivityRow').hide();
        } else {
            $('.newActivityRow').show();
        }
    });
    $("#rowActivityAdder").click(function() {
        newRowAdd2 =
            '<div class="row newActivityRow mt-2" id="newActivityRow">'+
            '<div class="col-md-1"><label for="des" class="form-label"><strong>Activity:</strong></label></div>' +
            '<div class="col-md-10">' +
            '<input type="text" id="eventActivity" class="form-control" name="event_activity" aria-describedby="passwordHelpBlock">' +
            '</div>' +
            '<div class="col-md-1"><button class="btn btn-danger btn-sm rounded-0" id="DeletePRow" type="button"><i class="fa-solid fa-trash"></i> Delete</button>' +
            '</div>';
        $('#activityinput').append(newRowAdd2);
    });
    $("body").on("click", "#DeletePRow", function() {
        $(this).parents("#newActivityRow").remove();
    })

    //reset
    $('#reset').click(function(){
    $('#add_event')[0].reset();
});
</script>

