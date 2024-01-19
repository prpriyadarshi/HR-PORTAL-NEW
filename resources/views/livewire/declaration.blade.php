<style>
          

    </style>

<div>
    <div class="container">
        <div class="row" style="display:flex">
     
       <div class="dropdown-container4" style="margin-left:10px">
       <a href="/itdeclaration" class="custom-button4" ><p > Tax Planner</p></a>

        <button class="dropdown-btn4"> 2023-2024</button>
        <div class="dropdown-content4">
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