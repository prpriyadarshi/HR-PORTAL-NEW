<div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        
        /* Style for the notification pop-up */
        .card {
            background-color: white;
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            margin-right: 11%;
            width: 450px;
            margin-top: 50px;
            padding: 5px;
            border: 1px solid grey;
            border-radius: 10px;
        }

        /* Style for the badge (notification count) */
        .badge {
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 5px 8px;
            font-size: 8px;
        }

        /* Global styles */
        body {
            font-family: 'Montserrat';
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        /* Header styles */
        .header {
            background-color: #02454f;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-family: 'Montserrat';

        }

        .header h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            font-family: 'Montserrat';

        }

        /* Navigation styles */
        .navigation {
            display: flex;
            justify-content: flex-end;
            margin: 20px 0;
        }

        .navigation button {
            font-size: 14px;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-left: 10px;
            cursor: pointer;
            background-color: #0077b6;
            color: #fff;
            text-decoration: none;
        }


        /* Job card styles */
        .job-listings {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
            font-family: 'Montserrat';

        }

        .job-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            font-family: 'Montserrat';

        }

        .job-card:hover {
            border: 2px solid black;
        }

        .job-title {
            font-size: 18px;
            color: #333;
            margin: 0;
            font-family: 'Montserrat';

        }

        .job-company {
            font-weight: bold;
            color: #0077b6;
            font-family: 'Montserrat';

        }

        .job-details {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            font-family: 'Montserrat';

        }

        .job-location,
        .job-salary,
        .job-posted-at,
        .job-vacancies,
        .job-education-requirement,
        .job-experience-requirement,
        .job-skills-required {
            font-size: 14px;
            color: #555;
            font-family: 'Montserrat';

        }

        .apply-button {
            background-color: #0077b6;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
        }

        .apply-button:hover {
            background-color: #00546d;
        }

        /* Table styles */
        .job-list {
            width: 100%;
            margin-top: 10px;
            font-size: 14px;
            font-family: 'Montserrat';

        }

        .job-list th {
            background-color: #007BFF;
            color: white;
            font-size: 14px;
            font-family: 'Montserrat';

        }

        .job-list td {
            vertical-align: middle;
            padding: 10px;
            font-family: 'Montserrat';

        }

        .job-list tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
            font-family: 'Montserrat';

        }

        /* Success and error message styles */
        #success-message,
        #error-message {
            position: relative;
            padding: 10px;
            margin: 10px 0;
            text-align: center;
        }

        #success-message {
            background-color: #4CAF50;
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

        .close {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: red;
        }

        .shortedList:hover {
            background-color: white;
            border-radius: 2px;
            border: 1px solid rgb(2, 17, 79);
        }
        a {
            text-decoration: none;
        }
        .logout {
                background-color: rgb(2, 17, 79);
                /* Coral color */
                color: #fff;
                border: none;
                padding: 10px 15px;
                margin-top: 15px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                border: 1px solid white;
                border-radius: 5px;
                font-size: 12px;
            }

            .logout:hover {
                background-color: #fff ;
                color:black
                /* Darker coral color on hover */
            }
    </style>
    <div>
        <div class="row m-0" style="background-color: #02134F; color: white; padding-top: 8px;">
            <div class="col-md-2 mb-3" style="text-align: center; margin: auto;">
                <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="Logo" style="height: 50px; margin-right: 10px;">
            </div>
            <div class="col-md-7 mb-3" style="text-align: center; margin: auto;">
            <h1 style="font-size: 21px;">Job Seeker - {{ optional($user)->full_name }}</h1>

            </div>
            <div class="col-md-1 mb-3" style="text-align: center; margin: auto;">
                <a href="/AllNotifications" style="text-decoration: none; color: white">
                    <span><i class="fas fa-bell"></i> <!-- FontAwesome bell icon for notifications -->
                        <span class="badge">
                            {{$allNotificationCount}}
                        </span>
                    </span>
                </a>
            </div>
            <div class="col-md-2 mb-3">
            <button class="logout"wire:click="logout" style="text-align:end"> <i class="fas fa-sign-out-alt" ></i> Logout</button>
            </div>

        </div>

    </div>

    <div class="row-1" style="margin-top: 10px; text-align: end; margin-right: 10px;">

    <a href="/CreateCV" style="text-decoration: none;">
            <button class="btn btn-primary mb-2" style="font-size:12px;background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                <i class="fas fa-file-alt" style="margin-right: 5px;"></i>
                Create CV</button>
        </a>
    
            <a href="/Companies" style="text-decoration: none;">
                <button class="btn btn-primary mb-2" style="font-size:12px; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                    <i class="fas fa-building" style="margin-right: 5px;"></i>
                    Companies</button>
            </a>
        
            <a href="/AppliedJobs" style="text-decoration: none;">
                <button class="btn btn-primary mb-2" style="font-size:12px; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                    <i class="fas fa-check" style="margin-right: 5px;"></i> Applied Jobs</button>
            </a>
            <button class="btn btn-primary mb-2" style="font-size:12px; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                <a href="/UserProfile" style="text-decoration: none;color:white"> <i class="fa fa-user" style="margin-right: 5px;"></i> Profile</a>
            </button>
    </div>


    <div class="container">
        <h2 style="text-align: center;
            font-family: Montserrat;
            ">All Jobs List</h2>
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
        @if (!is_null($jobs) && $jobs->count() > 0)

        <div class="row m-0">
            @foreach ($jobs as $job)
            <div class="col-md-6 mb-2">
                <div class="job-card">
                    <a wire:click="showJobDetails('{{$job->job_id}}')" style="text-decoration: none;color:black">
                        <h3 class="job-title">{{ $job->title }}</h3>
                        <p class="job-company"><strong class="subtitle">{{ $job->company_name }}</strong></p>

                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                                <p class="job-location">
                                    <i class="fas fa-map-marker-alt"></i> {{ $job->location }}
                                </p>
                            </div>
                            <div class="col-md-4 p-0">
                                <p class="job-salary">
                                    <strong style="margin-right: 10px;">₹</strong>{{ number_format($job->salary, 2) }}
                                    PA
                                </p>
                            </div>
                            <div class="col-md-4 p-0">
                                <p class="job-posted-at">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ date('d M Y', strtotime($job->expire_date)) }}
                                    <strong style="font-size: 10px;">(Expired)</strong>
                                </p>
                            </div>
                        </div>

                        <div class="row m-0">
                            <div class="col-md-4 p-0">
                            <p class="job-vacancies">
                                        <i class="fas fa-users"></i> Vacancies: {{ $job->vacancies }}
                                    </p>
                            </div>
                            <div class="col-md-4 p-0">
                            <p class="job-education-requirement" >
                                        <i class="fas fa-graduation-cap"></i> Education:
                                        {{ $job->education_requirement }}
                                    </p>
                            </div>
                            <div class="col-md-4 p-0">
                            <p class="job-experience-requirement" style="width:150px;">
                                        <i class="fas fa-briefcase"></i> Experience: {{ $job->experience_requirement }}
                                    </p>
                            </div>
                        </div>

                        <p class="job-skills-required">
                            <i class="fas fa-tools"></i> Skills: {{ $job->skills_required }}
                        </p>

                    </a>
                    <div class="form-group">
                    <table>
                        <tr>
                            <th>
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="resume">CV:</label>
                            </th>
                            <th>
                                <input wire:model="user_resume" style="font-size:12px" type="file" class="form-control">
                            </th>
                        </tr>
                    </table>
                </div>
                @error('user_resume') <span class="error">{{ $message }}</span> @enderror <br>
                    <div style="text-align: center;">
                        <a wire:click="showJobApplication('{{$job->job_id}}')" class="apply-button">Apply</a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        @else
        <div style="text-align:center;margin-top:10px">No Jobs Found</div>
        @endif
    </div>
</div>
</div>
