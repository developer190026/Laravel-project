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
       // Migration for students table
Schema::create('students', function (Blueprint $table) {
    $table->id();  // auto-incrementing primary key
    $table->string('name', 45);
    $table->string('email', 45)->unique()->nullable();
    $table->float('percentage', 8, 4)->comment('student percentage');
    //$table->string('city')->default('no city');
    $table->unsignedInteger('age');
    $table->timestamps();
});
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
