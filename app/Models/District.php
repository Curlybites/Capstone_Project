<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barangay;

class District extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'supervisor_id'
    ];

//     public function barangays()
// {
//     return $this->hasMany(Barangay::class, 'number');
// }

}

