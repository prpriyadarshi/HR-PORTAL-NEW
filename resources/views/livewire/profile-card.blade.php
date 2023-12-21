<div>
    @auth('emp')
    @foreach($employees as $employee)
    <div class="profile-container">

        <div>

            <img class="profile-image" src="{{asset($employee->image)}}">

        </div>



        <div class="emp-name">

            <h6 style="font-size: 12px;color:white" class="username">{{$employee->first_name}} {{$employee->last_name}}</h6>

            <a href="{{ route('profile.info') }}" class="nav-item-1" style="text-decoration: none;color: #EC9B3B;font-weight:500;font-size: 11px;" onclick="changePageTitle()">View My Info</a>

        </div>

        <div>

            <a href="/Settings" onclick="changePageTitle123()">

                <i style="color: white;" class="fas fa-cog"></i>

            </a>

        </div>

    </div>
    @endforeach
    @endauth
    @auth('hr')
    @foreach($hrDetails as $employee)
    <div class="profile-container">

        <div>

            <img class="profile-image" src="{{asset($employee->image)}}">

        </div>



        <div class="emp-name">

            <h6 style="font-size: 12px;color:white" class="username">{{$employee->employee_name}}</h6>

            <a href="#" class="nav-item-1" style="text-decoration: none;" onclick="changePageTitle()">View My Info</a>

        </div>

        <div>

            <a href="#" onclick="changePageTitle123()">

                <i style="color: white;" class="fas fa-cog"></i>

            </a>

        </div>

    </div>
    @endforeach
    @endauth
    
    @auth('it')
    @foreach($itDetails as $employee)
    <div class="profile-container">

        <div>

            <img class="profile-image" src="{{asset($employee->image)}}">

        </div>



        <div class="emp-name">

            <h6 style="font-size: 12px;color:white" class="username">{{$employee->employee_name}}</h6>

            <a href="#" class="nav-item-1" style="text-decoration: none;" onclick="changePageTitle()">View My Info</a>

        </div>

        <div>

            <a href="#" onclick="changePageTitle123()">

                <i style="color: white;" class="fas fa-cog"></i>

            </a>

        </div>

    </div>
    @endforeach
    @endauth

    @auth('finance')
    @foreach($financeDetails as $employee)
    <div class="profile-container">

        <div>

            <img class="profile-image" src="{{asset($employee->image)}}">

        </div>



        <div class="emp-name">

            <h6 style="font-size: 12px;color:white" class="username">{{$employee->employee_name}}</h6>

            <a href="#" class="nav-item-1" style="text-decoration: none;" onclick="changePageTitle()">View My Info</a>

        </div>

        <div>

            <a href="#" onclick="changePageTitle123()">

                <i style="color: white;" class="fas fa-cog"></i>

            </a>

        </div>

    </div>
    @endforeach
    @endauth
</div>