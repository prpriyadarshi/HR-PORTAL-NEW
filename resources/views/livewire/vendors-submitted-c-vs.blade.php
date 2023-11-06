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
            margin-bottom: 5px;
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
        <button style="width: 200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a href="/JobSeekersAppliedJobs" style="text-decoration: none;color:white">Job Seekers Applied Jobs</a></button>
        <button style="width: 80px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;" wire:click="logout">Logout</button>
    </div>

    <div class="job-seekers-applied-jobs">
        <h3 class="text-2xl font-semibold mb-4" style="text-align: center;">Vendors Submitted CVs</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Vendor ID</th>
                    <th>Full Name</th>
                    <th>Job ID</th>
                    <th>Job Title</th>
                    <th>Company Name</th>
                    <th>CVs</th>
                    <th>Applied Date</th>
                    <th>Expiry Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($submittedCVs as $submitDetails)
                <tr>
                    <td>{{ $submitDetails->user->user_id }}</td>
                    <td>{{ $submitDetails->user->full_name }}</td>
                    <td>{{ $submitDetails->job->job_id }}</td>
                    <td>{{ $submitDetails->job->title }}</td>
                    <td>{{ $submitDetails->job->company_name }}</td>
                    <td>
                        Total CV's : <strong>{{count($submitDetails->cv)}}</strong>
                        <ul>
                            @foreach ($submitDetails->cv as $cv)
                            <li style="margin-bottom: 8px;">
                                <a style="text-decoration: none;" class="preview-button" href="{{ asset('storage/' . $cv['cv']) }}" target="_blank">Preview CV</a>
                                <a style="text-decoration:none;" class="download-button" href="{{ asset('storage/' . $cv['cv']) }}" download>Download CV</a>
                            </li>
                            @endforeach
                        </ul>
                    </td>
                    <td>{{ date('d-M-Y H\h i\m s\s', strtotime($submitDetails->created_at)) }}</td>
                    <td>{{ date('d-M-Y H\h i\m s\s', strtotime($submitDetails->expire_date)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    function previewOrDownload(content, action) {
        var blob = new Blob([content], {
            type: 'text/html'
        });
        var url = window.URL.createObjectURL(blob);

        if (action === 'preview') {
            window.open(url, '_blank');
        } else if (action === 'download') {
            var link = document.createElement('a');
            link.href = url;
            link.download = 'resume.html'; // Specify the desired file name.
            link.style.display = 'none';
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    }
</script>