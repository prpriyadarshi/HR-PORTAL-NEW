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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="path/to/your.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

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


            .nav-link {

                color: black !important;

            }

            #leave-options a {
                text-decoration: none;
                color: #778899;

            }

            #leave-options a:hover {
                text-decoration: none;
                color: #3a9efd;

            }

            #salary-options a {
                text-decoration: none;
                color: #778899;

            }

            #salary-options a:hover {
                text-decoration: none;
                color: #3a9efd;

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
            }

            @media only screen and (min-width: 769px) {
                .hideHamburger {
                    display: none !important;
                }
            }

            li a {
                color: black;
            }

            a {
                text-decoration: none
            }

            .nav-link:focus,
            .nav-link:hover {
                color: var(--bs-nav-link-hover-color) !important;
            }
        </style>


        <div class="row m-0" style="height: 100%;width:100%;background-color: #f0f0f0;">

            <div class="card displayNone" id="menu-popup" style="border-radius:0px;height: auto; width: auto; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">

                <div class="card-body" style="height: auto;width:auto;margin-top:0px">

                    @auth('emp')
                    <ul class="nav flex-column">

                        <div style="margin-bottom: 30px;margin-top:0px">

                            @livewire('company-logo')
                        </div>

                        @livewire('profile-card')



                        <li class="nav-item" style="text-decoration: none; margin-top: 10px" onclick="changePageTitle1()">

                            <a class="nav-link" href="/">

                                <i class="fas fa-home"></i> Home

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle2()">

                            <a class="nav-link" href="/Feeds">

                                <i class="fas fa-rss"></i> Feeds

                            </a>

                        </li>
                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle8()">

                            <a class="nav-link" href="/PeoplesList">

                                <i class="fas fa-users"></i> People

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle3(item)">
                            <a class="nav-link" onclick="toggleToDoDropdown()">
                                <i class="fas fa-file-alt" id="todo-icon"></i> Todo <i class="fas fa-caret-down" id="todo-caret"></i>
                            </a>
                            <div id="todo-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/tasks" onclick="changePageTitle3('task');">
                                            Tasks
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/employees-review" onclick="changePageTitle3('review');">
                                            Review
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>




                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle12(item)">
                            <a class="nav-link" href="#" onclick="toggleSalaryDropdown()">
                                <i class="fas fa-solid fa-money-bill-transfer" id="salary-icon"></i> Salary <i class="fas fa-caret-down" id="salary-caret"></i>
                            </a>
                            <div id="salary-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle12('itdeclaration')">
                                        <a class="nav-link" href="/formdeclaration" id="itdeclaration" onclick="selectOption(this, 'IT Declaration')">
                                            IT Declaration
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle13('itstatement')">
                                        <a class="nav-link" href="/itstatement" id="itstatement" onclick="selectOption(this, 'IT Statement')">
                                            IT Statement
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('slip')">
                                        <a class="nav-link" href="/slip" id="slip" onclick="selectOption(this, 'Pay Slip')">
                                            Payslips
                                        </a>
                                    </li>


                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('reimbursement')">
                                        <a class="nav-link" href="/reimbursement" id="reimbursement" onclick="selectOption(this, 'Reimbursement')">
                                            Reimbursement
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('investment')">
                                        <a class="nav-link" href="/investment" id="investment" onclick="selectOption(this, 'Proof of Investment')">
                                            Proof of Investment
                                        </a>
                                    </li>

                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle15('salary-revision')">
                                        <a class="nav-link" href="/salary-revision" id="slip" onclick="selectOption(this, 'Salary Revision')">
                                            Salary Revision
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5(item)">
                            <a class="nav-link" onclick="toggleLeaveDropdown()">
                                <i class="fas fa-file-alt" id="leave-icon"></i> Leave <i class="fas fa-caret-down" id="leave-caret"></i>
                            </a>
                            <div id="leave-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/leave-page" onclick="return changePageTitle5('apply');">
                                            Leave Apply
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/leave-balances" onclick="changePageTitle5('balances'); return false;">
                                            Leave Balances
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/leave-calender" onclick="changePageTitle5('calendar'); return false;">
                                            Leave Calendar
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/holiday-calender" onclick="changePageTitle5('holiday'); return false;">
                                            Holiday Calendar
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="/leave-calender" onclick="changePageTitle5('team'); return false;">
                                            @livewire('team-on-leave')
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle6()">

                            <a class="nav-link" href="/Attendance">

                                <i class="fas fa-clock"></i> Attendance</a>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle7()">

                            <a class="nav-link" href="/document">

                                <i class="fas fa-folder"></i> Document Center

                            </a>

                        </li>


                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle9()">

                            <a class="nav-link" href="/HelpDesk">

                                <i class="fas fa-headset"></i> Helpdesk

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle10()">

                            <a class="nav-link" href="/delegates">

                                <i class="fas fa-user-friends"></i> Workflow Delegates

                            </a>

                        </li>

                    </ul>
                    @endauth
                    @auth('hr')

                    <ul class="nav flex-column">

                        <div style="margin-bottom: 30px;margin-top:0px">

                            @livewire('company-logo')
                        </div>
                        @livewire('profile-card')




                        <li class="nav-item" style="text-decoration: none; margin-top: 10px" onclick="changePageTitle1()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-home"></i> Home

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle2()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-rss"></i> Feeds

                            </a>

                        </li>
                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle8()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-users"></i> People

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle3(item)">
                            <a class="nav-link" onclick="toggleToDoDropdown()">
                                <i class="fas fa-file-alt" id="todo-icon"></i> Todo <i class="fas fa-caret-down" id="todo-caret"></i>
                            </a>
                            <div id="todo-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle3('task');">
                                            Tasks
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#-review" onclick="changePageTitle3('review');">
                                            Review
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>




                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle12(item)">
                            <a class="nav-link" href="#" onclick="toggleSalaryDropdown()">
                                <i class="fas fa-solid fa-money-bill-transfer" id="salary-icon"></i> Salary <i class="fas fa-caret-down" id="salary-caret"></i>
                            </a>
                            <div id="salary-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle12('itdeclaration')">
                                        <a class="nav-link" href="#" id="itdeclaration" onclick="selectOption(this, 'IT Declaration')">
                                            IT Declaration
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle13('itstatement')">
                                        <a class="nav-link" href="#" id="itstatement" onclick="selectOption(this, 'IT Statement')">
                                            IT Statement
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('slip')">
                                        <a class="nav-link" href="#" id="slip" onclick="selectOption(this, 'Pay Slip')">
                                            Payslips
                                        </a>
                                    </li>


                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('reimbursement')">
                                        <a class="nav-link" href="#" id="reimbursement" onclick="selectOption(this, 'Reimbursement')">
                                            Reimbursement
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('investment')">
                                        <a class="nav-link" href="#" id="investment" onclick="selectOption(this, 'Proof of Investment')">
                                            Proof of Investment
                                        </a>
                                    </li>

                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle15('salary-revision')">
                                        <a class="nav-link" href="#" id="slip" onclick="selectOption(this, 'Salary Revision')">
                                            Salary Revision
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5(item)">
                            <a class="nav-link" onclick="toggleLeaveDropdown()">
                                <i class="fas fa-file-alt" id="leave-icon"></i> Leave <i class="fas fa-caret-down" id="leave-caret"></i>
                            </a>
                            <div id="leave-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="return changePageTitle5('apply');">
                                            Leave Apply
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle5('balances'); return false;">
                                            Leave Balances
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle5('calendar'); return false;">
                                            Leave Calendar
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle5('holiday'); return false;">
                                            Holiday Calendar
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>


                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle6()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-clock"></i> Attendance</a>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle7()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-folder"></i> Document Center

                            </a>

                        </li>


                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle9()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-headset"></i> Helpdesk

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle10()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-user-friends"></i> Workflow Delegates

                            </a>

                        </li>

                    </ul>

                    @endauth
                    @auth('finance')
                    <ul class="nav flex-column">

                        <div style="margin-bottom: 30px;margin-top:0px">

                            @livewire('company-logo')
                        </div>
                        @livewire('profile-card')

                        <li class="nav-item" style="text-decoration: none; margin-top: 10px" onclick="changePageTitle1()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-home"></i> Home

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle2()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-rss"></i> Feeds

                            </a>

                        </li>
                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle8()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-users"></i> People

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle3(item)">
                            <a class="nav-link" onclick="toggleToDoDropdown()">
                                <i class="fas fa-file-alt" id="todo-icon"></i> Todo <i class="fas fa-caret-down" id="todo-caret"></i>
                            </a>
                            <div id="todo-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle3('task');">
                                            Tasks
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#-review" onclick="changePageTitle3('review');">
                                            Review
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>




                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle12(item)">
                            <a class="nav-link" href="#" onclick="toggleSalaryDropdown()">
                                <i class="fas fa-solid fa-money-bill-transfer" id="salary-icon"></i> Salary <i class="fas fa-caret-down" id="salary-caret"></i>
                            </a>
                            <div id="salary-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle12('itdeclaration')">
                                        <a class="nav-link" href="#" id="itdeclaration" onclick="selectOption(this, 'IT Declaration')">
                                            IT Declaration
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle13('itstatement')">
                                        <a class="nav-link" href="#" id="itstatement" onclick="selectOption(this, 'IT Statement')">
                                            IT Statement
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('slip')">
                                        <a class="nav-link" href="#" id="slip" onclick="selectOption(this, 'Pay Slip')">
                                            Payslips
                                        </a>
                                    </li>


                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('reimbursement')">
                                        <a class="nav-link" href="#" id="reimbursement" onclick="selectOption(this, 'Reimbursement')">
                                            Reimbursement
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('investment')">
                                        <a class="nav-link" href="#" id="investment" onclick="selectOption(this, 'Proof of Investment')">
                                            Proof of Investment
                                        </a>
                                    </li>

                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle15('salary-revision')">
                                        <a class="nav-link" href="#" id="slip" onclick="selectOption(this, 'Salary Revision')">
                                            Salary Revision
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5(item)">
                            <a class="nav-link" onclick="toggleLeaveDropdown()">
                                <i class="fas fa-file-alt" id="leave-icon"></i> Leave <i class="fas fa-caret-down" id="leave-caret"></i>
                            </a>
                            <div id="leave-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="return changePageTitle5('apply');">
                                            Leave Apply
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle5('balances'); return false;">
                                            Leave Balances
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle5('calendar'); return false;">
                                            Leave Calendar
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle5('holiday'); return false;">
                                            Holiday Calendar
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>


                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle6()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-clock"></i> Attendance</a>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle7()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-folder"></i> Document Center

                            </a>

                        </li>


                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle9()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-headset"></i> Helpdesk

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle10()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-user-friends"></i> Workflow Delegates

                            </a>

                        </li>

                    </ul>
                    @endauth
                    @auth('it')


                    <ul class="nav flex-column">

                        <div style="margin-bottom: 30px;margin-top:0px">

                            @livewire('company-logo')
                        </div>
                        @livewire('profile-card')


                        <li class="nav-item" style="text-decoration: none; margin-top: 10px" onclick="changePageTitle1()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-home"></i> Home

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle2()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-rss"></i> Feeds

                            </a>

                        </li>
                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle8()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-users"></i> People

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle3(item)">
                            <a class="nav-link" onclick="toggleToDoDropdown()">
                                <i class="fas fa-file-alt" id="todo-icon"></i> Todo <i class="fas fa-caret-down" id="todo-caret"></i>
                            </a>
                            <div id="todo-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle3('task');">
                                            Tasks
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#-review" onclick="changePageTitle3('review');">
                                            Review
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>




                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle12(item)">
                            <a class="nav-link" href="#" onclick="toggleSalaryDropdown()">
                                <i class="fas fa-solid fa-money-bill-transfer" id="salary-icon"></i> Salary <i class="fas fa-caret-down" id="salary-caret"></i>
                            </a>
                            <div id="salary-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle12('itdeclaration')">
                                        <a class="nav-link" href="#" id="itdeclaration" onclick="selectOption(this, 'IT Declaration')">
                                            IT Declaration
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle13('itstatement')">
                                        <a class="nav-link" href="#" id="itstatement" onclick="selectOption(this, 'IT Statement')">
                                            IT Statement
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('slip')">
                                        <a class="nav-link" href="#" id="slip" onclick="selectOption(this, 'Pay Slip')">
                                            Payslips
                                        </a>
                                    </li>


                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('reimbursement')">
                                        <a class="nav-link" href="#" id="reimbursement" onclick="selectOption(this, 'Reimbursement')">
                                            Reimbursement
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle14('investment')">
                                        <a class="nav-link" href="#" id="investment" onclick="selectOption(this, 'Proof of Investment')">
                                            Proof of Investment
                                        </a>
                                    </li>

                                    <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle15('salary-revision')">
                                        <a class="nav-link" href="#" id="slip" onclick="selectOption(this, 'Salary Revision')">
                                            Salary Revision
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle5(item)">
                            <a class="nav-link" onclick="toggleLeaveDropdown()">
                                <i class="fas fa-file-alt" id="leave-icon"></i> Leave <i class="fas fa-caret-down" id="leave-caret"></i>
                            </a>
                            <div id="leave-options" style="display: none;">
                                <ul style="list-style: none;  margin-left:10px; cursor:pointer;">
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="return changePageTitle5('apply');">
                                            Leave Apply
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle5('balances'); return false;">
                                            Leave Balances
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle5('calendar'); return false;">
                                            Leave Calendar
                                        </a>
                                    </li>
                                    <li class="nav-item" style="text-decoration: none;">
                                        <a class="nav-link" href="#" onclick="changePageTitle5('holiday'); return false;">
                                            Holiday Calendar
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>


                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle6()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-clock"></i> Attendance</a>
                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle7()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-folder"></i> Document Center

                            </a>

                        </li>


                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle9()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-headset"></i> Helpdesk

                            </a>

                        </li>

                        <li class="nav-item" style="text-decoration: none;" onclick="changePageTitle10()">

                            <a class="nav-link" href="#">

                                <i class="fas fa-user-friends"></i> Workflow Delegates

                            </a>

                        </li>

                    </ul>

                    @endauth

                </div>

            </div>

            <div class="col" style="height: 60px; width: auto; background-color:rgb(2, 17, 79)">

                <div class="col" style="display: flex; align-items: center; margin-top:2%;justify-content: start;">
                    <i class="fas fa-bars hideHamburger" style="color: #fff; font-size: 20px; margin: 0px 10px;; cursor: pointer;" onclick="myMenu()"></i>

                    <i style="margin-bottom: 5px; color: white" id="pageIcon"></i>

                    <h6 style="color: white; width: -webkit-fill-available;" id="pageTitle">Home</h6>

                    <h6 style="color: grey; margin-right: 20px;margin-top:5px;width:150px">Quick Links</h6>

                    <div class="notification-icon" style="margin-right: 10px;">

                        <i style="color: white;" class="fas fa-bell"></i>

                    </div>

                    <div class="notification-icon">

                        @livewire('log-out')
                    </div>

                </div>

                <div style="margin-top: 3%; margin-left: 1%; height: 490px; overflow-y: auto;">
                    {{ $slot }}
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

                var newIcon = '<i style="color: white;" class="fas fa-tasks"></i>'

                var newTitle = "To do";

                if (item === 'task') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Tasks";
                } else if (item === 'review') {
                    newIcon = '<i style="color: white;" class="fas fa-file-alt"></i>';
                    newTitle = "Review";
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
                        window.location.href = '/leave-calender';
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


            function toggleLeaveDropdown() {
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

            function toggleToDoDropdown() {
                const salaryOptions = document.getElementById("salary-options");
                const todoOptions = document.getElementById("todo-options");
                const todoCaret = document.getElementById("todo-caret");
                const salaryCaret = document.getElementById("salary-caret");
                const leaveOptions = document.getElementById("leave-options");
                const leaveCaret = document.getElementById("leave-caret");

                if (todoOptions.style.display === "block") {
                    todoOptions.style.display = "none";
                    leaveOptions.style.display = "none";
                    todoCaret.classList.remove("fa-caret-up");
                    todoCaret.classList.add("fa-caret-down");
                } else {
                    todoOptions.style.display = "block";
                    todoCaret.classList.remove("fa-caret-down");
                    todoCaret.classList.add("fa-caret-up");
                }
            }


            function selectOption(option, pageTitle) {
                const accordionItems = document.querySelectorAll('.nav-link');
                // Update the pageTitle
                updatePageTitle(pageTitle);
                // Close the dropdown if open
                toggleLeaveDropdown();
                toggleSalaryDropdown();
            }

            function updatePageTitle(newTitle) {
                document.getElementById("pageTitle").textContent = newTitle;
                localStorage.setItem("pageTitle", newTitle);
            }
        </script>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

@endguest

</html>