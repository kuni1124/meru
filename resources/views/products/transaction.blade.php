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
        <div class="title">
        <h3>出品した商品-取引中</h3>
    </div>
    <div class="line_up">
     @foreach($products as $product)
     <a href="{{ url('product.show', $product->id) }}">
        <ul>
            <li class="image"><img src="{{asset('storage/images/'.$product->image)}}" ></li>   
            <li class="whitename">{{$product->name}}</li>
            <li class="whiteprice"><div class="margin">¥{{$product->price}}<div></li> 
          <div class="delivery">
          @if($product->send == true)
            <li> <a href="{{ url('cancel', $product->id) }}">取引停止</li>
          @else($product->send == null)
            <li> <a href="{{ url('transaction.send', $product->id)}}" class="hassou">発送する</li>
            <li> <a href="{{ url('cancel', $product->id) }}">取引停止</li>
          @endif         
          </div>  
        </ul>
        </a>
     @endforeach
     </div>  
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <div class="return-button">
        
        </div>
            
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
.title{
    text-align:center;
}
.title h3{
font-family: Arial, 游ゴシック体, YuGothic, メイリオ, Meiryo, sans-serif;
margin-top:5%;
}
.line_up{
    display:flex;
    justify-content: space-around;
    
}
.line_up ul{
    list-style:none;
    box-shadow: 2px 2px 4px gray;
    padding:0px;
    margin-top:5%;
    width:188px;
    margin-left:30px;
}
.line_up li{
    width:188px;
    padding:0px;
    margin:0px;
}
.whitename{
    background-color:white;
    
    
}
.whiteprice{
    background-color:white;
    
}
.margin{
    margin-left:10%;
    
}
.image img{
    width:100%;
    
}
.delivery li{
   padding-top:10%;
    background-color:white;
}
</style>