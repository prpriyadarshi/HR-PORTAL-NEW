<div>

    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.css" />

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/emojionearea/3.4.2/emojionearea.min.js"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>


    </head>
    <style>
    .body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        background-color: #f4f4f4;
    }

    .emoji-drawer {
        display: grid;

        grid-template-columns: repeat(3, 1fr);

        width: 100px;

        margin-bottom: 32px;
        transition: opacity 0.2s;
    }

    .hidden {
        opacity: 0;
    }

    .emoji {
        text-align: center;
        font-size: 24px;
        padding: 8px;
    }

    .emoji:hover {
        cursor: pointer;
    }

    .search-bar {
        display: flex;
        align-items: center;
        background-color: #fff;
        border-radius: 25px;
        height: 30px;
        overflow: hidden;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .search-input {
        border: none;
        padding: 10px;
        width: 200px;
        font-size: 16px;
        outline: none;
    }

    .search-button {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 15px;
        cursor: pointer;
        border-top-right-radius: 25px;
        border-bottom-right-radius: 25px;
    }

    #hidden-content {
        display: none;
        /* Initially hide the content */
    }








    .comments {
        margin-top: 10px;
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
        border-radius: 0.375rem;
        /* Adjust as needed */
    }

    .h-28 {
        /* Height */
        height: 7rem;
        /* Adjust as needed */
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
        font-size: 1.25rem;
        /* Adjust as needed */
    }

    .font-semibold {
        /* Font weight */
        font-weight: 600;
        /* Adjust as needed */
    }




    .leading-5 {
        /* Line height */
        line-height: 1.25rem;
        /* Adjust as needed */
    }

    .text-xs {
        /* Font size */
        font-size: 0.75rem;
        /* Adjust as needed */
    }

    .font-normal {
        /* Font weight */
        font-weight: 400;
        /* Adjust as needed */
    }

    .leading-4 {
        /* Line height */
        line-height: 1rem;
        /* Adjust as needed */
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
        width: 50px;
        /* Set width and height for the circular avatar */
        height: 50px;
        border-radius: 50%;
        margin-left: 20px;
        /* Make the avatar circular */
        background-color: #ccc;
        /* Background color for the avatar */
    }

    /* Apply styles to the search bar */
    .search-bar {
        display: flex;
        align-items: center;
        max-width: 250px;
        border-radius: 20px;
        border: 1px solid #ccc;
        overflow: hidden;
        /* Hide overflowing content */
    }

    /* Sample CSS */
    .w-full {
        width: 100%;
        /* Add more styles as needed */
    }



    .mt-1x {
        margin-top: 1rem;
        /* Adjust as per design */
    }

    .custom-button {
        /* Styles for the button */
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        border-radius: 5px;
        height: 30px;
        border: 1px solid grey;
        padding: 0.5rem;
        /* Adjust padding */
        /* Add more styles as needed */
    }

    .text-xs {
        font-size: 12px;
        /* Adjust font size */
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

    .dropdown-content {
        display: none;
        /* Add more styles as needed */
    }

    /* Show dropdown content when the arrow is open */
    .arrow-open+.dropdown-content {
        display: block;
    }


    /* Style for the icon */
    .avatar i {
        color: #fff;
        margin-left: 10px;
        /* Icon color */
        font-size: 24px;
        /* Adjust the icon size */
    }

    /* Hide all sections initially */
    .section {
        display: none;
    }

    /* Show the section based on the selected radio button */
    #all:checked~#all-groups,
    #appreciations:checked~#appreciations,
    #buy-sell-rent:checked~#buy-sell-rent,
    #company-news:checked~#company-news,
    #events:checked~#events {
        display: block;
    }

    .emoji {
        color: transparent;
        display: inline-block;
        font-size: 18px;
        font-style: normal;
        height: 25px;
        width: 25px;
    }

    .emoji::selection {
        background-color:highlight;
        color: transparent;
    }

    .emoji-image {
        font-size: 14px;
        line-height: 28px;
    }

    .emoji-button {
        cursor: pointer;
        margin: 5px;
    }

    .emoji-editor {
        -moz-appearance: textfield-multiline;
        -webkit-appearance: textarea;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
        cursor: text;
        font: medium -moz-fixed;
        font: -webkit-small-control;
        -webkit-font-smoothing: antialiased;
        height: 100px;
        overflow: auto;
        padding: 5px;
        resize: both;
        width: 100%;
    }

    .emoji-picker {
        background-color: #fff;
        border: 1px solid #ccc;
        position: absolute;
        width: 210px;
    }

    .emoji-picker a {
        cursor: pointer;
        display: inline-block;
        font-size: 20px;
        padding: 3px;
    }

    .emoji-selector {
        border-bottom: 1px solid #ccc;
        display: flex;
    }

    .emoji-selector li {
        margin: 5px;
    }


    .mytextarea {
        width: 100px;
        /* Set your desired initial width */
        height: 30px;
        /* Set your desired minimum height */
        resize: none;
        /* Disable textarea resizing by the user */
    }

    .myEmojiDiv {
        position: absolute;
        width: fit-content;
        z-index: 1;
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
                <div class="w-28 text-xs font-normal text-secondary-500 leading-4 block" style="width:150px">Ready to
                    dive in ?</div>
                <!-- Subtitle text -->
            </div>

        </div>

        <div class="mx-auto flex justify-center gap-1.5x w-full"
            style="width: calc(100% - 230px); margin-right: 17rem;">
            <!-- Placeholder -->
        </div>
    </div>
    <div style="display:flex">
        <div class="container"
            style="width:200px;background:white;border:1px solid silver;border-radius:5px;height:600px;margin-top:20px;margin-left:10px;overflow-y:auto;max-height:350px;max-width:200px;">
            <b style="display: block; margin-top: 10px;">Filters</b>

            <hr style="width: 180px; background: grey;margin-top:5px">
            <gt-menu-item _ngcontent-fon-c558="" class="ng-star-inserted hydrated">
                <span _ngcontent-fon-c558="" class="flex items-center">
                    <input _ngcontent-fon-c558="" type="radio"
                        class="appearance-none default:ring-2 indeterminate:border-secondary-300 hover:border-primary-400 radio-btn"
                        name="activityType">
                    <div _ngcontent-fon-c558=""
                        class="flex items-center justify-center ml-2 rounded-full h-6 w-6 bg-salmon-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trello salmon stroke-1" _ngcontent-fon-c558=""
                            style="width: 1rem; height: 1rem;">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                            <rect x="7" y="7" width="3" height="9"></rect>
                            <rect x="14" y="7" width="3" height="5"></rect>
                        </svg>
                    </div>
                    <span _ngcontent-fon-c558="" class="ml-2 text-xs font-normal text-secondary-500">All
                        Activities</span>
                </span>
            </gt-menu-item>
            <gt-menu-item _ngcontent-fon-c558="" class="ng-star-inserted hydrated">
                <span _ngcontent-fon-c558="" class="flex items-center">
                    <input _ngcontent-fon-c558="" type="radio"
                        class="appearance-none default:ring-2 indeterminate:border-secondary-300 hover:border-primary-400 radio-btn"
                        name="activityType">
                    <div _ngcontent-fon-c558=""
                        class="flex items-center justify-center ml-2 rounded-full h-6 w-6 bg-purple-50">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-file purple stroke-1" _ngcontent-fon-c558=""
                            style="width: 1rem; height: 1rem;">
                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                            <polyline points="13 2 13 9 20 9"></polyline>
                        </svg>
                    </div>
                    <span _ngcontent-fon-c558="" class="ml-2 text-xs font-normal text-secondary-500">Posts</span>
                </span>
            </gt-menu-item>

            <hr style="width: 180px;background:grey;margin-top:5px">

            <div class="search-bar">
                <input type="text" class="search-input" placeholder="Search...">
                <button class="search-button"><i class="fas fa-search"></i></button>
            </div>

            <div class="w-full visible mt-1x">
                <button type="button" class="custom-button" onclick="toggleDropdown('dropdownContent1', 'arrowSvg1')">
                    <span class="text-xs font-semibold leading-4 text-secondary-500">Groups</span>
                    <span class="arrow-icon" id="arrowIcon1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg1">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </button>
                <div id="dropdownContent1" style="display: none;">
                    <ul style="font-size: 12px;">


                        <a class="menu-item" href="/Feeds" style="margin-top:5px">
                            All Feeds
                        </a>
                        <br>

                        <a class="menu-item" href="/everyone" style="margin-top:5px">
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
                    <span class="text-xs font-semibold leading-4 text-secondary-500"
                        style="overflow-y:auto;max-height:200px">Location</span>
                    <span class="arrow-icon" id="arrowIcon2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg2">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </button>
                <div id="dropdownContent2" style="display: none;">
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
                    <span class="text-xs font-semibold leading-4 text-secondary-500"
                        style="overflow-y:auto;max-height:200px">Depatment</span>
                    <span class="arrow-icon" id="arrowIcon3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-chevron-down h-1.2x w-1.2x text-secondary-400" id="arrowSvg2">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </span>
                </button>
                <div id="dropdownContent3" style="display: none;">
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
        <div style="margin-left:-40px;width:700px;position:relative;">


            @foreach ($combinedData as $index => $data)
            @if ($data['type'] === 'date_of_birth' )

            <div class="birthday-card" style="position: relative;">
                <!-- Upcoming Birthdays List -->
                <div class="F"
                    style="background-color: white; width: 500px; height:auto; border-radius: 5px; border: 1px solid #CFCACA; margin-left: 30px; color: #3b4452; margin-top: 20px">
                    <div style="display: flex;">
                        <div class="column">
                            <div class="div" style="margin-left:20px;margin-top:10px">
                                @livewire('company-logo')

                            </div>

                            <div
                                style="color: #677A8E; margin-left: 60px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight: 100px;margin-top:20px">
                                Group Events</div>
                        </div>
                        <div class="c"
                            style="font-size: 13px; font-weight: normal; margin-left: 170px; font-family: Open Sans, sans-serif; margin-top: 40px; font-weight: 100px; color: #9E9696;margin-top:20px">
                            {{ date('d M ', strtotime($data['employee']->date_of_birth)) }}
                        </div>
                    </div>
                    <div style="display: flex;">
                        <img src="{{ asset('images/Blowing_out_Birthday_candles_Gif.gif') }}"
                            alt="Image Description" style="height: 160px; width: 160px; margin-left: 40px;">
                        <div style="display: flex; flex-direction: column; margin-left: 20px;">
                            <p
                                style="font-size: 14px; font-family: 'Open Sans', sans-serif; margin-top: 10px; font-weight: 100; color: #677A8E;">
                                Happy Birthday {{ $data['employee']->first_name }} {{ $data['employee']->last_name }},
                                Have a great year ahead!
                            </p>
                            <div style="display: flex; align-items: center;">
                                <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description"
                                    style="height: 25px; width: 20px;">
                                <p
                                    style="margin-left: 10px; font-size: 14px; font-weight: normal; margin-top: 10px; font-family: 'Open Sans', sans-serif; color: black; margin-top: 10px;">
                                    Happy Birthday {{ $data['employee']->first_name }}
                                    {{ $data['employee']->last_name }}! 🎂
                                </p>
                            </div>
                        </div>
                    </div>




                    <!-- Display existing comments -->
                    <div>
                        <!-- Like button -->
                        <!-- Display comments -->

                        <div>

                        </div>
                        <div>
    @if($selectedEmoji)
        <p>Selected Emoji: {{ $selectedEmoji }}</p>
    @endif
</div>
<a class="ml-3" style="cursor: pointer; text-decoration: none" onclick="toggleEmojiDiv(1)">
    <span id="emojiPlaceholder_1"><i class="far fa-smile"></i></span> Reaction
</a>

<div class="myEmojiDiv" id="myEmojiDiv_1" style="display: none;">
    <emoji-picker></emoji-picker>

                        </div>


                        <!-- <textarea style="background-color: red;height:20px;max-height:50px" id="mytextarea"></textarea> -->


                        <!-- Comment section -->
                        <div class="comment-section" style="margin-top:10px">

                            <form wire:submit.prevent="add_comment('{{ $data['employee']->emp_id }}')"
                                style="margin-left:13px; display:flex; margin-bottom: 15px;">
                                @csrf
                                <i class="comment-icon">💬</i>
                                <a href="#" onclick="comment(this); return false;"
                                    style="font-size: 14px; font-family: 'Open Sans', sans-serif;margin-left: 10px; ">comment</a>
                                <div class="replyDiv" style="margin-left: 20px; display: none;display:flex">

                                    <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description"
                                        style="height: 20px; width: 20px;margin-left:20px">
                                    <textarea wire:model="newComment" placeholder="Post comment something here"
                                        style="width: 210px; font-family: 'Open Sans', sans-serif; font-size: 12px;margin-left:20px"
                                        name="comment"></textarea>

                                    <br>
                                    <!-- Move the "Comment" button below the textarea -->
                                    <div>
                                        <input type="submit" class="btn btn-primary"
                                            style="text-align: center; line-height: 10px;font-size:12px;margin-left: 10px;"
                                            value="Comment" wire:target="add_comment">
                                    </div>
                                </div>
                            </form>


                            <!-- Display comments -->
                            @if($comment && count($comment) > 0)
                            @foreach ($comment as $singleComment)
                            @if ($singleComment->emp_id === $data['employee']->emp_id)
                            <div style="display: flex;margin-left:20px">
                                <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description"
                                    style="height: 25px; width: 20px;margin-left:20px">
                                <div class="comment"
                                    style="font-size: 14px; font-family: 'Open Sans', sans-serif;margin-left:20px; margin-bottom: 15px">
                                    <b
                                        style="font-size: 14px; font-family: 'Open Sans', sans-serif;">{{ $singleComment->first_name  }}{{ $singleComment->last_name  }}</b>
                                    <p style="font-size: 14px; font-family: 'Open Sans', sans-serif;">
                                        {{ $singleComment->comment }}</p>
                                    <a href="#" onclick="reply(this); return false;">Reply</a>
                                    <div class="replyDiv"
                                        style="display: none; font-family: 'Open Sans', sans-serif;">
                                        <textarea placeholder="write something here"
                                            style="width: 250px; font-family: 'Open Sans', sans-serif;"></textarea>
                                        <a href="#" class="btn btn-primary"
                                            style="margin-left: 10px; margin-top: -31px;; font-size: 14px;">Comment
                                        </a>
                                    </div>
                                    <!-- Additional HTML for reply functionality, etc. -->
                                </div>
                            </div>
                            @endif
                            @endforeach
                            @else
                            <p>No comments available.</p>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
                @elseif ($data['type'] === 'hire_date' )
                <div class="hire-card" style="position: relative;">
                    <!-- Upcoming Hire Dates List -->
                    <div class="F"
                        style="background-color:white; width: 500px; height: 350px; border-radius: 5px; border: 1px solid #CFCACA; margin-left:30px; color: #3b4452; margin-top:20px">
                        <div style="display:flex;">
                            <div class="column">
                                <div class="div" style="margin-left:20px;margin-top:10px">
                                    @livewire('company-logo')
                                </div>
                                <div
                                    style="color: #677A8E; margin-left: 60px; font-size: 14px; font-family: Open Sans, sans-serif; font-weight: 100px;margin-top:20px">
                                    Group Events</div>
                            </div>
                            <div class="c"
                                style="font-size: 13px; font-weight: normal; margin-left: 170px; font-family: Open Sans, sans-serif; margin-top: 40px; font-weight: 100px; color: #9E9696;font-weight: 100px;margin-top:20px">
                                {{ date('d M ', strtotime($data['employee']->hire_date)) }}
                            </div>
                        </div>
                        <div style="display: flex;">
                            <img src="{{ asset('images/New_team_members_gif.gif') }}"
                                alt="Image Description" style="height: 160px; width: 160px; margin-left: 40px;">
                            <div style="display: flex; flex-direction: column; margin-left: 20px;">
                                <p
                                    style="font-size: 14px; font-family: 'Open Sans', sans-serif; margin-top: 10px; font-weight: 100; color: #677A8E;">
                                    {{ $data['employee']->first_name }} {{ $data['employee']->last_name }} has joined us
                                    in the company on {{ date('d M Y', strtotime($data['employee']->hire_date)) }},
                                    Please join us in welcoming our newest team member.
                                </p>
                                <div style="display: flex; align-items: center;">
                                    <img src="https://logodix.com/logo/1984436.jpg" alt="Image Description"
                                        style="height: 25px; width: 20px;">
                                    <p
                                        style="margin-left: 10px; font-size: 14px; font-weight: normal; margin-top: 10px; font-family: 'Open Sans', sans-serif; color: black; margin-top: 10px;">
                                        {{ $data['employee']->first_name }} {{ $data['employee']->last_name }} Just
                                        Joined Us!
                                    </p>
                                </div>

                            </div>
                            <confirmation-modal class="confirmation-modal">
                                <gt-popup-modal label="modal" size="sm" class="hydrated">
                                    <div class="body-content">
                                        <div slot="modal-body">
                                            <!-- Content for modal body -->
                                        </div>
                                    </div>
                                    <div slot="modal-footer">
                                        <div class="flex justify-end">
                                            <gt-button shade="secondary" name="Cancel" class="mr-2x hydrated">
                                            </gt-button>
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

                        </div>
                    </div>
                </div>


                @endif
                @endforeach

            </div>

            <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script> -->
            <script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>



            <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('emoji-picker').forEach(function (picker, index) {
            picker.addEventListener('emoji', function (event) {
                var selectedEmoji = event.detail.emoji;

                // Update the content of the span with the selected emoji
                var emojiSpan = document.getElementById('emojiPlaceholder_' + index);
                emojiSpan.innerHTML = selectedEmoji;

                // Optionally, you can hide the emoji picker after selection
                var emojiDiv = document.getElementById('myEmojiDiv_' + index);
                emojiDiv.style.display = 'none';
            });
        });
    });

    function toggleEmojiDiv(index) {
        var div = document.getElementById('myEmojiDiv_' + index);
        if (div.style.display === 'none') {
            div.style.display = 'block';
        } else {
            div.style.display = 'none';
        }
    }
            document.querySelector('emoji-picker').addEventListener('emoji-click', event => console.log(event.detail));
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


            function reply(caller) {
                var replyDiv = $(caller).siblings('.replyDiv');
                $('.replyDiv').not(replyDiv).hide(); // Hide other replyDivs
                replyDiv.toggle(); // Toggle display of clicked replyDiv
            }

            function comment(caller) {
                var replyDiv = $(caller).siblings('.replyDiv');
                $('.replyDiv').not(replyDiv).hide(); // Hide other replyDivs
                replyDiv.toggle(); // Toggle display of clicked replyDiv
            }
            </script>


            <script>
            function react(reaction) {
                // Handle reaction logic here, you can send it to the server or perform any other action
                console.log('Reacted with: ' + reaction);
            }
            </script>
            <script type="text/javascript">
            $(document).ready(function() {
                console.log("Document ready!");

                var emojiArea = $('#reaction-textarea').emojioneArea({
                    pickerPosition: 'bottom'
                });

                $('#reaction-button').click(function() {
                    console.log("Reaction button clicked!");
                    $('#reaction-container').toggle();
                });
            });
            </script>
            <script>
            function addEmoji(emoji) {
                let inputEle = document.getElementById('input');

                input.value += emoji;
            }

            function toggleEmojiDrawer() {
                let drawer = document.getElementById('drawer');

                if (drawer.classList.contains('hidden')) {
                    drawer.classList.remove('hidden');
                } else {
                    drawer.classList.add('hidden');
                }
            }
            
            </script>
            <script>
            tinymce.init({
                height: 140,
                selector: "textarea#mytextarea",
                plugins: "emoticons",
                toolbar: "emoticons",
                toolbar_location: "bottom",
                menubar: false,
                setup: function(editor) {
                    editor.on('input', function() {
                        autoResizeTextarea();
                    });
                }
            });

            function autoResizeTextarea() {
                var textarea = document.getElementById('mytextarea');
                textarea.style.height = '140';
            }
            
            
            </script>