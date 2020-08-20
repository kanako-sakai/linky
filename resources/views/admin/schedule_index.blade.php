@extends('layouts.app_2')

@section('content')

<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">{{$user->name }}様<br>スケジュール一覧</h2>
          		</div>
        	</div>
        
            <div class="col-md-12">  
                @if(count($meetings) > 0) 
                <table class="records">
                    <tbody>
                        <tr>
                            <th>日時</th>
                            <th>ユーザー</th>
                            <th>メンター</th>
                            <th>リンク</th>
                            <th>ステータス</th>
                            <th></th>
                        </tr>
                
                        @foreach($meetings as $meeting)    
                        <tr>
                            <td>{{ $meeting->dates }} {{ $meeting->times }}</td>
                            <td>{{ $meeting->sender->name }}</td>
                            <td>{{ $meeting->mentor->name }}</td>
                            <td>{{ $meeting->zoom_link }}</td>
                            <td>@if($meeting->conducted) 実行済み
                                @else 未実行
                                @endif
                            </td>
                            <td>@if($meeting->conducted == 0)
                                {!! Form::open(['route' => ['conducted', $meeting->id]]) !!}
                                {!! Form::submit('実施', ['class' => "btn btn-primary btn-block"]) !!}
                                {!! Form::close() !!}
                                @endif
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
                @else
                 <p class="text-center">公式メンターへのリクエストはありません。</p>
                @endif
            </div>    
                
            <div class = "col-md-6 offset-md-3">    
            {{-- スケジュール確定 --}}
            {!! link_to_route('schedule', '新規スケジュール登録', ['id' => $user->id], ['class'=>"btn btn-primary btn-block"]) !!}
            </div>
        </div>    
</section>       
@endsection
            