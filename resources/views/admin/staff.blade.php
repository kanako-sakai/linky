@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">管理画面</h2>
                	<a href="https://docs.google.com/document/d/1rB4L4SR-KSIe4vuEXKAA17zJFXzaA5wl1BJPmPr8rJk/edit?usp=sharing" target="_blank" class="btn btn-primary">公式メンターガイド</a>
          		</div>
        	</div>
        	
        	<ul class="list-group list-group-horizontal">
    
                {{--　メンティー一覧タブ --}}
                <li class="list-group-item">
                    <a href="{{ route('staff') }}" class="nav-link mypage-link {{ Request::routeIs('staff') ? 'active' : '' }}">
                        <span class="nav_title">メンティー一覧</span>
                    </a>
                </li>
                {{-- スケジュール一覧タブ --}}
                <li class="list-group-item">
                    <a href="{{ route('staff_schedule') }}" class="nav-link mypage-link {{ Request::routeIs('staff_schedule') ? 'active' : '' }}">
                        <span class="nav_title">未実施のメンタリング一覧</span>
                    </a>
                </li>
            </ul>
            
            <div class="text-center mt-5">
                {{-- ユーザ一覧 --}}
                @if (count($records) > 0)
                <table class="mentee-list">
                    @foreach ($records as $record)
                    <tr>
                        <th>
                            {{-- アイコン --}}
                            @if(isset($record->sender->picture))
                            	<img src = "{{ $record->sender->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p>
                            @endif
                        </th>
                        <td>
                            {!! link_to_route('users.show', $record->sender->name, ['user' => $record->sender->id]) !!}
                        </td>
                        <td>
                            {{-- スケジュールのページへのリンク --}}
                            {!! link_to_route('schedule_index', 'スケジュール', ['id' => $record->sender->id], ['class'=> 'btn btn-secondary mb-1']) !!} 
                             {{-- ダイレクトメッセージページへのボタン --}}
                             {!! link_to_route('official_messages', 'メッセージ', ['id' => $record->sender->id], ['class'=>'btn btn-primary mb-1']) !!}
                        </td>
                    <tr>    
                    @endforeach
                </table>
            </div>    
        @endif
        </div>    
</section>    
@endsection