<div class="container-fluid p-0">
    <div class="row m-0">
        <!-- Left Side (Login Form) -->
        <div class="col-md-6 p-5">
            <div class="logo text-center mb-4">
                <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="Company Logo" width="150">
            </div>
            <form wire:submit.prevent="login" class="login-form-with-shadow">
                <div class="logo text-center mb-4">
                    <img src="https://payg.in/assets/img/logo.svg" alt="Company Logo" width="150">
                </div>
                <header _ngcontent-hyf-c110="" class="mb-12 text-center">
                    <div _ngcontent-hyf-c110="" class="text-12gpx font-bold font-title-poppins-bold opacity-90 text-text-default justify-items-center">Hello there! <span _ngcontent-hyf-c110="" class="font-emoji text-12gpx">👋</span></div></header>
                <!-- Username Input -->
                <div class="form-group">
                    <label for="username">Login ID</label>
                    <input type="text" wire:model="username" class="form-control" id="username" required>
                </div>
                <!-- Password Input -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" wire:model="password" class="form-control" id="password" required>
                </div>
                <!-- Login Button -->
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <!-- Right Side (Carousel) -->
        <div class="col-md-6 p-0">
            <!-- Carousel -->
            <div id="demo" class="carousel slide" data-bs-ride="carousel" style="background-color: #fff; aspect-ratio: 16/9;">
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
                        <img src="https://xsilicasoftwaresolutions.greythr.com/uas/v1/cms/asset/33373960-635b-4019-9571-da5742815943" alt="Chicago" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://xsilicasoftwaresolutions.greythr.com/uas/v1/cms/asset/33373960-635b-4019-9571-da5742815943" alt="New York" class="d-block w-100">
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



    <style>
        /* Add box shadow to the login form */
        .login-form-with-shadow {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            border-radius: 10px;
        }
    </style>
    @livewireScripts

</div>


