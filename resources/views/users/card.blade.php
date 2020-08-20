<h3 class="text-center">{{ $user->name }}</h3>
    <div class="text-center">
        <div class=pb-2>
        <!--画像を表示-->
        @include('users.icon')
        {{-- メッセージ編集ページへのリンク --}}
        <a href="{{ route('edit.picture', ['id' => $user]) }}" class="btn btn-circle">
        <i class="fas fa-camera"></i></a>
        </div>
    </div> 