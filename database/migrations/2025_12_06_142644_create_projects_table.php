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
    Schema::create('projects', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->nullable();
        $table->text('description')->nullable();
        $table->string('image')->nullable();          // e.g. "images/projects/food-waste.jpg"
        $table->string('github_url')->nullable();
        $table->string('demo_url')->nullable();
        $table->string('tech_stack')->nullable();     // e.g. "Laravel, MySQL, REST API"
        $table->string('year')->nullable();           // e.g. "2024"
        $table->boolean('is_featured')->default(false);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
