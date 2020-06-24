<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $fillable = [
        'worker_id',
        'supplier_company_id',
        'documents',
        'delivery_calculated',
        'counting_person_id',
        'quantity',
    ];

    public function getProducts()
    {
        return ProductsDelivery::where('delivery_id', $this->id)->get();
    }

    public function getWorkerName()
    {
        return Worker::where('id', $this->id)->first()->name;
    }

    public function getCompanyName()
    {
        return Company::where('id', $this->id)->first()->name;
    }
}
