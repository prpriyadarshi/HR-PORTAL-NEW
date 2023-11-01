<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 50vh;
            font-size:12px;
        }

        .salary-slip {
            background: #fff;
            max-width: 800px;
            width: 100%;
            margin: 20px;
            font-size:12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;

        }

        .header img {
            height: 80px;
            width: auto;
        }

        .company-name {
          font-size:12px;
        }

        .empDetail {
            width: 100%;
            font-size:12px;
      
        }

        .empDetail th,
        .empDetail td {
          
            padding: 8px;
            font-size:12px;
        }

        .myBackground {
            background-color: #c2d69b;
            font-weight: 300;
        }

        .myAlign {
            text-align: right;
        }

       
    </style>



<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap">

<div>
    @foreach($employees as $employeeData)
    @foreach($empBankDetails as  $employee)
    <div class="salary-slip">
        <table class="empDetail">
            <tr style="background-color: #c2d69b">
                <td colspan='3'>
                    <img src='https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/2e383f1a48f91dbea7e6' style="height:60px;width:200px" />
                </td>
                <td colspan='3' class="companyName" style="margin-left:100px;font-size:16px">XSILICA SOFTWARE SOLUTIONS PVT LTD</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $employeeData->first_name }} {{ $employeeData->last_name }}</td>
                <th>Bank Branch</th>
                <td>{{ $employee->bank_branch }}</td>
                <th>Branch Name</th>
                <td>{{ $employee->bank_name }}</td>
            </tr>
            <tr>
                <th>PF Number</th>
                <td>{{ $employeeData->pf_no }}</td>
                <th>Bank Name</th>
                <td>{{ $employee->bank_name }}</td>
                <th>Bank Account Number</th>
                <td>{{ $employee->account_number }}</td>
            </tr>
            
            <tr>
                <th>Mobile</th>
                <td>{{ $employeeData->mobile_number }}</td>
                <th>Bank A/C no.</th>
                <td style="margin-left:50px"> {{ $employee->account_number }}</td>
                <th style="margin-left:50px">Address</th>
                <td>{{ $employeeData->address }}</td>
            </tr>
            <tr>
                <th>Grade:</th>
                <td>18</td>
                <th>Designation</th>
                <td>{{ $employeeData->job_title }}</td>
                <th style="margin-left:50px">PAN No:</th>
                <td>{{ $employeeData->pan_no }}</td>
            </tr>
        </table>
    </div>
    @endforeach
    @endforeach
    @foreach($salaryRevision as $employee)
    <div class="salary-slip">
        <table class="empDetail">
            <tr class="myBackground">
                <th colspan="2">Payments</th>
                <th>Particular</th>
                <th class="table-border-center">Amount (Rs.)</th>
                <th colspan="2">Deductions</th>
                <th>Particular</th>
                <th class="table-border-center">Amount (Rs.)</th>
            </tr>
            <tr>
                <th colspan="2">Basic Salary</th>
                <td></td>
                <td class="myAlign">{{ number_format($employee->basic, 2) }}</td>
                <th colspan="2">PF</th>
                <td></td>
                <td class="myAlign">{{ number_format($employee->calculatePf(), 2) }}</td>
            </tr>
            <tr>
                <th colspan="2">HRA</th>
                <td></td>
                <td class="myAlign">{{ number_format($employee->hra, 2) }}</td>
                <th colspan="2">ESI</th>
                <td></td>
                <td class="myAlign">{{ number_format($employee->calculateEsi(), 2) }}</td>
            </tr>
            <tr>
                <th colspan="2">CONVEYANCE</th>
                <td></td>
                <td class="myAlign">{{ number_format($employee->conveyance, 2) }}</td>
                <th colspan="2">PROF TAX</th>
                <td></td>
                <td class="myAlign">150</td>
            </tr>
            <tr>
                <th colspan="2">MEDICAL ALLOWANCE</th>
                <td></td>
                <td class="myAlign">{{ number_format($employee->medical, 2) }}</td>
            </tr>
            <tr>
                <th colspan="2">SPECIAL ALLOWANCE</th>
                <td></td>
                <td class="myAlign">{{ number_format($employee->special, 2) }}</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr class="myBackground">
                <th colspan="3">Total Payments</th>
                <td class="myAlign total">{{ number_format($employee->calculateTotalAllowance(), 2) }}</td>
                <th colspan="3">Total Deductions</th>
                <td class="myAlign total">{{ number_format($employee->calculateTotalDeductions(), 2) }}</td>
            </tr>
        </table>
    </div>
    @endforeach
</div>
