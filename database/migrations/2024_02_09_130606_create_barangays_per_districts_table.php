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
        Schema::create('barangays_per_districts', function (Blueprint $table) {
            $table->id();
            $table->string('barangay_name');
            $table->string('barangay_id');
            $table->string('district_number');
            $table->string('district_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangays_per_districts');
    }
};
