<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Leave Details</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <style>
            .main-container {
                display: flex;
                flex-direction: column;
                width: 100%;
                gap: 10px;
                padding: 5px;
                background-color: none;
            }

            .approved-leave {
                display: flex;
                flex-direction: row;
                width: 100%;
                gap: 10px;
                padding: 5px;
                background-color: none;
            }

            .heading {
                flex: 8;
                /* Adjust the flex value to control the size of the heading container */
                padding: 20px;
                width: 100%;
                background: #fff;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            .side-container {
                flex: 4;
                /* Adjust the flex value to control the size of the side container */
                background-color: #fff;
                text-align: center;
                padding: 20px;
                height: 230px;
                border-radius: 5px;
                border: 1px solid #dcdcdc;
            }

            .view-container {
                border: 1px solid #ccc;
                background: #ffffe8;
                display: flex;
                width: 55%;
                padding: 5px 10px;
                border-radius: 5px;
                height: auto;
            }

            .middle-container {
                background: #fff;
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                margin: 0.975rem auto;
            }

            .custom-table {
                width: 100%;
                border-collapse: collapse;
                font-size: 13px;
                margin-top: 20px;


            }

            .custom-table th,
            .custom-table td {
                border: 1px solid #ccc;
                padding: 8px;
            }

            .custom-table th {
                background-color: #89CFF0;
            }

            .container {
                background-color: white;
                width: 79%;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-top: 20px;
                text-align: left;
                float: left;
                height: 282px
            }


            .review {
                display: flex;
                justify-content: start;
                flex-direction: column;
            }

            .pay-bal {
                display: flex;
                gap: 10px;
            }

            .details {

                line-height: 2;
            }

            .details p {
                margin: 0;
            }

            .vertical-line {
                width: 1px;
                /* Width of the vertical line */
                height: 70px;
                /* Height of the vertical line */
                background-color: #ccc;
                margin-left: -10px;
                /* Color of the vertical line */
            }


            .group h6 {
                font-weight: 600;
                font-size: 0.875rem;
            }

            .group h5 {
                font-weight: 400;
                font-size: 1rem;
                white-space: nowrap;
                /* Prevent text from wrapping */
                overflow: hidden;
                /* Hide overflowing text */
                text-overflow: ellipsis;
                margin-top: 0.975rem;
            }

            .group {
                margin-left: 10px;
            }

            .data {
                display: flex;
                flex-direction: column;

            }

            .cirlce {
                height: 0.75rem;
                width: 0.75rem;
                background: #778899;
                border-radius: 50%;
            }

            .v-line {
                height: 100px;
                width: 0.5px;
                background: #778899;
                border-right: 1px solid #778899;
                margin-left: 5px;
            }

            .leave {
                display: flex;
                flex-direction: row;
                gap: 50px;
                background: #fff;
                border-bottom: 1px solid #ccc;
                padding-bottom: 10px;
            }

            @media screen and (max-width: 1060px) {
                .detail-container {
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                }

                .heading {
                    flex: 1;
                    /* Change the flex value for the heading container */
                    padding: 10px;
                    /* Modify padding as needed */
                    width: 100%;
                }

                .side-container {
                    flex: 1;
                    /* Change the flex value for the side container */
                    padding: 10px;
                    /* Modify padding as needed */
                    height: auto;
                    width: 100%;
                    /* Allow the height to adjust based on content */
                }
            }
        </style>
    </head>

    <body>
        <div class="main-container ">
            <div style="font-size: 1rem; font-weight: 500; text-align:start; margin-left:150px; ">
                <h6>Review Regularizations </h6>
            </div>
            <div class="approved-leave">
                <div class="heading">
                    <div class="heading-2">
                        <div style="display:flex; flex-direction:row; justify-content:space-between;">
                            <div class="review">
                                @foreach($reviews1 as $review)
                                <span style="color: #778899; font-size: 0.875rem; font-weight: 500;"> {{ $review->applied_by }}
                                </span>
                                <span style="color: #333; font-weight: 500; ">
                                    {{ $review->name }}
                                </span>
                                <p style="margin-top: -20px; margin-left: 461px; font-size: 14px;">{{ $review->closed}}</p>
                            </div>
                        </div>
                        <div class="middle-container">
                            <div class="view-container">
                                <div class="first" style="display:flex; gap:40px;padding:5px; ">
                                    <div class="review">
                                        <span style="color: #778899; font-size: 0.825rem; font-weight: 500;">Remarks</span>
                                        <span style="font-size: 1rem; font-weight: 600;"> {{ $review->remarks }}</span>
                                    </div>
                                    <div class="vertical-line"></div>
                                    <div class="review">
                                        <span style="color: #778899; font-size: 0.825rem; font-weight: 500;">No of days</span>
                                        <span style="font-size: 1rem; font-weight: 600;">{{ $review->no_of_days }} </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="side-container ">
                    <h6 style="color: #778899; font-size: 0.875rem; font-weight: 500; text-align:start;"> Application Timeline </h6>


                    <div style="display:flex; ">
                        <div style="margin-top:20px;">
                            <div class="cirlce"></div>
                            <div class="v-line"></div>
                            <div class=cirlce></div>
                        </div>
                        <div style="display:flex; flex-direction:column; gap:40px;">
                            <div class="group">
                                <div>
                                    <span style="color: #778899; font-size: 0.825rem; font-weight: 400; text-align:start;">Accept</span>
                                    <br>
                                    <span style="color: #778899; font-weight: 400; font-size: 0.825rem;">
                                        {{ $review->accept}}
                                    </span>
                                    <br><span style="color: #778899; font-size: 0.825rem; font-weight: 400; text-align:start;">{{ $review->accept_date}} </span>
                                    <span style="color: #778899; font-weight: 400; font-size: 0.825rem;">
                                        {{ $review->accept_time}}
                                    </span>

                                </div>

                            </div>
                            <div class="group">
                                <div>
                                    <h5 style="color: #333; font-size: 0.825rem; font-weight: 400; text-align:start;">Submitted<br>
                                        <br><span style="color: #778899; font-size: 0.825rem; font-weight: 400; text-align:start;">{{ $review->submitted_date}} </span>
                                        <span style="color: #778899; font-weight: 400; font-size: 0.825rem;">
                                            {{ $review->submitted_time}}
                                        </span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <div class="container">
            <div ref="agLabel" class="ag-header-group-text" role="presentation" style="margin-bottom: 12px; font-size: 15px; margin-left: 175px;">Dates applied for regularization</div>
            <table class="custom-table">
                <thead style="background-color: #89CFF0;">
                    <tr>
                        <th>Date</th>
                        <th>Approve/Reject</th>
                        <th>Approve Remarks</th>
                        <th>Shift</th>
                        <th>First In Time</th>
                        <th>Last Out Time</th>
                        <th>Reason</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reviews1 as $review)
                    <tr>
                        <td>{{ $review->date }}</td>
                        <td>{{ $review->approve_reject }}</td>
                        <td>{{ $review->approve_remarks }}</td>
                        <td>{{ $review->shift }}</td>
                        <td>{{ $review->first_in_time }}</td>
                        <td>{{ $review->last_out_time }}</td>
                        <td>{{ $review->reason }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>


@endforeach



</body>

</html>