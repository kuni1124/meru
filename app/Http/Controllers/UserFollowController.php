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
class UserFollowController extends Controller
{

    public function index()
    {   $user = Auth::user();
        $delivery_destination = Delivery_destination::find($user)->first();
        $kategorys = Kategory::all()->pluck('name','id');
        $user->loadRelationshipCounts();
        
        // ユーザのフォロワー一覧を取得
        $followings = $user->followings()->paginate(10);
        
       
        // $tankas = Tanka::with('gyousha','kategory','hinnmoku')->where('display', true)->where('kategory_id', $kategory_id)->orderBy('hinnmoku_id')->orderBy('id')->get();
        return view('user_follow.index', [
            'followings' => $followings,
            'delivery_destination' => $delivery_destination,
            'kategorys' => $kategorys,
            
          ]);
    }

    public function store($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをフォローする
        \Auth::user()->follow($id);
        // 前のURLへリダイレクトさせる
        return back();
    }

    /**
     * ユーザをアンフォローするアクション。
     *
     * @param  $id  相手ユーザのid
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // 認証済みユーザ（閲覧者）が、 idのユーザをアンフォローする
        \Auth::user()->unfollow($id);
        // 前のURLへリダイレクトさせる
        return back();
    }
}
