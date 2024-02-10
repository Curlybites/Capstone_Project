<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppmpitemdatas extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'ppmpitemID',
        'quantity',
        'unit',
        'itemname',
        'description',
        'unitprice',
        'total'
    
    ];
}
