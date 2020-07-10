@extends('layouts.sub')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="#" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">ログイン</h1>
          </div>
        </div>
      </div>
    </section>
    
    <div class="row">
        <div class="mb-5 mt-5 col-sm-6 offset-sm-3 pt-5 bg-light">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('ログイン', ['class' =>'btn py-3 px-4 btn-primary']) !!}
            {!! Form::close() !!}

            {{-- ユーザ登録ページへのリンク --}}
            <p class="mt-2">新規登録がまだの方は {!! link_to_route('signup.get', 'こちら') !!}</p>
        </div>
    </div>
@endsection