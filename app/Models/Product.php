<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    
    protected $fillable = [
        'name',
        'price',
        'description',
        'weight',
        'image_url',
    ];
    
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}

