{!! link_to_route('kategorys.create', 'カテゴリ登録') !!}</br>

@foreach($kategorys as $kategory)
    {{$kategory->name}}
    {!! Form::model($kategory, ['route' => ['kategorys.delete', $kategory->id ], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endforeach