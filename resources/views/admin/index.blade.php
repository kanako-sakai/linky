@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">開発者画面</h2>
          		</div>
        	</div>
            
            <div class="text-center">
                {{-- ユーザ一覧 --}}
                @if (count($users) > 0)
                <ul class="list-unstyled">
                    @foreach ($users as $user)
                        <li class="media">
                            <div class="col-md-2">
                            {{-- アイコン --}}
                            @if(isset($user->sender->picture))
                            	<img src = "{{ $user->sender->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p>
                            @endif
                            </div>
                            
                            <div class="media-body col-md-3">
                                <div>
                                    {{ $user->name }}
                                </div>
                                <div>
                                    {{-- ユーザ詳細ページへのリンク --}}
                                    <p>{!! link_to_route('users.show', 'プロフィール詳細', ['user' => $user->id]) !!}</p>
                                </div>
                            </div>  
                            <div class="col-md-7">
                                {{-- 履歴ページへのリンク　--}}
                                {!! link_to_route('records', 'リクエスト履歴', ['id' => $user->id], ['class' => 'btn btn-primary']) !!}
                                
                                {{-- スケジュールのページへのリンク --}}
                                {!! link_to_route('schedule_index', 'スケジュール一覧', ['id' => $user->id], ['class'=> 'btn btn-secondary']) !!}
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>    
        @endif
        </div>    
</section>    
@endsection