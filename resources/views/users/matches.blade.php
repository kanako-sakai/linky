@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
        	<div class="col-md-8 heading-section text-center">
            	<h2 class="mb-4">マイページ</h2>
      		</div>
    	</div>
        <div class="col-md-12">
            @include('users.card')
            
            <div class="col-md-12">
                @include('users.navtabs')
            </div>      
            
            <div class="text-center">
                {{-- ユーザ一覧 --}}
                @if (count($matches_from_me) > 0)
                    <ul class="list-unstyled">
                        @foreach ($matches_from_me as $match_from_me)
                            <li class="media">
                                {{-- アイコン --}}
                                @if(isset($match_from_me->receiver->picture))
                                	<img src = "{{ $match_from_me->receiver->picture }}" width=50 height=50>
                                @else
                                	<img src = "/images/icon.png" alt="icon" width=50 height=50>
                                @endif
    
                                <div class="media-body">
                                    <div>
                                        {{ $match_from_me->receiver->name }}
                                    </div>
                                    <div>
                                        {{-- ユーザ詳細ページへのリンク --}}
                                        <p>{!! link_to_route('users.show', 'プロフィール詳細', ['user' => $match_from_me->receiver->id]) !!}</p>
                                    </div>
                                    <div>
                                        {{-- ダイレクトメッセージページへのボタン --}}
                                        <p>{!! link_to_route('show.messages', 'メッセージ', ['id' => $match_from_me->receiver->id], ['class'=>'btn btn-primary']) !!}</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
                
                @if (count($matches_from_others) > 0)
                    <ul class="list-unstyled">
                        @foreach ($matches_from_others as $match_from_others)
                            <li class="media">
                                {{-- アイコン --}}
                                @if(isset($match_from_others->sender->picture))
                                	<img src = "{{ $match_from_others->sender->picture }}" width=50 height=50>
                                @else
                                	<img src = "/images/icon.png" alt="icon" width=50 height=50> 
                                @endif
                                
                                <div class="media-body">
                                    <div>
                                        {{ $match_from_others->sender->name }}
                                    </div>
                                    <div>
                                        {{-- ユーザ詳細ページへのリンク --}}
                                        <p>{!! link_to_route('users.show', 'プロフィール詳細', ['user' => $match_from_others->sender->id]) !!}</p>
                                    </div>
                                    <div>
                                        {{-- ダイレクトメッセージページへのボタン --}}
                                        <p>{!! link_to_route('show.messages', 'メッセージ', ['id' => $match_from_others->sender->id], ['class'=>'btn btn-primary']) !!}</p>
                                    </div>
    
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
</section>    
@endsection