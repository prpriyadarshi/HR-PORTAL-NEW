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
                ->on('companies')
                ->onDelete('restrict')
                ->onUpdate('cascade');

        
            $table->timestamps();
        });
    //     DB::unprepared('
    //     CREATE PROCEDURE generateEmployeeId()
    //     BEGIN
    //         DECLARE next_id INT;
    //         SET next_id = (SELECT IFNULL(MAX(SUBSTRING_INDEX(emp_id, "-", -1) + 1), 1) FROM employee_details);
    //         SET @new_emp_id = CONCAT("AGS-", LPAD(next_id, 4, "0"));
    //     END;
    // ');


    // // Create a trigger to call the stored procedure to set "emp_id" before insert
    // DB::unprepared('
    //     CREATE TRIGGER set_employee_id BEFORE INSERT ON employee_details FOR EACH ROW
    //     BEGIN
    //         IF NEW.emp_id IS NULL THEN
    //             CALL generateEmployeeId();
    //             SET NEW.emp_id = @new_emp_id;
    //         END IF;
    //     END;
    // ');

    DB::unprepared('
    CREATE TRIGGER set_employee_id BEFORE INSERT ON employee_details FOR EACH ROW
    BEGIN
        IF NEW.emp_id IS NULL THEN
            SET NEW.emp_id = CONCAT(NEW.company_name, "-", LPAD((SELECT IFNULL(MAX(SUBSTRING_INDEX(emp_id, "-", -1) + 1), 1) FROM employee_details WHERE company_name = NEW.company_name), 4, "0"));
        END IF;
    END;
');

    // Add a unique constraint for mobile_number and alternate_mobile_number
    DB::unprepared('ALTER TABLE employee_details ADD CONSTRAINT unique_mobile_numbers UNIQUE (mobile_number, alternate_mobile_number)');
}

/**
 * Reverse the migrations.
 */
public function down(): void
{
    // Drop the trigger and stored procedure
    DB::unprepared('DROP TRIGGER IF EXISTS set_employee_id');
    DB::unprepared('DROP PROCEDURE IF EXISTS generateEmployeeId');

    Schema::dropIfExists('employee_details');
}
};
