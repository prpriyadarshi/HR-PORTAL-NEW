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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->enum('user_type', ['Job Seeker', 'Vendor']);
            $table->string('company_id');
            $table->string('company_name');
            $table->string('company_logo');
            $table->string('image')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('experience_status')->nullable();
            $table->string('available_to_join')->nullable();
            $table->string('profile_summary')->nullable();
            $table->json('technical_skills')->nullable();
            $table->json('education')->nullable();
            $table->string('current_industry')->nullable();
            $table->string('role_category')->nullable();
            $table->string('desired_job_type')->nullable();
            $table->string('preferred_shift')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('department')->nullable();
            $table->string('job_role')->nullable();
            $table->string('desired_employment_type')->nullable();
            $table->string('preferred_work_location')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('religion')->nullable();
            $table->string('differently_abled')->nullable();
            $table->string('career_break')->nullable();
            $table->json('languages')->nullable();

            $table->string('full_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile_no');
            $table->string('work_status')->nullable();
            $table->string('address');
            $table->string('resume')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });

        // You cannot use the DELIMITER command in Laravel migrations.
        // Instead, you can use raw SQL to create the trigger.

        $triggerSQL = <<<SQL
        CREATE TRIGGER generate_user_id BEFORE INSERT ON users FOR EACH ROW
        BEGIN
            DECLARE max_id INT;
        
            -- Find the maximum user_id value in the users table
            SELECT IFNULL(MAX(CAST(SUBSTRING(user_id, 4) AS UNSIGNED)) + 1, 1) INTO max_id FROM users;
        
            -- Increment the max_id and assign it to the new user_id
            SET NEW.user_id = CONCAT("USR", LPAD(max_id, 4, "0"));
        END;
        SQL;

        DB::unprepared($triggerSQL);
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
