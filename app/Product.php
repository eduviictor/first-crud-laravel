<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'amount', 'qty_stock', 'last_sale'
    ];
}
