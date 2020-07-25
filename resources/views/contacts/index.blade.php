@extends('layouts.sub')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center ftco-animate">
                	<h2 class="mb-4">お問い合わせ</h2>
          		</div>
        	</div>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">お問い合わせフォームをご記載ください。</div>
                    
                    {{--エラーメッセージ--}}
                    @include('commons.error_messages')   
                    
                    {!! Form::open(['route' => 'contact.confirm']) !!}
                   
                    <div class="form-group">
                        {!! Form::label('name', 'お名前') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('title', '件名') !!}
                        {!! Form::text('title', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('body', 'お問い合わせ内容') !!}
                        {!! Form::text('body', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    {!! Form::submit('確認画面へ', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
</div>
</section>

@endsection
                    