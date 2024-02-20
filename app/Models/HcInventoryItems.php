<?php

namespace App\Models;
use App\Models\Items;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HcInventoryItems extends Model
{
    use HasFactory;
    public function item()
    {
        return $this->belongsTo(Items::class);
        // return $this->belongsTo(Items::class);
    }

    protected $fillable = [
        'po_code',
        'item_name',
        'item_description',
        'item_price',
        'type',
        'program',
        'expiration',
        'quantity',
    ];
}
