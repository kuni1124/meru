<!DOCTYPE html>
@extends('layouts.app')

@section('content')
  

    <div class="title">
        <h3>出品した商品</h3>
    </div>
    <div class="line_up">
     @foreach($products as $product)
    
        <ul>
            {!! link_to_route('product.show', $product->id,$product->id,['product' => $product->id]) !!}
            <li class="whitename">{{$product->name}}</li>
            <li class="whiteprice"><div class="margin">¥{{$product->price}}<div></li>    
        </ul>
     @endforeach
     </div>  
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        {!! link_to_route('home.index', '戻る',[],['class' => 'btn btn-primary']) !!}
 @endsection
   

<style>
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
}
.line_up li{
    width:188px;
}
.whitename{
    background-color:white;
    padding-top:12%;
    padding-left:15%;
    padding-right:15%;
    
}
.whiteprice{
    background-color:white;
    
}
.margin{
    margin-left:10%;
}
</style>