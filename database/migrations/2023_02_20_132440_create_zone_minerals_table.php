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
        Schema::create('zone_minerals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('zone_id')->constrained('dangerzones')->references('id')->on('dangerzones')->onDelete('cascade');
            $table->foreignId('mineral_id')->constrained('minerals')->references('id')->on('minerals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('zone_minerals');
    }
};
