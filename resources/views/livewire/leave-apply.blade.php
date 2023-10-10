
<style>
        /* Your custom styles here */
        .file-label:hover {
            color: #1E90FF;
        }
        .file-label {
            color: #778899;
        }

        .custom-dropdown {
            position: relative;
            display: inline-block;
            width: 200px;
        }

        .custom-dropdown-label {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        .custom-dropdown-label-text {
            flex-grow: 1;
            color: #333;
            font-size: 14px;
            font-weight: bold;
        }

        .custom-dropdown-arrow {
            margin-left: 10px;
            transition: transform 0.3s;
        }

        .custom-dropdown.open .custom-dropdown-arrow {
            transform: rotate(180deg);
        }

        .custom-dropdown-search {
            position: absolute;
            top: 45%;
            left: 20;
            background-color: #fff;
            border: 1px solid #ccc;
            border-top: none;
            list-style: none;
            padding: 0;
            max-height: 200px;
            overflow-y: auto;
            width: 100%;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: none;
        }
        .custom-dropdown .custom-dropdown-search-input {
            width: 100%;
            padding: 5px;
            border: none;
            border-bottom: 1px solid #ccc; /* Add a bottom border to make it look like an input field */
        }
        .custom-dropdown.open .custom-dropdown-search {
            display: block;
        }

        .custom-dropdown-search-input {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .added-email {
        border: 2px solid #778899; /* Background color of the elliptical container */
        color: #778899; /* Text color */
        border-radius: 50%; /* Make it circular */
        width: 2rem; /* Adjust the width to make it elliptical */
        height: 2rem; /* Adjust the height to make it elliptical */
        display: flex;
        text-transform: uppercase;
        justify-content: center;
        align-items: center;
        text-align: center;
        overflow: hidden; /* Hide overflow if the email is too long */
        white-space: nowrap; /* Prevent text from wrapping */
    }
    
    .links {

    font-size: 13px;
    line-height: 2;
    font-family: 'Open Sans', sans-serif;

    text-decoration: none;

    cursor: pointer;
    font-weight:600; 
    color: #778899;

    transition: color 0.3s;

    }
    .links:hover {

    color: blue;
    text-decoration:none;

    }
    .card{
        width: 30%; height:45%;  background:transparent; padding:10px; border:none;
    }
    .active-link {
    font-size: 14px;
    color: blue;
    }
    .wrap-content{
        display:flex; background:transparent; width:100%; flex-direction:row; margin-top:30px;
    }
    @media screen and (max-width: 1060px) {
        /* Apply styles for screens 960px or less in width */
        .wrap-content {
            flex-direction: column;
            align-items: start;
        }

        .wrap-content > .card {
            width: 100%; /* Adjust the width for smaller screens */
            /* Remove the left margin */
        }
        .container  {
            width: 100%; /* Adjust the width for smaller screens */
            /* Remove the left margin */
        }

        /* You can add more specific styles if needed for smaller screens */
    }
  
    </style>

        <div class="wrap-content" >
        <div class="card" id="cardElement" >
            <div>
                <a onclick="toggleDetails('leaveApply')" class="links">Leave</a>
            </div>
            <div>
                <a onclick="toggleDetails('restricted-content')" class="links">Restricted Holiday</a>
            </div>
            <div>
                <a onclick="toggleDetails('leaveCancel-content')" class="links">Leave Cancel</a>
            </div>
            <div>
                <a onclick="toggleDetails('compOff-content')" class="links">Comp Off Grant</a>
            </div>
        </div>

        <!-- Content for "Restricted Holiday" -->
        <div class="col" id="restricted-content" style="border-radius: 5px; display: none; width: 65%; background: pink; padding: 10px; ">
            <div>leave apply</div>
            <!-- @livewire('leave-pending') -->
        </div>

        <!-- Content for "Leave Cancel" -->
        <div class="col" id="leaveCancel-content" style="border-radius: 5px; display: none; width: 65%; background: #fff; padding: 10px; margin-left: 20px;">
            Leave Cancel Content
        </div>

        <!-- Content for "Comp Off Grant" -->
        <div class="col" id="compOff-content" style="border-radius: 5px; display: none; width: 65%; background: #fff; padding: 10px; margin-left: 20px;">
            Comp Off Grant Content
        </div>


    <div class="container " style="border: 1px solid #DCDCDC; border-radius: 10px; box-shadow: 1px 2px 2px 2px #F5F5F5; width: 100%; margin: 0 auto; background: #FFFFFF;">
        <h5 style="margin-top: 25px;">Applying for Leave</h5>
                  <form style="margin-top: 30px;">
            <div class="form-group" style="margin-top: 10px;">
                <label for="leaveType" style="color: #778899; font-size: 14px; font-weight: 500;">Leave type</label>
                <select class="form-control" id="leaveType" name="leaveType" style="width: 50%; font-weight: 400; color: #778899;">
                    <option value="default">Select Type</option>
                    <option value="casual">Casual Leave</option>
                    <option value="lossOfPay">Loss of Pay</option>
                    <option value="maternity">Maternity Leaves</option>
                </select>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="fromDate" style="color: #778899; font-size: 14px; font-weight: 500;">From date</label>
                <input type="date" class="form-control" id="fromDate" name="fromDate" style="color: #778899;">
            </div>
            <div class="form-group col-md-6">
                <label for="session" style="color: #778899; font-size: 14px; font-weight: 500;">Sessions</label>
                <select class="form-control" id="session" name="session" style="font-weight: 500; ">
                    <option value="default">Select session</option>
                    <option value="Session 1">Session 1</option>
                    <option value="Session 2">Session 2</option>
                </select>
               
            </div>
        </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="toDate" style="color: #778899; font-size: 14px; font-weight: 500;">To date</label>
                    <input type="date" class="form-control" id="toDate" name="toDate" style="color: #778899;">
                </div>
                <div class="form-group col-md-6">
                    <label for="session" style="color: #778899; font-size: 14px; font-weight: 500;">Sessions</label>
                    <select class="form-control" id="session" name="session" style="font-weight: 500;">
                        <option value="default">Select session</option>
                        <option value="Session 1">Session 1</option>
                        <option value="Session 2">Session 2</option>
                    </select>
                </div>
            </div>
            <div class="form-group" style="margin-top: 10px;">
                <div style="display:flex; flex-direction:row;">
                <label for="applyingToText" id="applyingToText" name="applyingTo" style="color: #778899; font-size: 14px; font-weight: 500; cursor: pointer;" onclick="toggleSearchBar()">
                    Applying To
                </label>
                <div class="custom-dropdown-arrow" style="color: #778899; font-size:12px; margin-top:3px; margin-right:15px;cursor:pointer;" onclick="toggleSearchBar()">&#9660;</div>
                </div>
                <input type="text" class="form-control" id="applyingToInput" name="applyingTo" style="display: none;">
                <ul class="custom-dropdown-search" id="searchBar" style="width: 20%; padding: 10px; background-color: #fff; border: 1px solid #ccc; display: none;">
                    <li>
                        <input type="text" class="custom-dropdown-search-input" placeholder="Search..." style="border: 1px solid #ccc; transition: border-color 0.3s; color: #778899; padding-left: 30px;">
                        <i class="fas fa-search" style="position: absolute; top: 50%; left: 20px; transform: translateY(-50%); color: #778899;"></i>
                        <i class="fas fa-times" style="position: absolute; top: 50%; right: 20px; transform: translateY(-50%); color: #778899; cursor: pointer;" onclick="toggleSearchBar()"></i>
                    </li>
                </ul>
            </div>
            <div class="form-group">
                <label for="applyingToText" id="applyingToText" name="applyingTo" style="color: #778899; font-size: 14px; font-weight: 500;">
                    CC to
                </label>
                <div class="control-wrapper" style="display: flex; flex-direction: row; gap: 10px;">
                    <a href="javascript:void(0);" class="text-3 text-secondary control" aria-haspopup="true" onclick="toggleCCField()" style="text-decoration: none;">
                    <div class="icon-container" style="height: 2rem; width: 2rem; background: #fff; padding:7px;border: 1px solid #778899; border-radius: 50%; display: flex; justify-content: center; align-items: center;">
                        <i class="fas fa-plus" style="color:#778899;"></i>
                    </div>
                    </a>
                    <span class="text-5 text-secondary placeholder" id="ccPlaceholder" style="margin-top: 5px;background:transparent; color:#ccc;">Add</span>
                    <div id="addedEmails" class="added-emails" style="display: flex; flex-wrap: wrap; gap: 5px;"></div>
                    <div id="ccField" style="display: none;">
                    <input type="text" id="emailInput" placeholder="Enter email" style="color: #778899; border:1px solid #778899; border-radius:5px; outline:none;">
                    <button type="button" class="btn btn-primary" style="padding:3px; margin-bottom:3px;font-size:14px;"onclick="addEmail()">Add</button>
                </div>
                </div>
               
            </div>

            <div class="form-group">
                <label for="contactDetails" style="color: #778899; font-size: 14px; font-weight: 500;">Contact Details</label>
                <input type="text" class="form-control" id="contactDetails" name="contactDetails" style="color: #778899;width:50%;">
            </div>
            <div class="form-group">
                <label for="reason" style="color: #778899; font-size: 14px; font-weight: 500;">Reason for Leave</label>
                <textarea class="form-control" id="reason" name="reason" placeholder="Enter Reason" rows="4" ></textarea>
            </div>
            <div class="form-group">
                <div class="file-input" style="display: flex; flex-direction:row; align-items: center;">
                    <label for="file" class="file-label" style="display: inline-flex; align-items: center; padding: 5px 10px; border-radius: 5px; cursor: pointer; font-weight: 500; font-size: 14px;">
                        <i class="fas fa-link" style="margin-right: 5px;"></i> Attach File
                    </label>
                    <input type="file" id="file" name="attachment" accept=".pdf, .xls, .xlsx, .doc, .docx, .txt, .ppt, .pptx, .gif, .jpg, .jpeg, .png" class="file-input-field" style="display: none;">
                    <p style="color: #778899; font-size:12px; margin-top:10px; margin-left:50px;">File Types: pdf , xls , xlsx , doc , docx , txt , ppt , pptx , gif , jpg , jpeg , png</p>
                </div>
            </div>
            <div class="buttons1" style="display: flex; justify-content: center; gap: 10px; margin-top:20px; margin-bottom:10px;">
                <button type="submit" class="btn btn-primary" style="font-weight: 500;">Submit</button>
                <button type="button" class="btn btn-secondary" style="background: #fff; font-weight: 500; color: #1E90FF; border: 1px solid #1E90FF;">Cancel</button>
            </div>
        </form>
        
    </div>
         </div>
         
    <script>
         function toggleSearchBar() {
            const searchBar = document.getElementById('searchBar');
            const applyingToText = document.getElementById('applyingToText');
            const applyingToInput = document.getElementById('applyingToInput');

            if (searchBar.style.display === 'none' || searchBar.style.display === '') {
                // Open the search bar
                searchBar.style.display = 'block';
                applyingToText.style.display = 'block';
                applyingToInput.style.display = 'none';
            } else {
                // Close the search bar
                searchBar.style.display = 'none';
                applyingToText.style.display = 'block';
                applyingToInput.style.display = 'none';
            }
        }
          
// Add an event listener to the document to capture clicks
document.addEventListener('click', function(event) {
    const ccField = document.getElementById('ccField');
    const ccPlaceholder = document.getElementById('ccPlaceholder');
    const emailInput = document.getElementById('emailInput');

    // Check if the clicked element is not the email input or the "Add" button
    if (event.target !== emailInput && event.target !== ccPlaceholder) {
        ccField.style.display = 'none';
        ccPlaceholder.style.display = 'inline-block';
    }
});

// Add an event listener to the document to capture clicks
document.addEventListener('click', function(event) {
    const ccField = document.getElementById('ccField');
    const ccPlaceholder = document.getElementById('ccPlaceholder');
    const emailInput = document.getElementById('emailInput');

    // Check if the clicked element is not the email input, the "Add" button, or the CC field
    if (
        event.target !== emailInput &&
        event.target !== ccPlaceholder &&
        event.target !== ccField
    ) {
        ccField.style.display = 'none';
        ccPlaceholder.style.display = 'inline-block';
    }
});

function toggleCCField() {
    const ccField = document.getElementById('ccField');
    const ccPlaceholder = document.getElementById('ccPlaceholder');

    if (ccField.style.display === 'none' || ccField.style.display === '') {
        ccField.style.display = 'block';
        ccPlaceholder.style.display = 'none';
    } else {
        ccField.style.display = 'none';
        ccPlaceholder.style.display = 'inline-block';
    }
}

function addEmail() {
    const emailInput = document.getElementById('emailInput');
    const addedEmails = document.getElementById('addedEmails');

    // Get the entered email address
    const email = emailInput.value;

    if (email.trim() !== '') {
        // Create a new element to display the added email address
        const emailElement = document.createElement('div');
        emailElement.textContent = email.substring(0, 2); // Display only the first two letters
        emailElement.className = 'added-email';
        emailElement.style.border = '2px solid #778899'; // You can style the circle here
        emailElement.style.color = '#778899'; // You can set text color
        emailElement.style.borderRadius = '70%'; // Make it circular

        // Append the email element to the addedEmails container
        addedEmails.appendChild(emailElement);

        // Clear the input field
        emailInput.value = '';
        ccField.style.display = 'none';
        ccPlaceholder.style.display = 'inline-block';
    }
}


function toggleDetails(tabId) {
            const tabs = ['leaveApply', 'restricted-content', 'leaveCancel-content', 'compOff-content'];

            tabs.forEach(tab => {
                const tabElement = document.getElementById(tab);
                if (tab === tabId) {
                    tabElement.style.display = 'block';
                } else {
                    tabElement.style.display = 'none';
                }
            });
        }

    </script>
   
