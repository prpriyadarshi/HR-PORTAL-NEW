<div>
<!DOCTYPE html>
<html>
 
<head>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        #hide-button {
 
          color: blue;
 
           border-radius: 5px;
 
            padding: 5px 10px;
 
             cursor: pointer;
 
              float: right; /* Align to the right */
 
                 margin-top: -40px; /* Adjust margin as needed */
 
}
 
    </style>
   </head>
 
    <body>
    <div class="body">
        <h4>Review</h4>
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
                <button type="button" class="btn btn-outline-primary" id="restrictedActiveButton">Active</button>
                <button type="button" class="btn btn-outline-primary" id="restrictedClosedButton">Closed</button>
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
                            <p class="id" style="margin-top:-18px">XSS-0007</p>
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
                <button type="button" class="btn btn-outline-primary" id="attendenceActiveButton">Active</button>
                <button type="button" class="btn btn-outline-primary" id="attendenceClosedButton">Closed</button>
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
                            <p class="id" style="margin-top:-18px">XSS-0007</p>
                        </div>
 
                        <div class="details" style="margin-left:250px; margin-top:-58px;font-size:14px;">
                            <p>Recommended on</p>
                            <p class="id" style="margin-top:-18px">09 Oct, 2023</p>
                        </div>
 
                        <div class="details" style="margin-left:414px; margin-top:-58px;font-size:14px;">
                            <p>Recommended Status</p>
                            <p class="id" style="margin-top:-18px">CONFIRMED</p>
                        </div>
 
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
                <button type="button" class="btn btn-outline-primary" id="resignationActiveButton">Active</button>
                <button type="button" class="btn btn-outline-primary" id="resignationClosedButton">Closed</button>
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
                <button type="button" class="btn btn-outline-primary" id="helpdeskActiveButton">Active</button>
                <button type="button" class="btn btn-outline-primary" id="helpdeskClosedButton">Closed</button>
            </div>
            <div class="form-group" style="margin-top: 25px;width:200px;margin-left:364px;">
                <input type="date" class="form-control" wire:model="emp_dob" max="{{ date('Y-m-d') }}">
                @error('emp_dob') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
 
            <div class="mb-4" style="margin-left:570px; margin-top: -50px;">
                <input type="text" wire:model.lazy="search" placeholder="Search for Employee">
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
        <button type="button" class="btn btn-outline-primary" id="holidayActiveButton">Active</button>
        <button type="button" class="btn btn-outline-primary" id="holidayClosedButton">Closed</button>
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
        <button type="button" class="btn btn-outline-primary" id="leavecancelActiveButton">Active</button>
        <button type="button" class="btn btn-outline-primary" id="leavecancelClosedButton" wire:click="approvedLeaves">Closed</button>
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
                    <div class="card" style="height: 330px; width: 650px; margin-left: 200px; margin-top: 20px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                            alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                        <p style="text-align: center;">No Review Items for Leave Cancel</p>
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
        // JavaScript function to toggle the details
        function toggleDetails(id) {
  var e = document.getElementById(id);
  e.style.display = e.style.display === "none" || e.style.display === "" ? "block" : "none";
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
 
    </script>
</body>
 
</html>
 
</div>