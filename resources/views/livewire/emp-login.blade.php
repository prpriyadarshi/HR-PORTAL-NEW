<div class="container-fluid p-0">
    <div class="row justify-content-center" style="margin-top:15px">
        <div class="col text-center" style="margin-left: 72%;">
            <button wire:click="jobs" style="width: 150px; border-radius: 5px; margin: 0; background-color: rgb(2, 17, 79); color: white">Jobs</button>
        </div>
        <div class="col text-center">
            <button wire:click="createCV" style="width: 150px; border-radius: 5px; margin: 0; background-color: rgb(2, 17, 79); color: white">Create CV</button>
        </div>
    </div>


    <div class="row m-0">
        <!-- Left Side (Login Form) -->
        <div class="col-md-6 p-5">
            <div class="logo text-center mb-4">
            </div>
            @if(Session::has('success'))
            <div style="height: 30px;width:400px;margin-bottom:0px;margin-left:13%" class="logo text-center mb-4">
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size: 12px;">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            @endif
            <form wire:submit.prevent="empLogin" class="login-form-with-shadow" style="margin-top: 0px;">
                <div class="logo text-center mb-1" style="padding-top: 20px;">
                    <img src="{{ asset('images/HR Portal.png') }}" alt="Company Logo" width="150" height="80">
                </div>

                <hr class="bg-white" />
                <header _ngcontent-hyf-c110="" class="mb-12 text-center">
                    <div _ngcontent-hyf-c110="" class="text-12gpx font-bold font-title-poppins-bold opacity-90 text-text-default justify-items-center">Hello there! <span _ngcontent-hyf-c110="" class="font-emoji text-12gpx">👋</span>
                    </div>
                </header><br>
                @if($error)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Employee ID" wire:model="form.emp_id" />
                    @error("form.emp_id") <p class="pt-2 px-1 text-danger">{{
                        str_replace('form.emp id', 'Employee ID', $message) }}</p> @enderror
                </div>
                <div class="form-group" style="margin-top: 20px;">
                    <input type="password" class="form-control" placeholder="Password" wire:model="form.password" />
                    @error("form.password") <p class="pt-2 px-1 text-danger">{{
                    str_replace('form.password', 'Password', $message) }}</p> @enderror
                </div>
                <div style="margin-left: 60%; text-align: center;" wire:click="show">
                    <span><a href="#" wire:click="show">Forgot Password?</a></span>
                </div>
                <div class="form-group" style="text-align: center;margin-top:10px">
                    <input type="submit" class="btn btn-primary btn-block" value="Login" />
                </div>
            </form>

        </div>
        <!-- Right Side (Carousel) -->
        <div class="col-md-6 p-0">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel" style="background-color: f0f0f0; aspect-ratio: 16/9;border-radius:10px">
                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/communication.png') }}" alt="Los Angeles" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/tasks.png') }}" alt="Chicago" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/Working.png') }}" alt="New York" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>
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

        @if ($showDialog)
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px; width: 600px;">
                        <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title">
                            <b>{{ $verified ? 'Create New Password' : 'Verify Email and DOB' }}</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="remove">
                            <span aria-hidden="true" style="color: white;">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #f0f0f0; padding: 20px; width: 600px;">
                        @if ($verified)
                        <!-- Form for creating a new password -->
                        <form wire:submit.prevent="createNewPassword">
                            <!-- Add input fields for new password and confirmation -->
                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="Enter your new password" wire:model="newPassword">
                                @error('newPassword') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="newPassword_confirmation">Confirm New Password</label>
                                <input type="password" id="newPassword_confirmation" name="newPassword_confirmation" class="form-control" placeholder="Enter your new password again" wire:model="newPassword_confirmation">
                                @error('newPassword_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>

                            <button type="submit" class="btn btn-success">Save Password</button>

                            <!-- Success or error message for password update -->
                            @if(session()->has('passwordMessage'))
                            <div class="alert alert-success mt-3">
                                {{ session('passwordMessage') }}
                            </div>
                            @endif
                        </form>
                        @else
                        <!-- Form for verifying email and DOB -->
                        <form wire:submit.prevent="verifyEmailAndDOB">
                            <!-- Add input fields for email and DOB verification -->
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" wire:model="email">
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <div class="input-group">
                                    <input type="date" id="dob" name="dob" class="form-control" wire:model="dob" max="{{ date('Y-m-d') }}">
                                </div>
                                @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>


                            <button type="submit" class="btn btn-primary">Verify</button>

                            <!-- Success or error message for email and DOB verification -->
                            @if(session()->has('emailDobMessage'))
                            <div class="alert alert-{{ session('emailDobMessageType') }} mt-3">
                                {{ session('emailDobMessage') }}
                            </div>
                            @endif
                        </form>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show blurred-backdrop"></div>
        @endif

        @if ($showSuccessModal)
        <!-- Success Message and Password Change Modal -->
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px; width: 600px;">
                        <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title">
                            <b>Success Message</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeSuccessModal">
                            <span aria-hidden="true" style="color: white;">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #f0f0f0; padding: 20px; width: 600px;">
                        <p>Verification successful! Do you want to change your password?</p>
                        <button type="button" class="btn btn-primary" wire:click="showPasswordChangeModal">Change Password</button>
                        <button type="button" class="btn btn-secondary" wire:click="closeSuccessModal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show blurred-backdrop"></div>
        @endif

        @if ($showErrorModal)
        <!-- Error Modal -->
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(255, 0, 0); height: 50px; width: 600px;">
                        <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title">
                            <b>Error Message</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closeErrorModal">
                            <span aria-hidden="true" style="color: white;">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #f0f0f0; padding: 20px; width: 600px;">
                        <p>Sorry You Are not Verified.... Please try again.</p>
                        <button type="button" class="btn btn-danger" wire:click="closeErrorModal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show blurred-backdrop"></div>
        @endif


        @if ($passwordChangedModal)
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(9, 45, 206); height: 50px; width: 600px;">
                        <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title">
                            <b>Success Message</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="closePasswordChangedModal">
                            <span aria-hidden="true" style="color: white;">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="background-color: #f0f0f0; padding: 20px; width: 600px;">
                        <p>Password Changes Successfully...</p>
                        <button type="button" class="btn btn-danger" wire:click="closePasswordChangedModal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endif




        <style>
            /* Add box shadow to the login form */
            .login-form-with-shadow {
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
                padding: 20px;
                border-radius: 10px;
                background-color: "white";
                max-width: 400px;
                margin: 0 auto;
                margin-top: 15%;
            }
        </style>
        @livewireScripts

    </div>