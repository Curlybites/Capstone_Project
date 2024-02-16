<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppmpdatas extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'ppmp_code',
        'year',
        'department',
        'programtitle',
        'projecttitle',
        'typeofcontract',
        'accounttitle',
        'schedule',
        'note',
        'status',
        'items_total',
    ];

  
}
