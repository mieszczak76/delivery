<?php

namespace App\Http\Controllers;

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
        return view('delivery.index')->with(['deliveries' => $deliveries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('delivery.create')->with(['workers' => Worker::all(), 'deliveries' => Delivery::all(), 'products' => Product::all() ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $delivery = new Delivery();
        $delivery->user_id = $request->recipient;
        $delivery->supplier_company = $request->supplier_company;
        $delivery->documents = $request->document;
        $delivery->delivery_calculated = $request->counting_person;
        $delivery->counting_person = $request->counting_person;
        $delivery->save();

//        print_r($delivery::get())

//        foreach ($request->products as $product){
            $delivery_details = new DeliveryDetails([
                'delivery_id' => 1, 'products_id' => 1, 'quantity' => 1
            ]);
//        }

        $delivery_details->save();
//        return redirect('/');
//
//        $v = $request->get('products');
//        print_r($v);

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
