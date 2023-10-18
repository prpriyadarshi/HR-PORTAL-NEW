<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('mobile_no');
            $table->string('work_status');
            $table->string('address');
            $table->string('resume');
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

    public function down(): void {
        Schema::dropIfExists('users');
    }
};
