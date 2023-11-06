<div>
    <style>
    /* Add this CSS to your stylesheet or create a new CSS file */
    .job-posting-form {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f5f5f5;
        margin-bottom: 15px;
        font-size: 12px;

    }

    .job-posting-form .form-group {
        margin-bottom: 20px;
    }

    .job-posting-form label {
        font-weight: bold;
    }

    .job-posting-form input[type="text"],
    .job-posting-form input[type="number"],
    .job-posting-form select,
    .job-posting-form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 12px;
    }

    .job-posting-form select {
        height: 40px;
    }

    .job-posting-form .btn-primary {
        background-color: rgb(2, 17, 79);
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        cursor: pointer;
    }

    .text-danger {
        font-size: 12px;
    }

    .job-posting-form .btn-primary:hover {
        background-color: #002D91;
    }

    #success-message {
        position: relative;
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        margin: 10px 0;
        text-align: center;
    }

    #success-message .close-message {
        position: absolute;
        top: 5px;
        right: 10px;
        cursor: pointer;
        color: green;
    }
    </style>
    <div style="text-align: center;background-color: #02134F;color:white;padding:8px;margin-bottom:10px">
        Post Jobs
    </div>
    <button style="width: 80px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;margin-left:90%"
        wire:click="logout">Logout</button>
    <a href="/list-of-applied-jobs">    
        <button style="width: 200px; border-radius: 5px; background-color: rgb(2, 17, 79); color: white;margin-right:120%;"
        >List of Applied Jobs</button>
    </a>        
    @if(Session::has('success'))
    <div id="success-alert" class="alert alert-success alert-dismissible fade show" style="
            height: 30px;
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: lightgreen;
            color: white;
            margin-bottom: 5px;
            font-size: 12px;">
        {{ Session::get('success') }}
    </div>
    @endif

    <div class="job-posting-form">
        <h2 style="text-align: center;font-size:16px">Job Posting Form</h2>
        <form wire:submit.prevent="submitJob">
            <div class="form-group">
                <label for="company_id">Company ID:</label>
                <select wire:model="company_id" class="form-control" wire:change="selectedCompanyId">
                    <option value="">Select a company ID</option>
                    @foreach ($companies as $company)
                    <option value="{{ $company->company_id }}">{{ $company->company_id }}</option>
                    @endforeach
                </select>
                @error('company_id') <span class="text-danger">{{ $message }}</span> @enderror

            </div>

            <div class="form-group">
                <label for="company_name">Company Name:</label>
                <input wire:model="company_name" type="text" class="form-control" readonly>
            </div>


            <div class="form-group">
                <label for="title">Job Title:</label>
                <input wire:model="title" type="text" class="form-control">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror

            </div>

            <div class="form-group">
                <label for="description">Job Description:</label>
                <textarea wire:model="description" class="form-control" rows="5"></textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror

            </div>

            <div class="form-group">
                <label for="location">Job Location:</label>
                <input wire:model="location" type="text" class="form-control">
                @error('location') <span class="text-danger">{{ $message }}</span> @enderror

            </div>

            <div class="form-group">
                <label for="salary">Salary:</label>
                <input wire:model="salary" type="number" class="form-control">
                @error('salary') <span class="text-danger">{{ $message }}</span> @enderror

            </div>


            <div class="form-group">
                <label for="expire_date">Expire Date:</label>
                <input wire:model="expire_date" type="date" class="form-control" min="{{ date('Y-m-d') }}">
                @error('expire_date') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="vacancies">Number of Vacancies:</label>
                <input wire:model="vacancies" type="number" class="form-control">
                @error('vacancies') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="education_requirement">Education Requirement:</label>
                <input wire:model="education_requirement" type="text" class="form-control">
                @error('education_requirement') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="experience_requirement">Experience Requirement:</label>
                <input wire:model="experience_requirement" type="text" class="form-control">
                @error('experience_requirement') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="skills_">Skills Required:</label>
                <input wire:model="skills_required" type="text" class="form-control">
                @error('skills_required') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="is_featured">Featured Job:</label>
                <input wire:model="is_featured" type="checkbox">
                @error('is_featured') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="is_active">Active Job:</label>
                <input wire:model="is_active" type="checkbox">
                @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror
            </div>


            <div class="form-group">
                <label for="application_link">Application Link (optional):</label>
                <input wire:model="application_link" type="url" class="form-control">
            </div>

            <div class="form-group">
                <label for="job_type">Job Type:</label>
                <select wire:model="job_type" class="form-control">
                    <option value="Full-time">Full-time</option>
                    <option value="Part-time">Part-time</option>
                    <option value="Contract">Contract</option>
                    <option value="Temporary">Temporary</option>
                    <option value="Internship">Internship</option>
                </select>
                @error('job_type') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="responsibilities">Responsibilities (optional):</label>
                <textarea wire:model="responsibilities" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="benefits">Job Benefits (optional):</label>
                <textarea wire:model="benefits" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="application_instructions">Application Instructions (optional):</label>
                <textarea wire:model="application_instructions" class="form-control" rows="5"></textarea>
            </div>

            <div style="text-align: center;">
                <button type="button" wire:click="submitJob" class="btn btn-primary">Post Job</button>
            </div>
        </form>
    </div>

</div>