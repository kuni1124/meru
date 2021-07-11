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



class WelcomesController extends Controller
{
    public function index()
    {   
        
        $products = Product::orderBy('kategory_id','desc')->where('motion','motion')->get();
        $brand = Product::where('motion','motion')->pluck('brand','id');
        $kategorys = Kategory::all()->pluck('name','id');
        $womens   = "レディース";
        $mens   = "メンズ";
        $toys   = "おもちゃ";
        
        
        // $tankas = Tanka::with('gyousha','kategory','hinnmoku')->where('display', true)->where('kategory_id', $kategory_id)->orderBy('hinnmoku_id')->orderBy('id')->get();
        return view('welcome', [
            'products' => $products,
            'womens' => $womens,
            'mens' => $mens,
            'toys' => $toys,
            'kategorys' => $kategorys,
            'brand' => $brand,
            
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
}
