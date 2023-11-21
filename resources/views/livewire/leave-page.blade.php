<div>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }

        .nav-buttons {
            font-family: Montserrat;
            text-decoration: none;
            cursor: pointer;
            transition: color 0.3s;
        }

        .links:hover {
            color: blue;
        }

        .accordion {
            border: 0.0625rem solid #ccc;
            margin-bottom: 0.625rem;
            width: 90%;
            margin: 0 auto;
        }

        .accordion:hover {
            border: 0.0625rem solid #3a9efd;
        }

        .info-paragraph {
            display: none;
        }

        .accordion-heading {
            background-color: #fff;
            padding: 0.625rem;
            cursor: pointer;
        }

        .accordion-body {
            display: none;
            background-color: #fff;
            padding: 0.625rem;
        }

        .accordion-content {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .content {
            display: flex;
            justify-content: start;
            align-items: center;
            gap: 0.625rem;
            margin-bottom: 0.3125rem;
        }

        .accordion-title {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .active .container {
            border-color: #3a9efd;
            /* Blue border when active */
        }

        .accordion-button {
            color: #DCDCDC;
            border: 0.0625rem solid #DCDCDC;
        }

        .active .accordion-button {
            color: #3a9efd;
            border: 0.0625rem solid #3a9efd;
            /* Blue arrow when active */
        }

        .side {
            display: flex;
            font-size: 0.875rem;
            flex-direction: row;
            /* Change from 'row' to 'column' */
            width: 55%;
            padding: 5px;
            border-radius: 5px;
            justify-content: space-between;
            margin-left: 100px;
            margin-top: 15px;
        }


        .side a {
            text-decoration: none;
            color: #333;
            padding: 5px;
        }

        .side a.active {
            color: #3a9efd;

        }

        .line {
            height: 25px;
            width: 1px;
            border-right: 1px solid #ccc;
        }

        .withdraw {
            background: #3a9efd;
            border: none;
            padding: 5px 10px;
            color: white;
            font-weight: 500;
            border-radius: 5px;
        }
    </style>
    <div class="toggle-container" style=" width:95%;">
        <style>
            /* Define your custom CSS classes */
            .custom-nav-tabs {
                background-color: #f8f9fa;
                border-radius: 5px;
                display: flex;
                font-weight: 500;
                color: #778899;
                width: 80%;
                font-size: 0.825rem;
                /* Background color for the tabs */
            }

            .custom-nav-link {
                color: #333;
                /* Text color for inactive tabs */
            }

            .custom-nav-link.active {
                margin-top: 5px;
                color: white;
                background-color: #3a9efd;
                border-radius: 5px;
            }
        </style>
        @if(session()->has('message'))
        <div class="alert alert-success" style="display:flex; justify-content:space-between;">
            {{ session('message') }}
            <span class="close-btn" onclick="closeMessage()">X</span>
        </div>
        <script>
            // Close the success message after a certain time
            setTimeout(function() {
                closeMessage();
            }, 5000); // Adjust the time limit (in milliseconds) as needed

            function closeMessage() {
                document.querySelector('.alert-success').style.display = 'none';
            }
        </script>
        @endif

        <div class="nav-buttons" style="width: 50%; display:flex; align-items:center; margin-left:250px;">
            <ul class="nav custom-nav-tabs"> <!-- Apply the custom class to the nav -->
                <li class="nav-item flex-grow-1">
                    <a class="nav-link custom-nav-link active" data-section="personalDetails" onclick="toggleDetails('personalDetails', this)">Apply</a>
                </li>
                <li class="nav-item flex-grow-1">
                    <a class="nav-link custom-nav-link" data-section="accountDetails" onclick="toggleDetails('accountDetails', this)">Pending</a>
                </li>
                <li class="nav-item flex-grow-1">
                    <a class="nav-link custom-nav-link" data-section="familyDetails" onclick="toggleDetails('familyDetails', this)">History</a>
                </li>
            </ul>
        </div>


        <div class="side " id="cardElement">

            <div>

                <a onclick="toggleOptions('leave', this)" data-section="leave">Leave</a>

            </div>
            <div class="line"></div>
            <div>

                <a onclick="toggleOptions('restricted', this)" data-section="restricted">Restricted Holiday</a>

            </div>
            <div class="line"></div>
            <div>

                <a onclick="toggleOptions('leaveCancel', this)" data-section="leaveCancel">Leave Cancel</a>

            </div>
            <div class="line"></div>
            <div>

                <a onclick="toggleOptions('compOff', this)" data-section="compOff">Comp Off Grant</a>

            </div>

        </div>


        <div class="row" id="leave" style="width:85%; margin-top:20px;display: none; margin-left:100px;">

            <div>@livewire('leave-apply')</div>
        </div>

        <div class="row" id="restricted" style="width:80%;margin-top:20px;display: none; margin-left:100px;">
            <div>
                <div class="leave-pending" style=" background:#fff;  display:flex;  width:100%;flex-direction:column;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">
                    <div class="hide-info" style="display:flex; flex-direction:row;background:#FFFFF2;gap:50px; padding:5px 10px;font-size:0.725rem; text-align:start;align-items:center;">
                        <p style="font-size:0.725rem;">Restricted Holidays (RH) are a set of holidays allocated by the company that are optional for the employee to utilize. The company sets a limit on the amount of holidays that can be used.</p>
                        <p onclick="toggleInfo()" style="font-weight:500; color:#3a9efd;">Hide</p>
                    </div>
                    <div style="display:flex; justify-content:space-between;">
                        <p style="color:#333; font-size:0.95rem; font-weight:500;text-align:start; ">Applying for Restricted Holiday</p>
                        <p class="info-paragraph" style="font-weight:500; color:#3a9efd;font-size:0.825rem;" onclick="toggleInfo()">Info</p>
                    </div>
                    <img src="{{asset('/images/pending.png')}}" alt="Pending Image" style="width:40%; margin:0 auto;">
                    <p style="color:#778899; font-size:0.825rem; font-weight:500;  text-align:center;">You have no Restricted Holiday balance, as per our record.</p>
                </div>
            </div>
        </div>
        <div class="row" id="leaveCancel" style="width:80%;margin-top:20px;display: none; margin-left:100px;">

            <div>@livewire('leave-cancel')</div>
        </div>

        <div class="row" id="compOff" style="width:80%; margin-top:20px;display: none; margin-left:100px;">
            <div>
                <div>
                    <div class="leave-pending" style=" background:#fff;  display:flex;  width:100%;flex-direction:column;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">
                        <div class="hide-info" style="display:flex; flex-direction:row;background:#FFFFF2;gap:50px; padding:5px 10px;font-size:0.725rem; text-align:start;align-items:center;">
                            <p>Compensatory Off is additional leave granted as a compensation for working overtime or on an off day.</p>
                            <p onclick="toggleInfo()" style="font-weight:500; color:#3a9efd;">Hide</p>
                        </div>
                        <div style="display:flex; justify-content:space-between;">
                            <p style="color:#333; font-size:0.95rem; font-weight:500;text-align:start; ">Applying for Comp. Off Grant</p>
                            <p class="info-paragraph" style="font-weight:500; color:#3a9efd;" onclick="toggleInfo()">Info</p>
                        </div>
                        <img src="{{asset('/images/pending.png')}}" alt="Pending Image" style="width:40%; margin:0 auto;">
                        <p style="color:#778899; font-size:0.825rem; font-weight:500;  text-align:center;">You are not eligible to request for compensatory off grant. Please contact your HR for further information.</p>
                    </div>
                </div>
            </div>
        </div>


        {{-- Apply Tab --}}
        <div class="row" id="personalDetails" style=" margin-top:20px;display: none; margin-left:100px;">
            <div>@livewire('leave-apply')</div>
        </div>

        {{-- pending --}}
        <div class="row" style="margin-top:20px;border-radius: 5px;display: none;" id="accountDetails">

            @if($this->leavePending->isNotEmpty())

            @foreach($this->leavePending as $leaveRequest)

            <div class="container mt-4">

                <div class="accordion">

                    <div class="accordion-heading" onclick="toggleAccordion(this)">

                        <div class="accordion-title">

                            <!-- Display leave details here based on $leaveRequest -->

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Category</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">Leave</span>

                            </div>

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Leave Type</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->leave_type}}</span>

                            </div>

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">No. of Days</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">

                                    {{ $this->calculateNumberOfDays($leaveRequest->from_date, $leaveRequest->from_session, $leaveRequest->to_date, $leaveRequest->to_session) }}

                                </span>

                            </div>


                            <!-- Add other details based on your leave request structure -->

                            <div class="accordion-content">

                                <span style="margin-top:0.625rem; font-size: 1rem; font-weight: 400; color:#cf9b17;">{{ strtoupper($leaveRequest->status) }}</span>

                            </div>

                            <div class="accordion-button" style="margin-top: 0.625rem; font-size: 1rem;  height: 0.625rem; width: 0.625rem; border-radius: 50%; background: #fff;  display: flex; justify-content: center; align-items: center; ">

                                <!-- Down arrow character -->

                            </div>

                        </div>

                    </div>

                    <div class="accordion-body">

                        <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                        <div class="content">

                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Duration:</span>

                            <span style="font-size: 0.8125rem;">

                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_from_date }} </span>

                                ( {{ $leaveRequest->from_session }} )to

                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_to_date }}</span>

                                ( {{ $leaveRequest->to_session }} )

                            </span>

                        </div>

                        <div class="content">

                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Reason:</span>

                            <span style="font-size: 0.8125rem;">{{ $leaveRequest->reason }}</span>

                        </div>

                        <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                        <div style="display:flex; flex-direction:row; justify-content:space-between;">

                            <div class="content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 400;">Applied on:</span>

                                <span style="color: #333; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->created_at->format('d M, Y') }}</span>

                            </div>

                            <div class="content">

                                <a href="{{ route('leave-history', ['leaveRequestId' => $leaveRequest->id]) }}">

                                    <span style="color: #3a9efd; font-size: 0.875rem; font-weight: 500;">View Details</span>

                                </a>
                                <button class="withdraw" wire:click="cancelLeave({{ $leaveRequest->id }})">Withdraw</button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            @endforeach

            @else

            <div class="leave-pending" style="margin-top:30px; background:#fff; margin-left:120px; display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                <img src="{{asset('/images/pending.png')}}" alt="Pending Image" style="width:60%; margin:0 auto;">

                <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no pending records of any leave transaction</p>

            </div>

            @endif

        </div>



        {{-- history --}}

        <div class="row" style="margin-top:20px;border-radius: 5px;display: none;" id="familyDetails">
            @if($this->leaveRequests->isNotEmpty())

            @foreach($this->leaveRequests->whereIn('status', ['approved', 'rejected','Withdrawn']) as $leaveRequest)

            <div class="container mt-4">

                <div class="accordion">

                    <div class="accordion-heading" onclick="toggleAccordion(this)">

                        <div class="accordion-title">

                            <!-- Display leave details here based on $leaveRequest -->

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Category</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">Leave</span>

                            </div>

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Leave Type</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->leave_type}}</span>

                            </div>

                            <div class="accordion-content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">No. of Days</span>

                                <span style="color: #36454F; font-size: 1rem; font-weight: 500;">

                                    {{ $this->calculateNumberOfDays($leaveRequest->from_date, $leaveRequest->from_session, $leaveRequest->to_date, $leaveRequest->to_session) }}

                                </span>

                            </div>



                            <!-- Add other details based on your leave request structure -->



                            <div class="accordion-content">

                                @if(strtoupper($leaveRequest->status) == 'APPROVED')

                                <span style="margin-top:0.625rem; font-size: 0.9rem; font-weight: 500; color:#32CD32;">{{ strtoupper($leaveRequest->status) }}</span>

                                @elseif(strtoupper($leaveRequest->status) == 'REJECTED')

                                <span style="margin-top:0.625rem; font-size: 0.9rem; font-weight: 500; color:#FF0000;">{{ strtoupper($leaveRequest->status) }}</span>

                                @else

                                <span style="margin-top:0.625rem; font-size: 0.9rem; font-weight: 500; color:#778899;">{{ strtoupper($leaveRequest->status) }}</span>

                                @endif

                            </div>

                            <div class="accordion-button" style="margin-top: 0.625rem; font-size: 1rem;  height: 0.625rem; width: 0.625rem; border-radius: 50%; background: #fff;  display: flex; justify-content: center; align-items: center; ">

                                <!-- Down arrow character -->

                            </div>

                        </div>

                    </div>

                    <div class="accordion-body">

                        <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                        <div class="content">

                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Duration:</span>

                            <span style="font-size: 0.8125rem;">

                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_from_date }}</span>

                                ({{ $leaveRequest->from_session }} ) to

                                <span style="font-size: 0.8125rem; font-weight: 500;">{{ $leaveRequest->formatted_to_date }}</span>

                                ( {{ $leaveRequest->to_session }} )

                            </span>

                        </div>

                        <div class="content">

                            <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Reason:</span>

                            <span style="font-size: 0.8125rem;">{{ $leaveRequest->reason }}</span>

                        </div>

                        <div style="width:100%; height:1px; border-bottom:1px solid #ccc; margin-bottom:10px;"></div>

                        <div style="display:flex; flex-direction:row; justify-content:space-between;">

                            <div class="content">

                                <span style="color: #778899; font-size: 0.875rem; font-weight: 400;">Applied on:</span>

                                <span style="color: #333; font-size: 1rem; font-weight: 500;">{{ $leaveRequest->created_at->format('d M, Y') }}</span>

                            </div>

                            <div class="content">

                                <a href="{{ route('leave-pending', ['leaveRequestId' => $leaveRequest->id]) }}">
                                    <span style="color: #3a9efd; font-size: 0.875rem; font-weight: 500;">View Details</span>
                                </a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            @endforeach

            @else

            <div class="leave-pending" style="margin-top:30px; background:#fff; margin-left:120px; display:flex; width:75%;flex-direction:column; text-align:center;justify-content:center; border:1px solid #ccc; padding:20px;gap:10px;">

                <img src="{{asset('/images/pending.png')}}" alt="Pending Image" style="width:60%; margin:0 auto;">

                <p style="color:#969ea9; font-size:13px; font-weight:400; ">There are no history records of any leave transaction</p>

            </div>

            @endif

        </div>

    </div>
</div>



<script>
    function toggleInfo() {
        const hideInfoDiv = document.querySelector('.hide-info');
        const infoParagraph = document.querySelector('.info-paragraph');

        hideInfoDiv.style.display = (hideInfoDiv.style.display === 'none' || hideInfoDiv.style.display === '') ? 'flex' : 'none';
        infoParagraph.style.display = (infoParagraph.style.display === 'none' || infoParagraph.style.display === '') ? 'block' : 'none';
    }

    function toggleDetails(sectionId, clickedLink) {
        const tabs = ['leave', 'accountDetails', 'familyDetails'];

        const links = document.querySelectorAll('.custom-nav-link');
        links.forEach(link => link.classList.remove('active'));

        clickedLink.classList.add('active');

        tabs.forEach(tab => {
            const tabElement = document.getElementById(tab);
            if (tab === sectionId) {
                tabElement.style.display = 'block';
            } else {
                tabElement.style.display = 'none';
            }
        });
        // Hide the content of other containers
        const otherContainers = ['restricted', 'leaveCancel', 'compOff'];
        otherContainers.forEach(container => {
            const containerElement = document.getElementById(container);
            containerElement.style.display = 'none';
        });
        // Hide the 'side' container when 'pending' or 'history' is clicked
        const sideContainer = document.getElementById('cardElement');
        if (sectionId === 'accountDetails' || sectionId === 'familyDetails') {
            sideContainer.style.display = 'none';
        } else {
            sideContainer.style.display = 'block';
        }
    }



    function toggleAccordion(element) {

        const accordionBody = element.nextElementSibling;

        if (accordionBody.style.display === 'block') {

            accordionBody.style.display = 'none';

            element.classList.remove('active'); // Remove active class

        } else {

            accordionBody.style.display = 'block';

            element.classList.add('active'); // Add active class

        }
    }

    function toggleOptions(sectionId, clickedLink) {
        const tabs = ['leave', 'restricted', 'leaveCancel', 'compOff'];

        const links = document.querySelectorAll('.side a');
        links.forEach(link => link.classList.remove('active'));

        clickedLink.classList.add('active');

        tabs.forEach(tab => {
            const tabElement = document.getElementById(tab);
            if (tab === sectionId) {
                tabElement.style.display = 'block';
            } else {
                tabElement.style.display = 'none';
            }
        });

        // Hide the content of other containers
        const otherContainers = ['accountDetails', 'familyDetails'];
        otherContainers.forEach(container => {
            const containerElement = document.getElementById(container);
            containerElement.style.display = 'none';
        });
    }
</script>