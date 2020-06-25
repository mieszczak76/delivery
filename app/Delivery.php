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
        $worker = Worker::where('id', $this->id)->first();
        if($worker != null) {
            return $worker->name;
        }
        else {
            return 'Brak';
        }
    }

    public function getCompanyName()
    {
        $company = Company::where('id', $this->id)->first();
        if($company != null) {
            return $company->name;
        }
        else {
            return 'Brak';
        }
    }
}
