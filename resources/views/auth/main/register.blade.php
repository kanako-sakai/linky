@extends('layouts.app_2')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">本会員登録</div>

                    @isset($message)
                        <div class="card-body">
                            {{$message}}
                        </div>
                    @endisset

                    @empty($message)
                    
                    
                    {{--エラーメッセージ--}}
                    @include('commons.error_messages')                    
                    
                   {!! Form::open(['route' => 'register.main.check']) !!}
                   
                   <!--email_verify_tokenのデータを引き継ぐ-->
                    {!! Form::hidden('email_verify_token', $email_verify_token); !!} 
                   
                    <div class="form-group">
                        {!! Form::label('name', '名前') !!}
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('working_years', '社会人歴') !!}
                        {!! Form::number('working_years', null, ['class' => 'form-control', 'placeholder' => '例：1', 'min' => 1, 'max' => 80]) !!}
                    </div>
                  
                    <div class="form-group">
                        {!! Form::label('education', '最終学歴') !!}
                        {!! Form::text('education', null, ['class' => 'form-control', 'placeholder' => '例：早稲田大学']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('employee', 'ご勤務先') !!}
                        {!! Form::text('employee', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('industry_id', '業種') !!}
                        {!! Form::select('industry_id', $industries, null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('job_category_id', '職種') !!}
                        {!! Form::select('job_category_id', $job_categories, null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        <div class="row">
                            海外経験
                        </div>
                        {!! Form::hidden('expat', '0') !!}
                        {!! Form::checkbox('expat', 1, null, ['class' => 'field']) !!}
                        {!! Form::label('expat', '海外駐在・トレーニー') !!} <br>
                        
                        {!! Form::hidden('mba', '0') !!}
                        {!! Form::checkbox('mba', 1, null, ['class' => 'field']) !!}
                        {!! Form::label('mba', 'MBA留学') !!} <br>
                        
                        {!! Form::hidden('other_study_abroad', '0') !!}
                        {!! Form::checkbox('other_study_abroad', 1, null, ['class' => 'field']) !!}
                        {!! Form::label('other_study_abroad', 'その他留学') !!} <br>
                        
                        {!! Form::hidden('returnee', '0') !!}
                        {!! Form::checkbox('returnee', 1, null, ['class' => 'field']) !!}
                        {!! Form::label('returnee', '帰国子女') !!} 
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('career_change', '転職経験') !!}
                        {!! Form::radio('career_change', 0, false, ['class' => 'field']) !!}
                        {!! Form::label('0', 'なし') !!}
                        {!! Form::radio('career_change', 1, false, ['class' => 'field']) !!}
                        {!! Form::label('1', 'あり') !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('marriage_status', '既婚／未婚') !!}
                        {!! Form::radio('marriage_status', 0, false, ['class' => 'field']) !!}
                        {!! Form::label('0', '未婚') !!}
                        {!! Form::radio('marriage_status', 1, false, ['class' => 'field']) !!}
                        {!! Form::label('1', '既婚') !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('child_status', 'お子様の有無') !!}
                        {!! Form::radio('child_status', 0, false, ['class' => 'field']) !!}
                        {!! Form::label('0', 'なし') !!}
                        {!! Form::radio('child_status', 1, false, ['class' => 'field']) !!}
                        {!! Form::label('1', 'あり') !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::checkbox('agree', 1, null, ['class' => 'field']) !!}
                        {!! Form::label('agree', 'プライバシーポリシーに同意') !!} 
                    </div>
                    {!! Form::submit('確認画面へ', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                    
                    {!! Form::close() !!}
                    @endempty
        </div>
    </div>
@endsection
    
    
