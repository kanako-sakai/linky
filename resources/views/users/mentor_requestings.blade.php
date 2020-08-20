@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">あなたがリクエストを送ったユーザー</h2>
          		</div>
        	</div>
                
            <div class="text-center">
            {{-- ユーザ一覧 --}}
            @if (count($mentor_requestings) > 0)
                <ul class="list-unstyled">
                    @foreach ($mentor_requestings as $mentor_requesting)
                        <li class="media col-md-5">
                            {{-- アイコン --}}
                            @if(isset($mentor_requesting->receiver->picture))
                            	<img src = "{{ $mentor_requesting->receiver->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p>
                            @endif
                            <div class="media-body col-md-6">
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
</section>    
@endsection