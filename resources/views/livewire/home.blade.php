<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap">
    <script src="{{ asset('livewire/livewire.js') }}" defer></script>
    <style>
        body{
            font-family: 'Montserrat', sans-serif;
        }
        .left-menu {
            width: 150px;
            font-family: 'Montserrat', sans-serif;
            background-color: #f0f0f0;
            padding: auto 30px;
 
            /* Add a vertical line to the right of the left menu */
        }
        .left-menu h2 {
            font-family: 'Montserrat', sans-serif;
        }
 
        table {
            border-collapse: collapse;
            width: 100%;
        }
 
        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
 
 
        th {
            background-color: #f2f2f2;
        }
 
        .greet {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            tab-size: 4;
            -webkit-text-size-adjust: 100%;
            visibility: inherit;
            font-family: Open Sans, sans-serif;
            font-size: 14px;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            box-sizing: border-box;
            border: 0 solid;
            --tw-shadow: 0 0 transparent;
            --tw-ring-inset: var(--tw-empty, );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 transparent;
            --tw-ring-shadow: 0 0 transparent;
        }
 
        .banner-ad {
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
            tab-size: 4;
            -webkit-text-size-adjust: 100%;
            visibility: inherit;
            font-family: Open Sans, sans-serif;
            font-weight: 400;
            font-style: normal;
            font-stretch: normal;
            letter-spacing: normal;
            text-align: left;
            box-sizing: border-box;
            border: 0 solid;
            --tw-shadow: 0 0 transparent;
            --tw-ring-inset: var(--tw-empty, );
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgba(59, 130, 246, 0.5);
            --tw-ring-offset-shadow: 0 0 transparent;
            --tw-ring-shadow: 0 0 transparent;
            font-size: 1rem;
            line-height: 1.5rem;
            max-width: 32rem;
            --tw-text-opacity: 1;
            color: rgba(103, 122, 142, var(--tw-text-opacity));
        }
 
 
        @keyframes mergeAndJumble {
            0% {
                transform: translate(0, 0);
            }
 
            25% {
                transform: translate(100px, 0);
            }
 
            50% {
                transform: translate(100px, 100px);
            }
 
            75% {
                transform: translate(0, 100px);
            }
 
            100% {
                transform: translate(0, 0);
            }
        }
 
        .animate {
            animation: mergeAndJumble 0.3s forwards;
        }
 
        .animate {
            animation: mergeAndJumble 0.3s forwards;
        }
        .notify{
            display:flex;
            justify-content:space-between;
            padding:5px 10px;
            align-items:center;
        }
       
        .home-hover {
    transition: transform 0.3s ease, background-color 0.3s ease, box-shadow 0.3s ease;
    border-radius:5px;
    }
 
    .home-hover:hover {
        transform: scale(1.01);
        cursor: pointer;
        background-color: #fff;
        box-shadow: 1px 2px rgba(0, 0, 0, 0.2);
    }
    .leave-display{
        padding: 5px 10px;
        display: flex;
        flex-direction:row;
        align-items: center;
        white-space: nowrap;
        overflow: hidden;
        background:#fafafa;
        text-overflow: ellipsis;
        border-top:1px solid #ccc;
        font-size: 12px;
        gap:15px;
    }
    </style>
</head>
<body>
    <div class="container">
    @if (session()->has('success'))
 
        <div class="custom-alert alert-success" style="text-align: center;margin-left:50%;width: 500px;">
            {{ session('success') }}
        </div>
        <script>
            setTimeout(function() {
                const successMessage = document.querySelector('.custom-alert');
                if (successMessage) {
                    successMessage.style.display = 'none';
                }
            }, 5000);
        </script>
        @endif
 
 
        <div class="left-menu">
 
            <h2>Home</h2>
            <!-- Add your menu items here -->
        </div>
 
    </div>
    <div class="content">
            <div style="display:flex; padding:10px 20px;">
                <div>
                    <div class="greet">
                        <h1 class="text-secondary-500 pb-1.5x" id="greetingText" style="font-size: 24px; font-family: montserrat;width:45%">Good Evening</h1>
                    </div>
                    <div class="banner-ad text-base max-w-lg text-secondary-400" >
                        <carousel class="ng-star-inserted" style="width:470px">
                            <!-- Carousel content goes here -->
                        </carousel>
                        <div class="quote-text">
                            <!-- Quote text will be dynamically inserted here -->
                        </div>
                        <div class="author-text">
                            <!-- Author text will be dynamically inserted here -->
                        </div>
                        <div class="watch-video">
                            <p>Watch the video to understand your new Employee Self Service portal quickly.</p>
                            <a href="https://greytip-2.wistia.com/medias/vbxdhiqvk6" class="text-primary-400 pt-1x cursor-pointer text-sm font-semibold pb-2x inline-block">Watch Video</a>
                        </div>
                    </div>
                </div>
                <img id="greeting-image" src="" alt="Greeting Image" style="height: 200px; width:300px ;margin-left:50px; ">
            </div>
 <!-- main content -->
            <div class="container" style="display:flex; flex-direction:row; gap:5px; padding:10px 5px;">
                    <div class="first-col col-md-4" style=" padding:0;  display:flex; flex-direction:column;gap:5px;" >
                        <div class="home-hover">
                               <div class="reviews">
                                  <div style="border-radius: 5px; border: 1px solid #CFCACA;  background-color: white;">
                                    <div class="heading" style="display:flex; justify-content:space-between;padding:5px 10px;">
                                       <div style="color: #677A8E;font-weight:500;">
                                            Review
                                        </div>
                                        <div >
                                          <i class="fa fa-long-arrow-right" aria-hidden="true" style="color: #bbbbba;"></i>
                                        </div>
                                    </div>
                                    @if(($this->count) > 0)
                                          <div class="notify">
                                                <p style="color: black; font-size: 1.2rem; font-weight: 500;">
                                                    {{$count}} <br>
                                                    <span style="color: #778899; font-size: 0.875rem; font-weight: 500;">Things to review</span>
                                                </p>
                                                <img src="https://png.pngtree.com/png-vector/20190214/ourlarge/pngtree-vector-notes-icon-png-image_509622.jpg" alt="" style="height: 50px; width: 50px;">
                                            </div>
                                            <div class="leave-display" >
                                                @for ($i = 0; $i < min($count, 2); $i++)
                                                    <div class="circle-notify" style="margin-right: 5px; display:flex; flex-direction:column;">
                                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDDbrRPghufD20Fgaa0IFT62n3vLc5lI5B_w&usqp=CAU" alt="" style="height: 40px; width: 40px; border-radius: 50%; border:2px solid #D9D9D9;"><span>Leave</span>
                                                    </div>
                                                 
                                                @endfor
                                                @if ($count > 2)
                                                    <div class="circle-notify" style="color:blue;cursor:pointer;font-size:0.925rem;">
                                                        +{{ $count - 2 }}
                                                    </div>
                                                @endif
                                            </div>
 
                                        @else
                                           <img src="https://ftl.technology/images/theme-pics/case.png" alt="Image Description" style="height: 100px; width: 100px; margin-top: 10px; margin-left: 80px;">
                                            <p style="color: #677A8E; margin-left: 50px; font-size: 14px; ">
                                                Hurrah! You've nothing to review.
                                            </p>
                                        @endif
                                    </div>
                                </div>
                        </div>
                        <div class="home-hover">
                            <div style="border-radius: 5px; border: 1px solid #CFCACA;background-color: white;">
                                  <div style="color: #677A8E; margin-left: 20px;font-weight:500; margin-top:10px;">
                                                IT Declaration
                                            </div>
                                            <div style="display: flex;">
                                                <img src="https://th.bing.com/th/id/OIP.ISoRyxX3652noSb_DpscdAHaHa?pid=ImgDet&rs=1" alt="Image Description" style="height: 60px; width: 60px; margin-top: 20px; margin-left: 20px;">
                                                <div class="B" style="color:  #677A8E; margin-left: 20px;  font-size: 14px;margin-top:10px">
                                                    <br>Hurrah! Considered your IT declaration for Apr 2023.</br>
                                                    <a href="/formdeclaration" class="button-link">
                                                        <button class="custom-button view-button" style="width:60px;border:1px solid blue;border-radius:5px;margin-bottom:10px;margin-left:120px;color:blue;background:#fff;margin-top:10px;">View</button>
                                                    </a>    
                                                </div>      
                                             </div>                                
                                        </div>
                                    </div>
                            <div class="home-hover">
                                   <div style=" border-radius: 5px; border: 1px solid #CFCACA; background-color: white;">
                                                <div style="color: #677A8E;font-weight:500; margin-left: 20px;  margin-top: 20px;">
                                                    POI
                                                </div>
                                                <div style="display:flex; margin-top: 20px;"> <!-- Added margin-top here -->
                                                    <img src="https://th.bing.com/th/id/OIP.So8FF1OSJHwqUi-IcIgQIgAAAA?pid=ImgDet&w=104&h=109&c=7&dpr=1.5" alt="Image Description" style="height: 30px; width: 30px; margin-top: 10px; margin-left: 20px;">
                                                    <p style="color: #677A8E; margin-left: 20px; font-size: 14px;">Hold on! You can submit your Proof of Investments (POI) once released.</p>
                                                </div>
                                    </div>
                              </div>
                        </div>
                        <!-- second column -->
                    <div class="first-col col-md-4" style=" padding:0; display:flex; flex-direction:column;gap:5px;">
                        <div class="home-hover">
                           <div style=" border-radius: 5px; border: 1px solid #CFCACA;  background-color: #EDF3FF;">
                                    <div style="color: black; padding:10px 15px;">
                                        <p style="font-weight: normal;">{{$currentDate}}</p>
                                        <p style="margin-top: 10px; color: #9E9696; font-size: 12px;">{{$currentDay}} | 10:00 AM to 07:00 PM</p>
                                        <div style=" font-size: 14px;" id="current-time">15 : 19 : 00</div>
                                        <script>
                                            function updateTime() {
                                                const currentTimeElement = document.getElementById('current-time');
                                                const now = new Date();
                                                const hours = String(now.getHours()).padStart(2, '0');
                                                const minutes = String(now.getMinutes()).padStart(2, '0');
                                                const seconds = String(now.getSeconds()).padStart(2, '0');
                                                const currentTime = `${hours} : ${minutes} : ${seconds}`;
                                                currentTimeElement.textContent = currentTime;
                                            }
                                            updateTime();
                                            setInterval(updateTime, 1000);
                                        </script>
                                        <div class="A" style="display: flex;flex-direction:row;justify-content:space-between; align-items:center;margin-top:10px;">
                                            <a style="width:40%;font-size:0.855rem;cursor: pointer;color:blue" wire:click="open">View Swipes</a>
                                            @if ($showAlertDialog)
                                            <div class="modal" tabindex="-1" role="dialog" style="display: block;">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                                                            <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>Swipes</b></h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="close">
                                                                <span aria-hidden="true" style="color: white;">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col" style="font-size: 10px;">Date : <b>{{$currentDate}}</b></div>
                                                                <div class="col" style="font-size: 10px;">Shift Time : <b>10:00 to 19:00</b></div>
                                                            </div>
                                                            <table border="1" style="margin-top: 10px;">
                                                                <tr>
                                                                    <th style="font-size: 12px; color: grey;">Swipe Time</th>
                                                                    <th style="font-size: 12px; color: grey">Sign-In / Sign-Out</th>
                                                                </tr>
 
                                                                @if (!is_null($swipeDetails) && $swipeDetails->count() > 0)
                                                                @foreach ($swipeDetails as $swipe)
                                                                <tr>
                                                                    <td style="font-size: 10px; color: black;">{{ $swipe->swipe_time }}</td>
                                                                    <td style="font-size: 10px; color: black;">{{ $swipe->in_or_out }}</td>
                                                                </tr>
                                                                @endforeach
                                                                @else
                                                                <tr>
                                                                    <td colspan="2">No swipe records found for today.</td>
                                                                </tr>
                                                                @endif
 
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-backdrop fade show blurred-backdrop"></div>
                                            @endif
                                            <button id="signButton" style="color: white; width: 80px; height: 30px; background-color: rgb(2, 17, 79); border: 1px solid #CFCACA; border-radius: 5px; " wire:click="toggleSignState">
                                                @if ($signIn)
                                                Sign In
                                                @else
                                                Sign Out
                                                @endif
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="home-hover">
                          @forelse($salaryRevision as $salaries)
                             <div style="border-radius: 5px; border: 1px solid #CFCACA;background-color:white">
                                            <div style="color: #677A8E; margin-left: 10px; font-weight:500; margin-top: 20px;">
                                                Payslip
                                                <a href="/slip" style="font-size:16px; margin-left: 180px;">&rarr;</a>
                                            </div>
 
                                            <div style="display:flex">
                                                <img src="https://www.litmus.com/wp-content/uploads/2021/03/Dark-vs-Light-Mode-Poll-Results-300x300.png" alt="Image Description" style="height: 110px; width: 130px; margin-top: 20px; margin-left: 20px;">
                                                <div class="c" style="font-size: 13px; font-weight: normal; margin-left: 60px;margin-top: 30px; font-weight: 100; color: #9E9696">
                                                    <br>{{ date('M Y', strtotime('-1 month')) }}</br>
                                                    <br>{{ date('t', strtotime('-1 month')) }}</br>
                                                    <br>Paid Days</br>
                                                </div>
 
                                            </div>
 
                                            <div style="display:flex ;color: #677A8E; margin-left: 20px; font-size: 14px;  font-weight:100px;margin-top:-2px">
                                                <br style="margin-top:-10px">Gross Pay</br>
                                                <br>Deduction</br>
                                                <br>Net Pay</br>
 
                                                <div style="margin-left:120px;margin-top:22px">
                                                    <p>₹{{$salaries->calculateTotalAllowance(), 2}}</p>
                                                    <p>₹{{$salaries->calculateTotalDeductions(), 2}}</p>
                                                    @if ($salaries->calculateTotalAllowance() - $salaries->calculateTotalDeductions() > 0)
                                                    <p style="margin-top:5px"> ₹{{ number_format($salaries->calculateTotalAllowance() - $salaries->calculateTotalDeductions(), 2) }}</p>
                                                    @endif
 
                                                </div>
                                            </div>
                                            <div class="column" style="display: flex; color: #1090D8; margin-left: 20px; font-size: 14px;  margin-top: 20px; font-weight: 100;">
 
                                                <a href="/your-download-route" id="pdfLink2023_4" class="pdf-download" download style="margin-left: 10px; display: inline-block;">Download PDF</a>
                                                <p style="margin-left: 80px;">Show Salary</p>
                                            </div>
 
                                        </div>
                                        @empty
                                            <div style="border-radius: 5px; border: 1px solid #CFCACA;background-color:white;">
                                            <div style="color: #677A8E;font-weight:500; margin-left: 10px;  margin-top: 10px;">
                                                Payslip
                                                <a href="/slip" style="font-size:16px; margin-left: 180px;">&rarr;</a>
                                                <div style="display:flex;align-items:center;flex-direction:column;">
                                                     <img src="https://cdn3.iconfinder.com/data/icons/human-resources-70/133/9-512.png" alt="" style="height:75px;width:75px;">
                                                    <p style="color: #677A8E;  margin-bottom: 20px; font-size:0.875rem;"> We are working on your payslip!</p>
                                                </div>
                                            </div>
                                               
                                            </div>
                                        @endforelse
                                     </div>
                          </div>
                    <!-- third column -->
                    <div class="first-col col-md-4" style=" padding:0; display:flex; flex-direction:column;gap:5px;">
                        <div class="home-hover">
                          <div style="border-radius: 5px; border: 1px solid #CFCACA; background-color: white;padding:10px 15px;">
                                    <div style="display:flex; justify-content:space-between;" >
                                         <p style="color: #677A8E;font-weight:500;">Upcoming Holidays</p>
                                        <a href="/holiday-calender" style="font-size: 14px;  text-decoration: none; height: 20px; color: black">&rarr;</a>
                                    </div>
                                    @foreach ($calendarData as $entry)
                                    <div>
                                        <p style="color: #677A8E;  font-size: 14px;  ">
                                            {{ date('d M l', strtotime($entry->date)) }}<br>
                                            <span style="font-size: 12px;">{{ $entry->festivals }}</span>
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                        </div>
                        <div class="home-hover">
                                <div style="border-radius: 5px; border: 1px solid #CFCACA; background-color: white;">
                                    <div style="color: #677A8E; font-weight:500; margin-left: 10px; margin-top:10px;">
                                        Quick Access
                                    </div>
                                    <div  style="display: flex; justify-content: space-between; position: relative;">
                                        <div class="col-md-7" style="color: black;  font-size: 12px;font-family: montserrat; ">
                                            <br>Reimbursement</br>
                                            <br>IT Statement</br>
                                            <br>YTD Reports</br>
                                            <br>Loan Statement</br>
                                        </div>
                                        <div class="col-md-5" style="background-color: #FFF8F0; padding: 5px 10px; border-radius: 5px; font-size: 0.625rem; font-family: montserrat; position: absolute; bottom: 0; right: 0; height:120px;">
                                            <p style="margin: 0;">Use quick access to view important salary details.</p>
                                        </div>
                                    </div>
                                </div>
                         </div>
                        <div class="home-hover">
                            <div style=" border-radius: 5px; border: 1px solid #CFCACA; background-color: white;">
                                                    <div style="color: #677A8E;font-weight:500; margin-left: 20px;  margin-top: 20px;">
                                                        Track
                                                    </div>
 
                                                    <div>
                                                        <img src="https://resumekit.com/blog/wp-content/uploads/2023/02/Optimal-outline-for-a-cover-letter-2-1.png" alt="Image Description" style="height: 100px; width: 160px; margin-top: 20px; margin-left: 80px;">
                                                        <div class="B" style="color: black; margin-left: 20px;  font-size: 14px;">
                                                            <p style="color: #677A8E; margin-left: 20px;  margin-top: 20px;">All good! You've nothing new to track.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                </div>
                    </div>
            </div>
</body>
</html>
</div>
<script>
    // Get the current hour of the day (0-23)
    const currentHour = new Date().getHours();
 
    // Get the greeting element by its ID
    const greetingElement = document.getElementById('greetingText');
 
    // Define an array of greetings based on the time of day
    const greetings = [
        'Good Morning',
        'Good Afternoon',
        'Good Evening',
        'Good Night'
    ];
 
    // Determine the appropriate greeting based on the time of day
    let greeting;
    if (currentHour >= 5 && currentHour < 12) {
        greeting = greetings[0]; // Morning
    } else if (currentHour >= 12 && currentHour < 17) {
        greeting = greetings[1]; // Afternoon
    } else if (currentHour >= 17 && currentHour < 20) {
        greeting = greetings[2]; // Evening
    } else {
        greeting = greetings[3]; // Night
    }
 
    // Update the greeting text
    greetingElement.textContent = greeting;
</script>
<script>
    // Function to change the quote text
    function changeQuote() {
        const quotes = [{
                text: "Life is 10% what happens to us and 90% how we react to it.",
                author: "Dennis P. Kimbro"
            },
            {
                text: "Your new Employee Self Service portal is here. Watch the video to learn more.",
                author: "Anonymous"
            },
            {
                text: "Things usually work out in the end. What if they don't? That just means you haven't come to the end yet.",
                author: "Jeanette Walls"
            }
            // Add more quotes here as needed
        ];
 
        const quoteElement = document.querySelector('.quote-text');
        const authorElement = document.querySelector('.author-text');
        const randomIndex = Math.floor(Math.random() * quotes.length);
        const randomQuote = quotes[randomIndex];
 
        quoteElement.textContent = randomQuote.text;
        authorElement.textContent = `- ${randomQuote.author}`;
    }
 
    // Call the function to initially set the quote
    changeQuote();
 
    // Set an interval to change the quote every 5 seconds (5000 milliseconds)
    setInterval(changeQuote, 5000);
</script>
 
<script>
    // Function to change the greeting image
    function changeGreetingImage() {
        const date = new Date();
        const hours = date.getHours();
        const imageElement = document.getElementById('greeting-image');
 
        if (hours >= 4 && hours < 12) {
            // Morning (4 AM to 11:59 AM)
            imageElement.src = 'https://th.bing.com/th/id/OIP.mti7ag1l4Xc_3OSA4b5mAgHaGC?w=224&h=183&c=7&r=0&o=5&dpr=1.5&pid=1.7';
        } else if (hours >= 12 && hours < 17) {
            // Afternoon (12 PM to 4:59 PM)
            imageElement.src = 'https://cdn.dribbble.com/users/35381/screenshots/1928915/media/e5dd9341fce5ae6146dceb9cc485e611.png?compress=1&resize=768x576&vertical=top';
        } else if (hours >= 17 && hours < 20) {
            // Evening (5 PM to 7:59 PM)
            imageElement.src = 'https://th.bing.com/th/id/OIP.zrIB4aYbzyMpxTTIbeUPUQHaFP?w=209&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7';
        } else {
            // Night (8 PM to 3:59 AM)
            imageElement.src = 'https://th.bing.com/th/id/OIP.eD11lmjV2NG7K0QwKoD-WQHaE8?w=268&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7';
        }
    }
 
    // Call the function to initially set the greeting image
    changeGreetingImage();
 
    // Set an interval to change the greeting image every 1 hour (3600000 milliseconds)
    setInterval(changeGreetingImage, 3600000);
    const containers = document.querySelectorAll('.container');
 
    function startAnimation() {
        // Add a class to trigger the animation
        containers.forEach(container => container.classList.add('animate'));
 
        // After animation, reset the positions (adjust the timeout based on animation duration)
        setTimeout(() => {
            containers.forEach(container => container.style.transform = 'translate(0, 0)');
        }, 4000);
    }
 
    // Start animation when the page loads
    window.addEventListener('load', startAnimation);
</script>