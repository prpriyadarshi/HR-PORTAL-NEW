<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      body{
            font-family: 'Montserrat', sans-serif;
        }
        .accordion {
            border: 1px solid #ccc;
            margin-bottom: 0.625rem;
            border-radius:5px;
            font-family: 'Montserrat', sans-serif;
        }
      .accordion:hover{
        border: 0.0625rem solid #3a9efd;
      }

        .accordion-heading {
            cursor: pointer;
            border-radius:5px;
        }

        .accordion-body {
            display: none;
            padding:0;
            margin:0;
            background-color: #fff;
        }

        .accordion-content {
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            align-items:center;
        }
        .content1 {
            display: flex;
            justify-content:start;
            align-items: center;
            gap:0.625rem;
            padding:5px;
            margin-bottom: 0.3125rem;
        }
        .content2 {
            display: flex;
            justify-content:start;
            align-items: center;
            gap:0.625rem;
            margin-bottom: 0.3125rem;
        }

        .accordion-title {
            display: flex;
            background-color: #fff;
            border-radius:5px;
            padding:0 5px;
            align-items:center;
            flex-direction: row;
            justify-content:space-between;
        }
       .arrow-btn{
        background-color:#fff;
        height:22px;
        width:22px;
        display:flex;
        justify-content:center;
        align-items:center;
        border-radius:50%;
        border: 1px solid #ccc;
       }
       .active .container {
           border-color: #3a9efd; /* Blue border when active */
       }

       .active .arrow-btn {
           color: #3a9efd;
           border: 1px solid #3a9efd;
        /* Blue arrow when active */
       }
        .approveBtn{
            background:#007BFF;
            border:1px solid #007BFF;
            padding:2px 5px;
            color:#fff;
            font-size:0.755rem;
            font-weight:500;
            border-radius:5px;
        }
        .rejectBtn{
            background:#fff;
            border:1px solid #007BFF;
            padding:2px 5px;
            color:#007BFF;
            font-size:0.755rem;
            font-weight:500;
            border-radius:5px;
        }

</style>
<body>
<div class="col"  id="leavePending" style="width: 100%; padding: 0;border-radius: 5px; ">
   @if(!empty($this->leaveApplications))
        @foreach($this->leaveApplications as $leaveRequest)
            <div class="container mt-1" style="border-radius: 5px;width:100%; " >
                <div class="accordion">
                    <div class="accordion-heading" style="border-radius: 5px; "  onclick="toggleAccordion(this)">
                        <div class="accordion-title">
                            <!-- Display leave details here based on $leaveRequest -->
                            <div class="accordion-content">
                             <div class="accordion-profile" style="display:flex; gap:7px; margin:auto 0;align-items:center;justify-content:center;">
                             @if(isset($leaveRequest['leaveRequest']->image))
                                <img src="{{ $leaveRequest['leaveRequest']->image }}" alt="User Profile Image" style="width: 40px; height: 40px; border-radius: 50%;">
                                        @else
                                        <img src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars.png" alt="Default User Image" style="width: 45px; height: 45px; border-radius: 50%;">
                                        @endif
                                        <div>
                                            @if(isset($leaveRequest['leaveRequest']->first_name))
                                            <p style="font-size: 0.755rem; font-weight: 500; text-align: center;margin: auto;">{{ $leaveRequest['leaveRequest']->first_name }}  {{ $leaveRequest['leaveRequest']->last_name }} <br>
                                            @if(isset($leaveRequest['leaveRequest']->emp_id))
                                                <span style="color: #778899; font-size: 0.675rem; text-align: start;">#{{ $leaveRequest['leaveRequest']->emp_id }} </span>
                                            @endif
                                            </p>
                                            @else
                                                <p style="font-size: 0.755rem; font-weight: 500;">Name Not Available</p>
                                            @endif
                                        </div>
                                 </div>
                            </div>
                         
                            <div class="accordion-content">
                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">Leave Type</span>
                                @if(isset($leaveRequest['leaveRequest']->leave_type))
                                    <span style="color: #36454F; font-size: 0.755rem; font-weight: 500;">{{ $leaveRequest['leaveRequest']->leave_type }}</span>
                                @else
                                    <span style="color: #778899; font-size: 0.69rem;">Leave Type Not Available</span>
                                @endif
                            </div>

                            <div class="accordion-content">
                                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                    <p style="color: #778899; font-size: 0.755rem; font-weight: 500; text-align: center;">
                                        Period <br>
                                        <span style="color: #333; font-size: 0.755rem; font-weight: 500;">
                                            @if(isset($leaveRequest['leaveRequest']->created_at))
                                                {{ $leaveRequest['leaveRequest']->created_at->format('d M, Y') }}
                                            @else
                                                Date Not Available
                                            @endif
                                        </span> <br>
                                        <span style="color: #36454F; font-size: 0.675rem; font-weight: 400;">
                                            @php
                                                $numberOfDays = $this->calculateNumberOfDays($leaveRequest['leaveRequest']->from_date, $leaveRequest['leaveRequest']->from_session, $leaveRequest['leaveRequest']->to_date, $leaveRequest['leaveRequest']->to_session);
                                            @endphp

                                            @if($numberOfDays == 1)
                                                <span style="color: #778899; font-size: 0.69rem;">Full Day</span>
                                            @elseif($numberOfDays == 0.5)
                                                <span style="color: #778899; font-size: 0.69rem;">Half Day</span>
                                            @else
                                                <span style="color: #36454F; font-size: 0.675rem; font-weight: 400;">{{ $numberOfDays }} days</span>
                                            @endif
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <!-- Add other details based on your leave request structure -->
                            <div class="arrow-btn" >
                               <i class="fa fa-angle-down"></i>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-body">
                      <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>
                        <div class="content1">
                           <span style="color: #333; font-size: 0.755rem; font-weight: 500;">No. of days:</span>
                                @if(isset($leaveRequest['leaveRequest']->from_date))
                                    <span style="color: #778899; font-size: .795rem; font-weight: 400;">
                                        {{ $this->calculateNumberOfDays($leaveRequest['leaveRequest']->from_date, $leaveRequest['leaveRequest']->from_session, $leaveRequest['leaveRequest']->to_date, $leaveRequest['leaveRequest']->to_session) }}
                                    </span>
                                @else
                                    <span style="color: #778899; font-size: 0.755rem; font-weight: 400;">No. of days not available</span>
                                @endif
                            </div>
                        <div class="content1">
                          <span style="color: #333; font-size: 0.755rem; font-weight: 500;">Reason:</span>
                          @if(isset($leaveRequest['leaveRequest']->reason))
                                <span style="font-size: 0.755rem; color:#778899">{{ ucfirst($leaveRequest['leaveRequest']->reason) }}</span>
                            @else
                                <span style="font-size: 0.755rem; color:#778899">Reason Not Available</span>
                            @endif
                        </div>
                         <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>
                        <div style="display:flex; flex-direction:row; justify-content:space-between;">
                          <div class="content1">
                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">Applied On <br>
                                @if(isset($leaveRequest['leaveRequest']->created_at))
                                    <span style="color: #333; font-size: 0.785rem; font-weight: 500;">
                                        {{ $leaveRequest['leaveRequest']->created_at->format('d M, Y') }}
                                   </span>
                                @else
                                    <span style="color: #333; font-size: 0.755rem; font-weight: 400;">No. of days not available</span>
                                @endif
                               </span> 
                            </div>
                            <div class="content2">
                                <span style="color: #778899; font-size: 0.755rem; font-weight: 500;">Leave Balance:</span>
                                @if(!empty($leaveRequest['leaveBalances']))
                                        <div style=" flex-direction:row; display: flex; align-items: center;justify-content:center;">
                                        <!-- Sick Leave -->
                                            <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #e6e6fa; display: flex; align-items: center; justify-content: center; margin-left:15px;">
                                                <span style="font-size: 0.625rem; color: #50327c;font-weight:500;">SL</span>
                                        </div>
                                            <span style="font-size: 0.755rem; font-weight: 500; color: #333; margin-left: 5px;">{{ $leaveRequest['leaveBalances']['sickLeaveBalance'] }}</span>


                                        <!-- Casual Leave -->
                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #e7fae7; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                                                <span style="font-size: 0.625rem; color: #1d421e;font-weight:500;">CL</span>
                                        </div>
                                            <span style="font-size: 0.755rem; font-weight: 500; color: #333; margin-left: 5px;">{{ $leaveRequest['leaveBalances']['casualLeaveBalance'] }}</span>
                                        <!-- Loss of Pay -->
                                        <div style="width: 20px; height: 20px; border-radius: 50%; background-color: #ffebeb; display: flex; align-items: center; justify-content: center; margin-left: 15px;">
                                                <span style="font-size: 0.625rem; color: #890000;font-weight:500;">LP</span>
                                        </div>
                                            <span style="font-size: 0.755rem; font-weight: 500; color: #333; margin-left: 5px;">{{ $leaveRequest['leaveBalances']['lossOfPayBalance'] }}</span>
                                    </div>
                                @endif
                            </div>
                            

                            <div class="content1">
                                <a href="{{ route('view-details', ['leaveRequestId' => $leaveRequest['leaveRequest']->id]) }}" style="color:#007BFF;font-size:0.755rem;">View Details</a>
                                <button class="rejectBtn" wire:click="rejectLeave({{ $loop->index }})">Reject</button>
                                <button class="rejectBtn" >Forward</button>
                                <button class="approveBtn btn-primary" wire:click="approveLeave({{ $loop->index }})">Approve</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="leave-pending" style="margin-top:30px; background:#fff; margin-left:120px; display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">
            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">
            <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no pending records of any leave transaction to Review</p>
        </div>
    @endif
</div>
<script>
      function toggleAccordion(element) {
            const accordionBody = element.nextElementSibling;
            if (accordionBody.style.display === 'block') {
                accordionBody.style.display = 'none';
                element.classList.remove('active'); // Remove active class
            } else {
                accordionBody.style.display = 'block';
                element.classList.add('active'); // Add active class
            }
        }
</script>
</body>
</html>
</div>