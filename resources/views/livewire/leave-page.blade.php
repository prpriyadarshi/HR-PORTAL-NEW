<style>

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
.buttons {
    display: flex;
    margin:0 auto;
    justify-content: center;
    align-items: center;
    max-width: 400px;
    width:40%;
    border:1px solid #ccc;
    border-radius:5px;

}

.button1 {
    background-color: transparent;
    border-left: none;
    border-top:none;
    border-bottom:none;
    border-right:1px solid #ccc;
    width: 150px;
    color: #778899;
    flex-grow: 1;
    padding: 5px;
    font-weight:500;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}
.button2 {
    background-color: transparent;
    border-left: none;
    border-top:none;
    border-bottom:none;
    border-right:1px solid #ccc;
    width: 150px;
    flex-grow: 1;
    color: #778899;
    font-weight:500;
    padding: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}
.button3 {
    background-color: transparent;
    border-left: none;
    border-top:none;
    border-bottom:none;
    border-right:none;
    width: 150px;
    flex-grow: 1;
    color: #778899;
    font-weight:500;
    padding: 5px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}


.button1:hover {
    color: #007BFF;
    border: 1px solid #007BFF;
}
.button2:hover {
    color: #007BFF;
    border: 1px solid #007BFF;
}
.button3:hover {
    color: #007BFF;
    border: 1px solid #007BFF;
}
#apply-button.clicked {
    background-color: #007BFF;
    color: #fff;
    border:none;
}

#pending-button.clicked,
#history-button.clicked {
    background-color: #007BFF;
    color: #fff;
    border:none;
}


.links:hover {

    color: blue;
    text-decoration:none;

}
.active-link {
    font-size: 14px;
    color: blue;
}
/* Media query for smaller screens */
@media screen and (max-width: 760px) {
    .buttons {
        flex-direction: column; /* Stack buttons vertically on smaller screens */
        width: 50%; /* Adjust the width to your preference */
    }

    .button1, .button2 {
        width: 100%; /* Make buttons full width on smaller screens */
        border-bottom:1px solid #ccc;/* Add some spacing between buttons */
    }
    .button3 {
        width: 100%; /* Make buttons full width on smaller screens */
   
    }
}


</style>
<div class="row" style=" width:100%; ">

<div class="main-layout" style=" width:100%;  ">
<div class="buttons">
    <button class="button1" id="apply-button" onclick="toggleDetails('leaveApply')">Apply</button>
    <button class="button2" id="pending-button" id="pendingLink"onclick="toggleDetails('leavePending')">Pending</button>
    <button class="button3" id="history-button" onclick="toggleDetails('leaveHistory')">History</button>
</div>



        <!-- Content for "Restricted Holiday" -->
        <div class="col" id="restricted-content" style="border-radius: 5px; display: none; width: 65%; background: #fff; padding: 10px; margin-left: 20px;">
            <div>helloo</div>
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


{{-- leave Tab --}}

<div class="col" style="border-radius: 5px;display: none;" id="leaveApply"  style="display: none; width: 100%; background: #fff; padding: 0; margin-top: -150px;">
     @livewire('leave-apply')
</div>

{{-- pending --}}

<div class="col" style="border-radius: 5px;display: none;" id="leavePending" style="display: none; width: 70%; background: #fff; padding: 0; ">
<div class="leave-pending" style="margin-top:30px; background:#fff; margin-left:120px; display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">
        <img src="/images/pending.png" alt="Pending Image" style="width:60%; margin:0 auto;">
        <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no pending records of any leave transaction</p>
    </div>
</div>

{{-- history --}}

<div class="col" style="border-radius: 5px;display: none;" id="leaveHistory"  style="display: none; width: 65%; background: #fff; padding: 0; margin-left: 150px; margin-top: -150px;">
     <!-- @livewire('leave-history') -->leave history
</div>
</div>
</div>
<script>

function toggleDetails(tabId) {

const tabs = ['leaveApply', 'leavePending', 'leaveHistory',];

tabs.forEach(tab => {

    if (tab === tabId) {

        document.getElementById(tab).style.display = 'block';

    } else {

        document.getElementById(tab).style.display = 'none';

    }

});
    }

    const applyButton = document.getElementById("apply-button");
    const pendingButton = document.getElementById("pending-button");
    const historyButton = document.getElementById("history-button");

    applyButton.addEventListener("click", () => {
        applyButton.classList.add("clicked");
        pendingButton.classList.remove("clicked");
        historyButton.classList.remove("clicked");
        toggleTab('leaveApply'); // Load the Apply Leave section
    });

    pendingButton.addEventListener("click", () => {
        applyButton.classList.remove("clicked");
        pendingButton.classList.add("clicked");
        historyButton.classList.remove("clicked");
        toggleTab('leavePending'); // Example: Load a different section
    });

    historyButton.addEventListener("click", () => {
        applyButton.classList.remove("clicked");
        pendingButton.classList.remove("clicked");
        historyButton.classList.add("clicked");
        toggleTab('leaveHistory'); // Example: Load a different section
    });

    //cardlinks hiding
    const cardElement = document.getElementById("cardElement");

        function toggleCardVisibility() {
            if (cardElement.style.display === 'none' || cardElement.style.display === '') {
                cardElement.style.display = 'block';
            } else {
                cardElement.style.display = 'none';
            }
        }

        // Attach click event listeners to your "Pending" and "History" elements
        const pendingLink = document.getElementById("pendingLink");
        const historyLink = document.getElementById("historyLink");

        pendingLink.addEventListener("click", toggleCardVisibility);
        historyLink.addEventListener("click", toggleCardVisibility);


</script>
