<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Product;
use App\Kategory;
use App\Prefecture;
use App\Product_state;
use App\Delivery;
use App\Delivery_destination;
class SearchController extends Controller
{
    public function index(Request $request){

        

        $search1 = $request->input('kategory_name');
               
        $search3 = $request->input('name');
        $kategorys = Kategory::all()->pluck('name','id');
         // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した棋力と一致するカラムを取得します
        if ($request->has('kategory_name') && $search1 != ('指定なし')) {
            $products = Product::query()->where('motion','motion')->where('kategory_id',$search1)->get();
        }
       
       
        // ユーザ名入力フォームで入力した文字列を含むカラムを取得します
        if ($request->has('name') && $search3 != '') {
            $products = Product::query()->where('motion','motion')->where('name', 'like', '%'.$search3.'%')->get();
        }
        //  //ユーザを1ページにつき10件ずつ表示させます
       

        return view('search.index',[
            'products' => $products,
            'kategorys' => $kategorys,
        ]);
    }
}
