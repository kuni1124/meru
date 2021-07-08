{!! link_to_route('coments.create', 'コメント登録') !!}</br>

@foreach($coments as $coment)
    {{$coment->coment}}
    {!! Form::model($coment, ['route' => ['coments.delete', $coment->id ], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endforeach
<a class="title" href="/">ホームへ</a>