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
        Schema::create('student_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('course_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->decimal('grade');
            $table->boolean('is_active')->default(false);
            $table->timestamps();

            $table->foreign('course_id')
                ->on('courses')
                ->references('id')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('student_id')
                ->on('users')
                ->references('id')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_courses', function (Blueprint $table) {
           $table->dropForeign(['student_id']);
           $table->dropForeign(['course_id']);
        });

        Schema::dropIfExists('student_courses');
    }
};
