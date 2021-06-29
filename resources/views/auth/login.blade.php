<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Microposts</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>
<body>
    <div class="logo">
        <h2>umekikunihiko</h2>
    </div>
    <div class="menber">
        <h6>会員登録出ない方はこちら</h6>
        <div class="nav-item">{!! link_to_route('signup.get', '新規会員登録', [], ['class' => 'btn btn-primary']) !!}</div>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

          
        </div>
    </div>
</body>
<style>
body{
    background-color:rgb(239, 239, 239);
}
.logo{
    margin-top:2%;
    text-align:center;
}

.menber{
    background-color:white;
    text-align:center;
    margin-top:5%;
    width: 35%;
    margin-left:auto;
    margin-right: auto;
    padding-top:2%;
    padding-bottom:2%;
}
.row{
    border-top:solid 1px;
    padding-top:5%;
    padding-bottom:10%;
    background-color:white;
    width: 35%;
    margin-left:auto;
    margin-right: auto;
}
.btn{
    width:45%;
}
</style>