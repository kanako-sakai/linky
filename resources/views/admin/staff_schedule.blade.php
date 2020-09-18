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
            
            <p class="m-2">メンタリングセッションを終了したら、実施ボタンを押してください。</p>
        
            <div class="col-md-10">   
            @if(count($meetings) > 0)
                <table class="records table-bordered">
                    <tbody>
                        <tr>
                            <th>Dates</th>
                            <th>User</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                            @foreach($meetings as $meeting)
                        <tr>
                            <td>{{ $meeting->dates }} {{ $meeting->times }}</td>
                            <td>{!! link_to_route('users.show', $meeting->sender->name, ['user' => $meeting->sender->id]) !!}</td>
                            <td>{{ $meeting->zoom_link }}</td>
                            <td>@if($meeting->conducted == 1)<span class="label label-success">実施済</span>
                                @else <span class="label label-unconducted">未実施</span>
                                @endif</td>
                            <td>@if (Auth::id() == $meeting->mentor_id)
                                {!! Form::open(['route' => ['conducted', $meeting->id]]) !!}
                                {!! Form::submit('実施', ['class' => "btn btn-primary btn-conducted btn-block"]) !!}
                                {!! Form::close() !!}</td>
                                @endif
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