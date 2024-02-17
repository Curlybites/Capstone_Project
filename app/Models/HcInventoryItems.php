<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HcInventoryItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'po_code',
        'item_name',
        'item_description',
        'item_price',
        'type',
        'program',
        'expiration',
        'quantity',
    ];
}
