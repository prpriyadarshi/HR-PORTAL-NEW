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
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f4f4f4;
           
            overflow-x: hidden;
            margin: 0;
            padding: 0;
       
        }
 
        .container {
            display: flex;
            justify-content: space-between;
       
 
         
        }
 
       
        .container-right {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-top: 20px;
            margin-bottom: 40px;
           margin-left:20px;
           
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
        .container4
        {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
           
           
            margin-top: 20px;
            margin-bottom: 40px;
           
        }
 
        table {
            border-collapse: collapse;
            width: 80%;
        }
 
        thead {
            background-color: #02114f;
            color: #fff;
        }
 
        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
 
        th {
            font-weight: bold;
            font-size: 12px;
        }
 
        td {
            font-size: 12px;
        }
 
        .container-right {
            flex-basis: 40%;
            height: 600px;
            /* Increase height as needed */
            overflow-y: hidden;
            padding: 20px;
           
        }
       
        .green-section {
                   height: 40%;
                   width:100%;
                   background-color:    #ECFFDC;
                   position: relative;
                   margin-top: -20px;/* Green color for half of the section */
        }
        .dropdown-container1:hover .dropdown-content1 {
            display: block;
        }
  .dropdown-container1 {
            margin-left: 10px;
            position: relative;
        }
        .button2
        {
            margin-top:30px;
            border:1px solid #ddd;
            height:30px;
            background-color: #fff;
            color:#666;
        }
 
        .dropdown-btn1::after {
            content: "\25BE"; /* Unicode character for a down-pointing triangle */
            font-size: 12px; /* Adjust the size of the arrow */
            margin-left: 5px; /* Add some spacing between the text and arrow */
        }
       
   .dropdown-btn1 {
            padding: 5px 15px;
            background-color: #fff;
            color: black;
            border: 1px solid #ccc;
            border-radius:5px;
            width:180px;
            cursor: pointer;
            position: relative; /* Add relative positioning for the arrow */
        }
  .dropdown-content1 {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            max-height: 200px; /* Set the maximum height for scrollable content */
            overflow-y: scroll; /* Enable vertical scrolling if content exceeds max height */
        }
 
        .dropdown-content1 a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }
.dropdown-content1 a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .web-sign-in-box {
            position: absolute;
            top: 30px;
            left: 30px;
            background-color: white;
            padding: 10px;
            border-radius: 5px;
        }
 
        @media screen and (max-width: 768px) {
            .container {
                flex-direction: column;
            }
 
            .container-right {
                flex-basis: 100%;
                margin-top: 0;
            }
        }
    </style>
</head>
 
<body>
<div>
    <div style="display:flex;flex-direction:row;">
    <div class="dropdown-container1">
          <label for="dateType"style="color: #666;font-size:13px;">Select Dates<span style="color: red;">*</span>:</label><br/>
          <input type="text" name="daterange" wire:model="date" value="01/04/2024 - 01/04/2024" style="font-size: 13px;" wire:change="dateRange($event.target.value)" />
         
     </div>
     <div class="dropdown-container1">
          <label for="dateType"style="color: #666;font-size:13px;">Date Type<span style="color: red;">*</span>:</label><br/>
          <button class="dropdown-btn1"style="font-size: 13px;">Swipe Date</button>
          <div class="dropdown-content1">
           
          </div>
     </div>
       
     <div class="dropdown-container1">
             <label for="dateType"style="color: #666;font-size:13px;">Employee Search</label><br/>
         
             <div class="search-input"style="margin-top:-1px;">
                    <input wire:model="search" type="text" placeholder="Search Employee" class="search-text">
                    <button type="button" class="search-icon" wire:click="testMethod">
                                 <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
             </div>
           
    </div>
    <div class="dropdown-container1">
           
         
        <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter">
             <i class="fa-solid fa-download"></i>
        </button>
           
    </div>  
    <div class="dropdown-container1">
           
         
            <button type="button" class="button2" data-toggle="modal" data-target="#exampleModalCenter">
                 <i class="fa-icon fas fa-filter"style="color:#666"></i>
            </button>
               
        </div>  
     
</div>
 
    <div class="container">
       
        <div class="container4">
            <div style="overflow-x:auto;">
                <table>
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
                        @foreach($SignedInEmployees as $sie)
                        <tr>
                         
                               
                           
                            <td style=" white-space: nowrap;font-size:12px;">
                                <input type="checkbox" name="employeeCheckbox[]"style="margin-left:-10px;height:10px;" value="{{ $sie->emp_id }}">
 
                                 {{ucfirst($sie->first_name)}} {{ucfirst($sie->last_name)}}<br />
                                 <span class="text-muted"style="font-size:10px;margin-left:6px;">#{{$sie->emp_id}}</span>
                            </td>
                            <td style=" white-space: nowrap;">{{$sie->swipe_time}}<br /> <span class="text-muted"style="font-size:10px;">{{ \Carbon\Carbon::parse($sie->created_at)->format('d M, Y') }}</span></td>
                            <td style=" white-space: nowrap;">10:00 am to 07:00...</td>
                            <td style=" white-space: nowrap;">{{$sie->in_or_out}}</td>
                            <td style=" white-space: nowrap;">{{$sie->swipe_time}}<br /><span class="text-muted"style="font-size:10px;"> {{ \Carbon\Carbon::parse($sie->created_at)->format('d M, Y') }}</span></td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container-right">
                <div class="green-section"style="height: 180px;width: 150%; position: relative;  margin-left: -20px; padding-right: 20px;padding-bottom:60px;">
                   
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
                <p style="font-size: 18px; font-weight: 500;margin-top:-20px;">-</p>
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
   <script>
    document.addEventListener('livewire:load', function () {
        Livewire.hook('message.processed', (message, component) => {
            if (message.updateQueue.hasOwnProperty('date')) {
                @this.call('dateRange');
            }
        });
    });
</script>
</body>
 
</html>
</div>