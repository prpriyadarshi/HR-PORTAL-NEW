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
        Schema::create('applied_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_id');
            $table->string('job_title');
            $table->string('company_name');
            $table->string('applied_to');
            $table->string('full_name');
            $table->string('email');
            $table->string('address');
            $table->string('resume');
            $table->timestamps();
            $table->unique(['job_id', 'email']);
        
            $table->foreign('job_id')
                ->references('job_id')
                ->on('jobs')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applied_jobs');
    }
};
