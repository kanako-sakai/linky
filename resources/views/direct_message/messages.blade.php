@extends('layouts.app_2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="">
                    <div class="row">{{ $user->name }}</div>
    <br>
    
    @if(count($messages) >0)
        <ul class="list-unstyled">
                @foreach ($messages as $message)
                    <li class="media">
                        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="mr-2 rounded" src="{{ Gravatar::get($message->sender->email, ['size' => 50]) }}" alt="">
                        <div class="media-body">
                            <div>
                                <a href="{{ route('users.show', ['user'=>$message->sender->id]) }}"> {{ $message->sender->name }}</a>
                            </div>
                            <div>
                                {{ $message->message }}
                            </div>
                            <div>
                                @if (Auth::id() == $message->sender->id)
                                {!! Form::open(['route' => ['delete.message', $message->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-sm']) !!}
                                {!! Form::close() !!}    
                                @endif
                            </div>
                        </div>
                    </li>
                @endforeach
        </ul>
    @endif    
    
        <!--メッセージ送信フォーム-->
        {!! Form::open(['route' => ['send.message', $user->id]]) !!}
            {!! Form::textarea('message',null, ['class' => 'form-control']) !!}
            {!! Form::submit('送信', ['class' => "btn btn-primary btn-block"]) !!}
            
        {!! Form::close() !!}
        
@endsection