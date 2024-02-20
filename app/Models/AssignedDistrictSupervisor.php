<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedDistrictSupervisor extends Model
{
    use HasFactory;

    protected $fillable = [
        'district_number',
        'district_supervisor_id',
    ];
}
