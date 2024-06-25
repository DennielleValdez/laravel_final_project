<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    protected $table = 'favorites';

    protected $fillable = [
        'product_id', 'product_name', 'quantity', 'product_price', 'total', 'product_img', 'product_brand'
    ];
    
}
