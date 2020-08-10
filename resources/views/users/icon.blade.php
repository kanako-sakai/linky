@if(isset($user->picture))
	<img src = "{{ $user->picture }}" width=100px height=100px>
@else
	<img src="{{ Gravatar::get($user->email, ['size' => 100]) }}" alt=""> 
@endif