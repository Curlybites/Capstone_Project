<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCentersPerBarangay extends Model
{
    use HasFactory;

    protected $fillable = [
        'health_center_id',
        'barangay_id'
    ];
    
}
