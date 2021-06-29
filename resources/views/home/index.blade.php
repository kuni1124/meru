@extends('layouts.app')

@section('content')

<div class="mycontainer">
    <div class=mybox>
        <div class="mylist">
            <ul>
                <li>出品する</li>
                <li>下書き一覧</li>
                <li>出品した商品-出品中</li>
                <li>出品した商品-取引中</li>
                <li>出品した商品-売却済み</li>
                <li>購入した商品-取引中</li>
                <li>購入した商品-過去の取引</li>
                <li>ニュース一覧</li>
                <li>評価一覧</li>
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
</style>