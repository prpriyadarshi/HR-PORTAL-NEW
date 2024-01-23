<div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .button-container {
    display: flex;
    justify-content: center; 
    margin-right:250px;
    /* Adjust as needed for alignment */
   }
   
   .rotate-arrow {
  transform: rotate(90deg);
  transition: transform 0.3s ease; /* Add a smooth transition effect */
}
.my-button {
    margin: 0px;
    background-color:#FFFFFF;
    border:1px solid #a3b2c7;
    font-size: 20px;
    height:50px;
    padding: 10px 20px;/* Adjust as needed for spacing */
}
.mother-box {
        border: 1px solid #ccc; /* Add a 1px solid gray border */
        padding: 20px; /* Add some padding for better visual appearance */
        display: flex; /* Add this to center the content */
        align-items: center; /* Align the content vertically */
    }
.apply-button {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
}

.history-button {
    border-top-right-radius: 10px;
    border-bottom-right-radius: 10px;
}
.apply-button {
    border-top-left-radius: 10px;
    border-bottom-left-radius: 10px;
    transition: border-color 0.3s, color 0.3s; /* Smooth transition effect */
}

.apply-button:hover {
    border-color: rgb(2, 17, 79); /* Change the border color to green on hover */
    color: rgb(2, 17, 79); /* Change the text color to green on hover */
}
.pending-button:hover {
    border-color: rgb(2, 17, 79); /* Change the border color to green on hover */
    color: rgb(2, 17, 79); /* Change the text color to green on hover */
}
.history-button:hover {
    border-color: rgb(2, 17, 79); /* Change the border color to green on hover */
    color: rgb(2, 17, 79); /* Change the text color to green on hover */
}
.apply-button:active {
    background-color: rgb(2, 17, 79); /* Change background color to green when clicked */
    color: #FFFFFF;
    border-color:rgb(2, 17, 79); /* Change text color to white when clicked */
}

.pending-button:active {
    background-color: rgb(2, 17, 79); /* Change background color to green when clicked */
    color: #FFFFFF;
    border-color:rgb(2, 17, 79); /* Change text color to white when clicked */
}
.history-button:active {
    background-color: rgb(2, 17, 79); /* Change background color to green when clicked */
    color: #FFFFFF;
    border-color:rgb(2, 17, 79); /* Change text color to white when clicked */
}
.calendar {
    max-width: 300px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
    background-color: #ffff;
    margin-right: 20px; /* Add spacing between calendar and content */
}

/* Styles for the calendar header */
.calendar-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: white;
    padding: 8px;
}

/* Styles for the navigation buttons */

#prevMonth,
#nextMonth {
    background: none;
    border: none;
    cursor: pointer;
    font-size: 14px; /* Reduce font size */
    padding: 2px 5px; /* Reduce padding */
}

#currentMonth {
    font-size: 18px;
}

.reporting{
        display:flex; 
        flex-direction:row; 
        justify-content: space-between;
        padding: 15px 12px 15px 12px;
        border-radius: 30px; 
        align-items:center;
        width: 220px; 
        height: 55px; 
    }
      .reporting:hover .details {
        display: block;
    }
    .reporting.active {
    background-color: #D9ECFF;
    border:1px solid #ccc; /* Light blue color */
    /* Add any other styles you want for the active state */
}
.reporting:hover{

border: 1px solid #ccc;
}
    .ellipsis {
        font-size:0.875rem;
        margin-top:15px;
         font-weight:500;
         white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 100px; /* Adjust the value based on your container width */
        display: inline-block;
    }

.calendar-weekdays {
    display: flex;
    justify-content: space-between;
    background-color: white;
    padding: 3px 0; /* Adjust the padding */
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
}
.approve-button {
    background-color:rgb(2, 17, 79);
        color: white; /* White text */
        padding: 10px 20px; /* Padding around the text */
        border: none; /* No border */
        cursor: pointer; /* Cursor style on hover */
        border-radius: 5px; /* Rounded corners */
}

.reject-button {
    background-color:rgb(2, 17, 79);
        color: white; /* White text */
        padding: 10px 20px; /* Padding around the text */
        border: none; /* No border */
        cursor: pointer; /* Cursor style on hover */
        border-radius: 5px; /* Rounded corners */
}
.weekday {
    text-align: center;
    flex: 1;
    padding: 5px;
    font-weight: bold;
    margin: 0; /* Reset margin */
}
 /* Style for the Submit button */
 #submitButton {
        background-color:rgb(2, 17, 79);
        color: white; /* White text */
        padding: 10px 20px; /* Padding around the text */
        border: none; /* No border */
        cursor: pointer; /* Cursor style on hover */
        border-radius: 5px; /* Rounded corners */
    }

    /* Style for the Cancel button */
    #cancelButton {
        /* Red background */
        color:rgb(2, 17, 79);/* White text */
        padding: 10px 20px; /* Padding around the text */
        border: none; /* No border */
        cursor: pointer; /* Cursor style on hover */
        border-radius: 5px; /* Rounded corners */
        margin-left: 10px; /* Add some spacing between buttons */
    }

    /* Hover effect for buttons */
    #submitButton:hover, #cancelButton:hover {
        opacity: 0.8; /* Reduced opacity on hover */
    }
/* Styles for the calendar dates */
.calendar-dates {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    gap: 6px;
    padding: 5px;
    justify-items: center; /* Center the date elements both horizontally and vertically */
}
.calendar-box
{
    
  margin-left:-650px;
  margin-top:80px;
  background-color:white;
  border-radius:10px;
}

.nav1-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
    font-size: 14px;
}
.hidden-pending-box
{
    
    background-color: #fff;
    margin-top:60px;
    
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin-left:30px;
   
    
    
    height:320px;
    width:900px;
    
}

.nav1-text {
    margin: 0 10px;
    font-weight: bold;
    font-size: 16px;
}
#infoBox {
    display: none;
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    position: absolute;
    margin-top:230px;
    left: 56%;
    height: 320px;
    width: 400px;
    transform: translate(-50%, -50%);
    z-index: 999; /* Ensure it appears on top of other content */
}

.calendar-date-info {
    margin: 10px 0;
    font-size: 18px;
    font-weight: 400;
}

#selectedDate {
    font-size: 24px;
    font-weight: bold;
    color: #007bff;
}

input[type="text"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-top: 10px;
}


.hidden-box {
   
    
    padding: 20px;
    
    border-radius: 5px;
    margin-top:160px;
   
    text-align: center;
    position: absolute;
    
    left: 67%;

    
    transform: translate(-50%, -50%);
    
}

.history:hover
{
    border:1px solid rgb(2, 17, 79);
    
}
.container1 {
       width: 370px;  
       height: 200px; 
       margin-right: 300px; 
      background-color: #FFFFFF;
      margin-top: 15px;
      margin-top: 420px; 
      border-radius: 10px;
       float: right; 
      border: 1px solid #ccc;
    }


.hidden-pending-box
{
    
    background-color: #fff;
    margin-top:10px;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    margin-left:30px;
    position: absolute;
    top: 50%;
    left:40%;
    height:320px;
    width:900px;
    transform: translate(-50%, -50%);
}
.hidden-pending-box1
{
    display: none;
    
    margin-top:300px;
    padding: 20px;
    border-radius: 5px;
    
    text-align: center;
    margin-left:30px;
    position: absolute;
    top: 50%;
    left: 50%;
    height:320px;
    width:900px;
    transform: translate(-50%, -50%);
}
.calendar-date:hover::before {
    content: '+';
    font-size: 20px;
    display: block;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}


    /* Styles for the selected option container */
    .custom-dropdown {
      width: 560px;
      position: relative;
    }

    /* Styles for the selected option container */
    .selected-option {
      display: flex;
      align-items: center;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
      background-color: white;
    }

    /* Styles for the manager image */
    .manager-image {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      margin-right: 10px;
    }

    /* Styles for the dropdown options */
    .dropdown-options {
      display: none;
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      background: #fff;
      border: 1px solid #ccc;
      border-top: none;
      border-radius: 0 0 5px 5px;
      z-index: 1;
    }
    .horizontal-line {
            position: absolute;
            width: 942px;
            margin-left:-10px;  /* Make the line stretch across the container */
            height:1px;/* Adjust the line thickness as needed */
            background-color: #7f8fa4; /* Line color */
            margin-top:10px; /* Position the line vertically at the middle */
            transform: translateY(-50%); /* Adjust for vertical alignment */
        }
        .horizontal-line1
        {
            position: absolute;
            width: 500px;
            margin-left:-10px;  /* Make the line stretch across the container */
            height:1px;/* Adjust the line thickness as needed */
            background-color: #7f8fa4; /* Line color */
            margin-top:10px; /* Position the line vertically at the middle */
            transform: translateY(-50%);
        }
        .horizontal-line2
        {
            position: absolute;
            width: 859px;
            margin-left:-10px;  /* Make the line stretch across the container */
            height:1px;/* Adjust the line thickness as needed */
            background-color: #7f8fa4; /* Line color */
            margin-top:10px; /* Position the line vertically at the middle */
            transform: translateY(-50%);
        }
    /* Show the options when the selected option is clicked */
    .custom-dropdown.open .dropdown-options {
      display: block;
    }
    .history
    {
        border-radius:5px;
    }
    .history:hover{
        border:1px solid rgb(2, 17, 79);
    }
    .container-body1:hover
    {
        border:1px solid rgb(2, 17, 79);
    }
.hidden-history-box
{
    display: none;
  
    margin-top:280px;
    padding: 20px;
    border-radius: 5px;
   
    text-align: center;
    margin-left:30px;
    position: absolute;
    top: 50%;
    left: 50%;
    height:320px;
    width:900px;
    transform: translate(-50%, -50%);
}


.my-button.active-button {
    background-color: rgb(2, 17, 79);
    color: #FFFFFF;
    border-color: rgb(2, 17, 79);
}
.calendar-date-info table {
    border-collapse: separate;
    border-spacing: 10px; /* Adjust the spacing as needed */
}
table {
            border-collapse: collapse;
            width: 75%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            border: none; /* Remove border for table headers */
        }
        
       
/* Style for table header cells (th) */
.calendar-date-info th {
    padding: 8px; /* Adjust the padding as needed */
    background-color: #f2f2f2;
    margin-left:-30px;
}
/* Restyle the active button on hover */
.my-button.active-button:hover {
    background-color: rgb(2, 17, 79);
    color: #FFFFFF;
    border-color: rgb(2, 17, 79);
}
.calendar-footer {
    text-align: center;
    background: rgb(2, 17, 79);/* Blue background color */
    color: #fff; /* White text color */
    padding: 8px;
}
.arrow-button::after {
    content: "\25B6"; /* Unicode character for right-pointing triangle (arrow) */
    font-size: 18px;
    
  }
  .custom-view-details-button {
    background-color: transparent;
    /* Add other styles as needed */
}
#closeButton {
    position: absolute;
    top: 10px;
    right: 10px;
    background-color: transparent;
    border: none;
    font-size: 24px;
    cursor: pointer;
}

.current-date {
    background-color: #007bff;
    color: #fff;
    border-radius: 50%; /* Make it circular */
    padding: 3px 3px; /* Adjust padding to center the text vertically */
    text-align: center;
    width: 30px; /* Add a fixed width to ensure a circular shape */
    height: 30px; /* Add a fixed height to ensure a circular shape */
    line-height: 30px; /* Center the text vertically */
    font-size: 14px; /* Adjust font size as needed */
}
/* Calendar Styles */
/* Apply gap between table header cells */
thead th {
    padding-left:-40px; /* Adjust the horizontal padding as needed */
}

/* Apply gap between "To" and "Reason" */
thead th:nth-child(2) {
    padding-left: 40px; /* Adjust the right padding for the second header cell */
}

.withdraw-button {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px; /* Adjust the border radius as needed */
            background-color: rgb(2, 17, 79); /* Orange background color */
            color: #fff; /* White text color */
            text-align: center;
            border: none; /* Remove button border */
            cursor: pointer; 
            margin-left:-40px;/* Add a pointer cursor on hover */
        }
        .hidden-history-box1
        {
            width: 350px;
            height: 70px;
            background-color: #ffff;
            text-align: center;
            padding: 10px;
            margin-right:4px;
            margin-top:80px;

        }
</style>   
   
@if (session('success'))
    <div class="alert alert-success" id="success-message">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="button-container">
    <button class="my-button apply-button" wire:click="applyButton">Apply</button>
    <button class="my-button pending-button"wire:click="pendingButton">Pending</button>
    <button class="my-button history-button"wire:click="historyButton">History</button>
  
    @if($this->defaultApply==0)
    <div class="calendar-box">
  
  <div class="calendar-header">
    <button id="prevMonth">&lt;&nbsp;Prev</button>
    <h2 id="currentMonth"style="margin-top:5px;"></h2>
    <button id="nextMonth">Next&nbsp;&gt;</button>
  </div>

<!-- Calendar Weekdays -->
<div class="calendar-weekdays">
    <div class="weekday">Sun</div>
    <div class="weekday">Mon</div>
    <div class="weekday">Tue</div>
    <div class="weekday">Wed</div>
    <div class="weekday">Thu</div>
    <div class="weekday">Fri</div>
    <div class="weekday">Sat</div>
</div>

<!-- Calendar Dates -->
  <div class="calendar-dates">
        @foreach($daysInMonth as $day)
        <div 
            class="calendar-date {{ $day['isCurrentDate'] ? 'current-date' : '' }} {{ in_array($day['date']->toDateString(), $selectedDates) ? 'selected-date' : '' }}" 
            wire:click="selectDate('{{ $day['date']->toDateString() }}')"
        >
            {{ $day['day'] }}
        </div>
        @endforeach
  </div>
  <div class="calendar-footer" id="calendarFooter">

      No exception days to regularize
  </div>
</div>
     @endif

@if($this->isApply==1 && $this->isPending==0 &&  $this->isHistory==0 )
  
    @if($this->defaultApply==1)
    <div class="calendar-box">
  
  <div class="calendar-header">
    <button id="prevMonth">&lt;&nbsp;Prev</button>
    <h2 id="currentMonth"style="margin-top:5px;"></h2>
    <button id="nextMonth">Next&nbsp;&gt;</button>
  </div>

<!-- Calendar Weekdays -->
<div class="calendar-weekdays">
    <div class="weekday">Sun</div>
    <div class="weekday">Mon</div>
    <div class="weekday">Tue</div>
    <div class="weekday">Wed</div>
    <div class="weekday">Thu</div>
    <div class="weekday">Fri</div>
    <div class="weekday">Sat</div>
</div>

<!-- Calendar Dates -->
  <div class="calendar-dates">
        @foreach($daysInMonth as $day)
        <div 
            class="calendar-date {{ $day['isCurrentDate'] ? 'current-date' : '' }} {{ in_array($day['date']->toDateString(), $selectedDates) ? 'selected-date' : '' }}" 
            wire:click="selectDate('{{ $day['date']->toDateString() }}')"
        >
            {{ $day['day'] }}
        </div>
        @endforeach
  </div>
  <div class="calendar-footer" id="calendarFooter">

      No exception days to regularize
  </div>
</div>
    @endif   
     
@elseif($this->isApply==0 && $this->isPending==1 &&  $this->isHistory==0 )
 
    <div class="pending" style="background-color:#fff; margin-bottom:20px; border:1px solid #7f8fa4;">
           <img src="https://gt-linckia.s3.amazonaws.com/static-ess-v6.3.0-prod-144/review-list-empty.svg">
           <p style="color: #a3b2c7;font-weight:400;font-size: 20px;margin-top:20px;">Hey, you have no regularization records to view.</p>
    </div> 
@elseif($this->isApply==0 && $this->isPending==0 &&  $this->isHistory==1 )
     <div class="history" style="background-color:#fff; margin-bottom:20px; border:1px solid #7f8fa4;">
           <img src="https://gt-linckia.s3.amazonaws.com/static-ess-v6.3.0-prod-144/review-list-empty.svg"style="margin-top:80px;">
           <p style="color: #a3b2c7;font-weight:400;font-size: 20px;margin-top:20px;">Hey, you have no regularization records to view.Thank you for your time</p>
       </div>
@endif    

     
    
    

    
    
    <div class="hidden-history-box" id="hiddenhistoryBox">
      @if($data5>0)
      @foreach($data81 as $key => $d1)
      @if($d1->status =='rejected')
    
    
   
    @elseif($d1->status =='approved')
    
 
   
    @elseif($d1->status=='pending')
    
    <div class="history" style="background-color:#fff; margin-bottom:20px; border:1px solid #7f8fa4;">
        <div style="display:flex;flex-direction:row;">        
            <p class="title"   style="font-weight: bold;color: #7f8fa4;margin-left:20px;margin-top:20px;">Withdrawn&nbsp;By:</p>
            <p class="title"  style="font-weight: bold; margin-left:180px;color: #7f8fa4;margin-top:20px;">No.&nbsp;of&nbsp;days:</p>
            <p class="title" style="font-weight: bold; margin-left:280px;margin-top:30px;font-size:15px;text-transform:uppercase;color: #7f8fa4;">withdrawn</p>
        </div>  
        <div style="display:flex;flex-direction:row;margin-top:-15px;"> 
            <p class="highlight" style="color: rgb(2, 17, 79); margin-top:-3px;   margin-left:20px;">Me</p>
            <p class="days"  style="font-size:20px; color: rgb(2, 17, 79);margin-top:-3px; margin-left:270px;">1</p>
        </div>
    </div>
    <div class="arrow-button toggle-button" style="float:right; margin-top:-89px; margin-right:20px;" data-target-container="myContainerBody{{$key+1}}"></div> 
    <div class="container-body1" style="width: 860px; border: 1px solid #7f8fa4; height: 150px; background-color: #fff; margin-bottom:20px; text-align: center; padding: 10px; display:none; margin-right:4px;margin-top:-20px;" id="myContainerBody{{$key+1}}">
      <div style="display:flex;flex-direction:row;">   
        <p class="title" style="font-weight: bold;color: #7f8fa4;">Dates Applied:</p>
        <p class="highlight" style="color:rgb(2, 17, 79);margin-left:30px;">{{\Carbon\Carbon::parse($d1->regularisation_date)->format('j M Y')}}</p>
      </div>  
        <div class="horizontal-line2"></div>
        <div style="margin-top:30px; margin-left:-720px;"> 
            <p class="title" style="font-weight: bold;color: #7f8fa4;">Withdrawn On:</p>
            <p class="highlight" style="color: rgb(2, 17, 79);margin-left:-30px;margin-top:-15px;">{{\Carbon\Carbon::parse($d1->withdrawn_date)->format('j M Y')}}</p>
        </div> 
        <div style="margin-top:-60px; margin-left:720px;"> 
            <a href="{{ route('regularisation-history', ['id' => $d1->id]) }}" class="button view-details-button">View&nbsp;Details</a>
        </div>   
    </div>
   
    @endif
@endforeach
      @else
       <div class="history" style="background-color:#fff; margin-bottom:20px; border:1px solid #7f8fa4;">
           <img src="https://gt-linckia.s3.amazonaws.com/static-ess-v6.3.0-prod-144/review-list-empty.svg"style="margin-top:80px;">
           <p style="color: #a3b2c7;font-weight:400;font-size: 20px;margin-top:20px;">Hey, you have no regularization records to view.Thank you for your time</p>
       </div>
       @endif
    </div>
    
    <div wire:ignore.self class="modal fade" id="withdrawModal" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Withdraw Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body pt-4 pb-4">
                    <h6>Are you sure want to withdraw this application?</h6>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-primary" data-dismiss="modal" aria-label="Close">Cancel</button>
                    <button class="btn btn-sm btn-danger" wire:click="withdraw()">Yes! Withdraw</button>
                </div>
            </div>
        </div>

</div>

<script>
   document.getElementById("applyButton").addEventListener("click", function () {
    hideAllHiddenBoxes();
    hideAllCalendars(); 
    // document.getElementById("hiddenBox").style.display = "block";
    document.getElementById("hiddenBox").style.display = "block";
    document.getElementById("hiddenBox1").style.display = "block";
    setActiveButton(this);
    document.getElementById("hiddenBox1").style.display = "block";
});
document.getElementById("pendingButton").addEventListener("click", function () {
    hideAllHiddenBoxes();
    document.getElementById("hiddenpendingBox").style.display = "block";
    setActiveButton(this);
});
document.getElementById("historyButton").addEventListener("click", function () {
    hideAllHiddenBoxes();
    document.getElementById("hiddenhistoryBox").style.display = "block";
    document.getElementById("hiddenhistoryBox1").style.display = "block";
    setActiveButton(this);
});
//function hideAllCalendars() {
    // Hide all calendars
  //  const calendars = document.querySelectorAll(".calendar-box");
    //calendars.forEach((cal) => {
      //  cal.style.display = "none";
    //});
//}
function hideAllHiddenBoxes() {
    // Hide all hidden boxes
    document.getElementById("hiddenBox1").style.display = "none";
    document.getElementById("hiddenBox").style.display = "none";
    document.getElementById("hiddenpendingBox").style.display = "none";
    document.getElementById("hiddenhistoryBox").style.display = "none";
}
function setActiveButton(button) {
    // Remove active class from all buttons
    const buttons = document.querySelectorAll(".my-button");
    buttons.forEach((btn) => {
        btn.classList.remove("active-button");
    });

    // Add active class to the clicked button
    button.classList.add("active-button");
}
</script> 

<script>
    let currentDate = new Date(); // Initialize currentDate
    
    function generateCalendar(year, month) {
        const calendarDates = document.getElementById("calendarDates");
        calendarDates.innerHTML = "";

        // Create a new Date object for the specified year and month
        currentDate = new Date(year, month, 1); // Update currentDate here

        // Get the current month and year
        const currentMonth = currentDate.getMonth();
        const currentYear = currentDate.getFullYear();

        // Get the first day of the current month
        const firstDay = new Date(currentYear, currentMonth, 1);
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        const startingDay = firstDay.getDay(); // 0 (Sunday) to 6 (Saturday)

        // Update the calendar header with the current month and year
        document.getElementById("currentMonth").textContent = new Date(currentYear, currentMonth).toLocaleString('default', { month: 'long', year: 'numeric' });

        for (let i = 0; i < startingDay; i++) {
            const emptyDate = document.createElement("div");
            emptyDate.classList.add("calendar-date");
            calendarDates.appendChild(emptyDate);
        }

        for (let day = 1; day <= daysInMonth; day++) {
            const dateElement = document.createElement("div");
            dateElement.textContent = day;
            dateElement.classList.add("calendar-date");

            // Highlight the current date
            if (day === new Date().getDate() && currentYear === new Date().getFullYear() && currentMonth === new Date().getMonth()) {
                dateElement.classList.add("current-date");
                
            }
            if (day === new Date().getDate() && currentYear === new Date().getFullYear() && currentMonth === new Date().getMonth()) {
            dateElement.style.backgroundColor = "rgb(2, 17, 79)";
        }

            calendarDates.appendChild(dateElement);
        }
        
    }

    // Event listener for the previous month button
    document.getElementById("prevMonth").addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    });

    // Event listener for the next month button
    document.getElementById("nextMonth").addEventListener("click", () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    });

    // Initialize the calendar with the current month
    generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
    // JavaScript to handle click event on calendar dates
const calendarDates = document.querySelectorAll(".calendar-date");
const reasonInput = document.getElementById("reasonInput");
const saveReasonButton = document.getElementById("saveReasonButton");

// Add a click event listener to each date element
calendarDates.forEach((dateElement, day) => {
    dateElement.addEventListener("click", () => {
        // Display the reason input box and save button
        reasonInput.style.display = "block";
        saveReasonButton.style.display = "block";

        // Listen for the save button click
        saveReasonButton.addEventListener("click", () => {
            const reason = reasonInput.value;

            // You can now use the 'reason' value as needed, for example, save it to your database or display it on the page.
            console.log("Reason entered: " + reason);

            // Hide the reason input box and save button
            reasonInput.style.display = "none";
            saveReasonButton.style.display = "none";

            // Clear the reason input
            reasonInput.value = "";
        });
    });
    // JavaScript to handle click event on calendar dates
const calendarDates = document.querySelectorAll(".calendar-date");
const infoBox = document.getElementById("infoBox");
const selectedDate = document.getElementById("selectedDate");
const reasonInput = document.getElementById("reasonInput");
const saveReasonButton = document.getElementById("saveReasonButton");

// Add a click event listener to each date element
calendarDates.forEach((dateElement) => {
    dateElement.addEventListener("click", () => {
        // Display the info box
        infoBox.style.display = "block";
        const date = dateElement.textContent;
        selectedDate.textContent = date;
    });
});

// Event listener for the Save button
saveReasonButton.addEventListener("click", () => {
    const reason = reasonInput.value;
    // You can now use the 'reason' value as needed, for example, save it to your database or display it.
    console.log("Reason entered: " + reason);
    // Hide the info box
    infoBox.style.display = "none";
    // Clear the reason input
    reasonInput.value = "";
});

});

    const hiddenBox = document.getElementById("hiddenBox");

    calendarDates.forEach((dateElement) => {
        dateElement.addEventListener("click", () => {
            // Hide the hidden box when a date is clicked
            hiddenBox.style.display = "none";

            // Display any other content or perform other actions as needed
            // ...
        });
    });
</script>





<script>
    const dropdown = document.querySelector('.custom-dropdown');
    const selectedOption = dropdown.querySelector('.selected-option');
    const dropdownOptions = dropdown.querySelector('.dropdown-options');

    dropdown.addEventListener('click', function () {
      dropdown.classList.toggle('open');
    });

    const managerInfos = dropdownOptions.querySelectorAll('.manager-info');

    managerInfos.forEach((managerInfo) => {
      managerInfo.addEventListener('click', function () {
        const managerText = this.querySelector('span').textContent;
        selectedOption.innerHTML = managerText;
        dropdown.classList.remove('open');
      });
    });
  </script>
  
<script>
const currentDateElement1 = document.getElementById("currentDate1");

const currentDayElement1 = document.getElementById("currentDay1");

const motherBox = document.getElementById("motherbox");

const days= ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

// Function to update the date and day in the mother-box container
function updateDateAndDay(date, day) {
    // currentDateElement1.textContent = date;
    
    // currentDayElement1.textContent = day;
    const livewireEvent = new CustomEvent('livewire:update', {
            detail: { date, day }
        });
        document.dispatchEvent(livewireEvent);
    motherBox.style.display = "flex"; 
    // Show the mother-box container
    
}

// Add event listeners to the calendar dates
const calendarDates1 = document.querySelectorAll(".calendar-date");
const count=0;
const today = new Date();

const todayDate = today.getDate();

calendarDates1.forEach(dateElement => {
    const date = parseInt(dateElement.textContent, 10);
    if (date < todayDate) {
    dateElement.addEventListener("click", () => {
        // Get the date and day abbreviation from the clicked date
        
        const clickedDate = dateElement.textContent;
        
        const selectedDate = new Date();
        selectedDate.setDate(parseInt(clickedDate, 10));
        
        const clickedDay = days[selectedDate.getDay()];
      
        // Update the date and day in the mother-box container
        updateDateAndDay( clickedDate + clickedDay);
        
    });
   }
   else {
        // Disable past dates
        dateElement.classList.add("disabled");
        
        
    }
});
</script>  
<script>
const closeButton = document.getElementById("closeButton");

closeButton.addEventListener("click", () => {
    // Hide the "mother-box" container when the close button is clicked
    motherbox.style.display = "none";
});
const cancelButton = document.getElementById("cancelButton");

cancelButton.addEventListener("click", () => {
    // Hide the "mother-box" container when the close button is clicked
    motherbox.style.display = "none";
});
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
  document.getElementById("toggleButton1").addEventListener("click", function() {
  var containerBody1= document.getElementById("myContainerBody1");
  if (containerBody1.style.display === "none" || containerBody1.style.display === "") {
    containerBody1.style.display = "block";
  } else {
    containerBody1.style.display = "none";
  }
});
</script> 
<script>
  const toggleButton = document.getElementById("toggleButton");
  const containerBody = document.getElementById("myContainerBody");

  toggleButton.addEventListener("click", function () {
    toggleButton.classList.toggle("rotate-arrow");
  });
</script>
<script>   
function toggleSearchContainer() {
        const searchContainer = document.querySelector('.searchContainer');
        const reportingContainer = document.querySelector('.reporting');
        // Toggle the display of the search container
        searchContainer.style.display = searchContainer.style.display === 'none' ? 'block' : 'none';
        if (searchContainer.style.display === 'block') {
        reportingContainer.classList.add('active');
    } else {
        reportingContainer.classList.remove('active');
    }
    }
    function updateApplyingTo(reportTo, managerId) {
        // Update the values in the reporting container
        document.getElementById('reportToText').innerText = reportTo;
        document.getElementById('managerIdText').innerText = '#' + managerId;

        // Optionally, you can also hide the search container here
        toggleSearchContainer();
    }
</script>    
<script>
  const toggleButton1 = document.getElementById("toggleButton1");
  const containerBody1 = document.getElementById("myContainerBody1");

  toggleButton1.addEventListener("click", function () {
    toggleButton1.classList.toggle("rotate-arrow");
  });
</script>
<script>
    $(document).ready(function() {
        $('#success-message .close').on('click', function() {
            $('#success-message').fadeOut(500);
        });
    });
</script>
<script>
    document.querySelectorAll('.toggle-button').forEach(function(button) {
        button.addEventListener('click', function() {
            var targetContainerId = button.getAttribute('data-target-container');
            var container = document.getElementById(targetContainerId);
            container.style.display = (container.style.display === 'none' || container.style.display === '') ? 'block' : 'none';
        });
    });
    $(document).ready(function () {
    $('.toggle-button').on('click', function () {
        var targetContainerId = $(this).data('target-container');
        $('#' + targetContainerId).slideToggle(); // Use slideToggle for a smoother transition
    });

});


</script>
   
</div>
