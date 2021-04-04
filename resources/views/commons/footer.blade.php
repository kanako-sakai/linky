 <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><span><a href="index.html">rolemy</a></span></h2>
              <p>女性プロフェッショナルのキャリアをより自由に、より前向きに</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li class="nav-item">{!! link_to_route('home', 'ホーム',[],['class' => 'nav-link']) !!}</li>
                
                
                @if (Auth::check())
                {{-- マイページへのリンク --}}
                <li class="nav-item">{!! link_to_route('users.show', 'マイページ', ['user' => Auth::id()], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('how_to', '使い方', [], ['class' => 'nav-link']) !!}</li>
                {{-- ログアウトへのリンク --}}
                <li class="nav-item">{!! link_to_route('logout.get', 'ログアウト',[],['class' => 'nav-link']) !!}</li>
                @else  
                  {{-- ユーザ登録ページへのリンク --}}
                  <li class="nav-item">{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                  {{-- ログインページへのリンク --}}
                  <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class' => 'nav-link']) !!}</li>
                @endif
                
                <li class="nav-item">{!! link_to_route('contact.index', 'お問い合わせ', [], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('tokushoho', '特定商取引法に基づく表記', [], ['class' => 'nav-link']) !!}</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>