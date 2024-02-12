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
        Schema::create('assigned_health_centers', function (Blueprint $table) {
            $table->id();
            $table->string('health_center_staff_name');
            $table->integer('health_center_staff_id');
            $table->string('health_center_name');
            $table->integer('health_center_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned_health_centers');
    }
};
