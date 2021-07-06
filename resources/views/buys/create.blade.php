<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Microposts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body>
    <div class="text">
        <h5>umekikunihiko</h5>
    </div>

    <div class="row">
        <div class="col-6">
             <div class="product-titile">
                  <h5>商品内容の確認</h5>
             </div>
            {!! Form::model($buy, ['route' => ['buys.store', $product->id], 'method' => 'post']) !!}

            <div class="form-group-image">
                <div class="image">
                    <img src="{{asset('storage/images/'.$product->image)}}" class="margin">
                </div>
                <div class="name">
                    <h4>{{$product->name}}</h4><br/>
                    <h4>¥{{$product->price}}</h4>
                </div>
            </div>
            <div class="totalprice">
                <h4 class="maney">お支払い金額</h4>
                <h4 class="total">¥{{$product->price*1.10}}</h4>
            </div> 
            <div class="btn-box">
            {!! Form::submit('商品を購入する', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
            {!! link_to_route('home.index', '戻る',[],['class' => 'btn btn-primary']) !!}
            </div>  
            
            
            <div class="adress">
                <h5>配送先</h5>
                @if($delivery_destination) 
                    {!! link_to_route('delivery_destination.edit', '変更する',[$delivery_destination->id, 'url' => '/buys.create/'.$product->id],['class' => 'rink']) !!}<br/>
                @else
                    {!! link_to_route('delivery_destination.create', '追加する',['url' => '/buys.create/'.$product->id],['class' => 'rink']) !!}
                @endif   
                @if($delivery_destination) 
                    {{$delivery_destination->first_name}}{{$delivery_destination->last_name}}<br/>
                    {{$delivery_destination->prefectures}}{{$delivery_destination->municipality}}
                @endif  
            </div>    
        
            </div>        

                

             
    
    

   
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>
<style>

.row{
    
    padding-top:2%;
    padding-bottom:10%;
    background-color:white;
    width: 50%;
    margin-left:auto;
    margin-right: auto;
    
    
}
.text{
    text-align:center;
    padding-top:5%;
    padding-bottom:5%;
}
.product-titile{
    margin-bottom:15%;
    margin-left:80%;
    width:100%;
}
body{
    background-color: rgb(239, 239, 239);
}    
.btn{
    margin-top:8%;
    width:100%;
} 
.form-group-image{
    display:flex;
    width:300%;
    border-bottom:1px solid rgb(239, 239, 239);
    margin-left:0px;
   
} 
.name h4{
    width:250%;
} 
.image{
    margin-left:10%;
}
.totalprice{
    margin-top:20%;
    padding-bottom:30%;
    display:flex;
    width:300%;
    border-bottom:1px solid rgb(239, 239, 239);
}
.maney{
    margin-left:15%;
    
}
.total{
    margin-left:15%;
}
.btn{
    margin-left:50%;
    
}

.image{
    width:40%;
}
.image img{
    width:100%;
    height:400px;
}
.adress{
    margin-top:10%;
    
}
</style>
