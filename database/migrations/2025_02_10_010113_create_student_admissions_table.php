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
        Schema::create('student_admissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->string('studylevel');
            $table->enum('gender',['male','female']);
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('email');
            $table->string('birthdate');
            $table->string('age')->nullable();
            $table->string('address');
            $table->string('number');
            $table->string('father_name');
            $table->string('father_number');
            $table->string('father_occupation')->nullable();
            $table->string('father_mail')->nullable();
            $table->string('mother_name');
            $table->string('mother_number');
            $table->string('mother_occupation')->nullable();
            $table->string('mother_mail')->nullable();
            $table->string('local_name');
            $table->string('local_number');
            $table->string('local_occupation')->nullable();
            $table->string('local_mail')->nullable();
            $table->string('school_name');
            $table->string('school_address');
            $table->string('students_gpa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_admissions');
    }
};
