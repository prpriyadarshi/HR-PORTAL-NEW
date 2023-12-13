<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leave Balance As On a Day</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.9/flatpickr.min.js"></script>

        <style>
            .container {
                max-width: 650px;
                margin: 0 auto;
                padding: 20px;
                background-color: white;
                border: 1px solid #ccc;
                border-radius: 5px;
                width: px;
            }

            h2 {
                font-size: 24px;
                margin-bottom: 20px;
            }

            .input-group {
                margin-bottom: 10px;
            }

            .form-check {
                display: flex;
                align-items: center;
            }

            .form-check-label {
                margin-left: 10px;
            }

            .btn {
                margin-top: 20px;
            }

            .form-group table {
                max-height: 200px;
                overflow-y: auto;
            }
        </style>
    </head>

    <body>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Leave balance on a day
        </button>

        <!-- Modal -->


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background:#c3e6fc;">
                    <div class="modal-header" style="background:#c3e6fc;">
                        <h5 class="modal-title" id="exampleModalLongTitle">Leave Balance As On a Day</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="border:1px solid #c3e6fc; ">
                        <!-- Place your content here -->
                        <div class="container" style="border:1px solid #c3e6fc;">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <label for="datepicker" style="color: #486d92; margin-right: 20px;">Date: </label>
                                        <input type="date" class="form-control" id="date" wire:model="date"><!-- Adjust the width as needed -->
                                    </div>
                                    <div class="form-check" style="display:flex; flex-direction:row; justify-content:space-between;">
                                        <div class="form-check">
                                            <div>
                                                <input type="checkbox" class="form-check-input" id="selectAllEmployees">
                                                <label class="form-check-label" for="selectAllEmployees" style="color: #486d92;">Select All Employees</label>

                                            </div>
                                        </div>

                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <!-- Your existing modal content here -->
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <button id="searchButton" style="background-color: green; border-radius: 5px; border: none; height: 35px; margin-right: 10px;">
                                                    <i style="color: white" class="fas fa-search"></i>
                                                </button>
                                                <input type="text" class="form-control" id="employeeSearch" aria-label="Search" aria-describedby="basic-addon1">
                                                <p style="font-size: 17px; margin-top: 10px; color: #486d92; margin-left: 10px;">
                                                    &lt;&lt; Click here to search an Employee
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <a href="#employeeTable" data-toggle="collapse" style="color: black;">
                                        Query & Add All Employees <i class="fas fa-chevron-down"></i>
                                    </a>
                                    <div id="employeeTable" class="collapse" style="max-height: 200px; overflow-y: auto;">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="color: #486d92;">Employee Name</th>
                                                    <th style="color: #486d92;">Employee Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($employeeDetails as $employee)
                                                <tr>
                                                    <td style="color: #486d92;">
                                                        <input type="checkbox" value="{{ $employee->emp_id }}">
                                                        {{ $employee->first_name }} {{ $employee->last_name }}
                                                    </td>
                                                    <td style="color: #486d92;">{{ $employee->emp_id }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous" id="previousPage">
                                                    <span aria-hidden="true">&laquo;</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#" id="page1" style="color:#486d92;">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#" id="page2" style="color: #486d92;">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next" id="nextPage">
                                                    <span aria-hidden="true">&raquo;</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="form-group">
                                </div>

                                <div class="row" style="margin-left: 8%;">
                                    <div class="col">
                                        <button style="width:100px;padding:5px;background-color:white;color:black;border-radius:5px;border:1px solid " type="button" id="optionsButton">
                                            Options
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button style="width:100px;padding:5px;background-color:white;color:black;border-radius:5px;border:1px solid  #486d92;" type="button" id="runButton">
                                            <a style="text-decoration: none;color:black" href="/leavebalancereport">Run</a>
                                        </button>
                                    </div>
                                    <div class="col">
                                        <button style="width:100px;padding:5px;background-color:white;color:black;border-radius:5px;border:1px solid  #486d92;" type="button" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>


                                <script>
                                    document.getElementById("selectAllEmployees").addEventListener("change", function() {
                                        const isChecked = this.checked;
                                        const employeeCheckboxes = document.querySelectorAll("#employeeTable tbody input[type='checkbox']");

                                        employeeCheckboxes.forEach(function(checkbox) {
                                            checkbox.checked = isChecked;
                                        });
                                    });

                                    // Function to handle individual employee checkbox selection
                                    function handleEmployeeCheckbox(checkbox) {
                                        // Your logic for handling the individual checkbox selection
                                        console.log("Selected Employee ID:", checkbox.value);
                                    }

                                    // Add event listeners to individual employee checkboxes
                                    const employeeCheckboxes = document.querySelectorAll("#employeeTable tbody input[type='checkbox']");
                                    employeeCheckboxes.forEach(function(checkbox) {
                                        checkbox.addEventListener("change", function() {
                                            handleEmployeeCheckbox(this);
                                        });
                                    });

                                    document.getElementById("searchButton").addEventListener("click", function() {
                                        const searchQuery = document.getElementById("employeeSearch").value.toLowerCase();
                                        const employeeRows = document.querySelectorAll("#employeeTable tbody tr");

                                        for (const row of employeeRows) {
                                            const employeeName = row.querySelector("td:first-child").textContent.toLowerCase();
                                            if (employeeName.includes(searchQuery)) {
                                                row.style.display = "table-row";
                                            } else {
                                                row.style.display = "none";
                                            }
                                        }
                                    });

                                    document.getElementById('runButton').addEventListener('click', function() {
                                        window.location.href = '/leavebalancereport';
                                    });

                                    document.getElementById('optionsButton').addEventListener('click', function() {
                                        // Your action or function to be executed when the button is clicked
                                        alert('Button clicked!'); // Replace this with your actual logic
                                    });

                                    // Initialize the Flatpickr datepicker
                                    flatpickr("#datepicker", {
                                        dateFormat: "Y-m-d",
                                    });

                                    let currentPage = 1; // Initial page

                                    document.getElementById("page1").addEventListener("click", function() {
                                        currentPage = 1;
                                        updatePageData();
                                    });

                                    document.getElementById("page2").addEventListener("click", function() {
                                        currentPage = 2;
                                        updatePageData();
                                    });

                                    document.getElementById("previousPage").addEventListener("click", function() {
                                        if (currentPage > 1) {
                                            currentPage--;
                                            updatePageData();
                                        }
                                    });

                                    document.getElementById("nextPage").addEventListener("click", function() {
                                        if (currentPage < 2) { // Assuming there are only 2 pages
                                            currentPage++;
                                            updatePageData();
                                        }
                                    });

                                    function updatePageData() {
                                        // This is where you should load and display data for the current page.
                                        const contentContainer = document.querySelector("#employeeTable tbody");
                                        const loadingData = "Loading...";

                                        // Display loading message while data is being fetched
                                        contentContainer.innerHTML = `<tr><td colspan="2">${loadingData}</td></tr>`;

                                        // Simulate fetching data from a server (replace this with your actual data fetching logic)
                                        setTimeout(() => {
                                            const page1Data = [{
                                                    name: "Archana",
                                                    number: "XSS-0476"
                                                },
                                                {
                                                    name: "ANAND BABU MALLELA",
                                                    number: "XSS-0371"
                                                },
                                            ];
                                            const page2Data = [{
                                                    name: "ANITHA SIADRI",
                                                    number: "XSS-0380"
                                                },
                                                {
                                                    name: "APPAJI ANGARA",
                                                    number: "XSS-0370"
                                                },
                                            ];

                                            const data = (currentPage === 1) ? page1Data : page2Data;

                                            // Display the fetched data
                                            contentContainer.innerHTML = data.map(item => `
            <tr>
                <td style="color: #486d92;;">
                    <input type="checkbox" value="${item.number}">${item.name}
                </td>
                <td style="color: #486d92;;">${item.number}</td>
            </tr>
        `).join("");
                                        }, 1000); // Simulate a delay of 1 second for data fetching
                                    }

                                    document.getElementById("exportOption").addEventListener("click", function() {
                                        // Implement your logic for the "Export" action here
                                        alert("Exporting data...");
                                        // Add code to perform the export action
                                    });

                                    document.getElementById("selectAllEmployees").addEventListener("change", function() {
                                        const employeeCheckboxes = document.querySelectorAll("#employeeTable tbody input[type='checkbox']");
                                        employeeCheckboxes.forEach(checkbox => {
                                            checkbox.checked = this.checked;
                                        });
                                    });
                                </script>
    </body>

    </html>


</div>