<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HdInventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'item_img',
        'item_quan',
        'item_name',
        'program_title',
        'item_description',
        'item_price',
    ];
}
