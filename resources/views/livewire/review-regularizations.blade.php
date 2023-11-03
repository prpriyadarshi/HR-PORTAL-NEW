<div>
    <!DOCTYPE html>

    <html>

    <head>

        <style>
            .container {

                font-family: Montserrat;

            }



            .card {

                height: 189px;

                width: 582px;

            }



            .name {

                margin-left: 190px;

                margin-top: -19px;

                font-size: 15px;

            }



            .text-secondary {

                margin-top: 15px;

                font-size: 13px;

                margin-left: 10px;

            }



            .card1 {

                background-color: #ffffe8;

                height: 85px;

                width: 320px;

                margin-top: 7px;

                margin-left: 19px;

            }



            .card2 {

                height: 304px;

                width: 661px;

                background-color: white;

                font-size: 13px;

                border-collapse: separate;

                border-spacing: 2px;

                margin-top: 53px;

            }



            .card3 {

                height: 265px;

                width: 290px;

                background-color: white;

                margin-left: 597px;

                margin-top: -592px;

            }

            .avatar-initials {

                width: 33px;

                height: 33px;

                background-color: #ED7D31;

                color: #fff;

                text-align: center;

                line-height: 32px;

                font-size: 14px;

                border-radius: 50%;

                margin-left: 26px;

            }

            .item-name,
            .item-status {

                font-size: 0.875rem;

                line-height: 1.25rem;

                --tw-text-opacity: 1;

                color: rgba(57, 70, 87, var(--tw-text-opacity));

                margin-left: 74px;

                margin-top: -28px;

            }

            .item-date {

                font-size: 0.75rem;

                line-height: 2;

                margin-left: 77px;

            }

            .avatar-initials1 {

                width: 33px;

                height: 33px;

                background-color: #48D1CC;

                color: #fff;

                text-align: center;

                line-height: 32px;

                font-size: 14px;

                border-radius: 50%;

                margin-left: 20px;

                margin-top: 18px;

            }

            .item-name1,
            .item-status {

                font-size: 0.875rem;

                line-height: 1.25rem;

                --tw-text-opacity: 1;

                color: rgba(57, 70, 87, var(--tw-text-opacity));

                margin-left: 65px;

                margin-top: -28px;

            }

            .item-date1 {

                font-size: 0.75rem;

                line-height: 2;

                margin-left: 73px;

                margin-top: -15px;

            }

            .avatar-initials2 {

                width: 33px;

                height: 33px;

                background-color: #007bff;

                color: #fff;

                text-align: center;

                line-height: 32px;

                font-size: 14px;

                border-radius: 50%;

                margin-left: 24px;

                margin-top: 8px;

            }

            .svg-line {

                /* Set the width and height of the SVG */

                width: 2px;

                height: 40px;

                margin-left: 36px;

            }



            .connector {

                /* Style the line element within the SVG */

                stroke: blue;
                /* Change the line color to blue */

                stroke-width: 2px;
                /* Set the line width */



            }

            .svg-line1 {

                /* Set the width and height of the SVG */

                width: 2px;

                height: 40px;

                margin-left: -169px;

            }

            .svg-line2 {

                /* Set the width and height of the SVG */

                width: 2px;

                height: 40px;

                margin-left: -80px;

            }
        </style>

    </head>



    <body>

        <div class="container">

            <h1 style="font-size:18px;">Review Regularizations</h1>



            <div class="card">

                @foreach($reviews1 as $review)

                <span class="text-secondary">{{ $review->applied_by }}</span>

                <span class="name">{{ $review->name }}</span>

                <p style="margin-top: -20px; margin-left: 461px; font-size: 14px;">{{ $review->closed}}</p>

                <hr class="line" style="border: none; margin: 4px 0; height: 1px; background-color: black;">

                <div class="card1">

                    <span style="margin-left: 28px; font-size: 13px; margin-top: -10px;">Remarks</span><br>

                    <span style="margin-left: 49px; font-size: 13px;">{{ $review->remarks }}</span>

                    <div style="margin-left: 148px; font-size: 13px; margin-top: -44px;">No of days</div>

                    <div style="margin-left: 187px; font-size: 13px; margin-top: 4px;">{{ $review->no_of_days }}</div>

                </div>

            </div>



            <br><br>

            <div class="card2">

                <div ref="agLabel" class="ag-header-group-text" role="presentation" style="margin-bottom:12px;font-size:15px;     margin-left: 175px;">Dates applied for regularization</div>

                <table>

                    <thead style="background-color: #89CFF0; ">

                        <tr>

                            <th style="margin-left:1px">Date</th>

                            <th>Approve/Reject</th>

                            <th>Approve Remarks</th>

                            <th>Shift</th>

                            <th>First In Time</th>

                            <th>Last Out Time</th>

                            <th>Reason</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>{{ $review->date }}</td>

                            <td>{{ $review->approve_reject }}</td>

                            <td>{{ $review->approve_remarks}}</td>

                            <td>{{ $review->shift }}</td>

                            <td>{{ $review->first_in_time }}</td>

                            <td>{{ $review->last_out_time }}</td>

                            <td>{{ $review->reason }}</td>

                        </tr>

                        <tr>

                            <td>{{ $review->date }}</td>

                            <td>{{ $review->approve_reject }}</td>

                            <td>{{ $review->approve_remarks}}</td>

                            <td>{{ $review->shift }}</td>

                            <td>{{ $review->first_in_time }}</td>

                            <td>{{ $review->last_out_time }}</td>

                            <td>{{ $review->reason }}</td>

                        </tr>



                    </tbody>

                </table>


            </div>

            <div class="card3">



                <!-- <h2 style="font-size: 0.875rem; margin-left:16px;">Confirmation Timeline</h2> -->

                <h2 style="font-size:16px; margin-left:16px; margin-top :4px;">Application Timeline</h2>

                <div part="initials" class="avatar-initials">A</div>

                <div class="item-name">Accept</div>

                <span class="item-status">{{ $review->accept}}</span>

                <span class="item-date"> {{ $review->accept_date}}<span class="item-time"> {{ $review->accept_time}}</span></span>



                <svg class="svg-line1" id="svg_0" width="2" height="108">

                    <line class="connector" id="line_0" x1="0" x2="0" y1="25" y2="133"></line>

                </svg>

                <div part="initials" class="avatar-initials1">S</div>

                <p class="item-name" style="margin-top:-27px;">Submitted</p>

                <div class="item-date1">{{ $review->submitted_date}}<span class="item-time1" style="margin-top:10px;">{{ $review->submitted_time}}</span></div>

                @endforeach



    </body>

    </html>
</div>