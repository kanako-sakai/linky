@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center ftco-animate">
                	<h2 class="mb-4">{{ $user->name }}</h2>
          		</div>
        	</div>
        	
    
            @if(count($messages) >0)
                <ul class="list-unstyled">
                    @foreach ($messages as $message)
                        <li class="media">
                            {{-- アイコン --}}
                            @if(isset($message->sender->picture))
                            	<img src = "{{ $message->sender->picture }}" class="profile_icon">
                            @else
                            	<p class="no_icon"></p>
                            @endif
                            <div class="media-body pb-5">
                                <div class="ml-3">
                                    <a href="{{ route('users.show', ['user'=>$message->sender->id]) }}"> {{ $message->sender->name }}</a>
                                </div>
                                <div class="ml-3">
                                    {{ $message->message }}
                                </div> 
                                <div class= "row">
                                    <span class="col-md-2 timestamp ml-3">
                                        {{ $message->created_at }}
                                    </span>
                                    <span class="col-md-2">
                                        @if (Auth::id() == $message->sender->id)
                                        {!! Form::open(['route' => ['delete.message', $message->id], 'method' => 'delete']) !!}
                                            {!! Form::submit('削除', ['class' => 'btn btn-light btn-sm']) !!}
                                        {!! Form::close() !!}    
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            @endif    
            
            <!--メッセージ送信フォーム-->
            {!! Form::open(['route' => ['send.message', $user->id]]) !!}
                {!! Form::textarea('message',null, ['class' => 'form-control']) !!}
                {!! Form::submit('送信', ['class' => "btn btn-primary btn-block"]) !!}
                
            {!! Form::close() !!}
        </div>
</section>        
@endsection