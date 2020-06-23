<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsDelivery extends Model
{
    protected $table = 'products_delivery';
    protected $fillable = ['product_id', 'delivery_id'];

    public function getProduct()
    {
        return Product::where('id', $this->product_id)->first();
    }
}
