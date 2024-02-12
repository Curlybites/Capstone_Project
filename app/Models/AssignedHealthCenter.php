<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedHealthCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_name',
        'user_id',
        'health_center_id',
        'health_center_name',
    ];
}
