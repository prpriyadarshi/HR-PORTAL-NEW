<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                background-color: #f0f0f0;
                margin: 0;
                padding: 0;
            }

            .logo {
                width: 200px;
                height: 50px;
                margin-right: 10px;
            }

            .header {
                display: flex;
                align-items: center;
                justify-content: start;
            }

            .title {
                font-size: 21px;
                margin-left: 20px;
            }

            .icon {
                margin-right: 5px;
            }

            .card {
                text-align: center;
                margin: 10px auto;
                padding: 15px;
                border: 1px solid #ccc;
                border-radius: 10px;
                background-color: white;
                width: 80%;
            }

            .notification-options {
                text-align: center;
            }

            .radio-option {
                font-family: 'Montserrat', sans-serif;
            }

            .notification-list {
                margin-top: 10px;
                text-align: start;
                margin-bottom: 10px;
            }

            .notification-item {
                font-size: 12px;
                color: black;
                text-decoration: none;
                display: block;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-bottom: 10px;
            }

            .notification-item:hover {
                background-color: #02134F;
                /* Use the color code or name of your choice */
                color: white;
                /* You can change the text color for better contrast */
            }
        </style>
    </head>

    <body>
        <div>
            <div class="container" style="background-color: #02134F; color: white; padding: 8px;">
                <div style="display: flex; align-items: start; justify-content: start;">
                    <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="Logo" style="width: 200px; height: 50px; margin-right: 10px;">
                    <h1 style="font-size: 21px; margin-left: 21%">Job Seeker - {{$user->full_name}}</h1>
                </div>
            </div>

        </div>

        <div class="row" style="margin-left: 48%;margin-top:10px">
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

        <div class="card" id="notification-popup">
            <h4>All Notifications</h4>
            <div class="notification-options">
                <label class="radio-option">
                    <input type="radio" name="formType" value="register" wire:click="$set('activeTab', 'Shorlisted')" checked> Shorlisted
                </label>
                <label class="radio-option">
                    <input type="radio" name="formType" value="register" wire:click="$set('activeTab', 'Rejected')"> Rejected
                </label>
                <label class="radio-option">
                    <input type="radio" name="formType" value="register" wire:click="$set('activeTab', 'Examinations')"> Examination
                </label>
            </div>

            @if($activeTab=="Shorlisted")
            @foreach($notificationList as $key=> $list)
            <div class="notification-list">
                <a wire:click="showShortlistedJobInterviewDetails('{{$list->job->job_id}}')" class="notification-item">
                    <strong>{{ $key + 1 }}.</strong> Congratulations! Your CV has been shortlisted for the position of <strong>{{$list->job->title}}</strong> at <strong>{{$list->job->company_name}}</strong> Company.
                </a>
            </div>
            @endforeach
            @endif
            @if($activeTab=="Rejected")
            @foreach($rejectedJobs as $key=> $list)
            <div class="notification-list">
                <a wire:click="showJobDetails('{{$list->job->job_id}}')" class="notification-item">
                    <strong>{{ $key + 1 }}.</strong> Your application has not been shortlisted for the position of <strong>{{$list->job->title}}</strong> at <strong>{{$list->job->company_name}}</strong> Company. Keep your spirits high and continue your job search. The right opportunity is out there waiting for you.
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </body>

    </html>

</div>