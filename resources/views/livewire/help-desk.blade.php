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
                <button wire:click="open" style="background-color:rgb(2, 17, 79);color:white;border-radius:5px"> New Request </button>
            </div>
        </div>
        @if($showDialog)
        <div class="modal" tabindex="-1" role="dialog" style="display: block;">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                        <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>New Request</b></h5>
                        <button wire:click="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" style="color: white;">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="category">Category</label>
                            <div class="input-group">
                                <select wire:model="category" id="category" class="custom-select">
                                    <option style="color: grey;" value="">Select Category</option>
                                    <option value="Employee Information">Employee Information</option>
                                    <option value="Income Tax">Income Tax</option>
                                    <option value="Loans">Loans</option>
                                    <option value="Others">Others</option>
                                    <option value="Payslip">Payslip</option>
                                </select>
                            </div>
                        </div>
                        @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" wire:model="subject" id="subject" class="form-control" placeholder="Enter subject">
                        </div>
                        @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea wire:model="description" id="description" class="form-control" placeholder="Enter description" rows="4"></textarea>
                        </div>
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        <div class="row">
                            <div class="col">
                                <label for="fileInput" style="cursor: pointer;">
                                    <i class="fa fa-paperclip"></i> Attach Image
                                </label>
                            </div>
                        </div>

                        <div>
                            <input wire:model="image" type="file" accept="image/*">
                            @if ($image)
                            <div>
                                <img height="100" width="100" src="{{ $image->temporaryUrl() }}" alt="Image Preview" style="max-width: 300px;">
                            </div>
                            @endif
                        </div>


                        @error('file_path') <span class="text-danger">{{ $message }}</span> @enderror

                        <div id="filePreview"></div>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col">
                                <div class="row">
                                    <div>
                                        <label for="cc_to">CC to</label>
                                        <input wire:model="cc_to" type="text" id="cc_to" placeholder="Add CC recipients" readonly>
                                    </div>
                                    <div class="row" style="margin-top: 5px;">
                                        <div style="margin: 0px;">
                                            <button type="button" style="border-radius: 50%;margin-right:10px" class="add-button" wire:click="toggleRotation">
                                                <i class="fa fa-plus"></i>
                                            </button>Add
                                            <div>
                                                <div style="font-size: 12;"><strong>Selected CC recipients: </strong>{{ implode(', ', array_unique($selectedPeopleNames)) }}</div>
                                            </div>
                                        </div>
                                        @error('cc_to') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                @if($isRotated)
                                <div style="border-radius:5px;background-color:grey;padding:8px;width:220px;margin-top:10px">
                                    <div class="input-group" style="margin-bottom: 10px;">
                                        <input wire:model="searchTerm" style="font-size: 10px;cursor: pointer; border-radius: 5px 0 0 5px;" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                        <div class="input-group-append">
                                            <button wire:click="filter" style="height: 30px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none;" class="btn" type="button">
                                                <i style="text-align: center;" class="fa fa-search"></i>
                                            </button>
                                            <button wire:click="closePeoples" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" style="color: white; font-size: 24px;">×</span>
                                            </button>
                                        </div>
                                    </div>
                                    @if ($peopleData->isEmpty())
                                    <div class="container" style="text-align: center; color: white;font-size:12px"> No People Found
                                    </div>
                                    @else
                                    @foreach($peopleData as $people)
                                    <div wire:model="cc_to" wire:click="selectPerson('{{ $people->emp_id }}')" class="container" style="cursor: pointer; background-color: darkgrey; padding: 5px; margin-bottom: 8px; width: 200px; border-radius: 5px;">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <input type="checkbox" name="selectedPeople[]" value="{{ $people->emp_id }}" multiple>
                                            </div>
                                            <div class="col-auto">
                                                <img class="profile-image" src="{{ $people->image }}" alt="Profile Image">
                                            </div>
                                            <div class="col">
                                                <h6 class="username" style="font-size: 12px; color: white;">{{ $people->first_name }} {{ $people->last_name }}</h6>
                                                <p class="mb-0" style="font-size: 12px; color: white;">(#{{ $people->emp_id }})</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                                @endif
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="category">Priority</label>
                                    <div class="input-group">
                                        <select name="category" id="category" wire:model="priority" class="custom-select">
                                            <option style="color: grey;" value="">Select Priority</option>
                                            <option value="High">
                                                <span></span> High
                                            </option>
                                            <option value="Low">
                                                <span></span> Low
                                            </option>
                                            <option value="Medium">
                                                <span></span> Medium
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                @error('priority') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="row" style="margin-top: 20px;">
                            <div class="col-1" style="margin-left: 30%;">
                                <button wire:click="submit" class="custom-button submit-button">Submit</button>
                            </div>
                            <div class="col-2" style="margin-left: 10%;">
                                <button wire:click="close" class="custom-button cancel-button">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show blurred-backdrop"></div>
        @endif
        @if ($activeTab == "active")
        <div class="card-body" style="background-color:white;height:400px;width:80%;margin-top:30px;border-radius:5px">


            @if ($records->isEmpty())
            <div> <img style="margin-top:15%;margin-left:30%" height="200" width="300" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
            </div>
            @else
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #007BFF; color: white;">
                        <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Emp ID</th>
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
                        <td style="padding: 10px;font-size:12px;text-align:center;width:120px">{{ $record->emp_id }}</td>
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
                                <button wire:click="openForDesks('{{$record->id}}')" style="background-color: red; color: white; border-radius: 5px;">Close</button>
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
        <div class="card-body" style="background-color:white;height:400px;width:80%;margin-top:30px;border-radius:5px">


            @if ($records->isEmpty())
            <div> <img style="margin-top:15%;margin-left:30%" height="200" width="300" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
            </div>
            @else
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #007BFF; color: white;">
                        <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Emp ID</th>
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
                        <td style="padding: 10px;font-size:12px;text-align:center;width:120px">{{ $record->emp_id }}</td>
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
                                <button wire:click="closeForDesks('{{$record->id}}')" style="background-color: green; color: white; border-radius: 5px;">Open</button>
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
        </style>

        @if($activeTab=="closed")
        <div class="card-body" style="background-color:white;height:400px;width:80%;margin-top:30px;border-radius:5px">
            <img style="margin-top:15%;margin-left:30%" height="200" width="300" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
        </div>
        @endif
    </body>

    </html>
</div>