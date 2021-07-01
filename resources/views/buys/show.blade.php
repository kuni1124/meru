<!DOCTYPE html>
@extends('layouts.app')

@section('content')
  
<div class="container">
    <div class="title">
        <h2>{{$product->name}}</h2>
    </div>
    <div class="product-box">
        <div>
            <img class="product-image">{!! link_to_route('home.index', $product->id, ['message' => $product->id]) !!}
        </div>
        <table class="teblestyle" border= 1px solid #f5f5f5;>
             <tr>
                 <th class="pruduct-titile">出品者</th>
        　　      <th class="product-contant">{{$product->user->name}}</th>
             </tr>
             <tr>
                  <td class="pruduct-titile" >カテゴリ</td>
                  <td class="product-contant">{{$product->kategory->name}}</td>
             </tr>
             <tr>
                  <td class="pruduct-titile" >ブランド</td>
                  <td class="product-contant">{{$product->brand}}</td>
             </tr>
             <tr>
                  <td class="pruduct-titile">商品状態</td>
                  <td class="product-contant">{{$product->product_state->text}}</td>
             </tr>
             <tr>
                  <td class="pruduct-titile">発送元地域</td>
                  <td class="product-contant">{{$product->prefecture->name}}</td>
             </tr>
             <tr>
                  <td class="pruduct-titile">発送日数</td>
                  <td class="product-contant">{{$product->delivery->text}}</td>
             </tr>
      </table>
      
         
      </div>
      <div class="price">
            <h2>¥{{$product->price}}</h2>
      </div>
      <div class="text-edit">
             {!! link_to_route('buys.create', '購入画面に進む',$product->id, ['class' => 'btn btn-primary'] ) !!}
          </div>
      <div class="text">
            <h4>{{$product->text}}</h4>
      </div>
      
          
         
       </div>
       {!! link_to_route('home.index', '戻る',[],['class' => 'btn btn-primary']) !!}
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</div>
 @endsection
   

<style>
.container{
    background-color:white;
   
}
.title{
    text-align:center;
}
.title h3{
font-family: Arial, 游ゴシック体, YuGothic, メイリオ, Meiryo, sans-serif;
margin-top:5%;
}
.product-box{
    display:flex;
    justify-content: center;
}
.pruduct-titile{
    width:40%;
    height:60px;
    font-weight: 400;
}
.product-contant{
    width:50%;
    font-weight: 400;
}

.price{
    text-align:center;
    
}
.price h2{
    font-size:300%;
}
.teblestyle{
    
    width:20%;
    background-color:#fafafa;
    
}
.text{
    text-align:center;
    margin-top:5%;
}

.text-edit{
    
    text-align:center;
}
 
</style>