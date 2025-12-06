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
    Schema::create('academics', function (Blueprint $table) {
        $table->id();
        $table->string('degree');            // e.g. "BSc in CSE"
        $table->string('institution');       // e.g. "XYZ University"
        $table->string('location')->nullable();
        $table->string('start_year');        // e.g. "2021"
        $table->string('end_year')->nullable(); // e.g. "2025" or null for "Present"
        $table->string('result')->nullable();   // CGPA, GPA, etc.
        $table->text('description')->nullable();
        $table->unsignedTinyInteger('display_order')->nullable(); // for custom ordering
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academics');
    }
};
