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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('username', 50);
            $table->string('firstName', 100);
            $table->string('lastName', 100);
            $table->string('email', 100);
            $table->date('dob');
            $table->enum('gender', ["Male","Female","Other"]);
            $table->string('password');
            $table->string('password_confirmation');
            $table->string('mobileNumber', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
