@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">公式メンターとの相談</h2>
          		</div>
        	</div>
            
            <ul class="list-group list-group-horizontal">
    
                {{--　履歴一覧タブ --}}
                <li class="list-group-item">
                    <a href="{{ route('official_status', ['id' => $user->id]) }}" class="nav-link mypage-link {{ Request::routeIs('official_status') ? 'active' : '' }}">
                        <span class="nav_title">履歴・スケジュール</span>
                    </a>
                </li>
                {{-- メッセージ一覧タブ --}}
                <li class="list-group-item">
                    <a href="{{ route('show_mentors', ['id' => $user->id]) }}" class="nav-link mypage-link {{ Request::routeIs('show_mentors') ? 'active' : '' }}">
                        <span class="nav_title">メッセージ</span>
                    </a>
                </li>
            </ul>
            
            <div class="col-md-12 mt-5">
                {{-- ユーザ一覧 --}}
                @if (count($records) > 0)
                <table class="mentor-list">
                    @foreach ($records as $record)
                        <tr>
                            <th>
                                {{-- アイコン --}}
                                @if(isset($record->receiver->picture))
                                	<img src = "{{ $record->receiver->picture }}" class="profile_icon">
                                @else
                                	<p class="no_icon"></p>
                                @endif
                            </th>
                            <td>
                                {{ $record->receiver->name }}
                            </td>
                            <td>
                                 {{-- ダイレクトメッセージページへのボタン --}}
                                 {!! link_to_route('official_messages', 'メッセージ', ['id' => $record->receiver->id], ['class'=>'btn btn-primary']) !!}
                            </td>
                        <tr>    
                    @endforeach
                </table>
            </div>    
        @endif
        </div>    
</section>    
@endsection