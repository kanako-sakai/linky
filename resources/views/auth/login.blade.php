@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">ログイン</h2>
                </div>
            </div>    
    
            <div class="row">
                <div class="mb-5 mt-5 col-sm-6 offset-sm-3 pt-5">
                    
                    {{--エラーメッセージ--}}
                    @include('commons.error_messages')
        
                    {!! Form::open(['route' => 'login.post']) !!}
                        <div class="form-group">
                            {!! Form::label('email', 'メールアドレス') !!}
                            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                        </div>
        
                        <div class="form-group">
                            {!! Form::label('password', 'パスワード') !!}
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
                        
                        <div class="form-group text-center">
                        {!! Form::submit('ログイン', ['class' =>'btn py-3 px-4 btn-primary']) !!}
                        </div>
                        
                    {!! Form::close() !!}
                        
                        <div class = "text-center">
                        {{-- ユーザ登録ページへのリンク --}}
                        <p class="mt-2">新規登録がまだの方は {!! link_to_route('signup.get', 'こちら') !!}</p>
                        {{-- パスワードリセットへのリンク --}}
                        <p class="mt-2">{!! link_to_route('password.request', 'パスワードをお忘れの方') !!}</p>
                        </div>
                </div>
            </div>
        </div>    
</section>    
@endsection