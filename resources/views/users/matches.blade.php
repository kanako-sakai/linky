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
        </div>
        <hr class ="cp_hr05" />
        
        <div class="col-md-12">
            @include('users.navtabs')
        </div>   
        
        <div class="text-center">
            {{-- ユーザ一覧 --}}
            @if (count($matches_from_me) > 0)
                <ul class="list-unstyled">
                    @foreach ($matches_from_me as $match_from_me)
                        <li class="media">
                            <div class="col-md-2">
                            {{-- アイコン --}}
                            @if(isset($match_from_me->receiver->picture))
                            	<img src = "{{ $match_from_me->receiver->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p>
                            @endif
                            </div>

                            <div class="media-body col-md-5">
                                <div>
                                    {{ $match_from_me->receiver->name }}
                                </div>
                                <div>
                                    {{-- ユーザ詳細ページへのリンク --}}
                                    <p>{!! link_to_route('users.show', 'プロフィール詳細', ['user' => $match_from_me->receiver->id]) !!}</p>
                                </div>
                            </div>    
                            
                            <div class="col-md-4">
                                {{-- ダイレクトメッセージページへのボタン --}}
                                <p>{!! link_to_route('show.messages', 'メッセージ', ['id' => $match_from_me->receiver->id], ['class'=>'btn btn-primary']) !!}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
            
            @if (count($matches_from_others) > 0)
                <ul class="list-unstyled">
                    @foreach ($matches_from_others as $match_from_others)
                        <li class="media">
                            <div class="col-md-2">
                            {{-- アイコン --}}
                            @if(isset($match_from_others->sender->picture))
                            	<img src = "{{ $match_from_others->sender->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p> 
                            @endif
                            </div>
                            
                            <div class="media-body col-md-5">
                                <div>
                                    {{ $match_from_others->sender->name }}
                                </div>
                                <div>
                                    {{-- ユーザ詳細ページへのリンク --}}
                                    <p>{!! link_to_route('users.show', 'プロフィール詳細', ['user' => $match_from_others->sender->id]) !!}</p>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                {{-- ダイレクトメッセージページへのボタン --}}
                                <p>{!! link_to_route('show.messages', 'メッセージ', ['id' => $match_from_others->sender->id], ['class'=>'btn btn-primary']) !!}</p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</section>    
@endsection