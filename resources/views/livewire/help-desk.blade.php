<div>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .text-danger {
                font-size: 12px;
            }

            .rotate {
                transition: transform 0.5s;
            }

            .rotate.rotate-180 {
                transform: rotate(180deg);
            }

            .custom-button {
                border-radius: 5px;
                padding: 5px 10px;
                color: white;
                cursor: pointer;
            }

            .submit-button {
                background-color: green;
            }

            .cancel-button {
                background-color: red;
            }
        </style>
    </head>

    <body>
        <div class="row">
            <div class="col" style="margin-left:25%">
                <div class="card" style="width:250px;">
                    <div class="card-header">
                        <div class="row">
                            <button wire:click="$set('activeTab', 'active')" class="col btn @if($activeTab === 'active') btn-success active @else btn-light @endif" style="border-radius: 5px; margin-right: 5px">
                                Active
                            </button>
                            <button wire:click="$set('activeTab', 'closed')" class="col btn @if($activeTab === 'closed') btn-danger active @else btn-light @endif" style="border-radius: 5px;">
                                Closed
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="margin-left:8%">
                <button wire:click="open" style="background-color:rgb(2, 17, 79);color:white;border-radius:5px;margin-left:150px"> New Request </button>
            </div>
        </div>
       
        @if ($activeTab == "active")
        <div class="card-body" style="background-color:white;height:400px;width:950px;margin-top:30px;border-radius:5px">


            @if ($records->isEmpty())
            <div> <img style="margin-top:15%;margin-left:30%" height="200" width="300" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
            </div>
            @else
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #007BFF; color: white;">
                        <th style="padding: 10px;font-size:12px;text-align:center;width:80px">Emp ID</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Category</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Subject</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Description</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Attach Files</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">CC To</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Priority</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if($records->status="Open")
                    @foreach ($records as $record)
                    @if($record->status=="Open")
                    <tr>
                        <td style="padding: 10px;font-size:12px;text-align:center;width:80px">{{ $record->emp_id }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->category }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->subject }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->description }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">
                            @if ($record->file_path)
                            <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;">View File</a>
                            @else
                            N/A
                            @endif
                        </td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->cc_to }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->priority }}</td>
                        <td style="padding: 5px; font-size: 12px; text-align: center; width: 100px;">
                            <div class="row" style="display: flex; justify-content: space-between;">
                                <button class="button" wire:click="openForDesks('{{$record->id}}')" style="background-color: red; color: white; border-radius: 5px;">Close</button>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    @else
                    <div style="text-align:center;">No Active Records</div>
                    @endif
                </tbody>
            </table>
            @endif

        </div>
        @endif

        @if ($activeTab == "closed")
        <div class="card-body" style="background-color:white;height:400px;width:950px;margin-top:30px;border-radius:5px">


            @if ($records->isEmpty())
            <div> <img style="margin-top:15%;margin-left:30%" height="200" width="300" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
            </div>
            @else
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #007BFF; color: white;">
                        <th style="padding: 10px;font-size:12px;text-align:center;width:80px">Emp ID</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Category</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Subject</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Description</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Attach Files</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">CC To</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Priority</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    @if($record->status=="Completed")
                    <tr>
                        <td style="padding: 10px;font-size:12px;text-align:center;width:80px">{{ $record->emp_id }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->category }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->subject }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->description }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">
                            @if ($record->file_path)
                            <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;">View File</a>
                            @else
                            N/A
                            @endif
                        </td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->cc_to }}</td>
                        <td style="padding: 10px;font-size:12px;text-align:center">{{ $record->priority }}</td>
                        <td style="padding: 5px; font-size: 12px; text-align: center; width: 100px;">
                            <div class="row" style="display: flex; justify-content: space-between;">
                                <button class="button" wire:click="closeForDesks('{{$record->id}}')" style="background-color: green; color: white; border-radius: 5px;">Open</button>
                            </div>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            @endif

        </div>
        @endif




        <style>
            .card-body {
                background-color: white;
                padding: 20px;
                width: 80%;
                margin-top: 30px;
                border-radius: 5px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            table th {
                background-color: rgb(2, 17, 79);
                color: white;
                padding: 10px;
            }

            table td {
                padding: 10px;
            }

            table a {
                text-decoration: none;
                color: #007BFF;
            }

            .button {
                width: 50px;
                margin-left: 30px;
                height: 20px;
            }
        </style>

        @if($activeTab=="closed")
        <div class="card-body" style="background-color:white;height:400px;width:80%;margin-top:30px;border-radius:5px">
            <img style="margin-top:15%;margin-left:30%" height="200" width="300" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
        </div>
        @endif
    </body>

    </html>
</div>