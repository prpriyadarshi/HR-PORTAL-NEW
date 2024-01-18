<div>
<style>
        /* Dropdown container */
        .dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #3498db;
    color: #fff;
    padding: 10px 15px;
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    color: #333;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.dropdown-button{
    height:30px;
    width:220px;
    border-radius:5px;
}
    </style>
<div class="row">
<h6 style="color:blue;margin-left:20px;text-decoration:underline;margin-top:20px">overview</h6>
<div class="dropdown" style="margin-left:700px">
        <button  class="dropdown-button">01 Apr, 2021 - 31 Mar, 2022</button>
        <div class="dropdown-content">
            <div class="dropdown-item">01 Apr, 2021 - 31 Mar, 2022</div>
            <div class="dropdown-item">01 Apr, 2022 - 31 Mar, 2023</div>
            <div class="dropdown-item">01 Apr, 2023 - 31 Mar, 2024</div>
            
        </div>
    </div>

</div>
<script>
        // JavaScript to handle the dropdown functionality
        const dropdownButton = document.querySelector('.dropdown-button');
        const dropdownContent = document.querySelector('.dropdown-content');
        const dropdownItems = document.querySelectorAll('.dropdown-item');

        dropdownButton.addEventListener('click', function () {
            dropdownContent.classList.toggle('active');
        });

        dropdownItems.forEach(item => {
            item.addEventListener('click', function () {
                dropdownButton.innerText = item.innerText;
                dropdownContent.classList.remove('active');
            });
        });
    </script>