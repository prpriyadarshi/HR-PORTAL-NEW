<div>
<!DOCTYPE html>
 
<html lang="en">
 
<head>
 
    <meta charset="UTF-8">
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
 
 <title>Document</title>
 
 
 
</head>
 
<body>

 
<div class="button-container1">
 
 
<a href="/your-download-route" id="pdfLink2023_4" class="pdf-download" download style="margin-left: -40px; display: inline-block;">Download PDF</a>
    <div class="dropdown-container1">
        <button class="dropdown-btn1"  style="color:black">Aug 2023</button>
        <div class="dropdown-content" style="color:black">
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
 
 
<div class="container1" style="width: 100%;">
<div style="display:flex">
   <div class="row" style="height:300px;width:300px;background:white;border:1px solid silver;border-radius:5px;margin-left:10px">
   <p style="margin-top:15px">Earnings</p>
    
  
    <p style="height:20px;margin-left:180px;margin-top:-90px;font-size:12px;width:100%" class="mb-3 section-header">Amount in (₹)</p>

      @foreach($salaryRevision as $employee)
      <table style="margin-top:-90px; margin-left:10px; font-size:12px">
    <tr>
        <td style="margin-top:10px" >BASIC</td>
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
        <td style="font-weight:500;"><b>Total</b></td>
        <td class="cell-value" style="width: 100px; /* Set your desired width */"><b>{{ number_format($employee->calculateTotalAllowance(), 2) }}</b></td>
    </tr>
</table>
 
   </div>
 
   <div class="row" style="height:300px;width:250px;background:white;border:1px solid silver;border-radius:5px;margin-left:20px;">
 
   <p style="margin-top:20px" >Deductions</p>
     
      <p style="height:20px;margin-left:150px;;font-size:12px;margin-top:-100px;"class="mb-3 section-header">Amount in (₹)</p>
     
      <table style="margin-top:-100px;margin-left:30px;font-size:12px">
  <tr style="margin-top:-30px">
  <td style="margin-top:30px">PFA</td>
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

  <tr >
    <td><b>Total</b></td>
    <td class="cell-value"><b>{{ number_format($employee->calculateTotalDeductions(), 2) }}</b></td>
  </tr>
 
</table>
   </div>
 
</div>
@endforeach
@foreach($employees as $employee )
@foreach($empBankDetails as  $employeedata)
<div class="row" style="height:500px;width:390px;background:#FAFFDE;border:1px solid silver;border-radius:5px;margin-left:-40px">
 
        
          <h6 style="margin-top:20px" ><b>Employee details</b></h6>
        <div class="details" style="margin-top:-20px;">
       
        <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;margin-top:-30px;">
 
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
 
                <p>{{$employeedata->bank_name}}</p>
 
            </div>
            <div class="d-flex justify-content-between"style="font-weight:400; color:#7f8fa4; font-size: 12px;">
 
          <p>Designation</p>
 
          <p>Bank Account No</p>
 
          </div>
          <div class="d-flex justify-content-between"style="margin-top:-15px;">
 
                <p>{{$employee->job_title}}</p>
 
                <p>{{$employeedata->account_number}}</p>
 
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
 
 <p>Company ID</p>

 <p>PF UAN</p>

 </div>
 <div class="d-flex justify-content-between"style="margin-top:-15px;">

       <p>{{$employee->company_id}}</p>

       <p>{{$employeedata->company_address1}}</p>

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

    document.addEventListener("DOMContentLoaded", function () {
        // Get all dropdown buttons and contents
        var dropdownButtons = document.querySelectorAll('.dropdown-btn1');
        var dropdownContents = document.querySelectorAll('.dropdowncontent');

        // Add click event listener to each dropdown button
        dropdownButtons.forEach(function (button, index) {
            button.addEventListener('click', function () {
                // Hide all dropdown contents
                dropdownContents.forEach(function (content) {
                    content.style.display = 'none';
                });

                // Display the selected dropdown content
                dropdownContents[index].style.display = 'block';
            });
        });
    });

</script>
 
 </body>
 
 </html>
 
 </div>