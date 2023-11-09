<div>
<!DOCTYPE html>
<html>
 
<head>
    <style>
        .links-content
         {
             display: none;
         }
 
        #hide-button {
 
             
              border-radius: 5px;
 
              padding: 5px 10px;
 
              cursor: pointer;
 
              float: right; /* Align to the right */
 
              margin-top: -40px; /* Adjust margin as needed */
 
}
/* Add a transition for smooth color change */
.btn {
    border: 1px solid #ccc; /* Add a border to create a box effect */
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3); /* Add a shadow effect */
  }
 
 
  body{
            font-family: 'Montserrat', sans-serif;
            font-size: 15px;
        }
    .accordion {
            border: 1px solid #ccc;
            margin-bottom: 0.625rem;
            width:90%;
            margin:0 auto;
            border-radius:5px;
        }
      .accordion:hover{
        border: 0.0625rem solid #3a9efd;
      }

        .accordion-heading {
            background-color: #fff;
            padding: 0.625rem;
            cursor: pointer;
        }

        .accordion-body {
            display: none;
            background-color: #fff;
            padding: 0.625rem;
        }

        .accordion-content {
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            align-items:center;
            margin:auto 0;
        }
        .content {
            display: flex;
            justify-content:start;
            align-items: center;
            gap:0.625rem;
            margin-bottom: 0.3125rem;
        }

        .accordion-title {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
       .accordion-button{
        color:#DCDCDC;
        border: 0.0625rem solid #DCDCDC;
       }
       .active .container {
           border-color: #3a9efd; /* Blue border when active */
       }
      .accordion-button{
       color:#DCDCDC;
       border: 0.0625rem solid #DCDCDC;
      }

       .active .accordion-button {
           color: #3a9efd;
           border: 0.0625rem solid #3a9efd;
        /* Blue arrow when active */
       }
 
 
    </style>
   </head>
 
    <body>
    <div class="body">
        <h5>Review</h5>
        <div>
            <p>ATTENDANCE</p>
            <a onclick="toggleDetails('restricted-content')" class="links">Attendance Regular...</a><br><br>
        </div>
        <div>
            <p>EMP INFO</p>
            <a onclick="toggleDetails('attendence-content')" class="links">Confirmation</a><br>
            <a onclick="toggleDetails('resignation-content')" class="links">Resignations</a><br>
            <a onclick="toggleDetails('helpdesk-content')" class="links">Help desk</a><br><br>
        </div>
        <div>
            <p>LEAVE</p>
            <a onclick="toggleDetails('holiday-content')" class="links">Leave</a><br>
            <a onclick="toggleDetails('leavecancel-content')" class="links">Leave Cancel</a><br>
            <!-- <a onclick="toggleDetails('compoff-content')" class="links">Leave Comp Off</a><br>
            <a onclick="toggleDetails('restrictedholiday-content')" class="links">Restricted Holiday</a> -->
        </div>
        <div id="restricted-content" style="display: none; margin-top: -328px;">
            <!-- Content to be toggled -->
           
            <div class="btn-group leavewf-links" role="group" aria-label="Leave Workflow" style="margin-left: 300px;">
            <button type="button" class="btn" id="restrictedActiveButton">Active</button>
    <button type="button" class="btn" id="restrictedClosedButton">Closed</button>
</div>
 
 
           
 
            <div class="form-group" style="margin-top: 25px;width:200px;margin-left:364px;">
                <input type="date" class="form-control" wire:model="emp_dob" max="{{ date('Y-m-d') }}">
                @error('emp_dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
 
            <div class="mb-4" style="margin-left:570px; margin-top: -50px;">
                <input type="text" wire:model.lazy="search" placeholder="Search for Employee">
            </div>
 
            <div class="container">
                <div class="container" id="restrictedActiveCard" style="display: none;">
                    <div class="card" style="height: 350px; width:540px; margin-left: 220px; margin-top: 20px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU" alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                        <p style="text-align: center;">Hey, you have no regularization records to view</p>
                    </div>
                </div>
            </div>
 
            <div class="container">
                <div class="container" id="restrictedClosedCard" style="display: none;">
                    <div class="card" style="height:262px; width: 650px; margin-left: 200px; margin-top: 20px;">
                    <!-- <div class="accordion-content">
        <span style="margin-top: 0.625rem; font-size: 1rem; font-weight: 400; color: #32CD32;">APPROVED</span>
    </div>
    <div class="accordion-button" onclick="toggleAccordion()">
        ▼
    </div> -->
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMT5TgvjUm4x4YpmWdvAG8dvbNzJ67RzvX7j0fbJd2znsBYuhYkAJX4jXMFedU-ueYYZI&usqp=CAU"
                            alt="Sample Image" style="height: 50px; width: 50px; margin: 0 auto; margin-left:30px; margin-top:23px">
                        <div class="details" style="margin-left:92px; margin-top: -45px;">
                            <p>Renuka Chinthala</p>
                            <p class="id" style="margin-top:-18px">AGS-0007</p>
                        </div>
 
                        <div class="details" style="margin-left:250px; margin-top:-58px;">
                            <p>No.of days</p>
                            <p class="id" style="margin-top:-18px">3</p>
                        </div>
                        <hr class="line" style="border:none;margin:4px 0; height: 1px; background-color: black; ">
                        <p class="date" style="margin-top:20px;font-size:13px;margin-left:38px;">Dates applied :(17 - 19) Apr
                            2023</p>
                        <hr class="line" style="border:none;margin:4px 0; height: 1px; background-color: black; ">
                        <div class="details" style="margin-left:31px; margin-top:25px;">
                            <p>Regulirised On</p>
                            <p class="id" style="margin-top:-18px;font-size:13px;">25 Apr,2023</p><br>
                            <p class="view-details" style="margin-left: 20rem;;margin-top:-74px;"><a href="/review-regularizations">View Details</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        <div id="attendence-content" style="display: none; margin-top: -328px;">
            <!-- Content to be toggled -->
            <div class="btn-group leavewf-links" role="group" aria-label="Leave Workflow" style="margin-left: 300px;">
    <button type="button" class="btn" id="attendenceActiveButton">Active</button>
    <button type="button" class="btn" id="attendenceClosedButton">Closed</button>
</div>
            <div class="form-group" style="margin-top: 25px;width:200px;margin-left:364px;">
                <input type="date" class="form-control" wire:model="emp_dob" max="{{ date('Y-m-d') }}">
                @error('emp_dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
 
            <div class="mb-4" style="margin-left:570px; margin-top: -50px;">
                <input type="text" wire:model.lazy="search" placeholder="Search for Employee">
            </div>
            <div class="container">
                <div class="container" id="attendenceActiveCard" style="display: none;">
                    <div class="card" style="height:362px; width: 650px;margin-left: 200px; margin-top: 20px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                            alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                        <p style="text-align: center;">Hey, you have no regularization records to view</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container" id="attendenceClosedCard" style="display: none;">
                    <div class="card" style="height: 280px; width: 650px; margin-left: 200px; margin-top: 20px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMT5TgvjUm4x4YpmWdvAG8dvbNzJ67RzvX7j0fbJd2znsBYuhYkAJX4jXMFedU-ueYYZI&usqp=CAU"
                            alt="Sample Image" style="height: 50px; width: 50px; margin: 0 auto; margin-left:30px; margin-top:23px">
 
                        <div class ="details" style="margin-left:92px; margin-top: -45px;font-size:14px;">
                            <p>Renuka Chinthala</p>
                            <p class="id" style="margin-top:-18px">AGS-0007</p>
                        </div>
 
                        <div class="details" style="margin-left:250px; margin-top:-58px;font-size:14px;">
                            <p>Recommended on</p>
                            <p class="id" style="margin-top:-18px">09 Oct, 2023</p>
                        </div>
 
                        <div class="details" style="margin-left:414px; margin-top:-58px;font-size:14px;">
                            <p>Recommended Status</p>
                            <p class="id" style="margin-top:-18px">CONFIRMED</p>
                           
                        </div>
                        <div style="margin-left:36rem;">CLOSED</div>
                       
                       
 
                        <hr class="line" style="border:none;margin:4px 0; height: 1px; background-color: black; ">
                        <p class="date" style="margin-top:20px;font-size:13px;margin-left:21px;">Designation: Software
                            Engineer </p>
                        <hr class="line" style="border:none;margin:4px 0; height: 1px; background-color: black; ">
                        <div class="details" style="margin-left:31px; margin-top:25px;">
                            <p>Initiated On</p>
                            <p class="id" style="margin-top:-18px;font-size:13px;">09 Oct, 2023</p><br>
                           
                            <p class="view-details" style="margin-left: 20rem;;margin-top:-74px;"><a href="
                            /view-details1">View Details</a>
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="resignation-content" style="display: none; margin-top: -328px;">
            <!-- Content to be toggled -->
            <div class="btn-group leavewf-links" role="group" aria-label="Leave Workflow" style="margin-left: 300px;">
           
                <button type="button" class="btn " id="resignationActiveButton">Active</button>
                <button type="button" class="btn" id="resignationClosedButton">Closed</button>
            </div>
            <div class="form-group" style="margin-top: 25px;width:200px;margin-left:364px;">
                <input type="date" class="form-control" wire:model="emp_dob" max="{{ date('Y-m-d') }}">
                @error('emp_dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
 
            <div class="mb-4" style="margin-left:570px; margin-top: -50px;">
                <input type="text" wire:model.lazy="search" placeholder="Search for Employee">
            </div>
            <div class="container">
                <div class="container" id="resignationActiveCard" style="display: none;">
                    <div class="card" style="height:335px; width: 650px;margin-left: 200px; margin-top: 20px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                            alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                        <p style="text-align: center;">Hey, you have no resignation records to show</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container" id="resignationClosedCard" style="display: none;">
                    <div class="card" style="height: 330px; width: 650px; margin-left: 200px; margin-top: 20px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                            alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                        <p style="text-align: center;">Hey, you have no resignation records to show</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="helpdesk-content" style="display: none; margin-top: -328px;">
            <!-- Content to be toggled -->
            <div class="btn-group leavewf-links" role="group" aria-label="Leave Workflow" style="margin-left: 300px;">
                <button type="button" class="btn" id="helpdeskActiveButton">Active</button>
                <button type="button" class="btn" id="helpdeskClosedButton">Closed</button>
            </div>
            <div class="form-group" style="margin-top: 25px;width:200px;margin-left:364px;">
                <input type="date" class="form-control" wire:model="emp_dob" max="{{ date('Y-m-d') }}">
                @error('emp_dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
 
            <div class="mb-4" style="margin-left:570px; margin-top: -50px;">
                <input type="text" wire:model="search"placeholder="Search for Employee">
            </div>
            <div class="container">
                <div class="container" id="helpdeskActiveCard" style="display: none;">
                    <div class="card" style="height: 330px; width:473px; margin-left: 200px; margin-top: 20px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                            alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                        <p style="text-align: center; font-size:15px;">No helpdesk review items</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container" id="helpdeskClosedCard" style="display: none;">
                    <div class="card" style="height: 330px; width:473px; margin-left: 200px; margin-top: 20px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                            alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                        <p style="text-align: center; font-size:15px;">No helpdesk review items</p>
                    </div>
                </div>
            </div>
 
            <!-- <leave content> -->
   
        </div>
        <div id="holiday-content" style="display: none; margin-top: -328px;">
    <!-- Content to be toggled -->
    <div class="btn-group leavewf-links" role="group" aria-label="Leave Workflow" style="margin-left: 300px;">
        <button type="button" class="btn" id="holidayActiveButton">Active</button>
        <button type="button" class="btn" id="holidayClosedButton">Closed</button>
    </div>
    <div class="form-group" style="margin-top: 25px;width:200px;margin-left:364px;">
                <input type="date" class="form-control" wire:model="emp_dob" max="{{ date('Y-m-d') }}">
                @error('emp_dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
 
            <div class="mb-4" style="margin-left:570px; margin-top: -50px;">
                <input type="text" wire:model.lazy="search" placeholder="Search for Employee">
            </div>
            <div class="container">
                <div id="holidayActiveCard" style="display: none;">
                    @if($this->leaveApplications)
                        <div class="reviewList" style=" background:transparent; width:95%; margin-left:50px;">
                            @livewire('view-pending-details')
                        </div>
                    @else
                        <div class="card" style="height: 330px; width:473px; margin-left: 200px; margin-top: 20px;">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                                alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                            <p style="text-align: center; font-size:15px;">Hey, you have no leave applications to review.</p>
                        </div>
                    @endif
                </div>
            </div>
 

    <div class="container">
        <div id="holidayClosedCard" style="display: none;">
   
        <div class="closedlist" style=" background:transparent; width:90%; margin-left:100px;" >
            @if(!empty($approvedLeaveApplicationsList))
                @foreach($approvedLeaveApplicationsList as $leaveRequest)
                <div class="container mt-4">
                                <div class="accordion">

                                    <div class="accordion-heading" onclick="toggleAccordion(this)">

                                        <div class="accordion-title">

                                            <!-- Display leave details here based on $leaveRequest -->
                                            <div class="accordion-content">
                                                    <div class="accordion-profile" style="display:flex; gap:10px; margin:auto 0;">
                                                    @if(isset($leaveRequest->image))
                                                          <img src="{{ $leaveRequest->image }}" alt="User Profile Image" style="width: 40px; height: 40px; border-radius: 50%;">
                                                            @else
                                                            <img src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars.png" alt="Default User Image" style="width: 45px; height: 45px; border-radius: 50%;">
                                                            @endif
                                                            <div class="center">
                                                            @if(isset($leaveRequest->first_name))
                                                            <p style="font-size: 0.875rem; font-weight: 500;">{{ $leaveRequest->first_name }}  {{ $leaveRequest->last_name }}</p>
                                                            @else
                                                                <p style="font-size: 0.875rem; font-weight: 500;">Name Not Available</p>
                                                            @endif
                                                            @if(isset($leaveRequest->emp_id))
                                                                <p style="margin-top: -15px; color: #778899; font-size: 0.69rem;">#{{ $leaveRequest->emp_id }} </p>
                                                            @endif
                                                        </div>
                                                    </div>
                                              </div>

                                            <div class="accordion-content">

                                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Leave Type</span>

                                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->leave_type}}</span>

                                            </div>

                                            <div class="accordion-content">

                                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">No. of Days</span>

                                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">

                                                    {{ $this->calculateNumberOfDays($leaveRequest->from_date, $leaveRequest->from_session, $leaveRequest->to_date, $leaveRequest->to_session) }}

                                                </span>

                                            </div>

                

                                            <!-- Add other details based on your leave request structure -->

                

                                            <div class="accordion-content">

                                                @if(strtoupper($leaveRequest->status) == 'APPROVED')

                                                    <span style="margin-top:0.625rem; font-size: 0.9rem; font-weight: 500; color:#32CD32;">{{ strtoupper($leaveRequest->status) }}</span>

                                                @elseif(strtoupper($leaveRequest->status) == 'REJECTED')

                                                    <span style="margin-top:0.625rem; font-size: 0.9rem; font-weight: 500; color:#FF0000;">{{ strtoupper($leaveRequest->status) }}</span>

                                                @else

                                                    <span style="margin-top:0.625rem; font-size: 0.9rem; font-weight: 500; color:#778899;">{{ strtoupper($leaveRequest->status) }}</span>

                                                @endif

                                            </div>

                                            <div class="accordion-button" style="margin-top: 0.625rem; font-size: 1rem;  height: 0.625rem; width: 0.625rem; border-radius: 50%; background: #fff;  display: flex; justify-content: center; align-items: center; ">

                                                <!-- Down arrow character -->

                                            </div>

                                        </div>

                                    </div>

                                    <div class="accordion-body">

                                        <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                                        <div class="content">

                                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Duration:</span>

                                            <span style="font-size: 0.8125rem;">

                                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_from_date }}</span>

                                                ({{ $leaveRequest->from_session }} ) to

                                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_to_date }}</span>

                                            ( {{ $leaveRequest->to_session }} )

                                            </span>

                                        </div>

                                        <div class="content">

                                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Reason:</span>

                                            <span style="font-size: 0.8125rem;">{{ $leaveRequest->reason }}</span>

                                        </div>

                                        <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                                        <div style="display:flex; flex-direction:row; justify-content:space-between;">

                                            <div class="content">

                                                <span style="color: #778899; font-size: 0.875rem; font-weight: 400;">Applied on:</span>

                                                <span style="color: #333; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->created_at->format('d M, Y') }}</span>

                                            </div>

                                            <div class="content">

                                            <a href="{{ route('approved-details', ['leaveRequestId' => $leaveRequest->id]) }}">
                                                <span style="color: #3a9efd; font-size: 0.875rem; font-weight: 500;">View Details</span>
                                            </a>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                

                        @endforeach

                    @else

                        <div class="leave-pending" style="margin-top:30px; background:#fff; margin-left:120px; display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                            <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">

                            <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no closed of  leave transaction</p>

                        </div>

                    @endif

                </div>

                </div>
                                    
                </div>
       
       
       
    </div>
</div>
    <div id="leavecancel-content" style="display: none; margin-top: -328px;">
    <!-- Content to be toggled -->
        <div class="btn-group leavewf-links" role="group" aria-label="Leave Workflow" style="margin-left: 300px;">
        <button type="button" class="btn " id="leavecancelActiveButton">Active</button>
        <button type="button" class="btn " id="leavecancelClosedButton">Closed</button>
        </div>
    <div class="form-group" style="margin-top: 25px;width:200px;margin-left:364px;">
                <input type="date" class="form-control" wire:model="emp_dob" max="{{ date('Y-m-d') }}">
                @error('emp_dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
 
            <div class="mb-4" style="margin-left:570px; margin-top: -50px;">
                <input type="text" wire:model.lazy="search" placeholder="Search for Employee">
            </div>
            <div class="container">
                <div class="container" id="leavecancelActiveCard" style="display: none;">
                    <div class="card" style="height:335px; width: 650px;margin-left: 200px; margin-top: 20px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                            alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                        <p style="text-align: center;">No Review Items for Leave Cancel</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="container" id="leavecancelClosedCard" style="display: none;">
                <div class="card" style="height:295px; width: 650px; margin-left: 200px; margin-top: 20px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMT5TgvjUm4x4YpmWdvAG8dvbNzJ67RzvX7j0fbJd2znsBYuhYkAJX4jXMFedU-ueYYZI&usqp=CAU"
                            alt="Sample Image" style="height: 50px; width: 50px; margin: 0 auto; margin-left:30px; margin-top:23px">
 
                        <div class ="details" style="margin-left:92px; margin-top: -45px;font-size:12px;">
                            <p>Renuka Chinthala</p>
                            <p class="id" style="margin-top:-18px">AGS-0007</p>
                        </div>
                        <div class="details" style="margin-left:250px; margin-top:-52px;font-size:12px;">
                        <p>Leave Type</p>
                            <p style="margin-top:-16px">Casual Leave Probation</p>
 
                        </div>
                       
                    <div class="details" style="margin-left:431px; margin-top:-50px;font-size:12px;">
                      <p>Period</p>
                       <p class="id" style="margin-top:-18px">01 Aug 2023</p>
                       <p style="font-size:10px;margin-top:-15px">Full Day</p>
                    </div>
                    <hr class="line" style="border:none;margin:4px 0; height: 1px; background-color: black;marging-top:8px; ">
                  <p class="date" style="margin-top:20px;font-size:13px;margin-left:21px;">No. of days : 1
                             </p>
                             <p class="date" style="margin-top:-16px;font-size:13px;margin-left:21px;">Reason:
                            I am going not going to attend party
                             </p>
                        <hr class="line" style="border:none;margin:4px 0; height: 1px; background-color: black; ">
                        <div class="details" style="margin-left:31px; margin-top:25px;">
                            <p>Applied On</p>
                            <p class="id" style="margin-top:-18px;font-size:13px;">20 oct, 2023
                            </p><br>
                            <p class="view-details" style="margin-left: 20rem;;margin-top:-74px;"><a href="/details/9">View Details</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    </div>
    <!-- <Leave Comp Off> -->
 
   
    </div>
 
    </div>
 
    <!-- Include Bootstrap JavaScript (jQuery and Popper.js are required dependencies) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
    <script>
       
// function toggleDetails(id) {
//     var element = document.getElementById(id);
 
//     if (element.style.display === "none" || element.style.display === "") {
//         element.style.display = "block";
//     } else {
//         element.style.display = "none";
//     }
// }
 
function toggleDetails(contentId) {
    // Get all the content sections
    const contentSections = [
        'restricted-content',
        'attendence-content',
        'resignation-content',
        'helpdesk-content',
        'holiday-content',
        'leavecancel-content',
        // Add more content section IDs here
    ];
 
    // Hide all content sections except the one that was clicked
    contentSections.forEach((section) => {
        if (section === contentId) {
            // Show the clicked section
            document.getElementById(section).style.display = 'block';
        } else {
            // Hide the other sections
            document.getElementById(section).style.display = 'none';
        }
    });
}
 
$(function() {
  function setupClickHandlers(activeButton, activeCard, closedButton, closedCard) {
    activeButton.click(function() {
      activeCard.show();
      closedCard.hide();
    });
 
    closedButton.click(function() {
      closedCard.show();
      activeCard.hide();
    });
  }
 
  // Restricted content
  setupClickHandlers(
    $('#restrictedActiveButton'), $('#restrictedActiveCard'),
    $('#restrictedClosedButton'), $('#restrictedClosedCard')
  );
 
 
  // Attendence content
  setupClickHandlers(
    $('#attendenceActiveButton'), $('#attendenceActiveCard'),
    $('#attendenceClosedButton'), $('#attendenceClosedCard')
  );
 
  // Resignation content
  setupClickHandlers(
    $('#resignationActiveButton'), $('#resignationActiveCard'),
    $('#resignationClosedButton'), $('#resignationClosedCard')
  );
 
  // Helpdesk content
  setupClickHandlers(
    $('#helpdeskActiveButton'), $('#helpdeskActiveCard'),
    $('#helpdeskClosedButton'), $('#helpdeskClosedCard')
  );
 
  // Holiday content
  setupClickHandlers(
    $('#holidayActiveButton'), $('#holidayActiveCard'),
    $('#holidayClosedButton'), $('#holidayClosedCard')
  );
 
  // Leave cancel content
  setupClickHandlers(
    $('#leavecancelActiveButton'), $('#leavecancelActiveCard'),
    $('#leavecancelClosedButton'), $('#leavecancelClosedCard')
  );
});
document.getElementById("attendenceActiveButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("attendenceClosedButton").classList.add("btn-outline-primary");
        document.getElementById("attendenceClosedButton").classList.remove("btn-primary");
    });
 
    document.getElementById("attendenceClosedButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("attendenceActiveButton").classList.add("btn-outline-primary");
        document.getElementById("attendenceActiveButton").classList.remove("btn-primary");
    });
    document.getElementById("restrictedActiveButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("restrictedClosedButton").classList.add("btn-outline-primary");
        document.getElementById("restrictedClosedButton").classList.remove("btn-primary");
    });
 
    document.getElementById("restrictedClosedButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("restrictedActiveButton").classList.add("btn-outline-primary");
        document.getElementById("restrictedActiveButton").classList.remove("btn-primary");
    });
    document.getElementById("resignationActiveButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("resignationClosedButton").classList.add("btn-outline-primary");
        document.getElementById("resignationClosedButton").classList.remove("btn-primary");
    });
 
    document.getElementById("resignationClosedButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("resignationActiveButton").classList.add("btn-outline-primary");
        document.getElementById("resignationActiveButton").classList.remove("btn-primary");
    });
    document.getElementById("helpdeskActiveButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("helpdeskClosedButton").classList.add("btn-outline-primary");
        document.getElementById("helpdeskClosedButton").classList.remove("btn-primary");
    });
 
    document.getElementById("helpdeskClosedButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("helpdeskActiveButton").classList.add("btn-outline-primary");
        document.getElementById("helpdeskActiveButton").classList.remove("btn-primary");
    });
    document.getElementById("holidayActiveButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("holidayClosedButton").classList.add("btn-outline-primary");
        document.getElementById("holidayClosedButton").classList.remove("btn-primary");
    });
 
    document.getElementById("holidayClosedButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("holidayActiveButton").classList.add("btn-outline-primary");
        document.getElementById("holidayActiveButton").classList.remove("btn-primary");
    });
    document.getElementById("leavecancelActiveButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("leavecancelClosedButton").classList.add("btn-outline-primary");
        document.getElementById("leavecancelClosedButton").classList.remove("btn-primary");
    });
 
    document.getElementById("leavecancelClosedButton").addEventListener("click", function() {
        this.classList.add("btn-primary");
        this.classList.remove("btn-outline-primary");
        document.getElementById("leavecancelActiveButton").classList.add("btn-outline-primary");
        document.getElementById("leavecancelActiveButton").classList.remove("btn-primary");
    });
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