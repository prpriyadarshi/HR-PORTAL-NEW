<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Container Layout</title>
 
    <!-- Include Open Sans font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Container row */
        body{
            font-family: 'Montserrat', sans-serif;
        }
      .bal-container{
        margin-top: 20px;
        width: 100%;
      }
 
        /* Buttons and dropdown */
        .buttons-container {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Align buttons to the right */
            margin-top: 20px; /* Add some distance from the top */
            margin-right: 20px; /* Add some distance from the right */
        }
 
        .button2 {
            margin-right: 10px;
            padding:5px 5px ;
            width: 100px;
            text-align:center;
            border: none;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
        }
 
        .button1 {
            margin-right: 10px;
            padding: 5px 5px;
            width: 100px;
            border: 1px solid #007BFF;
            background-color: #fff;
            color: #007BFF;
            border-radius: 5px;
            text-align:center;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
        }
 
        .buttons-container .dropdown {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 5px;
            width: 100px; /* Set the width of the dropdown */
            border-radius: 5px; /* Add some rounded corners */
            font-size: 14px; /* Adjust font size */
        }
 
        /* Style for hover effect on options */
        .buttons-container .dropdown:hover {
            cursor: pointer;
            border: 1px solid #00BFFF;
            padding: 5px; /* Add space between options */
        }
 
        .dropdown option {
            padding: 5px 10px; /* Add space around the text in each option */
        }
 
        .view {
            text-decoration: none;
        }
 
        .view:hover {
            color: #007BFF;
        }
        .leave-bal{
            border: 1px solid #bfcee3;
             padding: 5px 10px;
             border-radius: 5px;
              text-align: center;
              height: 200px;
              background-color:#fff;
        }
        .balance{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
 
        /* Tube-like container */
        .tube-container {
            position: relative;
            width: 100%;
            height: 7px;
            margin-top: 52px;
            background:#fff;
            border:1px solid #ccc;
            border-radius:10px;
        }
 
        .tube {
            position: absolute;
            bottom: 0;
            left: 0;
            border-radius:7px;
            height: 100%;
            /* Green color for leaves */
            transition: width 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }
        .center h5{
            color:#778899;
            font-size: 22px;
            font-weight:600;
        }
        .center{
            text-align: center;
            align-items:center;
             margin-top: 20px;
             font-size: 16px;
        }
        .center span{
            color: #778899;
            font-size: 12px;
            font-weight: 400;
             text-transform: capitalize;
        }
     
        .leave-type{
            color: #778899;
            font-size: 14px;
            font-weight: 500;
        }
        .leave-gran{
            color: #778899;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
        }
        .remaining{
            color: #778899;
             font-size: 12px;
              font-weight: 400;
               text-transform: capitalize;
        }
        .view-bal{
            font-size:1.2rem;
            color:#00BFFF;
        }
        .btn-cancel{
            background:#fff;
            border:1px solid #1E90FF;
            color:#1E90FF;
            border-radius:5px;
        }
        .modal-title{
            font-size:0.975rem;
        }
        .modal-header{
            background: #F2F2F2;
        }
        .form-group label{
           font-size:0.825rem;
           font-weight:500;
           color:#778899;
        }
        .form-control option{
         font-weight:600;
         font-size:0.9rem;
        }
 
    </style>
</head>
<body>
<div class="container" id="card-content" style="display:none;margin:0 auto; align-items:center;background:#fcfcfc; width:100%;">
        <!DOCTYPE html>
<head>
    <style>
        .leave-transctions{
            background:#fff;
            margin:0 auto;
            width:100%;
            padding:20px 30px;
            box-shadow: 0 3px 10px 0 rgba(0, 0, 0, 0.2);
        }
        .pdf-heading{
            text-align:center;
            display:flex;
            flex-direction:row;
            gap:10px;
        }
 
        /* Header Styles */
       .pdf-heading h2 {
            color: black;
            font-size:1.1rem;
            font-weight:600;
        }
       .pdf-heading span p{
            font-size:0.700rem;
            font-weight:500;
            margin-top:2px;
            color:#36454F;
        }
       .pdf-heading h3 {
            font-weight:500;
            margin-top:-5px;
            font-size:0.895rem;
        }
        .emp-details{
            padding: 5px 10px;
        }
       
        .emp-details span{
            font-size:0.835rem;
            color:#333;
           font-weight:400;
           margin-left:5px;
        }
        .emp-details p{
            font-size:0.875rem;
            font-weight:600;
        }
        .emp-info{
            display:flex;
            flex-direction:row;
            border:1px solid #333;
           gap: 100px;
           
        }
        /* Table Styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1.2px solid #808080;
            padding: 8px;
            width:100px;
           text-align:center;
        }
        td{
            font-size:0.795rem;
        }
        th {
            font-size:0.825rem;
            background-color: #C0C0C0;
        }
    </style>
</head>
<body>
    <div class="leave-transctions">
        <div class="pdf-heading">
          @if($employeeDetails->company_id === 'XSS-12345')
                <img src="https://media.licdn.com/dms/image/C4D0BAQHZsEJO8wdHKg/company-logo_200_200/0/1677514035093/xsilica_software_solutions_logo?e=2147483647&v=beta&t=rFgO4i60YIbR5hKJQUL87_VV9lk3hLqilBebF2_JqJg" alt="" style="width:200px;height:125px;">
            <div>
               <h2>XSILICA SOFTWARE SOLUTIONS P LTD <br>
               <span><p>3rd Floor, Unit No.4, Kapil Kavuri Hub IT Block, Nanakramguda Main Road, Hyderabad, Rangareddy, <br> Telangana, 500032</p></span></h2>
               <h3>Leave Transactions From 01 Jan 2023 To 31 Dec 2023</h3>
            </div>
            <!-- payglogo -->
            @elseif($employeeDetails->company_id === 'PAYG-12345')
                <img src="https://play-lh.googleusercontent.com/qUGkF93p010_IHxbn8FbnFWZfqb2lk_z07i6JkpOhC9zf8hLzxTdRGv2oPpNOOGVaA=w600-h300-pc0xffffff-pd" style="width:200px;height:125px;">
             <div >
               <h2> PayG <br>
               <span><p>3rd Floor, Unit No.4, Kapil Kavuri Hub IT Block, Nanakramguda Main Road, Hyderabad, Rangareddy, <br> Telangana, 500032</p></span></h2>
               <h3>Leave Transactions From 01 Jan 2023 To 31 Dec 2023</h3>
            </div>
            <!-- attune golabal logo -->
            @elseif($employeeDetails->company_id === 'AGS-12345')
                <img src="https://images.crunchbase.com/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco,dpr_1/rxyycak6d2ydcybdbb3e" alt="" style="width:200px;height:125px;">
            <div>
               <h2>Attune Global Solutions<br>
               <span><p>3rd Floor, Unit No.4, Kapil Kavuri Hub IT Block, Nanakramguda Main Road, Hyderabad, Rangareddy, <br> Telangana, 500032</p></span></h2>
               <h3>Leave Transactions From 01 Jan 2023 To 31 Dec 2023</h3>
            </div>
            @endif
        </div>
 
        <!-- Employee Details -->
      <div class="emp-info">
        <div class="emp-details">
                <p > Name: <span>{{ $employeeDetails->first_name}}  {{ $employeeDetails->last_name}}</span></p>
                <p>Date of Join: <span>{{ optional(\Carbon\Carbon::parse($employeeDetails->hire_date))->format('d M, Y') }}
</span></p>
             
<p>Reporting Manager: <span style="text-transform: uppercase;">{{ $employeeDetails->report_to}} ({{ $employeeDetails->manager_id}}) </span></p>
 
        </div>
        <div class="emp-details">
                <p>Employee No: <span>{{ $employeeDetails->emp_id}}</span></p>
                <p>Date of Birth: <span>{{ optional(\Carbon\Carbon::parse($employeeDetails->date_of_birth))->format('d M, Y') }}
</span></p>
                <p>Gender: <span>{{ $employeeDetails->gender}}</span></p>
        </div>
      </div>
        <!-- Add more details as needed -->
 
        <!-- Leave Transactions Table -->
        <table>
            <thead>
                <tr>
                    <th>SI No</th>
                    <th>Posted Date</th>
                    <th>From Date</th>
                    <th>To Date</th>
                    <th>Days</th>
                    <th>Leave Type</th>
                    <th>Transaction Type</th>
                    <th>Reason</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop through leave transactions and populate the table -->
                @foreach($this->leaveTransactions as $transaction)
                    <tr>
                    <td>{{ $loop->index + 1 }}</td>
                    <td>{{ optional(\Carbon\Carbon::parse( $transaction->leave_created_at ))->format('d M, Y  H:i') }}</td>
                    <td>{{ optional(\Carbon\Carbon::parse( $transaction->from_date ))->format('d M, Y') }}</td>
                    <td>{{ optional(\Carbon\Carbon::parse( $transaction->to_date ))->format('d M, Y') }}</td>
                    <td>{{ $this->calculateNumberOfDays($transaction->from_date, $transaction->from_session, $transaction->to_date, $transaction->to_session) }}</td>
                    <td>{{ $transaction->leave_type }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td>{{ $transaction->reason }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</body>
        </div>
    <div class="buttons-container">
        <button class="button1">Apply</button>
        <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter">
            <i class="fa-solid fa-download"></i>
       </button>
        <select class="dropdown">
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>
    </div>
    <!-- modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Download Leave Transaction Report</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form novalidate class="ng-valid ng-touched ng-dirty" wire:submit.prevent="generatePdf($event)">
            @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required-field label-style">From date</label>
                                <div class="input-group date">        
                                    <input type="date"wire:model="fromDateModal" class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
                                </div>
                                <small class="text-danger" hidden="">From date should be less than to date</small>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="required-field label-style">To date</label>
                                <div class="input-group date">
                                   <input type="date" wire:model="toDateModal" class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
                                </div>
                                <small class="text-danger" hidden="">To date should be greater than from date</small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-style">Leave type</label>
                                <select name="leaveType" wire:model="leaveType" class="form-control">
                                    <option value="all"  selected>All Leaves</option>
                                    <option value="casual">Casual Leave</option>
                                    <option value="lop">Loss of Pay</option>
                                    <option value="maternity">Maternity</option>
                                    <option value="paternity">Paternity</option>
                                    <option value="sick">Sick Leave</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="label-style">Transaction</label>
                                <select name="transactionType" wire:model="transactionType"  class="form-control">
                                    <option value="all"  selected>All Transactions</option>
                                    <option value="casual">Granted</option>
                                    <option value="lop">Availed</option>
                                    <option value="maternity">Cancelled</option>
                                    <option value="paternity">Withdrawn</option>
                                    <option value="sick">Rejected</option>
                                    <option value="sick">Approved</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                        <div wire:loading wire:target="fetchLeaveTransactions">
                                <i class="fa fa-spinner fa-spin"></i> Loading...
                            </div>
                            <div class="form-group">
                                <label class="label-style">Sort by</label>
                                <select name="sortBy" class="form-control" wire:model="sortBy" >
                                    <option value="oldest_first" {{ $sortBy == 'oldest_first' ? 'selected' : '' }}>Date (Oldest First)</option>
                                    <option value="newest_first" {{ $sortBy == 'newest_first' ? 'selected' : '' }}>Date (Newest First)</option>
                                </select>
                            </div>
 
 
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button  onclick="generatePDF(event)" class="btn btn-primary text-capitalize ng-star-inserted">Download</button>
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                    <button hidden=""></button>
                </div>
            </form>
        </div>
    </div>
</div>
 
<!-- leave  -->
    <div class="bal-container" >
        <div class="row" style="margin:10px auto;">
            <div class="col-md-4">
                <div class="leave-bal">
                    <div class="balance">
                        <div class="field">
                            <span class="leave-type" >Loss Of Pay</span>
                        </div>
                        <div>
                            <span class="leave-gran">Granted:0</span>
                        </div>
                    </div>
                    <div class="center" >
                        <h5 >{{$lossOfPayBalance}} </h5>
                        <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                    </div>
                </div>
            </div>
         <!-- ... (previous code) ... -->
            <div class="col-md-4">
               <div class="leave-bal">
                <div class="balance">
                    <div class="field">
                        <span class="leave-type">
                            @if($gender === 'Female')
                            Maternity Leave
                            @elseif($gender === 'Male')
                            Paternity Leave
                            @else
                            Leave Type
                            @endif
                        </span>
                    </div>
                    <div>
                        <span class="leave-gran">Granted:{{ $grantedLeave }}</span>
                    </div>
                </div>
                <div class="center">
                    <h5>{{ $grantedLeave }}</h5>
                    <p style="margin-top:-15px;"><span class="remaining">balance</span></p>
                    <a href="#" class="view" style="font-size:0.9rem;">View Details</a>
                </div>
                <div class="tube-container">
                    <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of {{ $grantedLeave }} Consumed</p>
                    <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                </div>
            </div>
              </div>
 
 
                <div class="col-md-4">
                    <div class="leave-bal">
                        <div class="balance">
                                <div class="field">
                                    <span class="leave-type">Casual Leave
                                </div>
                                <div>
                                    <span class="leave-gran">Granted:{{ $casualLeavePerYear }}</span>
                                </div>
                         </div>
                         <div class="center" >
                             <h5 >{{ $casualLeaveBalance }}</h5>
                             <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                             <a href="#" style="font-size:0.9rem;">View Details</a>
                        </div>
                            <div class="tube-container">
                                <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">
                                @if($consumedCasualLeaves > 0)
                                        {{ $consumedCasualLeaves }} of {{ $casualLeavePerYear }} Consumed
                                    @else
                                        0 of {{ $casualLeavePerYear }} Consumed
                                    @endif
                            </p>
                            <div class="tube" style="width: {{ $percentageCasual }}%; background-color: {{ $this->getTubeColor($consumedCasualLeaves, $casualLeavePerYear, 'Causal Leave Probation') }};"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin:10px auto;">
              <div class="col-md-4">
                    <div class="leave-bal" style="margin-top">
                        <div class="balance">
                                <div class="field">
                                    <span class="leave-type">Sick Leave
                                </div>
                                <div>
                                    <span class="leave-gran">Granted:{{ $sickLeavePerYear }}</span>
                                </div>
                         </div>
                            <div class="center" >
                                <h5 >{{ $sickLeaveBalance }}</h5>
                                <p style="margin-top:-15px;"><span class="remaining" >balance</span></p>
                                <a href="#" style="font-size:0.9rem;">View Details</a>
                            </div>
                            <div class="tube-container">
                            <p style="color: #778899; font-size: 10px; text-align: start; margin-top: -15px; font-weight: 400;">
                                    @if($consumedSickLeaves > 0)
                                        {{ $consumedSickLeaves }} of {{ $sickLeavePerYear }} Consumed
                                    @else
                                        0 of {{ $sickLeavePerYear }} Consumed
                                    @endif
                                </p>
                                <div class="tube" style="width: {{ $percentageSick }}%; background-color: {{ $this->getTubeColor($consumedSickLeaves, $sickLeavePerYear, 'Sick Leave') }};"></div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
 
       
        <!-- modal container -->
       
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
 
<!-- Initialize Datepicker -->
<script>
    $(document).ready(function() {
        console.log("Document ready!");
 
        // Check if jQuery is loaded
        if (typeof jQuery == 'undefined') {
            console.error('jQuery is not loaded!');
        } else {
            console.log('jQuery is loaded!');
        }
 
        // Check if Bootstrap is loaded
        if (typeof bootstrap == 'undefined') {
            console.error('Bootstrap is not loaded!');
        } else {
            console.log('Bootstrap is loaded!');
        }
 
        // Check if Bootstrap Datepicker is loaded
        if (typeof $.fn.datepicker == 'undefined') {
            console.error('Bootstrap Datepicker is not loaded!');
        } else {
            console.log('Bootstrap Datepicker is loaded!');
        }
 
        // Initialize Datepicker
        $('.date input').datepicker({
            autoclose: true,
            format: 'dd/mm/yyyy'
        });
    });
    function generatePDF(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
 
    // Close the modal
    $('#exampleModalCenter').modal('hide');
 
    // Delay to wait for the modal to close
    setTimeout(function () {
        const cardContent = document.getElementById('card-content').innerHTML;
 
        // Create a Blob from the HTML content
        const blob = new Blob([`<div style="max-width: 800px; margin:0 auto;">${cardContent}</div>`], {
            type: 'text/html'
        });
 
        // Create a URL for the Blob
        const url = URL.createObjectURL(blob);
 
        // Create an <a> element for downloading the PDF
        const a = document.createElement('a');
        a.href = url;
        a.download = 'leave_transactions.html'; // Specify the filename with .html extension
        a.style.display = 'none';
 
        // Append the <a> element to the document and trigger the download
        document.body.appendChild(a);
        a.click();
 
        // Clean up by revoking the object URL
        window.URL.revokeObjectURL(url);
 
        // Remove the <a> element from the document
        document.body.removeChild(a);
    }, 500); // Adjust the delay as needed
}
 
 
   
 
</script>
 
    </body>
    </html>
 
</div>