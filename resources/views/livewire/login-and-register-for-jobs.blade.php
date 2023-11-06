<div class="container-fluid p-0">
    <div style="text-align: center;background-color: #02134F;color:white;padding:8px;margin-bottom:10px">
        Registration & Login Screen
    </div>
    <a href="/emplogin" style="text-decoration:none;margin-left:10px;
            font-family: Montserrat;background-color:rgb(2, 17, 79);color:white;padding:5px;border-radius:5px
        ">Back</a>
    <button
        style="margin-left:85%;width: 120px;margin-top:5px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;">
        <a style="text-decoration: none; color: white; "><a href="/CompanyLogin"
                style="text-decoration: none;color:white">HR Login</a></a>
    </button>
    <div class="row">
        <div class="col" style="margin-left: 80px;">
            <div class="form-group" style="padding: 20px;">
                <div>
                    <div style="margin-left: 25%;margin-bottom:10px">

                        <input style="font-family: Montserrat;" type="radio" name="formType" value="register"
                            wire:click="$set('activeTab', 'register')"> Register
                        <input style="font-family: Montserrat;" type="radio" name="formType" value="login"
                            wire:click="$set('activeTab', 'login')"> Login
                    </div>
                    @if($activeTab=="register")
                    <div class="card" style="width:400px;padding:10px">
                        <form>
                            <!-- Registration form fields -->
                            <div>
                                <div class="row" style="display: flex;">
                                    <div class="col" style="display: flex;">
                                        <label style="font-size:12px;font-family: Montserrat;" for="fullName">User
                                            Type:</label> <br>
                                    </div>
                                    <div class="col" style="font-size:12px;">
                                        <input style="font-size:12px;font-family: Montserrat;" type="radio"
                                            name="formType" value="jobSeeker"
                                            wire:click="$set('user_type', 'Job Seeker')"> Job Seeker
                                    </div>
                                    <div class="col" style="font-size:12px;margin-right:26%">
                                        <input style="font-size:12px;font-family: Montserrat;" type="radio"
                                            name="formType" value="vendor" wire:click="$set('user_type', 'Vendor')">
                                        Vendor
                                    </div>
                                </div>

                                @error('user_type') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            @if($user_type == "Job Seeker")
                            <div class="form-group">
                                <label style="font-size:12px;font-family: Montserrat;" for="fullName">Full Name:</label>
                                <br>
                                <input wire:model="user_full_name" style="font-size:12px" type="text"
                                    class="form-control">
                                @error('user_full_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="email">Email:</label><br>
                                <input wire:model="user_email" style="font-size:12px" type="email" class="form-control">
                                @error('user_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="password">Password:</label><br>
                                <input wire:model="user_password" style="font-size:12px" type="password"
                                    class="form-control">
                                @error('user_password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="mobile">Mobile No:</label><br>
                                <input wire:model="user_mobile_no" style="font-size:12px" type="text"
                                    class="form-control" id="mobileInput"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
                                @error('user_mobile_no') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="workStatus">Work Status:</label><br>
                                <select wire:model="user_work_status" style="font-size:12px;" class="form-control">
                                    <option style="font-size:12px" value="">Select Work Status</option>
                                    <option style="font-size:12px" value="employed">Employed</option>
                                    <option style="font-size:12px" value="unemployed">Unemployed</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="address">Address:</label><br>
                                <textarea wire:model="user_address" style="font-size:12px"
                                    class="form-control"></textarea>
                                @error('user_address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="resume">Resume:</label><br>
                                <input wire:model="user_resume" style="font-size:12px" type="file" class="form-control">
                            </div>
                            @endif
                            @if($user_type == "Vendor")
                            <div class="form-group">
                                <label style="font-size:12px;font-family: Montserrat;" for="companyId">Company
                                    ID:</label> <br>
                                <input wire:model="company_id" style="font-size:12px" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label style="font-size:12px;font-family: Montserrat;" for="companyName">Company
                                    Name:</label> <br>
                                <input wire:model="company_name" style="font-size:12px" type="text"
                                    class="form-control">
                            </div>
                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="resume">Company Logo:</label><br>
                                <input style="font-size:12px" type="file" wire:model="company_logo" accept="image/*">
                            </div>
                            @if ($company_logo)
                            <div>
                                <img style="height:90px;width:80px" src="{{ $company_logo->temporaryUrl() }}"
                                    alt="Image Preview" style="max-width: 300px;">
                            </div>
                            @endif
                            <div class="form-group">
                                <label style="font-size:12px;font-family: Montserrat;" for="fullName">Full Name:</label>
                                <br>
                                <input wire:model="user_full_name" style="font-size:12px" type="text"
                                    class="form-control">
                                @error('user_full_name') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="email">Email:</label><br>
                                <input wire:model="user_email" style="font-size:12px" type="email" class="form-control">
                                @error('user_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="mobile">Mobile No:</label><br>
                                <input wire:model="user_mobile_no" style="font-size:12px" type="text"
                                    class="form-control" id="mobileInput"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
                                @error('user_mobile_no') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="address">Address:</label><br>
                                <textarea wire:model="user_address" style="font-size:12px"
                                    class="form-control"></textarea>
                                @error('user_address') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>


                            <div class="form-group" style="margin-bottom: 10px;">
                                <label style="font-size:12px;
            font-family: Montserrat;
                                    " for="password">Password:</label><br>
                                <input wire:model="user_password" style="font-size:12px" type="password"
                                    class="form-control">
                                @error('user_password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            @endif
                            <div style="text-align: center;margin:0px">
                                <button type="button" wire:click="register"
                                    style="font-size:12px;background-color:rgb(2, 17, 79);color:white">Register</button>
                            </div>
                        </form>
                    </div>
                    @endif
                    @if($activeTab=="login")

                    <div class="card" style="width: 400px;padding:10px">
                        <form>
                            <!-- Login form fields -->
                            <div class="row" style="display: flex;">
                                <div class="col" style="display: flex;">
                                    <label style="font-size:12px;font-family: Montserrat;" for="fullName">User
                                        Type:</label> <br>
                                </div>
                                <div class="col" style="font-size:12px;">
                                    <input style="font-size:12px;font-family: Montserrat;" type="radio" name="formType"
                                        value="jobSeeker" wire:click="$set('user_type', 'Job Seeker')"> Job Seeker
                                </div>
                                <div class="col" style="font-size:12px;margin-right:26%">
                                    <input style="font-size:12px;font-family: Montserrat;" type="radio" name="formType"
                                        value="vendor" wire:click="$set('user_type', 'Vendor')"> Vendor
                                </div>
                            </div>
                            @if($user_type=="Job Seeker")
                            <div class="form-group">
                                <label style="font-size:12px" for="loginEmail">Email:</label><br>
                                <input wire:model="login_email" style="font-size:12px" type="email"
                                    class="form-control">
                                @error('login_email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group" style="margin-bottom: 5px;">
                                <label style="font-size:12px" for="loginPassword">Password:</label><br>
                                <input wire:model="login_password" style="font-size:12px" type="password"
                                    class="form-control">
                                @error('login_password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div style="text-align: center;margin:0px">
                                <button type="button" wire:click="login"
                                    style="font-size:12px;background-color:rgb(2, 17, 79);color:white">Login</button>
                            </div>
                            @endif
                            @if($user_type=="Vendor")
                            <div class="form-group">
                                <label style="font-size:12px" for="companyId">Company ID:</label><br>
                                <input wire:model="company_id" style="font-size:12px" type="text" class="form-control">
                                @error('company_id') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <div class="form-group" style="margin-bottom: 5px;">
                                <label style="font-size:12px" for="password">Password:</label><br>
                                <input wire:model="password" style="font-size:12px" type="password"
                                    class="form-control">
                                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div style="text-align: center;margin:0px">
                                <button type="button" wire:click="vendorLogin"
                                    style="font-size:12px;background-color:rgb(2, 17, 79);color:white">Login</button>
                            </div>
                            @endif
                        </form>
                    </div>
                    <div style="margin-top:10px;margin-left:8%">
                        <h6 style="font-size: 12px;"><strong style="color: red;">NOTE : </strong>Before appling any job,
                            Job Seeker login is required.</h6>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- Right Side (Carousel) -->
        <div class="col" style="margin-right: 100px;">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel"
                style="background-color: f0f0f0; aspect-ratio: 16/9;border-radius:10px">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img style="height:400px;width:600px;margin-top:75px;margin-right:60px;border-radius:5px"
                            src="https://skillroads.com/images/blog//blog/best_day_to_apply_for_a_job.jpg"
                            alt="Los Angeles" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img style="height:400px;width:600px;margin-top:75px;margin-right:60px;border-radius:5px"
                            src="https://www.thebalancemoney.com/thmb/PXZhnJk_tId8i_wCoj3aRHpkoNQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/iStock_000061902266_Medium-56b09b2c3df78cf772cffab0.jpg"
                            alt="Chicago" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img style="height:400px;width:600px;margin-top:75px;margin-right:60px;;border-radius:5px"
                            src="https://images.ctfassets.net/pdf29us7flmy/6AEJD3jnfDk9oTiiqpZmAX/7acbb9511f253642f768f0b397a888e6/irz2tf9w.png?w=720&q=100&fm=jpg"
                            alt="New York" class="d-block w-100">
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>

        <style>
        .form-control {
            width: 100%;
        }

        .text-danger {
            font-size: 12px;
        }
        </style>
        @livewireScripts

    </div>