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
        Schema::create('allocateitemtoprogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('allocateIDprogs')->nullable();
            $table->integer('alloprog_quan');
            $table->string('alloprog_unit');
            $table->string('alloprog_item');
            $table->text('alloprog_descript');
            $table->float('alloprog_price');
            $table->float('alloprog_pricetotal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('allocateitemtoprogs');
    }
};
