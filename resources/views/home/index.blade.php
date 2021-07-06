@extends('layouts.app')

@section('content')

<div class="mycontainer">
    <div class=mybox>
    <div class="mylist">
            <ul>
                <li>{!! link_to_route('product.create', '出品する',[],['class' => 'rink']) !!}</li>
                <li>{!! link_to_route('product.index', '出品した商品-出品中',[],['class' => 'rink']) !!}</li>
                <li>{!! link_to_route('transaction.index', '出品した商品-取引中',[],['class' => 'rink']) !!}</li>
                <li>{!! link_to_route('product.sold', '出品した商品-売却済み',[],['class' => 'rink']) !!}</li>
                <li>{!! link_to_route('buymotions.index', '購入した商品-取引中',[],['class' => 'rink']) !!}</li>
                <li>{!! link_to_route('buys.buy', '購入した商品-過去の取引',[],['class' => 'rink']) !!}</li>
                <li>{!! link_to_route('users.index', 'いいね一覧',[],['class' => 'rink']) !!}</li>
                @if($delivery_destination)    
                <li>{!! link_to_route('delivery_destination.edit', 'お届け先を変更する',$delivery_destination->id,['class' => 'rink']) !!}</li>
                @else
                <li>{!! link_to_route('delivery_destination.create', 'お届け先を登録する',['class' => 'rink']) !!}</li>
                @endif 
                <li>{!! link_to_route('logout.get', 'ログアウト') !!}</li>   
            </ul>
        </div>
        <div class="mynews">
         <img src="/images/images.jpeg">
            
        </div>
    </div>
</div>

@endsection
<style>

.mycontainer{
    background-color: rgb(239, 239, 239);
    margin:0px;
    padding:0px;
    width:100%;

}
.mybox{
    display:flex;
    
}
.mybox ul{
    margin-top:10%;
    margin-left:10%;
    padding:0;
    justify-content:center;
    list-style:none;
    
}
.mylist li{
   padding:5%;
    background-color: white;
    border-radius: 15px;
    margin-top:10%;
    width:130%;
   
}
.mynews{
    margin-top:2%;
    margin-left:25%;
}
.rink{
    color:black;
}
</style>