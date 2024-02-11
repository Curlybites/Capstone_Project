<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HcSendItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_ID',
        'quantity',
        'unit',
        'item',
        'description'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_ID');
    }

    // public function category()
    // {
    //     return $this->belongsTo(Patient::class);
    // }
}
