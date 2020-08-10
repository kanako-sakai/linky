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
            @if (count($mentor_requestings) > 0)
                <ul class="list-unstyled">
                    @foreach ($mentor_requestings as $mentor_requesting)
                        <li class="media col-md-3">
                            {{-- アイコン --}}
                            @if(isset($mentor_requesting->receiver->picture))
                            	<img src = "{{ $mentor_requesting->receiver->picture }}" width=50 height=50>
                            @else
                            	<img src = "/images/icon.png" alt="icon" width=50 height=50>
                            @endif
                            <div class="media-body offset-md-1 col-md-8">
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