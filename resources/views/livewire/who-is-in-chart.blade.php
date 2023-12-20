<div>
<style>
    .container-box {
        width: 81%;
        display: flex;
        flex-direction: column;
        border: 1px solid #ccc;
        margin-top: 30px;
        margin-left: 10px;
        align-items: center;
        justify-content: center;
       
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
        .heading{
          display: flex;
          justify-content: space-between;
          padding: 8px 15px;
        }
        .heading i{
          color:#778899;
        }
        .heading h3{
          color:#778899;
          font-size: 14px;
          font-weight: 500;
        }
        .container3 {
               background-color:#ffffff;
               margin-top:10px;
               border-radius:10px;
               border: 1px solid #ccc; /* Border style for the container */
         }
         .container5 { /* Adjust the width as needed */
          background-color:#FFFFFF;
               margin-top:10px;
               border-radius:10px;
               border: 1px solid #ccc; /* Border style for the container */
         }
         .container6 {
          background-color:#FFFFFF;
               margin-top:10px;
               border-radius:10px;
               border: 1px solid #ccc; /* Border style for the container */
         }
         .container4
         {
          background-color:#FFFFFF;
               margin-top:10px;
               border-radius:10px;
               border: 1px solid #ccc; /* Border style for the container */
         }
         
         table {
          border-collapse: collapse;
          width: 100%;
          max-height: 200px; /* Set the max height you prefer */
          overflow-y: auto;
          overflow-x: hidden;
          display: block;

  }

  /* CSS for the table header (thead) */
  thead {
    background-color: rgb(2, 17, 79);
    color: white;
    width:100%;
  }

  /* CSS for the table header cells (th) */
  th {
    padding: 5px 20px;
    text-align: left;
    width:100%;
  font-weight:normal;
  font-size:12px;
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
    .date-form{
      display:flex;
    align-items:end;
      justify-content:end;
      width:200px;
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
        $isEarlyBy10AM= $swipeTime->format('H:i') < '10:00';
    @endphp
    @if($isLateBy10AM)
       
        @php
             $notyetin++;
             $lateArrival++;
        @endphp
    @endif
    @if($isEarlyBy10AM)
      
        @php
            $onTime++;
            
        @endphp
    @endif
   
@endforeach
@php
    $CalculatePresentOnTime=($onTime/$TotalEmployees)*100;
    $CalculatePresentButLate=($lateArrival/$TotalEmployees)*100;
@endphp    
<div class="date-form">
    <input 
        type="date" 
        wire:model="from_date" 
        class="form-control" 
        id="fromDate" 
        name="fromDate" 
        style="color: #778899;"
    >
</div>


<div class="container-box">
    <!-- Your content goes here -->
   <div style="margin-top:5px;display:flex;align-items:center; text-align:center;justify-content:center;padding:0;">
        <p style="text-align:center;">Employees Information for {{\Carbon\Carbon::parse($currentDate)->format('jS F Y')}}</p>
   </div>

    <div class="content" style="display:flex; flex-direction:row;justify-content:space-between;padding:0; border-top:1px solid #ccc;">
      <div class="col-md-3 field">
        <div class="percentage">{{number_format($CalculateAbsentees,2)}}%</div>
        <div class="employee-count">{{$employeesCount1}}&nbsp;Employee(s)&nbsp;are&nbsp;Absent</div>
      </div>
    <div class="col-md-3 field">
        <div class="percentage">{{number_format($CalculatePresentButLate,2)}}%</div>
        <div class="employee-count">{{$lateArrival}}&nbsp;Employee(s)&nbsp;are&nbsp;Late&nbsp;In</div>
      
    </div>
    <div class="col-md-3 field">
        <div class="percentage">{{number_format($CalculatePresentOnTime,2)}}%</div>
        <div class="employee-count">{{$onTime}}&nbsp;Employee(s)&nbsp;are&nbsp;On&nbsp;Time</div>
    </div>
    <div class="col-md-3 field">
        <div class="percentage">{{number_format($CalculateApprovedLeaves,2)}}%</div>
        <div class="employee-count">{{$ApprovedLeaveRequestsCount}}&nbsp;Employee(s)&nbsp;are&nbsp;On&nbsp;Leave</div>
    </div>
    </div>
</div>
  
<!-- containers for attendace -->
<div class="content" style=" display:flex; gap:10px; margin-top:10px;  width:95%;">
   <div class="col-md-6">
     <div class="container3">
          <div class="heading">
            <h3 >Absent&nbsp;({{ str_pad($employeesCount1, 2, '0', STR_PAD_LEFT) }}) </h3> 
            <i class="fas fa-download"></i>
          </div>
      <div>
  <table style="margin-top:-10px">
  <thead>
    <tr>
      <th >Employee</th>
      <th >Expected&nbsp;In&nbsp;Time</th>
     
    </tr>
  </thead>
  @foreach($Employees1 as $e1)
    
         <tbody >
              <tr style="border-bottom: 1px solid #ddd;">
                    <td style="font-weight:normal;font-size:12px;">{{ucfirst($e1->first_name)}}&nbsp;{{ucfirst($e1->last_name)}}<br/>#{{$e1->emp_id}}</td>
                    <td style="font-weight:normal;font-size:12px;">10:00</td>
    
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
        <th >Employee</th>
        <th >Late&nbsp;By</th>
     
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
                  <td style="font-weight:normal;font-size:12px;">{{ucfirst($s1->first_name)}}&nbsp;{{ucfirst($s1->last_name)}}<br/>#{{$s1->emp_id}}</td>
                  <td style="font-weight:normal;font-size:12px;">{{$lateArrivalTime}}<br/>{{$s1->swipe_time}}</td>
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
  
  <div >
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
            $isEarlyBy10AM = $swipeTime->format('H:i') < '10:00';
      @endphp
  @if($isEarlyBy10AM)  
   
       <tr style="border-bottom: 1px solid #ddd;">
         <td style="font-weight:normal;font-size:12px;">{{$s1->first_name}}&nbsp;{{$s1->last_name}}<br/>#{{$s1->emp_id}}</td>
         <td style="font-weight:normal;font-size:12px;">{{$earlyArrivalTime}}<br/>{{$s1->swipe_time}}</td>
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
      <th >Employee</th>
      <th>Number&nbsp;of&nbsp;days</th>
     
    </tr>
  </thead>
  <tbody>
  @if($ApprovedLeaveRequestsCount > 0)
  @foreach($ApprovedLeaveRequests as $alr)

  
    <tr style="border-bottom: 1px solid #ddd;">
      <td style="font-weight:normal;font-size:12px;">{{$alr->first_name}}&nbsp;{{$alr->last_name}}<br/>#{{$alr->emp_id}}</td>
      <td style="font-weight:normal;font-size:12px;">{{$alr->number_of_days}} Day(s)<br/>
         <div style="background-color: green; border: 1px solid green; color: white; padding: 2px; text-align: center;">
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
     document.addEventListener('livewire:load', function () {
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