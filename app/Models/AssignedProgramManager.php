<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignedProgramManager extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'program_id',
    ];
}
