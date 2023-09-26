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
                $table->id();
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
                $table->enum('marital_status', ['married','unmarried']);
                $table->string('spouse');
                $table->enum('physically_challenge', ['yes','no']);
                $table->enum('inter_emp',['yes','no']);
                $table->string('job_location');
                $table->string('education');
                $table->string('experince');
                $table->string('pan_no');
                $table->string('adhar_no');
                $table->string('pf_no');
                $table->timestamps();

        });
         // Create a trigger to generate the custom "id"
    //      DB::unprepared('
    //      CREATE TRIGGER generate_employee_id BEFORE INSERT ON employee_details FOR EACH ROW
    //      BEGIN
    //          DECLARE company_id INT;
    //          SET company_id = (SELECT MAX(CAST(SUBSTRING_INDEX(id, "-", -1) AS UNSIGNED)) FROM employee_details WHERE SUBSTRING_INDEX(id, "-", 1) = NEW.company_name);

    //          IF company_id IS NULL THEN
    //              SET company_id = 1;
    //          ELSE
    //              SET company_id = company_id + 1;
    //          END IF;

    //          SET NEW.id = CONCAT("PAYG", "-", LPAD(company_id, 4, "0"));
    //      END
    //  ');


    DB::unprepared('
    CREATE TRIGGER generate_employee_id BEFORE INSERT ON employee_details FOR EACH ROW
    BEGIN
        DECLARE next_id INT;
        SET next_id = (SELECT IFNULL(MAX(SUBSTRING_INDEX(emp_id, "-", -1) + 1), 1) FROM employee_details);
        SET NEW.emp_id = CONCAT("PAYG-", LPAD(next_id, 4, "0"));
    END
');


     // Add a unique constraint for mobile_number and alternate_mobile_number
     DB::unprepared('ALTER TABLE employee_details ADD CONSTRAINT unique_mobile_numbers UNIQUE (mobile_number, alternate_mobile_number)');
 }

    public function down(): void
    {
        Schema::dropIfExists('employee_details');
    }
};