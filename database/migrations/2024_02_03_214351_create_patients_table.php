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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('fname')->nullable;
            $table->string('mname')->nullable;
            $table->string('lname')->nullable;
            $table->integer('age')->nullable;
            $table->string('gender')->nullable;
            $table->string('program')->nullable;
            $table->string('healthcenter');
            $table->string('district');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
