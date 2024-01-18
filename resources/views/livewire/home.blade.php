<div>

    <body>
        <div class="container">
            @if (session()->has('success'))
            <div class="custom-alert alert-success" style="text-align: center;margin-left:20%;width: 500px;">
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

        </div>
        <div class="content">
            <div class="row m-0 mb-3">
                <div class="col-md-8">
                    <div class="greet">
                        @if($this->greetingText)
                        <h1 class="greet-text text-secondary-500 pb-1.5x" style="font-size: 24px; font-family: montserrat;width:45%;color:rgb(2, 17, 79)">{{$greetingText}}</h1>
                        @endif
                    </div>

                    <div class="banner-ad text-base max-w-lg text-secondary-400">
                        <carousel class="ng-star-inserted" style="width:470px">
                            <!-- Carousel content goes here -->
                        </carousel>
                        <div class="quote-text" style="font-size:13px;font-family: 'Montserrat', sans-serif;">
                            <!-- Quote text will be dynamically inserted here -->
                        </div>
                        <div class="author-text" style="font-size:13px;font-family: 'Montserrat', sans-serif;">
                            <!-- Author text will be dynamically inserted here -->
                        </div>
                        <div class="watch-video">
                            <p style="font-size:13px;font-family: 'Montserrat', sans-serif;">Watch the video to understand your new Employee Self Service portal quickly.</p>
                            <a href="https://greytip-2.wistia.com/medias/vbxdhiqvk6" class="text-primary-400 pt-1x cursor-pointer text-sm font-semibold pb-2x inline-block">Watch Video</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    @if($this->greetingImage)
                    <img src="{{ asset('/images/' . $greetingImage) }}" alt=" " style="height: 200px; width:280px;">
                    @endif
                    <!-- <img id="greeting-image" src="" alt="Greeting Image" style="height: 200px; width:300px ;margin-left:50px; "> -->
                </div>
            </div>
            <!-- main content -->
            <div class="row m-0">
                <div class="home-col col-md-4 p-1 d-flex flex-column">
                    <div class="home-hover mb-2">
                        <div class="reviews">
                            <div class="bg-white rounded-border " style="border: 1px solid #CFCACA;">
                                <div class="home-heading d-flex justify-content-between p-2">
                                    <div class="section-name rounded">
                                        Review
                                    </div>
                                    <div>
                                        <a href="/employees-review" style="font-size:16px; "><img src="/images/up-arrow.png" alt="" style="width:20px;height:27px;"></a>
                                    </div>
                                </div>
                                @if(($this->count) > 0)
                                <div class="notify d-flex justify-content-between mt-1 p-2">
                                    <p style="color: black; font-size: 0.875rem; font-weight: 500;">
                                        {{$count}} <br>
                                        <span style="color: #778899; font-size: 0.795rem; font-weight: 500;">Things to review</span>
                                    </p>
                                    <img src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-notes-icon-png-image_509622.jpg" alt="" style="height: 50px; width: 50px;">
                                </div>
                                <div class="leave-display d-flex p-2 bg-light border-top">
                                    @php
                                    function getRandomColor() {
                                    $colors = ['#FFD1DC', '#B0E57C', '#ADD8E6', '#E6E6FA', '#FFB6C1'];
                                    return $colors[array_rand($colors)];
                                    }
                                    @endphp
                                    @for ($i = 0; $i < min($count, 4); $i++) <?php
                                                                                $leaveRequest = $this->leaveApplied[$i]['leaveRequest'] ?? null;
                                                                                if ($leaveRequest && $leaveRequest->employee) {
                                                                                    $firstName = $leaveRequest->employee->first_name;
                                                                                    $lastName = $leaveRequest->employee->last_name;
                                                                                    $initials = strtoupper(substr($firstName, 0, 1)) . strtoupper(substr($lastName, 0, 1));
                                                                                ?> <div class="circle-container mr-2" >
                                        <div class="circle d-flex gap-2" style="border: 2px solid {{getRandomColor() }};border-radius:50%;width: 35px;height: 35px;align-items: center;justify-content: center;">
                                        <span class="initials">
                                            {{ $initials }}
                                        </span>
                                        </div>
                                        <span style="display: block; text-align: center;font-size:10px;color:#778899;">Leave</span>
                                </div>

                            <?php
                                                                                }
                            ?>
                            @endfor

                            @if ($count > 4)
                            <div class="circle-notify mt-1" style="color:blue;cursor:pointer; display:flex;flex-direction:column;align-items:center;">
                                <a href="#" style="color:blue;font-size:0.725rem;">+{{ $count - 4 }}</a>
                                <p style="font-size:0.725rem;margin-top:-5px;"><span class="remaining">More</span></p>
                            </div>
                            @endif
                            </div>
                            @else
                            <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                                <img src="https://ftl.technology/images/theme-pics/case.png" alt="Image Description" style="height: 70px; width: 70px;;">
                                <p style="color: #677A8E; font-size: 12px; ">
                                    Hurrah! You've nothing to review.
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="home-hover mb-2">
                    <div style="border-radius: 5px; border: 1px solid #CFCACA;background-color: white;padding:10px 15px;justify-content:center;display: flex;flex-direction:column;">
                        <div style="color: #677A8E; font-weight:500;font-size:0.825rem;">
                            IT Declaration
                        </div>
                        <div style="display: flex;gap:10px;margin-top:10px;">
                            <img src="https://th.bing.com/th/id/OIP.ISoRyxX3652noSb_DpscdAHaHa?pid=ImgDet&rs=1" alt="Image Description" style="height: 40px; width: 40px;  ">
                            <p style="font-size:12px;color:#778899;">Hurrah! Considered your IT declaration for Apr 2023.</p>
                        </div>
                        <div class="B" style="color:  #677A8E;   font-size: 12px;display:flex;justify-content:end;">
                            <a href="/formdeclaration" class="button-link">
                                <button class="custom-button view-button" style="width:60px;border:1px solid blue;border-radius:5px;padding:0;color:blue;background:#fff;">View</button>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="home-hover mb-2">
                    <div style=" border-radius: 5px; border: 1px solid #CFCACA; background-color: white;padding:10px 15px;justify-content:center;display: flex;flex-direction:column;">
                        <div style="color: #677A8E;font-weight:500;font-size:0.825rem;">
                            POI
                        </div>
                        <div style="display:flex;gap:5px;margin-top:10px;"> <!-- Added margin-top here -->
                            <img src="https://th.bing.com/th/id/OIP.So8FF1OSJHwqUi-IcIgQIgAAAA?pid=ImgDet&w=104&h=109&c=7&dpr=1.5" alt="Image Description" style="height: 30px; width: 30px;">
                            <p style="color: #677A8E;  font-size: 12px;">Hold on! You can submit your Proof of Investments (POI) once released.</p>
                        </div>
                    </div>
                </div>

                <!-- TEAM ON LEAVE -->
                @if($this->showLeaveApplies)
                <div class="home-hover mb-2">
                    <div class="reviews">
                        <div style="border-radius: 5px; border: 1px solid #CFCACA;  background-color: white;">
                            <div class="heading" style="display:flex; justify-content:space-between;padding:5px 10px;">
                                <div style="color: #677A8E;font-weight:500;font-size:0.825rem;">
                                    Team On Leave
                                </div>
                                <div>
                                    <a href="/team-on-leave-chart" style="font-size:16px; "><img src="/images/up-arrow.png" alt="" style="width:20px;height:27px;"></a>
                                </div>
                            </div>
                            @if(($this->teamCount) > 0)
                            <div class="team-Notify">
                                <p style="color: #778899; font-size: 0.805rem; font-weight: 500;">
                                    Today({{$teamCount}}) </p>
                                <div class="team-leave d-flex flex-row mr gap-3">
                                    @php
                                    function getRandomLightColor() {
                                    $colors = ['#FFD1DC', '#B0E57C', '#ADD8E6', '#E6E6FA', '#FFB6C1'];
                                    return $colors[array_rand($colors)];
                                    }
                                    @endphp

                                    @for ($i = 0; $i < min($teamCount, 4); $i++) <?php
                                                                                    $teamLeave = $this->teamOnLeave[$i] ?? null;
                                                                                    if ($teamLeave) {
                                                                                        $initials = strtoupper(substr($teamLeave->employee->first_name, 0, 1) . substr($teamLeave->employee->last_name, 0, 1));
                                                                                    ?> <div class="circle-notify" style="margin-right: 5px; border-radius: 50%; background: #fcfdfe; padding: 7px 8px; border: 2px solid {{ getRandomLightColor() }};">
                                        <span style="color:#778899;font-weight:500;font-size:12px;">{{$initials}}</span>
                                </div>

                            <?php
                                                                                    }
                            ?>
                            @endfor
                            @if ($teamCount > 4)
                            <div class="circle-notify" style="color:blue;cursor:pointer; margin-top:20px;display:flex;flex-direction:column;align-items:center;">
                                <a href="#" style="color:blue;font-size:0.725rem;">+{{ $teamCount - 4 }}</a>
                                <p style="font-size:0.725rem;margin-top:-5px;"><span class="remaining">More</span></p>
                            </div>
                            @endif
                            </div>

                            <div style="margin-top:20px;">
                                <p style="color: #778899; font-size: 0.825rem; font-weight: 500;">
                                    This month({{$upcomingLeaveApplications}}) </p>
                                <p style="color: #778899; font-size: 0.825rem; font-weight: 400;"><a href="/team-on-leave-chart">Click here</a> to see who will be on leave in the upcoming days!</p>
                            </div>
                        </div>
                        @else
                        <div style="display:flex;justify-content:center;flex-direction:column;align-items:center;">
                            <img src="https://ftl.technology/images/theme-pics/case.png" alt="Image Description" style="height: 50px; width: 50px;">
                            <p style="color: #677A8E; font-size: 12px; ">
                                Wow!No leaves planned today.
                            </p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            @endif
        </div>
        <!-- second column -->
        <div class="first-col col-md-4 p-1" style="display:flex; flex-direction:column;gap:10px;">
            @if($ismanager)
            <div class="home-hover">
                <div style=" border-radius: 5px; border: 1px solid #CFCACA;  background-color: #fff;padding:10px 15px;">
                    <div style="color: #677A8E;  font-weight:500; display:flex;justify-content:space-between;font-size:0.825rem;">
                        Who is in?
                        <a href="/whoisinchart" style="font-size:16px; "><img src="/images/up-arrow.png" alt="" style="width:20px;height:27px;"></a>
                    </div>
                    <div>
                        <div class="who-is-in d-flex flex-column justify-content-start mt-1 bg-white">
                            <p style="color: #778899; font-size: 0.775rem; font-weight: 500; ">
                                Not Yet In ({{ $CountAbsentEmployees }})
                            </p>
                            <div class="team-leave d-flex flex-row mr gap-3">
                                @php
                                function getRandomAbsentColor() {
                                $colors = ['#FFD1DC', '#D2E0FB', '#ADD8E6', '#E6E6FA', '#F1EAFF','#FFC5C5'];
                                return $colors[array_rand($colors)];
                                }
                                @endphp
                                @for ($i = 0; $i < min($CountAbsentEmployees, 4); $i++) @if(isset($AbsentEmployees[$i])) @php $employee=$AbsentEmployees[$i]; $randomColorAbsent='#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0' , STR_PAD_LEFT); @endphp 
                                <div class="circle" style="border: 2px solid {{getRandomAbsentColor() }};border-radius:50%;width: 35px;height: 35px;display: flex;align-items: center;justify-content: center;">
                                    <span class="initials">
                                        {{ strtoupper(substr(trim($employee['first_name']), 0, 1)) }}{{ strtoupper(substr(trim($employee['last_name']), 0,1)) }}
                                    </span>
                            </div>
                            @endif
                            @endfor
                            @if ($CountAbsentEmployees > 4)
                            <div class="circle-notify" style="color:blue;cursor:pointer;display:flex;flex-direction:column;align-items:center;margin-top:10px;">
                                <a href="#" style="color:blue;font-size:0.725rem;">+{{ $CountAbsentEmployees - 4 }}</a>
                                <p style="font-size:0.725rem;margin-top:-5px;"><span class="remaining">More</span></p>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!-- /second row -->

                    <div class="who-is-in d-flex flex-column justify-content-start mt-1 bg-white">
                        <p style="color: #778899; font-size: 0.775rem; font-weight: 500; ">
                            Late Arrival({{ $CountLateSwipes }})
                        </p>
                        <div class="team-leave d-flex flex-row mr gap-3">
                            @php
                            function getRandomLateColor() {
                            $colors = ['#FFD1DC', '#D2E0FB', '#ADD8E6', '#E6E6FA', '#F1EAFF','#FFC5C5'];
                            return $colors[array_rand($colors)];
                            }
                            @endphp
                            @for ($i = 0; $i < min($CountLateSwipes, 4); $i++) @php $employee=$LateSwipes[$i]; @endphp @if(isset($LateSwipes[$i])) <div class="circle" style="border: 2px solid {{getRandomLateColor() }};border-radius:50%;">
                                <span class="initials">
                                    {{ strtoupper(substr(trim($employee['first_name']), 0, 1)) }}{{ strtoupper(substr(trim($employee['last_name']), 0,1)) }}
                                </span>
                        </div>
                        @endif
                        @endfor
                        @if ($CountLateSwipes > 4)
                        <div class="circle-notify" style="color:blue;cursor:pointer;display:flex;flex-direction:column;align-items:center;margin-top:10px;">
                            <a href="#" style="color:blue;font-size:0.725rem;">+{{ $CountLateSwipes - 4 }}</a>
                            <p style="font-size:0.725rem;margin-top:-5px;"><span class="remaining">More</span></p>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- /third row -->

                <div class="who-is-in d-flex flex-column justify-content-start mt-1 bg-white">
                    <p style="color: #778899; font-size: 0.775rem; font-weight: 500; ">
                        On Time({{ $CountEarlySwipes }})
                    </p>
                    <div class="team-leave d-flex flex-row mr gap-3">
                        @php
                        function getRandomEarlyColor() {
                        $colors = ['#FFD1DC', '#D2E0FB', '#ADD8E6', '#E6E6FA', '#F1EAFF','#FFC5C5'];
                        return $colors[array_rand($colors)];
                        }
                        @endphp
                        @for ($i = 0; $i < min($CountEarlySwipes, 4); $i++) @if(isset($EarlySwipes[$i])) @php $employee=$EarlySwipes[$i]; $randomColorEarly='#' . str_pad(dechex(mt_rand(0xCCCCCC, 0xFFFFFF)), 6, '0' , STR_PAD_LEFT); @endphp <div class="circle" style="border: 2px solid {{getRandomEarlyColor() }};border-radius:50%;">
                            <span class="initials">
                                {{ strtoupper(substr(trim($employee['first_name']), 0, 1)) }}{{ strtoupper(substr(trim($employee['last_name']), 0,1)) }}
                            </span>
                    </div>
                    @endif
                    @endfor
                    @if ($CountEarlySwipes > 4)
                    <div class="circle-notify" style="color:blue;cursor:pointer;display:flex;flex-direction:column;align-items:center;margin-top:10px;">
                        <a href="#" style="color:blue;font-size:0.725rem;">+{{ $CountEarlySwipes - 4 }}</a>
                        <p style="font-size:0.725rem;margin-top:-5px;"><span class="remaining">More</span></p>
                    </div>
                    @endif
                </div>
            </div>

        </div>
</div>
</div>
@endif
<div class="home-hover mb-2">
    <div style=" border-radius: 5px; border: 1px solid #CFCACA;  background-color: #EDF3FF;">
        <div style="color: black; padding:10px 15px;">
            <p style="font-weight: normal;font-size:0.875rem;">{{$currentDate}}</p>
            <p style="margin-top: 10px; color: #9E9696; font-size: 12px;">{{$currentDay}} | 10:00 AM to 07:00 PM</p>
            <div style=" font-size: 14px;" id="current-time"></div>
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
            <div class="A" style="display: flex;flex-direction:row;justify-content:space-between; align-items:center;margin-top:10px;">
                <a style="width:40%;font-size:0.855rem;cursor: pointer;color:blue" wire:click="open">View Swipes</a>
                <button id="signButton" style="color: white; width: 80px; height: 26px;font-size:0.795rem; background-color: rgb(2, 17, 79); border: 1px solid #CFCACA; border-radius: 5px; " wire:click="toggleSignState">
                    @if($swipes)
                    @if ($swipes->in_or_out=="OUT")
                    Sign In
                    @else
                    Sign Out
                    @endif
                    @else
                    Sign In
                    @endif
                </button>
            </div>
        </div>
    </div>
</div>
<div class="home-hover mb-2">

    @if($salaryRevision->isEmpty())
    <div style="border-radius: 5px; border: 1px solid #CFCACA;background-color:white;">
        <div style="color: #677A8E; padding:10px 15px;">
            <div style="color: #677A8E;  font-weight:500; display:flex;justify-content:space-between;font-size:0.825rem;">
                Payslip
                <a href="/slip" style="font-size:16px; "><img src="/images/up-arrow.png" alt="" style="width:20px;height:27px;"></a>
            </div>

            <div style="display:flex;align-items:center;flex-direction:column;">
                <img src="https://cdn3.iconfinder.com/data/icons/human-resources-70/133/9-512.png" alt="" style="height:75px;width:75px;">
                <p style="color: #677A8E;  margin-bottom: 20px; font-size:0.825rem;"> We are working on your payslip!</p>
            </div>
        </div>
    </div>
    @else
    @foreach($salaryRevision as $salaries)
    <div style="border-radius: 5px; border: 1px solid #CFCACA;background-color:white;padding:10px 15px;">
        <div style="color: #677A8E;  font-weight:500; display:flex;justify-content:space-between;font-size:0.825rem;">
            Payslip
            <a href="/slip" style="font-size:16px; "><img src="/images/up-arrow.png" alt="" style="width:20px;height:27px;"></a>
        </div>

        <div wire:ignore style="display:flex;justify-content:space-between;margin-top:20px;">
            <div style="position: relative;">
                <!-- {{-- <canvas id="outerPieChart" width="120" height="120"></canvas>
                                                              <canvas id="innerPieChart" width="60" height="60" style="position: absolute; top: 5px;"></canvas> --}} -->
                <canvas id="combinedPieChart" width="100" height="100"></canvas>
            </div>
            <div class="c" style="font-size: 13px; font-weight: normal; font-weight: 500; color: #9E9696;display:flex; flex-direction:column;justify-content:flex-end;">
                <p style="color:#333;">{{ date('M Y', strtotime('-1 month')) }}</p>
                <p style="display:flex;justify-content:end;flex-direction:column;align-items:end; color:#333;">{{ date('t', strtotime('-1 month')) }} <br>
                    <span style="color:#778899;">Paid days</span>
                </p>
            </div>
        </div>

        <div style="display:flex ;color: #677A8E;  font-size:0.875rem;  font-weight:100px;flex-direction:column; margin-top:20px;  ">
            <div class="net-salary">
                <div style="display:flex;gap:10px;">
                    <div style="padding:2px;width:2px;height:17px;background:#000000;border-radius:2px;"></div>
                    <p style="font-size:0.825rem;">Gross Pay</p>
                </div>
                <p>{{ $showSalary ? '₹ ' . number_format($salaries->calculateTotalAllowance(), 2) : '*********' }}</p>
            </div>
            <div class="net-salary">
                <div style="display:flex;gap:10px;">
                    <div style="padding:2px;width:2px;height:17px;background:#B9E3C6;border-radius:2px;"></div>
                    <p style="font-size:0.825rem;">Deduction</p>
                </div>
                <p>{{ $showSalary ? '₹ ' . number_format($salaries->calculateTotalDeductions() ?? 0, 2) : '*********' }}</p>

            </div>
            <div class="net-salary">
                <div style="display:flex;gap:10px;">
                    <div style="padding:2px;width:2px;height:17px;background:#1C9372;border-radius:2px;"></div>
                    <p style="font-size:0.825rem;">Net Pay</p>
                </div>
                @if ($salaries->calculateTotalAllowance() - $salaries->calculateTotalDeductions() > 0)
                <p> {{ $showSalary ? '₹ ' .number_format(max($salaries->calculateTotalAllowance() - $salaries->calculateTotalDeductions(), 0), 2) : '*********' }}</p>
                @endif
            </div>
        </div>
        <div class="show-salary" style="display: flex; color: #1090D8; justify-content:space-between;font-size: 14px;  margin-top: 20px; font-weight: 100;">
            <a href="/your-download-route" id="pdfLink2023_4" class="pdf-download" download>Download PDF</a>
            <a wire:click="toggleSalary" class="showHideSalary">
                {{ $showSalary ? 'Hide Salary' : 'Show Salary' }}
            </a>
        </div>
    </div>
    @endforeach
    @endif
</div>

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
            <div class="modal-body" style="max-height:500;overflow-y:auto">
                <div class="row">
                    <div class="col" style="font-size: 10px;">Date : <b>{{$currentDate}}</b></div>
                    <div class="col" style="font-size: 10px;">Shift Time : <b>10:00 to 19:00</b></div>
                </div>
                <table class="swipes-table" style="width: 100%;">
                    <tr style="background-color: #f2f2f2;color:black">
                        <th style="font-size: 12px; text-align:center;padding:5px">Swipe Time</th>
                        <th style="font-size: 12px; text-align:center;padding:5px">Sign-In / Sign-Out</th>
                    </tr>

                    @if (!is_null($swipeDetails) && $swipeDetails->count() > 0)
                    @foreach ($swipeDetails as $swipe)
                    <tr style="border:1px solid #f2f2f2;">
                        <td style="font-size: 10px; color: black;text-align:center;width:200px;padding:5px">{{ $swipe->swipe_time }}</td>
                        <td style="font-size: 10px; color: black;text-align:center;width:200px;padding:5px">{{ $swipe->in_or_out }}</td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td style="font-size:12px;" colspan="2">No swipe records found for today.</td>
                    </tr>
                    @endif

                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal-backdrop fade show blurred-backdrop"></div>
@endif
</div>
<!-- third column -->
<div class="first-col col-md-4 p-1" style="display:flex; flex-direction:column;gap:10px;">
    <div class="home-hover mb-2">
        <div style="border-radius: 5px; border: 1px solid #CFCACA; background-color: white;padding:10px 15px;">
            <div style="display:flex; justify-content:space-between;">
                <p style="color: #677A8E;font-weight:500;font-size:0.825rem;">Upcoming Holidays</p>
                <a href="/holiday-calender" style="font-size:16px; "><img src="/images/up-arrow.png" alt="" style="width:20px;height:27px;"></a>
            </div>
            @if($calendarData->isEmpty())
            <p style="color:#778899;font-size:0.795rem;">Uh oh! No holidays to show.</p>
            @else
            @php
            $count = 0;
            @endphp

            @foreach($calendarData as $entry)
            @if(!empty($entry->festivals))
            <div>
                <p style="color: #677A8E; font-size: 0.805rem; ">
                    <span style="font-weight: 500;">{{ date('d M', strtotime($entry->date)) }} <span style="font-size: 11px; font-weight: normal;">{{ date('l', strtotime($entry->date)) }}</span></span>
                    <br>
                    <span style="font-size: 11px; font-weight: normal;">{{ $entry->festivals }}</span>
                </p>
            </div>
            @php
            $count++;
            @endphp
            @endif

            @if($count >= 3)
            @break
            @endif
            @endforeach
            @endif
        </div>
    </div>
    <div class="home-hover mb-2">
        <div style="border-radius: 5px; border: 1px solid #CFCACA; background-color: white;">
            <div style="color: #677A8E; font-weight:500; margin-left: 10px; margin-top:10px;font-size:0.825rem;">
                Quick Access
            </div>
            <div style="display: flex; justify-content: space-between; position: relative;">
                <div class="col-md-7" style="color: black;  font-size: 11px;font-family: montserrat; ">
                    <br>Reimbursement</br>
                    <br>IT Statement</br>
                    <br>YTD Reports</br>
                    <br>Loan Statement</br>
                </div>
                <div class="col-md-5" style="background-color: #FFF8F0; padding: 5px 10px; border-radius: 5px; font-size: 0.625rem; font-family: montserrat; position: absolute; bottom: 0; right: 0; height:120px;">
                    <p style="margin: 0;">Use quick access to view important salary details.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="home-hover mb-2">
        <div style=" border-radius: 5px; border: 1px solid #CFCACA; background-color: white;">
            <div style="color: #677A8E;font-weight:500; margin-left: 20px;  margin-top: 20px;font-size:0.825rem;">
                Track
            </div>

            <div>
                <img src="https://resumekit.com/blog/wp-content/uploads/2023/02/Optimal-outline-for-a-cover-letter-2-1.png" alt="Image Description" style="height: 100px; width: 160px; margin-top: 20px; margin-left: 80px;">
                <div class="B" style="color: black; margin-left: 20px;  ">
                    <p style="color: #677A8E; margin-left: 20px; font-size: 11px; margin-top: 20px;">All good! You've nothing new to track.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
</div>
<script>
    // Function to change the quote text
    function changeQuote() {
        const quotes = [{
                text: "Life is 10% what happens to us and 90% how we react to it.",
                author: "Dennis P. Kimbro"
            },
            {
                text: "Your new Employee Self Service portal is here. Watch the video to learn more.",
                author: "Anonymous"
            },
            {
                text: "Things usually work out in the end. What if they don't? That just means you haven't come to the end yet.",
                author: "Jeanette Walls"
            }
            // Add more quotes here as needed
        ];

        const quoteElement = document.querySelector('.quote-text');
        const authorElement = document.querySelector('.author-text');
        const randomIndex = Math.floor(Math.random() * quotes.length);
        const randomQuote = quotes[randomIndex];

        quoteElement.textContent = randomQuote.text;
        authorElement.textContent = `- ${randomQuote.author}`;
    }

    // Call the function to initially set the quote
    changeQuote();

    // Set an interval to change the quote every 5 seconds (5000 milliseconds)
    setInterval(changeQuote, 5000);


    var combinedData = {
        datasets: [{
                data: [{
                        {
                            !empty($salaries) ? $salaries - > calculateTotalAllowance() : 0
                        }
                    },
                    2, // Placeholder value for the second dataset
                ],
                backgroundColor: [
                    '#000000', // Color for Gross Pay
                ],
            },
            {
                data: [{
                        {
                            !empty($salaries) && method_exists($salaries, 'calculateTotalDeductions') ? $salaries - > calculateTotalDeductions() : 0
                        }
                    },
                    {
                        {
                            !empty($salaries) && method_exists($salaries, 'calculateTotalAllowance') ? $salaries - > calculateTotalAllowance() - $salaries - > calculateTotalDeductions() : 0
                        }
                    },
                ],
                backgroundColor: [
                    '#B9E3C6', // Color for Deductions
                    '#1C9372', // Color for Net Pay
                ],
            },
        ],
    };

    var outerCtx = document.getElementById('combinedPieChart').getContext('2d');

    var combinedPieChart = new Chart(outerCtx, {
        type: 'doughnut',
        data: combinedData,
        options: {
            cutout: '60%', // Adjust the cutout to control the size of the outer circle
            legend: {
                display: false,
            },
            tooltips: {
                enabled: false,
            },
        },
    });
</script>