<x-guest-layout>
    <!-- Destination -->
    <div class="destination_wrapper">
        <div class="bg-mask">
            <img src="{{asset('img/pic-2.jpg')}}" />
        </div>
        <div class="container">
            <div class="row g-4 mb-4">
                <div class="col-12 col-lg-8 order-last order-lg-first" style="overflow-y: scroll; height: 100vh; scrollbar-width: none;">
                    <div class="dest-card card mb-4">
                        <div class="card-header">
                            <img class="destination-pic" src="{{ url('storage/'."$destinations->image") }}" alt="Destination Picture">
                        </div>
                        <div class="card-body mt-5">
                            <h3 class="text-start">
                                {{$destinations->header}}
                            </h3>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="date-text">
                                    <i class="fa-regular fa-calendar-days"></i>
                                    {{$destinations->month}} {{$destinations->day}}, {{$destinations->year}}

                                </p>
                                @if(isset($destinations->blog_by))
                                <p class="text-uppercase">
                                    By, {{$destinations->blog_by}}
                                </p>
                                @endif
                            </div>
                            @if(isset($destinations->description))
                            <p class="" style="text-align: justify; text-justify: inter-word">
                                {{$destinations->description}}
                            </p>
                            @endif
                        </div>
                    </div>
                    @if($destinations->add_more_status==1)
                    @foreach($more_destination AS $more)
                    <div class="dest-card card mb-4">
                        <div class="card-header">
                            <img class="destination-pic" src="{{ url('storage/'."$more->image") }}" alt="Destination Picture">
                            @if(isset($more->image_by))
                                <p class="text-uppercase">
                                    Photo: {{$more->image_by}}
                                </p>
                                @endif
                        </div>
                        <div class="card-body mt-5">
                            <div class="d-flex align-items-center justify-content-between">
                               
                            </div>
                            @if(isset($more->description))
                            <p class="" style="text-align: justify; text-justify: inter-word">
                                {{$more->description}}
                            </p>
                            @endif
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>

                <div class="col-12 col-lg-4 order-first order-lg-last">
                    <div class="card">
                        <div class="card-header">
                            Search
                        </div>
                        <div class="card-body">
                            <form method="GET" action="#">
                                <div class="input-group">
                                    <input class="form-control" type="text" name="search" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" required="">
                                    <button class="btn btn-primary shadow-none search-btn" id="button-search" type="submit">Go!</button>
                                </div>
                            </form>

                            <div class="row mt-4">
                                <div id="calendar" class="calendar">
                                    <div class="calendar-title">
                                        <div class="calendar-title-text"></div>
                                        <div class="calendar-button-group">
                                            <button id="prevMonth">&lt;</button>
                                            <button id="today">Today</button>
                                            <button id="nextMonth">&gt;</button>
                                        </div>
                                    </div>
                                    <div class="calendar-day-name"></div>
                                    <div class="calendar-dates"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/day.js')}}"></script>
    <script>
        let currentDate = dayjs();
        let daysInMonth = dayjs().daysInMonth();
        let firstDayPosition = dayjs().startOf("month").day();
        let monthNames = [
            "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December"
        ];
        let weekNames = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];
        let dateElement = document.querySelector("#calendar .calendar-dates");
        let calendarTitle = document.querySelector(".calendar-title-text");
        let nextMonthButton = document.querySelector("#nextMonth");
        let prevMonthButton = document.querySelector("#prevMonth");
        let dayNamesElement = document.querySelector(".calendar-day-name");
        let todayButton = document.querySelector("#today");
        let dateItems = null;
        let newMonth = null;

        weekNames.forEach(function(item) {
            dayNamesElement.innerHTML += `<div>${item}</div>`;
        });

        function plotDays() {
            let count = 1;
            dateElement.innerHTML = "";

            let prevMonthLastDate = currentDate.subtract(1, "month").endOf("month").$D;
            let prevMonthDateArray = [];

            //plot prev month array
            for (let p = 1; p < firstDayPosition; p++) {
                prevMonthDateArray.push(prevMonthLastDate--);
            }
            prevMonthDateArray.reverse().forEach(function(day) {
                dateElement.innerHTML += `<button class="calendar-dates-day-empty">${day}</button>`;
            });

            //plot current month dates
            for (let i = 0; i < daysInMonth; i++) {
                dateElement.innerHTML += `<button class="calendar-dates-day">${count++}</button>`;
            }

            //next month dates
            let diff =
                42 - Number(document.querySelector(".calendar-dates").children.length);
            let nextMonthDates = 1;
            for (let d = 0; d < diff; d++) {
                document.querySelector(
                    ".calendar-dates"
                ).innerHTML += `<button class="calendar-dates-day-empty">${nextMonthDates++}</button>`;
            }

            //month name and year
            calendarTitle.innerHTML = `${ monthNames[currentDate.month()] } - ${currentDate.year()}`;
        }

        //highlight current date
        function highlightCurrentDate() {
            dateItems = document.querySelectorAll(".calendar-dates-day");
            if (dateElement && dateItems[currentDate.$D - 1]) {
                dateItems[currentDate.$D - 1].classList.add("today-date");
            }
        }

        //next month button event
        nextMonthButton.addEventListener("click", function() {
            newMonth = currentDate.add(1, "month").startOf("month");
            setSelectedMonth();
        });

        //prev month button event
        prevMonthButton.addEventListener("click", function() {
            newMonth = currentDate.subtract(1, "month").startOf("month");
            setSelectedMonth();
        });

        //today button event
        todayButton.addEventListener("click", function() {
            newMonth = dayjs();
            setSelectedMonth();
            setTimeout(function() {
                highlightCurrentDate();
            }, 50);
        });

        //set next and prev month
        function setSelectedMonth() {
            daysInMonth = newMonth.daysInMonth();
            firstDayPosition = newMonth.startOf("month").day();
            currentDate = newMonth;
            plotDays();
        }

        //init
        plotDays();
        setTimeout(function() {
            highlightCurrentDate();
        }, 50);
    </script>
</x-guest-layout>