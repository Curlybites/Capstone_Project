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
        Schema::create('hd_inventories', function (Blueprint $table) {
            $table->id();
            $table->string('po_code');
            $table->string('item_img')->nullable();
            $table->integer('item_quan');
            $table->string('item_name');
            $table->string('program_title')->nullable();
            $table->text('item_description');
            $table->float('item_price');
            $table->float('item_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hd_inventories');
    }
};
