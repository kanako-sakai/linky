@extends('layouts.app_2')

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
                <p class="text-center">お問い合わせフォームをご記載ください。</p>
                
                {!! Form::open(['route' => 'contact.confirm']) !!}
                
                <div class="form-group">
                    {!! Form::label('name', 'お名前') !!}
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                    <div class="invalid-feedback">
                    @if($errors->has('name'))
                        @foreach($errors->get('name') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                    </div>
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'メールアドレス') !!}
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                     <div class="invalid-feedback">
                    @if($errors->has('email'))
                        @foreach($errors->get('email') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                    </div>
                </div>
                
                <div class="form-group">
                    {!! Form::label('title', '件名') !!}
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                    <div class="invalid-feedback">
                    @if($errors->has('title'))
                        @foreach($errors->get('title') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                    </div>
                </div>
                
                <div class="form-group">
                    {!! Form::label('body', 'お問い合わせ内容') !!}
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" value="{{ old('body') }}" cols="50" rows="10" id="body"></textarea>
                    <div class="invalid-feedback">
                    @if($errors->has('body'))
                        @foreach($errors->get('body') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                    </div>
                </div>
                
                <div class="form-group text-center">
                {!! Form::submit('確認画面へ', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
            </div>
        </div>
</div>
</section>

@endsection
                    