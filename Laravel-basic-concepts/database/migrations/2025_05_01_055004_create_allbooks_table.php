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
      // Migration for allbooks table
Schema::create('allbooks', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('stu_id'); // Match the type of the 'id' column in the students table
    $table->foreign('stu_id')->references('id')->on('students')
        ->onDelete('cascade')
        ->onUpdate('cascade');
    $table->string('book');
    $table->date('due_date')->nullable();
    $table->boolean('status');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allbooks');
    }
};
