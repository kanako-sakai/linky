<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Rolemy</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item">{!! link_to_route('home', 'ホーム',[],['class' => 'nav-link']) !!}</li>
          
        @if (Auth::check())
          {{-- ユーザ一覧ページへのリンク --}}
          <li class="nav-item">{!! link_to_route('users.index', '相談相手を探す',[],['class' => 'nav-link']) !!}</li>
          <li class="nav-item">{!! link_to_route('offical_mentors', '公式メンターリスト',[],['class' => 'nav-link']) !!}</li>
          <li class="nav-item">{!! link_to_route('group_index', 'グループ座談会', [], ['class' => 'nav-link']) !!}</li>
          {{-- マイページへのリンク --}}
          <li class="nav-item">{!! link_to_route('users.show', 'マイページ', ['user' => Auth::id()], ['class' => 'nav-link']) !!}</li>
          {{-- ログアウトへのリンク --}}
          <li class="nav-item">{!! link_to_route('logout.get', 'ログアウト',[],['class' => 'nav-link']) !!}</li>
          
        @else  
          {{-- ユーザ登録ページへのリンク --}}
          <li class="nav-item">{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
          {{-- ログインページへのリンク --}}
          <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
        @endif
        
          <li class="nav-item">{!! link_to_route('contact.index', 'お問い合わせ', [], ['class' => 'nav-link']) !!}</li>
        </ul>
      </div>
    </div>
  </nav>