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
        Schema::create('dangerzones', function (Blueprint $table) {
            $table->id();
            $table->integer('location_lat');
            $table->integer('location_long');
            $table->integer('danger_lvl');
            $table->date('reported_on');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dangerzones');
    }
};
