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
                        <form id="add_eventt" method="POST" action="{{route('AddEvent')}}"  enctype="multipart/form-data">
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
                                    <input type="file" id="eventImage" class="form-control" name="event_image" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="col-md-4">
                                    <label for="desc" class="form-label">Description <span class="text-danger">&#9733;</span></label>
                                    <textarea name="event_description" id="eventDescription" class="form-control" cols="30" rows="4"></textarea>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success btn-sm rounded-0 mt-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

