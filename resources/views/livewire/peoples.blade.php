<!-- resources/views/livewire/people-lists.blade.php -->

<div>
    <style>
      .text-yellow {
            color: yellow;
        }

        .text-gray {
            color: gray;
        }
        .col-6{
            width:250px;
        }
    </style>
    <div class="container">
        <div class="row" style="margin-left: 1%; width: 20%">
            <div class="col" style="text-align: center; background-color: white; border-radius: 5px; margin-right: 10px; cursor: pointer;">
                <a id="starred-tab-link" style="text-decoration: none; font-size: 12px" wire:click="$set('activeTab', 'starred')" class="links">Starred</a>
            </div>
            <div class="col" style="text-align: center; background-color: white; border-radius: 5px; cursor: pointer">
                <a id="everyone-tab-link" style="text-decoration: none; font-size: 12px" wire:click="$set('activeTab', 'everyone')" class="links">Everyone</a>
            </div>
        </div>

        @if ($activeTab === 'starred')
        <!-- Starred tab content -->
            <div class="row" style="margin-top: 15px">
                <!-- Search input and filter button -->
                <div class="col" style="width: 150px; background-color: white; border-radius: 5px; height: 420px; margin-right: 20px; padding: 5px;">
                    <div class="container" style="margin-top: 10px">
                        <div class="row">
                            <div class="col" style="margin: 0px; padding: 0px">
                                <div class="input-group">
                                    <input wire:model="searchTerm" style="font-size: 10px; border-radius: 5px 0 0 5px; cursor: pointer" type="text" class="form-control" placeholder="Search for Emp.Name or ID" aria-label="Search" aria-describedby="basic-addon1">
                                    <div class="input-group-append">
                                        <button style="height: 30px; border-radius: 0 5px 5px 0; background-color: #007BFF; color: #fff; border: none;" class="btn" type="button">
                                            <i style="text-align: center;" class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px; font-size: 13px;">
                            @if ($peopleData->isEmpty())
                            <div class="container" style="text-align: center; color: gray;">Looks like you don't have any records</div>
                            @else
                            @foreach ($peopleData->where('is_starred', 1) as $people)
                            <div wire:click="selectPerson('{{ $people->emp_id }}')" class="container" style="cursor: pointer; background-color: darkgrey; padding: 5px; margin-bottom: 8px; width: 340px; border-radius: 5px;">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <img class="profile-image" src="{{ $people->image }}" alt="Profile Image">
                                    </div>
                                    <div class="col">
                                        <h6 class="username" style="font-size: 12px; color: white;">{{ $people->first_name }} {{ $people->last_name }}</h6>
                                    </div>
                                    <div class="col">
                                        <p class="mb-0" style="font-size: 12px; color: white;">(#{{ $people->emp_id }})</p>
                                    </div>
                                    <div class="col">
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
                            <i wire:click="toggleStar('{{ optional($selectedPerson)->emp_id }}')" class="fa fa-star{{ optional($peoples->where('emp_id', optional($selectedPerson)->emp_id)->first())->is_starred ? ' text-yellow' : ' text-gray' }}" style="cursor: pointer;"></i>


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

                    @else
                    <div class="row">
                        <img style="margin-top: 100px; width: 170px; height: 100px; margin-left: 33%;" src="https://th.bing.com/th/id/R.9646611b8eca1ef875d5f6b28acbef61?rik=4FbhfOAXBiY69w&riu=http%3a%2f%2fclipground.com%2fimages%2fpale-yellow-and-white-clipart-13.jpg&ehk=9gDqIGcZ%2bfCmVO3NWcPq0GEcpSmwI5pdsGZUjvA5Ud0%3d&risl=&pid=ImgRaw&r=0" alt="">
                        <div style="text-align: center; font-size: 12px; color: grey; margin-top: 10px;">Hey, you haven't starred any peers!</div>
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
                <div class="col" style="width: 150px; background-color: white; border-radius: 5px; height: 420px; margin-right: 20px; padding: 5px;">
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
                        <div wire:click="selectPerson('{{ $people->emp_id }}')" class="container" style="cursor: pointer; background-color: darkgrey; padding: 5px; margin-bottom: 8px; width: 340px; border-radius: 5px;">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <img class="profile-image" src="{{ $people->image }}" alt="Profile Image">
                                </div>
                                <div class="col">
                                    <h6 class="username" style="font-size: 12px; color: white;">{{ $people->first_name }} {{ $people->last_name }}</h6>
                                </div>
                                <div class="col">
                                    <p class="mb-0" style="font-size: 12px; color: white;">(#{{ $people->emp_id }})</p>
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
                            <i wire:click="toggleStar('{{ optional($selectedPerson)->emp_id }}')" class="fa fa-star{{ optional($peoples->where('emp_id', optional($selectedPerson)->emp_id)->first())->is_starred ? ' text-yellow' : ' text-gray' }}" style="cursor: pointer;"></i>


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


                    @else
                    <div class="row">
                        @php
                        $firstPerson = $peopleData->first();
                        @endphp
                        <style>
                            .people-image {
                                width: 150px;
                                height: 150px;
                                object-fit: cover;
                                border-radius: 50%;
                            }
                        </style>
                        <div class="col" style="margin-top: 50px;">
                            <img class="people-image" src="{{ $firstPerson->image }}" alt="Profile Image">
                        </div>
                        <div class="col" style="margin-top: 50px; margin-right: 80px;">
                            <i wire:click="toggleStar({{ $firstPerson->emp_id }})" class="fa fa-star{{ $firstPerson->is_starred ? ' text-yellow' : ' text-gray' }}" style="cursor: pointer;"></i>
                            <div>{{ $firstPerson->first_name }} {{ $firstPerson->last_name }}</div>
                            <strong>
                                <div>(#{{ $firstPerson->emp_id }})</div>
                            </strong>
                            <div>Contact Details <strong>{{ $firstPerson->mobile_number }}</strong></div>
                            <div>CATEGORY <strong>{{ $firstPerson->job_title }}</strong></div>
                            <div>Location <strong>{{ $firstPerson->job_location }}</strong></div>
                            <div>Joining Date <strong>{{ date('d M y', strtotime($firstPerson->hire_date)) }}</strong></div>
                            <div>Date Of Birth <strong>{{ date('d M y', strtotime($firstPerson->date_of_birth)) }}</strong></div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        <!-- End of Everyone tab content -->
        @endif
    </div>
</div>