<div style="text-align:center">

    @auth('hr')
    <div class="col" style="margin-left:20%">
        <div class="card" style="width:400px;">
            <div class="card-header">
                <div class="row">
                    <button wire:click="$set('activeTab', 'active')" class="col btn @if($activeTab === 'active')  active @else btn-light @endif" style="border-radius: 5px; margin-right: 5px; background-color: @if($activeTab === 'active') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'active') #fff @else #000 @endif;">
                        Active
                    </button>
                    <button wire:click="$set('activeTab', 'pending')" class="col btn @if($activeTab === 'pending')  active @else btn-light @endif" style="border-radius: 5px; background-color: @if($activeTab === 'pending') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'pending') #fff @else #000 @endif;">
                        Pending
                    </button>
                    <button wire:click="$set('activeTab', 'closed')" class="col btn @if($activeTab === 'closed')  active @else btn-light @endif" style="border-radius: 5px; background-color: @if($activeTab === 'closed') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'closed') #fff @else #000 @endif;">
                        Closed
                    </button>
                </div>

            </div>
        </div>
    </div>

    @if ($activeTab == "active")
    <div class="card-body" style="background-color:white;width:95%;height:400px;margin-top:30px;border-radius:5px;max-height:400px;overflow-y:auto">

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: rgb(2, 17, 79); color: white;">
                    <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
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
                @if($forHR->where('status', 'Open')->count() > 0)
                @foreach ($forHR->where('status', 'Open') as $record)
                <tr>
                    <td style="padding: 10px;font-size:12px;text-align:center;width:120px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->category }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->subject }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->description }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center">
                        @if ($record->file_path)
                        <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->cc_to }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->priority }}</td>
                    <td style="padding: 5px; font-size: 12px; text-align: center;">
                        <div class="row" style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                            <button wire:click="openForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 3px; padding: 5px;margin-bottom:8px">Close</button>
                            <button wire:click="pendingForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 3px; padding: 5px;">Pending</button>
                        </div>

                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="text-align: center;font-size:12px">Active records not found</td>
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
                <tr style="background-color: rgb(2, 17, 79); color: white;">
                    <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
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
                @if($forHR->where('status', 'Pending')->count() > 0)
                @foreach ($forHR->where('status', 'Pending') as $record)
                <tr>
                    <td style="padding: 10px;font-size:12px;text-align:center;width:120px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->category }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->subject }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->description }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center">
                        @if ($record->file_path)
                        <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->cc_to }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->priority }}</td>
                    <td style="padding: 5px; font-size: 12px; text-align: center;">
                        <div class="row" style="display: flex; justify-content: space-between;">
                            <button wire:click="openForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 3px; padding: 5px;">Close</button>
                        </div>

                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="text-align: center;font-size:12px">Pending records not found</td>
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
                <tr style="background-color: rgb(2, 17, 79); color: white;">
                    <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
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
                @if($forHR->where('status', 'Completed')->count() > 0)
                @foreach ($forHR->where('status', 'Completed') as $record)
                <tr>
                    <td style="padding: 10px;font-size:12px;text-align:center;width:120px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->category }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->subject }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->description }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center">
                        @if ($record->file_path)
                        <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->cc_to }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->priority }}</td>
                    <td style="padding: 5px; font-size: 12px; text-align: center">
                        <div class="row" style="display: flex; justify-content: space-between;">
                            <button wire:click="closeForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 5px; padding: 5px;">Open</button>
                        </div>

                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="text-align: center;font-size:12px">Closed records not found</td>
                </tr>
                @endif

            </tbody>
        </table>

    </div>
    @endif
    @endauth




    @auth('it')
    <div class="col" style="margin-left:20%">
        <div class="card" style="width:400px;">
            <div class="card-header">
                <div class="row">
                    <button wire:click="$set('activeTab', 'active')" class="col btn @if($activeTab === 'active')  active @else btn-light @endif" style="border-radius: 5px; margin-right: 5px; background-color: @if($activeTab === 'active') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'active') #fff @else #000 @endif;">
                        Active
                    </button>
                    <button wire:click="$set('activeTab', 'pending')" class="col btn @if($activeTab === 'pending')  active @else btn-light @endif" style="border-radius: 5px; background-color: @if($activeTab === 'pending') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'pending') #fff @else #000 @endif;">
                        Pending
                    </button>
                    <button wire:click="$set('activeTab', 'closed')" class="col btn @if($activeTab === 'closed')  active @else btn-light @endif" style="border-radius: 5px; background-color: @if($activeTab === 'closed') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'closed') #fff @else #000 @endif;">
                        Closed
                    </button>
                </div>

            </div>
        </div>
    </div>

    @if ($activeTab == "active")
    <div class="card-body" style="background-color:white;width:95%;height:400px;margin-top:30px;border-radius:5px;max-height:400px;overflow-y:auto">

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: rgb(2, 17, 79); color: white;">
                    <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
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
                @if($forIT->where('status', 'Open')->count() > 0)
                @foreach ($forIT->where('status', 'Open') as $record)
                <tr>
                    <td style="padding: 10px;font-size:12px;text-align:center;width:120px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->category }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->subject }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->description }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center">
                        @if ($record->file_path)
                        <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->cc_to }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->priority }}</td>
                    <td style="padding: 5px; font-size: 12px; text-align: center;">
                        <div class="row" style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                            <button wire:click="openForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 3px; padding: 5px;margin-bottom:8px">Close</button>
                            <button wire:click="pendingForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 3px; padding: 5px;">Pending</button>
                        </div>

                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="text-align: center;font-size:12px">Active records not found</td>
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
                <tr style="background-color: rgb(2, 17, 79); color: white;">
                    <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
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
                @if($forIT->where('status', 'Pending')->count() > 0)
                @foreach ($forIT->where('status', 'Pending') as $record)
                <tr>
                    <td style="padding: 10px;font-size:12px;text-align:center;width:120px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->category }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->subject }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->description }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center">
                        @if ($record->file_path)
                        <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->cc_to }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->priority }}</td>
                    <td style="padding: 5px; font-size: 12px; text-align: center;">
                        <div class="row" style="display: flex; justify-content: space-between;">
                            <button wire:click="openForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 3px; padding: 5px;">Close</button>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="text-align: center;font-size:12px">Pending records not found</td>
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
                <tr style="background-color: rgb(2, 17, 79); color: white;">
                    <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
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
                @if($forIT->where('status', 'Completed')->count() > 0)
                @foreach ($forIT->where('status', 'Completed') as $record)
                <tr>
                    <td style="padding: 10px;font-size:12px;text-align:center;width:120px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->category }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->subject }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->description }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center">
                        @if ($record->file_path)
                        <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->cc_to }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->priority }}</td>
                    <td style="padding: 5px; font-size: 12px; text-align: center">
                        <div class="row" style="display: flex; justify-content: space-between;">
                            <button wire:click="closeForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 5px; padding: 5px;">Open</button>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="text-align: center;font-size:12px">Closed records not found</td>
                </tr>
                @endif

            </tbody>
        </table>

    </div>
    @endif
    @endauth





    @auth('finance')
    <div class="col" style="margin-left:20%">
        <div class="card" style="width:400px;">
            <div class="card-header">
                <div class="row">
                    <button wire:click="$set('activeTab', 'active')" class="col btn @if($activeTab === 'active')  active @else btn-light @endif" style="border-radius: 5px; margin-right: 5px; background-color: @if($activeTab === 'active') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'active') #fff @else #000 @endif;">
                        Active
                    </button>
                    <button wire:click="$set('activeTab', 'pending')" class="col btn @if($activeTab === 'pending')  active @else btn-light @endif" style="border-radius: 5px; background-color: @if($activeTab === 'pending') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'pending') #fff @else #000 @endif;">
                        Pending
                    </button>
                    <button wire:click="$set('activeTab', 'closed')" class="col btn @if($activeTab === 'closed')  active @else btn-light @endif" style="border-radius: 5px; background-color: @if($activeTab === 'closed') rgb(2, 17, 79) @else none @endif; color: @if($activeTab === 'closed') #fff @else #000 @endif;">
                        Closed
                    </button>
                </div>

            </div>
        </div>
    </div>

    @if ($activeTab == "active")
    <div class="card-body" style="background-color:white;width:95%;height:400px;margin-top:30px;border-radius:5px;max-height:400px;overflow-y:auto">

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background-color: rgb(2, 17, 79); color: white;">
                    <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
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
                @if($forFinance->where('status', 'Open')->count() > 0)
                @foreach ($forFinance->where('status', 'Open') as $record)
                <tr>
                    <td style="padding: 10px;font-size:12px;text-align:center;width:120px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->category }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->subject }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->description }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center">
                        @if ($record->file_path)
                        <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->cc_to }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->priority }}</td>
                    <td style="padding: 5px; font-size: 12px; text-align: center;">
                        <div class="row" style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                            <button wire:click="openForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 3px; padding: 5px;margin-bottom:8px">Close</button>
                            <button wire:click="pendingForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 3px; padding: 5px;">Pending</button>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="text-align: center;font-size:12px">Active records not found</td>
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
                <tr style="background-color: rgb(2, 17, 79); color: white;">
                    <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
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
                @if($forFinance->where('status', 'Pending')->count() > 0)
                @foreach ($forFinance->where('status', 'Pending') as $record)
                <tr>
                    <td style="padding: 10px;font-size:12px;text-align:center;width:120px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->category }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->subject }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->description }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center">
                        @if ($record->file_path)
                        <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->cc_to }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->priority }}</td>
                    <td style="padding: 5px; font-size: 12px; text-align: center;">
                        <div class="row" style="display: flex; justify-content: space-between;">
                            <button wire:click="openForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 3px; padding: 5px;">Close</button>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="text-align: center;font-size:12px">Pending records not found</td>
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
                <tr style="background-color: rgb(2, 17, 79); color: white;">
                    <th style="padding: 10px;font-size:12px;text-align:center;width:120px">Request Raised By</th>
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
                @if($forFinance->where('status', 'Completed')->count() > 0)
                @foreach ($forFinance->where('status', 'Completed') as $record)
                <tr>
                    <td style="padding: 10px;font-size:12px;text-align:center;width:120px;text-transform: capitalize;">{{ $record->emp->first_name }} {{ $record->emp->last_name }} <br> <strong style="font-size: 10px;">({{$record->emp_id}})</strong></td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->category }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->subject }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->description }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center">
                        @if ($record->file_path)
                        <a href="{{ asset('storage/' . $record->file_path) }}" target="_blank" style="text-decoration: none; color: #007BFF;text-transform: capitalize;">View File</a>
                        @else
                        N/A
                        @endif
                    </td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->cc_to }}</td>
                    <td style="padding: 10px;font-size:12px;text-align:center;text-transform: capitalize;">{{ $record->priority }}</td>
                    <td style="padding: 5px; font-size: 12px; text-align: center">
                        <div class="row" style="display: flex; justify-content: space-between;">
                            <button wire:click="closeForDesks('{{$record->id}}')" style="background-color: rgb(2, 17, 79); color: white; border-radius: 5px; padding: 5px;">Open</button>
                        </div>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="8" style="text-align: center;font-size:12px">Closed records not found</td>
                </tr>
                @endif

            </tbody>
        </table>

    </div>
    @endif
    @endauth
</div>