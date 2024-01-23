<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-KyZXEAg3QhqLMpG8r+JqAcKMpZ0Kw0fF0Zr5l5f8r5E5Xn2ThIv2+1Jq2i/C5EdDX" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.8.0/css/pikaday.min.css"
        integrity="sha512-1a1WjkWvD/RB5mK2RlqXeBz1p9j2NB5s75xP+mu4+ILCZaP5l1MLZDP1jz6wqJzZ3jLmYGLVbQ7ROi7w3QpbHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
    <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.js"></script>


<style>
    
  
</style>
@php
   $flag=0;
   $flag1=0;
   $leave=0;
   $todayDate = date('Y-m-d');
   
@endphp   
    
    <div>
        <div class="row m-0" style="text-align: end;">
            <div class="col-md-12">
                <a href="/regularisation" class="btn btn-primary mb-3 my-button-attendance-info" id="myButton">My Regularisations</a>
            </div>
        </div>
        <div class="row m-0" style="text-align: center;">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row m-0 topMsg-attendance-info">
                    <div class="col-2">
                        <!-- Red info icon on the left -->
                        <i class="fa fa-info-circle mr-2" aria-hidden="true" style="font-size: 24px; color: red;"></i>
                    </div>
                    <div class="col-8 p-0">
                        <!-- Small box with the text -->
                        <div>Access card details not available</div>
                    </div>

                    <!-- Blue info icon on the right -->
                    <div class="info-icon-container-attendance-info col-2">

                        <i class="fa fa-info-circle" aria-hidden="true" style="font-size: 14px; color: blue;"></i>
                        <div class="info-box-attendance-info">
                            Contact administrator to get access card assigned.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>

        <div class="row m-0 mt-3">
            <div class="col-md-2">
                <div class="insight-card bg-white pt-2 pb-2">
                    <h6 class="text-secondary text-regular text-center" style="font-size:12px;"> Penalty Days </h6>
                    <section class="text-center">
                        <p class="text-2"> 0 </p>
                    </section>
                </div>
            </div>
            <div class="col-md-4">
                <div class="insight-card bg-white pt-2 pb-2">
                    <h6 class="text-secondary text-regular text-center" style="font-size:12px;">
                        Avg.&nbsp;Actual&nbsp;Work&nbsp;Hrs</h6>
                    <section class="text-center">

                        <p class="text-2">00:00</p>
                        <div>
                            <span class="text-danger ng-star-inserted" style="font-size:10px;"> -100%
                            </span>
                            <span class="text-muted" style="font-size:10px;margin-left:0px;"> From December </span>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-4">
                <div class="insight-card bg-white pt-2 pb-2">
                    <h6 class="text-secondary text-regular text-center" style="font-size:12px;">Avg. Work Hrs
                    </h6>
                    <section class="text-center">
                        <p class="text-2">00:00</p>
                        <div>
                            <span _ngcontent-hbw-c670="" class="text-danger ng-star-inserted" style="font-size:10px;">
                                -100% </span>
                            <span _ngcontent-hbw-c670="" class="text-muted" style="font-size:10px;"> From December
                            </span>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-2" style="margin: auto; text-align: center">
                <a href="#" data-toggle="modal" data-target="#exampleModal"
                    style="text-transform:uppercase;margin-top:40px;color:rgb(2, 17, 79);">
                    +3 Insights
                </a>
            </div>
            <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">




                <div class="modal-dialog custom-modal-lg centered-modal custom-modal" role="document">
                    <div class="modal-content-attendance-info">

                        <div class="modal-header-attendance-info" style="background-color: #a3b2c7;">

                            <h5 class="modal-title" id="exampleModalLabel">
                                Insights for Attendance Period 01 Oct - 01 Oct</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true close-btn">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-row" style="display: flex; justify-content: flex-end;">
                                <div class="form-group col-md-3 col-sm-6">
                                    <label for="fromDate"
                                        style="color: #778899; font-size: 14px; font-weight: 500;">From
                                        date</label>
                                    <input type="date" class="form-control" id="fromDate" name="fromDate"
                                        style="color: #778899;">
                                </div>
                                <div class="form-group col-md-3 col-sm-6">
                                    <label for="toDate" style="color: #778899; font-size: 14px; font-weight: 500;">To
                                        date</label>
                                    <input type="date" class="form-control" id="toDate" name="toDate"
                                        style="color: #778899;">
                                </div>
                            </div>
                            <p style="font-size:12px;">Total Working Days:&nbsp;&nbsp;<span
                                    style="font-weight:bold;">0</span></p>

                            <div class="table-responsive">
                                <!-- <div class="chart-value"><span style="font-weight:bold;">0</span></div>
                                <div class="chart-column">AVG.&nbsp;WORK&nbsp;HRS</div>
                                <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                <div class="chart-column">AVG.&nbsp;ACTUAL&nbsp;WORK&nbsp;HRS</div>
                                <div class="chart-value"><span style="font-weight:bold;">0</span></div>
                                <div class="chart-column">PENALTY&nbsp;DAYS</div>
                                <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                <div class="chart-column">LATE&nbsp;IN</div>
                                <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                <div class="chart-column">EARLY&nbsp;OUT</div>
                                <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                <div class="chart-column">LEAVE&nbsp;TAKEN</div>
                                <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                <div class="chart-column">ABSENT&nbsp;DAYS</div>
                                <div class="chart-value"><span style="font-weight:bold;">-</span></div>
                                <div class="chart-column">EXCEPTION&nbsp;DAYS</div> -->

                                <table class="table" style="width: 140%">
                                    <thead>
                                        <tr>
                                            <th scope="col">AVG. WORK HRS</th>
                                            <th scope="col">AVG. ACTUAL WORK HRS</th>
                                            <th scope="col">PENALTY DAYS</th>
                                            <th scope="col">LATE IN</th>
                                            <th scope="col">EARLY OUT</th>
                                            <th scope="col">LEAVE TAKEN</th>
                                            <th scope="col">ABSENT DAYS</th>
                                            <th scope="col">EXCEPTION DAYS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;">0</td>
                                            <td style="text-align: center;">-</td>
                                            <td style="text-align: center;">0</td>
                                            <td style="text-align: center;">-</td>
                                            <td style="text-align: center;">-</td>
                                            <td style="text-align: center;">-</td>
                                            <td style="text-align: center;">-</td>
                                            <td style="text-align: center;">-</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="row m-0 mt-3">
                                <div class="col-md-3 col-sm-6 p-0">
                                    <p>Avg First In Time:&nbsp;&nbsp;<span style="font-weight:600;">00:00:00</span></p>
                                </div>
                                <div class="col-md-1 p-0">
                                    <p style="text-align: center">|</p>
                                </div>
                                <div class="col-md-3 col-sm-6 p-0">
                                    <p>Avg Last Out Time:&nbsp;&nbsp;<span style="font-weight:600;">00:00:00</span></p>
                                </div>



                            </div>

                        </div>

                    </div>
                </div>
            </div>

            
            


        </div>

        <div class="row m-0 mt-3">
          <div class="col-6" style="text-align: left">
            <a href="#" id="toggleSidebar" class="gt-overlay-toggle"
                style="margin-top:69px;color:rgb(2, 17, 79); display: none">Legend</a>
          </div>
          <div class="col-6" style="text-align: -webkit-right;">
            <div class="toggle-box-attendance-info">
              <i class="fas fa-calendar" id="calendar-icon" onclick="showCalendar()"></i>
              <i class="fas fa-bars" id="bars-icon" onclick="showMessage()"></i>
            </div>
          </div>
        </div>

        
        <div class="row m-0">
          <div class="col-md-7">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="calendar-heading-container">
                        <button wire:click="previousMonth" class="nav-btn">&lt; Prev</button>
                        <h5>{{ \Carbon\Carbon::createFromDate($year, $month, 1)->format('F Y') }}</h5>
                        <button wire:click="nextMonth" class="nav-btn">Next &gt;</button>
                    </div>
                </div>
                <!-- Calendar -->
                <div  style="background:#fff;">
                <table class="table-1 table-bordered">
                        <thead>
                            <tr>
                                <th class="text">Sun</th>
                                <th class="text">Mon</th>
                                <th class="text">Tue</th>
                                <th class="text">Wed</th>
                                <th class="text">Thu</th>
                                <th class="text">Fri</th>
                                <th class="text">Sat</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-body">
                        @foreach ($calendar as $week)
    <tr>
        @foreach ($week as $day)
            @php
                $carbonDate = \Carbon\Carbon::createFromDate($year, $month, $day['day']);
                $formattedDate = $carbonDate->format('Y-m-d');
                $formattedDate1 = $carbonDate->format('Y-m-d');
                $isCurrentMonth = $day['isCurrentMonth'];
                $isWeekend = in_array($carbonDate->dayOfWeek, [0, 6]); // 0 for Sunday, 6 for Saturday
                $isActiveDate = ($selectedDate === $carbonDate->toDateString());
            @endphp
           
     
                @if ($day) 
                @if(strtotime($formattedDate) < strtotime(date('Y-m-d')))
                   @php
                       $flag=1;

                   @endphp
                @else
                   @php
                       $flag=0;
                   @endphp
                @endif    
                @if($day['status']== 'CLP'||$day['status']== 'SL'||$day['status']== 'LOP')
                    @php
                       $leave=1;
                    @endphp
                @else
                    @php
                       $leave=0;
                    @endphp
                @endif
                <td wire:click="dateClicked('{{$formattedDate}}')" wire:model="dateclicked"class="attendance-calendar-date {{ $isCurrentMonth && !$isWeekend ? 'clickable-date' : '' }}"style="text-align:start;color: {{ $isCurrentMonth ? ($isWeekend ? '#c5cdd4' : 'black')  : '#c5cdd4'}};background-color:  @if($isCurrentMonth && !$isWeekend && $flag==1 ) @if($day['isPublicHoliday'] ) #f3faff @elseif($leave == 1) rgb(252, 242, 255) @elseif($day['status'] == 'A') #fcf0f0 @elseif($day['status'] == 'P') #edfaed @endif @endif ;" >
                    <div>
                        
                          
                        @if ($day['isToday'])
                            <div style="background-color: #007bff; color: white; border-radius: 50%; width: 24px; height: 24px; text-align: center; line-height: 24px;">
                                {{ str_pad($day['day'], 2, '0', STR_PAD_LEFT) }}
                            </div>
                        @else
                            {{ str_pad($day['day'], 2, '0', STR_PAD_LEFT) }}
                        @endif
                        <div class="circle{{ $day['isPublicHoliday'] ? 'IRIS' : '' }}">
                            
                            <!-- Render your content -->
                        </div>
                          
                        <div class="{{ $isWeekend ? '' : 'circle-grey' }}">
                            <!-- Render your grey circle -->
                            @if ($isWeekend)
                             <i class="fas fa-tv"style="float:right;padding-left:12px;margin-top:-15px;"></i> 
                                
                                <span style="text-align:center;color: #7f8fa4;  padding-left:15px;padding-right:26px;margin-left: 6px;white-space: nowrap;">
                                      
                                  
                                     O
                                </span>
                            @elseif($isCurrentMonth)
                              
                              
                                @if(strtotime($formattedDate) < strtotime(date('Y-m-d')))
                                <span style="display: flex; justify-content: center; align-items: center; width: 20px; height: 20px; border-radius: 50%; white-space: nowrap;">
                                    
                                    @if($day['isPublicHoliday'])
                                        <span style="background-color: #f3faff;text-align:center;color: #7f8fa4; padding-left: 16px; margin-left: 26px;white-space: nowrap;">H</span>
                                    @elseif($day['status'] == 'CLP')   
                                        <span style="background-color:  rgb(252, 242, 255);color: #7f8fa4;text-align:center; padding-left: 16px; margin-left: 26px;white-space: nowrap;">CLP</span> 
                                    @elseif($day['status'] == 'SL')   
                                        <span style="background-color:  rgb(252, 242, 255);color: #7f8fa4;text-align:center; padding-left: 16px; margin-left: 26px;white-space: nowrap;">SL</span>     
                                    @elseif($day['status'] == 'LOP')   
                                        <span style="background-color:  rgb(252, 242, 255);color: #7f8fa4;text-align:center; padding-left: 16px; margin-left: 26px;white-space: nowrap;">LOP</span> 
                                    @elseif($day['status'] == 'A')
                                        <span style="color:#ff6666; background-color: #fcf0f0;text-align:center;padding-left: 16px; margin-left: 26px;white-space: nowrap;">A</span>
                                    @elseif($day['status'] == 'P')
                                        <span style="background-color:#edfaed; text-align:center; color: #7f8fa4; padding-left: 16px; margin-left: 26px;white-space: nowrap;">P</span>
                                    @endif

                                
                                </span>
                                @endif
                                @if(strtotime($formattedDate) >= strtotime(date('Y-m-d')))
                                <span style="display: flex; text-align:end;width:20px;height:20px;border-radius:50%;padding-left: 45px; white-space: nowrap;">
                                     <p style="color: #a3b2c7;margin-top:30px;font-weight: 400;">GS</p>
                                </span>
                                @elseif($isCurrentMonth)
                                <span style="display: flex; text-align:end;width:20px;height:20px;border-radius:50%;padding-left: 45px; white-space: nowrap;">
                                     <p style="color: #a3b2c7;padding-top:6px;font-weight: 400;">GS</p>
                                </span>
                                @endif
                            @endif
                        </div>
                    </div>
                @endif
            </td>
            
        @endforeach
    </tr>
@endforeach
                        </tbody>
 
                    </table>
 
                    </div>
 
               
               

            <button class="accordion">Legends</button>
            <div class="panel">
              <div class="row m-0 mt-3 mb-3">
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon presentIcon">P</span>
                  </p>
                  <p class="m-0">Present</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon absentIcon">A</span>
                  </p>
                  <p class="m-0">Absent</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon offDayIcon">O</span>
                  </p>
                  <p class="m-0">Off Day</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon offDayIcon">R</span>
                  </p>
                  <p class="m-0">Rest Day</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon leaveIcon">L</span>
                  </p>
                  <p class="m-0">Leave</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon onDutyIcon">OD</span>
                  </p>
                  <p class="m-0">On Duty</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon holidayIcon">H</span>
                  </p>
                  <p class="m-0">Holiday</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon deductionIcon">&nbsp;&nbsp;</span>
                  </p>
                  <p class="m-0" style="word-break: break-all;"> Deduction</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon alertForDeIcon">&nbsp;&nbsp;</span>
                  </p>
                  <p class="m-0">Allert for Deduction</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <span class="legendsIcon absentIcon">?</span>
                  </p>
                  <p class="m-0">Status Unknown</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <i class="far fa-clock"></i>
                  </p>
                  <p class="m-0">Overtime</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <i class="far fa-edit"></i>
                  </p>
                  <p class="m-0">Override</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <div class="down-arrow-ign-attendance-info"></div>
                  </p>
                  <p class="m-0">Ignored</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <div class="down-arrow-gra"></div>
                  </p>
                  <p class="m-0">Grace</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="me-2 mb-0">
                    <div class="down-arrow-reg"></div>
                  </p>
                  <p class="m-0">Regularized</p>
                </div>
              </div>
              <div class="row m-0 mb-3">
                <h6 class="m-0 p-2 mb-2" style="background-color: #f1f4f7">Day Type</h6>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="mb-0">
                    <i class="fas fa-mug-hot"></i>
                  </p>
                  <p class="m-0">Rest Day</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="mb-0">
                    <i class="fas fa-tv"></i>
                  </p>
                  <p class="m-0">Off Day</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="mb-0">
                    <i class="fas fa-umbrella"></i>
                  </p>
                  <p class="m-0">Holiday</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="mb-0">
                    <i class="fas fa-calendar-day"></i>
                  </p>
                  <p class="m-0">Half Day</p>
                </div>
                <div class="col-md-3 mb-2 pe-0" style="display: flex">
                  <p class="mb-0">
                    <i class="fas fa-battery-empty"></i>
                  </p>
                  <p class="m-0">Plant Shutdown</p>
                </div>
              </div>
            </div>

          </div>
          <div class="col-md-5">
            <div class="container1"style="background-color:white;">
              <!-- Content goes here -->
              <div class="row m-0">
                <div class="col-2 pb-1 pt-1 p-0" style="border-right: 1px solid black; text-align: center;">
                  <p class="mb-1" style="font-weight:bold;font-size:20px;">{{ \Carbon\Carbon::parse($CurrentDate)->format('d') }}</p>
                    <p class="text-muted m-0" style="font-weight:600;font-size:14px;">
                    {{ \Carbon\Carbon::parse($CurrentDate)->format('D') }}</p>
                </div>
                <div class="col-5 pb-1 pt-1">
                  <p class="text-overflow mb-1"
                      style="overflow: hidden;text-overflow: ellipsis;white-space: nowrap;font-weight: 600;">
                      10:00 Am to 07:00 pm</p>
                  <p class="text-muted m-0" style="font-size:14px;">Shift:10:00 to
                          19:00</p>
                </div>
                <div class="col-5 pb-1 pt-1">
                  <p class="mb-1" style="overflow: hidden;font-weight: 600;text-overflow: ellipsis;white-space: nowrap;">
                          10:00 Am to 07:00 pm</p>
                  <p class="text-muted m-0" style="font-size:14px;">Attendance
                          Scheme</p>

                </div>
              </div>


              <div class="horizontal-line-attendance-info"></div>
              @if($ChangeDate==1)
                 <div class="text-muted" style="margin-left:20px;font-weight: 400;font-size: 12px;">Processed On {{ \Carbon\Carbon::parse($CurrentDate)->format('jS M') }}</div>
              @else
                 <div class="text-muted" style="margin-left:20px;font-weight: 400;font-size: 12px;">Processed On</div>
              @endif   
              <div class="horizontal-line1-attendance-info"></div>
              <div style=" overflow-x: auto; max-width: 100%;">
                  <table>
                      <thead>
                          <tr>
                              <th style="font-weight:normal;font-size:12px;">First&nbsp;In</th>
                              <th style="font-weight:normal;font-size:12px;">Last&nbsp;Out</th>
                              <th style="font-weight:normal;font-size:12px;">Total&nbsp;Work&nbsp;Hrs</th>
                              <th style="font-weight:normal;font-size:12px;">Break&nbsp;Hrs</th>
                              <th style="font-weight:normal;font-size:12px;">Actual&nbsp;Work&nbsp;Hrs</th>
                              <th style="font-weight:normal;font-size:12px;">
                                  Work&nbsp;Hours&nbsp;in&nbsp;Shift&nbsp;Time</th>
                              <th style="font-weight:normal;font-size:12px;">Shortfall&nbsp;Hrs</th>
                              <th style="font-weight:normal;font-size:12px;">Excess&nbsp;Hrs</th>
                          </tr>
                      </thead>
                      <tbody>
                        @if($ChangeDate==1)
                        @foreach ($CurrentDateTwoRecord as $record) 
                        <tr>
                              
                              <td style="font-size:12px;">
                                 @if ($record['in_or_out'] == 'IN')
                                        @php
                                           $flag=1;
                                        @endphp   
                                        {{ substr($record['swipe_time'], 0, 5) }}
                               
                                 @endif
                              </td>
                              @if ($loop->first)
                              <td style="font-size:12px;">
                              @if (isset($CurrentDateTwoRecord[1]) && $CurrentDateTwoRecord[1]['in_or_out'] == 'OUT')
                                          {{ substr($CurrentDateTwoRecord[1]['swipe_time'],0,5) }}
                              @elseif($flag==1)
                                          {{ substr($record['swipe_time'], 0, 5) }}
                              @else
                                        -                 
                              @endif
                              </td>
                              @endif
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              
                           </tr>
                           @php
                              $flag=0;
                              
                           @endphp 
                           @php
                              break;
                              
                           @endphp   
                          @endforeach
                          @elseif($CurrentDate2recordexists==false)
                          <tr>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                          </tr>
                          @else
                          <tr>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                              <td>-</td>
                          </tr>
                          @endif
                          <!-- Add more rows with dashes as needed -->
                      </tbody>
                      <!-- Add table rows (tbody) and data here if needed -->
                  </table>

              </div>
            </div>
            <div class="container2">
                <h3 style="margin-left:20px;margin-top:10px;color: #7f8fa4;font-size:18px;">Status Details</h3>

                <div style=" overflow-x: auto; max-width: 100%;">
                    <table style="margin-top:-10px;">
                        <thead>
                            <tr>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Status</th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Remarks</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>-</td>
                                <td>-</td>

                            </tr>
                            <!-- Add more rows with dashes as needed -->
                        </tbody>
                        <!-- Add table rows (tbody) and data here if needed -->
                    </table>
                </div>
            </div>

            <div class="container3">
                <h3 style="margin-left:20px;margin-top:20px;color: #7f8fa4;font-size:18px;">Session Details</h3>

                <div style=" overflow-x: auto; max-width: 100%;">
                    <table style="margin-top:-10px">
                        <thead>
                            <tr>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Session</th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Session&nbsp;Timing</th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">First&nbsp;In</th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Last&nbsp;Out</th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Late&nbsp;In&nbsp;Hrs
                                </th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Early&nbsp;Out&nbsp;Hrs
                                </th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Total&nbsp;Work&nbsp;Hrs
                                </th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">
                                    Actual&nbsp;Work&nbsp;Hrs</th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Excess&nbsp;Hrs</th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Shortfall&nbsp;Hrs</th>
                                <th style="font-weight:normal;font-size:12px;padding-top:16px;">Break&nbsp;Hrs</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                        @if($ChangeDate==1)
                            @foreach ($CurrentDateTwoRecord as $record1) 
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td style="font-weight:normal;font-size:12px;">Session&nbsp;1</td>
                                <td style="font-weight:normal;font-size:12px;">10:00 - 14:00</td>
                                <td style="font-weight:normal;font-size:12px;">
                                    @if ($record1['in_or_out'] == 'IN')
                                         
                                        {{ substr($record1['swipe_time'], 0, 5) }}
                               
                                    @endif
                                </td>
                                @php
                                          $specificTime = \Carbon\Carbon::parse('10:00:00');
                                          $recordSwipeTime = \Carbon\Carbon::parse($record1['swipe_time']);
                                          $difference = $recordSwipeTime->diff($specificTime);
                                          $hoursDifference = $difference->h;
                                          $minutesDifference = $difference->i;
                                @endphp
                                <td style="font-weight:normal;font-size:12px;">-</td>

                                <td style="font-weight:normal;font-size:12px;">
                                                       
                                                       @if($recordSwipeTime>$specificTime)
                                                          +{{ sprintf('%02d:%02d', $hoursDifference, $minutesDifference) }}
                                                       
                                                       @else
                                                          +00:00   
                                                       @endif      
                                </td>
                                <td style="font-weight:normal;font-size:12px;">+00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                            </tr>
                            @if ($loop->first)
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td style="font-weight:normal;font-size:12px;">Session&nbsp;2</td>
                                <td style="font-weight:normal;font-size:12px;">14:01 - 19:00</td>
                                <td style="font-weight:normal;font-size:12px;">-</td>
                                <td style="font-weight:normal;font-size:12px;">
                                  @if (isset($CurrentDateTwoRecord[1]) && $CurrentDateTwoRecord[1]['in_or_out'] == 'OUT')
                                            {{substr($CurrentDateTwoRecord[1]['swipe_time'],0,5)}}
                                  @elseif($flag1==1)
                                                 00:00
                                  @endif
                                </td>
                                <td style="font-weight:normal;font-size:12px;">+00:00</td>
                                @php
                                         $recordSwipeTime = \Carbon\Carbon::parse($CurrentDateTwoRecord[1]['swipe_time']);
                                         $specificTime = \Carbon\Carbon::parse('19:00:00'); // 07:00 PM

                                          // Calculate the difference
                                         $difference = $specificTime->diff($recordSwipeTime);

                                          // Get hours and minutes components
                                           $hoursDifference = $difference->h;
                                           $minutesDifference = $difference->i;
                                @endphp
                                <td style="font-weight:normal;font-size:12px;">
                                                 @if($recordSwipeTime<$specificTime)
                                                          +{{ sprintf('%02d:%02d', $hoursDifference, $minutesDifference) }}
                                                 @elseif($flag1==1)
                                                          +00:00
                                                 @else  
                                                          +00:00       
                                                 @endif   
                                </td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                            </tr>
                            @endif
                            @php
                              $flag1=0;
                            @endphp  
                            @php
                               break;
                            @endphp   
                            @endforeach
                        @else
                        <tr style="border-bottom: 1px solid #ddd;">
                                <td style="font-weight:normal;font-size:12px;">Session&nbsp;1</td>
                                <td style="font-weight:normal;font-size:12px;">10:00 - 14:00</td>
                                <td style="font-weight:normal;font-size:12px;">-</td>
                                <td style="font-weight:normal;font-size:12px;">-</td>
                                <td style="font-weight:normal;font-size:12px;">-</td>
                                <td style="font-weight:normal;font-size:12px;">+00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                            </tr>
                            <tr style="border-bottom: 1px solid #ddd;">
                                <td style="font-weight:normal;font-size:12px;">Session&nbsp;2</td>
                                <td style="font-weight:normal;font-size:12px;">14:01 - 19:00</td>
                                <td style="font-weight:normal;font-size:12px;">-</td>
                                <td style="font-weight:normal;font-size:12px;">-</td>
                                <td style="font-weight:normal;font-size:12px;">-</td>
                                <td style="font-weight:normal;font-size:12px;">+00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                                <td style="font-weight:normal;font-size:12px;">00:00</td>
                            </tr> 
                          @endif  <!-- Add more rows with dashes as needed -->
                        </tbody>
                        <!-- Add table rows (tbody) and data here if needed -->
                    </table>
                </div>

            </div>
            <div class="container6">
                <h3 style="margin-left:20px;color: #7f8fa4;font-size:18px;">Swipes</h3>
                <div class="arrow-button" style="float:right;margin-top:-30px;margin-right:20px;" id="toggleButton">
                </div>

                <div class="container-body" style="margin-top:2px;height:auto;" id="myContainerBody">
                    <!-- Content of the container body -->
                    <div style="max-width: 100%; text-align: center;">
                        <table>
                            <thead>
                                @if ($Swiperecords->count() > 0)
                                <tr>
                                    <th style="font-weight:normal;font-size:12px;">In/Out</th>
                                    <th style="font-weight:normal;font-size:12px;">Swipe&nbsp;Time</th>
                                    <th style="font-weight:normal;font-size:12px;">Location</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($Swiperecords as $index =>$swiperecord)
                                <tr>
                                    <td style="font-weight:normal;font-size:12px;">{{ $swiperecord->in_or_out }}</td>
                                    <td>
                                        <div style="display:flex;flex-direction:column;">
                                            <p style="margin-bottom: 0;font-weight:normal;font-size:12px;">
                                                {{ date('h:i:s A', strtotime($swiperecord->swipe_time)) }}</p>
                                            <p style="margin-bottom: 0;font-size: 10px;color: #a3b2c7;">
                                                {{ date('d M Y', strtotime($currentDate1)) }}</p>
                                        </div>
                                    </td>
                                    <td>-</td>

                                    <td><button class="info-button"
                                            style="background-color: rgb(2, 17, 79); border: 2px solid rgb(2, 17, 79);height:20px; color: white; border-radius: 5px;font-size:12px;margin-top:-10px"
                                            data-toggle="modal" data-target="#viewStudentModal"
                                            wire:click="viewDetails('{{$swiperecord->id}}')">Info</button></td>

                                </tr>
                                @if (($index + 1) % 2 == 0)
                                <!-- Add a small container after every two records -->
                                <tr>
                                    <td colspan="4"
                                        style="height:1px; background-color: #f0f0f0; text-align: left;font-size:10px;">
                                        Actual Hrs:{{ $actualHours[($index + 1) / 2 - 1] }}</td>
                                </tr>
                                @endif
                                @endforeach



                                <!-- Add more rows with dashes as needed -->
                            </tbody>
                            <!-- Add table rows (tbody) and data here if needed -->
                            @else
                            <img src="https://gt-linckia.s3.amazonaws.com/static-ess-v6.3.0-prod-144/attendace_swipe_empty.svg"
                                style="margin-top:30px;">
                            <div class="text-muted">No record Found</div>
                            @endif
                        </table>

                    </div>

                </div>

                @if($show=="true")
                <div wire:ignore.self class="modal fade" id="viewStudentModal" tabindex="-1" data-backdrop="static"
                    data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content-attendance-info">
                            <div class="modal-header-attendance-info">
                                <h5 class="modal-title">Swipe Details</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span wire:click="close" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body pt-4 pb-4">
                                <table class="table table-bordered">
                                    <tbody>
                                        @if($swiperecord)
                                        @if ($data->isNotEmpty())
                                        <tr>
                                            <th>Employee&nbsp;Name: </th>
                                            <td>{{ $data[0]->first_name }} {{ $data[0]->last_name }}</td>
                                        </tr>
                                        @endif
                                        <tr>
                                            <th>Employee&nbsp;Id</th>
                                            <td>{{ $swiperecord->emp_id }}</td>
                                        </tr>

                                        <tr>
                                            <th>Swipe&nbsp;Date:</th>
                                            <td>{{\Carbon\Carbon::parse($swiperecord->created_at)->format('jS F, Y')}}
                                            </td>
                                        </tr>

                                        <tr>
                                            <th>Swipe&nbsp;Time:</th>
                                            <td>{{ $view_student_swipe_time }}</td>
                                        </tr>

                                        <tr>
                                            <th>In/Out:</th>
                                            <td>{{ $view_student_in_or_out }}</td>
                                        </tr>
                                        <tr>
                                            <th>Access&nbsp;Card&nbsp;Number:</th>
                                            <td>-</td>
                                        </tr>
                                        <tr>
                                            <th>Location:</th>
                                            <td>-</td>
                                        </tr>
                                        @endif
                                </table>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-sm btn-danger" wire:click="close">Cancel</button>
                            </div>
                        </div>
                    </div>

                </div>

                @endif

            </div>
          </div>
        </div>
        
        

    </div>
    @php

    $presentCount = 0;
    $offCount = 0;
    $absentCount=0;
    $holidayCount = 0;
    @endphp



    <div class="large-box-attendance-info">
        <div class="table-container" style=" width: 100%;
    overflow-x: auto;">
            <table>
                <tr class="first-header-row" style="background-color:rgb(2, 17, 79);">
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px; position: relative;">
                        Genaral&nbsp;Details</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th style="font-weight:normal;font-size:12px;padding-top:16px;">Session&nbsp;1<span
                            class="arrow-icon-attendance-info">&#x2192;</span></th>
                    <th style="font-weight:normal;font-size:12px;padding-top:16px;">Session&nbsp;2<span
                            class="arrow-icon-attendance-info">&#x2192;</span></th>


                </tr>
                <tr class="second-header-row">
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Date</th>

                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Shift</th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">
                        Attendance&nbsp;Scheme</th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">First&nbsp;In</th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Last&nbsp;Out</th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Work&nbsp;Hrs</th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Actual&nbsp;Hrs
                    </th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Status</th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Swipe&nbsp;Details
                    </th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Exception</th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">
                        Shortfall/Excess&nbsp;Hrs.</th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Shift&nbsp;Timings
                    </th>
                    <th class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Shift&nbsp;Timings
                    </th>

                </tr>

                @foreach($distinctDates as $key => $date)

                <tr>


                    <td class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">
                        {{ \Carbon\Carbon::parse($key)->format('jS M Y')  }} </td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">10:(GS)</td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">10:00 am to 07:00pm</td>


                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">
                        {{\Carbon\Carbon::parse($date['first_in_time'])->format('H:i') }}</td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">
                        {{ \Carbon\Carbon::parse($date['last_out_time'])->format('H:i') }}</td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">00:00</td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">00:00</td>
                    @php
                    // Check if the current date is a holiday
                    $isHoliday = $Holiday->contains('date', \Carbon\Carbon::parse($key)->toDateString());
                    @endphp
                    @if($isHoliday)
                    <td style="color: #a3b2c7; margin-left:10px; margin-top:20px; font-size:12px;">
                        H
                    </td>
                    @php
                    $holidayCount++;
                    @endphp
                    @elseif(\Carbon\Carbon::parse($key)->format('l') === 'Saturday' ||
                    \Carbon\Carbon::parse($key)->format('l') === 'Sunday')
                    <td style="color: #a3b2c7; margin-left:10px; margin-top:20px; font-size:12px;">
                        O
                    </td>
                    @php
                    $offCount++;
                    @endphp
                    @elseif(\Carbon\Carbon::parse($key)->isWeekday() && ($date['first_in_time'] === null ||
                    $date['last_out_time'] === null))
                    <td style="color: #a3b2c7; margin-left:10px; margin-top:20px; font-size:12px;">
                        A
                    </td>

                    @php
                    $absentCount++;
                    @endphp

                    @else
                    <td style="color: #a3b2c7; margin-left:10px; margin-top:20px; font-size:12px;">
                        P
                    </td>
                    @php
                    $presentCount++;
                    @endphp

                    @endif
                    <td><button class="info-button"
                            style="background-color: rgb(2, 17, 79); border: 2px solid rgb(2, 17, 79);height:20px; color: white; border-radius: 5px;font-size:12px;margin-top:-10px"
                            data-toggle="modal" data-target="#largeBoxModal" wire:click="">Info</button></td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">No&nbsp;attention&nbsp;required
                    </td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">-</td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">10:00-14:00</td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">14:01-19:00</td>

                </tr>

                @endforeach


                <tr>
                    <td class="date" style="font-weight:normal;font-size:12px;padding-top:16px;">Total </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">00:00</td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">00:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="font-weight:normal;font-size:12px;padding-top:16px;">00:00</td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>

    <div class="modal fade" id="largeBoxModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog"
        aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content-attendance-info" style="width:100%">
                <div class="modal-header-attendance-info">
                    <h5 class="modal-title">Swipe Details</h5>
                    <button type="button" class="close" aria-label="Close" wire:click="closeViewStudentModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <tbody>
                            @if($swiperecord)
                            @if ($data->isNotEmpty())
                            <tr>
                                <th>Employee&nbsp;Name: </th>
                                <td>{{ $data[0]->first_name }} {{ $data[0]->last_name }}</td>
                            </tr>
                            @endif
                            <tr>
                                <th>Employee&nbsp;Id</th>
                                <td>{{ $swiperecord->emp_id }}</td>
                            </tr>


                            <tr>
                                <th>Access&nbsp;Card&nbsp;Number:</th>
                                <td>-</td>
                            </tr>

                            @endif
                    </table>
                    <div style=" overflow-x: auto;
    max-width: 100%;">
                        <table>

                            <thead>
                                <tr>
                                    <th>In/Out</th>
                                    <th>Swipe&nbsp;Time</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th>Last&nbsp;Updated&nbsp;On</th>
                                    <th>Modified&nbsp;Time</th>
                                    <th>Updated&nbsp;By</th>
                                    <th>Longitude</th>
                                    <th>Latitude</th>
                                    <th>Mobile ID</th>
                                    <th>Remarks</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>-</td>
                                </tr>
                                <!-- Add more rows with dashes as needed -->
                            </tbody>
                            <!-- Add table rows (tbody) and data here if needed -->
                        </table>

                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-danger" wire:click="cancel()" aria-label="Close">Cancel</button>

                </div>
            </div>
        </div>
    </div>

    <div id="box-container" style="display: none;margin-left:300px;">

        <div class="box-attendance-info">
            <div class="box-content-attendance-info" style="background-color: rgba(237,250,237,1);color: #7f8fa4;">
                Present:&nbsp;{{$presentCount}}
            </div>
        </div>
        <div class="box-attendance-info">
            <div class="box-content-attendance-info" style="background-color: 	#F88379;color: #7f8fa4;">
                Absent:&nbsp;{{$absentCount}}
            </div>
        </div>
        <div class="box-attendance-info" style="background-color:	#7DF9FF;color: #7f8fa4;">
            <div class="box-content-attendance-info">
                Holiday:&nbsp;{{ $holidayCount }}
            </div>
        </div>
        <div class="box-attendance-info">
            <div class="box-content-attendance-info" style="background-color: rgb(217, 218, 213);margin-top:-2px;color: #7f8fa4;">
                Off&nbsp;Day:&nbsp;{{ $offCount }}
            </div>
        </div>
        <div class="box-attendance-info">
            <div class="box-content-attendance-info" style="background-color: #E6E6FA;color: #7f8fa4;margin-top:-2px;">
                Leave:&nbsp;0
            </div>
        </div>
        <div class="box-attendance-info">
            <div class="box-content-attendance-info" style="background-color: rgb(217, 218, 213);color: #7f8fa4;margin-top:-2px;">
                Rest&nbsp;Day:&nbsp;0
            </div>
        </div>
        <div class="box-attendance-info">
            <div class="box-content-attendance-info" style="background-color: #FFFDD0;margin-top:-2px;color: #7f8fa4;">
                On&nbsp;Duty:&nbsp;0
            </div>
        </div>
        <div class="box-attendance-info">
            <div class="box-content-attendance-info" style="background-color: #FDDA0D;margin-top:-2px;color: #7f8fa4;">
                ShutDown:&nbsp;0
            </div>
        </div>
        <div class="box-attendance-info">
            <div class="box-content-attendance-info" style="background-color: 	#7DF9FF;margin-top:-2px;color: #7f8fa4;">
                Restricted&nbsp;Holiday:&nbsp;0
            </div>
        </div>
        <div class="box-attendance-info">
            <div class="box-content-attendance-info" style="background-color: #F88379;margin-top:-2px;color: #7f8fa4;">
                Status&nbsp;Unknown:&nbsp;0
            </div>
        </div>
    </div>

    <script>
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.display === "block") {
            panel.style.display = "none";
          } else {
            panel.style.display = "block";
          }
        });
      }
    // Function to generate calendar days for a given month and year
    function generateCalendarDays(year, month) {
        const daysInMonth = new Date(year, month, 0).getDate();
        const calendarDays = document.getElementById('calendar-days');

        calendarDays.innerHTML = ''; // Clear previous calendar days

        for (let day = 1; day <= daysInMonth; day++) {
            const calendarDay = document.createElement('div');
            calendarDay.classList.add('calendar-day');
            calendarDay.textContent = day;
            calendarDays.appendChild(calendarDay);
        }
    }

    // Call the function with the desired year and month (0-based index for month)
    generateCalendarDays(2023, 8);
    // September 2023
    </script>
    <script>
    document.getElementById("toggleButton").addEventListener("click", function() {
        var containerBody = document.getElementById("myContainerBody");
        if (containerBody.style.display === "none" || containerBody.style.display === "") {
            containerBody.style.display = "block";
        } else {
            containerBody.style.display = "none";
        }
    });
    </script>
    <script>
    const toggleButton = document.getElementById("toggleButton");
    const containerBody = document.getElementById("myContainerBody");

    toggleButton.addEventListener("click", function() {
        toggleButton.classList.toggle("rotate-arrow");
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleSidebarButton = document.getElementById("toggleSidebar");
        const sidebar = document.querySelector(".sidebar");

        toggleSidebarButton.addEventListener("click", function() {
            if (sidebar.style.right === "0px" || sidebar.style.right === "") {
                sidebar.style.right = "-250px"; // Hide the sidebar
            } else {
                sidebar.style.right = "0px"; // Show the sidebar
            }
        });
    });
    document.addEventListener("DOMContentLoaded", function() {
        const toggleSidebarButton = document.getElementById("toggleSidebar");
        const closeSidebarButton = document.getElementById("closeSidebar");
        const sidebar = document.querySelector(".sidebar");

        toggleSidebarButton.addEventListener("click", function() {
            sidebar.style.right = "0px"; // Show the sidebar
        });

        closeSidebarButton.addEventListener("click", function() {
            sidebar.style.right = "-250px"; // Hide the sidebar
        });
    });
    </script>
    <script>
    document.getElementById("myButton").onclick = function() {
        // Replace 'destination-page.html' with the URL of the page you want to navigate to
        window.location.href = 'das.html';
    };
    </script>

    <script>
    function showCalendar() {
        // Show the calendar and associated containers
        document.querySelector('.calendar').style.display = 'block';
        document.querySelector('.container1').style.display = 'block';
        document.querySelector('.container2').style.display = 'block';
        document.querySelector('.container3').style.display = 'block';
        document.querySelector('.container6').style.display = 'block';
        document.querySelector('.large-box-attendance-info').style.display = 'none';
        document.querySelector('.date-picker-container').style.dispaly = 'none';

    }

    function showMessage() {
        // Hide all containers except the calendar


        // Show a message

        document.querySelector('.calendar').style.display = 'none';
        document.querySelector('.container1').style.display = 'none';
        document.querySelector('.container2').style.display = 'none';
        document.querySelector('.container3').style.display = 'none';
        document.querySelector('.container6').style.display = 'none';
        document.querySelector('.large-box-attendance-info').style.display = 'block';
        document.querySelector('.date-picker-container').style.dispaly = 'block';
    }
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.toggle-box i.fas.fa-calendar').click(function() {
            // Toggle the 'active' class on the calendar icon
            $(this).toggleClass('active');

            // Reset the bars icon to its initial styles
            $('.toggle-box i.fas.fa-bars').removeClass('active');
        });

        $('.toggle-box i.fas.fa-bars').click(function() {
            // Toggle the 'active' class on the bars icon
            $(this).toggleClass('active');

            // Reset the calendar icon to its initial styles
            $('.toggle-box i.fas.fa-calendar').removeClass('active');
        });
    });
    </script>
    <script>
    function toggleBoxContainer() {
        const boxContainer = document.getElementById('box-container');
        if (boxContainer.style.display === 'none') {
            boxContainer.style.display = 'block';
        } else {
            boxContainer.style.display = 'none';
        }
    }

    function hideBoxContainer() {
        const boxContainer = document.getElementById('box-container');
        boxContainer.style.display = 'none';
    }

    // Event listener for the bars-icon click event
    const barsIcon = document.getElementById('bars-icon');
    barsIcon.addEventListener('click', toggleBoxContainer);

    // Event listener for the calendar-icon click event (to hide the box-container)
    const calendarIcon = document.getElementById('calendar-icon');
    calendarIcon.addEventListener('click', hideBoxContainer);
    </script>
    <script>
    // Initialize the date range picker
    $('#daterange').daterangepicker({
        "startDate": "12-09-2023",
        "endDate": "20-09-2023",
        "opens": "left", // Position of the calendar
        "locale": {
            "format": "DD-MM-YYYY" // Date format
        }
    });
    </script>

    <script>
    document.addEventListener('livewire:load', function() {
        // Select all "Info" buttons and attach a click event handler to each.
        const infoButtons = document.querySelectorAll('.info-button');
        infoButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Fetch the data-record-id attribute to get the record ID.
                const recordId = button.getAttribute('data-record-id');

                // Set the selectedRecordId property in Livewire to the clicked record's ID.
                Livewire.emit('recordSelected', recordId);
            });
        });
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const currentMonthElement = document.getElementById("currentMonth");
        const prevMonthButton = document.getElementById("prevMonth");
        const nextMonthButton = document.getElementById("nextMonth");
        const calendarDaysElement = document.getElementById("calendar-days");

        let currentDate = new Date(2023, 8); // September 2023 (Note: Month is zero-based)

        // Function to update the calendar for a given date
        function updateCalendar(year, month) {
            // Generate and display the calendar for the specified year and month
            // You can use your own code to generate the calendar here.

            currentMonthElement.textContent = new Date(year, month).toLocaleString("en-US", {
                month: "long",
                year: "numeric",
            });
            // Update the calendar content in the 'calendar-days' element
            // You will need to generate the days based on the 'year' and 'month' and update the content in the 'calendar-days' element.
        }

        // Function to go to the previous month
        function previousMonth() {
            currentDate.setMonth(currentDate.getMonth() - 1);
            updateCalendar(currentDate.getFullYear(), currentDate.getMonth());
        }

        // Function to go to the next month
        function nextMonth() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            updateCalendar(currentDate.getFullYear(), currentDate.getMonth());
        }

        // Add click event listeners to the previous and next buttons
        prevMonthButton.addEventListener("click", previousMonth);
        nextMonthButton.addEventListener("click", nextMonth);

        // Initial calendar rendering
        updateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    });
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-daterangepicker@3.1.0/daterangepicker.js"></script>

<script>
  $(document).ready(function() {
    // Initialize the daterangepicker
    $('.date-range-input12').daterangepicker({
      opens: 'left', // Position the calendars side-by-side
    });
  });
</script> -->
    <script>
    $(function() {
        $("#datepicker1, #datepicker2").datepicker();
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const calendarDays = document.getElementById("calendar-days");
        const prevMonthButton = document.getElementById("prevMonth");
        const nextMonthButton = document.getElementById("nextMonth");
        const currentMonthElement = document.getElementById("currentMonth");

        let currentMonth = new Date().getMonth();
        let currentYear = new Date().getFullYear();

        function generateCalendarDays(year, month) {
            const firstDayOfMonth = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            const today = new Date().getDate();

            calendarDays.innerHTML = "";

            const daysInLastMonth = new Date(year, month, 0).getDate();
            var lastMonthPendingDate = daysInLastMonth - (firstDayOfMonth -1)

            for (let i = 0; i < firstDayOfMonth; i++) {
                createCalendarDay(lastMonthPendingDate, 0, 'emptyday');
                lastMonthPendingDate++;
            }

            for (let day = 1; day <= daysInMonth; day++) {
                createCalendarDay(day, today, 'normalDay');
            }
        }

        function createEmptyDay() {
            const emptyDayElement = document.createElement("div");
            emptyDayElement.classList.add("calendar-date", "empty");
            calendarDays.appendChild(emptyDayElement);
        }

        function createCalendarDay(day, today, emptyDayCls) {
            const calendarDayElement = document.createElement("div");
            calendarDayElement.classList.add("calendar-date", emptyDayCls);
            calendarDayElement.textContent = day;

            if (day === today) {
                calendarDayElement.classList.add("today");
            }

            calendarDays.appendChild(calendarDayElement);
        }

        function updateCalendar() {
            generateCalendarDays(currentYear, currentMonth);
            currentMonthElement.textContent = new Date(currentYear, currentMonth, 1).toLocaleString(
                'default', {
                    month: 'long',
                    year: 'numeric'
                });
        }

        prevMonthButton.addEventListener("click", function() {
            currentMonth = (currentMonth - 1 + 12) % 12;
            if (currentMonth === 11) {
                currentYear--;
            }
            updateCalendar();
        });

        nextMonthButton.addEventListener("click", function() {
            currentMonth = (currentMonth + 1) % 12;
            if (currentMonth === 0) {
                currentYear++;
            }
            updateCalendar();
        });

        updateCalendar();
    });
    </script>
    <script>
    $(document).ready(function () {
        $('.attendance-calendar-date').click(function () {
            // Remove the 'clicked' class from all elements
            $('.attendance-calendar-date').removeClass('clicked');

            // Add the 'clicked' class to the clicked element
            $(this).addClass('clicked');
        });
    });
    </script>
    
    

</div>