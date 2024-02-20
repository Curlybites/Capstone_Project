<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dtAllocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'District',
        'Item Name',
        'Description',
        'Quantity',
        'status',
    ];
}
