<div style="width:98%;">
  <style>
    body{
      overflow-y: hidden;
      overflow-x: hidden;
    }
    .container-box {
      width: 82%;
      display: flex;
      flex-direction: column;
      border: 1px solid #ccc;
      margin-top: 30px;
      margin-left: 10px;
      align-items: center;
      justify-content: center;
      background-color: #ffff;
      border: 1px solid #ccc;
      flex: 1;
    }
 
    .field {
 
      text-align: center;
      width: 100%;
      align-items: center;
      background-color: #ffffff;
      border-right: 1px solid #ccc;
      flex: 1;
    }
 
    .percentage {
      font-size: 18px;
 
    }
 
    .employee-count {
      font-size: 12px;
 
    }
 
    .heading {
      display: flex;
      justify-content: space-between;
      padding: 8px 15px;
    }
 
    .heading i {
      color: #778899;
    }
 
    .heading h3 {
      color: #778899;
      font-size: 14px;
      font-weight: 500;
    }
 
    .container3 {
      background-color: #ffffff;
      margin-top: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      /* Border style for the container */
    }
 
    .container5 {
      /* Adjust the width as needed */
      background-color: #FFFFFF;
      margin-top: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      /* Border style for the container */
    }
 
 
    .container6 {
      background-color: #FFFFFF;
      margin-top: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      /* Border style for the container */
    }
 
    .container4 {
      background-color: #FFFFFF;
      margin-top: 10px;
      border-radius: 10px;
      border: 1px solid #ccc;
      /* Border style for the container */
    }
 
    table {
      border-collapse: collapse;
      width: 100%;
      max-height: 200px;
      /* Set the max height you prefer */
      overflow-y: auto;
      overflow-x: hidden;
      display: block;
 
    }
 
    /* CSS for the table header (thead) */
    thead {
      background-color: rgb(2, 17, 79);
      color: white;
      width: 100%;
    }
    input::placeholder {
    font: 0.85rem/3 sans-serif;
     }
    /* CSS for the table header cells (th) */
    th {
      padding: 5px 20px;
      text-align: left;
      width: 100%;
      font-weight: normal;
      font-size: 12px;
    }
 
    td {
      /* Add borders to separate cells */
      padding: 5px 20px;
      text-align: left;
    }
 
    input[type="date"]::before {
      content: attr(placeholder);
      color: #778899;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      pointer-events: none;
      z-index: -1;
    }
 
    .date-form {
      display: flex;
      align-items: end;
      justify-content: end;
      width: 200px;
    }
   
    .shift-selector-container {
      position: relative;
      width: 200px;
     
      margin-top:30px;/* Adjust the width as needed */
    }
 
    .shift-selector {
      width: 100%;
      height:100px;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background-color: white;
      cursor: pointer;
      position: relative;
    }
 
    .arrow {
      position: absolute;
      top: 10%;
      right: 10px;
      transform: translateY(-50%) rotate(45deg);
      width: 10px;
      height: 10px;
      border: solid black;
      border-width: 0 2px 2px 0;
      display: inline-block;
      padding: 3px;
    }
    .search-container {
      display: flex;
      margin-top:-90px;
    }
 
    .form-group {
      margin-right: 10px;
      /* Add spacing between search input and other elements */
    }
 
    .search-input {
      border: none;
      position: relative;
    }
 
    .search-input input[type="text"] {
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 200px;
      /* Adjust width as needed */
    }
 
    .search-icon {
      position: absolute;
      top: 50%;
      right: 10px;
      color: #778899;
      transform: translateY(-50%);
      cursor: pointer;
    }
 
    .search-icon::before {
      /* Unicode character for a magnifying glass */
      font-size: 16px;
    }
 
    .filter-container1 {
      display: flex;
      background: #fff;
      align-items: center;
      height: 30px;
      width: 30px;
      padding: 5px;
      border: 1px solid #ccc;
    }
 
    .filter-group {
      display: flex;
      align-items: center;
    }
 
    /* Styles for the Font Awesome icon */
    .fa-icon {
      font-size: 14px;
      color: #778899;
      /* Add spacing between icon and text */
    }
 
    .search-results {
      position: fixed;
      background: white;
      margin-top:-13px;
      overflow-y: scroll;
      max-height: 200px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      width: 195px;
      /* Adjust the width as needed */
      z-index: 999;
 
    }
 
    .search-results ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
 
    .search-results li {
      padding: 5px;
      border-bottom: 1px solid #eee;
    }
  </style>
  @php
  $notyetin=0;
  $lateArrival=0;
  $onTime=0;
  $onLeave=0;
  @endphp
  @foreach($Swipes as $s1)
  @php
  $swipeTime = \Carbon\Carbon::parse($s1->swipe_time);
  $isLateBy10AM = $swipeTime->format('H:i') > '10:00';
  $isEarlyBy10AM= $swipeTime->format('H:i') < '10:00' ; @endphp @if($isLateBy10AM) @php $notyetin++; $lateArrival++; @endphp @endif @if($isEarlyBy10AM) @php $onTime++; @endphp @endif @endforeach @php $CalculatePresentOnTime=($onTime/$TotalEmployees)*100; $CalculatePresentButLate=($lateArrival/$TotalEmployees)*100; @endphp
<div class="date-form">
    <input type="date" wire:model="from_date" wire:change="updateDate"class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
</div>
 
<div class="shift-selector-container">
  <input type="text" class="shift-selector" placeholder="Select Shifts">
  <div class="arrow"></div>
</div>
<div class="cont" style="display:flex; justify-content: space-between; margin-top:50px;">
  <div class="search-container" style="margin-left: auto;">
   
       
        <div class="form-group">
            <div class="search-input"style="margin-top:50px;">
                <input wire:model="search" type="text" placeholder="Search Employee" class="search-text">
                <div class="search-icon" wire:click="searchFilters">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
        </div>
 
 
       
         
            <div class="search-results"style="margin-top:80px;"wire:click="clearSearch">
              <ul>
                 
                      @foreach($results as $result)
                         <li>{{ ucfirst($result->first_name) }} {{ ucfirst($result->last_name) }} (#{{ $result->emp_id }})</li>
                      @endforeach
                 
              </ul>
            </div>
         
        </div>
     
     
       
   
 
 
 
 
 
  <div class="filter-container1" style="margin-top:-40px">
    <div class="filter-group" style="margin-top:0px">
      <i class="fa-icon fas fa-filter"></i> <!-- Font Awesome filter icon -->
      <gt-filter-group>
        <!-- Add more content as needed -->
      </gt-filter-group>
    </div>
  </div>
</div>
<div class="container-box ">
  <!-- Your content goes here -->
  <div style="margin-top:5px;display:flex;align-items:center; text-align:center;justify-content:center;padding:0;">
    <p style="text-align:center;font-size:14px;">Employees Information for  <span style="font-weight: 500; ">{{\Carbon\Carbon::parse($currentDate)->format('jS F Y')}}</span></p>
  </div>
 
  <div class="content" style="display:flex; flex-direction:row;justify-content:space-between;padding:0; border-top:1px solid #ccc;">
    <div class="col-md-3 field">
      <div class="percentage"style="font-weight: 500;font-size:0.895rem; ">{{number_format($CalculateAbsentees,2)}}%</div>
      <div class="employee-count">{{$employeesCount1}}&nbsp;Employee(s)&nbsp;are&nbsp;Absent</div>
    </div>
    <div class="col-md-3 field">
      <div class="percentage"style="font-weight: 500;font-size:0.895rem; ">{{number_format($CalculatePresentButLate,2)}}%</div>
      <div class="employee-count">{{$lateArrival}}&nbsp;Employee(s)&nbsp;are&nbsp;Late&nbsp;In</div>
 
    </div>
    <div class="col-md-3 field">
      <div class="percentage"style="font-weight: 500;font-size:0.895rem;">{{number_format($CalculatePresentOnTime,2)}}%</div>
      <div class="employee-count">{{$onTime}}&nbsp;Employee(s)&nbsp;are&nbsp;On&nbsp;Time</div>
    </div>
    <div class="col-md-3 field">
      <div class="percentage"style="font-weight: 500;font-size:0.895rem;">{{number_format($CalculateApprovedLeaves,2)}}%</div>
      <div class="employee-count">{{$ApprovedLeaveRequestsCount}}&nbsp;Employee(s)&nbsp;are&nbsp;On&nbsp;Leave</div>
    </div>
  </div>
</div>
 
<!-- containers for attendace -->
<div class="content" style=" display:flex; gap:10px; margin-top:10px;  width:95%;">
  <div class="col-md-6">
    <div class="container3">
      <div class="heading">
        <h3>Absent&nbsp;({{ str_pad($employeesCount1, 2, '0', STR_PAD_LEFT) }}) </h3>
        <i class="fas fa-download"></i>
      </div>
      <div>
        <table style="margin-top:-10px">
          <thead>
            <tr>
              <th>Employee</th>
              <th>Expected&nbsp;In&nbsp;Time</th>
 
            </tr>
          </thead>
          @foreach($Employees1 as $e1)
 
          <tbody>
            <tr style="border-bottom: 1px solid #ddd;">
              <td style="font-size:13px;font-weight:500;">{{ucfirst($e1->first_name)}}&nbsp;{{ucfirst($e1->last_name)}}<br /><span class="text-muted"style="font-weight:normal;font-size:10px;">#{{$e1->emp_id}}</span></td>
              <td style="font-weight:normal;font-size:13px;">10:00:00</td>
 
            </tr>
 
            <!-- Add more rows with dashes as needed -->
          </tbody>
 
          @endforeach
          <!-- Add table rows (tbody) and data here if needed -->
        </table>
 
      </div>
 
    </div>
  </div>
  <div class="col-md-6">
    <div class="container4">
      <div class="heading">
        <h3>Late&nbsp;Arrivals&nbsp;({{ str_pad($lateArrival, 2, '0', STR_PAD_LEFT) }})</h3>
        <i class="fas fa-download"></i>
      </div>
      <div>
        <table style="margin-top:-10px">
          <thead>
            <tr>
              <th>Employee</th>
              <th>Late&nbsp;By</th>
 
            </tr>
          </thead>
          <tbody>
            @if($lateArrival > 0)
            @foreach($Swipes as $s1)
            @php
            $swipeTime = \Carbon\Carbon::parse($s1->swipe_time);
            $lateArrivalTime = $swipeTime->diff(\Carbon\Carbon::parse('10:00'))->format('%H:%I');
            $isLateBy10AM = $swipeTime->format('H:i') > '10:00';
            @endphp
 
            @if($isLateBy10AM)
 
            <tr style="border-bottom: 1px solid #ddd;">
              <td style="font-size:13px;font-weight:500;">{{ucfirst($s1->first_name)}}&nbsp;{{ucfirst($s1->last_name)}}<br /><span class="text-muted"style="font-weight:normal;font-size:10px;">#{{$s1->emp_id}}</span></td>
              <td style="font-weight:normal;font-size:13px;">{{$lateArrivalTime}}<br /><span class="text-muted"style="font-size:10px;font-weight:300;">{{$s1->swipe_time}}</span></td>
            </tr>
 
            @endif
 
            @endforeach
            @else
            <tr>
              <td colspan="2" style="text-align: center; font-weight: normal; font-size: 12px; color:#778899;">
                No data to display
              </td>
            </tr>
            @endif
          </tbody>
 
        </table>
 
      </div>
 
    </div>
  </div>
</div>
<div class="content" style=" display:flex; gap:10px; margin-top:10px;  width:95%;">
  <!-- third col -->
  <div class="col-md-6">
    <div class="container5">
      <div class="heading">
        <h3>On&nbsp;Time&nbsp;({{ str_pad($onTime, 2, '0', STR_PAD_LEFT) }})</h3>
        <i class="fas fa-download"></i>
      </div>
 
      <div>
        <table style="margin-top:-10px">
          <thead>
            <tr>
              <th>Employee</th>
              <th>Early&nbsp;By</th>
 
            </tr>
          </thead>
          <tbody>
            @if($onTime > 0)
            @foreach($Swipes as $s1)
            @php
            $swipeTime = \Carbon\Carbon::parse($s1->swipe_time);
            $earlyArrivalTime = $swipeTime->diff(\Carbon\Carbon::parse('10:00'))->format('%H:%I');
            $isEarlyBy10AM = $swipeTime->format('H:i') < '10:00' ; @endphp @if($isEarlyBy10AM) <tr style="border-bottom: 1px solid #ddd;">
              <td style="font-size:13px;font-weight:500;">{{$s1->first_name}}&nbsp;{{$s1->last_name}}<br /><span class="text-muted"style="font-weight:normal;font-size:10px;">#{{$s1->emp_id}}</span></td>
              <td style="font-weight:normal;font-size:13px;">{{$earlyArrivalTime}}<br /><span class="text-muted"style="font-size:10px;font-weight:300;">{{$s1->swipe_time}}</span></td>
              </tr>
 
              @endif
              @endforeach
              @else
              <tr>
                <td colspan="2" style="text-align: center; font-weight: normal; font-size: 12px; color:#778899;">
                  No data to display
                </td>
              </tr>
              @endif
          </tbody><!-- Add table rows (tbody) and data here if needed -->
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="container6">
      <div class="heading">
        <h3>On&nbsp;Leave&nbsp;({{ str_pad($ApprovedLeaveRequestsCount, 2, '0', STR_PAD_LEFT) }})</h3>
        <i class="fas fa-download"></i>
      </div>
 
 
      <div>
        <table style="margin-top:-10px">
          <thead>
            <tr>
              <th>Employee</th>
              <th>Number&nbsp;of&nbsp;days</th>
 
            </tr>
          </thead>
          <tbody>
            @if($ApprovedLeaveRequestsCount > 0)
            @foreach($ApprovedLeaveRequests as $alr)
 
 
            <tr style="border-bottom: 1px solid #ddd;">
              <td style="font-size:13px;font-weight:500;">{{$alr->first_name}}&nbsp;{{$alr->last_name}}<br /><span class="text-muted"style="font-weight:normal;font-size:10px;">#{{$alr->emp_id}}</span></td>
              <td style="font-weight:normal;font-size:13px;">{{$alr->number_of_days}} Day(s)<br />
                <div style="background-color: rgb(176, 255, 176); border: 1px solid green; color: green;border-radius:15px; padding: 2px; text-align: center;">
                  Approved
                </div>
              </td>
 
            </tr>
 
            <!-- Add more rows with dashes as needed -->
 
            @endforeach
            @else
            <tr>
              <td colspan="2" style="text-align: center; font-weight: normal; font-size: 12px; color:#778899;">
                No data to display
              </td>
            </tr>
            @endif
 
          </tbody>
          <!-- Add table rows (tbody) and data here if needed -->
        </table>
      </div>
      <script>
        document.addEventListener('livewire:load', function() {
          Livewire.on('updatePlaceholder', value => {
            const input = document.getElementById('fromDate');
            if (value) {
              input.setAttribute('placeholder', value);
            } else {
              input.setAttribute('placeholder', 'Select Date Range');
            }
          });
        });
      </script>
    </div>
  </div>
</div>
</div>