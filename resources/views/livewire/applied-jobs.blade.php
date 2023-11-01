<div>
    <style>
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

    /* Style for the "Applied Jobs" section */
    .container {
        margin: 20px auto;
        max-width: 600px;
        padding: 20px;
        background-color: #f9f9f9;
        border: 1px solid #e0e0e0;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        font-family: 'Montserrat';
        font-size: 12px;
    }

    h2 {
        text-align: center;
        font-family: 'Montserrat', sans-serif;
    }

    /* Style for the table */
    .table {
        width: 100%;
        border-collapse: collapse;
    }

    .table th,
    .table td {
        padding: 12px 16px;
        text-align: left;
    }

    .table thead {
        background-color: #007BFF;
        color: white;
    }

    .table tbody tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    /* Style for the "No applied jobs found" message */
    p {
        text-align: center;
        font-size: 16px;
        color: #555;
    }

    /* Add more CSS styles as needed to achieve your desired design */
    </style>
    <div style="text-align: center;background-color: #02134F;color:white;padding:8px">
        Applied Jobs
    </div>
    <div class="back-button">
        <a href="/Jobs">Back</a>
    </div>
    <div class="container">
        @if(count($appliedJobs) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Job ID</th>
                    <th>Job Title</th>
                    <th>Company Name</th>
                    <th>Applied Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appliedJobs as $appliedJob)
                <tr>
                    <td>{{ $appliedJob->job_id }}</td>
                    <td>{{ $appliedJob->job_title }}</td>
                    <td>{{ $appliedJob->company_name }}</td>
                    <td> {{ date('d-M-Y H\h i\m s\s', strtotime($appliedJob->created_at)) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>No applied jobs found.</p>
        @endif
    </div>
</div>