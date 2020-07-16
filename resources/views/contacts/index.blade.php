@extends('layouts.app_2')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">お問い合わせ</div>
                    
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

@endsection
                    