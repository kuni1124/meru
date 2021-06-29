<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Microposts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body>
    <div class="text-center">
        <h5>umekikunihiko</h5>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'product.store']) !!}
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
            {!! Form::close() !!}
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
</style>
