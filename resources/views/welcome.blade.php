@extends('layouts.app')

@section('content')
  
        <div class="container">
          <div class="box">
            <div class="title">
                <h1>人気のカテゴリー</h1> 
            </div>
            <div class="popularity">
                <ul>
                    <li class="popularity-ledis">{{$womens}}</li>
                    <li class="popularity-mens">{{$mens}}</li>
                    <li class="popularity-kaden">{{$toys}}</li>
                </ul>
            </div>
          </div>
         
           
           
             
             <div class="womens-title">
                <h3>レディース新着アイテム</h3>
             </div>
             <table>
　　　　　　　　　<tr>
             @foreach($products as $product)
            
             @if($product->kategory->name == $womens)
             <td>
                <div class="line-up"> 
                <a href="{{ url('buys.index', $product->id) }}">
                    <ul>
                    <li class="image"><img src="{{asset('storage/images/'.$product->image)}}" class="margin"></li>   
                     <li class="whitename">{{$product->name}}</li>
                     <li class="whiteprice"><div class="margin">¥{{$product->price}}<div></li>    
                    </ul>
                </a>
               </div>
             </td>
             
               @endif
               
               @endforeach 
               <tr> 
             </table>
           

           
              <div class="mens-title">
                <h3>メンズ新着アイテム</h3>
              </div>
              <table>
　　　　　　　　　<tr>
                @foreach($products as $product)     
                 @if($product->kategory->name == $mens)
                <td>
                <div class="line-up"> 
                <a href="{{ url('buys.index', $product->id) }}">
                    <ul>
                    <li class="image"><img src="{{asset('storage/images/'.$product->image)}}" class="margin"></li>  
                     <li class="whitename">{{$product->name}}</li>
                     <li class="whiteprice"><div class="margin">¥{{$product->price}}<div></li>    
                    </ul>
                 </a>
                </div>
                </td>
                @endif
               @endforeach
               <tr> 
             </table>

           
             <div class="toys-title">
                 <h3>おもちゃ新着アイテム</h3>
             </div>
             <table>
　　　　　　　　　<tr>
                @foreach($products as $product) 
                 @if($product->kategory->name == $toys)
                 <td>
                 <div class="line-up">
                 <a href="{{ url('buys.index', $product->id) }}"> 
                    <ul>
                    <li class="image"><img src="{{asset('storage/images/'.$product->image)}}" class="margin"></li>  
                     <li class="whitename">{{$product->name}}</li>
                     <li class="whiteprice"><div class="margin">¥{{$product->price}}<div></li>    
                    </ul>
                </a>
                 </div>
                 </td>
              @endif
            @endforeach
            <tr> 
            </table>
         
        {!! link_to_route('regist.index', '登録') !!}
 @endsection
<style>

.box{
    
    background-color:white;
    margin-left:0px;
    margin-top:18%;
    
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
</style>
