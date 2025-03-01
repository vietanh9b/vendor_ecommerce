<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'price',
        'code',
        'slug',
        'image',
        'description',
        'min_price',
        'max_price',
        'condition',
        'catelogue_id',
        'is_active',
        'created_at',
        'updated_at',
    ];
    protected $keyType = 'string'; 
    public $incrementing = false;

}
