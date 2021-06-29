{!! link_to_route('product_states.create', '状態登録') !!}</br>

@foreach($product_states as $product_state)
    {{$product_state->text}}
    {!! Form::model($product_state, ['route' => ['product_states.delete', $product_state->id ], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endforeach
<a class="title" href="/">ホームへ</a>