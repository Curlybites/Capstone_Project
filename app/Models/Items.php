<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{

    
    public function programManagerInventories()
    {
        return $this->hasMany(Program_Manager_Inventory::class);
    }
    protected $fillable = [
        'item_name',
        'item_description',
        'item_price',
        'type',
        'program',
        'expiration',
        'quantity',
    ];

    public function item()
    {
        return $this->belongsTo(Items::class, 'item_name', );
    }
    

    
}
