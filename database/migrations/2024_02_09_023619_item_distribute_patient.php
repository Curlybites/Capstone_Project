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
        Schema::create('itemdistribute', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->nullable;
            $table->string('unit')->nullable;
            $table->string('item')->nullable;
            $table->string('description')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itmedistribute');
    }
};
