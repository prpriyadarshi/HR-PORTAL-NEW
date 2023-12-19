<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Calendar</title>
    <!-- Add Bootstrap CSS link -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Add your custom CSS styles here if needed -->
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Montserrat', sans-serif;
            overflow-y:hidden;
        }
        .container-leave {
            padding: 0;
            margin: 0;
        }
 
        .table td {
            vertical-align: top; /* Align dates to the top */
            text-align: left; /* Align dates to the left */
        }
 
        .table th {
            text-align: center; /* Center days of the week */
            height: 20px;
            border: none;
            /* Adjust the height of days of the week cells */
        }
 
        .table td:hover {
            background-color: #ecf7fe; /* Hover background color */
            cursor: pointer;
        }
 
        /* Add styles for the navigation buttons */
        .nav-btn {
            background: none;
            border: none;
            font-size: 0.9rem;
            margin-top: -6px;
            cursor: pointer;
        }
 
        .nav-btn:hover {
            color: blue;
        }
 
        /* Increase the size of tbody cells and align text to top-left */
        .table tbody td {
            width: 75px;
            height: 75px;
            font-size: 12px; /* Adjust font size as needed */
            vertical-align: top;
            text-align: left;
        }
 
        /* Add style for the current date cell */
        .current-date {
            background-color: #ff0000; /* Highlight color for the current date */
            color: #fff; /* Text color for the current date */
            font-weight: bold;
        }
 
        .calendar-heading-container {
            background: #fff;
            padding: 5px;
            width: 100%;
            display: flex;
            justify-content: space-between;
            /* Add spacing between heading and icons */
        }
 
        .table {
            overflow-x: hidden; /* Add horizontal scrolling if the table overflows the container */
        }
 
        .tol-calendar-legend {
            display: flex;
            font-size: 0.875rem;
            width: 100%;
            justify-content:space-between;
            margin-top: -20px;
            font-weight: 500;
            color: #778899;
        }
 
        /* CSS for legend circles */
        .legend-circle {
            display: inline-block;
            width: 15px; /* Adjust the width as needed */
            height: 15px; /* Adjust the height as needed */
            border-radius: 50%;
            text-align: center;
            line-height: 15px; /* Vertically center the text */
            margin-right: 2px; /* Add some spacing between the circle and text */
            font-weight: bold; /* Make the text bold */
            color: white; /* Text color */
        }
 
        .circle-pale-yellow {
            background-color: #ffeb3b; /* Define the yellow color */
        }
 
        /* CSS for the pink circle */
        .circle-pale-pink {
            background-color: #ff4081; /* Define the pink color */
        }
        .accordion {
        border: 1px solid #ccc;
        margin-bottom: 10px;
        width: 100%; /* Adjust the width as needed */
        top: 100px;
        left:0;/* Adjust the top position as needed */
      /* Adjust the right position as needed */
      }
 
      .accordion-heading {
        background-color: #fff;
        padding: 5px;
        cursor: pointer;
      }
 
      .accordion-body {
        background-color: #fff;
        display: none;
        padding: 10px;
      }
 
      .accordion-content {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
      }
 
      .content {
        display: flex;
        flex-direction: row;
        align-items: center;
        background:#e7f5fe;
        justify-content:space-between;
        padding:3px;
        gap: 10px;
        color:#778899;
        font-weight:500;
      }
 
      .accordion-title {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
      }
 
      .active .leave-container {
        border-color: #3a9efd; /* Blue border when active */
      }
 
      .accordion-button {
        color: #DCDCDC;
        border: 1px solid #DCDCDC;
      }
 
      .active .accordion-button {
        color: #3a9efd;
        border: 1px solid #3a9efd;
      }
 
      @media (max-width: 760px) {
 
 
        .accordion {
          width: 65%;
          top: auto;
          right: auto;
          margin-top: 20px;
        }
      }
             /* Styles for the container */
             .filter-container {
            display: inline-block;
            position: relative;
        }
        .filter-container a{
          text-decoration:none;
        }
 
        /* Styles for the button */
        .filter-button {
            padding: 3px;
            margin-bottom:15px;
            background-color: #fff;
            color: #778899;
            font-size:0.825rem;
            width:150px;
            border: 1px solid #ccc;
            border-radius: 4px;
            cursor: pointer;
        }
        .filter-button:hover{
          border:1px solid #007bff;
        }
 
        /* Styles for the dropdown */
        .filter-dropdown {
            display: none;
            position: absolute;
            background-color: #fff;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
 
        /* Styles for dropdown items */
        .filter-item {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }
 
        .filter-item:hover {
            background-color: #fff;
        }
 
        /* Show the dropdown when hovering over the container */
        .filter-container:hover .filter-dropdown {
            display: block;
        }
        .button-container{
          display:flex;
          justify-content:space-between;
 
        }
        .custom-button{
          padding: 2px;
            margin-bottom:15px;
            background-color:#3eb0f7;
            color: #fff;
            width:100px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .search-container {
            display: flex;
        }
 
        /* Styles for the form group */
        .form-group {
            margin-right: 10px; /* Add spacing between search input and other elements */
        }
 
        /* Styles for the search input */
        .search-input {
          border:none;
            position: relative;
        }
 
        .search-input input[type="text"] {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px; /* Adjust width as needed */
        }
 
        /* Styles for the search icon */
        .search-icon {
            position: absolute;
            top: 50%;
            right: 10px;
            color:#778899;
            transform: translateY(-50%);
            cursor: pointer;
        }
 
        .search-icon::before {
             /* Unicode character for a magnifying glass */
            font-size: 16px;
        }
        .filter-container1{
            display: flex;
            background:#fff;
            align-items:center;
            height:30px;
            width:30px;
            padding:5px;
            border:1px solid #ccc;
        }
 
        /* Styles for the filter group */
        .filter-group {
            display: flex;
            align-items: center;
        }
 
        /* Styles for the Font Awesome icon */
        .fa-icon {
            font-size: 14px;
            color:#778899;
             /* Add spacing between icon and text */
        }
 
        .calendar-date {
            cursor: pointer;
        }
 
        .event-details {
            display:flex;
            flex-direction:row;
            padding: 0px;
        }
        .date-day{
            border:1px solid #ccc;
            background: #fff;
        }
        .holiday-con{
            border:1px solid #ccc;
            background: #fff;
        }
 
    </style>
</head>
<body>
    <div class="container-leave" >
   
    <div class="button-container" >
        <div class="filter-container">
            <button class="filter-button">Filter Type</button>
            <div class="filter-dropdown">
                <a class="filter-item" href="#)">Me</a>
                <a class="filter-item" href="#">My Team</a>
                <!-- Add more items as needed -->
            </div>
        </div>
        <button class="custom-button">
        <i class="fa fa-download" aria-hidden="true"></i>
        </button>
    </div>
        <div class="row" style="margin:0;padding:0;">
            <div class="col-md-7" >
                <div class="d-flex justify-content-between align-items-center mb-6">
                    <div class="calendar-heading-container">
                        <button wire:click="previousMonth" class="nav-btn">&lt; Prev</button>
                        <h5>{{ date('F Y', strtotime("$year-$month-1")) }}</h5>
                        <button wire:click="nextMonth" class="nav-btn">Next &gt;</button>
                    </div>
                </div>
                <!-- Calendar -->
                <div class="table-responsive"  >
                    <table class="table table-bordered" >
                        <thead >
                            <tr>
                                <th class="text-secondary text-semi-bold">Sun</th>
                                <th class="text-secondary text-semi-bold">Mon</th>
                                <th class="text-secondary text-semi-bold">Tue</th>
                                <th class="text-secondary text-semi-bold">Wed</th>
                                <th class="text-secondary text-semi-bold">Thu</th>
                                <th class="text-secondary text-semi-bold">Fri</th>
                                <th class="text-secondary text-semi-bold">Sat</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-body">
                        <div id="calendar">
                            @foreach ($calendar as $week)
                                <tr>
                                    @foreach ($week as $day)
                                    <td>
                                        @if ($day)
                                        <div wire:click="dateClicked($event.target.textContent)" class="calendar-date" data-date="{{ $day['day'] }}">
                                                @if ($day['isToday'])
                                                    <div style="background-color: #007bff; color: white; border-radius: 50%; width: 24px; height: 24px; text-align: center; line-height: 24px;">
                                                        {{ $day['day'] }}
                                                    </div>
                                                @else
                                                    {{ $day['day'] }}
                                                @endif
                                                @if ($day && isset($day['teamOnLeave']) && count($day['teamOnLeave']) > 0)
                                                    <div style="background-color: grey; border-radius: 50%; width: 24px; height: 24px; text-align: center; margin-top: 5px;">
                                                        <span style="color: white; display: block; line-height: 24px;">
                                                            {{ count($day['teamOnLeave']) }}
                                                        </span>
                                                    </div>
                                                @endif
                                            </div>
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    </div>     
                 <div class="tol-calendar-legend mt-2">
                        <div>
                            Team on Leave
                            <span class="legend-circle" style="background: #ccc; font-size: 0.75rem;">
                                0
                            </span>
                        </div>
                        <div>
                            Restricted Holiday
                            <span class="legend-circle circle-pale-yellow" style="vertical-align: middle; display: inline-block; width: 12px; height: 12px; border-radius: 50%;"></span>
                        </div>
                        <div>
                            General Holiday
                            <span class="legend-circle circle-pale-pink" style="vertical-align: middle; display: inline-block; width: 12px; height: 12px; border-radius: 50%;"></span>
                        </div>
                    </div>
                </div>
                  <div class="col-md-5">
                       <!-- Inside the event-container div -->
                       <div class="event-details" >
                             <div class="date-day">
                                <p>{{ \Carbon\Carbon::parse($selectedDate)->format('D') }}</p>
                                <p>{{ \Carbon\Carbon::parse($selectedDate)->format('d') }}</p>
                             </div>
                                 <div class="holiday-con">
                                    @if($holidays->count() > 0)
                                        <ul>
                                            @foreach($holidays as $holiday)
                                                <p>General Holiday</p>
                                                <li>{{ $holiday->festivals }}</li>
                                            @endforeach
                                        </ul>
                                    @else
                                        <p>No festivals for this date</p>
                                    @endif
                                 </div>
                            </div>
                            <!-- end -->
                        <div class="cont" style="display:flex; margin-top:30px;">
                           <div class="search-container" >
                                <div class="form-group"  >
                                    <div class="search-input"  >
                                        <input type="text" placeholder="Search Employee" class="search-text" >
                                        <div class="search-icon">
                                        <i class="fa fa-search" aria-hidden="true"  ></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="filter-container1" >
                                <div class="filter-group" style="margin-top:0px">
                                    <i class="fa-icon fas fa-filter"></i> <!-- Font Awesome filter icon -->
                                    <gt-filter-group>
                                        <!-- Add more content as needed -->
                                    </gt-filter-group>
                                </div>
                            </div>
                        </div>
                
                        <div class="accordion" style="margin-top: 20px;">
                            <div class="accordion-heading" onclick="toggleAccordion(this)">
                            <div class="accordion-title">
                                <div class="accordion-content">
                                <span style="font-size: 16px; font-weight: 500;color:#778899;">Leave transactions(0)</span>
                                </div>
                                <div class="accordion-button" style="border-radius: 50%; height: 0.5rem; width: 0.5rem; display: flex; justify-content: center; align-items: center;">
                                    <!-- <i class="fas fa-chevron-down"></i> -->
                                </div>
                            </div>
                            </div>
                            <div class="accordion-body">
                            <hr>
                            <div class="content">
                                <span style="font-size: 13px; font-weight: 500;">Employee</span>
                                <span style="font-size: 13px; font-weight: 500;">Number of days</span>
                                <span style="font-size: 13px; font-weight: 500;">From to</span>
                            </div>
                            <hr>
                            <hr>
                            @if($leaveTransactions)
                            @foreach($leaveTransactions as $transaction)
                                <div class="leave-trans">
                                    <!-- Display individual leave transaction details -->
                                </div>
                            @endforeach
                        @else
                    <div class="leave-trans" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                        <img src="/images/pending.png" alt="Pending Image" style="width: 100%; margin: 0 auto;">
                        <span style="font-size: 0.75rem; font-weight: 500; color:#778899;">No Employees are on leave</span>
                    </div>
                @endif
            </div>
          </div>
 
        </div>
 
    </div>
 
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        function toggleAccordion(element) {
        const accordionBody = element.nextElementSibling;
            if (accordionBody.style.display === 'block') {
            accordionBody.style.display = 'none';
            element.classList.remove('active'); // Remove active class
            element.closest('.wrapper').classList.remove('fixed'); // Remove fixed class
            } else {
            accordionBody.style.display = 'block';
            element.classList.add('active'); // Add active class
            element.closest('.wrapper').classList.add('fixed'); // Add fixed class
            }
        }
</script> 
</body>
</html>
 
</div>