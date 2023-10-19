<div>
    <style>
        .text-danger {
            font-size: 12px;
            color: red;
            font-family: Montserrat;
        }

        .job-listings {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(600px, 1fr));
            grid-gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
            font-family: Montserrat;
            font-size: 12px;

        }

        /* Add custom border colors for variation */
        .job-card:nth-child(odd) {
            border: 3px solid #e0e0e0;
            font-family: Montserrat;

        }

        .job-card:nth-child(even) {
            border: 3px solid #dcdcdc;
            font-family: Montserrat;

        }

        /* Job card styling */
        .job-card {
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 0 0 20px;
            font-family: Montserrat;

            /* Add margin to separate cards */
            /* Rest of your styles... */
        }

        /* Job card hover effect */
        .job-card:hover {
            border-color: rgb(2, 17, 79);
            font-family: Montserrat;

            /* Change border color on hover */
        }

        /* Job title style */
        .job-title {
            font-size: 20px;
            font-weight: bold;
            color: rgb(2, 17, 79);
            margin-bottom: 10px;
            font-family: Montserrat;

        }

        /* Common style for job details */
        .job-details {
            font-size: 16px;
            margin-top: 5px;
            font-family: Montserrat;

        }

        .job-description {
            margin-top: 10px;
            font-family: Montserrat;

        }

        /* Apply button style */
        .apply-button {
            background-color: rgb(2, 17, 79);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            width: 90%;
            text-align: center;
            font-family: Montserrat;

        }

        .apply-button:hover {
            background-color: rgba(38, 66, 177, 0.838);
            font-family: Montserrat;

        }

        /* Modal styles */
        .modal-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            background: rgba(0, 0, 0, 0.5);
            font-family: Montserrat;

        }

        .modal {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            padding: 20px;
            position: relative;
            font-family: Montserrat;

        }


        .cancel {
            position: absolute;
            top: 45px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
            background-color: white;
            color: red;
            padding: 3px;
            border: 2px solid black;
            border-radius: 5%;
            font-family: Montserrat;
            height: 20px;
            width: 24px;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        /* Custom CSS */
        .job-list {
            width: 100%;
            /* Make the table fill its container width */
            margin-top: 10px;
            /* Add some space between the table and other content */
            font-size: 14px;
        }

        .job-list th {
            background-color: #007BFF;
            color: white;
            font-size: 14px;
        }

        .job-list td {
            vertical-align: middle;
            /* Center cell content vertically */
            padding: 10px;
            /* Add padding to cells */
        }

        .job-list tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
            /* Add alternating row background color */
        }

        /* Add more CSS styles as needed */

        /* Style for the job application container */
        .job-application-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: Montserrat;

        }

        /* Style for the form elements */
        .form-group {
            margin-bottom: 5px;
            font-family: Montserrat;
            padding: 8px;

        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            font-family: Montserrat;

        }

        .btn-primary {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            font-family: Montserrat;

        }

        .blurred-backdrop {
            backdrop-filter: blur(5px);
        }


        .btn-danger {
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            font-family: Montserrat;

        }

        .close-button {
            position: absolute;
            top: 45px;
            right: 20px;
            font-size: 24px;
            cursor: pointer;
            background-color: white;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5%;
            font-family: Montserrat;
            height: 15px;
            text-align: center;
            color: red;
            border: 2px solid black;
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .close-button span {
            text-align: center;
        }


        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }




        #error-message {
            position: relative;
            background-color: #f44336;
            color: white;
            padding: 10px;
            margin: 10px 0;
            text-align: center;
        }

        #error-message .close {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: red;
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

        .subtitle {
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
            /* Semi-Bold */
        }
    </style>
    <div>
        <div class="row" style="margin-left: 85%;">
            <button wire:click="open" style="width: 100px; border-radius: 5px; margin: 0; background-color: rgb(2, 17, 79); color: white;">Applied Jobs</button>
            <button style="width: 80px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;" wire:click="logout">Logout</button>
        </div>
        @if($showDialog)
        <div class="modal-container">
            <div class="modal">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 30px">
                        <h5 style="text-align:center;padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>My Applied Jobs</b></h5>
                        <span wire:click="close" class="close-button" style="text-align: center;margin-bottom:10px" aria-hidden="true" style="color: white;">×</span>

                    </div>
                    <div class="modal-body" style="max-height: 400px;overflow-y:auto">
                        <div class="modal-body">
                            <div class="form-group">
                                <div style="margin-bottom: 5px">
                                    <form>
                                        @if(count($appliedJobs) > 0)
                                        <table class="table table-bordered table-striped job-list">
                                            <thead>
                                                <tr>
                                                    <th style="font-size: 12px;text-align:center">Job Title</th>
                                                    <th style="font-size: 12px;text-align:center">Company Name</th>
                                                    <th style="font-size: 12px;text-align:center">Applied Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($appliedJobs as $appliedJob)
                                                <tr>
                                                    <td style="font-size: 12px;text-align:center">{{ $appliedJob->job_title }}</td>
                                                    <td style="font-size: 12px;text-align:center">{{ $appliedJob->company_name }}</td>
                                                    <td style="font-size: 12px;text-align:center">{{ $appliedJob->created_at->format('d-m-Y') }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        @else
                                        <p>You haven't applied for any jobs yet.</p>
                                        @endif
                                    </form>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show blurred-backdrop"></div>
        @endif
        @if($showSuccessMessage)
        <div class="alert alert-success" id="success-message">
            Your job application has been submitted successfully!
            <button class="close-message" wire:click="dismissMessage">×</button>
        </div>
        @elseif ($errors->has('duplicate'))
        <div class="alert alert-danger" id="error-message">
            {{ $errors->first('duplicate') }}
            <button class="close" wire:click="dismissError">×</button>
        </div>
        @endif




        <div class="container">
            <h2 style="text-align: center;
            font-family: Montserrat;
            ">All Jobs List</h2>
            <div class="job-listings">
                @foreach ($jobs as $job)
                <div class="job-card">
                    <h3 class="job-title">{{ $job->title }}</h3>
                    <p class="job-description">{{ $job->description }}</p>
                    <p class="job-location"><strong class="subtitle">Location:</strong> {{ $job->location }}</p>
                    <p class="job-salary"><strong  class="subtitle">Salary:</strong> ₹{{ number_format($job->salary, 2) }} PA</p>
                    <p class="job-company"><strong  class="subtitle">Company:</strong> {{ $job->company_name }}</p>
                    <p class="job-employment-type"><strong  class="subtitle">Employment Type:</strong> {{ $job->job_type }}</p>
                    <p class="job-posted-at"><strong  class="subtitle">Posted At:</strong> {{ $job->posted_at }}</p>
                    <p class="job-contact-email"><strong  class="subtitle">Contact Email:</strong> {{ $job->contact_email }}</p>
                    <p class="job-contact-phone"><strong  class="subtitle">Contact Phone:</strong> {{ $job->contact_phone }}</p>
                    <p class="job-vacancies"><strong  class="subtitle">Vacancies:</strong> {{ $job->vacancies }}</p>
                    <p class="job-education-requirement"><strong  class="subtitle">Education Requirement:</strong> {{ $job->education_requirement }}</p>
                    <p class="job-experience-requirement"><strong  class="subtitle">Experience Requirement:</strong> {{ $job->experience_requirement }}</p>
                    <p class="job-skills-required"><strong  class="subtitle">Skills Required:</strong> {{ $job->skills_required }}</p>
                    <a wire:click="showJobApplication('{{$job->job_id}}')" class="apply-button">Apply</a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>