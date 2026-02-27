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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('country')->nullable();
            $table->string('university')->nullable();
            $table->string('image')->nullable();
            $table->longText('description')->nullable();
            $table->string('Waiver')->nullable();
            $table->string('Scholarship')->nullable();
            $table->string('Level')->nullable();
            $table->string('Course_Duration')->nullable();
            $table->string('Course_Credits')->nullable();
            $table->string('Total_Semester')->nullable();
            $table->string('Total_Students')->nullable();
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
        Schema::dropIfExists('subjects');
    }
};
