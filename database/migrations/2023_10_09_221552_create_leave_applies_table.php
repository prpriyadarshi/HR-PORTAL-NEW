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
        Schema::create('leave_applies', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->enum('leave_type', ['casual', 'maternity', 'loss_of_pay','sick_leave']);
            $table->date('from_date');
            $table->enum('session', ['session_1', 'session_2']);
            $table->date('to_date');
            $table->string('applying_to');
            $table->string('cc_to')->nullable();
            $table->string('contact_details');
            $table->text('reason');
            $table->string('attachment_path')->nullable();
            $table->enum('sick_leave', ['yes', 'no'])->default('no');
            $table->enum('casual_leave', ['yes', 'no'])->default('no');
            $table->timestamps();
            $table->foreign('emp_id')
                ->references('emp_id')
                ->on('employee_details')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave_applies');
    }
};
