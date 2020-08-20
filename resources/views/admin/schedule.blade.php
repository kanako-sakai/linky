@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">スケジュール登録</h2>
          		</div>
        	</div>
            
            {{--エラーメッセージ--}}
            @include('commons.error_messages')                    
            
           {!! Form::open(['route' => 'register_schedule']) !!}
               @csrf
           
            <div class="form-group">
                {!! Form::label('from_user_id', 'ユーザーid') !!}
                {!! Form::text('from_user_id', $user->id, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('mentor_id', 'メンター') !!}
                {!! Form::select('mentor_id', $mentors, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('dates', '日時') !!}
                <input name="dates" type="date" class="form-group">
                <input name="times" type="time" class="form-group">
            </div>
            
            <div class="form-group">
                {!! Form::label('zoom_link', 'Zoomリンク') !!}
                {!! Form::text('zoom_link', null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::submit('確認画面へ', ['class' => 'btn py-3 px-4 btn-primary']) !!}
            
            {!! Form::close() !!}
            </div>
        </div>
</section>

@endsection