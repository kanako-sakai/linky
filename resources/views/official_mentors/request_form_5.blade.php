@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
                <div class="col-md-8 heading-section text-center ftco-animate">
                    <h2 class="mb-4">オフィシャルメンター相談リクエスト</h2>
                </div>
            </div>

            {!! Form::open(['route' => ['official.confirm', $user->id]]) !!}
      
           
            <div class="form-group">
                {!! Form::label('name', 'お名前') !!}
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}">
                    <div class="invalid-feedback">
                    @if($errors->has('name'))
                        @foreach($errors->get('name') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                    </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('email', 'ご連絡先(メールアドレス)') !!}
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
                {!! Form::label('plan', 'ご購入のプラン') !!}
                {!! Form::hidden('plan', '5') !!}
                <p>5回プラン</p>
            </div>
            
            <div class="form-group">
                {!! Form::label('mentor_id', 'ご希望のメンター') !!}
                {!! Form::select('mentor_id', $mentors, null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('goal', 'メンタリングの目的') !!}
                <input type="text" name="goal" class="form-control @error('goal') is-invalid @enderror" value="{{ old('goal') }}">
                     <div class="invalid-feedback">
                    @if($errors->has('goal'))
                        @foreach($errors->get('goal') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                    </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('questions', 'お話しされたい内容') !!}
                <textarea class="form-control @error('questions') is-invalid @enderror" name="questions" cols="50" rows="10">{{ old('questions') }}</textarea>
                <div class="invalid-feedback">
                @if($errors->has('questions'))
                    @foreach($errors->get('questions') as $message)
                    {{ $message }}
                    @endforeach    
                @endif 
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('dates', 'ご希望日時　（時間調整がしやすいよう、1日少なくとも3時間以上可能な時間をご提示ください。）') !!}
                <textarea class="form-control @error('dates') is-invalid @enderror" name="dates" cols="50" rows="10" placeholder="【第一希望】〇月〇日　〇〇時～〇〇時 &#13;&#10;【第二希望】〇月〇日　〇〇時～〇〇時　&#13;&#10;【第三希望】〇月〇日　〇〇時～〇〇時　&#13;&#10;【第四希望】〇月〇日　〇〇時～〇〇時　&#13;&#10;【第五希望】〇月〇日　〇〇時～〇〇時">{{ old('dates') }}</textarea>
                <div class="invalid-feedback">
                @if($errors->has('dates'))
                    @foreach($errors->get('dates') as $message)
                    {{ $message }}
                    @endforeach    
                @endif 
                </div>
            </div>
            
            <div class="form-group">
                <input class="accept-checkbox @error('precaution') is-invalid @enderror" name="precaution" type="checkbox" value="1" id="precaution">
                <label for="precaution"><a href="/precaution" target="_blank" rel="noopener noreferrer">注意事項</a>に同意する。</label>
                <div class="invalid-feedback">
                    @if($errors->has('precaution'))
                        @foreach($errors->get('precaution') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
            </div>
          
            {!! Form::submit('内容を確認する', ['class' => 'btn py-3 px-4 btn-primary']) !!}
            {!! Form::close() !!}
      </div>
  </section>
@endsection              
        