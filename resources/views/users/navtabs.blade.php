<ul class="nav nav-tabs nav-justified mb-3">

    {{--　リクエスト申請中一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.mentor_requestings', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.mentor_requestings') ? 'active' : '' }}">
            リクエスト申請中
        </a>
    </li>
    {{-- リクエスト依頼一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.requesters', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.requesters') ? 'active' : '' }}">
            リクエスト依頼
        </a>
    </li>
    {{-- マッチング成立一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('matches', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('matches') ? 'active' : '' }}">
            マッチング成立
        </a>
    </li>
</ul>