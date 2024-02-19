<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program_Manager_Inventory extends Model
{
    use HasFactory;
    protected $table = 'program_manager_inventory';
    protected $fillable = [
        'item_quantity',
        'item_unit',
        'item_name',
        'program_title',
        'item_description',
        'item_price',
        'item_total'
    ];

    public function programManagerInventories()
    {
        return $this->hasMany(Program_Manager_Inventory::class, 'item_name', );
    }
}
