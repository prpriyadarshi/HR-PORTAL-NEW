<div style="max-width: 800px; margin: 0 auto;">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profile</title>
        <style>
            .education-entry {
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 4px;
                padding: 10px;
                margin: 10px 0;
                font-family: Montserrat;

            }

            .remove-education {
                background-color: #ff5555;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin: 5px;
                padding: 5px 10px;
                font-family: Montserrat;

            }

            .remove-education:hover {
                background-color: #cc0000;
                font-family: Montserrat;

            }

            body {
                font-family: Montserrat;
                background-color: #f2f2f2;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                margin: 0;
                padding: 10px;
            }

            .resume-card {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                padding: 20px;
                height: auto;
            }

            .profile-percent {
                font-size: 28px;
                /* Increase font size */
                font-weight: bold;
                color: rgb(2, 17, 79);
            }

            .name {
                font-size: 24px;
                /* Increase font size */
                color: rgb(2, 17, 79);
                margin-top: 10px;
            }

            .info {
                font-size: 14px;
                margin-top: 15px;
            }

            .section-title {
                font-weight: bold;
                color: rgb(2, 17, 79);
                font-size: 18px;
                /* Increase font size */
                margin-top: 20px;
            }

            .section-content {
                font-size: 16px;
                /* Increase font size */
                margin: 10px 0;
            }

            .resume-section {
                background-color: #fff;
                margin: 10px 0;
                border-radius: 5px;
                padding: 15px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            }

            .resume-header {
                background-color: rgb(2, 17, 79);
                color: #fff;
                padding: 15px;
                border-radius: 5px;
            }
        </style>
    </head>

    <body>
        <a href="/Jobs" style="text-decoration:none; font-family: Montserrat; background-color: rgb(2, 17, 79); color: white; padding: 5px; border-radius: 5px;">Back</a>
        <div class="resume-card" style="margin-top: 10px;">
            <div class="row">
                <div class="col-md-3">
                    <img height="160" width="160" style="border-radius: 10px" src="{{ asset('storage/' . $userDetails->image) }}" alt="">
                </div>

                <div class="col-md-9">
                    <div class="row">
                        <div class="name">
                            <div class="row">
                                <div class="col-md-10">
                                    @if($editProfile)
                                    <input style="font-size: 12px;" type="text" wire:model="fullName" placeholder="Full Name"><br>
                                    <input style="font-size:12px" type="file" wire:model="profileImage">
                                    @else
                                    <h4 style="font-family: Montserrat"><strong>{{$userDetails->full_name}}</strong></h4>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    @if($editProfile)
                                    <button wire:click="cancelProfileDetails" style="background-color: red;color:white;border:none;border-radius:5px;font-size:12px">Cancel</button>
                                    <button wire:click="saveProfileDetails" style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px">Save</button>
                                    @else
                                    <button wire:click="editProfileDetails" style="background-color: blue;color:white;border:none;border-radius:5px;font-size:12px">Edit</button>
                                    @endif
                                </div>
                            </div>
                            @if(!$editProfile)
                            <div style="font-size: 12px;">
                                <strong>Updated At:</strong> {{ date('d-M-Y H\h i\m s\s', strtotime($userDetails->created_at)) }}
                            </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="info">
                                    @if($editProfile)
                                    <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="address" placeholder="Address">
                                    <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="experienceStatus" placeholder="Experience Status">
                                    <input style="font-size: 12px;" type="text" wire:model="availableToJoin" placeholder="Available To Join">
                                    @else
                                    <div style="font-size: 12px;" class="location"><i style="margin-left: 2px;" class="fas fa-map-marker-alt"></i> {{$userDetails->address}}</div>
                                    <div style="font-size: 12px;" class="experienceOneTheme"><i class="fas fa-briefcase"></i> {{$userDetails->experience_status}}</div>
                                    <div style="font-size: 12px;" class="join-date"><i class="fas fa-calendar"></i> Available to join in {{$userDetails->available_to_join}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="info">
                                    @if($editProfile)
                                    <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="mobileNo" placeholder="Mobile No">
                                    <input style="font-size: 12px" type="text" wire:model="email" placeholder="Email">
                                    @else
                                    <div style="font-size: 12px;" class="phoneOneTheme"><strong><i class="fas fa-phone"></i></strong> {{$userDetails->mobile_no}}</div>
                                    <div style="font-size: 12px;" class="verifiedOneTheme"><strong><i class="fas fa-envelope"></i></strong> {{$userDetails->email}}</div>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="resume-section">
            <div class="row">
                <div class="col">
                    <h2 style="width:200px" class="section-title">Profile Summary</h2>
                </div>
                <div class="col" style="margin-left: 59%;">
                    @if($editProfileSummary)
                    <button wire:click="cancelProfileSummary" style="background-color: red;color:white;border:none;border-radius:5px;font-size:12px">Cancel</button>
                    <button wire:click="saveProfileSummary" style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px">Save</button>
                    @else
                    <button wire:click="editProfileSummaryDetails" style="background-color: blue;color:white;border:none;border-radius:5px;font-size:12px">Edit</button>
                    @endif
                </div>
            </div>

            @if($editProfileSummary)
            <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="profileSummary" placeholder="Profile Summary">
            @else
            <p style="font-size: 12px;" class="section-content">{{$userDetails->profile_summary}}</p>
            @endif
        </div>

        <div class="resume-section">
            <div class="row">
                <h2 style="width:200px" class="section-title">Technical Skills</h2>
            </div>
            <p class="section-content" style="font-size: 12px;">
            <div>
                @if (!$editingTechnical)
                @foreach ($technicalEntries as $index => $entry)
                <div class="education-entry">
                    <p style="font-size: 12px;">{{ $entry['technical_skills'] }}</p>
                    <button style="background-color: blue;color:white;border:none;border-radius:5px;font-size:12px" wire:click="editTechnical({{ $index }})">Edit</button>
                    <button style="background-color: red; color: white; border: none; border-radius: 5px; font-size: 12px" wire:click="deleteTechnical({{ $index }})">Delete</button>
                </div>
                @endforeach
                @else
                @if ($selectedTechnicalIndex !== null)
                <div class="education-entry">
                    <input style="font-size: 12px;" type="text" wire:model="technicalEntries.{{ $selectedTechnicalIndex }}.technical_skills" placeholder="Skills">
                </div>
                @endif
                <button style="background-color: red;color:white;border:none;border-radius:5px;font-size:12px" wire:click="cancelTechnical">Cancel</button>
                <button style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px" wire:click="saveTechnical">Save</button>
                @endif

                @if($editingTechnical==false)
                <button style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px" wire:click="addTechnical">Add Skills</button>
                @endif
            </div>
            </p>
        </div>

        <div class="resume-section">
            <div class="row">
                <div class="col">
                    <h2 style="width:200px" class="section-title">Contact Information</h2>
                </div>
                <div class="col" style="margin-left: 59%;">
                    @if($editContactDetails)
                    <button wire:click="cancelContactInfo" style="background-color: red;color:white;border:none;border-radius:5px;font-size:12px">Cancel</button>
                    <button wire:click="saveContactInfo" style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px">Save</button>
                    @else
                    <button wire:click="editContactInfo" style="background-color: blue;color:white;border:none;border-radius:5px;font-size:12px">Edit</button>
                    @endif
                </div>
            </div>
            <p class="section-content" style="font-size: 12px;">
                @if($editContactDetails)
                <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="city" placeholder="City">
                <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="state" placeholder="State">
                <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="country" placeholder="Country">
                <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="mobileNo" placeholder="Mobile No">
                <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="email" placeholder="Email">

                @else
                <strong> Location:</strong> {{$userDetails->city}}, {{$userDetails->state}}, {{$userDetails->country}}<br>
                <strong>Phone:</strong> {{$userDetails->mobile_no}}<br>
                <strong>Email:</strong> {{$userDetails->email}}
                @endif
            </p>
        </div>

        <div class="resume-section">
            <div class="row">
                <h2 class="section-title">Education</h2>
            </div>
            <div>
                @if (!$editing)
                @foreach ($educationEntries as $index => $entry)
                <div class="education-entry">
                    <p style="font-size: 12px;"><strong>Degree:</strong> {{ $entry['degree'] }}</p>
                    <p style="font-size: 12px;"><strong>University:</strong> {{ $entry['university'] }}</p>
                    <p style="font-size: 12px;"><strong>Graduation Year:</strong> {{ $entry['graduation_year'] }}</p>
                    <button style="background-color: blue;color:white;border:none;border-radius:5px;font-size:12px" wire:click="editEntry({{ $index }})">Edit</button>
                    <button style="background-color: red;color:white;border:none;border-radius:5px;font-size:12px" wire:click="removeEntry({{ $index }})">Delete</button>
                </div>
                @endforeach
                @else
                @if ($selectedEntryIndex !== null)
                <div class="education-entry">
                    <input style="font-size: 12px;" type="text" wire:model="educationEntries.{{ $selectedEntryIndex }}.degree" placeholder="Degree">
                    <input style="font-size: 12px;" type="text" wire:model="educationEntries.{{ $selectedEntryIndex }}.university" placeholder="University">
                    <input style="font-size: 12px;" type="text" wire:model="educationEntries.{{ $selectedEntryIndex }}.graduation_year" placeholder="Graduation Year">
                </div>
                @endif
                <button style="background-color: red;color:white;border:none;border-radius:5px;font-size:12px" wire:click="cancelEntry">Cancel</button>
                <button style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px" wire:click="saveEducation">Save</button>
                @endif

                @if($editing==false)
                <button style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px" wire:click="addEntry">Add Education</button>
                @endif
            </div>
        </div>





        <div class="resume-section">
            <div class="row">
                <div class="col">
                    <h2 style="width:200px" class="section-title">Career Profile</h2>
                </div>
                <div class="col" style="margin-left: 59%;">
                    @if($editCareerProfile)
                    <button wire:click="cancelCareerProfileDetails" style="background-color: red;color:white;border:none;border-radius:5px;font-size:12px">Cancel</button>
                    <button wire:click="saveCareerProfileDetails" style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px">Save</button>
                    @else
                    <button wire:click="editCareerProfileDetails" style="background-color: blue;color:white;border:none;border-radius:5px;font-size:12px">Edit</button>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="section-content" style="font-size: 12px;">
                        @if($editCareerProfile)
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="currentIndustry" placeholder="Current Industry">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="roleCategory" placeholder="Role Category">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="desiredJobType" placeholder="Desired Job Type">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="preferredShift" placeholder="Preferred Shift">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="expectedSalary" placeholder="Expected Salary">

                        @else
                        <strong>Current Industry:</strong> {{$userDetails->current_industry}}<br>
                        <strong>Role Category:</strong> {{$userDetails->role_category}}<br>
                        <strong>Desired Job Type:</strong> {{$userDetails->desired_job_type}}<br>
                        <strong>Preferred Shift:</strong> {{$userDetails->preferred_shift}}<br>
                        <strong>Expected Salary:</strong> ₹{{$userDetails->expected_salary}}
                        @endif
                    </p>
                </div>
                <div class="col">
                    <p style="font-size: 12px;">
                        @if($editCareerProfile)
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="department" placeholder="Department">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="jobRole" placeholder="Job Role">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="desiredEmploymentType" placeholder="Desired Employment Type">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="preferredWorkLocation" placeholder="Preferred Work Location">
                        @else
                        <strong>Department:</strong> {{$userDetails->department}}<br>
                        <strong>Job Role:</strong> {{$userDetails->job_role}}<br>
                        <strong>Desired Employment Type:</strong> {{$userDetails->desired_employment_type}}<br>
                        <strong>Preferred Work Location:</strong> {{$userDetails->preferred_work_location}}<br>
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="resume-section">
            <div class="row">
                <div class="col">
                    <h2 style="width:200px" class="section-title">Personal Details</h2>
                </div>
                <div class="col" style="margin-left: 59%;">
                    @if($editPersonalInfo)
                    <button wire:click="cancelPersonalDetails" style="background-color: red;color:white;border:none;border-radius:5px;font-size:12px">Cancel</button>
                    <button wire:click="savePersonalDetails" style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px">Save</button>
                    @else
                    <button wire:click="editPersonalDetails" style="background-color: blue;color:white;border:none;border-radius:5px;font-size:12px">Edit</button>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="section-content" style="font-size: 12px;">
                        @if($editPersonalInfo)
                        <input style="font-size: 12px;margin-bottom:5px" type="date" wire:model="dateOfBirth" placeholder="Date Of Birth" max="{{ date('Y-m-d') }}">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="religion" placeholder="Religion">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="differentlyAbled" placeholder="Differently Abled">
                        @else
                        <strong>Date of Birth:</strong> {{ date('d-M-Y', strtotime($userDetails->date_of_birth)) }}<br>
                        <strong>Religion:</strong> {{$userDetails->religion}}<br>
                        <strong>Differently Abled:</strong> {{$userDetails->differently_abled}}<br>
                        @endif
                    </p>
                </div>
                <div class="col">
                    <p style="font-size: 12px;">
                        @if($editPersonalInfo)
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="careerBreak" placeholder="Career Break">
                        <input style="font-size: 12px;margin-bottom:5px" type="text" wire:model="address" placeholder="Address">
                        @else
                        <strong>Career Break:</strong> {{$userDetails->career_break}}<br>
                        <strong>Address:</strong> {{$userDetails->address}}
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="resume-section">
            <h2 class="section-title">Languages</h2>
            <div>
                @if (!$editingLanguage)
                @foreach ($languageEntries as $index => $entry)
                <div class="education-entry">
                    <p style="font-size: 12px;"><strong>Language:</strong> {{ $entry['language'] }}</p>
                    <p style="font-size: 12px;"><strong>Proficiency:</strong> {{ $entry['proficiency'] }}</p>
                    <button style="background-color: blue;color:white;border:none;border-radius:5px;font-size:12px" wire:click="editLanguage({{ $index }})">Edit</button>
                    <button style="background-color: red; color: white; border: none; border-radius: 5px; font-size: 12px" wire:click="removeLanguage({{ $index }})">Delete</button>

                </div>
                @endforeach
                @else
                @if ($selectedLanguageIndex !== null)
                <div class="education-entry">
                    <input style="font-size: 12px;" type="text" wire:model="languageEntries.{{ $selectedLanguageIndex }}.language" placeholder="Language">
                    <input style="font-size: 12px;" type="text" wire:model="languageEntries.{{ $selectedLanguageIndex }}.proficiency" placeholder="Proficiency">
                </div>
                @endif
                <button style="background-color: red;color:white;border:none;border-radius:5px;font-size:12px" wire:click="cancelLanguage">Cancel</button>
                <button style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px" wire:click="saveLanguage">Save</button>
                @endif

                @if($editingLanguage==false)
                <button style="background-color: green;color:white;border:none;border-radius:5px;font-size:12px" wire:click="addLanguage">Add Language</button>
                @endif
            </div>
        </div>

    </body>

    </html>
</div>

</div>