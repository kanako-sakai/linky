<ul class="list-group list-group-horizontal">
    
    {{--　リクエスト申請中一覧タブ --}}
    <li class="list-group-item">
        <a href="{{ route('users.mentor_requestings', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.mentor_requestings') ? 'active' : '' }}">
            <i class="far fa-paper-plane"></i> 申請中
        <span class="badge badge-secondary">{{ $user->mentor_requestings_count }}</span>    
        </a>
    </li>
    {{-- リクエスト依頼一覧タブ --}}
    <li class="list-group-item">
        <a href="{{ route('users.requesters', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('users.requesters') ? 'active' : '' }}">
            <i class="fas fa-arrow-alt-circle-down"></i> 依頼
        <span class="badge badge-secondary">{{ $user->requesters_count }}</span>
        </a>
    </li>
    {{-- マッチング成立一覧タブ --}}
    <li class="list-group-item">
        <a href="{{ route('matches', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('matches') ? 'active' : '' }}">
            <i class="fas fa-hands-helping"></i> マッチング成立
        <span class="badge badge-secondary">{{ $user->mentor_requests_count }}</span>    

        </a>
    </li>
    {{-- 公式メンタリング一覧タブ --}}
    <li class="list-group-item">
        <a href="{{ route('official_status', ['id' => $user->id]) }}" class="nav-link {{ Request::routeIs('official_status') ? 'active' : '' }}">
            <i class="fas fa-check-circle"></i> 公式メンター相談
        </a>
    </li>

</ul>