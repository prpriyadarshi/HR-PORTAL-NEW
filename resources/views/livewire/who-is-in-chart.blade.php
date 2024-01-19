<div style="width:98%;">
 
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
  $isEarlyBy10AM= $swipeTime->format('H:i') < '10:00' ; @endphp @if($isLateBy10AM) @php $notyetin++; $lateArrival++; @endphp @endif @if($isEarlyBy10AM) @php $onTime++; @endphp @endif @endforeach @php $CalculatePresentOnTime=($EarlySwipesCount/$TotalEmployees)*100; $CalculatePresentButLate=($LateSwipesCount/$TotalEmployees)*100; @endphp
<div class="date-form-who-is-in">
    <input type="date" wire:model="from_date" wire:change="updateDate"class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
</div>
 
<div class="shift-selector-container-who-is-in">
  <input type="text" class="shift-selector-who-is-in" placeholder="Select Shifts">
  <div class="arrow-who-is-in"></div>
</div>
<div class="cont" style="display:flex; justify-content: space-between; margin-top:50px;">
  <div class="search-container-who-is-in" style="margin-left: auto;">
   
       
        <div class="form-group-who-is-in">
            <div class="search-input-who-is-in"style="margin-top:50px;">
                <input wire:model="search" type="text" placeholder="Search Employee" class="search-text">
                <div class="search-icon-who-is-in" wire:click="searchFilters">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
            </div>
        </div>
 
 
       
         
         
         
        </div>
     
     
       
   
 
 
 
 
 
  <div class="filter-container1-who-is-in" style="margin-top:-40px">
    <div class="filter-group-who-is-in" style="margin-top:0px">
      <i class="fa-icon fas fa-filter"></i> <!-- Font Awesome filter icon -->
      <gt-filter-group-who-is-in>
        <!-- Add more content as needed -->
      </gt-filter-group-who-is-in>
    </div>
  </div>
</div>
<div class="container-box-for-employee-information-who-is-in">
  <!-- Your content goes here -->
  <div style="margin-top:5px;display:flex;align-items:center; text-align:center;justify-content:center;padding:0;">
    <p style="text-align:center;font-size:14px;">Employees Information for  <span style="font-weight: 500; ">{{\Carbon\Carbon::parse($currentDate)->format('jS F Y')}}</span></p>
  </div>
 
  <div class="content" style="display:flex; flex-direction:row;justify-content:space-between;padding:0; border-top:1px solid #ccc;">
    <div class="col-md-3 field-for-employee-who-is-in">
      <div class="percentage-who-is-in"style="font-weight: 500;font-size:0.895rem; ">{{number_format($CalculateAbsentees,2)}}%</div>
      <div class="employee-count-who-is-in">{{$employeesCount1}}&nbsp;Employee(s)&nbsp;are&nbsp;Absent</div>
     
    </div>
    <div class="col-md-3 field-for-employee-who-is-in">
      <div class="percentage-who-is-in"style="font-weight: 500;font-size:0.895rem; ">{{number_format($CalculatePresentButLate,2)}}%</div>
      <div class="employee-count-who-is-in">{{$LateSwipesCount}}&nbsp;Employee(s)&nbsp;are&nbsp;Late&nbsp;In</div>
 
    </div>
    <div class="col-md-3 field-for-employee-who-is-in">
      <div class="percentage-who-is-in"style="font-weight: 500;font-size:0.895rem;">{{number_format($CalculatePresentOnTime,2)}}%</div>
      <div class="employee-count-who-is-in">{{$EarlySwipesCount}}&nbsp;Employee(s)&nbsp;are&nbsp;On&nbsp;Time</div>
    </div>
    <div class="col-md-3 field-for-employee-who-is-in">
      <div class="percentage-who-is-in"style="font-weight: 500;font-size:0.895rem;">{{number_format($CalculateApprovedLeaves,2)}}%</div>
      <div class="employee-count-who-is-in">{{$ApprovedLeaveRequestsCount}}&nbsp;Employee(s)&nbsp;are&nbsp;On&nbsp;Leave</div>
    </div>
  </div>
</div>
 
<!-- containers for attendace -->
<div class="content" style=" display:flex; gap:10px; margin-top:10px;  width:95%;">
  <div class="col-md-6">
    <div class="container3-who-is-in">
      <div class="heading-who-is-in">
        <h3>Absent&nbsp;({{ str_pad($employeesCount1, 2, '0', STR_PAD_LEFT) }}) </h3>
       
             <i class="fas fa-download"wire:click="downloadExcelForAbsent"style="cursor:pointer;"></i>
         
      </div>
      <div>
        <table class="who-is-in-table"style="margin-top:-10px">
          <thead>
            <tr>
              <th>Employee</th>
              <th>Expected&nbsp;In&nbsp;Time</th>
 
            </tr>
          </thead>
         
         
          <tbody>
          @if($notFound)
            <tr>
              <td colspan="2" style="text-align: center; font-weight: normal; font-size: 12px; color:#778899;">
                No data to display
              </td>
            </tr>
          @else
          @foreach($Employees1 as $e1)
            <tr style="border-bottom: 1px solid #ddd;">
              <td style="font-size:13px;font-weight:500;">{{ucfirst($e1->first_name)}}&nbsp;{{ucfirst($e1->last_name)}}<br /><span class="text-muted"style="font-weight:normal;font-size:10px;">#{{$e1->emp_id}}</span></td>
              <td style="font-weight:normal;font-size:13px;">10:00:00</td>
 
            </tr>
 
            <!-- Add more rows with dashes as needed -->
          @endforeach
          @endif
          </tbody>
 
         
          <!-- Add table rows (tbody) and data here if needed -->
        </table>
 
      </div>
 
    </div>
  </div>
  <div class="col-md-6">
    <div class="container4-who-is-in">
      <div class="heading-who-is-in">
        <h3>Late&nbsp;Arrivals&nbsp;({{ str_pad($lateArrival, 2, '0', STR_PAD_LEFT) }})</h3>
       
             <i class="fas fa-download"wire:click="downloadExcelForLateArrivals"style="cursor:pointer;"></i>
           
      </div>
      <div>
        <table class="who-is-in-table" style="margin-top:-10px">
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
<div class="content">
  <!-- third col -->
  <div class="col-md-6">
    <div class="container5-who-is-in">
      <div class="heading-who-is-in">
        <h3>On&nbsp;Time&nbsp;({{ str_pad($onTime, 2, '0', STR_PAD_LEFT) }})</h3>
           
                  <i class="fas fa-download"wire:click="downloadExcelForEarlyArrivals"style="cursor:pointer;"></i>
               
      </div>
 
      <div>
        <table class="who-is-in-table"style="margin-top:-10px">
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
    <div class="container6-who-is-in">
      <div class="heading-who-is-in">
        <h3>On&nbsp;Leave&nbsp;({{ str_pad($ApprovedLeaveRequestsCount, 2, '0', STR_PAD_LEFT) }})</h3>
             
                    <i class="fas fa-download"wire:click="downloadExcelForLeave" style="cursor: pointer;"></i>
                 
      </div>
 
 
      <div>
        <table class="who-is-in-table" style="margin-top:-10px">
          <thead>
            <tr>
              <th>Employee</th>
              <th>Number&nbsp;of&nbsp;days</th>
 
            </tr>
          </thead>
          <tbody>
          @if($notFound3)
            <tr>
              <td colspan="2" style="text-align: center; font-weight: normal; font-size: 12px; color:#778899;">
                No data to display
              </td>
            </tr>
 
          @else
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
            @endforeach
            @else
            <tr>
              <td colspan="2" style="text-align: center; font-weight: normal; font-size: 12px; color:#778899;">
                No data to display
              </td>
            </tr>
            @endif
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