{!! link_to_route('deliverys.create', '発送日時登録') !!}</br>

@foreach($deliverys as $delivery)
    {{$delivery->text}}
    {!! Form::model($delivery, ['route' => ['deliverys.delete', $delivery->id ], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endforeach