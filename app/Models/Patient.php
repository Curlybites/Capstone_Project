<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'mname',
        'lname',
        'age',
        'gender',
        'program',
        'healthcenter',
        'district',
        'status'
    ];

    public function hcSendItems()
    {
        return $this->hasMany(HcSendItems::class, 'patient_ID');
    }
    
}
