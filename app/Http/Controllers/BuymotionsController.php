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
use App\Delivery_destination;
use App\Buy;


class BuymotionsController extends Controller
{
    public function index()
    {   $user = Auth::user();
        $buys = Buy::where('display', true)->get();
        $delivery_destination = Delivery_destination::find($user)->first();
        $kategorys = Kategory::all()->pluck('name','id');
        // $tankas = Tanka::with('gyousha','kategory','hinnmoku')->where('display', true)->where('kategory_id', $kategory_id)->orderBy('hinnmoku_id')->orderBy('id')->get();
        return view('buymotions.index', [
            'buys' => $buys,
            'delivery_destination' => $delivery_destination,
            'kategorys' => $kategorys,
            
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         // $request->imgはformのinputのname='img'の値です
        // ->storeメソッドは別途説明記載します
        
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
       

        return view('products.show', [
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $buys = Buy::findOrFail($id);
        $buy = $buys->product_id;
        $product = Product::findOrFail($buy);
        $product->motion = "motion";
        $product->save();
        $buys -> delete();
        return redirect('/buymotions.index')->with('flash_message', 'delete!');
    }
}
