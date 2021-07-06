@extends('layouts.app')

@section('content')
  
<div class="container-box">
    <div class="title">
        <h2>{{$product->name}}</h2>
    </div>
    <div class="product-box">
        <div class="image">
           <img src="{{asset('storage/images/'.$product->image)}}" class="margin">
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
      <div class="text">
            <h4>{{$product->text}}</h4>
      </div>
      
         
          <div class="text-buy">
          {!! Form::model($product, ['route' => ['buys.create', $product->id], 'method' => 'get']) !!}
             {!! Form::submit('この商品を購入', ['class' => 'btn btn-danger']) !!}
          {!! Form::close() !!}
          </div>
       
       <div class="return">
       {!! link_to_route('home.index', '戻る',[],['class' => 'btn btn-primary']) !!}
       </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
</div>
 @endsection
   

<style>
.container-box{
    background-color:white;
    width:70%;
    margin-top:5%;
    margin-left:12%;
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
    width:60%;
    font-weight: 400;
}

.price{
    text-align:center;
    
}
.price h2{
    font-size:300%;
}
.teblestyle{
    margin-left:0px;
    padding-left:0px;
    width:50%;
    background-color:#fafafa;
    
}
.text{
    text-align:center;
    margin-top:5%;
}

.text-edit{
    height:130%;
    margin-left:20%;
}
.text-delete{
    margin-left:20%;
}
.return{
    width:10%;
    margin-top:5%;
    margin-left:21%;
}
.image img{
    height:400px;
    width:100%;
    margin-right:0px;
    padding-right:0px;
}
.text-buy{
    width:33%;
    height:10%;
    
   
    
}

.return{
    margin-top:10%;
    width:14%;
    height:6%;
}

    
</style>