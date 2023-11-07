    <div>
        <style>
            /* CSS Styles */
            .company-list {
                font-family: 'Montserrat', sans-serif;
                background-color: #f5f5f5;
                padding: 20px;
            }

            .company-item {
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 20px;
                margin-bottom: 20px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                position: relative;
            }

            .company-logo img {
                width: 300px;
                height: 90px;
                object-fit: contain;
                border: 1px solid #ddd;
                border-radius: 5px;
                margin-right: 20px;
            }

            .label {
                font-weight: bold;
                font-size: 16px;
                margin: 5px 0;
            }

            .back-button {
                text-align: right;
            }

            .back-button a {
                text-decoration: none;
                background-color: #02134F;
                color: white;
                padding: 5px;
                border-radius: 5px;
                font-weight: bold;
                margin-right: 10px;
            }

            .data {
                font-size: 14px;
                margin: 5px 0;
            }

            .data i {
                margin-right: 5px;
            }

            .right-arrow {
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translateY(-50%);
            }

            .right-arrow i {
                font-size: 20px;
            }

            .timestamps {
                font-size: 12px;
                color: #777;
            }
        </style>
        <div class="container-1" style="background-color: #02134F; color: white; padding: 8px;">
            <div style="display: flex; align-items: start; justify-content: start;">
                <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="Logo" style="width: 200px; height: 50px; margin-right: 10px;">
                <h1 style="font-size: 21px; margin-left:21%">Job Seeker - {{$user->full_name}}</h1>
            </div>

        </div>

        <div class="row-1" style="margin-left: 60%;margin-top:10px">
            <a href="/Jobs" style="text-decoration: none;">
                <button style="font-size:12px;width: 130px;height:30px; border-radius: 5px; margin: 0; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                <i class="fas fa-briefcase" style="margin-right: 5px;"></i> 
                    Jobs</button>
            </a>
            <a href="/AppliedJobs" style="text-decoration: none;">
                <button style="font-size:12px;width: 130px;height:30px; border-radius: 5px; margin: 0; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                    <i class="fas fa-check" style="margin-right: 5px;"></i> Applied Jobs</button>
            </a>
            <button style="font-size:12px;width: 100px; border-radius: 5px;height:30px; background-color: rgb(2, 17, 79); color: white;margin-left: 5px;">
                <a href="/UserProfile" style="text-decoration: none;color:white"> <i class="fa fa-user" style="margin-right: 5px;"></i> Profile</a>
            </button>
            <button style="font-size:12px;margin-left: 5px;width: 100px; border-radius: 5px;height:30px; background-color: rgb(2, 17, 79); color: white;" wire:click="logout"> <i class="fas fa-sign-out-alt" style="margin-right: 5px;"></i> Logout</button>
        </div>

        <div class="company-list" style="margin-top: 5px;">
            <h4 style="text-align: center;">List Of Companies</h4>
            @foreach ($companies as $company)
            <div class="company-item">
                <div class="row">
                    <div class="col-md-4">
                        <div class="company-logo">
                            <img src="{{ $company->company_logo }}" alt="Company Logo">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h6>
                            {{ $company->company_name }}
                        </h6>
                        <div class="row">
                            <div class="col">
                                <div class="data" style="width: 450px;">
                                    <i class="fas fa-map-marker-alt"></i>
                                    {{ $company->company_address1 }}, {{ $company->company_address2 }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="data">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ date('d M Y', strtotime($company->company_registration_date)) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="data" style="width: 450px;">
                                    <i class="far fa-envelope"></i>
                                    {{ $company->contact_email }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="data">
                                    <i class="fas fa-phone"></i>
                                    {{ $company->contact_phone }}
                                </div>
                            </div>
                        </div>
                        <!-- Add this code inside your foreach loop to display the right arrow icon and trigger the Livewire action -->
                        <a wire:click="showCompanyJobDetails('{{ $company->company_id }}')" style="text-decoration:none;color:black">
                            <div class="right-arrow">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </a>
                        <!-- Add more details as needed -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>