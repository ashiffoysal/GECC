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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->text('course_title')->nullable();
            $table->text('course_description')->nullable();
            $table->text('course_location')->nullable();
            $table->text('career_options')->nullable();
            $table->text('english_proficiency')->nullable();
            $table->text('course_duration')->nullable();
            $table->text('course_fee')->nullable();
            $table->text('course_image')->nullable();
            $table->text('tags')->nullable();
            $table->integer('category')->nullable();
            $table->text('your_application')->nullable();

            $table->text('slugs')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('is_deleted')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
