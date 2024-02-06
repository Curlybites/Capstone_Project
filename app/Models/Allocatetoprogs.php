<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allocatetoprogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'program',
        'POnum',
        'itemType',
        'items_total',
        'notes',
        'item_status',
    ];
}
