<div>
    <style>
    .empTable {

        border-collapse: collapse;

        background-color: white;
        border: 1px solid #e2e8f0;
        font-size:12px;
        margin-left:10px;
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
        background-color: #f7fafc;
        color: #1a202c;
        font-weight: bold;
        white-space: nowrap;
    }

    .empTable tbody tr:hover {
        background-color: #f0f4f8;
    }
 </style>

<div class="container" style="background-color: #02134F; color: white;margin:0%;max-width:100%;padding:2px">
        <div style="display: flex; align-items: start; justify-content: start;">
            <img src="{{$hrDetails->company_logo}}" alt="Logo" style="width: 200px; height: 50px; margin-right: 10px;">
            <h1 style="font-size: 20px; margin-left:25%;margin-top:10px">HR - {{$hrDetails->hr_name}}</h1>
        </div>
</div>
    <div style="margin-top:5px;margin-bottom:5px">
        <button style="width: 230px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;margin-left:23%"><a href="/JobSeekersAppliedJobs" style="text-decoration: none;color:white">Job Seekers Applied Jobs</a></button>
        <button style="width:200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a href="/VendorsSubmittedCVs" style="text-decoration: none;color:white">Vendors Submitted CVs</a></button>
        <button style="width:200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a href="/empregister" style="text-decoration: none;color:white">Employee Register</a></button>
        <button style="width:200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;"><a href="/emplist" style="text-decoration: none;color:white">Employees List</a></button>
        <button style="width: 100px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;" wire:click="logout">Logout</button>
    </div>
    <h1 class="text-3xl font-bold mb-4 text-center">All Employee Details</h1>
<div class="table-responsive" >
    <table class="empTable" >
        <thead>
            <tr>
                <th class="whitespace-nowrap">S.NO</th>
                <th class="whitespace-nowrap">Emp ID</th>
                <th class="whitespace-nowrap">Name</th>
                <th class="whitespace-nowrap">Email</th>
                <th class="whitespace-nowrap">Gender</th>
                <th class="whitespace-nowrap">DOB</th>
                <th class="whitespace-nowrap">Mobile No</th>
                <th class="whitespace-nowrap">Employee Type</th>
                <th class="whitespace-nowrap">Address</th>
                <!-- Add more table headers as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($employees as $employee)
                <tr>
                    <td class="whitespace-nowrap">{{ $counter++ }}</td>
                    <td class="whitespace-nowrap" >{{ $employee->emp_id}}</td>
                    <td class="whitespace-nowrap">{{ $employee->first_name }} {{ $employee->last_name }}</td>
                    <td class="whitespace-nowrap">{{ $employee->email }}</td>
                    <td class="whitespace-nowrap">{{ $employee->gender }}</td>
                    <td class="whitespace-nowrap">{{ $employee->date_of_birth }}</td>
                    <td class="whitespace-nowrap">{{ $employee->mobile_number }}</td>
                    <td class="whitespace-nowrap">{{ $employee->employee_type }}</td>
                    <td class="whitespace-nowrap">{{ $employee->address }},{{ $employee->city }},{{ $employee->state }},{{ $employee->postal_code }},{{ $employee->country }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>




