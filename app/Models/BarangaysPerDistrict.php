<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangaysPerDistrict extends Model
{
    use HasFactory;
    protected $fillable = [
        'barangay_name',
        'barangay_id',
        'district_number',
        'district_id',
    ];
}
