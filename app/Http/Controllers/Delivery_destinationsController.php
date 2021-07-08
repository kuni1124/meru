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
    public function create(Request $request)
    {
        $delivery_destination = new Delivery_destination;
        $url = $request->url;
        
        return view('delivery_destination.create', [
            'delivery_destination' => $delivery_destination,
            'url' => $url,
          ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $user = Auth::user();
        $delivery_destination = new Delivery_destination;
        $test = $request->url;
        
        if($request->first_name == null or $request->last_name == null or $request->first_name_kana == null or $request->last_name_kana == null or $request->postal_code == null or $request->prefectures == null or $request->municipality == null or $request->block == null or $request->building_name == null or $request->tel == null){
            return redirect($test);
        }
        $delivery_destination->user_id = $user->id;
        $delivery_destination->first_name = $request->first_name;
        $delivery_destination->last_name = $request->last_name;
        $delivery_destination->first_name_kana = $request->first_name_kana;
        $delivery_destination->last_name_kana = $request->last_name_kana;
        $delivery_destination->postal_code = $request->postal_code;
        
        $delivery_destination->prefectures = $request->prefectures;
        $delivery_destination->municipality = $request->municipality;
        $delivery_destination->block = $request->block;
        $delivery_destination->building_name = $request->building_name;
        $delivery_destination->tel = $request->tel;

        $delivery_destination->save();
        return redirect($test)->with('flash_message', 'store!');
        
    }

    /** $table->bigIncrements('id');
           
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
    public function edit( Request $request,$id )
    {
        $delivery_destination = Delivery_destination::findOrFail($id);
        $url = $request->url;
        return view('delivery_destination.edit', [
            'delivery_destination' => $delivery_destination,
            'url' => $url,
          ]);
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
        $user = Auth::user();
        $delivery_destination = Delivery_destination::findOrFail($id);
        $test = $request->url;
       
        if($request->first_name == null or $request->last_name == null or $request->first_name_kana == null or $request->last_name_kana == null or $request->postal_code == null or $request->prefectures == null or $request->municipality == null or $request->block == null or $request->building_name == null or $request->tel == null){
            return redirect($test);
        }
        $delivery_destination->user_id = $user->id;
        $delivery_destination->first_name = $request->first_name;
        $delivery_destination->last_name = $request->last_name;
        $delivery_destination->first_name_kana = $request->first_name_kana;
        $delivery_destination->last_name_kana = $request->last_name_kana;
        $delivery_destination->postal_code = $request->postal_code;
        
        $delivery_destination->prefectures = $request->prefectures;
        $delivery_destination->municipality = $request->municipality;
        $delivery_destination->block = $request->block;
        $delivery_destination->building_name = $request->building_name;
        $delivery_destination->tel = $request->tel;
        $delivery_destination->save();


        return redirect($test)->with('flash_message', 'update!');
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
