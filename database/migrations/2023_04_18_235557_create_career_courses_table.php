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
        Schema::create('career_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('career_id');
            $table->unsignedBigInteger('course_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('career_id')
                ->on('careers')
                ->references('id')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('course_id')
                ->on('courses')
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
        Schema::table('career_courses', function (Blueprint $table){
            $table->dropForeign(['career_id']);
            $table->dropForeign(['course_id']);
        });

        Schema::dropIfExists('career_courses');
    }
};
