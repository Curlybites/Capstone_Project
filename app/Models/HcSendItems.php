<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HcSendItems extends Model
{
    use HasFactory;
    protected $table = 'hc_send_items';

    protected $fillable = [
        'patient_ID',  
        'items_id',
        'quantity',
        'unit',
        'item',
        'description',
       
    ];
}  




