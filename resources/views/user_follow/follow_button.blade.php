
    @if (Auth::user()->is_following($product->id))
        {{-- アンフォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.unfollow', $product->id], 'method' => 'delete']) !!}
            {!! Form::submit('♡いいね取り消し', ['class' => "btnfollow btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {{-- フォローボタンのフォーム --}}
        {!! Form::open(['route' => ['user.follow', $product->id]]) !!}
            {!! Form::submit('♡いいね', ['class' => "btnunfollow btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif

    <style>
    .btnunfollow{
        max-width:10%;
        margin-left:20%;
       
    }
    .btnfollow{
        max-width:20%;
        margin-left:20%;
    }
    </style>
