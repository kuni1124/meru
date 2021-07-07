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
        <div class="title">
        <h3>購入した商品-取引中</h3>
    </div>
    <div class="line_up">
     @foreach($buys as $buy)
     <a href="{{ url('product.show', $buy->product->id) }}">
        <ul>
            <li class="image"><img src="{{asset('storage/images/'.$buy->product->image)}}" ></li>   
            <li class="whitename">{{$buy->product->name}}</li>
            <li class="whiteprice"><div class="margin">¥{{$buy->product->price}}<div></li> 
            @if($buy->buysend == null)
            <li class="whitelink"> <a href="{{ url('buymotions.destroy', $buy->id) }}">取引停止</li>
            @elseif($buy->buysend == true)
            <li class="whitelink"> <a href="{{ url('product.sold_save', $buy->product->id) }}">受取完了</li>
            @endif
          
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
    
    
    
}

.whitelink{
    background-color:white;
    padding-top:8%;
    
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
</style>