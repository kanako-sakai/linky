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
            @if (count($mentor_requestings) > 0)
                <ul class="list-unstyled">
                    @foreach ($mentor_requestings as $mentor_requesting)
                        <li class="media">
                            {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                            <img class="mr-2 rounded" src="{{ Gravatar::get($mentor_requesting->receiver->email, ['size' => 50]) }}" alt="">
                            <div class="media-body">
                                <div>
                                    {{ $mentor_requesting->receiver->name }}
                                </div>
                                <div>
                                    {{-- ユーザ詳細ページへのリンク --}}
                                    <p>{!! link_to_route('users.show', 'プロフィール詳細', ['user' => $mentor_requesting->receiver->id]) !!}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection