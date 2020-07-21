@extends('layouts.app_2')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            {{-- ユーザ情報 --}}
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            {{-- タブ --}}
            @include('users.navtabs')
            {{-- ユーザ一覧 --}}
            @if (count($requesters) > 0)
                <ul class="list-unstyled">
                    @foreach ($requesters as $requester)
                        <li class="media">
                            {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                            <img class="mr-2 rounded" src="{{ Gravatar::get($requester->sender->email, ['size' => 50]) }}" alt="">
                            <div class="media-body">
                                <div>
                                    {{ $requester->sender->name }}
                                </div>
                                <div>
                                    {{-- ユーザ詳細ページへのリンク --}}
                                    <p>{!! link_to_route('users.show', 'プロフィール詳細', ['user' => $requester->sender->id]) !!}</p>
                                </div>
                                
                                <div class="row">
                                {{-- 承諾・拒否ボダン--}}
                                @if (Auth::id() != $requester->sender->id)
                                    @if (Auth::user()->is_matching_from_me($requester->sender->id) || Auth::user()->is_matching_from_others($requester->sender->id))
                                
                                        @elseif (Auth::user()->is_requested($requester->sender->id))
                                            {{-- メッセージの表示 --}}
                                            <p>{{ $requester->message }}</p>
                                            {{-- 承認のボタン --}}
                                            {!! Form::open(['route' => ['accept', $requester->sender->id], 'method' => 'put']) !!}
                                                {!! Form::submit('承認', ['class' => "btn btn-primary btn-block"]) !!}
                                            {!! Form::close() !!}
                                            
                                            {{-- 拒否ボタン --}}
                                            {!! Form::open(['route' => ['decline', $requester->sender->id], 'method' => 'put']) !!}
                                                {!! Form::submit('拒否', ['class' => "btn btn-danger btn-block"]) !!}
                                            {!! Form::close() !!}
                                        @else
                                
                                    @endif
                                @endif 
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection