<div>
<!DOCTYPE html>
<html>
 
<head>
    <style>
        .body {
            /* font-family: Montserrat; */
            font-size: 15px;
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
        <div class="card" style="height: 330px; width:473px; margin-left: 200px; margin-top: 20px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQP2fBGQf4GHJcIn2SxSKmUPPStVmd22w5uig&usqp=CAU"
                            alt="Sample Image" style="height: 300px; width: 300px; margin: 0 auto;">
                        <p style="text-align: center; font-size:15px;">Hey, you have no regularization records to view</p>
                    </div>
        </div>
    </div>
 
    <div class="container">
        <div id="holidayClosedCard" style="display: none;">
        <div class="card" style="height:295px; width: 650px; margin-left: 200px; margin-top: 20px;">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMT5TgvjUm4x4YpmWdvAG8dvbNzJ67RzvX7j0fbJd2znsBYuhYkAJX4jXMFedU-ueYYZI&usqp=CAU"
                            alt="Sample Image" style="height: 50px; width: 50px; margin: 0 auto; margin-left:30px; margin-top:23px">
 
                        <div class ="details" style="margin-left:92px; margin-top: -45px;font-size:12px;">
                            <p>Renuka Chinthala</p>
                            <p class="id" style="margin-top:-18px">XSS-0007</p>
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
                             Due to personal Emergency
                             </p>
                        <hr class="line" style="border:none;margin:4px 0; height: 1px; background-color: black; ">
                        <div class="details" style="margin-left:31px; margin-top:25px;">
                            <p>Applied On</p>
                            <p class="id" style="margin-top:-18px;font-size:13px;">07 Aug, 2023
                            </p><br>
                            <p class="view-details" style="margin-left: 20rem;;margin-top:-74px;"><a href="/review-leave">View Details</a>
                            </p>
                        </div>
                    </div>
        </div>
 
       
       
       
    </div>
</div>
    <div id="leavecancel-content" style="display: none; margin-top: -328px;">
    <!-- Content to be toggled -->
        <div class="btn-group leavewf-links" role="group" aria-label="Leave Workflow" style="margin-left: 300px;">
        <button type="button" class="btn btn-outline-primary" id="leavecancelActiveButton">Active</button>
        <button type="button" class="btn btn-outline-primary" id="leavecancelClosedButton">Closed</button>
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