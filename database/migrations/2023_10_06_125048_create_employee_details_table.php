<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->string('emp_id')->unique();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('parent_dob');
            $table->string('parent_gender');
            $table->string('email')->unique();
            $table->string('company_email')->unique();
            $table->string('company_name');
            $table->string('mobile_number')->unique();
            $table->string('alternate_mobile_number')->unique();
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country');
            $table->date('hire_date');
            $table->enum('employee_type', ['full-time', 'part-time', 'contract']);
            $table->string('department');
            $table->string('job_title');
            $table->string('manager_id');
            $table->string('report_to');
            $table->decimal('salary', 10, 2);
            $table->enum('employee_status', ['active', 'on-leave', 'terminated']);
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('account_number')->unique()->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('password');
            $table->string('image');
            $table->string('blood_group');
            $table->string('parent_bld_group');
            $table->string('nationality');
            $table->string('religion');
            $table->enum('marital_status', ['married', 'unmarried']);
            $table->string('spouse');
            $table->enum('physically_challenge', ['yes', 'no']);
            $table->enum('inter_emp', ['yes', 'no']);
            $table->string('job_location');
            $table->string('education');
            $table->string('experince');
            $table->string('pan_no');
            $table->string('adhar_no');
            $table->string('pf_no');
            $table->string('nick_name')->nullable();
            $table->string('time_zone')->nullable();
            $table->string('biography')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linked_in')->nullable();
            $table->string('company_id');
            $table->foreign('company_id')
                ->references('company_id') // Assuming the primary key of the companies table is 'id'
                ->on('companies');

        
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_details');
    }
};
