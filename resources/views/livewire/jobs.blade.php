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
            border: 1px solid #e0e0e0;
            font-family: Montserrat;

        }

        .job-card:nth-child(even) {
            border: 1px solid #dcdcdc;
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
            background-color: lightgreen;
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

        .close-button {
            position: absolute;
            top: 50px;
            right: 22px;
            font-size: 24px;
            cursor: pointer;
            background-color: #007BFF;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5%;
            font-family: Montserrat;

        }

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
            margin-bottom: 20px;
            font-family: Montserrat;

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
    </style>
    <div>
        <div class="container">
            <button><a href="/emplogin" style="text-decoration: none;
            font-family: Montserrat;
            ">Back</a></button>
            <h2 style="text-align: center;
            font-family: Montserrat;
            ">All Jobs List</h2>
            <div class="job-listings">
                @foreach ($jobs as $job)
                <div class="job-card">
                    <h3 class="job-title">{{ $job->title }}</h3>
                    <p class="job-description">{{ $job->description }}</p>
                    <p class="job-location">Location: {{ $job->location }}</p>
                    <p class="job-salary">Salary: ₹{{ number_format($job->salary, 2) }}</p>
                    <p class="job-company">Company: {{ $job->company_name }}</p>
                    <p class="job-employment-type">Employment Type: {{ $job->employment_type }}</p>
                    <p class="job-posted-at">Posted At: {{ $job->posted_at }}</p>
                    <p class="job-contact-email">Contact Email: {{ $job->contact_email }}</p>
                    <p class="job-contact-phone">Contact Phone: {{ $job->contact_phone }}</p>
                    <p class="job-vacancies">Vacancies: {{ $job->vacancies }}</p>
                    <p class="job-education-requirement">Education Requirement: {{ $job->education_requirement }}</p>
                    <p class="job-experience-requirement">Experience Requirement: {{ $job->experience_requirement }}</p>
                    <p class="job-skills-required">Skills Required: {{ $job->skills_required }}</p>
                    <a wire:click="showJobApplication('{{ $job->job_id }}')" class="apply-button">Apply</a>
                </div>
                @endforeach
            </div>
        </div>
        @if($showDialog)
        <div class="modal-container">
            <div class="modal">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                        <h5 style="margin-left:150px;padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>Apply Job</b></h5>
                        <button wire:click="close" type="button" class="close-button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color: white;">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="max-height: 400px;overflow-y:auto">
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="job-application-container" style="margin-bottom:15px">
                                    <h5 style="margin:0px;text-align: center;">Apply for <strong style="font-size: 15px;color:green">{{ $selectedJob->title }}</strong></h5>
                                    <form wire:submit.prevent="submitApplication">
                                        <div class="form-group">
                                            <label style="font-size: 13px;" for="name">Full Name</label>
                                            <input type="text" class="form-control" id="name" wire:model="name">
                                            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label style="font-size: 13px;" for="email">Email Address</label>
                                            <input type="email" class="form-control" id="email" wire:model="email">
                                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label style="font-size: 13px;" for="email">Address</label>
                                            <input type="text" class="form-control" id="address" wire:model="address">
                                            @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                        <div class="form-group">
                                            <label style="font-size: 13px;" for="resume">Resume</label>
                                            <input style="font-size:13px" type="file" class="form-control" id="resume" wire:model="resume">
                                            @error('resume') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>
                                        @if ($resume)
                                        <div>
                                            <img height="100" width="100" src="{{ $resume->temporaryUrl() }}" alt="Image Preview" style="max-width: 300px;">
                                        </div>
                                        @endif

                                        <div class="row">
                                            <button style="margin-left:30%;font-size: 13px;" class="btn btn-danger" type="button" wire:click="close">Cancel</button>
                                            <button wire:click="applyJob" style="font-size: 13px;" type="button" class="btn btn-primary">Apply</button>
                                        </div>
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
    </div>
</div>