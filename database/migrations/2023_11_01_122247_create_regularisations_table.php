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
        Schema::create('regularisations', function (Blueprint $table) {
            $table->id();
            $table->string('emp_id');
            $table->string('from');
            $table->string('to');
            $table->string('reason');
            $table->integer('is_withdraw');
            $table->enum('status', ['approved', 'pending','rejected'])->default('pending');
            $table->string('approved_by')->nullable();
            $table->foreign('emp_id')
            ->references('emp_id')
            ->on('employee_details')
            ->onDelete('restrict')
            ->onUpdate('cascade');
            
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regularisations');
    }
};
