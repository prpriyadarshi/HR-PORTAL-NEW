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

        {{-- Personal Tab --}}
        <div class="col" id="personalDetails" style="display: none;" >
            <div class="row" style="border-radius: 5px; height: 250px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Profile</div>
                <div class="col">
                    <img style="border-radius: 50%; margin-left: 15px" height="80" width="80" src="https://mlwfc8l8ikil.i.optimole.com/jr6wDGA-tSMksOQ4/w:374/h:535/q:90/https://nationaltranslationservices.com.au/wp-content/uploads/2020/07/bottom-banner-2.png">
                    <div style="font-size: 12px; margin-top: 30px; color: grey; margin-left: 15px">
                        Location
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Hyderabad
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Asapu Sri Kumar Manikanta
                    </div>
                    <div style="font-size: 12px; margin-top: 30px; color: grey; margin-left: 15px">
                        Employee ID
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        XSS-0478
                    </div>
                    <div style="font-size: 12px; margin-top: 30px; color: grey; margin-left: 15px">
                        Primary Contact No
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        6305889568
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 30px; color: grey; margin-left: 15px">
                        Company E-mail
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        manikanta.asapu@gmail.com
                    </div>
                    <div style="font-size: 12px; margin-top: 30px; color: grey; margin-left: 15px">
                        Extension
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        _____
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
                        ______
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Marital Status
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        _____
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Place Of Birth
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ______
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Religion
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        _____
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Date Of Birth
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        13-10-2002
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Marriage Date
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        _____
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Residential Status
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ______
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Physically Challenged
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        _____
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Nationality
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Spouse
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        _____
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Father Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Satya Sukumar
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        International Employee
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        No
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 250px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Address</div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Address
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        _____
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Phone 1
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        _____
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Extension
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Phone 2
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Fax
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Email
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Mobile No
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 100px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Education</div>
                <div class="col" style="margin-left: 15px; font-size: 12px">
                    <div>
                        No Data Found
                    </div>
                </div>
            </div>
        </div>

        {{-- Accounts & Statements --}}
        <div class="col" style="border-radius: 5px;display: none;"  id="accountDetails">
            <div class="row" style="border-radius: 5px; height: 100px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Bank Account</div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Bank Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Axis Bank
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Bank Account Number
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        922010060268217
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Bank Branch
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        MADHAPUR
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 250px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">PF Amount</div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        PF Number
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Eligibility
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Eligible
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        KYC Status
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Not Done, 28 Jan, 2023
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        UAN
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        101902552073
                    </div>
                </div>
                <div class="col">
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        PF Join Date
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        —
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        KYC Document
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        —
                    </div>
                </div>
            </div>

            <div class="row" style="border-radius: 5px; height: 100px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Others IDS</div>
                <div class="col">
                    <div style="margin-left: 15px; font-size: 12px">
                        —
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
        <div class="col" style="border-radius: 5px;display: none;"  id="familyDetails">
            <div class="row" style="border-radius: 5px; height: 180px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
                <div style="margin-top: 2%">Father</div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Name
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Sukumar
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Gender
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Male
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Date of Birth
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Nationality
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; margin-top: 20px; color: grey; margin-left: 15px">
                        Blood Group
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        ____
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
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Costcenter
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        NA
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Costcenter
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        NA
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Reporting To
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        GYAN PRABODH DASARI
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Department
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Technology
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Grade
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        NA
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Subdepartment
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Development
                    </div>
                </div>
                <div class="col">
                    <div style="font-size: 12px; color: grey; margin-left: 15px">
                        Designation
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        Software Engineer I
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Location
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        MADHAPUR
                    </div>
                    <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                        Date of Join
                    </div>
                    <div style="margin-left: 15px; font-size: 12px">
                        01-05-2022
                    </div>
                </div>
            </div>
        </div>

        {{-- Assets --}}
        <div class="col" style="border-radius: 5px;display: none;"id="assetsDetails">
    <div class="row" style="border-radius: 5px; height: 200px; width: 600px; background-color: white;margin-left: 5%; margin-bottom: 20px;">
        <div style="margin-top: 2%">Access Card Details</div>
        <div class="col">
            <div style="font-size: 12px; color: grey; margin-left: 15px">
                Card No
            </div>
            <div style="margin-left: 15px; font-size: 12px">
                ____
            </div>
            <div style="margin-top: 20px; font-size: 12px; color: grey; margin-left: 15px">
                PREVIOUS
            </div>
            <div style="margin-left: 15px; font-size: 12px">
                No data Found.
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
