<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>rolemy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/css/animate.css">
    
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/magnific-popup.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/ionicons.min.css">
    
    <link rel="stylesheet" href="/css/flaticon.css">
    <link rel="stylesheet" href="/css/icomoon.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style-2.css">
    <script src="https://kit.fontawesome.com/5ae7394135.js" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-177863081-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-177863081-1');
    </script>
     
   <script src="https://cdn.tiny.cloud/1/a7yrktlolfsaxz0hb5jqgr5k28gnce94b00l7oax7g3xogfd/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({
        selector:'textarea',
        language: "ja",
        content_css:'public/css/style-2.css',
        plugins: "textcolor table lists link",
        menubar: false,
        toolbar: ['undo redo | bold italic | styleselect | forecolor backcolor | fontsizeselect', 
                'numlist bullist | table | link'],
        fontsize_formats: '10px 12px 14px 16px 18px 20px 24px 34px',
        height: 600,
        force_p_newlines : false,
        force_br_newlines : false,
        convert_newlines_to_brs : false,
        remove_linebreaks : true,  
        });</script>
  
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@KanamamaH" />
    <meta property="og:url" content="https://www.rolemy.jp/" />
    <meta property="og:title" content="rolemy" />
    <meta property="og:description" content="女性向けメンターマッチングサービス。会員メンバーや公式メンターへの相談、グループ相談会でキャリアや人生の悩みを解決。" />
    <meta property="og:image" content="https://www.rolemy.jp/images/rolemy_icon.png" />
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  @include('commons.navbar')
  
  <section class="ftco-section" id="coaches-section">
    	<div class="container mt-4 mb-4">
    	    <div class="border p-4">
    	        <h1 class="h4 mb-4 font-weight-bold">
                    新規作成
                </h1>
 
                <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                    @csrf
         
                    <fieldset class="mb-4">
         
                        <div class="form-group">
                            <label for="category_id">カテゴリー *</label>
                            {!! Form::select('category_id', $categories->prepend('お選びください', ''), null, ['class' => 'form-control', 'required']) !!}
                        </div>
         
                        <div class="form-group">
                            <label for="title">
                                タイトル*
                            </label>
                            <input id="title" name="title" class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" value="{{ old('title') }}" type="text">
                            @if ($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                        </div>
         
                        <div class="form-group">
                            <label for="content">
                                本文*
                            </label>
         
                            <textarea id="content" name="content" class="form-control {{ $errors->has('content') ? 'is-invalid' : '' }}" rows="4">{{ old('content') }}</textarea>
                            @if ($errors->has('content'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('content') }}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="picture">画像</label>
                            <input type="file" name="picture">
                        </div>
         
                        <div class="mt-5">
                            <a class="btn btn-light" href="{{ route('blog.index') }}">
                                キャンセル
                            </a>
         
                            <button type="submit" class="btn btn-primary">
                                投稿する
                            </button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
      </section>
      
  @include('commons.footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="/js/jquery.min.js"></script>
  <script src="/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>
  <script src="/js/jquery.easing.1.3.js"></script>
  <script src="/js/jquery.waypoints.min.js"></script>
  <script src="/js/jquery.stellar.min.js"></script>
  <script src="/js/owl.carousel.min.js"></script>
  <script src="/js/jquery.magnific-popup.min.js"></script>
  <script src="/js/aos.js"></script>
  <script src="/js/jquery.animateNumber.min.js"></script>
  <script src="/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

  <script src="/js/main.js"></script>

  </body>
</html>