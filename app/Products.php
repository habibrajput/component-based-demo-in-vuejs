<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
	protected $fillable = [
        'product_name', 'quantity', 'price', 'supplier_id', 'is_active'
    ];
}
