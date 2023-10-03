<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .task-container {
            background-color: #fff;
            border-radius: 5px;
            margin: 20px auto;
            padding: 20px;
            width: 500px;
            height:600px
        }

        .task-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .task-header h2 {
            font-size: 1.5rem;
            font-weight: bold;
        }

        /* Profile Information */
        .profile-info {
            display: none; /* Initially hidden */
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        /* Icons */
        .icon {
            font-size: 1.25rem;
            color: #333;
            cursor: pointer;
            margin-left: 10px;
        }

        .icon:hover {
            color: #007BFF;
        }
        .priority-container {
            display: flex;
            margin-top: 20px;
        }
        .priority-option {
            display: flex;
            align-items: center;
            margin-right: 20px;
            cursor: pointer;
        }

        .priority-circle {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 5px;
        }

        /* Priority Colors */
        .priority-low {
            background-color: #1AB89B;
        }

        .priority-medium {
            background-color: #F2B13F;
        }

        .priority-high {
            background-color: #F05454;
        }

        .selected {
            border: 2px solid #007BFF;
        }
    </style>


<div class="container" style="width: 900px; height: 600px; margin-left: 20px; border: 1px solid silver; border-radius: 5px;">
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100%;">
        <img src="https://th.bing.com/th/id/OIP.vGrIkh6JZFSdlOF6bIOIpAAAAA?pid=ImgDet&w=168&h=126&c=7&dpr=1.5" style="margin-top: -140px; margin-left: 50px;height:120px;width:200px">
        <p style="margin-left:100px;font-size:12px;margin-top:10px">You haven't added any tasks yet! Start by creating new tasks or configuring checklists.</p>
        <button id="open-popup-button" style="margin-left: 20px; background: #2A3ACD; border: none; border-radius: 5px; color: white; font-size: 12px; height: 30px; cursor: pointer;">Add new Task</button>

<!-- Popup Container -->
<div id="popup-container" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); justify-content: center;margin-left:300px">
    <div class="task-container">
        <!-- Your task form and content here -->
        <div class="task-header">
            <p style="margin-left: 20px; font-size: 17px">Add Task</p>
            <i class="fas fa-times icon" id="close-icon"></i>
        </div>
        <div class="form-group" >
            <label for="name">Task Name</label>
            <input type="text" id="name" name="name" placeholder="e.g. Collect documents" required style="margin-left:30px">
        </div>
        <div class="form-group" style="margin-top:20px;display:flex;" >
            <label for="assignee" style="margin-right:30px;" >Assignee</label>
            <i class="fas fa-user icon" id="profile-icon" style="margin-left:30px"></i>
            <div class="profile-info" id="profile-info" style="width:300px;margin-left:100px;height:auto">
                <!-- Add profile information here -->
        <div _ngcontent-lsa-c334="" class="remove-selected py-0 px-1x pb-0 mt-1x ng-star-inserted"><a _ngcontent-lsa-c334="" class="text-sm font-semibold text-primary-400 no-underline">Remove assignee</a>
    </div><!----><!---->
    <div _ngcontent-lsa-c334="" class="gt-user-search rounded-md my-1.5x mx-1x p-1x border border-secondary-200">
        <form _ngcontent-lsa-c334="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
            <input _ngcontent-lsa-c334="" type="text" name="search" required="" autocomplete="off" class="info ng-untouched ng-pristine ng-invalid" placeholder="Search Assignee"><button _ngcontent-lsa-c334="" type="reset" class="info gt-user-search-clear">x</button>
            <span _ngcontent-lsa-c334="" class="info text-muted search-icon"><i _ngcontent-lsa-c334="" class="fa fa-search"></i></span>
        </form></div><div _ngcontent-lsa-c334="" infinite-scroll="" class="menu-list"><!----><ul _ngcontent-lsa-c334="" class="list-unstyled ng-star-inserted"><li _ngcontent-lsa-c334="" role="menuitem" class="menu-list-item p-1x hover:bg-primary-50">
            <a _ngcontent-lsa-c334="" href="javascript: void 0;" class="tm-user items-center ng-star-inserted"><tm-photo _ngcontent-lsa-c334="" _nghost-lsa-c333="" class="ng-star-inserted"><img _ngcontent-lsa-c333="" alt="" class="tm-img h-3x w-3x ng-star-inserted" src="/v3/api/user/photo/250/large?employeeNo=T0001"><!----><!----></tm-photo><!----><div _ngcontent-lsa-c334="" class="tm-user-info flex mt-0"><p _ngcontent-lsa-c334="" class="text-xs font-normal text-secondary-500">Anant Ajay Kumar</p><p _ngcontent-lsa-c334="" class="text-xs font-normal text-secondary-500 ml-0.5x">(#T0001)</p></div></a><!----><!----><!----><!----></li></ul><ul _ngcontent-lsa-c334="" class="list-unstyled ng-star-inserted"><li _ngcontent-lsa-c334="" role="menuitem" class="menu-list-item p-1x hover:bg-primary-50"><a _ngcontent-lsa-c334="" href="javascript: void 0;" class="tm-user items-center ng-star-inserted"><tm-photo _ngcontent-lsa-c334="" _nghost-lsa-c333="" class="ng-star-inserted"><img _ngcontent-lsa-c333="" alt="" class="tm-img h-3x w-3x ng-star-inserted" src="/v3/api/user/photo/250/large?employeeNo=T00010"><!----><!----></tm-photo><!----><div _ngcontent-lsa-c334="" class="tm-user-info flex mt-0"><p _ngcontent-lsa-c334="" class="text-xs font-normal text-secondary-500">Haard Parmar</p><p _ngcontent-lsa-c334="" class="text-xs font-normal text-secondary-500 ml-0.5x">(#T00010)</p></div></a><!----><!----><!----><!----></li></ul><ul _ngcontent-lsa-c334="" class="list-unstyled ng-star-inserted"><li _ngcontent-lsa-c334="" role="menuitem" class="menu-list-item p-1x hover:bg-primary-50"><a _ngcontent-lsa-c334="" href="javascript: void 0;" class="tm-user items-center ng-star-inserted"><tm-photo _ngcontent-lsa-c334="" _nghost-lsa-c333="" class="ng-star-inserted"><img _ngcontent-lsa-c333="" alt="" class="tm-img h-3x w-3x ng-star-inserted" src="/v3/api/user/photo/250/large?employeeNo=T00011"><!----><!----></tm-photo><!----><div _ngcontent-lsa-c334="" class="tm-user-info flex mt-0"><p _ngcontent-lsa-c334="" class="text-xs font-normal text-secondary-500">Keerthi Burri</p><p _ngcontent-lsa-c334="" class="text-xs font-normal text-secondary-500 ml-0.5x">(#T00011)</p></div></a><!----><!----><!----><!----></li></ul></div>

            </div>

    </div>
    <div class="form-group" style="margin-top:20px">
            <label for="name" style="margin-left:17 px"> Checklist </label>
            <input type="text" id="name" name="name" placeholder="Search" required style="margin-left:40px">
        </div>
    <div class="priority-container" >
        <p style="margin-right:10px;margin-top:13px"> Priority </p>
            <div class="priority-option" id="low-priority" >
                <div class="priority-circle priority-low" style="margin-left:50px"></div>
                <span class="text-xs">Low</span>
            </div>
            <div class="priority-option" id="medium-priority">
                <div class="priority-circle priority-medium"></div>
                <span class="text-xs">Medium</span>
            </div>
            <div class="priority-option" id="high-priority">
                <div class="priority-circle priority-high"></div>
                <span class="text-xs">High</span>
            </div>
        </div>

        <div class="form-group"  style="display:flex">
                        <label class="form-label" style="margin-top:10px" >Due Date </label>
                        <input type="date" name="fromDate" class="form-control" style="width:280px;margin-left:30px">
                    </div>

        <div class="form-group" style="margin-top:20px">
            <label for="name" style="margin-left:17 px">Tags </label>
            <input type="text" id="name" name="name" placeholder="search" required style="margin-left:60px">
        </div>
        <div class="form-group" style="margin-top:20px">
            <label for="name" style="margin-left:17 px"> Followers </label>
            <input type="text" id="name" name="name" placeholder="AddFollowers" required style="margin-left:23px">
        </div>
        <div class="mb-2x" style="dislay:flex;margin-top:10px">
    <div class="attach-file">
        <label for="fileInput" class="attachment text-xs text-primary-400 hover:text-xs hover:text-primary-400 hover:no-underline font-normal">Attach Files</label>
        <input type="file" id="fileInput" style="display: none;">
    </div>
</div>

<div id="selectedFilesInfo" style="display: flex;margin-top:10px">
    Selected files: <span id="selectedFileNames"></span>
</div>
<button class="btn btn-link btn-medium" type="button" name="link" style="margin-left:200px;Background:#D2D4D6;height:30px;width:90px ;color:black;text-decoration:none"><p style="margin-top:-2px;font-size:12px">Cancel</p></button>

<button class="btn btn-link btn-medium" type="button" name="link" style="margin-left:20px;Background:#D2D4D6;height:30px;width:110px ;color:black;text-decoration:none"><p style="margin-top:-2px;font-size:12px">Save changes</p></button>
    </button>
    </div>
        <!-- Add more form fields here -->


    </div>

    <script>
        const closeIcon = document.getElementById('close-icon');
        const profileIcon = document.getElementById('profile-icon');
        const profileInfo = document.getElementById('profile-info');

        closeIcon.addEventListener('click', function() {
            // Add your close logic here
            console.log('Close button clicked');
        });

        profileIcon.addEventListener('click', function() {
            // Toggle the visibility of the profile information
            if (profileInfo.style.display === 'none') {
                profileInfo.style.display = 'block';
            } else {
                profileInfo.style.display = 'none';
            }
        });
        const priorityOptions = document.querySelectorAll('.priority-option');

priorityOptions.forEach((option) => {
    option.addEventListener('click', function() {
        // Remove the selected class from all options
        priorityOptions.forEach((opt) => {
            opt.querySelector('.priority-circle').classList.remove('selected');
        });

        // Add the selected class to the clicked option
        option.querySelector('.priority-circle').classList.add('selected');
    });
});
const fileInput = document.getElementById('fileInput');
const selectedFileNamesElement = document.getElementById('selectedFileNames');
const selectedFilesInfo = document.getElementById('selectedFilesInfo');

fileInput.addEventListener('change', function () {
    const selectedFiles = fileInput.files;
    if (selectedFiles.length > 0) {
        const pdfFiles = Array.from(selectedFiles).filter(file => file.type === 'application/pdf');
        const pdfCount = pdfFiles.length;

        if (pdfCount > 0) {
            const fileNames = pdfFiles.map(file => file.name).join(', ');
            selectedFileNamesElement.textContent = fileNames;
            selectedFilesInfo.style.display = 'block';
            selectedFilesInfo.textContent = `Selected PDFs: ${fileNames}`;
        } else {
            selectedFilesInfo.style.display = 'block';
            selectedFilesInfo.textContent = 'No PDFs selected';
        }
    } else {
        selectedFilesInfo.style.display = 'none';
    }
});

const attachmentLabel = document.querySelector('.attach-file .attachment');
attachmentLabel.addEventListener('click', function () {
    fileInput.click(); // Trigger the file input when the label is clicked
});







    document.addEventListener('DOMContentLoaded', function () {
        const openPopupButton = document.getElementById('open-popup-button');
        const closeIcon = document.getElementById('close-icon');
        const popupContainer = document.getElementById('popup-container');

        openPopupButton.addEventListener('click', function () {
            popupContainer.style.display = 'flex';
        });

        closeIcon.addEventListener('click', function () {
            popupContainer.style.display = 'none';
        });
    });


</script>

</body>
</html>
