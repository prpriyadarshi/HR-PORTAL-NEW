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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
 
            $table->string('applied_by');
 
            $table->string('name');
 
            $table->string('closed');
 
            $table->text('remarks')->default('');
 
            $table->integer('no_of_days');
 
            $table->date('date');
 
 
 
            $table->string('approve_reject');
 
 
 
            $table->text('approve_remarks');
 
 
 
            $table->string('shift');
 
            $table->time('first_in_time');
 
 
 
            $table->time('last_out_time');
 
 
 
            $table->text('reason');
 
            $table->string('accept');
 
            $table->date('accept_date');
 
            $table->time('accept_time');
 
            $table->date('submitted_date');
 
            $table->time('submitted_time');
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
