@if (Auth::id() != $user->id)
    @if (Auth::user()->is_requesting($user->id))
        {{-- 取り消すボタンのフォーム --}}
        {!! Form::open(['route' => ['user.undo.request', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('リクエストを取り消す', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    
    @elseif (Auth::user()->is_matching_from_me($user->id) || Auth::user()->is_matching_from_others($user->id))
        <p>すでに{{ $user->name }}さんとのマッチングが成立しています。<br>
        マッチング一覧でご確認ください。</p>

    @elseif (Auth::user()->is_requested($user->id))
        <p>既に{{ $user->name }}さんからリクエストが届いています。<br>
        {{ $user->name }}さんからのリクエストを承認または拒否してください。</p>
    
    @else    
        {{-- リクエスト送信ボタンのフォーム --}}
        {!! Form::open(['route' => ['user.mentor.request', $user->id]]) !!}
            {!! Form::textarea('message',null, ['class' => 'form-control', 'placeholder' => 'リクエストのメッセージをご記入ください。']) !!}
            {!! Form::submit('リクエスト送信', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif
@endif