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
        Schema::create('course_professors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('professor_id');
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('course_id')
                ->on('courses')
                ->references('id')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('professor_id')
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
        Schema::table('course_professors', function (Blueprint $table){
            $table->dropForeign(['course_id']);
            $table->dropForeign(['professor_id']);
        });

        Schema::dropIfExists('course_professors');
    }
};
