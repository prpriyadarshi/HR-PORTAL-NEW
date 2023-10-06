<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Container with 4 Inner Containers</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Open Sans font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .inner-container {
            padding: 10px 10px;
            border: 1px solid #ccc;
            border-radius: 7px;
            background: #fff;
            overflow: hidden;
            color: #778899;
            height: 220px;
            width: 100%;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
            margin-top: 20px;
        }
        .inner-container:hover {
            transform: scale(1.05);
            cursor: pointer;
            background-color: #fff;
        }
        .inner-container h6 {
            font-weight: 600;
            font-size: 0.875rem;
            margin-bottom: 20px;
        }
        .inner-container h5 {
            font-weight: 500;
            font-size: 1.15rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .inner-container span {
            font-weight: 400;
        }
        .inner-container .group {
            display: flex;
            flex-direction: row;
            gap: 10px;
            align-items: center;
            justify-content:space-between; /* Center items vertically */
        }
        p {
            font-size: 0.825rem;
        }
        img {
            max-width: 100%;
        }
        .date {
        font-size: 0.9rem; /* Adjust the font size as needed */
    }
    #aloneContainer {
    width: 100%;
   /* Adjust the height as needed */
}
.alone-cont {
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 7px;
            background: #fff;
            overflow: hidden;
            color: #778899;
            width: 100%;
            display:flex;
            flex-direction:column;
            text-align:center;
            justify-content:center;
            height:250px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        .alone-cont h6 {
            font-weight: 600;
            font-size: 0.875rem;
           
        }
        #yearSelect {
        padding: 5px; /* Add padding to the select */
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px; /* Adjust font size as needed */
        background-color: #fff; /* Background color */
        color: #333; /* Text color */
        cursor: pointer; /* Change cursor on hover */
        width: 150px; /* Adjust width as needed */
    }

    /* Style for the select when it's hovered */
    #yearSelect:hover {
        border-color: #007BFF; /* Change border color on hover */
    }

    /* Style for the select when it's focused */
    #yearSelect:focus {
        outline: none; /* Remove the outline when focused (you can customize this) */
        border-color: #007bff; /* Change border color when focused */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Add a box shadow when focused (you can customize this) */
    }
    select  .yearSelect{
        padding: 10px;
        font-size: 16px;
        line-height:2;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-right">
                <select id="yearSelect">
                    <option class="dropdown" value="2022">2022</option>
                    <option class="dropdown" value="2023" selected>2023</option>
                    <option class="dropdown" value="2024">2024</option>
                </select>
            </div>
        </div>

        <div class="row" id="calendarRow">
                <!-- ... (previous HTML code) ... -->

                <div class="row" id="calendarRow">
    @php
        $calendarData = $calendarData->sortBy('date');
        $currentMonth = '';
    @endphp
    @foreach($calendarData as $entry)
        @php
            $entryMonth = date('F', strtotime($entry->date));
        @endphp
        @if ($currentMonth !== $entryMonth)
            @if ($currentMonth !== '')
                </div>
            @endif
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="inner-container">
                    <h6>{{ $entry->month }} {{ $entry->year }} </h6>
                    <div class="group" style=" display: flex; align-items: center;">
                        <div>
                            <h5>{{ date('d', strtotime($entry->date)) }}<span><p style="font-size: 0.7rem;">{{ substr($entry->day, 0, 3) }}</p></span></h5>
                        </div>
                        <div>
                            @if (!empty($entry->festivals))
                                <p style="margin-top:-5px; font-size: 0.856rem;">{{ $entry->festivals }}</p>
                            @else
                                <p>No Holidays</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div>
                @if (!empty($entry->festivals))
                    <p style="font-size: 0.856rem;">{{ $entry->festivals }}</p>
                @else
                    <p>No Holidays</p>
                @endif
            </div>
        @endif
        @php
            $currentMonth = $entryMonth;
        @endphp
    @endforeach
</div>
<!-- ... (rest of the HTML code) ... -->

       
      

        </div>

        <div id="aloneContainer" class="col-lg-12 col-md-12 col-sm-12 text-center" style="display: none;">
            <div class="alone-cont">
                <div>
                    <h6>It’s lonely here !</h6>
                </div>
                <p>Your HR department is yet to publish the holiday list, check again later.</p>
            </div>
        </div>
    </div>
    
    <!-- Include Bootstrap and jQuery JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>

</div>