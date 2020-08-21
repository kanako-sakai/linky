@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
        	<div class="col-md-8 heading-section text-center">
            	<h2 class="mb-4">マッチング成立</h2>
      		</div>
    	</div>
        
        <div class="col-md-10 member-list">
            {{-- ユーザ一覧 --}}
            @if (count($matches_from_me) > 0)
                <table class="requests_list">
                    @foreach ($matches_from_me as $match_from_me)
                        <tr>
                            <th>
                            {{-- アイコン --}}
                            @if(isset($match_from_me->receiver->picture))
                            	<img src = "{{ $match_from_me->receiver->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p>
                            @endif
                            </th>
                            <td>
                                {!! link_to_route('users.show', $match_from_me->receiver->name, ['user' => $match_from_me->receiver->id]) !!}
                            </td>
                            <td>
                                {{-- ダイレクトメッセージページへのボタン --}}
                                {!! link_to_route('show.messages', 'メッセージ', ['id' => $match_from_me->receiver->id], ['class'=>'btn btn-primary']) !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
            
            @if (count($matches_from_others) > 0)
                <table class="requests_list">
                    @foreach ($matches_from_others as $match_from_others)
                       <tr>
                            <th>
                            {{-- アイコン --}}
                            @if(isset($match_from_others->sender->picture))
                            	<img src = "{{ $match_from_others->sender->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p> 
                            @endif
                            </th>
                            
                            <td>
                                {!! link_to_route('users.show', $match_from_others->sender->name, ['user' => $match_from_others->sender->id]) !!}
                            </td>
                            <td>
                                {{-- ダイレクトメッセージページへのボタン --}}
                                {!! link_to_route('show.messages', 'メッセージ', ['id' => $match_from_others->sender->id], ['class'=>'btn btn-primary']) !!}
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        </div>
    </div>
</section>    
@endsection