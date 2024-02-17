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
<<<<<<<< HEAD:database/migrations/2024_02_06_093258_HcInventory_table.php
        Schema::create('HcInventory', function (Blueprint $table) {
========
        Schema::create('hc_inventory_items', function (Blueprint $table) {
>>>>>>>> Health_Center_Branch:database/migrations/2024_02_10_150400_create_hc_inventory_items_table.php
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
<<<<<<<< HEAD:database/migrations/2024_02_06_093258_HcInventory_table.php
        Schema::dropIfExists('HcInventory');
========
        Schema::dropIfExists('hc_inventory_items');
>>>>>>>> Health_Center_Branch:database/migrations/2024_02_10_150400_create_hc_inventory_items_table.php
    }
};
