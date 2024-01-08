<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    @guest
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/hr_expert.png') }}">
    <title>
        HR Strategies Pro
    </title>
    @endguest

    @auth('emp')
    @php
    $employeeId = auth()->guard('emp')->user()->emp_id;
    $employee = DB::table('employee_details')
    ->join('companies', 'employee_details.company_id', '=', 'companies.company_id')
    ->where('employee_details.emp_id', $employeeId)
    ->select('companies.company_logo','companies.company_name')
    ->first();
    @endphp
    <link rel="icon" type="image/x-icon" href="{{ asset($employee->company_logo) }}">
    <title>
        {{$employee->company_name}}
    </title>
    @livewireScripts
    @endauth




    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="{{ mix('js/app.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="path/to/your.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/app.js') }}" defer data-turbolinks-track="reload"></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.js" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script src="{{ asset('vendor/livewire/livewire.js') }}"></script>
    <!-- Add these links to your HTML -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="{{ asset('livewire/livewire.js') }}" defer></script>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" data-turbolinks-track="reload">
 @stack('styles')
    <livewire:styles />

</head>

@guest
<livewire:emplogin />
@else

<body>
    <div>

    </div>

    <div>

        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                overflow-x:hidden;
            }

            .profile-container {

                display: flex;

                align-items: center;

                padding: 10px;

                background-color: rgb(2, 17, 79);

                box-shadow: 2px 4px 4px 4px rgba(0, 0, 0, 0.1);

                border-radius: 5px;

            }



            .profile-image {

                height: 32px;

                width: 32px;

                background-color: green;

                border-radius: 50%;

                margin-right: 10px;

            }



            .username {

                font-size: 16px;

                margin: 0;

            }



            .nav-item {

                font-size: 14px;

                margin-bottom: 5px;

                border-radius: 5px;

            }



            .nav-item-1 {

                font-size: 12px;

            }
            .nav-item .nav-link {
            color: black;
            text-decoration: none;
            cursor:pointer;
            }

            /* Style for the active-link class */
            .active-link a{
            background-color:#eef2ff ;
            border-radius:5px;
            color: black !important;
            }
            .active-link a:hover{
            background-color:#eef2ff ;
            border-radius:5px;
            color: black !important;
            }

            /* Hover effect for the nav-link class */
            .nav-link:hover {
            background-color: #f3f3f3;
            border-radius:5px;
            color: black !important;
            }

            /* Style for the icon */
            .nav-link i {
            color: black; /* Set the default color for the icon */
            }

            /* Style for the icon in the active state */
            .active-link i {
            color: black !important; /* Set the active color for the icon */
            }

            .fas {

                width: 30px;

                color: black;

            }



            .emp-name {

                margin-right: 20px;

            }



            .profile-image {

                margin-right: 15px;

            }


            #leave-options a {
                text-decoration: none;
                color: #778899;
                cursor:pointer;

            }

            #salary-options a {
                text-decoration: none;
                color: #778899;
            }

                /* Style for the dropdown container */
            .dropdown {
            position: relative;
            display: inline-block;
            background:transparent;
            width:200px;
            /* margin-right:30px; */
            }

            /* Style for the dropdown button */
            .dropdown-btn {
            background-color: transparent;
            color: #fff;
            padding: 8px;
            font-size: 0.905rem;
            border: none;
            cursor: pointer;
            }

            /* Style for the dropdown content */
            .dropdown-content {
            display: none;
            position: absolute;
            font-size: 0.855rem;
            border-radius:5px;
            background-color: #fff;
            min-width: 150px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }
            /* Style for the arrow */
            .dropdown-btn::after {
            content: "▼"; /* Unicode for down arrow */
            margin-left: 3px;
            font-size: 10px;
            line-height: 0.6;
            }
            /* Style for the dropdown links */
            .dropdown-content a {
            color: grey;
            padding: 10px 14px;
            text-decoration: none;
            display: block;
            }

            /* Change color on hover */
            .dropdown-content a:hover {
            background-color: #f7f8fe;
            border-left:2px solid rgb(2, 17, 79);
            color:rgb(2, 17, 79);
            border-radius:5px;
            }

            /* Change color on click (active state) */
            .dropdown-content a:active {
            background-color: #ddd;
            }

            /* Show the dropdown content when the dropdown button is hovered over */
            .dropdown:hover .dropdown-content {
            display: block;
            }
            /* content slot scrolling */

            .slot::-webkit-scrollbar {
                width: 7px; /* Set the width of the scrollbar */
            }

            .slot::-webkit-scrollbar-thumb {
                background-color: #ccc; /* Set the color of the thumb */
                border-radius: 6px; /* Set the border radius of the thumb */
            }

            .slot::-webkit-scrollbar-track {
                background-color: #f5f5f5; /* Set the color of the track */
            }

            .slot::-webkit-scrollbar-thumb:hover {
                background-color: #555; /* Set the color of the thumb on hover */
            }
            .backdropModal {
                background-color: #00000000;
                -webkit-backdrop-filter: blur(2px);
                backdrop-filter: blur(2px);
            }



            @media only screen and (max-width: 768px) {
                .displayNone {
                    display: none !important;
                }

                .displayBlock {
                    display: block !important;
                }

                #menu-popup {
                    position: absolute;
                    background: #fff;
                    border: 1px solid #e0dddd;
                    border-radius: 0px;
                    height: auto;
                    width: fit-content;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    top: 3.8em;
                    z-index: 1000;
                }
                 /* left side menu scroll */
                    #menu-popup {
                    overflow-y: auto;
                    max-height: 400px;
                    scrollbar-width: thin; /* For Firefox */
                    scrollbar-color: #f0f0f0; /* thumb and track color */
                }

                #menu-popup::-webkit-scrollbar {
                    width: 3px; /* Set the width of the scrollbar */
                }

                #menu-popup::-webkit-scrollbar-thumb {
                    background-color: #fff; /* Set the color of the thumb */
                    border-radius: 6px; /* Set the border radius of the thumb */
                }

                #menu-popup::-webkit-scrollbar-track {
                    background-color: #f0f0f0; /* Set the color of the track */
                }

                #menu-popup::-webkit-scrollbar-thumb:hover {
                    background-color: #555; /* Set the color of the thumb on hover */
                }


            }

            @media only screen and (min-width: 769px) {
                .hideHamburger {
                    display: none !important;
                }

            }


            @media only screen and (max-width: 768px) {
                .displayNone {
                    display: none !important;
                }

                .displayBlock {
                    display: block !important;
                }

                #menu-popup {
                    position: absolute;
                    background: #fff;
                    border: 1px solid #e0dddd;
                    border-radius: 0px;
                    height: auto;
                    width: fit-content;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    top: 3.8em;
                    z-index: 1000;
                }
                 /* left side menu scroll */
                #menu-popup {
                max-height: 400px;
                overflow-y: auto;
                scrollbar-width: thin; /* For Firefox */
                scrollbar-color: #f0f0f0; /* thumb and track color */
                }

                #menu-popup::-webkit-scrollbar {
                    width: 3px; /* Set the width of the scrollbar */
                }

                #menu-popup::-webkit-scrollbar-thumb {
                    background-color: #fff; /* Set the color of the thumb */
                    border-radius: 6px; /* Set the border radius of the thumb */
                }

                #menu-popup::-webkit-scrollbar-track {
                    background-color: #f0f0f0; /* Set the color of the track */
                }

                #menu-popup::-webkit-scrollbar-thumb:hover {
                    background-color: #555; /* Set the color of the thumb on hover */
                }


            }

            @media only screen and (min-width: 769px) {
                .hideHamburger {
                    display: none !important;
                }
                .scrollable-container {
                    max-height: 370px;
                    overflow-y: auto;
                }
                .scrollable-container::-webkit-scrollbar {
                    width: 2px; /* Set the width of the scrollbar */
                }

                .scrollable-container::-webkit-scrollbar-thumb {
                    background-color: #fff; /* Set the color of the scrollbar thumb */
                    border-radius: 5px; /* Set the border radius of the thumb */
                }

                .scrollable-container::-webkit-scrollbar-track {
                    background-color: #fff; /* Set the color of the scrollbar track */
                    border-radius: 5px; /* Set the border radius of the track */
                }

            }

        </style>


        <div class="row m-0" style="height: 100%;width:100%;background-color: #f0f0f0;">

            <div class="card displayNone" id="menu-popup" style="background-color: #fff; border-radius:0px;height: auto; width: 18em; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

                <div class="card-body" style="max-height: fit-content; min-height :99vh;width:auto;margin-top:0px">

                    <ul class="nav flex-column">

                        <div style="margin-bottom: 30px;margin-top:0px">

                            @livewire('company-logo')
                        </div>

                           @livewire('profile-card')


                        @auth('emp')
                        <div class="scrollable-container">
                         <ul class="nav flex-column">
                           <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none; margin-top: 10px" onclick="changePageTitle1()">

                            <a class="nav-link" href="/" onclick="setActiveLink(this)">

                                <i class="fas fa-home"></i> Home

                            </a>

                        </li>

                        <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle2()">

                            <a class="nav-link" href="/Feeds"  onclick="setActiveLink(this)">

                                <i class="fas fa-rss"></i> Feeds

                            </a>

                        </li>
                        <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle8()">

                            <a class="nav-link" href="/PeoplesList"  onclick="setActiveLink(this)">

                                <i class="fas fa-users"></i> People

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle3(item)">
                            <a class="nav-link" onclick="toggleToDoDropdown()">
                                <i class="fas fa-file-alt" id="todo-icon"></i> Todo <i class="fas fa-caret-down" id="todo-caret"></i>
                            </a>
                            <div id="todo-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/tasks" onclick="changePageTitle3('task'); setActiveLink(this)">
                                            Tasks
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/employees-review" onclick="changePageTitle3('review'); setActiveLink(this)">
                                            Review
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>




                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle12(item)">
                            <a class="nav-link" onclick="toggleSalaryDropdown()">
                                <i class="fas fa-solid fa-money-bill-transfer" id="salary-icon"></i> Salary <i class="fas fa-caret-down" id="salary-caret"></i>
                            </a>
                            <div id="salary-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle12('itdeclaration')">
                                        <a class="nav-link" href="/formdeclaration" id="itdeclaration" onclick="selectOption(this, 'IT Declaration');setActiveLink(this)">
                                            IT Declaration
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle13('itstatement')">
                                        <a class="nav-link" href="/itstatement" id="itstatement" onclick="selectOption(this, 'IT Statement');setActiveLink(this)">
                                            IT Statement
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('slip')">
                                        <a class="nav-link" href="/slip" id="slip" onclick="selectOption(this, 'Pay Slip');setActiveLink(this)">
                                            Payslips
                                        </a>
                                    </li>


                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('reimbursement')">
                                        <a class="nav-link" href="/reimbursement" id="reimbursement" onclick="selectOption(this, 'Reimbursement'); setActiveLink(this)">
                                            Reimbursement
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('investment')">
                                        <a class="nav-link" href="/investment" id="investment" onclick="selectOption(this, 'Proof of Investment'); setActiveLink(this) ">
                                            Proof of Investment
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('salary-revision')">
                                        <a class="nav-link" href="/salary-revision" id="salary-revision" onclick="selectOption(this, 'Salary Revision'); setActiveLink(this)">
                                           Salary Revision
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5(item)">
                            <a class="nav-link" onclick="toggleLeaveDropdown(event)">
                                <i class="fas fa-file-alt" id="leave-icon"></i> Leave <i class="fas fa-caret-down" id="leave-caret"></i>
                            </a>
                            <div id="leave-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/leave-page" onclick="changePageTitle5('apply');return false;setActiveLink(this)">
                                            Leave Apply
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/leave-balances" onclick="changePageTitle5('balances'); return false;setActiveLink(this)">
                                            Leave Balances
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/leave-calender" onclick="changePageTitle5('calendar'); return false;setActiveLink(this)">
                                            Leave Calendar
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/holiday-calender" onclick="changePageTitle5('holiday'); return false;setActiveLink(this)">
                                            Holiday Calendar
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/team-on-leave-chart" onclick="changePageTitle5('team'); return false;setActiveLink(this)">
                                            @livewire('team-on-leave')
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle6(item)">
                            <a class="nav-link"  onclick="toggleAttendanceDropdown()">
                                <i class="fas fa-clock"></i> Attendance<i class="fas fa-caret-down" id="attendance-caret"></i>
                            </a>
                            <div id="attendance-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/Attendance" onclick="return changePageTitle6('attendance-info');setActiveLink(this)">
                                              Attendance Info
                                        </a>
                                    </li>

                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/whoisinchart" onclick="return changePageTitle6('who-is-in');setActiveLink(this)">
                                              @livewire('whoisin')
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/employee-swipes-data" onclick="return changePageTitle6('employee-swipes');setActiveLink(this)">
                                              @livewire('employee-swipes')
                                        </a>
                                    </li>
                                    <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/attendance-muster-data" onclick="return changePageTitle6('who-is-in');setActiveLink(this)">
                                              @livewire('attendance-muster')
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle7()">

                            <a class="nav-link" href="/document"  onclick="setActiveLink(this)">

                                <i class="fas fa-folder"></i> Document Center

                            </a>

                        </li>


                        <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle9()">

                            <a class="nav-link" href="/HelpDesk"  onclick="setActiveLink(this)">

                                <i class="fas fa-headset"></i> Helpdesk

                            </a>

                        </li>

                        <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none;" onclick="changePageTitle10()">

                            <a class="nav-link" href="/delegates"  onclick="setActiveLink(this)">

                                <i class="fas fa-user-friends"></i> Workflow Delegates

                            </a>
                        </li>
                      </ul>
                     </div>
                        @endauth

                        @auth('hr')
                        <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none; margin-top: 10px" onclick="changePageTitle1()">
                            <a class="nav-link" href="#"  onclick="setActiveLink(this)">
                                <i class="fas fa-users"></i> HR Requests
                            </a>
                        </li>
                        @endauth

                        @auth('it')
                        <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none; margin-top: 10px" onclick="changePageTitle1()">
                            <a class="nav-link" href="#"  onclick="setActiveLink(this)">
                                <i class="fas fa-laptop"></i> IT Requests
                            </a>
                        </li>
                        @endauth

                        @auth('finance')
                        <li data-bs-toggle="modal" data-bs-target="#navigateLoader" class="nav-item" style="text-decoration: none; margin-top: 10px" onclick="changePageTitle1()">
                            <a class="nav-link" href="#"  onclick="setActiveLink(this)">
                                <i class="fas fa-dollar-sign"></i> Finance Requests
                            </a>
                        </li>
                        @endauth

                    </ul>
                </div>

            </div>

            <div class="col" style="height: 60px; width: auto; background-color:rgb(2, 17, 79)">

                <div class="col" style="display: flex; align-items: center; margin-top:2%;justify-content: end;">
                <i class="fas fa-bars hideHamburger" style="color: #fff; font-size: 20px; margin: 0px 10px;; cursor: pointer;" onclick="myMenu()"></i>

                    @auth('emp')

                    <i style="margin-bottom: 5px; color: white" id="pageIcon"></i>

                    <h6 style="color: white; width: -webkit-fill-available;" id="pageTitle">Home</h6>
                    <div class="dropdown">
                        <button class="dropdown-btn">Quick Links</button>
                          <div class="dropdown-content">
                             <a href="/tasks">Tasks</a>
                            <a href="/help-desk">Helpdesk</a>
                        </div>
                    </div>
                    <div class="notification-icon">

                        <i style="color: white;" class="fas fa-bell"></i>

                    </div>
                    @endauth

                    @if(auth('it')->check())
                    <h6 style="color: white; width: -webkit-fill-available;" id="pageTitle">
                        <i style="color: white;" class="fas fa-laptop"></i> IT Requests
                    </h6>
                    @elseif(auth('finance')->check())
                    <h6 style="color: white; width: -webkit-fill-available;" id="pageTitle">
                        <i style="color: white;" class="fas fa-dollar-sign"></i> Finance Requests
                    </h6>
                    @elseif(auth('hr')->check())
                    <h6 style="color: white; width: -webkit-fill-available;" id="pageTitle">
                        <i style="color: white;" class="fas fa-users"></i> HR Requests
                    </h6>
                    @endif



                    <div class="notification-icon" style="text-align:end;cursor:pointer;">

                        @livewire('log-out')
                    </div>

                </div>

                <div class="slot" style="margin-top: 3%; margin-left: 1%; height: calc(100vh - 84px); overflow-y: auto;">
                    {{ $slot }}
                </div>

            </div>

        </div>

        <!-- Modal -->
        <div class="modal fade backdropModal" id="navigateLoader" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="navigateLoaderLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color : transparent; border : none">
                <!-- <div class="modal-header">
                    <h1 class="modal-title fs-5" id="navigateLoaderLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->

                <div class="modal-body">
                    <div class="logo text-center mb-1" style="padding-top: 20px;">
                        @livewire('company-logo')
                    </div>

                    <div class="d-flex justify-content-center m-4">
                        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div> -->
                </div>
            </div>
        </div>



        @livewireScripts

        <script>
            function myMenu() {
                document.getElementById("menu-popup").classList.toggle("displayBlock");
            }
            if (localStorage.getItem("pageIcon") && localStorage.getItem("pageTitle")) {

                var storedIcon = localStorage.getItem("pageIcon");

                var storedTitle = localStorage.getItem("pageTitle");

                document.getElementById("pageIcon").innerHTML = storedIcon;

                document.getElementById("pageTitle").textContent = storedTitle;

            }



            function changePageTitle() {

                var newIcon = '<i style="color: white;" class="fas fa-address-card"></i>'

                var newTitle = "Employee Information";

                document.getElementById("pageTitle").textContent = newTitle;

                document.getElementById("pageIcon").innerHTML = newIcon;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }

            function changePageTitle123() {

                var newIcon = '<i style="color: white;" class="fas fa-cog"></i>'

                var newTitle = "Settings";

                document.getElementById("pageTitle").textContent = newTitle;

                document.getElementById("pageIcon").innerHTML = newIcon;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }


            function changePageTitle1() {

                var newTitle = "Home";

                var newIcon = '<i style="color: white;" class="fas fa-home"></i>'

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle2() {

                var newIcon = '<i style="color: white;" class="fas fa-rss"></i>'

                var newTitle = "Feeds";

                document.getElementById("pageTitle").textContent = newTitle;

                document.getElementById("pageIcon").innerHTML = newIcon;

                localStorage.setItem("pageTitle", newTitle);

                localStorage.setItem("pageIcon", newIcon);

            }


            function changePageTitle3(item) {
            var newIcon = '<i style="color: white;" class="fas fa-tasks"></i>';
            var newTitle = "To do";

            if (item === 'task') {
                newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                newTitle = "Tasks";
                todoDropdownClicked = true;
            } else if (item === 'review') {
                newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                newTitle = "Review";
                todoDropdownClicked = true;
            }

            document.getElementById("pageTitle").textContent = newTitle;
            document.getElementById("pageIcon").innerHTML = newIcon;
            localStorage.setItem("pageIcon", newIcon);
            localStorage.setItem("pageTitle", newTitle);
        }



            function changePageTitle4() {

                var newIcon = '<i style="color: white;" class="fas fa-money-bill-wave"></i>'

                var newTitle = "Salary";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle5() {

                var newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>'

                var newTitle = "Leave";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle6() {

                var newIcon = '<i style="color: white;" class="fas fa-clock"></i>'

                var newTitle = "Attendence";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle7() {

                var newIcon = '<i style="color: white;" class="fas fa-folder"></i>'

                var newTitle = "Document Center";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle8() {

                var newIcon = '<i style="color: white;" class="fas fa-users"></i>'

                var newTitle = "People";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle9() {

                var newIcon = '<i style="color: white;" class="fas fa-headset"></i>'

                var newTitle = "Help Desk";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle10() {

                var newIcon = '<i style="color: white;" class="fas fa-user-friends"></i>'

                var newTitle = "WorkFlow Delegates";

                document.getElementById("pageIcon").innerHTML = newIcon;

                document.getElementById("pageTitle").textContent = newTitle;

                localStorage.setItem("pageIcon", newIcon);

                localStorage.setItem("pageTitle", newTitle);

            }



            function changePageTitle11() {
                var newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                var newTitle = "Salary";

                if (item === 'itdeclaration') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "IT Declaration";
                } else if (item === 'itstatement') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "IT Statement";
                } else if (item === 'slip') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Pay Slip";
                }

                document.getElementById("pageIcon").innerHTML = newIcon;
                document.getElementById("pageTitle").textContent = newTitle;
                localStorage.setItem("pageIcon", newIcon);
                localStorage.setItem("pageTitle", newTitle);

            }

            function changePageTitle5(item) {
                var newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                var newTitle = "Leave";

                if (item === 'apply') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Leave Apply";
                } else if (item === 'balances') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Leave Balances";
                } else if (item === 'calendar') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Leave Calendar";
                } else if (item === 'holiday') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Holiday Calendar";
                } else if (item === 'team') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Team on Leave";
                }

                switch (item) {
                    case 'apply':
                        window.location.href = '/leave-page';
                        break;
                    case 'balances':
                        window.location.href = '/leave-balances';
                        break;
                    case 'calendar':
                        window.location.href = '/leave-calender';
                        break;
                    case 'holiday':
                        window.location.href = '/holiday-calender';
                        break;
                    case 'team':
                        window.location.href = '/team-on-leave-chart';
                        break;
                        // Add cases for other options if needed
                    default:
                        break;
                }
                document.getElementById("pageIcon").innerHTML = newIcon;
                document.getElementById("pageTitle").textContent = newTitle;
                localStorage.setItem("pageIcon", newIcon);
                localStorage.setItem("pageTitle", newTitle);
                // Return false to prevent the default link behavior
                return false;
            }


            function toggleLeaveDropdown(event) {
                event.stopPropagation();
                const leaveOptions = document.getElementById("leave-options");
                const leaveCaret = document.getElementById("leave-caret");

                if (leaveOptions.style.display === "block") {
                    leaveOptions.style.display = "none";
                    leaveCaret.classList.remove("fa-caret-up");
                    leaveCaret.classList.add("fa-caret-down");
                } else {
                    leaveOptions.style.display = "block";
                    leaveCaret.classList.remove("fa-caret-down");
                    leaveCaret.classList.add("fa-caret-up");
                }
            }
            function toggleAttendanceDropdown() {
                const AttendanceOptions = document.getElementById("attendance-options");
                const AttendanceCaret = document.getElementById("attendance-caret");

                if (AttendanceOptions.style.display === "block") {
                    AttendanceOptions.style.display = "none";
                    AttendanceCaret.classList.remove("fa-caret-up");
                    AttendanceCaret.classList.add("fa-caret-down");
                } else {
                    AttendanceOptions.style.display = "block";
                    AttendanceCaret.classList.remove("fa-caret-down");
                    AttendanceCaret.classList.add("fa-caret-up");
                }
            }
            function toggleSalaryDropdown() {
                const salaryOptions = document.getElementById("salary-options");
                const salaryCaret = document.getElementById("salary-caret");
                const leaveOptions = document.getElementById("leave-options");
                const leaveCaret = document.getElementById("leave-caret");

                if (salaryOptions.style.display === "block") {
                    salaryOptions.style.display = "none";
                    leaveOptions.style.display = "none";
                    salaryCaret.classList.remove("fa-caret-up");
                    salaryCaret.classList.add("fa-caret-down");
                } else {
                    salaryOptions.style.display = "block";
                    salaryCaret.classList.remove("fa-caret-down");
                    salaryCaret.classList.add("fa-caret-up");
                }
            }
            var todoDropdownClicked = false;

        function toggleToDoDropdown() {
            const todoOptions = document.getElementById("todo-options");
            const todoCaret = document.getElementById("todo-caret");
            const salaryOptions = document.getElementById("salary-options");
            const salaryCaret = document.getElementById("salary-caret");
            const leaveOptions = document.getElementById("leave-options");
            const leaveCaret = document.getElementById("leave-caret");

            // Check the status of other dropdowns and close them if open
            if (salaryOptions.style.display === "block") {
                salaryOptions.style.display = "none";
                salaryCaret.classList.remove("fa-caret-up");
                salaryCaret.classList.add("fa-caret-down");
            }

            if (leaveOptions.style.display === "block") {
                leaveOptions.style.display = "none";
                leaveCaret.classList.remove("fa-caret-up");
                leaveCaret.classList.add("fa-caret-down");
            }

            // Toggle the state of the current dropdown
            if (todoOptions.style.display === "block" && !todoDropdownClicked) {
                todoOptions.style.display = "none";
                todoCaret.classList.remove("fa-caret-up");
                todoCaret.classList.add("fa-caret-down");
            } else {
                todoOptions.style.display = "block";
                todoCaret.classList.remove("fa-caret-down");
                todoCaret.classList.add("fa-caret-up");
                todoDropdownClicked = false; // Reset the flag after toggling
            }
        }


            function selectOption(option, pageTitle) {
                const accordionItems = document.querySelectorAll('.nav-link');
                // Update the pageTitle
                updatePageTitle(pageTitle);
                // Close the dropdown if open
                toggleAttendanceDropdown();
                toggleLeaveDropdown();
                toggleSalaryDropdown();
            }

            function updatePageTitle(newTitle) {
                document.getElementById("pageTitle").textContent = newTitle;
                localStorage.setItem("pageTitle", newTitle);
            }
            function setActiveLink(link) {
      // Remove active-link class from all links
      var links = document.querySelectorAll('.nav-link');
      links.forEach(function (el) {
        el.classList.remove('active-link');
      });

      // Add active-link class to the parent of the clicked link (li element)
      link.parentNode.classList.add('active-link');
    }

    // Check and set active link on page load
    document.addEventListener("DOMContentLoaded", function() {
      var currentPath = window.location.pathname;
      var links = document.querySelectorAll('.nav-link');

      links.forEach(function (link) {
        if (link.getAttribute("href") === currentPath) {
          link.parentNode.classList.add('active-link');
        }
      });
    });
        </script>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@endguest

</html>
