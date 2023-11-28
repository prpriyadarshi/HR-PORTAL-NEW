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
        Schema::table('jobseekers_interview_details', function (Blueprint $table) {
            $table->string('user_id');
            $table->string('job_id');
            $table->date('interview_date');
            $table->time('interview_time');
            $table->text('instructions')->nullable();
            $table->string('company_website')->nullable();
            $table->string('location_link')->nullable();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('job_id')->references('job_id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobseekers', function (Blueprint $table) {
            //
        });
    }
};
