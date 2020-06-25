<?php

namespace App\Http\Controllers;

use App\Company;
use App\ProductsDelivery;
use Illuminate\Http\Request;
use App\Delivery;
use App\Worker;
use App\Product;
use App\DeliveryDetails;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliveries = Delivery::all();
//
//        foreach ($deliveries as $delivery) {
//            var_dump($delivery->getProducts());
//        }
//
//        echo '<pre>';
//        print_r($deliveries);
//
//        exit;
        return view('delivery.index')->with(['deliveries' => $deliveries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        $workers = Worker::all();
        $products =  Product::all();


        return view('delivery.create')->with(['companies' => $companies, 'workers' => $workers, 'products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'recipient' => 'required',
            'document' => 'required',
            'quantity' => 'required',
        ]);

        $delivery = new Delivery();
        $delivery->worker_id = $request->get('recipient');
        $delivery->supplier_company_id = $request->get('supplier_company');
        $delivery->documents = $request->get('document');
        $delivery->delivery_calculated = $request->get('delivery_calculated');
        $delivery->counting_person_id = $request->get('counting_person');
        $delivery->receipt_of_data = $request->get('receipt_of_data');
        $delivery->quantity = $request->get('quantity');
        $delivery->save();

        if (is_array($request->get('products')) || is_object($request->get('products')))
        {
            foreach ($request->get('products') as $product) {
                $productsDelivery = new ProductsDelivery();
                $productsDelivery->product_id = $product;
                $productsDelivery->delivery_id = $delivery->id;
                $productsDelivery->save();
            }
        }

        return redirect()->route('homepage')->with('success', 'Dostawa dodana');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery = Delivery::find($id);
        return view('delivery.edit', compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
