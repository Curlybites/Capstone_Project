<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class districtdatas extends Model
{
    use HasFactory;

    protected $fillable = [
        'PO#',
        'datacreated',
        'programtitle',
        'itemname',
        'total',
        'status',
    ];
}
