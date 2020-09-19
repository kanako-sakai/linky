<h3 class="text-center">{{ $user->name }}</h3>
    <div class="text-center">
        <div class="icon_area">
        <!--画像を表示-->
        @if(isset($user->picture))
        	<img src = "{{ $picture }}" class="mypage_icon">
        @else
        	<p class="mypage_no_icon"></p> 
        @endif
            <div class="picture_edit_icon">
            {{-- メッセージ編集ページへのリンク --}}
            <a href="{{ route('edit.picture', ['id' => $user]) }}" class="btn btn-circle">
            <i class="fas fa-camera"></i></a>
            </div>
        </div>    
    </div> 