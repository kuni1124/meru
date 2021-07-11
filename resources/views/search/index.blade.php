@extends('layouts.app')

@section('content')
<div class="search_container">
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
    <div class="search_title">
    <h3>検索商品</h3>
    </div>
</div>  
<div class="line_up">
     @foreach($products as $product)
     <a href="{{ url('product.show', $product->id) }}">
        <ul>
            <li class="image"><img src="{{asset('storage/images/'.$product->image)}}" ></li>   
            <li class="whitename">{{$product->name}}</li>
            <li class="whiteprice"><div class="margin">¥{{$product->price}}<div></li> 
           
            
        </ul>
        </a>
     @endforeach
     </div>  
 @endsection
<style>
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
    height:150%;
   
}
.box{
    
    background-color:white;
    margin-left:0px;
   
    
}

.title{
    
    text-align:center;
}
.title h1{
    padding-top:5%;
    font-family: Arial, 游ゴシック体, YuGothic, メイリオ, Meiryo, sans-serif;
   
}


}
.popularity{
    margin-bottom:3%;
}
.popularity ul{
    display:flex;
    list-style:none;
    margin-left:25%;
}
.popularity li{
    margin-left:5%;
    border-radius: 15px;
    padding:1%;
    margin-bottom:5%;
}
.popularity-mens{
    background-color: rgb(239, 239, 239);
}
.popularity-ledis{
    background-color: rgb(239, 239, 239);
}
.popularity-kaden{
    background-color: rgb(239, 239, 239);
}


.line-up ul{
    
    list-style:none;
    box-shadow: 2px 2px 4px gray;
    padding:0px;
    margin-top:5%;
    margin-left:40px;
    
}
.line-up li{
   
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
.womens-title h3{
    font-family: Arial, 游ゴシック体, YuGothic, メイリオ, Meiryo, sans-serif;
    margin-top:5%;
}
.mens-title h3{
    font-family: Arial, 游ゴシック体, YuGothic, メイリオ, Meiryo, sans-serif;
    margin-top:5%;
}
.toys-title h3{
    font-family: Arial, 游ゴシック体, YuGothic, メイリオ, Meiryo, sans-serif;
    margin-top:5%;
}
.teble{
    margin-left:10%;
}
.image img{
    width:100%;
    margin-left:0px;
    height:120px;
}
.check_box{
    display:flex;
}
.hidden_box {
    margin: 2em 0;/*前後の余白*/
    padding: 0;
}

/*ボタン装飾*/
.hidden_box label {
    padding: 15px;
    font-weight: bold;
    
    cursor :pointer;
}

/*ボタンホバー時*/
.hidden_box label:hover {
    background: #efefef;
}

/*チェックは見えなくする*/
.hidden_box input {
    display: none;
}

/*中身を非表示にしておく*/
.hidden_box .hidden_show {
    height: 0;
    padding: 0;
    overflow: hidden;
    opacity: 0;
    transition: 0.8s;
}

/*クリックで中身表示*/
.hidden_box input:checked ~ .hidden_show {
    padding: 10px 0;
    height: auto;
    opacity: 1;
}




.hidden_boxs {
    margin: 2em 0;/*前後の余白*/
    padding: 0;
}

/*ボタン装飾*/
.hidden_boxs label {
    padding: 15px;
    font-weight: bold;
    
    cursor :pointer;
}

/*ボタンホバー時*/
.hidden_boxs label:hover {
    background: #efefef;
}

/*チェックは見えなくする*/
.hidden_boxs input {
    display: none;
}

/*中身を非表示にしておく*/
.hidden_boxs .hidden_shows {
    height: 0;
    padding: 0;
    overflow: hidden;
    opacity: 0;
    transition: 0.8s;
}

/*クリックで中身表示*/
.hidden_boxs input:checked ~ .hidden_shows {
    padding: 10px 0;
    height: auto;
    opacity: 1;
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