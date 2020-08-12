@if (Auth::id() != $user->id)
    @if ($my_request_denied && !Auth::user()->is_requested($user->id))
        <p>リクエストが拒否されました。</p>
    
    @elseif (!Auth::user()->is_requesting($user->id) && $request_received_denied) 
        <p>{{ $user->name }}さんから来たリクエストをお断りしていますが、リクエストを送りたい場合は以下からお送りください。</p>
        
        {{-- リクエスト送信ボタンのフォーム --}}
        {!! Form::open(['route' => ['user.mentor.request', $user->id]]) !!}
        <div class="form-group">
            {!! Form::textarea('message',null, ['class' => 'form-control', 'placeholder' => 'リクエストのメッセージをご記入ください。']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('リクエスト送信', ['class' => "btn btn-primary btn-block"]) !!}
        </div>    
        {!! Form::close() !!}
        
    @elseif (Auth::user()->is_matching($user->id))
        <p>すでに{{ $user->name }}さんとのマッチングが成立しています。<br>
        マッチング一覧でご確認ください。</p>    
    
    @elseif (Auth::user()->is_requested($user->id) && !Auth::user()->is_matching($user->id) && !$request_received_denied)
        <p>既に{{ $user->name }}さんからリクエストが届いています。<br>
        {{ $user->name }}さんからのリクエストを承認または拒否してください。</p>
        
    @elseif (Auth::user()->is_requesting($user->id) && !Auth::user()->is_matching($user->id))
        {{-- メッセージ --}}
        <div class="box26">
            <span class="box-title">リクエストメッセージ</span>
            <p>{{ $request->message }}</p>
        </div>    
        {{-- 取り消すボタンのフォーム --}}
        {!! Form::open(['route' => ['user.undo.request', $user->id], 'method' => 'delete']) !!}
            {!! Form::submit('リクエストを取り消す', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    
    @else    
        {{-- リクエスト送信ボタンのフォーム --}}
        {!! Form::open(['route' => ['user.mentor.request', $user->id]]) !!}
        <div class="form-group">
            {!! Form::textarea('message',null, ['class' => 'form-control', 'placeholder' => 'リクエストのメッセージをご記入ください。']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('リクエスト送信', ['class' => "btn btn-primary btn-block"]) !!}
        </div>    
        {!! Form::close() !!}
    @endif
@endif