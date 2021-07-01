<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Kategory;
use App\Prefecture;
use App\Product_state;
use App\Delivery;
use App\Buy;
use App\Delivery_destination;



class Delivery_destinationsController extends Controller
{
    public function index()
    {  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $delivery_destination = new Delivery_destination;
        
        
        return view('delivery_destination.create', [
            'delivery_destination' => $delivery_destination,
           
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        return redirect('/home.index')->with('flash_message', 'STORE!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        
        return view('buys.show', [
            'product' => $product,

          ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
       

        return redirect('/product.index')->with('flash_message', 'update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
        return redirect('/product.index')->with('flash_message', 'delete!');
    }
}
