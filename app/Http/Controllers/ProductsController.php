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

class ProductsController extends Controller
{
    public function index()
    {   $user = Auth::user();
        $products = Product::where('motion','motion')->get();
        $delivery_destination = Delivery_destination::find($user)->first();
        $kategorys = Kategory::all()->pluck('name','id');
        // $tankas = Tanka::with('gyousha','kategory','hinnmoku')->where('display', true)->where('kategory_id', $kategory_id)->orderBy('hinnmoku_id')->orderBy('id')->get();
        return view('products.index', [
            'products' => $products,
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
        $product = new Product;
        $kategorys = Kategory::all()->pluck('name','id');
        $product_states = Product_state::all()->pluck('text','id');
        $prefectures = Prefecture::all()->pluck('name','id');
        $deliverys = Delivery::all()->pluck('text','id');
        return view('products.create', [
           'product' => $product,
           'kategorys' => $kategorys,
           'product_states' => $product_states,
           'prefectures' => $prefectures,
           'deliverys' => $deliverys,
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
        $product = new Product;
        $user = Auth::user();
        
        $product->name = $request->name;
        $product->kananame = $request->kananame;
        $product->text = $request->text;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->user_id = $user->id;
        $product->kategory_id = $request->kategory_id;
        $product->product_state_id = $request->product_state_id;
        $product->prefecture_id = $request->prefecture_id;
        $product->delivery_id = $request->delivery_id;
        $product->motion = 'motion';
        $path = $request->img->store('public/images');
        
        // パスから、最後の「ファイル名.拡張子」の部分だけ取得します 例)sample.jpg
        $filename = basename($path);
        $product->image = $filename;
        $product->save();
        
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
        $product = Product::findOrFail($id);

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
        $product = Product::findOrFail($id);
        $kategorys = Kategory::all()->pluck('name','id');
        $product_states = Product_state::all()->pluck('text','id');
        $prefectures = Prefecture::all()->pluck('name','id');
        $deliverys = Delivery::all()->pluck('text','id');
        return view('products.edit', [
            'product' => $product,
            'kategorys' => $kategorys,
            'product_states' => $product_states,
            'prefectures' => $prefectures,
            'deliverys' => $deliverys,
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
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->kananame = $request->kananame;
        $product->text = $request->text;
        $product->brand = $request->brand;
        $product->price = $request->price;
        
        $product->kategory_id = $request->kategory_id;
        $product->product_state_id = $request->product_state_id;
        $product->prefecture_id = $request->prefecture_id;
        $product->delivery_id = $request->delivery_id;

        $product->save();

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
        $product = Product::findOrFail($id);
        
        $product->delete();
        return redirect('/product.index')->with('flash_message', 'delete!');
    }
   

    public function transaction()
    {
        $user = Auth::user();
        $products = Product::where('motion', 'transaction')->get();
        $delivery_destination = Delivery_destination::find($user)->first();
        $kategorys = Kategory::all()->pluck('name','id');
        return view('products.transaction', [
            'products' => $products,
            'delivery_destination' => $delivery_destination,
            'kategorys' => $kategorys,
            
            
          
          ]);
    }
   
    public function cancel($id)
    {
        $user = Auth::user();
        
        $product = Product::findOrFail($id);
        $buy = Buy::where('product_id',$id);
        
        $product->motion = "motion";
        $product->send = false;
        $product->save();
        $buy->delete();
        return redirect('/transaction.index')->with('flash_message', 'delete!');
    }

    public function send($id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($id);
        $buy = Buy::where('product_id',$id)->first();
        
        $product->send = true;
        $buy->buysend = true;
       
        $product->save();
        $buy->save();
        
        return redirect('/transaction.index')->with('flash_message', 'delete!');
    }

    public function sold()
    {   $user = Auth::user();
        $products = Product::where('motion','sold')->get();
        $delivery_destination = Delivery_destination::find($user)->first();
        $kategorys = Kategory::all()->pluck('name','id');
        // $tankas = Tanka::with('gyousha','kategory','hinnmoku')->where('display', true)->where('kategory_id', $kategory_id)->orderBy('hinnmoku_id')->orderBy('id')->get();
        return view('products.sold', [
            'products' => $products,
            'delivery_destination' => $delivery_destination,
            'kategorys' => $kategorys,
            
          ]);
    }

    public function sold_save($id)
    {   
        $product = Product::findOrFail($id);
        $buy = Buy::where('product_id',$id)->first();
        
        $buy->display = false;
        $buy->buysend = null;
        $product->motion= "sold";
        $product->send = false;
        $product->save();
        $buy->save();
       
        return redirect('/buymotions.index')->with('flash_message', 'delete!');
    }

    public function sold_delete($id)
    {   
        $product = Product::findOrFail($id);
        $product->motion= "delete";
        $product->save();
        return redirect('/product.sold')->with('flash_message', 'delete!');
    }
}
