<div>
    <style>
        .back-button {
            margin-top: 15px;
            text-align: right;
        }

        .back-button a {
            text-decoration: none;
            background-color: #02134F;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            margin-right: 10px;
            font-family: 'Montserrat';
        }

        /* Global styles */
        body {
            font-family: 'Montserrat';
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        /* Header styles */
        .header {
            background-color: #02454f;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            font-family: 'Montserrat';

        }

        .header h1 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
            font-family: 'Montserrat';

        }

        /* Navigation styles */
        .navigation {
            display: flex;
            justify-content: flex-end;
            margin: 20px 0;
        }

        .navigation button {
            font-size: 14px;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-left: 10px;
            cursor: pointer;
            background-color: #0077b6;
            color: #fff;
            text-decoration: none;
        }


        /* Job card styles */
        .job-listings {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(500px, 1fr));
            gap: 20px;
            list-style: none;
            padding: 0;
            margin: 0;
            font-family: 'Montserrat';

        }

        .job-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            font-family: 'Montserrat';

        }

        .job-card:hover {
            border: 2px solid black;
        }

        .job-title {
            font-size: 18px;
            color: #333;
            margin: 0;
            font-family: 'Montserrat';

        }

        .job-company {
            font-weight: bold;
            color: #0077b6;
            font-family: 'Montserrat';

        }

        .job-details {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            font-family: 'Montserrat';

        }

        .job-location,
        .job-salary,
        .job-posted-at,
        .job-vacancies,
        .job-education-requirement,
        .job-experience-requirement,
        .job-skills-required {
            font-size: 14px;
            color: #555;
            font-family: 'Montserrat';

        }

        .apply-button {
            background-color: #0077b6;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            margin-top: 10px;
            cursor: pointer;
        }

        .apply-button:disabled {
            background-color: gray;
            color: white;
            cursor: not-allowed;
        }

        .apply-button:hover {
            background-color: #00546d;
        }



        /* Table styles */
        .job-list {
            width: 100%;
            margin-top: 10px;
            font-size: 14px;
            font-family: 'Montserrat';

        }

        .job-list th {
            background-color: #007BFF;
            color: white;
            font-size: 14px;
            font-family: 'Montserrat';

        }

        .job-list td {
            vertical-align: middle;
            padding: 10px;
            font-family: 'Montserrat';

        }

        .job-list tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
            font-family: 'Montserrat';

        }

        /* Success and error message styles */
        #success-message,
        #error-message {
            position: relative;
            padding: 10px;
            margin: 10px 0;
            text-align: center;
        }

        #success-message {
            background-color: #4CAF50;
            color: white;
        }

        #error-message {
            background-color: #f44336;
            color: white;
        }

        .close-message {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: green;
        }

        .close {
            position: absolute;
            top: 5px;
            right: 10px;
            cursor: pointer;
            color: red;
        }

        .pdf-preview-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            gap: 10px;
            margin-top: 10px;
        }

        .pdf-preview {
            width: 100px;
            /* Adjust the width as needed */
            height: 70px;
            /* Adjust the height as needed */
        }

        .cv-info-container {
            display: flex;
            justify-content: space-between;
            background-color: #f5f5f5;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }

        .cv-info {
            text-align: center;
            width: 48%;
            font-size: 14px;
            /* Adjust the width as needed */
        }

        .cv-count {
            font-weight: bold;
            color: #0077b6;
            /* You can choose your preferred color */
        }
    </style>
    <div class="container" style="background-color: #02134F; color: white; padding: 8px;">
        <div style="display: flex; align-items: start; justify-content: start;">
        <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="Logo" style="height: 50px; margin-right: 10px;">

            <h1 style="font-size: 20px; margin-left:23%">Vendor - {{$user->full_name}}</h1>
        </div>

    </div>
    <div class="back-button">
        <a wire:click="logout"><i class="fas fa-sign-out-alt" style="margin-right: 5px;"></i> Logout</a>
    </div>
    <div class="container">
        <h2 style="text-align: center;
            font-family: Montserrat;
            ">All Jobs List</h2>
        @if($showSuccessMessage)
        <div class="alert alert-success" id="success-message">
            Your job application has been submitted successfully!
            <button class="close-message" wire:click="dismissMessage">×</button>
        </div>
        @elseif ($errors->has('duplicate'))
        <div class="alert alert-danger" id="error-message">
            {{ $errors->first('duplicate') }}
            <button class="close" wire:click="dismissError">×</button>
        </div>
        @endif
        @if (!is_null($jobs) && $jobs->count() > 0)

        <div class="job-listings" style="padding: 5px;">
            @foreach ($jobs as $index => $job)
            <div class="job-card" style="text-align: start;">
                <h3 class="job-title">{{ $job->title }}</h3>
                <p class="job-company"><strong class="subtitle">{{ $job->company_name }}</strong></p>

                <div>
                    <table>
                        <tr>
                            <th style="font-size: 12px; text-align: start;">
                                <p class="job-location" style="width: 150px;">
                                    <i class="fas fa-map-marker-alt"></i> {{ $job->location }}
                                </p>
                            </th>
                            <th style="font-size: 12px; text-align: start;">
                                <p class="job-salary" style="width:250px">
                                    <strong style="margin-right: 10px;">₹</strong>{{ number_format($job->salary, 2) }}
                                    PA
                                </p>
                            </th>
                            <th style="font-size: 12px; text-align: start;">
                                <p class="job-posted-at" style="width:150px">
                                    <i class="far fa-calendar-alt"></i>
                                    {{ date('d M Y', strtotime($job->expire_date)) }}
                                    <strong style="font-size: 10px;">(Expired)</strong>
                                </p>
                            </th>
                        </tr>
                    </table>
                </div>

                <table>
                    <tr>
                        <th style="font-size: 12px; text-align: start;">
                            <p class="job-vacancies" style="width:150px">
                                <i class="fas fa-users"></i> Vacancies: {{ $job->vacancies }}
                            </p>
                        </th>
                        <th style="font-size: 12px; text-align: start;">
                            <p class="job-education-requirement" style="width:250px;margin-right: 10px;">
                                <i class="fas fa-graduation-cap"></i> Education: {{ $job->education_requirement }}
                            </p>
                        </th>
                        <th style="font-size: 12px; text-align: start;">
                            <p class="job-experience-requirement" style="width:150px;">
                                <i class="fas fa-briefcase"></i> Experience: {{ $job->experience_requirement }}
                            </p>
                        </th>
                    </tr>
                </table>

                <p class="job-skills-required">
                    <i class="fas fa-tools"></i> Skills: {{ $job->skills_required }}
                </p>


                <div style="text-align: center;">
                    <table>
                        <tr>
                            <th style="width: 210px;">
                                <div class="pdf-preview-grid" id="pdf-preview{{ $index }}" style="text-align: center; display: none;">
                                    <iframe class="pdf-iframe" id="pdfIframe{{ $index }}" style="border: none;"></iframe>
                                </div>
                            </th>
                            <th>
                                <label for="cv{{ $index }}" style="font-size: 10px; display: inline-block; margin-right: 10px;">Select CV's</label>
                                <input wire:model="cv.{{ $job->job_id }}" type="file" id="cv{{ $index }}" accept=".pdf" style="display: none;" multiple onchange="previewPDFs(event, {{ $index }})">
                            </th>
                            <th>
                                <a wire:click="submitJobApplication('{{ $job->job_id }}')" class="apply-button" style="display: inline-block; font-size: 10px" wire:loading.attr="disabled">Submit</a>
                            </th>

                        </tr>
                    </table>
                </div>

                @if($errors->has("cv.$job->job_id"))
                <span style="text-align:center;display:flex;justify-content:center;color:red;font-size: 12px" class="error">
                    {{ $errors->first("cv.$job->job_id") }}
                </span>
                @enderror



                <div class="cv-info-container">
                    <div class="cv-info">
                        <p>Total CVs Submitted for this job: <span class="cv-count">{{ $cvCounts[$job->job_id] }}</span></p>
                    </div>
                    <div class="cv-info">
                        <p>Your Submissions for this job: <span class="cv-count">{{ $cvCountsForVendor[$job->job_id] }}</span></p>
                    </div>
                </div>


            </div>
            @endforeach

        </div>
        @else
        <div style="text-align:center;margin-top:10px">No Jobs Found</div>
        @endif
    </div>
</div>


<script>
    function previewPDFs(event, index) {
        const pdfPreviewContainer = document.getElementById('pdf-preview' + index);
        pdfPreviewContainer.style.display = 'block';

        const selectedFiles = event.target.files;

        // Clear the previous previews
        pdfPreviewContainer.innerHTML = '';

        if (selectedFiles.length > 0) {
            for (const file of selectedFiles) {
                if (file.type === 'application/pdf') {
                    if (file.size > 1024 * 1024) {
                        const errorMessage = document.createElement('p');
                        errorMessage.textContent = 'File size exceeds 1MB: ' + file.name;
                        errorMessage.style.color = 'red'; // Set the color to red
                        errorMessage.style.fontSize = '14px';
                        pdfPreviewContainer.appendChild(errorMessage);
                    } else {
                        const fileURL = URL.createObjectURL(file);
                        const iframe = document.createElement('iframe');
                        iframe.src = fileURL;
                        iframe.width = 50; // Adjust the width as needed
                        iframe.height = 30; // Adjust the height as needed
                        iframe.style.border = 'none';
                        pdfPreviewContainer.appendChild(iframe);
                    }
                } else {
                    const errorMessage = document.createElement('p');
                    errorMessage.textContent = 'File is not a PDF: ' + file.name;
                    pdfPreviewContainer.appendChild(errorMessage);
                }
            }
        } else {
            pdfPreviewContainer.style.display = 'none';
        }
    }
</script>