@extends('layouts.app_2')

@section('content')
    <section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">新規登録</h2>
          		</div>
        	</div>
    
            <div class="row">
                <div class="mb-5 mt-5 col-sm-6 offset-sm-3 pt-5 bg-light">
        
                    {{--エラーメッセージ--}}
                            @include('commons.error_messages')
                            
                    {!! Form::open(['route' => 'register.pre_check']) !!}
                        <div class="form-group">
                            {!! Form::label('email', 'メールアドレス') !!}
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
                        
                        <div class="text-center">
                        {!! Form::submit('確認画面へ', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                        </div> 
                    {!! Form::close() !!}
                                           
                </div>
            </div>
        </div>
    </section>    
        
@endsection