@extends('layouts.app')

@section('content')
  
        <div class="container">
            <div class="title text-center">
                <h1>人気のカテゴリー</h1> 
            </div>
            <div class="popularity">
                <ul>
                    <li class="popularity-ledis">レディース</li>
                    <li class="popularity-mens">メンズ</li>
                    <li class="popularity-kaden">家電・スマホ</li>
                </ul>
            </div>
        </div>
        {!! link_to_route('regist.index', '登録') !!}
 @endsection
<style>
.title{
    margin-top:10%;
}
.popularity{
    margin-top:2%;
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
</style>
