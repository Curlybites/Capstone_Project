<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'item_description',
        'item_price',
        'date_creation',
        'date_expiration',
        'status',
        'item_image'
    ];
}
