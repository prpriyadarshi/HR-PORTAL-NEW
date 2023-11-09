<div>
    <div>
        <div class="container-44" style="background-color: #02134F; color: white; padding: 8px;">
            <div style="display: flex; align-items: start; justify-content: start;">
                <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="Logo" style="width: 200px; height: 50px; margin-right: 10px;">
                <h1 style="font-size: 21px; margin-left:21%;margin-top:15px">Job Seeker - {{$user->full_name}}</h1>
            </div>
        </div>
    </div>

    <div class="row-55" style="margin-left: 48%;margin-top:10px;margin-bottom:10px">
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
    <!DOCTYPE html>
    <html>

    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .card {
                max-width: 800px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #e0e0e0;
                margin-bottom: 15px;
            }

            h6 {
                color: #3498db;
            }

            p {
                font-size: 16px;
            }

            ul {
                list-style-type: disc;
                margin-left: 20px;
            }

            a {
                color: #3498db;
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>

    <body>
        <h4 style="text-align: center;">Shortlisted Job Notification</h4>
        @foreach($notificationList as $list)
        <div class="card">
            <div class="row">
                <div class="col">
                    <h6 style="font-size:13px;text-align: center;background-color:#02134F;color:white;padding:5px">{{$list->job->company_name}} Job Interview Invitation</h6>
                </div>
            </div>
            <p>Dear <strong>{{$list->user->full_name}}</strong>,</p>
            <p>We are pleased to invite you for an interview for the position of <strong>{{$list->job->title}}</strong> at <strong>{{$list->job->company_name}}</strong> comapany.</p>
            <button wire:click="showJobDetails('{{$list->job->job_id}}')" style="background-color: #02134F;color:white;width:150px;border:none;border-radius:5px;font-size:12px">View full job details</button>
            <p><strong>Interview Details:</strong></p>
            <ul>
                <li><strong>Date:</strong> {{ date('d-M-Y', strtotime($list->interview_date)) }}</li>
                <li><strong>Time:</strong> {{$list->interview_time}} (Railway Time)</li>
                <li><strong>Location:</strong> {{$list->job->location}}</li>
            </ul>
            <p><strong>Instructions:</strong></p>
            <p>{{$list->instructions}}</p>
            <p><strong>Location:</strong></p>
            <p>You can find our office location on Google Maps by following this link: <a href="{{$list->location_link}}" target="_blank"><strong>Google Maps</strong></a></p>
            <p><strong>Company Website:</strong></p>
            <p>For more information about <strong>{{$list->job->company_name}}</strong> Company, please visit our <a href="{{$list->company_website}}" target="_blank"><strong>website</strong></a></p>
            <p>Please confirm your attendance by replying to this email or by calling us at <strong>{{$list->job->contact_phone}}</strong>. If the provided date and time are not convenient for you, let us know, and we will try to accommodate your schedule.</p>
            <p>Attached to this email, you will find the interview agenda and additional information about our company.</p>
            <p>If you have any questions or require further information, please do not hesitate to contact me at <strong>{{$list->job->contact_email}}</strong> or <strong>{{$list->job->contact_phone}}</strong>.</p>
            <p>We look forward to meeting you and discussing your potential contribution to our team.</p>
            <p>Sincerely,<br><strong>{{$list->job->hr_name}}</strong><br><strong>HR Manager</strong><br>{{$list->job->company}}</p>
        </div>
        @endforeach

    </body>

    </html>
</div>
when i click on Rejected radio then notification closed
But i want show