@if(isset($user->picture))
	<img src = "{{ $user->picture }}" class="profile_icon">
@else
	<p class="no_icon"></p> 
@endif