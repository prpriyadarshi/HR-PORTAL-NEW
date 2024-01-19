<div >
<body>
    @if($show=='true')
    @livewire('add-employee-details')
    @endif
<div class="container-fluid px-1  rounded">
        <nav>
            <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                        aria-controls="nav-home" aria-selected="true">Summary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
                        aria-controls="nav-profile" aria-selected="false">Dashboard</a>
                </li>
            </ul>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="bg-white p-3 mb-3 rounded" style="display:flex;gap:5px;text-align:start;justify-content:center;">
                    <div class="text">
                        <h6>Welcome Bandari Divya, your dashboard is ready!</h6>
                        <p>Great Job, your affiliate dashboard is ready to go!You can view profiles,vendors,customers
                            and purchase orders.</p>
                    </div>
                    <div class="image" >
                        <img src="https://img.freepik.com/free-vector/modern-business-team-working-open-office-space_74855-5541.jpg"
                            alt="" class="img-fluid" height="180px" width="200px">
                    </div>
                </div>
                <div class="row mx-0 px-0 d-flex justify-content-between flex-wrap">
                    <div class="col-md-8 px-0">
                        <div class=" flex-wrap px-0 " style="display:flex;gap:5px;text-align:start;">
                            <div class="first col mb-1 p-2 rounded bg-white">
                                <p>Available Position</p>
                                <h6>24</h6>
                                <span>4 Urgently needed</span>
                            </div>
                            <div class="first col mb-1 p-2 rounded bg-white text-content-start">
                                <p>Job Open</p>
                                <h6>4</h6>
                                <span>4 Active hiring</span>
                            </div>
                            <div class="first col mb-1 p-2 rounded bg-white text-content-start">
                                <p>New Employees</p>
                                <h6>10</h6>
                                <span>2 Department</span>
                            </div>
                        </div>
                        <div class="d-flex flex-wrap" style="display:flex;gap:5px;">
                            <div class="first col mb-1 p-2 mt-1 rounded bg-white d-flex align-items-center">
                                <div class="d-flex flex-column gap-10px">
                                    <p>Total Employees</p>
                                    <h6>150+</h6>
                                </div>
                                <div>
                                    <img src="{{ asset('/images/Vector 3.png' ) }}" alt="">
                                </div>
                            </div>
                            <div class="first col mb-1 p-2 mt-1 rounded bg-white d-flex align-items-center">
                                <div class="d-flex flex-column gap-10px">
                                    <p>HR Requests</p>
                                    <h6>15</h6>
                                </div>
                            </div>
                        </div>
                        <div class="first col mb-1 p-2 mt-1 rounded bg-white d-flex flex-column align-items-start">
                            <div style="font-size: 11px; color: rgb(2, 17, 79); font-weight: 500;">
                                <h6>Announcement</h6>
                            </div>
                            <div class="d-flex flex-column gap-10px" style="width: 100%;">
                                <div class="d-flex flex-row rounded bg-white justify-content-between mb-2" style="border: 1px solid #ccc;font-size:12px;padding:5px;">
                                    <p class="font-weight-normal ">Outing schedule for every departement 
                                </p>
                                <span>5 Minutes ago</span>
                                   
                                </div>
                                <div class="d-flex flex-row rounded bg-white justify-content-between" style="border: 1px solid #ccc;font-size:12px;padding:5px;">
                                    <p class="font-weight-normal">Outing schedule for every departement 
                                </p>
                                <span>5 Minutes ago</span>
                                   
                                </div>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <div class="col-12 mb-2 p-0">
                            <div class="card mx-0" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                <div class="card-header" style="background:rgb(2, 17, 79);color:white;padding:4px;font-size:14px;font-weight:500;">
                                    Recently Activity
                                </div>
                                <div class="card-body">
                                    <span class="small-text">10.40 AM, Fri 10 Dec 2023 <br>
                                      <h6 class="card-title">You Posted a New Job</h6>
                                    </span>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <div style="display:flex;justify-content:end;">
                                          <a href="#" class="btn btn-start">See All Activity</a>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-white mt-2 rounded" style="border:1px solid #CCC;padding:10px 0;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                                <div class="container m-0 rounded bg-white" >
                                    <div class="d-flex flex-row justify-content-between">
                                        <p style="font-size:14px;color:rgb(2, 17, 79);font-weight:500;">Upcoming Schedule</p>
                                    </div>
                                    <div class="d-flex flex-column align-items-start" style="width:100%;">
                                        <p style="font-size:11px;font-weight:500;">Priority</p>
                                        <div class="d-flex flex-row align-items-start bg-white rounded" style="border:1px solid #ccc;padding:5px;width:100%;">
                                            <div class="d-flex flex-column text-align-start">
                                               <p style="font-size: 0.755rem; word-break: break-all;color:#778899;">
                                                    Review candidate applications <br>
                                                    <span style="font-size: 0.625rem;">Today - 11.30 AM</span>
                                                </p>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-ellipsis " style="color:#ccc;"></i>
                                            </div>
                                        </div>
                                        <p class="mt-1"style="font-size:11px;font-weight:500;">Other</p>
                                        <div class="bg-white rounded" style="display: flex; flex-direction: row; text-align: start; align-items: center; justify-content: center; gap: 42px; padding:5px;border:1px solid #ccc;width:100%;">
                                            <div>
                                            <p style="font-size: 0.755rem; word-break: break-all;color:#778899;">
                                                    Review candidate applications <br>
                                                    <span style="font-size: 0.625rem;">Today - 11.30 AM</span>
                                                </p>
                                            </div>
                                            <div>
                                                <i class="fa-solid fa-ellipsis " style="color:#ccc;"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
               <div class="bg-white p-1 d-flex flex-row justify-content-between  mb-2">
                    <div class="col-8 d-flex flex-row justify-content-between mt-2 mb-2" style="text-align:start;">
                        <div class="col d-flex flex-column rounded p-1" style="background:#ffe2c3; color:rgb(2, 17, 79); margin-right: 7px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                            <p class="font-weight-500" style="font-size:13px;">Add Employee</p>
                            <a class="text-decoration-none" href="{{ route('add-employee-details') }}">
                                <i class="fa-solid fa-user-plus" style="display:flex;justify-content:center;cursor:pointer;"></i>
                            </a>

                        </div>
                        <div class="col d-flex flex-column rounded p-1" style="background:#c3e0ff; color:rgb(2, 17, 79); margin-right: 7px;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                            <p class="font-weight-500" style="font-size:13px;">Update Employee</p>
                            <a class="text-decoration-none" href="{{ route('update-employee-details') }}">
                                <i class="fa-solid fa-user-plus" style="display:flex;justify-content:center;cursor:pointer;"></i>
                            </a>
                        </div>
                        <div class="col d-flex flex-column rounded p-1" style="background:#e2c3ff; color:rgb(2, 17, 79);box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);">
                            <p class="font-weight-500" style="font-size:13px;">Add Payroll</p>
                        </div>
                    </div>
                    <div class="col-4 p-2">
                        <div class="rounded" style="border:1px solid #ccc;background:#fffaea;">
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</div>