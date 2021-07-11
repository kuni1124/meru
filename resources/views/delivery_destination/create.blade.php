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
    <div class="text">
        <h5>お届け先登録</h5>
    </div>
    <div class="row">
        <div class="rows">
       
            {!! Form::open(['route' => 'delivery_destination.store']) !!}
            {!! Form::hidden('url', $url) !!}
             
                <div class="form-group">
                    {!! Form::label('first_name', 'お名前') !!}
                    {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">  
                                  
                    {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('first_name_kana', 'お名前カナ') !!}
                    {!! Form::text('first_name_kana', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                      
                    {!! Form::text('last_name_kana',null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('postal_code', '郵便番号') !!}
                    {!! Form::text('postal_code', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('prefectures', '都道府県') !!}</br>
                    {!! Form::text('prefectures',null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('municipality', '市町村区') !!}</br>
                    {!! Form::text('municipality',null, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('block', '番地') !!}</br>
                    {!! Form::text('block',null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('building_name', '建物名') !!}</br>
                    {!! Form::text('building_name',null, ['class' => 'form-control']) !!}
                </div>
            
                <div class="form-group">
                    {!! Form::label('tel', '電話番号') !!}</br>
                    {!! Form::text('tel',null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('登録する', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
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
.form-control{
    width:130%;
    
}

.row{
    
    padding-top:5%;
    padding-bottom:10%;
    background-color:white;
    width: 40%;
    margin-left:auto;
    margin-right: auto;
    justify-content:center;
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
    width:130%;
}   
</style>
