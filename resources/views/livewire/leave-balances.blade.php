<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Container Layout</title>
  
    <!-- Include Open Sans font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Container row */
      

        /* Buttons and dropdown */
        .buttons-container {
            display: flex;
            align-items: center;
            justify-content: flex-end; /* Align buttons to the right */
            margin-top: 20px; /* Add some distance from the top */
            margin-right: 20px; /* Add some distance from the right */
        }

        .button2 {
            margin-right: 10px;
            padding:5px 5px ;
            width: 100px;
            text-align:center;
            border: none;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
        }

        .button1 {
            margin-right: 10px;
            padding: 5px 5px;
            width: 100px;
            border: 1px solid #007BFF;
            background-color: #fff;
            color: #007BFF;
            border-radius: 5px;
            text-align:center;
            font-weight: 500;
            font-size: 14px;
            cursor: pointer;
        }

        .buttons-container .dropdown {
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 5px;
            width: 100px; /* Set the width of the dropdown */
            border-radius: 5px; /* Add some rounded corners */
            font-size: 14px; /* Adjust font size */
        }

        /* Style for hover effect on options */
        .buttons-container .dropdown:hover {
            cursor: pointer;
            border: 1px solid #00BFFF;
            padding: 5px; /* Add space between options */
        }

        .dropdown option {
            padding: 5px 10px; /* Add space around the text in each option */
        }

        .view {
            text-decoration: none;
        }

        .view:hover {
            color: #007BFF;
        }

        /* Tube-like container */
        .tube-container {
            position: relative;
            width: 100%;
            height: 7px;
            margin-top: 42px;
            background:#fff;
            border:1px solid #ccc;
            border-radius:10px;
        }

        .tube {
            position: absolute;
            bottom: 0;
            left: 0;
            border-radius:7px;
            height: 100%;
            /* Green color for leaves */
            transition: width 0.3s ease-in-out, background-color 0.3s ease-in-out;
        }
    </style>
</head>
<body>
    <div class="buttons-container">
        <button class="button1" id="leave-apply-link" onclick="changePageTitle5('apply')"><a href="/leave-page" style="text-decoration:none;">Apply</a></button>
        <button class="button2">Download</button>
        <select class="dropdown">
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
        </select>
    </div>
    <div class="container" style="margin-top: 20px; width: 100%; margin-right: 60px;">
        <div class="row">
            <div class="col-md-3">
                <div style="border: 1px solid #bfcee3; padding: 10px; border-radius: 5px; text-align: center; height: 200px; background-color:#fff;">
                    <div style="display: flex; flex-direction: row; justify-content: space-between;">
                        <div class="field">
                            <span style="color: #778899; font-size: 14px; font-weight: 500;">Loss Of Pay</span>
                        </div>
                        <div>
                            <span style="color: #778899; font-size: 14px; font-weight: 500; text-transform: capitalize;">Granted:0</span>
                        </div>
                    </div>
                    <div class="center" style="text-align: center; margin-top: 50px; font-size: 16px;">
                        <h5 style="font-size: 22px; ">0 <br>
                            <span style="color: #778899; font-size: 12px; font-weight: 400; text-transform: capitalize;">balance</span>
                        </h5>
                    </div>
                    
                </div>
            </div>
            <div class="col-md-3">
                <div style="border: 1px solid #bfcee3; padding: 10px; border-radius: 5px; text-align: center; height: 200px;background-color:#fff;">
                    <div style="display: flex; flex-direction: row; justify-content: space-between;">
                        <div class="field">
                            <span style="color: #778899; font-size: 14px; font-weight: 500;">Maternity Leave
                            </div>
                            <div>
                                <span style="color: #778899; font-size: 14px; font-weight: 500; text-transform: capitalize;">Granted:90</span>
                            </div>
                        </div>
                        <div class="center" style="text-align: center; margin-top: 20px; font-size: 16px;">
                            <h5 style="font-size: 22px; ">90 <br>
                                <span style="color: #778899; font-size: 12px; font-weight: 400; text-transform: capitalize;">balance</span>
                            </h5>
                            <a href="#" class="view"><span>View Details</span></a>
                        </div>
                        <div class="tube-container">
                        <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">0 of 90 Consumed</p>
                            <div class="tube" style="width: 0%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div style="border: 1px solid #bfcee3; padding: 10px; border-radius: 5px; text-align: center;  height: 200px;background-color:#fff;">
                        <div style="display: flex; flex-direction: row; justify-content: space-between;">
                            <div class="field">
                                <span style="color: #778899; font-size: 14px; font-weight: 500;">Casual Leave Pr...
                                </div>
                                <div>
                                    <span style="color: #778899; font-size: 14px; font-weight: 500; text-transform: capitalize;">Granted:9</span>
                                </div>
                            </div>
                            <div class="center" style="text-align: center; margin-top: 20px; font-size: 16px;">
                                <h5 style="font-size: 22px; ">4.5<br>
                                    <span style="color: #778899; font-size: 12px; font-weight: 400; text-transform: capitalize;">balance</span>
                                </h5>
                                <a href="#" class="view"><span>View Details</span></a>
                            </div>
                        
                            <div class="tube-container">
                                <p style="color: #778899; font-size: 10px; text-align:start; margin-top:-15px;font-weight: 400;">4.5 of 9 Consumed</p>
                                <div class="tube" style="width: 30%; background-color: #1E90FF;"></div> <!-- Adjust the width and color based on your usage -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
    </html>

</div>