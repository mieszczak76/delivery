<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeliveryDetails extends Model
{
    protected $fillable = ['delivery_id', 'products_id', 'quantity'];
}
