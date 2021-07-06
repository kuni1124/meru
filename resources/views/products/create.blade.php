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
        <div class="col-sm-6 offset-sm-3">

            
            <form action="{{ url('product.store') }}" method="post"  enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label>画像選択<input type="file" name="img" accept=".png,.jpg,.jpeg,image/png,image/jpg"></label>
                </div>
                <div class="form-group">
                    {!! Form::label('name', '商品名') !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('kananame', 'かな商品名') !!}
                    {!! Form::text('kananame', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('text', '商品の説明') !!}
                    {!! Form::text('text', null, ['class' => 'form-control-kana',"placeholder"=>"商品の説明（必須 1,000文字以内）
（色、素材、重さ、定価、注意点など）
"]) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('kategory_id', 'カテゴリ') !!}</br>
                    {!! Form::select('kategory_id',$kategorys, ['class' => 'form-control-kategory','placeholder' => 'Please Select']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('brand', 'ブランド') !!}
                    {!! Form::text('brand', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('product_state_id', '商品の状態') !!}</br>
                    {!! Form::select('product_state_id',$product_states, ['class' => 'form-control-kategory',"placeholder"=>"選択してください"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('prefecture_id', '発送元の地域') !!}</br>
                    {!! Form::select('prefecture_id',$prefectures, ['class' => 'form-control-kategory',"placeholder"=>"選択してください"]) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('delivery_id', '発送までの日数') !!}</br>
                    {!! Form::select('delivery_id',$deliverys, ['class' => 'form-control-kategory',"placeholder"=>"選択してください"]) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('price', '値段') !!}</br>
                    {!! Form::text('price',null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('出品する', ['class' => 'btn btn-primary btn-block']) !!}
                </form>
            {!! link_to_route('home.index', '戻る',[],['class' => 'btn btn-primary']) !!}
        </div>
        
    </div>
   
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>
<style>
.form-control-kana{
    width:100%;
    height:200px;
}
.form-group select{
    width:100%;
    height:50px;
    
}
.row{
    
    padding-top:5%;
    padding-bottom:10%;
    background-color:white;
    width: 60%;
    margin-left:auto;
    margin-right: auto;
    
}
.text{
    text-align:center;
    padding-top:5%;
    padding-bottom:5%;
}
body{
    background-color: rgb(239, 239, 239);
}    
.btn{
    margin-top:8%;
    width:100%;
}   
</style>
