<div>
    <style>
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
                    <td>
                        <div class="card">
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
                    <td> {{ date('d-M-Y H\h i\m s\s', strtotime($appliedJob->created_at)) }}</td>
                    <td> {{ date('d-M-Y H\h i\m s\s', strtotime($appliedJob->expire_date)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>