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
use App\Coment;
use App\Delivery_destination;


class BuysController extends Controller
{
    public function index($id)
    {  
        $user = Auth::user();
        $product = Product::findOrFail($id);
       
        
        return view('buys.index', [
            'product' => $product,
            
            
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)

    {   $user = Auth::user();
        $buy = new Buy;
        $product = Product::findOrFail($id);
        $delivery_destination = Delivery_destination::find($user)->first();
        $kategorys = Kategory::all()->pluck('name','id');
        return view('buys.create', [
            'product' => $product,
            'buy' => $buy,
            'delivery_destination' => $delivery_destination,
            'kategorys' => $kategorys,
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($id);

        $coment = Coment::find(['id','1'])->first();
        $date = now();
        $buy = new Buy;

        $product->coment_id = $coment->id;
        $product->coment_date = $date;
        $product->motion = "transaction";
        $coment->date = $date;
        $buy->date = $date;
        $buy->user_id = $user->id;
        $buy->product_id = $product->id;
        
        $buy->display = true;
        
        $coment->save();
        $buy->save();
        $product->save();
       
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
        $buy = Buy::findOrFail($id);
        $buy->delete();
        return redirect('/buys.buy')->with('flash_message', 'delete!');
    }

    public function buy()
    {  
        $user = Auth::user();
        $buys = Buy::where('display',false)->get();
        $delivery_destination = Delivery_destination::find($user)->first();
        $kategorys = Kategory::all()->pluck('name','id');
        return view('buys.buy', [
            'buys' => $buys,
            'delivery_destination' => $delivery_destination,
            'kategorys' => $kategorys,
            
          ]);
    }

}
