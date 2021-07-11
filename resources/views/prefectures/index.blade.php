{!! link_to_route('prefectures.create', '都道府県登録') !!}</br>

@foreach($prefectures as $prefecture)
    {{$prefecture->name}}
    {!! Form::model($prefecture, ['route' => ['prefectures.delete', $prefecture->id ], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endforeach
<a class="title" href="/">ホームへ</a>