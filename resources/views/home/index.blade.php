@extends('layouts.app')

@section('content')

<div class="mycontainer">
             {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
                <div class="search_flex">
                   <div class="form-group1">
                    {!! Form::label('strength', 'カテゴリから探す') !!}
                    {!! Form::select('kategory_name',$kategorys, ['class' => 'form-control', 'placeholder' => 'カテゴリから探す']) !!}
                   </div>
                   <div class="select">
                  {!! Form::submit('検索', ['class' => 'btn1 btn-primary btn-block']) !!}
                   </div>
                </div>
              {!! Form::close() !!}
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
         <div>
           <h4>取引コメント</h4>
         </div>
         <div class="delivery">
            <ul>
                 @if($solds)
                       @foreach ($solds as $sold)
                          <li>{{$sold->coment->coment}}<br/>
                              商品名：{{$sold->name}}<br/>
                              日時：{{$sold->coment->date}}</li>
                          
                       @endforeach
                 @endif
        
         
                @if($products)
                       @foreach ($products as $product)
                       <li>{{$product->coment->coment}}<br/>
                      商品名：{{$product->name}}<br/>
                      日時：{{$product->coment->date}}</li>
                       @endforeach
                 @endif
                 
                 @if($buys)
                       @foreach ($buys as $buy)
                       <li>{{$buy->coment->coment}}<br/>
                商品名：{{$buy->product->name}}<br/>
                日時：{{$buy->coment->date}}</li>
                       @endforeach  
                 @endif 
             </ul>
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

.btn1{
    margin-left:10%;
    
   
    
}
.select{
    width:5%;
    height:5%;
    width:10%;
}
.search_flex{
    display: flex;
}
.form-group1 select{ 
    width:150px;
    height:30px;
}
.delivery ul{
    
    margin-left:0px;
    padding-left:0px;
}
.delivery li{
    margin-top:5%;
    margin-left:0px;
    padding-left:0px;
    border-bottom:1px solid;
}
</style>