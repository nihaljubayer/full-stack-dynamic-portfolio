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
    Schema::create('achievements', function (Blueprint $table) {
        $table->id();
        $table->string('title');            // "Champion – University Programming Contest"
        $table->string('type');             // "Competition", "Certification", "Hackathon", "Award"
        $table->string('organization');     // University / Platform / Organizer
        $table->string('year')->nullable(); // "2024"
        $table->string('link')->nullable(); // certificate / result / details URL
        $table->text('description')->nullable();
        $table->unsignedTinyInteger('display_order')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('achievements');
    }
};
