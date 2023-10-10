<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workflow Delegates</title>
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
            font-size: 24px;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="header" style="height:50px">
            <img src="https://www.acutesoft.com/wp-content/uploads/2016/03/XSILICA.jpg" alt="Logo" style="margin-right:700px;width:200px;height:50px">
            <p href="/Home" style="margin-top:-30px;margin-right:350px">Home</p>
            <p style="margin-top:-35px;margin-right:160px">My Info</p>
            <p style="margin-top:-35px;margin-left:660px">A.Archana</p>
            <p style="margin-top:-35px;margin-left:830px">Logout</p>
        </div>
        <h1 class="form-header" style="margin-right:500px;">Workflow Delegates</h1>
        <div class="nav">
            <b style="margin-left:150px;width:150px" >Workflow:</b>
            <div class="workflow-select">
                <!-- Your workflow selection dropdown goes here -->
                <select class="form-control" style="width:230px">
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
            <button id="show-delegate-form-button" style="margin-right:20px;width:170px;height:40px;min-width: 170px;margin-right:370px">Add Delegates</button>


        </div>
        <div class="content" style="">
            <!-- Left-side content goes here -->
            <div style="height: 500px; width: 500px; border: 1px solid #D9D9D9;border-radius:10px ">
            <div class="header" style="height:20px;">
            <p style="color:white;font-size:12px;margin-top:6px;margin-right:350px">Workflow Delegates</p>
    </div>
    <div class="row" style="width:100%;height:30px;background:#ACC7F0;display:flex">
    <p style="color:#284570;font-size:12px;margin-top:6px;margin-left:30px">user</p>
    <div style="width: 1px; height: 30px; background-color: #8D939D; margin-left: 5px;"></div>
    <p style="color:#284570;font-size:12px;margin-top:6px;margin-left:10px">Workflow </p>
    <div style="width: 1px; height: 30px; background-color: #8D939D; margin-left: 5px;"></div>
    <p style="color::#284570;font-size:12px;margin-top:6px;margin-left:10px">Workflow Delegates</p>
    <div style="width: 1px; height: 30px; background-color: #8D939D; margin-left: 5px;"></div>
    
    <p style="color::#284570;font-size:12px;margin-top:6px;margin-left:10px">From Date</p>
    <div style="width: 1px; height: 30px; background-color: #8D939D; margin-left: 5px;"></div>
    <p style="color::#284570;font-size:12px;margin-top:6px;margin-left:10px">To Date</p>
    <div style="width: 1px; height: 30px; background-color: #8D939D; margin-left: 5px;"></div>
    <p style="color::#284570;font-size:12px;margin-top:6px;margin-left:10px"> Delegates</p>

    </div>
    <div class="row" style="height:400px">

    </div>
    <div class="row" style="width:100%;height:30px;background:#ACC7F0;display:flex">
    <p style="color:#284570;font-size:12px;margin-top:6px;margin-left:100px;width:40px;">Page</p>
    <div class="row" style="height:20px;width:20px;background:white;border:1px solid grey;border-radius:5px;margin-top:4px;margin-left:2px;display:flex">
    <p style="margin-left:5px;margin-top:2px;width:20px;">1</p>
   
    
    </div>
    <p style="margin-left:15px;margin-top:4px;">of 0</p>
    <div style="width: 1px; height: 30px; background-color: #8D939D; margin-left: 30px;"></div>
 
   
    <p style="color::#284570;font-size:12px;margin-top:6px;margin-left:100px">No records to view</p>
    
    
   

    </div>
            
        </div>
            <!-- Delegate form -->
            <div id="delegate-form-container" class="delegate-form" style="margin-left:20px">
                <form class="work-flow-delegate-form" action="/v2/employee/addemployeworkflowdelegates" method="POST" novalidate="novalidate">
                    <div class="form-group">
                    <h2>Add/ Edit Work Flow Delegates</h2>
                    <div class="column" style="display:flex">
                        <h4 class="form-label" style="margin-top:15px">User:</h4>
                        <p style="margin-left:10px;font-size:16px;">A Archana (XSS-0476)</p>
                     </div>
                    </div>
                    <div class="form-group"  style="color:black">
                        <label class="form-label" style="color:black" >WorkFlow</label>
                        <select class="form-control" style="width:300px;color:black">
                        <option value="none">Delegate All Workflow</option>
                            <option value="none">Attendance Regularization </option>
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
                    <div class="form-group" >
                        <label class="form-label" >From Date</label>
                        <input type="date" name="fromDate" class="form-control" style="width:280px">
                    </div>
                    <div class="form-group">
                        <label class="form-label">To Date</label>
                        <input type="date" name="toDate" class="form-control" style="width:280px">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Delegate</label>
                        <select class="form-control" style="width:300px">
                        <option value="none">Pranita Priyadarshi(XSS-0477)</option>
                            <option value="none">Chandrapal Singh(XSS-0468) </option>
                    <option value="none">Puran Kanwar(T0008)</option>
                    <option value="none">RANJITH KUMAR C(XSS-0386)</option>
                    <option value="none">Sai Keerthan Enterprise(T00013)</option>
                    <option value="none">Hemant Parkhe(XSS-0509)</option>
                    <option value="none">Indu Priya Yarramaneni(XSS-0438)</option>
                    <option value="none">Chirag Sahu(XSS-0506)</option>
                    <option value="none">Manish Vodnala(XSS-0522)</option>
                            <!-- Add your delegate options here -->
                        </select>
                    </div>
                    <div class="form-actions">
                        <button class="btn btn-primary submit" type="submit">Submit</button>
                        <button id="cancel-button" class="btn reset" type="reset">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
</body>
</html>
