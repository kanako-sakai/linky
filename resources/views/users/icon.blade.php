@if(isset($user->picture))
	<img src = "{{ $user->picture }}" width=50% height=50%>
@else
	<img src="{{ Gravatar::get($user->email, ['size' => 100]) }}" alt=""> 
@endif