@extends('layouts.app_2')

@section('content')

<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">管理画面</h2>
          		</div>
        	</div>
        	
        	<ul class="list-group list-group-horizontal">
    
                {{--　リクエスト申請中一覧タブ --}}
                <li class="list-group-item">
                    <a href="{{ route('staff') }}" class="nav-link mypage-link {{ Request::routeIs('staff') ? 'active' : '' }}">
                        <span class="nav_title">メンティー一覧</span>
                    </a>
                </li>
                {{-- リクエスト依頼一覧タブ --}}
                <li class="list-group-item">
                    <a href="{{ route('staff_schedule') }}" class="nav-link mypage-link {{ Request::routeIs('staff_schedule') ? 'active' : '' }}">
                        <span class="nav_title">スケジュール一覧</span>
                    </a>
                </li>
            </ul>
            
            <p class="m-2">メンタリングセッションを終了したら、実施ボタンを押してください。</p>
        
            <div class="col-md-10">   
            @if(count($meetings) > 0)
                <table class="records table-bordered">
                    <tbody>
                        <tr>
                            <th>日時</th>
                            <th>ユーザー</th>
                            <th>リンク</th>
                            <th>ステータス</th>
                            <th></th>
                        </tr>
                            @foreach($meetings as $meeting)
                        <tr>
                            <td>{{ $meeting->dates }} {{ $meeting->times }}</td>
                            <td>{{ $meeting->sender->name }}</td>
                            <td>{{ $meeting->zoom_link }}</td>
                            <td>@if($meeting->conducted == 1) 実施済み
                                @else 未実施
                                @endif</td>
                            <td>{!! Form::open(['route' => ['conducted', $meeting->id]]) !!}
                                {!! Form::submit('実施', ['class' => "btn btn-primary btn-block"]) !!}
                                {!! Form::close() !!}</td>
                        </tr>   
                        @endforeach
                    </tbody>
                </table>  
                @else
                <p>これから実施する予定のメンタリングはありません。</p>
                @endif
            </div>
        </div>    
</section>            

@endsection