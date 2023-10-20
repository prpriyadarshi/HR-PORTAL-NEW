<div>
    <!DOCTYPE html>
    <html>

    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.2.3/html2canvas.min.js"></script>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 20px;
            }

            .cv-container {
                display: flex;
                background-color: #f0f0f0;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }

            .left-column,
            .right-column {
                flex: 1;
                padding: 20px;
            }

            .left-column {
                background-color: #fff;
                max-width: 350px;
                padding: 40px;
            }

            .right-column {
                background-color: #f0f0f0;
            }

            .col {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                height: 100%;
            }

            h1 {
                font-size: 24px;
                text-align: center;
                margin: 20px 0;
            }

            h2 {
                font-size: 20px;
                margin-top: 20px;
            }

            label {
                font-weight: bold;
            }

            input[type="text"],
            input[type="email"],
            input[type="tel"],
            textarea,
            input[type="file"],
            input[type="date"] {
                width: 96%;
                padding: 10px;
                margin: 5px 0;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
            }

            input[type="submit"] {
                background-color: #007BFF;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size: 18px;
            }

            input[type="submit"]:hover {
                background-color: #0056b3;
            }

            /* Added styles for education and work experience entries */
            .education-entry,
            .work-experience-entry {
                background-color: #fff;
                border: 1px solid #ccc;
                border-radius: 4px;
                padding: 10px;
                margin: 10px 0;
            }

            .remove-education,
            .remove-work-experience {
                background-color: #ff5555;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                margin: 5px;
                padding: 5px 10px;
            }

            .remove-education:hover,
            .remove-work-experience:hover {
                background-color: #cc0000;
            }

            .error {
                font-size: 12px;
                color: red;
            }
        </style>
    </head>

    <body>
        <div class="cv-container">
            <div class="col" style="background-color: white; width: 45%; height: 835px; overflow: auto;">
                <div style="margin-left: 40%; margin-top: 20px; font-size: 24px;"><strong>Create CV</strong></div>
                <div class="row" style="padding: 15px; margin: 0px;">
                    <form wire.submit.prevent="submit" style="border: 1px solid rgb(2, 17, 79); background-color: rgb(2, 17, 79); height: 100%;width:100%; overflow: auto;padding:8px;">
                        <div style="text-align: center;">
                            <h2 style="color:white;font-size:13px;">Personal Information</h2>
                        </div>
                        <div class="education-entry">
                            <label style="font-size:12px" for="first_name">First Name:</label>
                            <input type="text" wire:model="first_name">
                            @error('first_name') <span class="error">{{ $message }}</span> @enderror <br>

                            <label style="font-size:12px" for="last_name">Last Name:</label>
                            <input type="text" wire:model="last_name">
                            @error('last_name') <span class="error">{{ $message }}</span> @enderror <br>

                            <label style="font-size:12px" for="email">Email:</label>
                            <input type="email" wire:model="email">
                            @error('email') <span class="error">{{ $message }}</span> @enderror <br>

                            <label style="font-size:12px" for="phone">Phone:</label>
                            <input type="tel" wire:model="phone">
                            @error('phone') <span class="error">{{ $message }}</span> @enderror <br>

                            <label style="font-size:12px" for="country">Country:</label>
                            <input type="text" wire:model="country">
                            @error('country') <span class="error">{{ $message }}</span> @enderror <br>

                            <label style="font-size:12px" for="city">City:</label>
                            <input type="text" wire:model="city">
                            @error('city') <span class="error">{{ $message }}</span> @enderror <br>

                            <label style="font-size:12px" for="address">Address:</label>
                            <input type="text" wire:model="address">
                            @error('address') <span class="error">{{ $message }}</span> @enderror <br>

                            <label style="font-size:12px" for="date_of_birth">Date of Birth:</label>
                            <input type="date" wire:model="date_of_birth" max="<?php echo date('Y-m-d'); ?>">
                            @error('date_of_birth') <span class="error">{{ $message }}</span> @enderror <br>

                            <label style="font-size:12px" for="image">Image:</label>
                            <input type="file" wire:model="image" accept="image/*">
                            @error('image') <span class="error">{{ $message }}</span> @enderror <br>
                            @if ($image)
                            <div>
                                <img style="height:90px;width:80px" src="{{ $image->temporaryUrl() }}" alt="Image Preview" style="max-width: 300px;">
                            </div>
                            @endif
                        </div>
                        <div style="text-align: center;">
                            <h2 style="color:white;font-size:13px;">Education</h2>
                        </div>
                        <!-- Education Entries -->
                        <div class="education-entries">
                            @foreach($educationEntries as $index => $educationEntry)
                            <div class="education-entry">
                                <label style="font-size:12px" for="degree">Degree:</label>
                                <input type="text" wire:model="educationEntries.{{ $index }}.degree" required><br>
                                @error("educationEntries.$index.degree") <span class="error">{{ $message }}</span> @enderror <br>
                                <!-- Add similar error messages for other education fields -->
                                <label style="font-size:12px" for="university">University/Institution:</label>
                                <input type="text" wire:model="educationEntries.{{ $index }}.university" required><br>
                                @error("educationEntries.$index.university") <span class="error">{{ $message }}</span> @enderror <br>
                                <label style="font-size:12px" for="graduation_year">Graduation Year:</label>
                                <input type="text" wire:model="educationEntries.{{ $index }}.graduation_year" required><br>
                                @error("educationEntries.$index.graduation_year") <span class="error">{{ $message }}</span> @enderror <br>
                                <button wire:click="removeEducation({{ $index }})" style="background-color:red;color:white;border-radius:5px;margin-bottom:8px" type="button" class="remove-education">Remove</button>
                            </div>
                            @endforeach

                        </div>

                        <!-- Add Education Entry button -->
                        <button wire:click="addEducation" id="add_education" style="background-color:green;color:white;border-radius:5px;margin-bottom:8px;margin-left:10px" type="button">Add</button>

                        <div style="text-align: center;">
                            <h2 style="color:white;font-size:13px;">Work Experience</h2>
                        </div>
                        <!-- Work Experience Entries -->
                        <div class="work-experience-entries">
                            @foreach($workExperienceEntries as $index => $workExperienceEntry)
                            <div class="work-experience-entry">
                                <label style="font-size:12px" for="job_title">Job Title:</label>
                                <input type="text" wire:model="workExperienceEntries.{{ $index }}.job_title" required><br>
                                @error("workExperienceEntries.$index.job_title") <span class="error">{{ $message }}</span> @enderror <br>
                                <!-- Add similar error messages for other work experience fields -->
                                <label style="font-size:12px" for="company">Company:</label>
                                <input type="text" wire:model="workExperienceEntries.{{ $index }}.company" required><br>
                                @error("workExperienceEntries.$index.company") <span class="error">{{ $message }}</span> @enderror <br>
                                <label style="font-size:12px" for="start_date">Start Date:</label>
                                <input type="date" wire:model="workExperienceEntries.{{ $index }}.start_date" max="<?php echo date('Y-m-d'); ?>" required><br>
                                @error("workExperienceEntries.$index.start_date") <span class="error">{{ $message }}</span> @enderror <br>
                                <label style="font-size:12px" for="end_date">End Date:</label>
                                <input type="date" wire:model="workExperienceEntries.{{ $index }}.end_date" max="<?php echo date('Y-m-d'); ?>" required><br>
                                @error("workExperienceEntries.$index.end_date") <span class="error">{{ $message }}</span> @enderror <br>
                                <button wire:click="removeWorkExperience({{ $index }})" style="background-color:red;color:white;border-radius:5px;margin-bottom:8px" type="button" class="remove-work-experience">Remove</button>
                            </div>
                            @endforeach
                        </div>

                        <!-- Add Work Experience Entry button -->
                        <button wire:click="addWorkExperience" id="add_work_experience" style="margin-left:10px;background-color:green;color:white;border-radius:5px;margin-bottom:8px" type="button">Add</button>
                        <div style="text-align: center;">
                            <h2 style="color:white;font-size:13px;">Skills</h2>
                        </div>
                        <div class="education-entry">
                            <label style="font-size:12px" for="technical_skills">Technical Skills:</label>
                            <input type="text" wire:model="technical_skills">
                            @error('technical_skills') <span class="error">{{ $message }}</span> @enderror <br>
                        </div>
                        <div style="text-align: center;">
                            <h2 style="color:white;font-size:13px;">Professional Summary</h2>
                        </div>
                        <div class="education-entry">
                            <label style="font-size:12px" for="additional_info">Summary:</label>
                            <textarea wire:model="summary" rows="4"></textarea>
                            @error('summary') <span class="error">{{ $message }}</span> @enderror <br>
                        </div>
                        <div style="text-align: center;">
                            <h2 style="color:white;font-size:13px;">Languages</h2>
                        </div>
                        <div class="education-entry">
                            <label style="font-size:12px" for="languages">Languages and Proficiency:</label>
                            <input type="text" wire:model="languages">
                            @error('languages') <span class="error">{{ $message }}</span> @enderror <br>
                        </div>
                        <div class="row" style="margin-top: -15px; background-color: #f0f0f0; padding: 10px; border-top: 1px solid #ccc;">
                            <div class="col" style="margin-bottom: 10px;padding:5px">
                                <button type="button" wire:click="preview" style="background-color: #007BFF; color: #fff; padding: 10px 20px; border: none; border-radius: 5px;">Preview</button>
                            </div>
                            <div class="col" style="margin-bottom: 10px;padding:5px">
                                <button type="button" wire:click="submit" style="background-color: #28A745; color: #fff; padding: 10px 20px; border: none; border-radius: 5px;">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col" style="background-color: rgb(2, 17, 79); width: 55%; height: 835px;overflow: auto;">
                <div class="card" style="margin-top: 15px;margin-bottom:15px;width:595px">
                    <!DOCTYPE html>
                    <html>

                    <head>
                        <style>
                            body {
                                font-family: Arial, sans-serif;
                                background-color: #f4f4f4;
                                padding: 20px;
                            }

                            .cv-container {
                                width: 100%;
                                margin: 0 auto;
                                background-color: #f0f0f0;
                                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                            }

                            .row {
                                display: flex;
                                align-items: center;
                            }

                            .col {
                                flex: 1;
                            }

                            img {
                                width: 230px;
                                height: 180px;
                            }

                            .name {
                                font-size: 24px;
                                font-weight: bold;
                                margin-left: 20px;
                            }

                            .job-title {
                                font-size: 18px;
                                margin-left: 20px;

                            }


                            .left-column,
                            .right-column {
                                height: 600px;
                                padding: 2px;
                                margin: 0px;
                            }

                            .left-column {
                                background-color: #fff;
                                max-width: 266px;
                            }

                            .right-column {
                                background-color: #f0f0f0;
                            }

                            .profile-image {
                                width: 250px;
                                height: 160px;
                            }

                            .contact-info {
                                display: flex;
                                align-items: center;
                                font-size: 12px;
                            }

                            .contact-icon {
                                margin-right: 10px;
                                font-size: 24px;
                                font-size: 12px;
                            }

                            .col-5 {
                                margin-right: 0px;
                            }
                        </style>
                    </head>

                    <body>
                        <div class="row" style="margin-top: -15px; background-color: white; position: relative;">
                            <div class="col">
                                <div class="profile-image" style="padding: 10px; background-color: rgb(2, 17, 79)">
                                    @if($image)
                                    <img style="width: 160px;height:150px;margin-left:37px;border:5px solid white;" src="{{ $image->temporaryUrl() }}" alt="Your Photo">
                                    @else
                                    <div></div>
                                    @endif

                                </div>
                            </div>
                            <div class="col-5" style="margin-right:50px;">
                                <p class="name">{{$first_name}} {{$last_name}}</p>
                                @if(!empty($workExperienceEntries) && count($workExperienceEntries) > 0)
                                <p class="job-title">{{ $workExperienceEntries[0]['job_title'] }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="cv-container">
                            <div class="left-column">
                                <h6 style="text-align: center;font-size:12px;margin-top:10px;background-color:rgb(2, 17, 79);color:white;padding:5px">
                                    <strong>PROFESSIONAL SUMMARY</strong>
                                </h6>
                                <p style="text-align:start;font-size: 13px;">
                                    {{$summary}}
                                </p>
                                <h6 style="text-align: center;font-size:12px;margin-top:10px;background-color:rgb(2, 17, 79);color:white;padding:5px">
                                    <strong>Personal Details</strong>
                                </h6>
                                <ul style="text-align: start;">
                                    @if($first_name &&$last_name)
                                    <li>
                                        <p style="font-size:12px"><strong>Name</strong> : {{$first_name}} {{$last_name}}</p>
                                    </li>
                                    @endif
                                    @if($email)
                                    <li>
                                        <p style="font-size:12px"><strong>Email</strong> : {{$email}}</p>
                                    </li>
                                    @endif
                                    @if($date_of_birth)
                                    <li>
                                        <p style="font-size:12px"><strong>DOB</strong> : {{$date_of_birth}}</p>
                                    </li>
                                    @endif
                                   @if($city && $address)
                                   <li>
                                        <p style="font-size:12px"><strong>Address</strong> : {{$city}},{{$address}}.</p>
                                    </li>
                                   @endif
                                </ul>
                                <h6 style="font-size:12px;text-align: center;background-color:rgb(2, 17, 79);color:white;margin-top:10px;padding:5px">
                                    <strong>LANGUAGES</strong>
                                </h6>
                                <ul>
                                    @if($languages)
                                    <li>
                                        <p style="font-size: 12px;">{{$languages}}</p>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <div class="right-column">

                                <h6 style="font-size:12px;text-align: center;margin-top:10px;background-color:rgb(2, 17, 79);color:white;padding:5px">
                                    <strong>TECHNICAL SKILLS</strong>
                                </h6>
                                <ul>
                                   @if($technical_skills)
                                   <li>
                                        <p style="font-size: 12px;">{{$technical_skills}}</p>
                                    </li>
                                   @endif
                                </ul>
                                <h6 style="font-size: 12px; text-align: center; background-color: rgb(2, 17, 79); color: white;padding:5px">
                                    <strong>EXPERIENCE</strong>
                                </h6>
                                <ul>
                                   @foreach($workExperienceEntries as $index => $workExperienceEntry)
                                    <li>
                                        <p>
                                        <div style="font-size: 12px"><strong>{{ $workExperienceEntry['job_title'] }}</strong></div>
                                        <div style="font-size: 12px">{{ $workExperienceEntry['company'] }}</div>
                                        <div style="font-size: 12px">{{ $workExperienceEntry['start_date'] }} - {{ $workExperienceEntry['end_date'] }}</div>
                                        </p>
                                    </li>
                                    @endforeach
                                </ul>

                                <h6 style="font-size: 12px; text-align: center; background-color: rgb(2, 17, 79); color: white;padding:5px">
                                    <strong>EDUCATION</strong>
                                </h6>
                                <ul>
                                    @foreach($educationEntries as $index => $educationEntry)
                                    <li>
                                        <p>
                                        <div style="font-size: 12px"><strong>{{ $educationEntry['degree'] }}</strong></div>
                                        <div style="font-size: 12px">{{ $educationEntry['university'] }}</div>
                                        <div style="font-size: 12px">{{ $educationEntry['graduation_year'] }}</div>
                                        </p>
                                    </li>
                                    @endforeach
                                </ul>

                            </div>
                        </div>
                </div>
    </body>

    </html>

</div>
</div>
</body>


</html>
</div>
<script>
    // JavaScript to handle adding and removing education and work experience entries

    document.addEventListener("livewire:load", function() {
        const addEducationButton = document.getElementById("add_education");
        const addWorkExperienceButton = document.getElementById("add_work_experience");

        // Event listener for adding education entry
        addEducationButton.addEventListener("click", function() {
            const educationContainer = document.querySelector(".education-entries");
            const index = document.querySelectorAll(".education-entry").length;
            educationContainer.appendChild(createEducationEntry(index));
        });

        // Event listener for adding work experience entry
        addWorkExperienceButton.addEventListener("click", function() {
            const workExperienceContainer = document.querySelector(".work-experience-entries");
            const index = document.querySelectorAll(".work-experience-entry").length;
            workExperienceContainer.appendChild(createWorkExperienceEntry(index));
        });

        // Event listener for removing education entry
        document.addEventListener("click", function(event) {
            if (event.target.classList.contains("remove-education")) {
                event.target.parentElement.remove();
            }
        });

        // Event listener for removing work experience entry
        document.addEventListener("click", function(event) {
            if (event.target.classList.contains("remove-work-experience")) {
                event.target.parentElement.remove();
            }
        });
    });

    // Function to create a new education entry
    function createEducationEntry(index) {
        const educationHTML = `
            <div class="education-entry">
                <label style="font-size:12px" for="degree">Degree:</label>
                <input type="text" wire:model="educationEntries.${index}.degree" required><br>
                <label style="font-size:12px" for="university">University/Institution:</label>
                <input type="text" wire:model="educationEntries.${index}.university" required><br>
                <label style="font-size:12px" for="graduation_year">Graduation Year:</label>
                <input type="text" wire:model="educationEntries.${index}.graduation_year" required><br>
                <button wire:click="removeEducation(${index})" style="background-color:red;color:white;border-radius:5px;margin-bottom:8px" type="button" class="remove-education">Remove</button>
            </div>
        `;
        const educationEntry = document.createElement("div");
        educationEntry.innerHTML = educationHTML;
        return educationEntry;
    }

    // Function to create a new work experience entry
    function createWorkExperienceEntry(index) {
        const workExperienceHTML = `
            <div class="work-experience-entry">
                <label style="font-size:12px" for="job_title">Job Title:</label>
                <input type="text" wire:model="workExperienceEntries.${index}.job_title" required><br>
                <label style="font-size:12px" for="company">Employer:</label>
                <input type="text" wire:model="workExperienceEntries.${index}.company" required><br>
                <label style="font-size:12px" for="start_date">Start Date:</label>
                <input type="date" wire:model="workExperienceEntries.${index}.start_date" max="<?php echo date('Y-m-d'); ?>" required><br>
                <label style="font-size:12px" for="end_date">End Date:</label>
                <input type="date" wire:model="workExperienceEntries.${index}.end_date" max="<?php echo date('Y-m-d'); ?>" required><br>
                <button wire:click="removeWorkExperience(${index})" style="background-color:red;color:white;border-radius:5px;margin-bottom:8px" type="button" class="remove-work-experience">Remove</button>
            </div>
        `;
        const workExperienceEntry = document.createElement("div");
        workExperienceEntry.innerHTML = workExperienceHTML;
        return workExperienceEntry;
    }
</script>