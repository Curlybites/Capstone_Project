<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class allocateitemtoprogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'allocateIDprogs',
        'alloprog_quan',
        'alloprog_unit',
        'alloprog_item',
        'alloprog_descript',
        'alloprog_price',
        'alloprog_pricetotal',
    ];
}
