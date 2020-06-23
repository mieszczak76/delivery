<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = ['user_id', 'supplier_company', 'documents', 'delivery_calculated', 'counting_person'];
}
