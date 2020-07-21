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
            @if (count($matches_from_me) > 0)
                <ul class="list-unstyled">
                    @foreach ($matches_from_me as $matches_from_me)
                        <li class="media">
                            {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                            <img class="mr-2 rounded" src="{{ Gravatar::get($matches_from_me->receiver->email, ['size' => 50]) }}" alt="">
                            <div class="media-body">
                                <div>
                                    {{ $matches_from_me->receiver->name }}
                                </div>
                                <div>
                                    {{-- ユーザ詳細ページへのリンク --}}
                                    <p>{!! link_to_route('users.show', 'プロフィール詳細', ['user' => $matches_from_me->receiver->id]) !!}</p>
                                </div>
                                <div>
                                    {{-- ダイレクトメッセージページへのボタン --}}
                                    <p>{!! link_to_route('show.messages', 'メッセージ', ['id' => $matches_from_me->receiver->id], ['class'=>'btn btn-primary']) !!}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
            @if (count($matches_from_others) > 0)
                <ul class="list-unstyled">
                    @foreach ($matches_from_others as $matches_from_others)
                        <li class="media">
                            {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                            <img class="mr-2 rounded" src="{{ Gravatar::get($matches_from_others->sender->email, ['size' => 50]) }}" alt="">
                            <div class="media-body">
                                <div>
                                    {{ $matches_from_others->sender->name }}
                                </div>
                                <div>
                                    {{-- ユーザ詳細ページへのリンク --}}
                                    <p>{!! link_to_route('users.show', 'プロフィール詳細', ['user' => $matches_from_others->sender->id]) !!}</p>
                                </div>
                                <div>
                                    {{-- ダイレクトメッセージページへのボタン --}}
                                    <p>{!! link_to_route('show.messages', 'メッセージ', ['id' => $matches_from_others->sender->id], ['class'=>'btn btn-primary']) !!}</p>
                                </div>

                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection