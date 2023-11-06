<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Job Details</title>
        <style>
        body {
            font-family: 'Montserrat';
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
            font-family: 'Montserrat';
        }

        h1 {
            color: #02134F;
            font-size: 28px;
        }

        p {
            color: #555;
            font-size: 16px;
            margin: 10px 0;
        }

        .company-logo {
            max-width: 150px;
            display: block;
            margin: 0 auto 20px;
        }

        .back-button {
            margin-top: 15px;
            text-align: right;
        }

        .back-button a {
            text-decoration: none;
            background-color: #02134F;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            margin-right: 10px;
        }

        .section-divider {
            border-top: 1px solid #ccc;
            margin: 20px 0;
        }

        .job-title {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
        }

        .job-company {
            color: #777;
        }

        .job-description {
            margin: 20px 0;
        }
        </style>
    </head>

    <body>
    <div class="container-2" style="background-color: #02134F; color: white; padding: 8px;">
        <div style="display: flex; align-items: start; justify-content: start;">
            <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="Logo" style="width: 200px; height: 50px; margin-right: 10px;">
            <h1 style="font-size: 21px; margin-left:21%">Job Seeker - {{$user->full_name}}</h1>
        </div>

    </div>

    <div class="row-2" style="margin-left: 49%;margin-top:10px">
        <a href="/Jobs" style="text-decoration: none;">
            <button style="font-size:12px;width: 130px;height:30px; border-radius: 5px; margin: 0; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
            <i class="fas fa-briefcase" style="margin-right: 5px;"></i> 
                Jobs</button>
        </a>
        <a href="/Companies" style="text-decoration: none;">
            <button style="font-size:12px;width: 130px;height:30px; border-radius: 5px; margin: 0; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                <i class="fas fa-building" style="margin-right: 5px;"></i>
                Companies</button>
        </a>
        <a href="/AppliedJobs" style="text-decoration: none;">
            <button style="font-size:12px;width: 130px;height:30px; border-radius: 5px; margin: 0; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                <i class="fas fa-check" style="margin-right: 5px;"></i> Applied Jobs</button>
        </a>
        <button style="font-size:12px;width: 100px; border-radius: 5px;height:30px; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
            <a href="/UserProfile" style="text-decoration: none;color:white"> <i class="fa fa-user" style="margin-right: 5px;"></i> Profile</a>
        </button>
        <button style="font-size:12px;margin-left: 5px;width: 100px; border-radius: 5px;height:30px; background-color: rgb(2, 17, 79); color: white;" wire:click="logout"> <i class="fas fa-sign-out-alt" style="margin-right: 5px;"></i> Logout</button>
    </div>
    <h5 style="text-align: center;margin-top:15px"> <b>Job & Company Details</b></h5>
        <div class="container">
            <img class="company-logo" src="{{ $company->company_logo }}" alt="Company Logo">
            <h1 class="job-title">{{ $job->title }}</h1>
            <p class="job-company">{{ $job->company_name }}</p>
            <p class="job-location"><i class="fas fa-map-marker-alt"></i> {{ $job->location }}</p>
            <p class="job-salary"><strong>₹</strong> {{ number_format($job->salary, 2) }} PA</p>
            <p class="job-posted-at"><i class="far fa-calendar-alt"></i>
                {{ date('d M Y', strtotime($job->expire_date)) }}
                <strong>(Expired)</strong>
            </p>
            <p class="job-vacancies"><i class="fas fa-users"></i> Vacancies: {{ $job->vacancies }}</p>
            <p class="job-description">{{ $job->description }}</p>
            <div class="section-divider"></div>
            <p class="job-education-requirement"><strong>Education:</strong> {{ $job->education_requirement }}</p>
            <p class="job-experience-requirement"><strong>Experience:</strong> {{ $job->experience_requirement }}</p>
            <p class="job-skills-required"><strong>Skills:</strong> {{ $job->skills_required }}</p>
            <div class="section-divider"></div>
            <h2>Company Details</h2>
            <p><strong>Company Name:</strong> {{ $company->company_name }}</p>
            <p><strong>Company Address 1:</strong> {{ $company->company_address1 }}</p>
            <p><strong>Company Address 2:</strong> {{ $company->company_address2 }}</p>
            <p><strong>Registration Date:</strong> {{ $company->company_registration_date }}</p>
            <p><strong>Contact Email:</strong> {{ $company->contact_email }}</p>
            <p><strong>Contact Phone:</strong> {{ $company->contact_phone }}</p>
        </div>
    </body>

    </html>
</div>