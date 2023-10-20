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
        Schema::create('monthly_leave_summaries', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('month');
            $table->unsignedInteger('sick_leave_count')->default(0);
            $table->unsignedInteger('casual_leave_count')->default(0);
            $table->timestamps();
            
            $table->foreign('emp_id')->references('emp_id')->on('employee_details')->onDelete('cascade');
            $table->unique(['emp_id', 'month']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_leave_summaries');
    }
};
