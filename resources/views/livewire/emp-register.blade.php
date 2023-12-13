<div>
    <style>
        .form-control {
            width: 200px;
            height: 25px;
            font-size: 10px
        }

        .form-check-label {}

        body {
            font-family: 'Roboto', sans-serif;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            font-size: 12px;
        }

        .input-group {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .form-group label {
            font-weight: 500;
            color: #5f6c79;
            margin-bottom: 10px;
        }

        a:hover {
            color: green;
        }

        .emp {
            display: flex;
            flex-direction: column;
            padding: 5px;
            justify-content: space-between;
            margin: 0 auto;
            gap: 7px;
        }

        .employee-details {
            border: 1px solid #ccc;
            padding: 5px 10px;
            font-size: 0.925rem;
            border-radius: 10px;
            background: #fff;
        }

        .employee-details h5 {
            font-weight: 400;
            font-size: 18px;
            color: rgb(2, 17, 79);
        }

        .alert-container {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 300px;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border-radius: 5px;
            text-align: center;
            display: none;
            /* Initially hide the container */
        }

        .close-btn {
            cursor: pointer;
            float: right;
            font-weight: bold;
            font-size: 18px;
        }

        .close-btn:hover {
            color: #fff;
            /* Change color on hover */
        }

        .view-button {
            background-color: rgb(2, 17, 79);
            color: white;
            border-radius: 7px;
            border: none;
            cursor: pointer;
            margin-left: 10px;
            padding: 4px 10px;
            font-size: 0.825rem;
            transition: background-color 0.3s ease-in-out;
        }

        .view-button:hover {
            background-color: #0056b3;
            color: #fff;
        }

        .placeholder-small::placeholder {
            font-size: 0.625rem;
            /* Adjust the font size as needed */
            color: #6c757d;
            /* Muted color */
        }

        /* Add this CSS to your stylesheet or create a new CSS file */
        .job-posting-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f5f5f5;
            margin-bottom: 15px;
            font-size: 12px;

        }

        .job-posting-form .form-group {
            margin-bottom: 20px;
        }

        .job-posting-form label {
            font-weight: bold;
        }

        .job-posting-form input[type="text"],
        .job-posting-form input[type="number"],
        .job-posting-form select,
        .job-posting-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 12px;
        }

        .img-preview {
            max-width: 100%;
            height: 50px;
            margin-top: 10px;
        }

        .job-posting-form select {
            height: 40px;
        }

        .job-posting-form .btn-primary {
            background-color: rgb(2, 17, 79);
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .text-danger {
            font-size: 12px;
        }

        .job-posting-form .btn-primary:hover {
            background-color: #002D91;
        }

        #success-message {
            position: relative;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin: 10px 0;
            text-align: center;
        }

        #success-message .close-message {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: green;
        }

        .custom-radio {
        margin-right: 10px; /* Adjust the margin to control the gap between radio buttons */
    }

    .custom-radio input {
        width: 10px; /* Adjust the width to decrease the size of the radio buttons */
        height: 10px; /* Adjust the height to decrease the size of the radio buttons */
    }
    </style>

    <div class="container" style="background-color: #02134F; color: white;margin:0%;max-width:100%;padding:2px">
        <div style="display: flex; align-items: start; justify-content: start;">
            <img src="{{ $hrDetails->company_logo }}" alt="Logo"
                style="width: 200px; height: 50px; margin-right: 10px;">
            <h1 style="font-size: 20px; margin-left:25%;margin-top:10px">HR - {{ $hrDetails->hr_name }}</h1>
        </div>
    </div>
    <div style="margin-top:5px;margin-bottom:5px">
        <button
            style="width: 230px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;margin-left:23%"><a
                href="/JobSeekersAppliedJobs" style="text-decoration: none;color:white">Job Seekers Applied
                Jobs</a></button>
        <button style="width:200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a
                href="/VendorsSubmittedCVs" style="text-decoration: none;color:white">Vendors Submitted CVs</a></button>
        <button style="width:200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a
                href="/empregister" style="text-decoration: none;color:white">Employee Register</a></button>
        <button style="width:200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a
                href="/emplist" style="text-decoration: none;color:white">Employees List</a></button>
        <button style="width: 100px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"
            wire:click="logout">Logout</button>
    </div>
    @if (Session::has('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible fade show"
            style="
            height: 30px;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: lightgreen;
            color: white;
            margin-bottom: 5px;
            font-size: 12px;">
            {{ Session::get('success') }}
        </div>
    @endif
    <div>
        <div class="container" style="padding:0px;margin:30px 0;">
            <div id="alert-container" class="alert-container">
                <span id="close-btn" class="close-btn">&times;</span>
                @if (session()->has('emp_success'))
                    {{ session('emp_success') }}
                @endif
            </div>
            <script>
                // Wait for the document to be ready (if using jQuery)
                $(document).ready(function() {
                    // Show the alert container
                    $('#alert-container').fadeIn();

                    // Set a timeout to hide the alert after a certain duration (e.g., 5000 milliseconds)
                    setTimeout(function() {
                        $('#alert-container').fadeOut();
                    }, 5000); // Adjust the duration as needed

                    // Close the alert on close button click
                    $('#close-btn').on('click', function() {
                        $('#alert-container').fadeOut();
                    });
                });
            </script>

            <div class="container " style="padding:10px;background:#f2f2f2;border:1px solid #ccc;margin-left:60px">
                <div class="col-md-12">
                    <div class="emp-container" style="padding:0; margin:0 auto;">
                        <div style="display:flex;">
                            {{-- <a style="text-decoration:none;font-weight:600;color:#00459c;"href="{{route('employee-list-page')}}"><button class="view-button">View Employees</button></a>
                         <a style="text-decoration:none;font-weight:600;color:#00459c;"href="{{route('contractor-page')}}"><button class="view-button">View Contractors</button></a> --}}
                        </div>
                        <div class="card-header"
                            style="background-color: #00234f;padding:7px;width:50%;margin-left:20%; border-radius:20px;">
                            <h5 class="mb-0" style="text-align: center;color:white;">Employee Registration Form</h5>
                        </div>
                        <div class="card-body">
                            <form wire:submit.prevent="register" enctype="multipart/form-data">
                                <div class="row" style="margin-top:10px">
                                    <div class="col-md-3">
                                        <!-- Your first column form elements -->
                                        <div class="employee-details">
                                            <div style="margin:5px 0 20px 0;">
                                                <h5>Employee Details</h5>
                                            </div>
                                            <div class="form-group">
                                                <label for="first_name">First Name :</label>
                                                <input type="text" class="form-control" wire:model="first_name"
                                                    style="margin-bottom:10px;width:200px;height:25px">
                                                @error('first_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="last_name">Last Name :</label>
                                                <input type="text" class="form-control" wire:model="last_name"
                                                    style="margin-bottom:10px;;">
                                                @error('last_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="mobile_number">Phone Number :</label>
                                                <input type="text" class="form-control" wire:model="mobile_number"
                                                    style="margin-bottom:10px;;">
                                                @error('mobile_number')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="alternate_mobile_number">Alternate Phone Number :</label>
                                                <input type="text" class="form-control"
                                                    wire:model="alternate_mobile_number" style="margin-bottom:10px;;">
                                                @error('alternate_mobile_number')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="education">Education :</label>
                                                <input type="text" class="form-control" wire:model="education"
                                                    style="margin-bottom:10px;;">
                                                @error('education')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="experience">Experience :</label>
                                                <input type="text" class="form-control" wire:model="experience"
                                                    style="margin-bottom:10px;;">
                                                @error('experience')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email :</label>
                                                <input type="email" class="form-control" wire:model="email"
                                                    style="margin-bottom:10px;;">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Company Email :</label>
                                                <input type="email" class="form-control" wire:model="company_email"
                                                    style="margin-bottom:10px;;">
                                                @error('company_email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="aadhar_no">Aadhar Number :</label>
                                                <input type="text" class="form-control" wire:model="aadhar_no"
                                                    style="margin-bottom:10px;;">
                                                @error('aadhar_no')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <!-- Password -->
                                            {{-- <div class="form-group">
                                                <label for="password">Password :</label>
                                                <input type="password" class="form-control" wire:model="password"
                                                    style="margin-bottom:10px;;">
                                                @error('password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div> --}}
                                            <div class="form-group">
                                                <div class="inpu-group">
                                                    <label>Gender :</label><br>
                                                    <div class="form-check form-check-inline"style="margin-top:10px;">
                                                        <input class="form-check-input" type="radio"
                                                            wire:model="gender" value="Male" id="maleRadio"
                                                            name="gender">
                                                        <label class="form-check-label" for="maleRadio">Male</label>
                                                    </div>
                                                    <div class="form-check form-check-inline"
                                                        style="margin-top:10px;">
                                                        <input class="form-check-input" type="radio"
                                                            wire:model="gender" value="Female" id="femaleRadio"
                                                            name="gender">
                                                        <label class="form-check-label"
                                                            for="femaleRadio">Female</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                @error('gender')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            {{-- Upload Employee Image --}}
                                            <div class="form-group">
                                                <label for="image">Employee Image:</label>
                                                <input type="file" class="form-control-file" wire:model="image"
                                                    style="margin-bottom:10px;">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            @if ($image)
                                            <div>
                                                <img style="height:90px;width:80px"
                                                    src="{{ $image->temporaryUrl() }}" alt="Image Preview"
                                                    style="max-width: 300px;">
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <!-- Your first column form elements -->
                                        <div class="employee-details">

                                            <div style="margin:5px 0 20px 0">
                                                <h5>Job Details</h5>
                                            </div>

                                            <div class="form-group">
                                                <label for="hire_date">Hire Date :</label>
                                                <input type="date" class="form-control" wire:model="hire_date"
                                                    max="{{ date('Y-m-d') }}" style="margin-bottom:10px;">
                                                @error('hire_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="employee_type">Employee Type:</label>
                                                <div class="input-group">
                                                    <div class="form-check form-check-inline custom-radio">
                                                        <input class="form-check-input" type="radio" id="full-time" value="full-time" wire:model="employee_type" checked>
                                                        <label class="form-check-label" for="full-time">Full-Time</label>
                                                    </div>
                                                    <div class="form-check form-check-inline custom-radio">
                                                        <input class="form-check-input" type="radio" id="part-time" value="part-time" wire:model="employee_type">
                                                        <label class="form-check-label" for="part-time">Part-Time</label>
                                                    </div>
                                                    <div class="form-check form-check-inline custom-radio">
                                                        <input class="form-check-input" type="radio" id="contract" value="contract" wire:model="employee_type">
                                                        <label class="form-check-label" for="contract">Contract</label>
                                                    </div>
                                                </div>
                                                @error('employee_type')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                   <div class="form-group">
                                                <label for="employee_status">Employee Status:</label>
                                                <div class="input-group">
                                                    <div class="form-check form-check-inline custom-radio">
                                                        <input class="form-check-input" type="radio" id="active" value="active" wire:model="employee_status"  checked>
                                                        <label class="form-check-label" for="active">Active</label>
                                                    </div>
                                                    <div class="form-check form-check-inline custom-radio">
                                                        <input class="form-check-input" type="radio" id="on-leave" value="on-leave" wire:model="employee_status">
                                                        <label class="form-check-label" for="on-leave">On Leave</label>
                                                    </div>
                                                    <div class="form-check form-check-inline custom-radio">
                                                        <input class="form-check-input" type="radio" id="terminated" value="terminated" wire:model="employee_status">
                                                        <label class="form-check-label" for="terminated">Terminated</label>
                                                    </div>
                                                </div>
                                                @error('employee_status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="department">Department :</label>
                                                <input type="text" class="form-control" wire:model="department"
                                                    style="margin-bottom:10px;;">
                                                @error('department')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="job_title">Job Title :</label>
                                                <input type="text" class="form-control" wire:model="job_title"
                                                    style="margin-bottom:10px;;">
                                                @error('job_title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="job_location">Job Location :</label>
                                                <input type="text" class="form-control" wire:model="job_location"
                                                    style="margin-bottom:10px;;">
                                                @error('job_location')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="company_id">Company Id :</label>
                                                <select wire:click="selectedCompany" class="form-control"
                                                    wire:model="company_id" style="margin-bottom: 10px;">
                                                    <option value="">Select Company</option>
                                                    <!-- Add a default option -->
                                                    @foreach ($companieIds as $id)
                                                        <option value="{{ $id->company_id }}">{{ $id->company_id }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('company_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="company_name">Company Name :</label>
                                                <input type="text" class="form-control" wire:model="company_name"
                                                    style="margin-bottom:10px;;" readonly>
                                                @error('company_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="manager_id">Manager Id :</label>
                                                <select wire:change="selectedCompany" class="form-control"
                                                    wire:model="manager_id" style="margin-bottom: 10px;">
                                                    <option>Select Manager</option>
                                                    <!-- Add a default option -->
                                                    @if ($managerIds != null)
                                                        @foreach ($managerIds as $id)
                                                            <option value="{{ $id->emp_id }}">
                                                                {{ $id->first_name }} {{ $id->last_name }}
                                                                #({{ $id->emp_id }})
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('manager_id')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="report_to">Report To :</label>
                                                <input readonly type="text" class="form-control"
                                                    wire:model="report_to" style="margin-bottom:10px;;">
                                                @error('report_to')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>International Employee :</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            wire:model="inter_emp" value="yes" id="yesRadio"
                                                            name="inter_emp">
                                                        <label class="form-check-label" for="yesRadio">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            wire:model="inter_emp" value="no" id="noRadio"
                                                            name="inter_emp" checked>
                                                        <label class="form-check-label" for="noRadio">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                @error('inter_emp')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <!-- Your first column form elements -->
                                        <div class="employee-details">
                                            <div style="margin:5px 0 20px 0">
                                                <h5>Employee Personal Details</h5>
                                            </div>

                                            <div class="form-group">
                                                <label for="date_of_birth">Date of Birth :</label>
                                                <input type="date" class="form-control" wire:model="date_of_birth"
                                                    max="{{ date('Y-m-d') }}" style="margin-bottom:10px;">
                                                @error('date_of_birth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="blood_group">Blood Group :</label>
                                                <input type="text" class="form-control" wire:model="blood_group"
                                                    style="margin-bottom:10px;">
                                                @error('blood_group')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="religion">Religion :</label>
                                                <input type="text" class="form-control" wire:model="religion"
                                                    style="margin-bottom:10px;">
                                                @error('religion')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="nationality">Nationality :</label>
                                                <input type="text" class="form-control" wire:model="nationality"
                                                    style="margin-bottom:10px;">
                                                @error('nationality')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>Martial Status:</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            wire:model="marital_status" value="unmarried"
                                                            id="unmarriedRadio" name="marital_status_group">
                                                        <label class="form-check-label"
                                                            for="unmarriedRadio">Single</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            wire:model="marital_status" value="married"
                                                            id="marriedRadio" name="marital_status_group">
                                                        <label class="form-check-label"
                                                            for="marriedRadio">Married</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                @error('marital_status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <label for="spouse">Spouse:</label>
                                                <input type="text" class="form-control" wire:model="spouse"
                                                    style="margin-bottom:10px;">
                                                @error('spouse')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>Physically Challenge:</label><br>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            wire:model="physically_challenge" value="Yes"
                                                            id="yesRadio" name="physically_challenge_group">
                                                        <label class="form-check-label" for="yesRadio">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                            wire:model="physically_challenge" value="No"
                                                            id="noRadio" name="physically_challenge_group" checked>
                                                        <label class="form-check-label" for="noRadio">No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                @error('physically_challenge')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-md-3">
                                        <!-- Your first column form elements -->
                                        <div class="employee-details">
                                            <div style="margin:5px 0 20px 0">
                                                <h5>Employee Address</h5>
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Address :</label>
                                                <input type="text" class="form-control" wire:model="address"
                                                    style="margin-bottom:10px;">
                                                @error('address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="city">City :</label>
                                                <input type="text" class="form-control" wire:model="city"
                                                    style="margin-bottom:10px;">
                                                @error('city')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="state">State :</label>
                                                <input type="text" class="form-control" wire:model="state"
                                                    style="margin-bottom:10px;">
                                                @error('state')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="postal_code">Pin Code :</label>
                                                <input type="text" class="form-control" wire:model="postal_code"
                                                    style="margin-bottom:10px;">
                                                @error('postal_code')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="country">Country :</label>
                                                <input type="text" class="form-control"
                                                    wire:model="country"style="margin-bottom:10px;">
                                                @error('country')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>




                                </div>
                        </div>
                    </div>
                    <div style="text-align: center; margin-top:20px;">
                        <!-- Your Livewire component content -->
                        <button type="submit" class="btn btn-primary" wire:loading.attr="disabled">Save</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
