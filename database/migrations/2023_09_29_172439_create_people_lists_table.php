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
        Schema::create('people_lists', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('emp_id');
            $table->string('name');
            $table->string('dob');
            $table->string('doj');
            $table->string('contact_details');
            $table->string('category');
            $table->string('location');
            $table->boolean('is_starred')->default(false);
            $table->string('other_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people_lists');
    }
};
