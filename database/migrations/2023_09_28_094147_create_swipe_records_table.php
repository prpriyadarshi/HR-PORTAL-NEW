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
        Schema::create('swipe_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('emp_id')->nullable();
            $table->string('swipe_time');
            $table->string('in_or_out');
            $table->timestamps();
        
            $table->foreign('emp_id')
                ->references('id')
                ->on('employee_details')
                ->onDelete('set null'); 
        });     
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('swipe_records');
    }
};
