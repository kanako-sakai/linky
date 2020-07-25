<div class="card mb-5">
    <div class="card-header">
        <h3 class="card-title">{{ $user->name }}</h3>
    </div>
    <div class="card-body text-center">
        <div class=pb-2>
        <!--画像を表示-->
        @include('users.icon')
        </div>
        <div class=pb-2>
        {{-- メッセージ編集ページへのリンク --}}
        {!! link_to_route('edit.picture', 'プロフィール画像を編集', ['id' => $user], ['class' => 'btn btn-primary']) !!}
        </div>
    </div>    
</div>
