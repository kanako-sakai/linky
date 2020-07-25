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
                            @if(isset($user->picture))
                            	<img src = "{{ $message->sender->picture }}" width=50 height=50>
                            @else
                            	<img src="{{ Gravatar::get($message->sender->email, ['size' => 50]) }}" alt=""> 
                            @endif
                            <div class="media-body pb-5">
                                <div>
                                    <a href="{{ route('users.show', ['user'=>$message->sender->id]) }}"> {{ $message->sender->name }}</a>
                                </div>
                                <div>
                                    {{ $message->message }}
                                </div>
                                <div>
                                    @if (Auth::id() == $message->sender->id)
                                    {!! Form::open(['route' => ['delete.message', $message->id], 'method' => 'delete']) !!}
                                        {!! Form::submit('削除', ['class' => 'btn btn-sm']) !!}
                                    {!! Form::close() !!}    
                                    @endif
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