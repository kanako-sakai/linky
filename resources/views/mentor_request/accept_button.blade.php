@if (Auth::id() != $user->id)
    @if (Auth::user()->is_matching($user->id))

    @elseif (Auth::user()->is_requested($user->id))
        {{-- 承認のボタン --}}
        {!! Form::open(['route' => ['accept', $user->id], 'method' => 'put']) !!}
            {!! Form::submit('承認', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
        
        {{-- 承認ボタン --}}
        {!! Form::open(['route' => ['decline', $user->id], 'method' => 'put']) !!}
            {!! Form::submit('拒否', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else

    @endif
@endif