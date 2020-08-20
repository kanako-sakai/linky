@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
                <div class="col-md-8 heading-section text-center ftco-animate">
                    <h2 class="mb-4">オフィシャルメンター相談リクエスト</h2>
                </div>
            </div>

            {{--エラーメッセージ--}}
            @include('commons.error_messages')   
            
            {!! Form::open(['route' => ['official.confirm', $user->id]]) !!}
      
           
            <div class="form-group">
                {!! Form::label('name', 'お名前') !!}
                {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('email', 'ご連絡先(メールアドレス)') !!}
                {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('plan', 'ご購入のプラン') !!}
                {!! Form::hidden('plan', '1') !!}
                <p>1回プラン</p>
            </div>
            
            <div class="form-group">
                {!! Form::label('mentor_id', 'ご希望のメンター') !!}
                {!! Form::select('mentor_id', $mentors, null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('goal', 'メンタリングの目的') !!}
                {!! Form::text('goal', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('questions', 'お話しされたい内容') !!}
                {!! Form::textarea('questions', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('dates', 'ご希望日時　（時間調整がしやすいよう、1日少なくとも3時間以上可能な時間をご提示ください。）') !!}
                {!! Form::textarea('dates', '【第一希望】〇月〇日　〇〇時～〇〇時 &#13;&#10;【第二希望】〇月〇日　〇〇時～〇〇時　&#13;&#10;【第三希望】〇月〇日　〇〇時～〇〇時　&#13;&#10;【第四希望】〇月〇日　〇〇時～〇〇時　&#13;&#10;【第五希望】〇月〇日　〇〇時～〇〇時', ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::checkbox('precaution', 1, null, ['class' => 'field']) !!}
                <a href="/precaution" target="_blank" rel="noopener noreferrer">注意事項</a>に同意する。
            </div>
          
            {!! Form::submit('内容を確認する', ['class' => 'btn py-3 px-4 btn-primary']) !!}
            {!! Form::close() !!}
      </div>
  </section>
@endsection              
        