<div style="width: 400px;">
    <script src="{{ asset('livewire/livewire.js') }}" defer></script>

    <style>
        .left-menu {
            width: 150px;

            background-color: #f0f0f0;
            padding-right: 30px;
            border-right: 1px solid #ccc;
            /* Add a vertical line to the right of the left menu */
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <!-- resources/views/your-view.blade.php -->

    <div class="container">
        @if (session()->has('success'))
        <div class="custom-alert alert-success" style="text-align: center;margin-left:50%;width: 500px;">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(function() {
                const successMessage = document.querySelector('.custom-alert');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 5000);
        </script>
        @endif


        <div class="left-menu">
            <h2>Menu</h2>
            <!-- Add your menu items here -->
        </div>

        <!-- Content Area -->
        <div class="content">
            <div style="display:flex;">
                <div>
                    <h1 style="margin-top: 20px; font-size: 24px; font-family: montserrat;width: 650px">
                        Good Evening
                    </h1>
                    <div _ngcontent-eff-c326="" style="-webkit-tap-highlight-color: rgba(0,0,0,0); tab-size: 4; -webkit-text-size-adjust: 100%; visibility: inherit; font-family: Open Sans, sans-serif; font-weight: 400; font-style: normal; font-stretch: normal; letter-spacing: normal; text-align: left; font-size: 1rem; line-height: 1.5rem; --tw-text-opacity: 1; color: rgba(103,122,142,var(--tw-text-opacity)); box-sizing: border-box; border: 0 solid; --tw-shadow: 0 0 transparent; --tw-ring-inset: var(--tw-empty,); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent;">
                        The great thing in this world is not so much where you stand, as in what direction you are moving.
                    </div>
                    <div _ngcontent-eff-c326="" class="author text-black pt-1x uppercase pb-2x text-sm ng-star-inserted" style="-webkit-tap-highlight-color: rgba(0,0,0,0); tab-size: 4; -webkit-text-size-adjust: 100%; visibility: inherit; font-family: Open Sans, sans-serif; font-weight: 400; font-style: normal; font-stretch: normal; letter-spacing: normal; text-align: left; font-size: 1rem; line-height: 1.5rem; --tw-text-opacity: 1; color: rgba(103,122,142,var(--tw-text-opacity)); box-sizing: border-box; border: 0 solid; --tw-shadow: 0 0 transparent; --tw-ring-inset: var(--tw-empty,); --tw-ring-offset-width: 0px; --tw-ring-offset-color: #fff; --tw-ring-color: rgba(59,130,246,0.5); --tw-ring-offset-shadow: 0 0 transparent; --tw-ring-shadow: 0 0 transparent;">
                        - Oliver Wendell Holmes
                    </div>


                </div>
                <img src="https://cdn.dribbble.com/users/35381/screenshots/1928915/media/e5dd9341fce5ae6146dceb9cc485e611.png?compress=1&resize=768x576&vertical=top" alt="Image Description" style="height: 200px;width:500px; margin-right: 10px;">

            </div>
            <div class="content" style="display:flex">
                <div class="container">

                    <div class="row" style="display: flex;">
                        <div class="content" style="display: flex;">
                            <!-- Review Section -->
                            <div class="column">
                                <div style="width: 280px; height: 220px; border-radius: 5px; border: 1px solid #CFCACA; margin-top: 20px; background-color: white;">
                                    <div style="color: #677A8E; margin-left: 40px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                        Review
                                    </div>
                                    <img src="https://ftl.technology/images/theme-pics/case.png" alt="Image Description" style="height: 100px; width: 100px; margin-top: 10px; margin-left: 80px;">
                                    <p style="color: #677A8E; margin-left: 50px; font-size: 14px; font-family: Open Sans, sans-serif;">Hurrah! You've nothing to review.</p>
                                </div>
                            </div>

                            <!-- Swipes Out Box -->
                            <div class="column " style="margin-left:10px;margin-top:10px">
                                <div style="width: 270px; height: 180px; border-radius: 5px; border: 1px solid #CFCACA; margin-right: 10px; margin-top: 20px; background-color: #EDF3FF; margin-left: 5px;">
                                    <div style="color: black; margin-left: 20px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                        <p style="font-weight: normal;">{{$currentDate}}</p>
                                        <p style="margin-top: 10px; color: #9E9696; font-size: 12px;">{{$currentDay}} | 10:00 AM to 07:00 PM</p>
                                        <div style="font-family: Open Sans, sans-serif; font-size: 14px;" id="current-time">15 : 19 : 00</div>
                                        <script>
                                            function updateTime() {
                                                const currentTimeElement = document.getElementById('current-time');
                                                const now = new Date();
                                                const hours = String(now.getHours()).padStart(2, '0');
                                                const minutes = String(now.getMinutes()).padStart(2, '0');
                                                const seconds = String(now.getSeconds()).padStart(2, '0');
                                                const currentTime = `${hours} : ${minutes} : ${seconds}`;
                                                currentTimeElement.textContent = currentTime;
                                            }
                                            updateTime();
                                            setInterval(updateTime, 1000);
                                        </script>
                                        <div class="A" style="display: flex;margin-top:10px">
                                            <a style="width:100px;font-size:13px;margin-top:7px;cursor: pointer;color:blue" wire:click="open">View Swipes</a>
                                            @if ($showAlertDialog)
                                            <div class="modal" tabindex="-1" role="dialog" style="display: block;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                                                            <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>Swipes</b></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                                                                <span aria-hidden="true" style="color: white;">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col" style="font-size: 10px;">Date : <b>{{$currentDate}}</b></div>
                                                                <div class="col" style="font-size: 10px;">Shift Time : <b>10:00 to 19:00</b></div>
                                                            </div>
                                                            <table border="1" style="margin-top: 10px;">
                                                                <tr>
                                                                    <th style="font-size: 12px; color: grey;">Swipe Time</th>
                                                                    <th style="font-size: 12px; color: grey">Sign-In / Sign-Out</th>
                                                                </tr>

                                                                @if (!is_null($swipeDetails) && $swipeDetails->count() > 0)
                                                                @foreach ($swipeDetails as $swipe)
                                                                <tr>
                                                                    <td style="font-size: 10px; color: black;">{{ $swipe->swipe_time }}</td>
                                                                    <td style="font-size: 10px; color: black;">{{ $swipe->in_or_out }}</td>
                                                                </tr>
                                                                @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="2">No swipe records found for today.</td>
                                                                </tr>
                                                                @endif

                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-backdrop fade show blurred-backdrop"></div>
                                            @endif
                                            <button id="signButton" style="color: white; width: 80px; height: 30px; background-color: rgb(2, 17, 79); border: 1px solid #CFCACA; border-radius: 5px; margin-left: 50px;" wire:click="toggleSignState">
                                                @if ($signIn)
                                                Sign Out
                                                @else
                                                Sign In
                                                @endif
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column" style="width:360px;">
                                <div style="width: 310px; height: 300px; border-radius: 5px; border: 1px solid #CFCACA; margin-top: 20px; background-color: white;margin-left:30px">
                                    <div style="color: #677A8E; margin-left: 20px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                        Upcoming Holidays
                                        <span style="font-size: 14px; margin-left: 130px;">&rarr;</span>
                                    </div>

                                    <div>
                                        <p style="color: #677A8E; margin-left: 20px; font-size: 14px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                            02 Oct Monday<br>
                                            <span style="font-size: 12px;">Gandhi Jayanti</span>
                                        </p>

                                    </div>
                                    <div>
                                        <p style="color: #677A8E; margin-left: 20px; font-size: 14px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                            02 Oct Monday<br>
                                            <span style="font-size: 12px;">Gandhi Jayanti</span>
                                        </p>

                                    </div>
                                    <div>
                                        <p style="color: #677A8E; margin-left: 20px; font-size: 14px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                            02 Oct Monday<br>
                                            <span style="font-size: 12px;">Gandhi Jayanti</span>
                                        </p>

                                    </div>
                                    <div>
                                        <p style="color: #677A8E; margin-left: 20px; font-size: 14px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                            02 Oct Monday<br>
                                            <span style="font-size: 12px;">Gandhi Jayanti</span>
                                        </p>

                                    </div>
                                </div>

                                <!-- Additional Column with Black Background -->

                            </div>
                        </div>

                        <div class="container">
                            <div class="row" style="display: flex;">
                                <div class="content" style="display: flex;margin-right:10px">
                                    <!-- Quick Access Box -->
                                    <div class="column">
                                        <div style="width: 300px; height: 200px; border-radius: 5px; border: 1px solid #CFCACA; margin-top: 5px; background-color: white;">
                                            <div style="color: #677A8E; margin-left: 20px; font-family: Open Sans, sans-serif;">
                                                Quick Access
                                            </div>
                                            <div style="display: flex;">
                                                <div class="B" style="color: black; margin-left: 20px; font-family: Open Sans, sans-serif; font-size: 12px; margin-bottom: 60px;">
                                                    <br>Reimbursement</br>
                                                    <br>IT Statement</br>
                                                    <br>YTD Reports</br>
                                                    <br>Loan Settlement</br>
                                                </div>
                                                <p style="width: 130px; height: 140px; background-color: #FFF8F0; margin-left: auto; margin-right: 20px; border-radius: 5px; font-size: 11px; font-family: montserrat; padding-top: 10px">Use quick access to view important salary details.</p>
                                            </div>
                                        </div>
                                        <div class="column" style="margin-bottom: 60px;">
                                            <div style="width: 300px; height: 120px; border-radius: 5px; border: 1px solid #CFCACA; background-color: white;margin-top:20px ">
                                                <div style="color: #677A8E; margin-left: 20px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                                    POI
                                                </div>
                                                <div style="display:flex; margin-top: 20px;"> <!-- Added margin-top here -->
                                                    <img src="https://th.bing.com/th/id/OIP.So8FF1OSJHwqUi-IcIgQIgAAAA?pid=ImgDet&w=104&h=109&c=7&dpr=1.5" alt="Image Description" style="height: 30px; width: 30px; margin-top: 10px; margin-left: 20px;">
                                                    <p style="color: #677A8E; margin-left: 20px; font-family: Open Sans, sans-serif; font-size: 14px;">Hold on! You can submit your Proof of Investments (POI) once released.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Swipes Out Box -->
                                    <div class="column" style="margin-bottom:100px;">
                                        <div style="width: 300px; height: 400px; border-radius: 5px; border: 1px solid #CFCACA;margin-bottom:50px;margin-left:5px;background-color:white">
                                            <div style="color: #677A8E; margin-left: 10px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                                Payslip
                                                <b style="font-size:16px; margin-left: 180px;">&rarr;</b>
                                            </div>

                                            <div style="display:flex">
                                                <img src="https://www.litmus.com/wp-content/uploads/2021/03/Dark-vs-Light-Mode-Poll-Results-300x300.png" alt="Image Description" style="height: 110px; width: 130px; margin-top: 20px; margin-left: 20px;">
                                                <div class="c" style="font-size: 13px; font-weight: normal;margin-left: 60px;font-family: Open Sans, sans-serif;margin-top:30px;font-weight:100px;color:#9E9696"> <br>Aug 2023</br>
                                                    <br>30</br>
                                                    <br>Paid Days</br>
                                                </div>
                                            </div>

                                            <div style="display:flex ;color: #677A8E; margin-left: 20px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight:100px;">
                                                <br>Gross Pay</br>
                                                <br>Deduction</br>
                                                <br>Net Pay</br>

                                                <div style="margin-left:120px;margin-top:20px">
                                                    <p>₹19,040.00</p>
                                                    <p>₹19,040.00</p>
                                                    <p>₹19,040.00</p>

                                                </div>
                                            </div>
                                            <div class="column" style="display:flex; color:#1090D8; margin-left: 20px; font-size: 14px; font-family: Open Sans, sans-serif; margin-top: 20px;font-weight:100px">
                                                <p>Download</p>
                                                <p style="margin-left: 120px;">Show Salary</p>
                                            </div>

                                        </div>

                                    </div>


                                    <div class="column" style="margin-left:20px">
                                        <div style="width: 300px; height: 200px; border-radius: 5px; border: 1px solid #CFCACA; margin-top: 20px; background-color: white;">
                                            <div style="color: #677A8E; margin-left: 20px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                                IT Declaration
                                            </div>

                                            <div style="display: flex;">
                                                <img src="https://th.bing.com/th/id/OIP.ISoRyxX3652noSb_DpscdAHaHa?pid=ImgDet&rs=1" alt="Image Description" style="height: 60px; width: 60px; margin-top: 20px; margin-left: 20px;">
                                                <div class="B" style="color:  #677A8E; margin-left: 20px; font-family: Open Sans, sans-serif; font-size: 14px;margin-top:10px">
                                                    <br>Hurrah! Considered your IT declaration for Apr 2023.</br>
                                                    <button style="color: white; width: 80px; height: 30px; background-color: #1090D8; border: 1px solid #CFCACA; border-radius: 5px;margin-left:100px;margin-top:15px">View</button>


                                                </div>
                                            </div>
                                            <div class="column" style="margin-top:50px">
                                                <div style="width: 300px; height: 230px; border-radius: 5px; border: 1px solid #CFCACA; background-color: white;margin-top:50px ;margin-left:5px">
                                                    <div style="color: #677A8E; margin-left: 20px; font-family: Open Sans, sans-serif; margin-top: 20px;">
                                                        Track
                                                    </div>

                                                    <div>
                                                        <img src="https://resumekit.com/blog/wp-content/uploads/2023/02/Optimal-outline-for-a-cover-letter-2-1.png" alt="Image Description" style="height: 100px; width: 160px; margin-top: 20px; margin-left: 80px;">
                                                        <div class="B" style="color: black; margin-left: 20px; font-family: Open Sans, sans-serif; font-size: 14px;">
                                                            <p style="color: #677A8E; margin-left: 20px; font-family: Open Sans, sans-serif; margin-top: 20px;">All good! You've nothing new to track.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="column" style="background: brown;">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>