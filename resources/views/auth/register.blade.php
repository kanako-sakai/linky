@extends('layouts.app_2')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="#" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">新規登録</h1>
          </div>
        </div>
      </div>
    </section>
    
     <div class="row">
        <div class="mb-5 mt-5 col-sm-6 offset-sm-3 pt-5 bg-light">

            {{--エラーメッセージ--}}
                    @include('commons.error_messages')
                    
            {!! Form::open(['route' => 'register.pre_check']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード確認用') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control' ]) !!}
                </div>

                {!! Form::submit('確認画面へ', ['class' => 'btn py-3 px-4 btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection