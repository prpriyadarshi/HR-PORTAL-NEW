<div>
<div class="row">
<h6 style="color:blue;margin-left:20px;text-decoration:underline;margin-top:20px">overview</h6>
<div class="dropdown2" style="margin-left:700px">
        <button  class="dropdown-button2">01 Apr, 2021 - 31 Mar, 2022</button>
        <div class="dropdown-content2">
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