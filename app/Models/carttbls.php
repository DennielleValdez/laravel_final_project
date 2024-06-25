<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carttbls extends Model
{
    use HasFactory;
    
    protected $table = 'carttbls';

    protected $fillable = [
        'product_id', 'product_name', 'quantity', 'product_price', 'total', 'product_img', 'product_brand'
    ];
}
