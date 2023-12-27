<div >
<style>
      /* Add this CSS to your stylesheet or style tag */
      /* Container styles */
      
 
      /* Content styles */
     
 
      #hidden-content {
        display: none;
        /* Initially hide the content */
      }
 

 
      .comment-icon {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        tab-size: 4;
        -webkit-text-size-adjust: 100%;
        font-stretch: normal;
        letter-spacing: normal;
        text-align: left;
        color: #3b4452;
        visibility: inherit;
        --tw-bg-opacity: 1;
        --tw-border-opacity: 1;
        box-sizing: border-box;
        border: 0 solid;
        --tw-shadow: 0 0 transparent;
        --tw-ring-inset: var(--tw-empty, );
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 transparent;
        --tw-ring-shadow: 0 0 transparent;
        cursor: pointer;
        font-size: 1.25rem;
        margin-right: 5px;
        padding-top: 5px;
        padding-bottom: 5px;
        font-weight: 400;
        font-style: normal;
        text-decoration: inherit;
        -webkit-font-smoothing: antialiased;
        font-family: Greytip;
        display: inline;
        width: auto;
        height: auto;
        line-height: normal;
        vertical-align: initial;
        background-image: none;
        background-position: 0 0;
        background-repeat: repeat;
        margin-top: 0;
      }
 
      /* Apply the CSS styles for the comment count text */
      .comment-count {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        tab-size: 4;
        -webkit-text-size-adjust: 100%;
        font-family: Open Sans, sans-serif;
        font-weight: 400;
        text-align: left;
        box-sizing: border-box;
        border: 0 solid;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgba(59, 130, 246, 0.5);
        --tw-ring-offset-shadow: 0 0 transparent;
        --tw-ring-shadow: 0 0 transparent;
        border-radius: .25rem;
        cursor: pointer;
        font-size: .75rem;
        line-height: 1rem;
        padding: 5px;
        --tw-text-opacity: 1;
        color: rgba(163, 179, 200, var(--tw-text-opacity));
      }
 
      .comment-icon {
        cursor: pointer;
      }
 
      .comment-box {
        display: none;
      }
 
      .comments {
        margin-top: 10px;
      }
 
 
   
 
    


.p-4 {
    /* Padding */
}



.items-center {
    /* Center items vertically */
    align-items: center;
}

.bg-white {
    /* Background color */
    background-color: #fff;
}

.rounded-md {
    /* Rounded corners */
    border-radius: 0.375rem; /* Adjust as needed */
}

.h-28 {
    /* Height */
    height: 7rem; /* Adjust as needed */
}



.border-1 {
    /* Border */
    border-width: 1px;
}



/* Styles for the avatar section */

/* Replace with specific styles for the avatar element */

/* Styles for the text content */

.text-base {
    /* Font size */
    font-size: 1.25rem; /* Adjust as needed */
}

.font-semibold {
    /* Font weight */
    font-weight: 600; /* Adjust as needed */
}




.leading-5 {
    /* Line height */
    line-height: 1.25rem; /* Adjust as needed */
}

.text-xs {
    /* Font size */
    font-size: 0.75rem; /* Adjust as needed */
}

.font-normal {
    /* Font weight */
    font-weight: 400; /* Adjust as needed */
}

.leading-4 {
    /* Line height */
    line-height: 1rem; /* Adjust as needed */
}
.flex {
    display: flex;
}

.items-start {
    align-items: flex-start;
}
/* Define styles for the avatar container */
.avatar {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 50px; /* Set width and height for the circular avatar */
  height: 50px;
  border-radius: 50%; 
  margin-left:20px;/* Make the avatar circular */
  background-color: #ccc; /* Background color for the avatar */
}
/* Apply styles to the search bar */
.search-bar {
  display: flex;
  align-items: center;
  max-width: 250px;
  border-radius: 20px;
  border: 1px solid #ccc;
  overflow: hidden; /* Hide overflowing content */
}
/* Sample CSS */
.w-full {
    width: 100%;
    /* Add more styles as needed */
}

.visible {
    /* Your styles for visibility */
}

.mt-1x {
    margin-top: 1rem; /* Adjust as per design */
}

.custom-button {
    /* Styles for the button */
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    border-radius: 5px;
    height: 30px;
    border:1px solid grey ;
    padding: 0.5rem; /* Adjust padding */
    /* Add more styles as needed */
}

.text-xs {
    font-size: 12px; /* Adjust font size */
    /* Add more styles as needed */
}


/* Style the search input */
.search-bar input[type="text"] {
  flex: 1;
  padding: 8px;
  border: none;
  outline: none;
  font-size: 16px;
}

/* Style the search button */
.search-bar button {
  padding: 7px 7px;
  border: none;
  background-color: #007bff;
  color: white;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

/* Change button background color on hover */
.search-bar button:hover {
  background-color: #0056b3;
}
.dropdown-content {
    display: none;
    /* Add more styles as needed */
}

/* Show dropdown content when the arrow is open */
.arrow-open + .dropdown-content {
    display: block;
}


/* Style for the icon */
.avatar i {
  color: #fff;
  margin-left: 10px; /* Icon color */
  font-size: 24px; /* Adjust the icon size */
}
/* Hide all sections initially */
.section {
  display: none;
}

/* Show the section based on the selected radio button */
#all:checked ~ #all-groups,
#appreciations:checked ~ #appreciations,
#buy-sell-rent:checked ~ #buy-sell-rent,
#company-news:checked ~ #company-news,
#events:checked ~ #events {
  display: block;
}


/* Styles for the gap element */

/* Replace with specific styles for the gap element */
</style>
<div class="p-4 flex justify-start items-center bg-white rounded-md h-28 mb-1.5x border-1 border-secondary-100">
    <div class="flex flex-row" style="width: 226px; min-width: 226px;">
    <div class="avatar">
  <i class="fas fa-user"></i>
</div>



        <!-- Placeholder for avatar -->
        <div class="flex flex-col ml-4">
        <div class="text-base font-semibold text-secondary-500 leading-4" style="width:150px">Hey A,</div>
       
        <!-- Greeting text -->
        <div class="w-28 text-xs font-normal text-secondary-500 leading-4 block" style="width:150px">Ready to dive in ?</div>
        <!-- Subtitle text -->
    </div>
       
    </div>
    
    <div class="mx-auto flex justify-center gap-1.5x w-full" style="width: calc(100% - 230px); margin-right: 17rem;">
        <!-- Placeholder -->
    </div>
</div>
<div style="display:flex" >
<div class="container" style="width:200px;background:white;border:1px solid silver;border-radius:5px;height:600px;margin-top:20px;margin-left:10px;overflow-y:auto;max-height:400px;max-width:200px;">
<b style="display: block; margin-top: 10px;">Filters</b>

<hr style="width: 180px; background: grey;margin-top:5px">
<gt-menu-item _ngcontent-fon-c558="" class="ng-star-inserted hydrated">
    <span _ngcontent-fon-c558="" class="flex items-center">
        <input _ngcontent-fon-c558="" type="radio" class="appearance-none default:ring-2 indeterminate:border-secondary-300 hover:border-primary-400 radio-btn" name="activityType">
        <div _ngcontent-fon-c558="" class="flex items-center justify-center ml-2 rounded-full h-6 w-6 bg-salmon-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello salmon stroke-1" _ngcontent-fon-c558="" style="width: 1rem; height: 1rem;">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <rect x="7" y="7" width="3" height="9"></rect>
                <rect x="14" y="7" width="3" height="5"></rect>
            </svg>
        </div>
        <span _ngcontent-fon-c558="" class="ml-2 text-xs font-normal text-secondary-500">All Activities</span>
    </span>
</gt-menu-item>
<gt-menu-item _ngcontent-fon-c558="" class="ng-star-inserted hydrated">
    <span _ngcontent-fon-c558="" class="flex items-center">
        <input _ngcontent-fon-c558="" type="radio" class="appearance-none default:ring-2 indeterminate:border-secondary-300 hover:border-primary-400 radio-btn" name="activityType">
        <div _ngcontent-fon-c558="" class="flex items-center justify-center ml-2 rounded-full h-6 w-6 bg-purple-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file purple stroke-1" _ngcontent-fon-c558="" style="width: 1rem; height: 1rem;">
                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                <polyline points="13 2 13 9 20 9"></polyline>
            </svg>
        </div>
        <span _ngcontent-fon-c558="" class="ml-2 text-xs font-normal text-secondary-500">Posts</span>
    </span>
</gt-menu-item>

<hr style="width: 180px; background: grey;margin-top:5px">

<div class="search-bar">
  <input type="text" placeholder="Search..." />
  <button type="submit">Search</button>
</div>

<div class="w-full visible mt-1x">
    <button type="button" class="custom-button" onclick="toggleDropdown('dropdownContent1', 'arrowSvg1')">
        <span class="text-xs font-semibold leading-4 text-secondary-500" >Groups</span>
        <span class="arrow-icon" id="arrowIcon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg1">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </span>
    </button>
    <div class="dropdown-content" id="dropdownContent1" style="display: none;">
        <ul style="font-size: 12px;">
      
 
          <a class="menu-item" href="/Feeds" style="margin-top:5px">
            All Feeds
          </a>
          <br>
 
          <a class="menu-item" href="/everyone" style="margin-top:5px" >
            Every One
          </a>
          <br>
          <a class="menu-item" href="/Feeds" style="margin-top:5px">
            Events
          </a>
 
          <a class="menu-item" href="/everyone" style="font-size:12px;margin-top:5px">
            Company News
          </a>
 
          <a class="menu-item" href="/everyone" style="margin-top:5px">
            Appreciation
          </a>
 
          <a class="menu-item" href="/everyone" style="margin-top:5px">
            Buy/Sell/Rent
          </a>
          
        </ul>
    </div>
</div>

<div class="w-full visible mt-1x">
    <button type="button" class="custom-button" onclick="toggleDropdown('dropdownContent2', 'arrowSvg2')">
        <span class="text-xs font-semibold leading-4 text-secondary-500"  style="overflow-y:auto;max-height:200px">Location</span>
        <span class="arrow-icon" id="arrowIcon2">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg2">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </span>
    </button>
    <div class="dropdown-content" id="dropdownContent2" style="display: none;">
        <ul style="font-size: 12px;margin-top:3px">
            <p>Guntur</p>
            <p>Hyderabad</p>
            <p>Doddaballapur</p>
            <p>Tirupati</p>
            <p>Vijayavada</p>
            <p>Trivandrum</p>
            <p>Adilabad</p>
        </ul>
    </div>
</div>
<div class="w-full visible mt-1x">
    <button type="button" class="custom-button" onclick="toggleDropdown('dropdownContent3', 'arrowSvg3')">
        <span class="text-xs font-semibold leading-4 text-secondary-500"  style="overflow-y:auto;max-height:200px">Depatment</span>
        <span class="arrow-icon" id="arrowIcon3">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg2">
                <polyline points="6 9 12 15 18 9"></polyline>
            </svg>
        </span>
    </button>
    <div class="dropdown-content" id="dropdownContent3" style="display: none;">
        <ul style="font-size: 12px;margin-top:3px">
            <p>HR</p>
            <p>Operations</p>
            <p>Operations Team</p>
            <p>Product</p>
            <p>Production Suppport</p>
            <p>QA</p>
            <p>Sales Team</p>
            <p>Technology</p>
            <p>Testing Team</p>
        </ul>
    </div>
</div>

 

</div>
<div style="margin-left:-40px;width:700px" >
@foreach ($combinedData as $data)


@if ($data['type'] === 'date_of_birth' )
<div class="birthday-card" style="margin-left:-20px">
  <!-- Upcoming Birthdays List -->
  <div class="F" style="background-color: white; width: 500px; height: 350px; border-radius: 5px; border: 1px solid #CFCACA; margin-left: 30px; color: #3b4452; margin-top: 20px">
    <div style="display: flex;">
      <div class="column" >
        <div class="div" style="margin-left:20px;margin-top:10px">
        @livewire('company-logo')
        </div>
        
        <div style="color: #677A8E; margin-left: 60px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight: 100px;margin-top:20px">Group Events</div>
      </div>
      <div class="c" style="font-size: 13px; font-weight: normal; margin-left: 170px; font-family: Open Sans, sans-serif; margin-top: 40px; font-weight: 100px; color: #9E9696;margin-top:20px">
        {{ date('d M ', strtotime($data['employee']->date_of_birth)) }}
      </div>
    </div>
    <div style="display: flex;">
      <img src="https://cdn1.vectorstock.com/i/thumb-large/48/00/set-images-young-people-listening-to-music-vector-31034800.jpg" alt="Image Description" style="height: 160px; width: 160px; margin-left: 40px;">
      <div style="display: flex; flex-direction: column; margin-left: 20px;">
        <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; margin-top: 10px; font-weight: 100; color: #677A8E;">
          Happy Birthday {{ $data['employee']->first_name }} {{ $data['employee']->last_name }}, Have a great year ahead!
        </p>
        <div style="display: flex; align-items: center;">
          <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description" style="height: 25px; width: 20px;">
          <p style="margin-left: 10px; font-size: 14px; font-weight: normal; margin-top: 10px; font-family: 'Open Sans', sans-serif; color: black; margin-top: 10px;">
            Happy Birthday {{ $data['employee']->first_name }} {{ $data['employee']->last_name }}! 🎂
          </p>
        </div>
      </div>
    </div>
    <confirmation-modal class="confirmation-modal">
      <gt-popup-modal label="modal" size="sm" class="hydrated">
        <div class="body-content">
          <div slot="modal-body"><!-- Content for modal body --></div>
        </div>
        <div slot="modal-footer">
          <div class="flex justify-end">
            <gt-button shade="secondary" name="Cancel" class="mr-2x hydrated"></gt-button>
            <gt-button shade="primary" name ="Confirm" class="hydrated"></gt-button>
          </div>
        </div>
      </gt-popup-modal>
    </confirmation-modal>
    <!-- Like Button -->
    <div style="display: flex;">
      <div class="like-button">
        <i class="thumb-icon" style="margin-left: 20px;">👍</i>
        <span class="like-count">0 Likes</span>
      </div>
      <div class="comment-icon">
        <i class="comment-icon" style="margin-left: 40px; margin-top: 20px;">💬</i>
        <span class="comment-count">0 Comments</span>
      </div>
      <div class="comment-box">
        <textarea id="comment-input" placeholder="Add your comment"></textarea>
      </div>
    </div>
  </div>
</div>
@elseif ($data['type'] === 'hire_date' )
<div class="hire-card" style="margin-left:-20px" >
  <!-- Upcoming Hire Dates List -->
  <div class="F" style="background-color: white; width: 500px; height: 350px; border-radius: 5px; border: 1px solid #CFCACA; margin-left: 30px; color: #3b4452; margin-top: 20px">
    <div style="display: flex;">
      <div class="column">
      <div class="div" style="margin-left:20px;margin-top:10px">
        @livewire('company-logo')
        </div>
        <div style="color: #677A8E; margin-left: 60px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight: 100px;margin-top:20px">Group Events</div>
      </div>
      <div class="c" style="font-size: 13px; font-weight: normal; margin-left: 170px; font-family: Open Sans, sans-serif; margin-top: 40px; font-weight: 100px; color: #9E9696;font-weight: 100px;margin-top:20px">
        {{ date('d M ', strtotime($data['employee']->hire_date)) }}
      </div>
    </div>
    <div style="display: flex;">
      <img src="https://cdn1.vectorstock.com/i/thumb-large/48/00/set-images-young-people-listening-to-music-vector-31034800.jpg" alt="Image Description" style="height: 160px; width: 160px; margin-left: 40px;">
      <div style="display: flex; flex-direction: column; margin-left: 20px;">
        <p style="font-size: 14px; font-family: 'Open Sans', sans-serif; margin-top: 10px; font-weight: 100; color: #677A8E;">
          {{ $data['employee']->first_name }} {{ $data['employee']->last_name }} has joined us in the company on {{ date('d M Y', strtotime($data['employee']->hire_date)) }},
          Please join us in welcoming our newest team member.
        </p>
        <div style="display: flex; align-items: center;">
          <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description" style="height: 25px; width: 20px;">
          <p style="margin-left: 10px; font-size: 14px; font-weight: normal; margin-top: 10px; font-family: 'Open Sans', sans-serif; color: black; margin-top: 10px;">
            {{ $data['employee']->first_name }} {{ $data['employee']->last_name }} Just Joined Us!
          </p>
        </div>

      </div>
      <confirmation-modal class="confirmation-modal">
        <gt-popup-modal label="modal" size="sm" class="hydrated">
          <div class="body-content">
            <div slot="modal-body"><!-- Content for modal body --></div>
          </div>
          <div slot="modal-footer">
            <div class="flex justify-end">
              <gt-button shade="secondary" name="Cancel" class="mr-2x hydrated"></gt-button>
              <gt-button shade="primary" name="Confirm" class="hydrated"></gt-button>
            </div>
          </div>
        </gt-popup-modal>
      </confirmation-modal>

    </div>
    <div style="display: flex;">
      <div class="like-button">
        <i class="thumb-icon" style="margin-left: 20px;">👍</i>
        <span class="like-count">0 Likes</span>
      </div>
      <div class="comment-icon">
        <i class="comment-icon" style="margin-left: 40px; margin-top: 20px;">💬</i>
        <span class="comment-count">0 Comments</span>
      </div>
      <div class="comment-box">
        <textarea id="comment-input" placeholder="Add your comment"></textarea>
      </div>
    </div>
  </div>
</div>

@endif
@endforeach
</div>
</div>
<script>
// JavaScript function to toggle arrow icon visibility
// JavaScript function to toggle arrow icon and dropdown content visibility
// JavaScript function to toggle dropdown content visibility and arrow rotation
function toggleDropdown(contentId, arrowId) {
    var dropdownContent = document.getElementById(contentId);
    var arrowSvg = document.getElementById(arrowId);

    if (dropdownContent.style.display === 'none') {
        dropdownContent.style.display = 'block';
        arrowSvg.style.transform = 'rotate(180deg)';
    } else {
        dropdownContent.style.display = 'none';
        arrowSvg.style.transform = 'rotate(0deg)';
    }
}





</script>