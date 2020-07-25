<ul class="nav nav-tabs nav-justified mb-3">

    {{--　リクエスト申請中一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.mentor_requestings', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.mentor_requestings') ? 'active' : '' }}">
            リクエスト申請中
        <span class="badge badge-secondary">{{ $user->mentor_requestings_count }}</span>    
        </a>
    </li>
    {{-- リクエスト依頼一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('users.requesters', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.requesters') ? 'active' : '' }}">
            リクエスト依頼
        <span class="badge badge-secondary">{{ $user->requesters_count }}</span>
        </a>
    </li>
    {{-- マッチング成立一覧タブ --}}
    <li class="nav-item">
        <a href="{{ route('matches', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('matches') ? 'active' : '' }}">
            マッチング成立
        <span class="badge badge-secondary">{{ $user->mentor_requests_count }}</span>    

        </a>
    </li>
</ul>