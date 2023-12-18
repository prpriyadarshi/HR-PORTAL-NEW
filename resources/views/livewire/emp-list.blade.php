<div>

    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezgG2veqOA/5zPBnKFVr+1tFZZHoOjHshEWbRl0Yt83QCBTZw1A+DIADKh5F9UOI" crossorigin="anonymous">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-ezgG2veqOA/5zPBnKFVr+1tFZZHoOjHshEWbRl0Yt83QCBTZw1A+DIADKh5F9UOI" crossorigin="anonymous">
        <style>
            .empTable {

                border-collapse: collapse;

                background-color: white;
                border: 1px solid #e2e8f0;
                font-size: 12px;
                margin-left: 10px;
            }

            .empTable td {
                border: 1px solid #e2e8f0;
                padding: 0.75rem;
                text-align: left;
            }

            .empTable th {
                border: 1px solid #e2e8f0;
                padding: 0.75rem;
                text-align: center;
                background-color: #02134F;
                color: #f0f4f8;
                font-weight: bold;
                white-space: nowrap;
            }

            .empTable tbody tr:hover {
                background-color: #f0f4f8;
            }
        </style>
    </head>
    <div class="container-11" style="background-color: #02134F; color: white;margin:0%;max-width:100%;padding:2px">
        <div style="display: flex; align-items: start; justify-content: start;">
            <img src="{{ $hrDetails->company_logo }}" alt="Logo" style="width: 200px; height: 50px; margin-right: 10px;">
            <h1 style="font-size: 20px; margin-left:25%;margin-top:10px">HR - {{ $hrDetails->hr_name }}</h1>
        </div>
    </div>
    <div style="margin-top:5px;margin-bottom:5px">
        <button style="width: 230px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;margin-left:32%"><a href="/JobSeekersAppliedJobs" style="text-decoration: none;color:white">Job Seekers Applied
                Jobs</a></button>
        <button style="width: 100px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a href="/PostJobs" style="text-decoration: none;color:white">Post Jobs</a></button>

        <button style="width:200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a href="/VendorsSubmittedCVs" style="text-decoration: none;color:white">Vendors Submitted CVs</a></button>
        <button style="width:200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a href="/empregister" style="text-decoration: none;color:white">Employee Register</a></button>
        <button style="width: 100px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;" wire:click="logout">Logout</button>
    </div>
    <h3 class="text-3xl font-bold mb-2 text-center">All Employee Details</h3>
    <div style="margin-top:5px;margin-bottom:5px">
        <!-- ... other buttons ... -->
        <input wire:change="filter" wire:model="search" type="text" placeholder="Search employees" style="width: 200px; border-radius: 5px; padding: 5px; margin-top: 10px; margin-left: 10px;">

        <!-- ... other buttons ... -->
    </div>
    <div class="table-responsive">
        @if (is_null($employees) || $employees->isEmpty())
        <div style="text-align: center; margin: 20px;">
            <p style="font-size: 18px; color: #555;">No records found.</p>
        </div>
        @else
        <table class="empTable">
            <thead>
                <tr>
                    <th class="whitespace-nowrap" wire:click="sortBy('emp_id')">S.NO</th>
                    <th class="whitespace-nowrap" wire:click="sortBy('emp_id')">Emp ID</th>
                    <th class="whitespace-nowrap" wire:click="sortBy('name')">Name</th>
                    <th class="whitespace-nowrap" wire:click="sortBy('email')">Email</th>
                    <th class="whitespace-nowrap" wire:click="sortBy('gender')">Gender</th>
                    <th class="whitespace-nowrap" wire:click="sortBy('date_of_birth')">DOB</th>
                    <th class="whitespace-nowrap" wire:click="sortBy('mobile_number')">Mobile No</th>
                    <th class="whitespace-nowrap" wire:click="sortBy('employee_type')">Employee Type</th>
                    <th class="whitespace-nowrap" wire:click="sortBy('address')">Address</th>
                    <th class="whitespace-nowrap">Action</th>
                    <!-- Add more table headers as needed -->
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                <tr>
                    <td class="whitespace-nowrap">{{ $counter++ }}</td>
                    <td class="whitespace-nowrap">{{ $employee->emp_id }}</td>
                    <td class="whitespace-nowrap">{{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td class="whitespace-nowrap">{{ $employee->email }}</td>
                    <td class="whitespace-nowrap">{{ $employee->gender }}</td>
                    <td class="whitespace-nowrap">
                        {{ \Carbon\Carbon::parse($employee->date_of_birth)->format('Y M d') }}
                    </td>
                    <td class="whitespace-nowrap">{{ $employee->mobile_number }}</td>
                    <td class="whitespace-nowrap">
                        {{ ucwords(str_replace(['-', '_'], ' ', $employee->employee_type)) }}
                    </td>
                    <td class="whitespace-nowrap">
                        {{ $employee->address }},{{ $employee->city }},{{ $employee->state }},{{ $employee->postal_code }},{{ $employee->country }}
                    </td>
                    <td class="whitespace-nowrap">
                        <div class="row-md-12">
                            <div class="col-md-6">
                                <div class="d-inline-block">
                                    <a href="/emp-update/{{$employee->emp_id}}" class="btn btn-primary btn-xs">
                                        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="d-inline-block"  style="margin-left: -5px;">
                                    @if ($employee->status == 1)
                                    <button class="btn btn-danger btn-xs" wire:click="deleteEmp('{{ $employee->emp_id }}')">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        Delete
                                    </button>
                                    @else
                                    <button class="btn btn-danger btn-xs" wire:click="deleteEmp('{{ $employee->emp_id }}')" style="background-color: lightcoral;">
                                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                        Delete
                                    </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>











                </tr>
                @endforeach
            </tbody>
        </table>

        @endif
    </div>

</div>
