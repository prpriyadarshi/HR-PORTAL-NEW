<div>
<div>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
 
<!-- Moment.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
 
<!-- DateRangePicker CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.css" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker@3.1.0/daterangepicker.min.js"></script>
   
</head>
 
<body>
<div>
    <div style="display:flex;flex-direction:row;">
    <div class="dropdown-container1-employee-swipes">
          <label for="dateType"style="color: #666;font-size:13px;">Select Dates<span style="color: red;">*</span>:</label><br/>
          <input type="text" name="daterange" wire:model="date" value="01/04/2024 - 01/04/2024" style="font-size: 13px;" wire:change="dateRange($event.target.value)" />
         
     </div>
     <div class="dropdown-container1-employee-swipes">
          <label for="dateType"style="color: #666;font-size:13px;">Date Type<span style="color: red;">*</span>:</label><br/>
          <button class="dropdown-btn1"style="font-size: 13px;">Swipe Date</button>
          <div class="dropdown-content1-employee-swipes">
           
          </div>
     </div>
       
     <div class="dropdown-container1-employee-swipes">
             <label for="dateType"style="color: #666;font-size:13px;">Employee Search</label><br/>
         
             <div class="search-input-employee-swipes"style="margin-top:-1px;">
             <div class="search-container"style="position: relative;">
                       <i class="fa fa-search search-icon-employee-swipes" aria-hidden="true"style="cursor:pointer;"wire:click="testMethod"></i>
                       <input wire:model="search" type="text" placeholder="Search Employee" class="search-text">
                     
              </div>
                   
             </div>
           
    </div>
    <div class="dropdown-container1-employee-swipes">
           
         
        <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter">
             <i class="fa-solid fa-download"wire:click="downloadFileforSwipes"></i>
        </button>
           
    </div>  
    <div class="dropdown-container1-employee-swipes">
           
         
            <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter">
                 <i class="fa-icon fas fa-filter"style="color:#666"></i>
            </button>
               
        </div>  
     
</div>
 
    <div class="container-employee-swipes">
       
        <div class="container4-employee-swipes">
            <div style="overflow-x:auto;">
                <table class="employee-swipes-table">
                    <thead>
                        <tr>
                            <th>Employee&nbsp;Name</th>
                            <th>Swipe&nbsp;Time&nbsp;&&nbsp;Date</th>
                            <th>Shift</th>
                            <th>In/Out</th>
                            <th>Received&nbsp;On</th>
                            <th>Door/Address</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if($notFound)
                         <td colspan="12" style="text-align: center;font-size:12px">Record not found</td>
                    @else
    <!-- Display the filtered collection or any other content -->
                        @foreach($SignedInEmployees as $swipe)
        <!-- Display swipe details -->
                       <tr>
                              <td style=" white-space: nowrap;font-size:12px;">
                                        <input type="checkbox" name="employeeCheckbox[]"style="margin-left:-10px;height:10px;" value="{{ $swipe->emp_id }}">
 
                                                   {{ucfirst($swipe->first_name)}} {{ucfirst($swipe->last_name)}}<br />
                                               <span class="text-muted"style="font-size:10px;margin-left:6px;">#{{$swipe->emp_id}}</span>
                              </td>
                              <td style=" white-space: nowrap;">{{$swipe->swipe_time}}<br /> <span class="text-muted"style="font-size:10px;">{{ \Carbon\Carbon::parse($swipe->created_at)->format('d M, Y') }}</span></td>
                              <td style=" white-space: nowrap;">10:00 am to 07:00...</td>
                              <td style=" white-space: nowrap;">{{$swipe->in_or_out}}</td>
                              <td style=" white-space: nowrap;">{{$swipe->swipe_time}}<br /><span class="text-muted"style="font-size:10px;"> {{ \Carbon\Carbon::parse($swipe->created_at)->format('d M, Y') }}</span></td>
                              <td>-</td>
                              <td>-</td>
                        </tr>    
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-employee-swipes-right">
                <div class="green-section-employee-swipes"style="height: 180px;width: 150%; position: relative;  margin-left: -20px; padding-right: 20px;padding-bottom:60px;">
                   
                     <img src="https://cdn-icons-png.flaticon.com/512/2055/2055568.png" style="width: 22%; height: 25%;margin-top:30px;margin-left:10px;border-radius:50%;">
                     <h6 style="margin-top:10px;margin-left:20px;font-size:13px;color:#666;">Swipe-in Time</h6>
                     @if($SwipeTime)
                        <h1 style="margin-top:10px;margin-left:20px;font-size:15px;">{{$SwipeTime}}</h1>
                     @else
                        <h1 style="margin-top:10px;margin-left:20px;font-size:15px;">Not Swiped Yet</h1>
                     @endif
                </div>
                <h2 style="color: #333; margin-top: 10px; font-weight:500;font-size:15px;">Swipe Details</h2>
                <hr style="border-top: 1px solid #666;margin-top: -5px;">
                <p style="font-size: 14px; margin-top: 10px;color:#666;">Device Name</p>
                <p style="font-size: 13px; font-weight: 500;margin-top:-20px;">{{$this->status}}</p>
                <p style="font-size: 14px; margin-top: 10px;color:#666;">Access Card</p>
                <p style="font-size: 18px; font-weight: 500;margin-top:-20px;">-</p>
                <p style="font-size: 14px; margin-top: 10px;color:#666;">Door/Address</p>
             
                  <p style="font-size: 18px; font-weight: 500;margin-top:-20px;">-</p>
             
                <p style="font-size: 14px; margin-top: 10px;color:#666;">Remarks</p>
                <p style="font-size: 18px; font-weight: 500;margin-top:-20px;">-</p>
                <p style="font-size: 14px; margin-top: 10px;color:#666;">Device ID</p>
                <p style="font-size: 18px; font-weight: 500;margin-top:-20px;">-</p>
                <p style="font-size: 14px; margin-top: 10px;color:#666;">Location Details</p>
                <p style="font-size: 18px; font-weight: 500;margin-top:-20px;">-</p>
        </div>
    </div>
 
    </div>
    <script>
     jQuery(document).ready(function($) {
       
       $(function() {
           $('input[name="daterange"]').daterangepicker({
                                     opens: 'left'
                              }, function(start, end, label) {
                               
                          console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
            });
        });
 
    });
    </script>
 
</body>
 
</html>
 
</div>