<ul class="list-group list-group-horizontal">
    
    {{--　リクエスト申請中一覧タブ --}}
    <li class="list-group-item">
        <a href="{{ route('users.mentor_requestings', ['id' => $user->id]) }}" class="nav-link mypage-link {{ Request::routeIs('users.mentor_requestings') ? 'active' : '' }}">
            <i class="far fa-paper-plane fa-lg nav-icon"></i> <span class="nav_title">申請中</span>
            <span class="badge badge-secondary badge-pill">{{ $user->mentor_requestings_count }}</span>
        </a>
    </li>
    {{-- リクエスト依頼一覧タブ --}}
    <li class="list-group-item">
        <a href="{{ route('users.requesters', ['id' => $user->id]) }}" class="nav-link mypage-link {{ Request::routeIs('users.requesters') ? 'active' : '' }}">
            <i class="fas fa-arrow-alt-circle-down fa-lg nav-icon"></i> <span class="nav_title">依頼</span>
            <span class="badge badge-secondary badge-pill">{{ $user->requesters_count }}</span>
        </a>
    </li>
    {{-- マッチング成立一覧タブ --}}
    <li class="list-group-item">
        <a href="{{ route('matches', ['id' => $user->id]) }}" class="nav-link mypage-link {{ Request::routeIs('matches') ? 'active' : '' }}">
            <i class="fas fa-hands-helping fa-lg nav-icon"></i> <span class="nav_title">マッチ成立</span>
            <span class="badge badge-secondary badge-pill">{{ $user->mentor_requests_count }}</span>    

        </a>
    </li>
    {{-- 公式メンタリング一覧タブ --}}
    <li class="list-group-item">
        <a href="{{ route('official_status', ['id' => $user->id]) }}" class="nav-link mypage-link {{ Request::routeIs('official_status') ? 'active' : '' }}">
            <i class="fas fa-check-circle fa-lg nav-icon"></i> <span class="nav_title">公式相談</span>
            <span style="width: 12px;"></span>
        </a>
    </li>
</ul>