<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_name',
        'category',
        'brand',
        'model',
        'quantity',
        'unit_price',
        'supplier',
        'date_acquired',
        'status',
        'description',
        'image_path',
    ];
}
