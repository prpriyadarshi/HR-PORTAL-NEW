<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>Salary Revision</title>
    <style>
        .text {
            --tw-text-opacity: 1;
            color: rgba(23, 30, 37);
            font-size: 18px;
        }

        .container {
            width: 850px;
            margin-top: 50px;
        }

        .card {
            width: 480px;
            height: 200px;
        }

        .last-revision-duration {
            margin-top: 50px;
        }

        .vertical-container {
            width: 830px;
            margin-left: 6px;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .section-header {
            font-size: 13px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ccc;
            padding: 5px;
        }

        .section-content {
            font-size: 14px;
            margin-bottom: 10px;
        }

        .background-container {
            height: 150px;
            background-color: white;
            padding: 10px;
        }



        table {
        background-color:white;
        border-collapse: collapse;
        width: 102%;
        height: 100%;
    }

    th, td {
        border: 1px solid #000; /* Add your desired border styles here */
        padding: 8px;
        text-align: left;
    }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text">Salary Revision</h1>
        @foreach ($salaryRevisions as $salaryRevisions)
            <div class="card" style="background-color: white; padding: 10px;">
                <div class="last-revision-duration">
                    <p class="text-muted text-secondary" style="margin-left: 42px; font-size: 15px; margin-top: -35px;">Duration since last revision</p>

                    <p style="margin-left: 42px; margin-top: 0px;">
                        <b>{{ $salaryRevisions->duration['months'] }} Months {{ $salaryRevisions->duration['days'] }} Days</b>
                    </p>
                    <hr style="border: 1px solid #000; margin-left: 20px; margin-right: 20px;">
                </div>

                <div class="row last-revision-content";>
                    <div class="col-md-6" style="border-right: 1px solid #0edc9b;">
                        <p class="text-muted text-secondary" style="margin-left: 20px; font-size: 13px;">Last Revision Period</p>
                        <p  style="margin-left: 20px;"><b>{{ \Carbon\Carbon::parse($salaryRevisions->last_revision_period)->format('d-m-Y') }}</b></p>
                    </div>
                    <div class="col-md-6">
                        <p class="text-yellow text-secondary">Last Revision Percentage</p>
                        <p><b style="color: green;">+{{ number_format($salaryRevisions->percentageChange, 2) }}%</b></p>
                    </div>
                </div>
            </div>
            <br>

<canvas id="lineChart" width="600" height="200" style="background-color: white"></canvas>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById("lineChart").getContext("2d");

        // Define chartData and chartOptions from the Livewire variables
        var chartData = @json($chartData); // Ensure proper JSON encoding
        var chartOptions = @json($chartOptions);

        // Create a new Line Chart instance
        var lineChart = new Chart(ctx, {
            type: "line",
            data: chartData,
            options: chartOptions,
        });

    });
</script>
<br><br>






<div class="row"  style="height: 300px; width:830px;margin-left: 6px;" >



    <div class="card-header d-flex justify-content-between" >

        <p style=" font-size:13px;">CTC Revision Details</p>
        <p style=" font-size:13px;margin-left:500px;"> Revision Difference</p>
      </div>
<div class="card-header d-flex justify-content-between">

    <div class="container" style=" font-size:13px">
        <table>
            <thead>
                <tr>
                    <th>Last Revision</th>
                    <th>Payout Month</th>
                    <th>Revised Monthly CTC </th>
                    <th>Previous Monthly CTC</th>
                    <th>Duration between revisions</th>
                    <th>Amount in</th>
                    <th>Percentage</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ \Carbon\Carbon::parse($salaryRevisions->last_revision_period)->format('l, F j, Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($salaryRevisions->salary_month)->format('F Y') }}</td>
                    <td>{{$salaryRevisions->revised_monthly_ctc}}</td>
                    <td>{{$salaryRevisions->previous_monthly_ctc}}</td>
                    <td>{{ $salaryRevisions->duration['months'] }} Months</td>
                    <td>{{$salaryRevisions->revised_monthly_ctc}}</td>
                    <td>{{ number_format($salaryRevisions->percentageChange, 2) }}%</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>

    </div>





</div>





@endforeach

  </div>

</body>
</html>
