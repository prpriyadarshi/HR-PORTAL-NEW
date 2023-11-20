<!-- resources/views/livewire/people-lists.blade.php -->

<div>
    <style>
        .text-yellow {
            color: yellow;
        }

        .text-gray {
            color: gray;
        }

        .col-6 {
            width: 250px;
        }
    </style>
    <div class="container">
        <div class="row" style="margin-left: 1%; width: 20%; position: relative;width:500px">
            <div class="col" style="text-align: center; border-radius: 5px; margin-right: 10px; cursor: pointer;">
                <a id="starred-tab-link" style="text-decoration: none; font-size: 13px; color: {{ $activeTab === 'starred' ? '#3498db' : '#333' }}" wire:click="$set('activeTab', 'starred')" class="links">Starred</a>
            </div>
            <div class="col" style="text-align: center; border-radius: 5px; cursor: pointer;">
                <a id="everyone-tab-link" style="text-decoration: none; font-size: 13px; color: {{ $activeTab === 'everyone' ? '#3498db' : '#333' }}" wire:click="$set('activeTab', 'everyone')" class="links">Everyone</a>
            </div>
            <!-- Line below the active tab -->
            <div style="transition: left 0.3s ease-in-out;position: absolute; bottom: 0; left: {{ $activeTab === 'everyone' ? '50%' : '0' }}; width: 50%; height: 4px; background: linear-gradient(to right, #3498db, #6dd5fa); border-radius: 5px;"></div>
        </div>


        @if ($activeTab === 'starred')
        <!-- Starred tab content -->
        <div class="row" style="margin-top: 15px">
            <!-- Search input and filter button -->
            <div class="col" style="width: 150px; background-color: white; border-radius: 5px; height: auto; margin-right: 20px; padding: 5px;">
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="col" style="margin: 0px; padding: 0px">
                            <div class="input-group">
                                <input wire:model="search" style="font-size: 10px; border-radius: 5px 0 0 5px; cursor: pointer" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button wire:click="starredFilter" style="height: 30px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none;" class="btn" type="button">
                                        <i style="text-align: center;" class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 15px; font-size: 13px;">
                        @if ($starredPeoples->isEmpty())
                        <div class="container" style="text-align: center; color: gray;">Looks like you don't have any records</div>
                        @else
                        @foreach ($starredPeoples->where('starred_status', 'starred') as $people)
                        <div wire:click="starredPersonById('{{ $people->id }}')" class="container" style="height:auto;cursor: pointer; background-color: {{ $selectStarredPeoples && $selectStarredPeoples->id == $people->id ? '#ccc' : 'grey' }}; padding: 5px; margin-bottom: 8px; width: 400px; border-radius: 5px;">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img class="profile-image" src="{{ $people->profile }}" alt="Profile Image">
                                </div>
                                <div class="col-md-5">
                                    <h6 class="username" style="font-size: 12px; color: white;">{{ $people->name}}</h6>
                                </div>
                                <div class="col-md-3">
                                    <p class="mb-0" style="font-size: 12px; color: white;font-size:8px">(#{{ $people->people_id }})</p>
                                </div>
                                <div class="col-md-2">
                                    <i class="fa fa-star starred" style="color: yellow;"></i>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        @endif
                    </div>
                </div>
            </div>

            <!-- Details of the selected person -->
            <div class="col-6" style="width: 500px; background-color: white; border-radius: 5px; height: 420px; padding: 5px;">
                @if ($selectStarredPeoples)
                <!-- Code to display details when $selectStarredPeoples is set -->
                <div class="row" style="font-size: 13px;">
                    <div class="row">
                        <style>
                            .people-image {
                                width: 150px;
                                height: 150px;
                                object-fit: cover;
                                border-radius: 50%;
                            }
                        </style>
                        <div class="col" style="margin-top: 50px;">
                            <img class="people-image" src="{{ optional($selectStarredPeoples)->profile }}" alt="Profile Image">
                        </div>
                        <div class="col" style="margin-top: 50px; margin-right: 80px;">
                        <a style="text-decoration: none;" wire:click="removeToggleStar('{{ optional($selectStarredPeoples)->people_id }}')" >
                            <button style="background-color: white;border:1px solid white">
                            <i class="fa fa-star" style="cursor: pointer; color: yellow;"></i>
                            </button>
                        </a>
                            <div>{{ optional($selectStarredPeoples)->name }}</div>
                            <strong>
                                <div>(#{{ optional($selectStarredPeoples)->people_id }})</div>
                            </strong>
                            <div>Contact Details <strong>{{ optional($selectStarredPeoples)->contact_details }}</strong></div>
                            <div>CATEGORY <strong>{{ optional($selectStarredPeoples)->category }}</strong></div>
                            <div>Location <strong>{{ optional($selectStarredPeoples)->location }}</strong></div>
                            <div>Joining Date <strong>{{ optional($selectStarredPeoples)->joining_date ? date('d M y', strtotime(optional($selectedPerson)->joining_date)) : '' }}</strong></div>
                            <div>Date Of Birth <strong>{{ optional($selectStarredPeoples)->date_of_birth ? date('d M y', strtotime(optional($selectStarredPeoples)->date_of_birth)) : '' }}</strong></div>
                        </div>
                    </div>
                </div>
                @elseif (!$starredPeoples->isEmpty())
                <!-- Code to display details of the first person in $starredPeoples when $selectStarredPeoples is not set -->
                @php
                $firstStarredPerson = $starredPeoples->first();
                @endphp
                <div class="row" style="font-size: 13px;">
                    <div class="row">
                        <style>
                            .people-image {
                                width: 150px;
                                height: 150px;
                                object-fit: cover;
                                border-radius: 50%;
                            }
                        </style>
                        <div class="col" style="margin-top: 50px;">
                            <img class="people-image" src="{{ optional($firstStarredPerson)->profile }}" alt="Profile Image">
                        </div>
                        <div class="col" style="margin-top: 50px; margin-right: 80px;">
                            <a style="text-decoration: none;" wire:click="removeToggleStar('{{ optional($firstStarredPerson)->people_id }}')"> <button style="background-color:white;border:1px solid white">
                                    <i class="fa fa-star" style="cursor: pointer; color: yellow;"></i>
                                </button></a>

                            <div>{{ optional($firstStarredPerson)->name }}</div>
                            <strong>
                                <div>(#{{ optional($firstStarredPerson)->people_id }})</div>
                            </strong>
                            <div>Contact Details <strong>{{ optional($firstStarredPerson)->contact_details }}</strong></div>
                            <div>CATEGORY <strong>{{ optional($firstStarredPerson)->category }}</strong></div>
                            <div>Location <strong>{{ optional($firstStarredPerson)->location }}</strong></div>
                            <div>Joining Date <strong>{{ optional($firstStarredPerson)->joining_date ? date('d M y', strtotime(optional($firstStarredPerson)->joining_date)) : '' }}</strong></div>
                            <div>Date Of Birth <strong>{{ optional($firstStarredPerson)->date_of_birth ? date('d M y', strtotime(optional($firstStarredPerson)->date_of_birth)) : '' }}</strong></div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
        <!-- End of Starred tab content -->
        @endif

        @if ($activeTab === 'everyone')
        <!-- Everyone tab content -->
        <div class="row" style="margin-top: 15px; width: 100%;">
            <!-- Search input and filter button -->
            <div class="col" style="width: 150px; background-color: white; border-radius: 5px; height: auto; margin-right: 20px; padding: 5px;">
                <div class="container" style="margin-top: 10px">
                    <div class="row">
                        <div class="col" style="margin: 0px; padding: 0px">
                            <div class="input-group">
                                <input wire:model="searchTerm" style="font-size: 10px; cursor: pointer; border-radius: 5px 0 0 5px;" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                <div class="input-group-append">
                                    <button wire:click="filter" style="height: 30px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none;" class="btn" type="button">
                                        <i style="text-align: center;" class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row" style="margin-top: 15px; font-size: 13px;">
                    @if ($peopleData->isEmpty())
                    <div class="container" style="text-align: center; color: gray;">No People Found</div>
                    @else
                    @foreach($peopleData as $people)
                    <div wire:click="selectPerson('{{ $people->emp_id }}')" class="container" style="height:auto;cursor: pointer; background-color: {{ $selectedPerson && $selectedPerson->emp_id == $people->emp_id ? '#ccc' : 'grey' }}; padding: 5px; margin-bottom: 8px; width: 400px; border-radius: 5px;">
                        <div class="row align-items-center">
                            <div class="col-md-2">
                                <img class="profile-image" src="{{ $people->image }}" alt="Profile Image">
                            </div>
                            <div class="col-md-6">
                                <h6 class="username" style="font-size: 12px; color: white;">{{ $people->first_name }} {{ $people->last_name }}</h6>
                            </div>
                            <div class="col-md-4">
                                <p class="mb-0" style="font-size: 12px; color: white;font-size:8px">(#{{ $people->emp_id }})</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>

            <!-- Details of the selected person -->
            <div class="col-6" style="width: 500px; background-color: white; border-radius: 5px; height: 420px; padding: 5px">
                @if ($selectedPerson)
                <div class="row" style="font-size: 13px;">
                    <div class="row">
                        <style>
                            .people-image {
                                width: 150px;
                                height: 150px;
                                object-fit: cover;
                                border-radius: 50%;
                            }
                        </style>
                        <div class="col" style="margin-top: 50px;">
                            <img class="people-image" src="{{ optional($selectedPerson)->image }}" alt="Profile Image">
                        </div>
                        <div class="col" style="margin-top: 50px; margin-right: 80px;">
                            @php
                            $starredPerson = DB::table('starred_peoples')
                            ->where('people_id', $selectedPerson->emp_id)
                            ->where('starred_status', 'starred')
                            ->where('emp_id', auth()->guard('emp')->user()->emp_id)
                            ->first();
                            @endphp
                            <a style="text-decoration: none;" wire:click="toggleStar('{{ optional($selectedPerson)->emp_id }}')">
                                <button style="background-color: #fff;border:1px solid white">
                                    <i class="fa fa-star{{ $starredPerson && $starredPerson->starred_status == 'starred' ? ' text-yellow' : ' text-gray' }}" style="cursor: pointer;"></i>
                                </button>
                            </a>

                            <div>{{ optional($selectedPerson)->first_name }} {{ optional($selectedPerson)->last_name }}</div>
                            <strong>
                                <div>(#{{ optional($selectedPerson)->emp_id }})</div>
                            </strong>
                            <div>Contact Details <strong>{{ optional($selectedPerson)->mobile_number }}</strong></div>
                            <div>CATEGORY <strong>{{ optional($selectedPerson)->job_title }}</strong></div>
                            <div>Location <strong>{{ optional($selectedPerson)->job_location }}</strong></div>
                            <div>Joining Date <strong>{{ optional($selectedPerson)->hire_date ? date('d M y', strtotime(optional($selectedPerson)->hire_date)) : '' }}</strong></div>
                            <div>Date Of Birth <strong>{{ optional($selectedPerson)->date_of_birth ? date('d M y', strtotime(optional($selectedPerson)->date_of_birth)) : '' }}</strong></div>
                        </div>
                    </div>
                </div>
                @elseif (!$peopleData->isEmpty())
                <!-- Display details of the first person in the list -->
                @php
                $firstPerson = $peopleData->first();
                $starredPerson = DB::table('starred_peoples')
                ->where('people_id', $firstPerson->emp_id)
                ->where('starred_status', 'starred')
                ->where('emp_id', auth()->guard('emp')->user()->emp_id)
                ->first();
                @endphp

                <div class="row" style="font-size: 13px;">
                    <div class="row">
                        <style>
                            .people-image {
                                width: 150px;
                                height: 150px;
                                object-fit: cover;
                                border-radius: 50%;
                            }
                        </style>
                        <div class="col" style="margin-top: 50px;">
                            <img class="people-image" src="{{ optional($firstPerson)->image }}" alt="Profile Image">
                        </div>
                        <div class="col" style="margin-top: 50px; margin-right: 80px;">
                            <a style="text-decoration: none;" wire:click="toggleStar('{{ optional($firstPerson)->emp_id }}')">
                                <button style="background-color: white;border:1px solid white">
                                    <i class="fa fa-star{{ $starredPerson && $starredPerson->starred_status == 'starred' ? ' text-yellow' : ' text-gray' }}" style="cursor: pointer;"></i>
                                </button>
                            </a>
                            <div>{{ optional($firstPerson)->first_name }} {{ optional($firstPerson)->last_name }}</div>
                            <strong>
                                <div>(#{{ optional($firstPerson)->emp_id }})</div>
                            </strong>
                            <div>Contact Details <strong>{{ optional($firstPerson)->mobile_number }}</strong></div>
                            <div>CATEGORY <strong>{{ optional($firstPerson)->job_title }}</strong></div>
                            <div>Location <strong>{{ optional($firstPerson)->job_location }}</strong></div>
                            <div>Joining Date <strong>{{ optional($firstPerson)->hire_date ? date('d M y', strtotime(optional($firstPerson)->hire_date)) : '' }}</strong></div>
                            <div>Date Of Birth <strong>{{ optional($firstPerson)->date_of_birth ? date('d M y', strtotime(optional($firstPerson)->date_of_birth)) : '' }}</strong></div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
        </div>
        <!-- End of Everyone tab content -->
        @endif
    </div>
</div>
@livewireScripts