<div>
    <style>
        .links {
            font-size: 12px;
            font-family: Montserrat;
            text-decoration: none;
            color: black;
            cursor: pointer;
            transition: color 0.3s;
        }

        .links:hover {
            color: blue;
        }
    </style>
    <div class="row">
<style>
    /* Define your custom CSS classes */
    .custom-nav-tabs {
        background-color: #f8f9fa; /* Background color for the tabs */
    }

    .custom-nav-link {
        color: #333; /* Text color for inactive tabs */
    }

    .custom-nav-link.active {
        color: #007bff; /* Text color for the active tab */
        background-color: #fff; /* Background color for the active tab */
        border-color: #007bff; /* Border color for the active tab */
    }
</style>

<div class="card" style="width: auto; margin-left: 18%;">
    <ul class="nav custom-nav-tabs"> <!-- Apply the custom class to the nav -->
        <li class="nav-item flex-grow-1">
            <a class="nav-link custom-nav-link" onclick="toggleDetails('personalDetails')">Personal</a>
        </li>
        <li class="nav-item flex-grow-1">
            <a class="nav-link custom-nav-link" onclick="toggleDetails('accountDetails')" >Accounts & Statements</a>
        </li>
        <li class="nav-item flex-grow-1">
            <a class="nav-link custom-nav-link" onclick="toggleDetails('familyDetails')">Family</a>
        </li>
        <li class="nav-item flex-grow-1">
            <a class="nav-link custom-nav-link" onclick="toggleDetails('employeeJobDetails')">Employment & Job</a>
        </li>
        <li class="nav-item flex-grow-1">
            <a class="nav-link custom-nav-link" onclick="toggleDetails('assetsDetails')">Assets</a>
        </li>
    </ul>
</div>





        @foreach($employees as $employee)
        {{-- Personal Tab --}}
       <div class="row" id="personalDetails" style="margin-top:20px;display: none;">
       <div class="col">
            <div class="row" style="border-radius: 5px; height: 250px; width: 100%; background-color: white; margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px">Profile</div>
                <div class="col">
                    <img style="border-radius: 50%; margin-left: 15px" height="80" width="80" src="{{ asset($employee->image) }}">
                    <div style="font-size: 12px; margin-top: 30px; color: grey; margin-left: 15px">
                        Location
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->job_location}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->first_name}} {{$employee->last_name}}
                    </div>
                    <div style="font-size: 12px; margin-top: 30px; color: grey; margin-left: 15px">
                        Employee ID
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->emp_id}}
                    </div>
                    <div style="font-size: 12px; margin-top: 30px; color: grey; margin-left: 15px">
                        Primary Contact No
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->mobile_number}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 30px; color: grey; margin-left: 15px">
                        Company E-mail
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->company_email}}
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 250px; width: 100%; background-color: white;margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px">Personal</div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Blood Group
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->blood_group}}
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Marital Status
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->marital_status}}
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Place Of Birth
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->city}}
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Religion
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->religion}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Date Of Birth
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                    {{ \Carbon\Carbon::parse($employee->date_of_birth)->format('d-M-Y') }}
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Residential Status
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->job_location}}
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Physically Challenged
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->physically_challenge}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Nationality
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->nationality}}
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Spouse
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->spouse}}
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Father Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->father_name}}
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        International Employee
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->inter_emp}}
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 200px; width: 100%; background-color: white; margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px">Address</div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Address
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->address}}
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->first_name}} {{$employee->last_name}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Mobile
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->mobile_number}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Email
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->email}}
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 100px; width: 100%; background-color: white; margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px">Education</div>
                <div class="col" style="margin-left: 15px; font-size: 12px">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        No Data Found
                    </div>
                </div>
            </div>
        </div>
       </div>
        {{-- Accounts & Statements --}}
      <div class="row"style="margin-top:20px;border-radius: 5px;display: none;" id="accountDetails">
      <div class="col" >
            <div class="row" style="border-radius: 5px; height: 100px; width: 100%; background-color: white; margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px">Bank Account</div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Bank Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->bank_name}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Bank Account Number
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->account_number}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Bank Branch
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->bank_branch}}
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 100px; width: 100%; background-color: white;margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px">PF Amount</div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        PF Number
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->pf_no}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        UAN
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->pan_no}}
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 100px; width: 100%; background-color: white; margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px">Others IDS</div>
                <div class="col">
                    <div style="margin-left: 15px; font-size: 12px">
                        ___
                    </div>
                </div>
                <div class="col">
                    <div style="color: red; margin-left: 15px; font-size: 12px">
                        Unverified
                    </div>
                </div>
            </div>
        </div>

      </div>
        {{-- Family --}}
       <div class="row" style="margin-top:20px;border-radius: 5px;display: none;" id="familyDetails">
       <div class="col" >
            <div class="row" style="border-radius: 5px; height: 180px; width: 100%; background-color: white; margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px">Family</div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Father Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->father_name}}
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Mother Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->mother_name}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Date of Birth
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                    {{ \Carbon\Carbon::parse($employee->parent_dob)->format('d-M-Y') }}
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Nationality
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->nationality}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Blood Group
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->parent_bld_group}}
                    </div>
                </div>
            </div>
        </div>
       </div>
        {{-- Employment & Job --}}
      <div class="row" style="margin-top:20px;border-radius: 5px;display: none;" id="employeeJobDetails">
      <div class="col" >
            <div class="row" style="border-radius: 5px; height: 250px; width: 100%; background-color: white; margin-bottom: 20px;">
                <div class="row">
                    <div class="col">
                        <div style="margin-top: 2%;margin-left:15px">Current Position</div>
                    </div>
                    <div class="col">
                        <div style="margin-top: 2%; font-size: 12px; color: blue; margin-left: 25px">
                            Resign
                        </div>
                    </div>
                    <div class="col">
                        <div style="margin-top: 2%; font-size: 12px; color: indigo; margin-right: 3px">
                            <button style="background-color: blue; color: white; border-radius: 5px">View TimeLine</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Reporting To
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->report_to}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Department
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->department}}
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Subdepartment
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->Subdepartment}}
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Designation
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->job_title}}
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Location
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->job_location}}
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Date of Join
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                    {{ \Carbon\Carbon::parse($employee->hire_date)->format('d-M-Y') }}
                    </div>
                </div>
            </div>
        </div>

      </div>
        {{-- Assets --}}
        <div class="row"style="margin-top:20px;border-radius: 5px;display: none;" id="assetsDetails">
        <div class="col" >
            <div class="row" style="border-radius: 5px; height: 200px; width: 100%; background-color: white; margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px">Access Card Details</div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Card No
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        {{$employee->adhar_no}}
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        PREVIOUS
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        No Data Found
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Validity
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 100px; width: 100%; background-color: white; margin-bottom: 20px;">
                <div style="margin-top: 2%;margin-left:15px;">Assets</div>
                <div class="col">
                    <div style="font-size: 12px; color: black; margin-left: 15px">
                        No Data Found
                    </div>
                </div>
            </div>
        </div>
        </div>
        @endforeach

    </div>
</div>
<script>
    function toggleDetails(tabId) {
        const tabs = ['personalDetails', 'accountDetails', 'familyDetails', 'employeeJobDetails', 'assetsDetails'];
        tabs.forEach(tab => {
            if (tab === tabId) {
                document.getElementById(tab).style.display = 'block';
            } else {
                document.getElementById(tab).style.display = 'none';
            }
        });
    }
</script>