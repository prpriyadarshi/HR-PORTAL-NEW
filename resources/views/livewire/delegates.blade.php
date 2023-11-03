<div>
<style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            background-color: #f5f5f5;
        }
 
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
 
        .header {
            background-color: #3771C8;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
 
        .header img {
            height: 40px;
            width: auto;
            vertical-align: middle;
        }
 
        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }
 
        .nav a {
            text-decoration: none;
            color: #333;
            margin-left: 20px;
        }
 
        .nav b {
            font-weight: bold;
            margin-left: 20px;
        }
 
        .content {
            margin-top: 20px;
            display: flex;
        }
 
        .workflow-select {
            flex: 1;
            margin-right: 20px;
           
        }
 
        .delegate-form {
            flex: 2;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
 
        .form-header {
            text-align: center;
            font-size: 14px;
            color: orange;
            margin-bottom: 20px;
        }
 
        .form-group {
            margin-bottom: 20px;
        }
 
        .form-label {
            display: block;
            font-weight: bold;
        }
 
        .form-control {
            width: 100%;
            padding: 10px;
           font-size:12px;
            border-radius: 5px;
        }
 
        .form-actions {
            display: flex;
            justify-content: center;
        }
 
        .form-actions button {
            padding: 10px 20px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
 
        #delegate-form-container {
            display: none;
        }
        .body {
            font-family: 'Montserrat';
            font-size:14px;
        }
        .btn {
            font-family: 'Montserrat';
        }
    </style>
 
<body>
@foreach($employees as $employee)
<div class="container">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap">
 
    <div class="header" style="height: 50px; font-family: 'Montserrat';margin-top:2px">
       <div class="row">
        <div class="col" style="margin-top:-5px" >
         
        @livewire('company-logo')
        </div>
        <div class="col" style="margin-left:-100px">
        <a href="/" style=" color:white; font-family: 'Montserrat';text-decoration:none;margin-left:-50px">Home</a>
        </div>
        <div class="col" style="margin-top:3px;">
        <p style="font-family: 'Montserrat';margin-left:-200px">My Info</p>
        </div>
        <div class="col" style="margin-top:32px">
        <p style="margin-top: -35px;  font-family: 'Montserrat';">{{$employee->first_name}} {{$employee->last_name}}</p>
    </div>
       </div>
    </div>
   
    <h1 class="form-header" style="margin-right: 500px; font-family: 'Montserrat';margin-top:20px;font-size:17px">Workflow Delegates</h1>
    <div class="nav">
        <b style="margin-left: 100px; width: 150px; font-family: 'Montserrat';font-size:17px;">Workflow:</b>
        <div class="workflow-select">
            <!-- Your workflow selection dropdown goes here -->
            <select class="form-control" style="width: 230px; font-family: 'Montserrat';">
                <option value="none">Select Workflow</option>
                <option value="none">Delegate All Workflow</option>
                <option value="none">Attendance Regularization</option>
                <option value="none">Confirmation</option>
                <option value="none">Resignations</option>
                <option value="none">Leave</option>
                <option value="none">Leave Cancel</option>
                <option value="none">Leave Comp Off</option>
                <option value="none">Restricted Holiday Leave</option>
                <option value="none">Help Desk</option>
                <!-- Add your workflow options here -->
            </select>
        </div>
        <button id="show-delegate-form-button" style="margin-right: 20px; width: 170px; height: 40px; min-width: 130px; margin-right: 10px;border-radius:5px;background:#E8E8E8">Add Delegates</button>
    </div>
    <div class="content">
        <div style="height: 500px; width: 100%; border: 1px solid #D9D9D9; border-radius: 10px; font-family: 'Montserrat';">
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr>
                        <th style="color: #284570; font-size: 12px; text-align: left; font-family: Montserrat;">User</th>
                        <th style="color: #284570; font-size: 12px; text-align: left; font-family: Montserrat;">Workflow</th>
                        <th style="color: #284570; font-size: 12px; text-align: left; font-family: Montserrat;">From Date</th>
                        <th style="color: #284570; font-size: 12px; text-align: left; font-family: Montserrat;">To Date</th>
                        <th style="color: #284570; font-size: 12px; text-align: left; font-family: Montserrat;">Delegate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($retrievedData as $data)
                    <tr>
                        <td style="border: 1px solid #8D939D; padding: 5px;font-size:12px; font-family: Montserrat">{{$employee->first_name}} {{$employee->last_name}}({{$employee->emp_id}}) </td>
                        <td style="border: 1px solid #8D939D; padding: 5px;font-size:12px; font-family: Montserrat">{{ $data->workflow }}</td>
                        <td style="border: 1px solid #8D939D; padding: 5px;font-size:12px; font-family: Montserrat">{{ date('d M Y', strtotime($data->from_date)) }}</td>
                        <td style="border: 1px solid #8D939D; padding: 5px;font-size:12px; font-family: Montserrat">{{ date('d M Y', strtotime($data->to_date)) }}</td>
                        <td style="border: 1px solid #8D939D; padding: 5px;font-size:12px; font-family: Montserrat">{{ $data->delegate }}</td>
                    </tr>
                   
                    @endforeach
                   
                </tbody>
            </table>
         
    </div>
 
     
            <!-- Delegate form -->
            <div id="delegate-form-container" class="delegate-form" style="margin-left: 20px; font-family: 'Montserrat', sans-serif;font-size:14px">
                <form wire:submit.prevent="submitForm">
                    <div class="form-group">
                        <h2 style="font-size:17px">Add/ Edit Work Flow Delegates</h2>
                        <div class="column" style="display:flex;font-size:12px">
                            <h3 class="form-label" style="margin-top:30px;font-size:18px">User:</h3>
                            <p style="margin-left:-50px;font-size:16px;font-weight:400"> {{$employee->first_name}} {{$employee->last_name}}  ({{$employee->emp_id}})</p>
                        </div>
                    </div>
                    <div class="form-group" style="color: black;margin-top:-20px">
                        <label class="form-label" style="color: black;font-size:14px">WorkFlow</label>
                        <select class="form-control" style="width: 300px; color: black" wire:model="workflow;font-size:12px">
                            <option value="Delegate All Workflow">Delegate All Workflow</option>
                            <option value="Attendance Regularization">Attendance Regularization</option>
                            <option value="Confirmation">Confirmation</option>
                            <option value="Resignations">Resignations</option>
                            <option value="Leave">Leave</option>
                            <option value="Leave Cancel">Leave Cancel</option>
                            <option value="Leave Comp Off">Leave Comp Off</option>
                            <option value="Restricted Holiday Leave">Restricted Holiday Leave</option>
                            <option value="Help Desk">Help Desk</option>
                            <!-- Add your workflow options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-size:14px">From Date</label>
                        <input type="date" name="fromDate" class="form-control" style="width: 280px" wire:model="fromDate">
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-size:14px">To Date</label>
                        <input type="date" name="toDate" class="form-control" style="width: 280px" wire:model="toDate">
                    </div>
                    <div class="form-group">
                        <label class="form-label" style="font-size:14px">Delegate</label>
                        <select class="form-control" style="width: 300px" wire:model="delegate">
                            <option value="Pranita Priyadarshi(XSS-0477)">Pranita Priyadarshi(XSS-0477)</option>
                            <option value="Chandrapal Singh(XSS-0468)">Chandrapal Singh(XSS-0468)</option>
                            <option value="Puran Kanwar(T0008)">Puran Kanwar(T0008)</option>
                            <option value="RANJITH KUMAR C(XSS-0386)">RANJITH KUMAR C(XSS-0386)</option>
                            <option value="Sai Keerthan Enterprise(T00013)">Sai Keerthan Enterprise(T00013)</option>
                            <option value="Hemant Parkhe(XSS-0509)">Hemant Parkhe(XSS-0509)</option>
                            <option value="Indu Priya Yarramaneni(XSS-0438)">Indu Priya Yarramaneni(XSS-0438)</option>
                            <option value="Chirag Sahu(XSS-0506)">Chirag Sahu(XSS-0506)</option>
                            <option value="Manish Vodnala(XSS-0522)">Manish Vodnala(XSS-0522)</option>
                            <!-- Add your delegate options here -->
                        </select>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-primary submit" type="submit" style="color:white;background-color:blue">Submit</button>
                        <button id="cancel-button" class="btn reset" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </body>
    @endforeach
    <script>
        document.getElementById('show-delegate-form-button').addEventListener('click', function () {
            var delegateFormContainer = document.getElementById('delegate-form-container');
            if (delegateFormContainer.style.display === 'none' || delegateFormContainer.style.display === '') {
                delegateFormContainer.style.display = 'block';
            } else {
                delegateFormContainer.style.display = 'none';
            }
        });
 
        document.getElementById('cancel-button').addEventListener('click', function () {
            var delegateFormContainer = document.getElementById('delegate-form-container');
            delegateFormContainer.style.display = 'none';
        });
    </script>
</div>