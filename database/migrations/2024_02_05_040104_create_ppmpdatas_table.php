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
        Schema::create('ppmpdatas', function (Blueprint $table) {
            $table->id();
            $table->integer('year');
            $table->string('department');
            $table->string('programtitle');
            $table->string('projecttitle');
            $table->string('typeofcontract');
            $table->string('accounttitle');
            $table->string('itemname');
            $table->string('description');
            $table->integer('quantity');
            $table->integer('unitofissue');
            $table->integer('unitprice');
            $table->string('schedule');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppmpdatas');
    }
};
