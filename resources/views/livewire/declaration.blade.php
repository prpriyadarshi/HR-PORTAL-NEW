<style>
            .dropdown-container {
            margin-left: 10px;
            position: relative;
        }

      /* Updated styles for the dropdown button with arrow */
        .dropdown-btn {
            padding: 5px 15px;
            background-color: #fff;
            color: black;
            border: 1px solid #ccc;
            border-radius:5px;
            width:180px;
            cursor: pointer;
            position: relative; /* Add relative positioning for the arrow */
        }

        /* Create an arrow using ::after pseudo-element */
        .dropdown-btn::after {
            content: "\25BE"; /* Unicode character for a down-pointing triangle */
            font-size: 12px; /* Adjust the size of the arrow */
            margin-left: 5px; /* Add some spacing between the text and arrow */
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            max-height: 200px; /* Set the maximum height for scrollable content */
            overflow-y: scroll; /* Enable vertical scrolling if content exceeds max height */
        }


        .dropdown-content a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #333;
        }

        .dropdown-content a:hover {
            background-color: #007bff;
            color: #fff;
        }
        .custom-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: blue;
    color: white;
    text-align: center;
    text-decoration: none;
    border: 1px solid silver;
    border-radius: 5px;
    font-size: 16px;
    margin-left: 500px;
    margin-bottom: 50px;
    height:38px;
   
}

.custom-button:hover {
    background-color: white;
}

    </style>

<div>
    <div class="container">
        <div class="row" style="display:flex">
     
       <div class="dropdown-container" style="margin-left:10px">
       <a href="/itdeclaration" class="custom-button" ><p style="magin-top:-40px"> Tax Planner</p></a>

        <button class="dropdown-btn"> 2023-2024</button>
        <div class="dropdown-content">
            <a href="#">Aug 2023</a>
            <a href="#">Sep 2023</a>
            <a href="#">Oct 2023</a>
            <a href="#">Nov 2023</a>
            <a href="#">Dec 2023</a>
            <a href="#">Jan 2023</a>
            <a href="#">Feb 2023</a>
            <a href="#">Mar 2023</a>
            <a href="#">Apr 2023</a>
            <a href="#">May 2023</a>
            <a href="#">June 2023</a>
            <a href="#">July 2023</a>
        </div>
    </div>
<div>
<div class="container" style="display:flex">
<div class="container" style="width:500px;height:300px;background:white;border:1px solid silver;border-radius:5px;margin-top:20px;margin-left:10px;">

<img src="https://th.bing.com/th/id/OIP.vwV51NMNZ8YgCdZ__BSFkQAAAA?pid=ImgDet&rs=1" style="height:80px;width:100px;margin-top:80px;margin-left:100px">
<p style="margin-left:100px;color:#ACADAA;margin-top:20px">Sigh! Declaration is locked</p>
<p style="margin-left:50px;color:#ACADAA;font-size:12px">This declaration window is locked. Please wait for the admin notification</p>
    </div>  
<div class="row" style="margin-left:15px" >
    <div class="row" style="width:300px;height:100px;background:#FBF5BF;border:1px solid silver;border-radius:5px;margin-top:20px;margin-left:5px;display:flex">
    <div class="column" style="display:flex">
    <p style="margin-left:-10px">Declaration Status : LOCKED</p>
   
    </div>
    <p style="font-size:14px">You have declared on  {{ now()->format('F') }}, {{ now()->format('Y') }}, and you cannot withdraw it</p>
    </div>
    <div class="row" style="width:300px;height:70px;background:white;border:1px solid silver;border-radius:5px;margin-top:-40px;margin-left:5px;display:flex">
   
    <p style="font-size:14px;margin-top:10px">Your IT declaration is considered as per the New Regime</p>
    </div>
    <a href="/downloadform" id="pdfLink2023_4" class="downloadform" download style="margin-left: 10px; display: inline-block;">Download Form 12BB</a>


</div>
    </div>

  </div>
</div>

    
    </div>
<script>
    // JavaScript to hide/show the Empdetails div
    const empDetailsDiv = document.querySelector('.Empdetails');
    const hideButton = document.getElementById('hide-button');

    hideButton.addEventListener('click', function () {
        empDetailsDiv.style.display = 'none'; // Hide the div
    });
</script>