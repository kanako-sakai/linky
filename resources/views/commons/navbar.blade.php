<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">Linky</a>
      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item">{!! link_to_route('home', 'ホーム') !!}</li>
          
          <li class="nav-item">{!! link_to_route('about', 'About') !!}</li>
          
        @if (Auth::check())
          {{-- ユーザ一覧ページへのリンク --}}
          <li class="nav-item"><a href="#" class="nav-link"><span>相談相手を探す</span></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><span>公式メンターリスト</span></a></li>
          {{-- マイページへのリンク --}}
          <li class="nav-item"><a href="#" class="nav-link"><span>マイページ</span></a></li>
          {{-- ログアウトへのリンク --}}
          <li class="nav-item">{!! link_to_route('logout.get', 'ログアウト') !!}</li>
          
        @else  
          {{-- ユーザ登録ページへのリンク --}}
          <li class="nav-item">{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
          {{-- ログインページへのリンク --}}
          <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
        @endif
        
          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
        </ul>
      </div>
    </div>
  </nav>