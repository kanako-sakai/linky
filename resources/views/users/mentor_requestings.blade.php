@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">リクエストを送ったユーザー</h2>
          		</div>
        	</div>
            
            <div class="col-md-10 member-list">    
            {{-- ユーザ一覧 --}}
            @if (count($mentor_requestings) > 0)
                <table class="requests_list">
                    @foreach ($mentor_requestings as $mentor_requesting)
                        <tr>
                            <th>
                                {{-- アイコン --}}
                                @if(isset($mentor_requesting->receiver->picture))
                                	<img src = "{{ $mentor_requesting->receiver->picture }}" class="profile_icon">
                                @else
                                	<p class="no_icon"></p>
                                @endif
                            </th>
                            <td>
                                {{-- ユーザ詳細ページへのリンク --}}
                                {!! link_to_route('users.show', $mentor_requesting->receiver->name, ['user' => $mentor_requesting->receiver->id]) !!}<br>
                                {{ $mentor_requesting->message }}
                            </td>
                        </tr>
                    @endforeach
                </table>    
            @endif
            </div>
        </div>    
</section>    
@endsection