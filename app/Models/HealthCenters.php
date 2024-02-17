<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCenters extends Model
{
    use HasFactory;

    protected $fillable = [
        'health_center_name',
        'barangay_id',
    ];
}
