<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedProgramManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_manager_id',
        'program_id',
    ];
}
