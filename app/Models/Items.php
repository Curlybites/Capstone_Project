<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = [
        'item_name',
        'item_description',
        'item_price',
        'type',
        'program',
        'expiration',
        'quantity',
    ];
}
