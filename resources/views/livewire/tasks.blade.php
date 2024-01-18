<div>
    <x-loading-indicator/>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Task Form</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <div class="container" style="margin-top:15px;width:95%; height: 450px; margin-left: 20px; border: 1px solid silver; border-radius: 5px;background-color:white">
            <div class="row">
                <div class="col" style="margin-left:35%;margin-top:15px">
                    <div class="card" style="width:250px;">
                        <div class="card-header">
                            <div class="row">
                                <button wire:click="$set('activeTab', 'open')" class="col btn @if($activeTab === 'open') active @else btn-light @endif" style="border-radius: 5px; margin-right: 5px; background-color: @if($activeTab === 'open') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'open') #fff @else #000 @endif;">
                                    Open
                                </button>
                                <button wire:click="$set('activeTab', 'completed')" class="col btn @if($activeTab === 'completed') active @else btn-light @endif" style="border-radius: 5px; background-color: @if($activeTab === 'completed') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'completed') #fff @else #000 @endif;">
                                    Completed
                                </button>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col" style="display:flex; justify-content:flex-end;">
                    <button wire:click="show" style="background-color:rgb(2, 17, 79); border: none; border-radius: 5px; color: white; font-size: 12px; height: 30px; cursor: pointer; margin-top: 15px;width:100px;">Add
                        New Task</button>
                </div>
            </div>
            @if ($activeTab == "open")
            <div class="card-body" style="background-color:white;width:100%;margin-top:30px;border-radius:5px;overflow-y:auto;max-height:300px;overflow-x:hidden">
                @if ($records->isEmpty())
                <div style="text-align: center">
                    <img style="width: 10em" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
                </div>
                @else
                <div class="table-responsive">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="background-color: rgb(2, 17, 79); color: white;">
                                <th style="padding: 10px; font-size: 12px; text-align: center; width: auto">Assigned By</th>
                                <th style="padding: 10px; font-size: 12px; text-align: center; width: auto">Task Name</th>
                                <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Assigneed to</th>
                                <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Priority</th>
                                <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Due Date</th>
                                <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Subject</th>
                                <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Description</th>
                                <th style="padding: 10px; font-size: 12px; text-align: center;width: auto">Attach File</th>
                                <th style="padding: 10px; font-size: 12px; text-align: center; width: auto">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                            @if($record->status=="Open")
                            <tr>
                                <td style="padding: 10px; font-size: 12px; text-align: center; width: 100px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                                <td style="padding: 10px; font-size: 12px; text-align: center; width: 100px;text-transform: capitalize;">{{ $record->task_name }}</td>
                                <td style="padding: 10px; font-size: 12px; text-align: center;width: 100px;text-transform: capitalize;">{{ $record->assignee }}</td>
                                <td style="padding: 10px; font-size: 12px; text-align: center;width: 100px;text-transform: capitalize;">{{ $record->priority }}</td>
                                <td style="padding: 10px; font-size: 12px; text-align: center; width: 100px"> {{ \Carbon\Carbon::parse($record->due_date)->format('d-M-y') }}</td>
                                <td style="padding: 10px; font-size: 12px; text-align: center; width: 100px;text-transform: capitalize;">{{ $record->subject }}</td>
                                <td style="padding: 10px; font-size: 12px; text-align: center;width: 100px;text-transform: capitalize;">{{ $record->description }}</td>
                                <td style="padding: 10px; font-size: 12px; text-align: center;width: 100px">
                                    @if ($record->file_path)
                                    <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                                    @else
                                    N/A
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="openForTasks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 5px; padding:5px;width:80px">Close</button>
                                </td>

                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>

                @endif
            </div>
            @endif

            @if ($activeTab == "completed")
            <div class="card-body" style="background-color:white;width:100%;margin-top:30px;border-radius:5px;overflow-y:auto;max-height:300px;overflow-x:hidden">


                @if ($records->isEmpty())
                <div style="text-align: center">
                    <img style="width:10em" src="https://media.istockphoto.com/id/1357284048/vector/no-item-found-vector-flat-icon-design-illustration-web-and-mobile-application-symbol-on.jpg?s=612x612&w=0&k=20&c=j0V0ww6uBl1LwQLH0U9L7Zn81xMTZCpXPjH5qJo5QyQ=" alt="">
                </div>
                @else
                <div class="table-responsive">
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead>
                            <tr style="background-color: rgb(2, 17, 79); color: white;">
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Assigned By</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Task Name</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Assigneed to</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Priority</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Due Date</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Subject</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Description</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Attch File</th>
                                <th style="padding: 10px;font-size:12px;text-align:center;width:100px">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($records as $record)
                            @if($record->status=="Completed")
                            <tr>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size:10px">#({{$record->emp_id}})</strong>
                                </td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px;text-transform: capitalize;">{{ $record->task_name }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px;text-transform: capitalize;">{{ $record->assignee }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px;text-transform: capitalize;">{{ $record->priority }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">{{ \Carbon\Carbon::parse($record->due_date)->format('d-M-y') }} </td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px;text-transform: capitalize;">{{ $record->subject }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px;text-transform: capitalize;">{{ $record->description }}</td>
                                <td style="padding: 10px;font-size:12px;text-align:center;width:100px">
                                    @if ($record->file_path)
                                    <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                                    @else
                                    N/A
                                    @endif
                                </td>
                                <td>
                                    <button wire:click="closeForTasks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 5px; padding:5px;width:80px">Open</button>
                                </td>

                            </tr>
                            @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
            @endif
            @if($showDialog)
            <div class="modal" tabindex="-1" role="dialog" style="display: block;">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color: rgb(2, 17, 79); height: 50px">
                            <h5 style="padding: 5px; color: white; font-size: 15px;" class="modal-title"><b>Add Task</b></h5>
                            <button wire:click="close" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" style="color: white;">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="task-container">
                                <!-- Task Name -->
                                <div class="form-group" style="margin-top: 20px;">
                                    <label for="task_name" style="font-size: 14px;">Task Name*</label>
                                    <br>
                                    <input type="text" wire:model="task_name" placeholder="Enter task name" style="width: 100%;font-size:12px">
                                </div>
                                @error('task_name') <span class="text-danger">{{ $message }}</span> @enderror

                                <!-- Assignee -->
                                <div class="form-group" style="margin-top: 20px;color:grey;font-size:12px">
                                    <label for="assignee" style="font-size: 14px;color:black">Assignee</label>
                                    <br>
                                    <i wire:click="forAssignee" class="fas fa-user icon" id="profile-icon"></i>
                                    @if($showRecipients)
                                    <strong style="font-size: 12;">Selected CC recipients:
                                    </strong>{{ implode(', ', array_unique($selectedPeopleNames)) }}
                                    @else
                                    Add Assignee
                                    @endif
                                </div>
                                @error('assignee') <span class="text-danger">{{ $message }}</span> @enderror
                                @if($assigneeList)
                                <div style="border-radius:5px;background-color:grey;padding:8px;width:320px;margin-top:10px">
                                    <div class="input-group" style="margin-bottom: 10px;">
                                        <input wire:model="searchTerm" style="font-size: 10px;cursor: pointer; border-radius: 5px 0 0 5px;" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                        <div class="input-group-append">
                                            <button wire:click="filter" style="height: 30px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none;" class="btn" type="button">
                                                <i style="text-align: center;" class="fa fa-search"></i>
                                            </button>
                                            <button wire:click="closeAssignee" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" style="color: white; font-size: 24px;">×</span>
                                            </button>
                                        </div>
                                    </div>
                                    @if ($peopleData->isEmpty())
                                    <div class="container" style="text-align: center; color: white;font-size:12px"> No
                                        People Found
                                    </div>
                                    @else
                                    @foreach($peopleData as $people)
                                    <div wire:model="cc_to" wire:click="selectPerson('{{ $people->emp_id }}')" class="container" style="cursor: pointer; background-color: darkgrey; padding: 5px; margin-bottom: 8px; width: 300px; border-radius: 5px;">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <input type="checkbox" wire:model="selectedPeople" value="{{ $people->emp_id }}">
                                            </div>
                                            <div class="col-auto">
                                                @if($people->image=="")
                                                @if($people->gender=="Male")
                                                <img class="profile-image" src="https://www.kindpng.com/picc/m/252-2524695_dummy-profile-image-jpg-hd-png-download.png" alt="Profile Image">
                                                @elseif($people->gender=="Female")
                                                <img class="profile-image" src="https://th.bing.com/th/id/R.f931db21888ef3645a8356047504aa7b?rik=63HALWH%2b%2fKtaNQ&riu=http%3a%2f%2fereadcost.eu%2fwp-content%2fuploads%2f2016%2f03%2fblank_profile_female-7.jpg&ehk=atYRSw0KxmUnhESig51u5yzYBWfaD9KBO5KvdxXRCTY%3d&risl=&pid=ImgRaw&r=0" alt="Profile Image">
                                                @endif
                                                @else
                                                <img class="profile-image" src="{{ Storage::url($people->image) }}" alt="Profile Image">
                                                @endif
                                            </div>
                                            <div class="col">
                                                <h6 class="username" style="font-size: 12px; color: white;">
                                                    {{ $people->first_name }} {{ $people->last_name }}
                                                </h6>
                                                <p class="mb-0" style="font-size: 12px; color: white;">
                                                    (#{{ $people->emp_id }})</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                                @endif
                                <!-- Priority -->
                                <div class="priority-container" style="margin-top: 20px;">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="priority" style="font-size: 14px; margin-left: 0px; margin-top: 0px; padding: 0 10px 0 0;">Priority*</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div id="priority" style="display: flex; align-items: center; margin-top: 0px;">
                                                <div class="priority-option" style="margin-left: 0px; padding: 0;">
                                                    <input type="radio" id="low-priority" name="priority" wire:model="priority" value="low">
                                                    <span style="font-size: 14px; padding: 0;" class="text-xs">Low</span>
                                                </div>
                                                <div class="priority-option" style="margin-left: 20px; padding: 0;">
                                                    <input type="radio" id="medium-priority" name="priority" wire:model="priority" value="medium">
                                                    <span style="font-size: 14px; padding: 0;" class="text-xs">Medium</span>
                                                </div>
                                                <div class="priority-option" style="margin-left: 20px; padding: 0;">
                                                    <input type="radio" id="high-priority" name="priority" wire:model="priority" value="high">
                                                    <span style="font-size: 14px; padding: 0;" class="text-xs">High</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @error('priority') <span class="text-danger">{{ $message }}</span> @enderror
                                <!-- Due Date -->
                                <div class="form-group" style="margin-top: 20px;">
                                    <label class="form-label" style="font-size: 14px;">Due Date</label>
                                    <br>
                                    <input type="date" wire:model="due_date" style="width: 100%; font-size: 12px;" min="<?= date('Y-m-d'); ?>" value="<?= date('Y-m-d'); ?>">

                                </div>

                                @error('due_date') <span class="text-danger">{{ $message }}</span> @enderror

                                <!-- Tags -->
                                <div class="form-group" style="margin-top: 20px;">
                                    <label for="tags" style="font-size: 14px;">Tags</label>
                                    <br>
                                    <input type="text" wire:model="tags" placeholder="Enter tags" style="width: 100%;font-size:12px">
                                </div>
                                @error('tags') <span class="text-danger">{{ $message }}</span> @enderror

                                <div class="form-group" style="margin-top: 20px; color: grey; font-size: 12px">
                                    <label for="assignee" style="font-size: 14px; color: black">Followers</label>
                                    <br>
                                    <i wire:click="forFollowers" class="fas fa-user icon" id="profile-icon"></i>
                                    @if($showFollowers)
                                    <strong style="font-size: 12;">Selected Followers:
                                    </strong>{{ implode(', ', array_unique($selectedPeopleNamesForFollowers)) }}
                                    @else
                                    Add Followers
                                    @endif
                                </div>


                                @error('followers') <span class="text-danger">{{ $message }}</span> @enderror
                                @if($followersList)
                                <div style="border-radius:5px;background-color:grey;padding:8px;width:320px;margin-top:10px">
                                    <div class="input-group" style="margin-bottom: 10px;">
                                        <input wire:model="searchTerm" style="font-size: 10px;cursor: pointer; border-radius: 5px 0 0 5px;" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                        <div class="input-group-append">
                                            <button wire:click="filter" style="height: 30px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none;" class="btn" type="button">
                                                <i style="text-align: center;" class="fa fa-search"></i>
                                            </button>
                                            <button wire:click="closeFollowers" type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true" style="color: white; font-size: 24px;">×</span>
                                            </button>
                                        </div>
                                    </div>
                                    @if ($peopleData->isEmpty())
                                    <div class="container" style="text-align: center; color: white;font-size:12px"> No
                                        People Found
                                    </div>
                                    @else
                                    @foreach($peopleData as $people)
                                    <div wire:model="cc_to" wire:click="selectPersonForFollowers('{{ $people->emp_id }}')" class="container" style="cursor: pointer; background-color: darkgrey; padding: 5px; margin-bottom: 8px; width: 300px; border-radius: 5px;">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <input type="checkbox" wire:model="selectedPeopleForFollowers" value="{{ $people->emp_id }}">
                                            </div>
                                            <div class="col-auto">
                                                @if($people->image=="")
                                                @if($people->gender=="Male")
                                                <img class="profile-image" src="https://www.kindpng.com/picc/m/252-2524695_dummy-profile-image-jpg-hd-png-download.png" alt="Profile Image">
                                                @elseif($people->gender=="Female")
                                                <img class="profile-image" src="https://th.bing.com/th/id/R.f931db21888ef3645a8356047504aa7b?rik=63HALWH%2b%2fKtaNQ&riu=http%3a%2f%2fereadcost.eu%2fwp-content%2fuploads%2f2016%2f03%2fblank_profile_female-7.jpg&ehk=atYRSw0KxmUnhESig51u5yzYBWfaD9KBO5KvdxXRCTY%3d&risl=&pid=ImgRaw&r=0" alt="Profile Image">
                                                @endif
                                                @else
                                                <img class="profile-image" src="{{ Storage::url($people->image) }}" alt="Profile Image">
                                                @endif
                                            </div>
                                            <div class="col">
                                                <h6 class="username" style="font-size: 12px; color: white;">
                                                    {{ $people->first_name }} {{ $people->last_name }}
                                                </h6>
                                                <p class="mb-0" style="font-size: 12px; color: white;">
                                                    (#{{ $people->emp_id }})</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @endif
                                </div>
                                @endif
                                <div class="form-group" style="margin-top: 20px;">
                                    <label for="Subject" style="font-size: 14px;">Subject</label>
                                    <br>
                                    <input wire:model="subject" placeholder="Enter Subject.." rows="4" style="width: 100%;font-size:12px"></input>
                                </div>
                                @error('subject') <span class="text-danger">{{ $message }}</span> @enderror
                                <!-- Description -->
                                <div class="form-group" style="margin-top: 20px;">
                                    <label for="description" style="font-size: 14px;">Description</label>
                                    <br>
                                    <textarea wire:model="description" placeholder="Add a description.." rows="4" style="width: 100%;font-size:12px"></textarea>
                                </div>
                                @error('description') <span class="text-danger">{{ $message }}</span> @enderror

                                <!-- File Input -->
                                <div class="row">
                                    <div class="col">
                                        <label for="fileInput" style="cursor: pointer; font-size: 14px;">
                                            <i class="fa fa-paperclip"></i> Attach Image
                                        </label>
                                    </div>
                                </div>

                                <div wire:loading wire:target="image" class="text-primary" role="status">
                                    Uploading...
                                </div>

                                <input style="font-size: 12px;" wire:model="image" wire:loading.attr="disabled" type="file" accept="image/*">

                                @if ($image)
                                <div>
                                    <img height="100" width="100" src="{{ $image->temporaryUrl() }}" alt="Image Preview" style="max-width: 300px;">
                                </div>
                                @endif

                                @error('file_path')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror

                                <!-- <div style="margin-top: 30px; text-align: center;">
                                            <button wire:click="close" class="btn btn-danger btn-medium" type="button" name="link" style="background-color: #FF3D57; color: white; width: 100px;font-size:13px">Cancel</button>
                                            <button wire:click="submit" class="btn btn-success btn-medium" type="button" name="link" style="background-color: #4CAF50; color: white; margin-left: 20px;font-size:13px">Save
                                                Changes</button>
                                        </div> -->
                            </div>
                        </div>
                        <div style="text-align: center;margin-bottom:10px">
                            <button wire:click="close" class="btn btn-danger btn-medium" type="button" name="link" style="background-color: #FF3D57; color: white; width: 100px;font-size:13px">Cancel</button>
                            <button wire:click="submit" class="btn btn-success btn-medium" type="button" name="link" style="background-color: #4CAF50; color: white;font-size:13px">Save
                                Changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-backdrop fade show blurred-backdrop"></div>
            @endif
            </body>

    </html>
</div>
