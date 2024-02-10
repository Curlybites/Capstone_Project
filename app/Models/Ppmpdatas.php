<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppmpdatas extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'year',
        'department',
        'programtitle',
        'projecttitle',
        'typeofcontract',
        'accounttitle',
        'schedule',
        'note',
        'status'
        
    
    ];
}
