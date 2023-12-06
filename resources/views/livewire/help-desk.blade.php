<div style="overflow-x:hidden">
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
            <div class="col" style="margin-left:20%">
                <div class="card" style="width:400px;">
                    <div class="card-header">
                        <div class="row">
                            <button wire:click="$set('activeTab', 'active')" class="col btn @if($activeTab === 'active') btn-primary active @else btn-light @endif" style="border-radius: 5px; margin-right: 5px">
                                Active
                            </button>
                            <button wire:click="$set('activeTab', 'pending')" class="col btn @if($activeTab === 'pending') btn-warning active @else btn-light @endif" style="border-radius: 5px;">
                                Pending
                            </button>
                            <button wire:click="$set('activeTab', 'closed')" class="col btn @if($activeTab === 'closed') btn-success active @else btn-light @endif" style="border-radius: 5px;">
                                Closed
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" style="margin-left:15%">
                <button wire:click="open" style="background-color:rgb(2, 17, 79);color:white;border-radius:5px"> New Request </button>
            </div>
        </div>

        @if($showDialog)
        <div class="modal" tabindex="-1" role="dialog" style="display: block;overflow-y:auto;">
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
                                    <optgroup label="IT">
                                        <option value="Database Access Request">Database Access Request</option>
                                        <option value="IT Training Request">IT Training Request</option>
                                        <option value="New Laptop">New Laptop</option>
                                        <option value="New Mailbox Request">New Mailbox Request</option>
                                        <option value="Request For IT Accessories">Request For IT Accessories</option>
                                        <option value="Software Installation">Software Installation</option>
                                        <option value="System Upgrade Request">System Upgrade Request</option>
                                        <option value="VPN Access Request">VPN Access Request</option>
                                        <!-- Add more IT-related options as needed -->
                                    </optgroup>
                                    <optgroup label="Finance">
                                        <option value="Income Tax">Income Tax</option>
                                        <option value="Loans">Loans</option>
                                        <option value="Payslip">Payslip</option>
                                        <!-- Add more Finance-related options as needed -->
                                    </optgroup>
                                    <optgroup label="HR">
                                        <option value="Employee Information">Employee Information</option>
                                        <option value="Hardware Maintenance">Hardware Maintenance</option>
                                        <option value="Incident Report">Incident Report</option>
                                        <option value="Privilege Access Request">Privilege Access Request</option>
                                        <option value="Security Access Request">Security Access Request</option>
                                        <option value="Technical Support">Technical Support</option>
                                        <!-- Add more HR-related options as needed -->
                                    </optgroup>
                                    <optgroup label="Other">
                                        <option value="Other Request">Other Request</option>
                                    </optgroup>
                                </select>
                                @error('category') <span class="text-danger">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" wire:model="subject" id="subject" class="form-control" placeholder="Enter subject">
                            @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea wire:model="description" id="description" class="form-control" placeholder="Enter description" rows="4"></textarea>
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="fileInput" style="cursor: pointer;">
                                    <i class="fa fa-paperclip"></i> Attach Image
                                </label>
                            </div>
                            @error('file_path') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <input wire:model="image" type="file" accept="image/*">
                            @if ($image)
                            <div>
                                <img height="100" width="100" src="{{ $image->temporaryUrl() }}" alt="Image Preview" style="max-width: 300px;">
                            </div>
                            @endif
                        </div>



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
                                                <input type="checkbox" wire:model="selectedPeople" value="{{ $people->emp_id }}" wire:click="selectPerson({{ $people->emp_id }})">
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
        <div class="card-body" style="background-color:white;width:95%;height:400px;margin-top:30px;border-radius:5px;max-height:400px;overflow-y:auto">
        
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #007BFF; color: white;">
                        <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Category</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Subject</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Description</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Attach Files</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">CC To</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Priority</th>
                    </tr>
                </thead>
                <tbody>
                    @if($records->where('status', 'Open')->count() > 0)
                    @foreach ($records->where('status', 'Open') as $record)
                    <tr>
                        <td style="padding: 10px;font-size:12px;text-align:center;width:120px">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
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

                        </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7" style="text-align: center;font-size:12px">Active records not found</td>
                    </tr>
                    @endif


                </tbody>
            </table>

        </div>
        @endif

        @if ($activeTab == "closed")
        <div class="card-body" style="background-color:white;width:95%;margin-top:30px;border-radius:5px;max-height:400px;height:400px;overflow-y:auto">
         
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #007BFF; color: white;">
                        <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Category</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Subject</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Description</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Attach Files</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">CC To</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Priority</th>
                    </tr>
                </thead>
                <tbody>
                    @if($records->where('status', 'Completed')->count() > 0)
                    @foreach ($records->where('status', 'Completed') as $record)
                    <tr>
                        <td style="padding: 10px;font-size:12px;text-align:center;width:120px">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
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

                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7" style="text-align: center;font-size:12px">Closed records not found</td>
                    </tr>
                    @endif

                </tbody>
            </table>

        </div>
        @endif



        @if ($activeTab == "pending")
        <div class="card-body" style="background-color:white;width:95%;margin-top:30px;border-radius:5px;max-height:400px;height:400px;overflow-y:auto">
           
            <table style="width: 100%; border-collapse: collapse;">
                <thead>
                    <tr style="background-color: #007BFF; color: white;">
                        <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Category</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Subject</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Description</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Attach Files</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">CC To</th>
                        <th style="padding: 10px;font-size:12px;text-align:center">Priority</th>
                    </tr>
                </thead>
                <tbody>
                    @if($records->where('status', 'Pending')->count() > 0)
                    @foreach ($records->where('status', 'Pending') as $record)
                    <tr>
                        <td style="padding: 10px;font-size:12px;text-align:center;width:120px">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
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

                    </tr>
                    @endforeach
                    @else
                    <tr>
                        <td colspan="7" style="text-align: center;font-size:12px">Pending records not found</td>
                    </tr>
                    @endif

                </tbody>
            </table>

        </div>
        @endif





        <style>
            .card-body {
                background-color: white;
                padding: 20px;
                width: 80%;
                margin-top: 30px;
                border-radius: 5px;
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
    </body>

    </html>
</div>