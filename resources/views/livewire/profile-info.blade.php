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
        <div class="card" style="width: auto; height: 125px; margin-left: 3%;border:1px solid white">
            <div>
                <a onclick="toggleDetails('personalDetails')" class="links">1. Personal</a>
            </div>
            <div>
                <a onclick="toggleDetails('accountDetails')" class="links">2. Accounts & Statements</a>
            </div>
            <div>
                <a onclick="toggleDetails('familyDetails')" class="links">3. Family</a>
            </div>
            <div>
                <a onclick="toggleDetails('employeeJobDetails')" class="links">4. Employment & Job</a>
            </div>
            <div>
                <a onclick="toggleDetails('assetsDetails')" class="links">5. Assets</a>
            </div>
        </div>

        @foreach($employees as $employee)
        {{-- Personal Tab --}}
        <div class="col" id="personalDetails" style="display: none;">
            <div class="row" style="border-radius: 5px; height: 250px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Profile</div>
                <div class="col">
                    <img style="border-radius: 50%; margin-left: 15px" height="80" width="80" src="https://mlwfc8l8ikil.i.optimole.com/jr6wDGA-tSMksOQ4/w:374/h:535/q:90/https://nationaltranslationservices.com.au/wp-content/uploads/2020/07/bottom-banner-2.png">
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

            <div class="row" style="border-radius: 5px; height: 250px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Personal</div>
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
                    {{$employee->date_of_birth}}

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

            <div class="row" style="border-radius: 5px; height: 200px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Address</div>
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
                    {{$employee->first_name}}
                    {{$employee->last_name}}

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

            <div class="row" style="border-radius: 5px; height: 100px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Education</div>
                <div class="col" style="margin-left: 15px; font-size: 12px">
                <div style="font-size: 12px; color: grey; margin-left: 15px">
                        No Data Found
                    </div>
                </div>
            </div>
        </div>

        {{-- Accounts & Statements --}}
        <div class="col" style="border-radius: 5px;display: none;" id="accountDetails">
            <div class="row" style="border-radius: 5px; height: 100px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Bank Account</div>
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

            <div class="row" style="border-radius: 5px; height: 100px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">PF Amount</div>
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

            <div class="row" style="border-radius: 5px; height: 100px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Others IDS</div>
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

        {{-- Family --}}
        <div class="col" style="border-radius: 5px;display: none;" id="familyDetails">
            <div class="row" style="border-radius: 5px; height: 180px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Father</div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                    {{$employee->father_name}}

                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Gender
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                    {{$employee->gender}}

                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Date of Birth
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                    {{$employee->parent_dob}}

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

        {{-- Employment & Job --}}
        <div class="col" style="border-radius: 5px;display: none;" id="employeeJobDetails">
            <div class="row" style="border-radius: 5px; height: 250px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div class="row">
                    <div class="col">
                        <div style="margin-top: 2%">Current Position</div>
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
                    {{$employee->hire_date}}
                    </div>
                </div>
            </div>
        </div>

        {{-- Assets --}}
        <div class="col" style="border-radius: 5px;display: none;" id="assetsDetails">
            <div class="row" style="border-radius: 5px; height: 200px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Access Card Details</div>
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

            <div class="row" style="border-radius: 5px; height: 100px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Assets</div>
                <div class="col">
                    <div style="font-size: 12px; color: black; margin-left: 15px">
                        No Data Found
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