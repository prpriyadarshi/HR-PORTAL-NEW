<div class="container-fluid p-0">
    <div class="row m-0">
        <!-- Left Side (Login Form) -->
        <div class="col-md-6 p-5">
            <div class="logo text-center mb-4">
            </div>
            @if(Session::has('success'))
            <div class="d-flex justify-content-center align-items-center" style="height: 30;margin-bottom:0px">
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size: 12px;">
                    {{ Session::get('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            @endif
            <form wire:submit.prevent="empLogin" class="login-form-with-shadow" style="margin-top: 0px;">
                <div class="logo text-center mb-4">
                    <img src="https://images.g2crowd.com/uploads/product/image/social_landscape/social_landscape_ec40ff0b74fb940aa005e4fb50b3d85d/greythr.jpg" alt="Company Logo" width="200" height="100">
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
                        <img src="https://xsilicasoftwaresolutions.greythr.com/uas/v1/cms/asset/33373960-635b-4019-9571-da5742815943" alt="Los Angeles" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>We had such a great time in LA!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://xsilicasoftwaresolutions.greythr.com/uas/v1/cms/asset/3d201a29-9bb3-4481-bef5-543565a40a7c" alt="Chicago" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://xsilicasoftwaresolutions.greythr.com/uas/v1/cms/asset/5fe7bab4-8479-4266-a749-97a7208b7a40" alt="New York" class="d-block w-100">
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
                            <form wire:submit.prevent="createNewPassword">
                                <!-- Add input fields for new password and confirmation -->
                                <div class="form-group">
                                    <label for="newPassword">New Password</label>
                                    <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="Enter your new password" wire:model="newPassword">
                                    @error('newPassword') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="confirmNewPassword">Confirm New Password</label>
                                    <input type="password" id="confirmNewPassword" name="confirmNewPassword" class="form-control" placeholder="Enter your new password again" wire:model="confirmNewPassword">
                                    @error('confirmNewPassword') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Save Password</button>
                            </form>
                        @else
                            <form wire:submit.prevent="verifyEmailAndDOB">
                                <!-- Add input fields for email and DOB verification -->
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" wire:model="email">
                                    @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="dob">Date of Birth</label>
                                    <input type="text" id="dob" name="dob" class="form-control" placeholder="Enter your date of birth" wire:model="dob">
                                    @error('dob') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Verify</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show blurred-backdrop"></div>




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
