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
        Schema::create('companies', function (Blueprint $table) {
            $table->string('company_id')->primary(); // Primary key
            $table->string('company_name');
            $table->string('company_address1');
            $table->string('company_address2');
            $table->date('company_registration_date');
            $table->string('company_logo');
            $table->timestamps(); // Created_at and updated_at columns
        });

        // Create a trigger to generate company_id based on company_name
        // DB::unprepared('
        //     CREATE TRIGGER generate_company_id BEFORE INSERT ON companies FOR EACH ROW
        //     BEGIN
        //         SET NEW.company_id = CONCAT(LEFT(NEW.company_name, 3), LPAD((SELECT IFNULL(MAX(CAST(SUBSTRING(company_id, 4) AS UNSIGNED)) + 1, 1) FROM companies WHERE company_id LIKE CONCAT(LEFT(NEW.company_name, 3), "%")), 4, "0"));
        //     END;
        // ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS generate_company_id');
        Schema::dropIfExists('companies');
    }
};
