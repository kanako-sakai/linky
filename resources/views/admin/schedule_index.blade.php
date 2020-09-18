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
                <table class="records table-bordered">
                    <tbody>
                        <tr>
                            <th>Dates</th>
                            <th>Mentor</th>
                            <th>Link</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                
                        @foreach($meetings as $meeting)    
                        <tr>
                            <td>{{ $meeting->dates }} {{ $meeting->times }}</td>
                            <td>{{ $meeting->mentor->name }}</td>
                            <td>{{ $meeting->zoom_link }}</td>
                            <td>@if($meeting->conducted) <span class="label label-success">実施済</span>
                                @else <span class="label label-unconducted">未実施</span>
                                @endif
                            </td>
                            <td>
                                @if($meeting->conducted == 0)
                                {!! Form::open(['route' => ['conducted', $meeting->id]]) !!}
                                {!! Form::submit('実施', ['class' => "btn btn-primary btn-conducted m-1"]) !!}
                                {!! Form::close() !!}
                                @endif
                                
                                @if($meeting->conducted ==0)    
                                @if (Auth::id() == $meeting->mentor_id)
                                {!! Form::open(['route' => ['delete_schedule', $meeting->id], 'method' => 'delete']) !!}
                                    {!! Form::submit('削除', ['class' => 'btn btn-danger btn-delete m-1']) !!}
                                {!! Form::close() !!}    
                                @endif
                                @endif
                            </td>
                        </tr>    
                        @endforeach
                    </tbody>
                </table>
                @else
                 <p class="text-center">登録されているメンタリングセッションはありません。</p>
                @endif
            </div>    
                
            <div class = "col-md-6 offset-md-3">    
            {{-- スケジュール確定 --}}
            {!! link_to_route('schedule', '新規スケジュール登録', ['id' => $user->id], ['class'=>"btn btn-primary btn-block"]) !!}
            </div>
        </div>    
</section>       
@endsection
            