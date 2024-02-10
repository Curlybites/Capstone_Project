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
        Schema::create('HcInventory', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable;
            $table->string('type')->nullable;
            $table->string('program')->nullable;
            $table->integer('expiration')->nullable;
            $table->integer('quantity')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HcInventory');
    }
};