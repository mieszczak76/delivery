<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public $timestamps = false;
    protected $fillable = ['receipt_of_data', 'supplier_company', 'document', 'recipient', 'delivery_calculated', 'counting_person', 'products', 'quantity'];
}
