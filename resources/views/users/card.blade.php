<h3 class="text-center">{{ $user->name }}</h3>
    <div class="text-center">
        <div class=pb-2>
        <!--画像を表示-->
        @include('users.icon')
        </div>
        <div class=pb-2>
        {{-- メッセージ編集ページへのリンク --}}
        {!! link_to_route('edit.picture', 'プロフィール画像を編集', ['id' => $user], ['class' => 'btn btn-primary']) !!}
        </div>
    </div> 