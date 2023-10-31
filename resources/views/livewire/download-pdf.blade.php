<style>
    /* Define the CSS styles for the box */
    .salary-slip {
        margin: 15px;
    }

    .empDetail {
        width: 70%;
        margin-left: 200px;
        text-align: left;
        border: 2px solid black;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .head {
        margin: 10px;
        margin-bottom: 50px;
        width: 100%;
    }

    .companyName {
        text-align: right;
        font-size: 25px;
        font-weight: bold;
    }

    .salaryMonth {
        text-align: center;
    }

    .table-border-bottom {
        border-bottom: 1px solid;
    }

    .table-border-right {
        border-right: 1px solid;
    }

    .myBackground {
        padding-top: 10px;
        text-align: left;
        border: 1px solid black;
        height: 40px;
    }

    .myAlign {
        text-align: center;
        border-right: 1px solid black;
    }

    .myTotalBackground {
        padding-top: 10px;
        text-align: left;
        background-color: #EBF1DE;
        border-spacing: 0px;
    }

    .align-4 {
        width: 25%;
        float: left;
    }

 

    .align-2 {
        margin-top: 25px;
        width: 50%;
        float: left;
    }

    .border-center {
        text-align: center;
    }

    .border-center th, .border-center td {
        border: 1px solid black;
    }

    th, td {
        padding-left: 50px;
    }
</style>



<div>
    @foreach($employees as $employee)
   @foreach($empBankDetails as  $employee)
  <div class="salary-slip">
  <table class="empDetail">
  <tr height="100px" style='background-color: #c2d69b'>
                <td colspan='4'>
                  <img  src='https://res.cloudinary.com/crunchbase-production/image/upload/c_lpad,h_256,w_256,f_auto,q_auto:eco/2e383f1a48f91dbea7e6' style="height:100px;width:200px" /></td>
                <td colspan='4' class="companyName" style="margin-left:100px;font-size:16px"> XSILICA SOFTWARE SOLUTIONS PVT LTD</td>
              </tr>
              <tr>
                <th>Name</th>
                <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                <th>Bank Branch</th>
                <td>{{ $employee->bank_branch }}</td>
                <th>Branch Name</th>
                <td>{{ $employee->bank_name }}</td>
            </tr>
            <tr>
                <th>PF Number</th>
                <td>{{ $employee->pf_no }}</td>
                <th>Bank Name</th>
                <td>{{ $employee->bank_name }}</td>
                <th>Bank Account Number</th>
                <td>{{ $employee->account_number }}</td>
            </tr>
            <tr>
                <th>Father Name</th>
                <td>{{ $employee->father_name }}</td>
                <th>Bank Branch</th>
                <td style="margin-left:50px">{{ $employee->bank_branch }}</td>
                <th style="margin-left:50px">Pay Period</th>
                <td>XXXXXXXXX</td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ $employee->mobile_number }}</td>
                <th>Bank A/C no.</th>
                <td style="margin-left:50px"> {{ $employee->account_number }}</td>
                <th style="margin-left:50px">Address</th>
                <td>{{ $employee->address }}</td>
            </tr>
            <tr>
                <th>Grade:</th>
                <td>18</td>
                <th>Designation</th>
                <td>{{ $employee->job_title }}</td>
                <th style="margin-left:50px">PAN No:</th>
                <td>{{ $employee->pan_no }}</td>
               
            </tr>
            @endforeach
            @endforeach
            @foreach($salaryRevision as $employee)
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