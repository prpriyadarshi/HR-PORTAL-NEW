<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->string('job_id')->primary();
            $table->string('contact_email');
            $table->string('title');
            $table->text('description');
            $table->string('location');
            $table->decimal('salary', 10, 2);
            $table->string('company_name');
            $table->string('employment_type');
            $table->date('posted_at');
            $table->string('contact_phone');
            $table->integer('vacancies');
            $table->string('education_requirement');
            $table->string('experience_requirement');
            $table->string('skills_required');
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            // Additional Fields
            $table->string('application_link')->nullable(); // Link to the application page
            $table->string('job_type')->default('Full-time');

            $table->text('responsibilities')->nullable(); // Job responsibilities
            $table->text('benefits')->nullable(); // Job benefits
            $table->text('application_instructions')->nullable(); // Instructions for applying
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
