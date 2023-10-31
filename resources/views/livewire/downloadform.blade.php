<div>
 <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #000;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .claim-details {
            margin-top: 20px;
        }

        .signature {
            margin-top: 20px;
        }

        .text-center {
            text-align: center;
        }
    </style>


<div class="container" style="height:auto;width:800px;border:1px solid silver">
        <h3 style="margin-left:300px">Form No. 12BB</h3>
        @foreach($employees as $employee)
        <div class="row" style="margin-left:20px">
        <b>Employee Information</b>
                 <div class="row" style="display:flex;font-size:12px">
                <p>Name and address of the employee</p>
               
                <p style="padding-left:275px">: {{$employee->first_name}} {{$employee->last_name}}</p>
          </div>
          <div class="row" style="display:flex;font-size:12px">
                <p>[Permanent Account Number or Aadhaar Number] of the employee</p>
                             
                 <p style="padding-left:110px">:</p>
          </div>
          <div class="row" style="display:flex;font-size:12px">
                <p>Financial year </p>
            
                <p style="padding-left:390px">:2023-24</p>
          </div>
          <div class="row" style="display:flex;font-size:12px;">
                <p>Tax Regime</p>
              
                <p style="padding-left:400px">:New Tax Regime</p>
          </div>
          


        </div>
                
        <table style="width:700px;margin-left:30px;font-size:12px">
            <tr>
                <th>Sl. No.</th>
                <th>Nature of Claim</th>
                <th>Amount (Rs.)</th>
                <th>Evidence / Particulars</th>
            </tr>
            <tr>
                <td>1</td>
                <td>House Rent Allowance</td>
                <td></td>
                <td>
                    (i) Rent paid to the landlord<br>
                    (ii) Name of the landlord<br>
                    (iii) Address of the landlord<br>
                    (iv) PAN of the landlord (if rent exceeds 1 lakh)
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Leave Travel Concessions or Assistance</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Deduction of Interest on Borrowing</td>
                <td></td>
                <td>
                    Interest on Housing Loan (Self occupied)<br>
                    (i) Interest payable/paid to the lender<br>
                    (ii) Name of the lender<br>
                    (iii) Address of the lender<br>
                    (iv) PAN of the lender<br>
                    - Financial Institutions (if available)<br>
                    - Employer (if available)<br>
                    - Others
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Deduction under Chapter VI-A</td>
                <td></td>
                <td>
                    (A) Section 80C, 80CCC, and 80CCD<br>
                    - Section 80C<br>
                    - Section 80CCC<br>
                    - Section 80CCD<br>
                    (B) Other sections (e.g., 80E, 80G, 80TTA, etc.) under Chapter VI-A
                </td>
            </tr>
        </table>

        <div class="claim-details" style="margin-left:20px">
            <p>Verification</p>
            <p>I,{{$employee->first_name}} {{$employee->last_name}}  son/daughter of  {{$employee->father_name}} do hereby certify that the information given above is complete and correct.</p>
        </div>

        <div class="signature">
            <p class="text-center">Place: ____________________________</p>
            <p class="text-center">Date: ____________________________</p>
            <p class="text-center">(Signature of the employee)</p>
            <p class="text-center">Designation:  {{$employee->job_title}}</p>
            <p class="text-center">Full Name:  {{$employee->first_name}} {{$employee->last_name}}</p>
        </div>
        @endforeach
    </div>
