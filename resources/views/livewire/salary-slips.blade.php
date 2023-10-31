<div>
<!DOCTYPE html>
 
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 
 <title>Document</title>
 
    <style>
 
        body {
 
    font-family: 'Open Sans', sans-serif;
 
      }
 
        .container {
            display: flex;
            flex-direction: row;
            gap: 20px;
            justify-content: space-between;
            margin-top: 20px;
          }
 
        .earnings,
        .deduction{
            border: 2px solid #ccc;
            padding: 10px;
            height: 350px;
           
            background: #fff;
            flex: 1; /* Equal width for both containers */
           }
 
        .Empdetails{
            border: 2px solid #ccc;
            padding: 10px;
            margin-left: 100px;
            background-color:#FAFAD2;
           }
       
 
        .button-container {
            text-align: center; /* Centers the buttons horizontally */
        }
 
        /* Optional styling for buttons */
        .button-container .btn2 {
            padding: 5px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius:5px;
            cursor: pointer;
        }
           /* Optional styling for buttons */
           .button-container .btn1 {
            padding: 5px 15px;
            border-radius:5px;
            background-color: #fff;
            color: #007bff;
            border: 1px solid #007bff;
            cursor: pointer;
        }
 
        .button-container button:first-child {
            margin-right: 10px; /* Adds space between buttons */
        }
        .button-container1 {
            display: flex;
            align-items: center;
            justify-content:end;
            margin-right:30px;
        }
 
        .btn3 {
            padding: 5px 15px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius:5px;
            cursor: pointer;
        }
 
        .dropdown-container {
            margin-left: 10px;
            position: relative;
        }
 
      /* Updated styles for the dropdown button with arrow */
        .dropdown-btn {
            padding: 5px 15px;
            background-color: #fff;
            color: black;
            border: 1px solid #ccc;
            border-radius:5px;
            width:180px;
            cursor: pointer;
            position: relative; /* Add relative positioning for the arrow */
        }
 
        /* Create an arrow using ::after pseudo-element */
        .dropdown-btn::after {
            content: "\25BE"; /* Unicode character for a down-pointing triangle */
            font-size: 12px; /* Adjust the size of the arrow */
            margin-left: 5px; /* Add some spacing between the text and arrow */
        }
 
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            max-height: 200px; /* Set the maximum height for scrollable content */
            overflow-y: scroll; /* Enable vertical scrolling if content exceeds max height */
        }
 
 
        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }
 
        .dropdown-content a:hover {
            background-color: #007bff;
            color: #fff;
        }
 
        .dropdown-container:hover .dropdown-content {
            display: block;
        }
        #hide-button {
            color: blue;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            float: right; /* Align to the right */
            margin-top: -40px; /* Adjust margin as needed */
        }
 
 
    </style>
 
</head>
 
<body>
<div class="button-container">
    <button class="btn2">PaySlip</button>
    <button class="btn1">Reimb.Payslip</button>
</div>
 
<div class="button-container1">
 
 
<a href="/your-download-route" id="pdfLink2023_4" class="pdf-download" download style="margin-left: 10px; display: inline-block;">Download PDF</a>
    <div class="dropdown-container">
        <button class="dropdown-btn">Aug 2023</button>
        <div class="dropdown-content">
            <a href="#">Aug 2023</a>
            <a href="#">Sep 2023</a>
            <a href="#">Oct 2023</a>
            <a href="#">Nov 2023</a>
            <a href="#">Dec 2023</a>
            <a href="#">Jan 2023</a>
            <a href="#">Feb 2023</a>
            <a href="#">Mar 2023</a>
            <a href="#">Apr 2023</a>
            <a href="#">May 2023</a>
            <a href="#">June 2023</a>
            <a href="#">July 2023</a>
        </div>
    </div>
</div>
 
 
<div class="container" style="width: 100%;">
<div style="display:flex">
   <div class="row" style="height:300px;width:250px;background:white;border:1px solid silver;border-radius:5px">
   <p >Earnings</p>
     
      <p style="height:20px;margin-left:150px;margin-top:-90px;font-size:12px "class="mb-3 section-header">Amount in (₹)</p>
      @foreach($salaryRevision as $employee)
      <table style="margin-top:-100px; margin-left:10px; font-size:12px">
    <tr>
        <td style="margin-top:-40px" >BASIC</td>
        <td class="cell-value">{{ number_format($employee->basic, 2) }}</td>
    </tr>
    <tr>
        <td>HRA</td>
        <td class="cell-value">{{ number_format($employee->hra, 2) }}</td>
    </tr>
    <tr>
        <td>CONVEYANCE</td>
        <td class="cell-value">{{ number_format($employee->conveyance, 2) }}</td>
    </tr>
    <tr>
        <td>MEDICAL ALLOWANCE</td>
        <td class="cell-value">{{ number_format($employee->medical, 2) }}</td>
    </tr>
    <tr>
        <td>SPECIAL ALLOWANCE</td>
        <td class="cell-value">{{ number_format($employee->special, 2) }}</td>
    </tr>
    <tr>
        <td>Total</td>
        <td class="cell-value">{{ number_format($employee->calculateTotalAllowance(), 2) }}</td>
    </tr>
</table>
 
   </div>
 
   <div class="row" style="height:300px;width:220px;background:white;border:1px solid silver;border-radius:5px;margin-left:20px">
 
   <p  >Deductions</p>
     
      <p style="height:20px;margin-left:120px;;font-size:12px;margin-top:-100px"class="mb-3 section-header">Amount in (₹)</p>
     
      <table style="margin-top:-100px;margin-left:10px;font-size:12px">
  <tr>
  <td>PFA</td>
<td class="cell-value">{{ number_format($employee->calculatePf(), 2) }}</td>
 
  </tr>
  <tr>
  <td>ESI</td>
<td class="cell-value">{{ number_format($employee->calculateEsi(), 2) }}</td>
 
  </tr>
  <tr>
    <td>PROF TAX</td>
    <td class="cell-value">150.00</td>
  </tr>
 
  <tr>
    <td>Total</td>
    <td class="cell-value">{{ number_format($employee->calculateTotalDeductions(), 2) }}</td>
  </tr>
</table>
   </div>
 
</div>
@endforeach
@foreach($employees as $employee )
 
<div class="row" style="height:550px;width:390px;background:#FAFFDE;border:1px solid silver;border-radius:5px;margin-left:-40px;">
 
        
          <h6 >Employee details</h6>
        <div class="details" style="margin-top:-20px;">
       
        <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;margin-top:-60px;">
 
          <p>Name</p>
 
          <p>Emp ID</p>
 
          </div>
         
          <div class="d-flex justify-content-between"style="margin-top:-15px;">
 
                <p> {{$employee->first_name}} {{$employee->last_name}}</p>
 
                <p>{{$employee->emp_id}}</p>
 
            </div>
           
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Joining Date</p>
 
          <p>Bank Name</p>
 
          </div>
         
          <div class="d-flex justify-content-between"style="margin-top:-15px;">
 
                <p>{{$employee->hire_date}}</p>
 
                <p>{{$employee->bank_name}}</p>
 
            </div>
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Designation</p>
 
          <p>Bank Account No</p>
 
          </div>
          <div class="d-flex justify-content-between"style="margin-top:-15px;">
 
                <p>{{$employee->job_title}}</p>
 
                <p>{{$employee->account_number}}</p>
 
            </div>
       
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Department</p>
 
          <p>PAN Number</p>
 
          </div>
          <div class="d-flex justify-content-between"style="margin-top:-15px;">
 
                <p>{{$employee->department}}</p>
                <p>{{$employee->pan_no}}</p>
 
            </div>
       
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Location</p>
 
          <p>PF No</p>
 
          </div>
          <div class="d-flex justify-content-between"style="margin-top:-15px;">
 
                <p>{{$employee->address}}</p>
 
                <p>{{$employee->pf_no}}</p>
 
            </div>
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Effective Work Days</p>
 
          <p>PF UAN</p>
 
          </div>
          <div class="d-flex justify-content-between"style="margin-top:-15px;margin-left:265px;">
 
             <p>101847711805</p>
 
            </div>
           
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Lop</p>
 
          </div>
         
          <div class="d-flex justify-content-between"style="margin-top:-15px;">
 
                <p>1.00</p>
 
            </div>
       
        </div>
     
        </div>
 
</div>
@endforeach
      </div>
  </div>
  <script>
    // JavaScript to hide/show the Empdetails div
    const empDetailsDiv = document.querySelector('.Empdetails');
    const hideButton = document.getElementById('hide-button');
 
    hideButton.addEventListener('click', function () {
        empDetailsDiv.style.display = 'none'; // Hide the div
    });
</script>
 
 </body>
 
 </html>
 
 </div>