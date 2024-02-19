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
        Schema::create('program_manager_inventory', function (Blueprint $table) {
            $table->id();
            $table->string('po_code');
            $table->integer('item_quantity');
            $table->string('item_unit');
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
        Schema::dropIfExists('program_manager_inventory');
    }
};
