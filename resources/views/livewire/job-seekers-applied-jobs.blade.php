<div>
    <style>
        #success-message,
        #error-message,
        #success-exam-message {
            position: relative;
            padding: 10px;
            margin: 10px 0;
            text-align: center;
        }

        #success-message {
            background-color: #4CAF50;
            color: white;
        }

        #success-exam-message {
            background-color: blue;
            color: white;
        }

        #error-message {
            background-color: #f44336;
            color: white;
        }

        .close-message {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: green;
        }

        .close-exam-message {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: blue;
        }

        .close {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: red;
        }

        .text-danger {
            font-size: 12px;
        }

        .input-fields {
            width: 100%;
        }

        /* Styles for the modal container */
        .modal {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1050;
            /* Ensure the modal appears above other elements */
            overflow-y: auto;
        }

        /* Center the modal dialog vertically and horizontally */
        .modal-dialog {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
        }

        /* Styles for the modal content */
        .modal-content {
            background-color: #fff;
            max-width: 80%;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        /* Styles for the modal header */
        .modal-header {
            background-color: rgb(2, 17, 79);
            color: white;
            height: 50px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 15px;
            border-radius: 5px 5px 0 0;
        }

        /* Styles for the close button */
        .modal-header .close {
            color: white;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
        }

        /* Styles for the modal body */
        .modal-body {
            padding: 20px;
            font-size: 12px;
        }

        /* Styles for the input fields and Save button */
        .modal-body input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Style the Save button */
        .modal-body button {
            background-color: rgb(2, 17, 79);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        /* Add any additional styles as needed */


        .container {
            font-family: 'Montserrat';
        }

        /* Example custom styles for the table */
        .table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
            font-size: 12px;
        }

        .table th,
        .table td {
            padding: 10px;
            font-size: 14px;
            text-align: center;
            border: 1px solid #ddd;
            font-size: 12px;
        }

        .table th {
            background-color: #f2f2f2;
            font-size: 12px;
            color: #333;
        }

        .table tr:nth-child(even) {
            background-color: #f9f9f9;
            font-size: 12px;
        }

        .table tr:nth-child(odd) {
            background-color: #fff;
            font-size: 12px;
        }

        .job-seekers-applied-jobs {
            font-family: 'Montserrat';
        }

        .container-header {
            background-color: #02134F;
            color: white;
            padding: 10px;
            margin: 0;
        }

        .header-content {
            display: flex;
            align-items: center;
        }

        .header-logo {
            width: 200px;
            height: 50px;
            margin-right: 10px;
        }

        .header-title {
            font-size: 20px;
            margin-left: 24%;
            margin-top: 10px;
        }

        .back-button {
            width: 80px;
            border-radius: 5px;
            background-color: #02134F;
            color: white;
            margin-top: 5px;
            margin-bottom: 5px;
            margin-left: 93%;
        }

        .back-button a {
            text-decoration: none;
            color: white;
        }

        .preview-button {
            padding: 5px 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 9px;
            width: 100px;
            margin-bottom: 5px;
        }

        .preview-button:hover {
            background-color: #0056b3;
        }

        .download-button {
            padding: 5px 10px;
            background-color: #02B802;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 9px;
            width: 100px;
        }

        .download-button:hover {
            background-color: #027D02;
        }

        .status {
            border: none;
            border-radius: 5px;
        }
    </style>

    <div class="container" style="background-color: #02134F; color: white;margin:0%;max-width:100%;padding:2px">
        <div style="display: flex; align-items: start; justify-content: start;">
            <img src="{{$hrDetails->company_logo}}" alt="Logo" style="width: 200px; height: 50px; margin-right: 10px;">
            <h1 style="font-size: 20px; margin-left:25%;margin-top:10px">HR - {{$hrDetails->hr_name}}</h1>
        </div>
    </div>
    <div style="margin-top:5px;margin-bottom:5px">
        <button style="width: 100px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;margin-left:68%"><a href="/PostJobs" style="text-decoration: none;color:white">Post Jobs</a></button>
        <button style="width:200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a href="/VendorsSubmittedCVs" style="text-decoration: none;color:white">Vendors Submitted CVs</a></button>
        <button style="width: 80px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;" wire:click="logout">Logout</button>
    </div>

    @if($showSuccessMessage)
    <div class="alert alert-success" id="success-message">
        Job application has been successfully shortlisted!
        <button class="close-message" wire:click="dismissMessage">×</button>
    </div>
    @elseif ($errors->has('duplicate'))
    <div class="alert alert-danger" id="error-message">
        {{ $errors->first('duplicate') }}
        <button class="close" wire:click="dismissError">×</button>
    </div>
    @elseif($showExaminationMessage)
    <div style="text-align: center;" class="alert alert-success" id="success-exam-message">
        The examination link has been successfully sent!
        <button class="close-exam-message" wire:click="dismissExamMessage">×</button>
    </div>
    @endif
    <div class="job-seekers-applied-jobs">
        <h5 class="text-2xl font-semibold mb-4" style="text-align: center;">Job Seekers Applied Jobs</h5>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Jobseeker ID</th>
                    <th>Full Name</th>
                    <th>Job ID</th>
                    <th>Job Title</th>
                    <th>Company Name</th>
                    <th>CV</th>
                    <th>Applied Date</th>
                    <th>Expiry Date</th>
                    <th>Application Details</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appliedJobs as $appliedJob)
                <tr>
                    <td>{{ $appliedJob->user->user_id }}</td>
                    <td>{{ ucwords($appliedJob->user->full_name) }}</td>
                    <td>{{ $appliedJob->job_id }}</td>
                    <td>{{ $appliedJob->job_title }}</td>
                    <td>{{ $appliedJob->company_name }}</td>
                    <td style="max-width: 150px;">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="{{ asset('storage/' . $appliedJob->user->resume) }}" target="_blank">
                                        <button class="preview-button">Preview CV</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <button class="download-button" wire:click="downloadResumeHTML('{{ $appliedJob->user->resume }}')">Download CV</button>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td> {{ date('d-M-Y', strtotime($appliedJob->created_at)) }}</td>
                    <td> {{ date('d-M-Y', strtotime($appliedJob->job->expire_date)) }}</td>
                    <td>
                        @if($appliedJob->application_status == "Shortlisted")
                        <button class="status" style="background-color: lightgreen;color:white" disabled>Shortlist</button>
                        @if($appliedJob->exam_link=='')
                        <button wire:click="openExamPopUp('{{$appliedJob->job_id}}')" class="status" style="background-color:  blue;color:white">Examination</button>
                        @else
                        <button class="status" style="background-color:  blue;color:white" disabled>Examination</button>
                        @endif
                        @else
                        <button wire:click="open('{{$appliedJob->id}}')" class="status" style="background-color: green;color:white">Shortlist</button>
                        @endif
                        @if($appliedJob->application_status=="Rejected")
                        <button class="status" style="background-color:  #FF9999;color:white" disabled>Reject</button>
                        @else
                        <button wire:click="reject('{{$appliedJob->id}}')" class="status" style="background-color: red;color:white">Reject</button>
                        @endif
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        @if($isOpen=="true")
        <div class="modal" tabindex="-1" role="dialog" style="display: block;overflow-y:auto">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                        <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>Add Interview Details</b></h5>
                        <button type="button" wire:click="close">
                            <span aria-hidden="true" style="color: black;">×</span>
                        </button>
                    </div>
                    <div style="padding: 5px;">
                        <label style="font-size: 12px;" for="date">Date:</label>
                        <input style="font-size: 12px;" class="input-fields" wire:model="date" type="date" id="date" name="date"><br>
                        @error('date') <span class="text-danger">{{ $message }}</span> @enderror <br>

                        <label style="font-size: 12px;" for="time">Time:</label>
                        <input style="font-size: 12px;" class="input-fields" wire:model="time" type="time" id="time" name="time"><br>
                        @error('time') <span class="text-danger">{{ $message }}</span> @enderror <br>

                        <label style="font-size: 12px;" for="location">Location Link:</label>
                        <input style="font-size: 12px;" class="input-fields" wire:model="location_link" type="text" id="location" name="location"><br>
                        @error('location_link') <span class="text-danger">{{ $message }}</span> @enderror <br>

                        <label style="font-size: 12px;" for="instructions">Instructions:</label>
                        <input style="font-size: 12px;" class="input-fields" wire:model="instructions" type="text" id="instructions" name="instructions"><br>
                        @error('instructions') <span class="text-danger">{{ $message }}</span> @enderror <br>

                        <label style="font-size: 12px;" for="companyWebsite">Company Website:</label>
                        <input style="font-size: 12px;" class="input-fields" wire:model="company_website" type="text" id="companyWebsite" name="companyWebsite"><br>
                        @error('company_website') <span class="text-danger">{{ $message }}</span> @enderror <br>

                        <div class="row" style="text-align: center">
                            <div class="col">
                                <button type="button" wire:click="submit" style="background-color: blue;color:white;border:none;border-radius:5px">
                                    Send
                                </button>
                            </div>
                            <div class="col">
                                <button type="button" wire:click="close" style="background-color: red;color:white;border:none;border-radius:5px">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif



    @if($examPopUp=="true")
    <div class="modal" tabindex="-1" role="dialog" style="display: block;overflow-y:auto">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                    <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>Examination Link</b></h5>
                    <button type="button" wire:click="closeExamPopUp">
                        <span aria-hidden="true" style="color: black;">×</span>
                    </button>
                </div>
                <div style="padding: 5px;">
                    <label style="font-size: 12px;" for="date">Date:</label>
                    <input style="font-size: 12px;" class="input-fields" wire:model="examDate" type="date" id="date" readonly><br>
                    @error('examDate') <span class="text-danger">{{ $message }}</span> @enderror <br>

                    <label style="font-size: 12px;" for="time">Time:</label>
                    <input style="font-size: 12px;" class="input-fields" wire:model="examTime" type="time" readonly><br>
                    @error('examTime') <span class="text-danger">{{ $message }}</span> @enderror <br>

                    <label style="font-size: 12px;" for="location">Examination Link:</label>
                    <input style="font-size: 12px;" class="input-fields" wire:model="examLink" type="text"><br>
                    @error('examLink') <span class="text-danger">{{ $message }}</span> @enderror <br>

                    <div class="row" style="text-align: center">
                        <div class="col">
                            <button type="button" wire:click="sendExamLink" style="background-color: blue;color:white;border:none;border-radius:5px">
                                Send
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" wire:click="closeExamPopUp" style="background-color: red;color:white;border:none;border-radius:5px">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
</div>
</div>