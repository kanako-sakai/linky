@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
        	<div class="col-md-8 heading-section text-center">
            	<h2 class="mb-4">プロフィールの編集</h2>
      		</div>
            
            <div class = "col-md-10">
           {!! Form::model($profile, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
           
                <div class="form-group">
                    {!! Form::label('name', 'お名前') !!}
                    {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                </div>
                
                @if($errors->has('name'))
                    @foreach($errors->get('name') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif    
                
                <div class="form-group">
                    {!! Form::label('working_years', '社会人歴') !!}
                    {!! Form::number('working_years', null, ['class' => 'form-control', 'placeholder' => '例：1', 'min' => 1, 'max' => 80]) !!}
                </div>
                
                @if($errors->has('working_years'))
                    @foreach($errors->get('working_years') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif  
              
                <div class="form-group">
                    {!! Form::label('education', '最終学歴') !!}
                    {!! Form::text('education', null, ['class' => 'form-control', 'placeholder' => '例：早稲田大学']) !!}
                </div>
                
                @if($errors->has('education'))
                    @foreach($errors->get('education') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif  
                
                <div class="form-group">
                    {!! Form::label('employee', 'ご勤務先') !!}
                    {!! Form::text('employee', null, ['class' => 'form-control']) !!}
                    @if($profile->employer_display == 0)
                    {!! Form::label('employer_display', '勤務先を表示する') !!}
                    {!! Form::hidden('employer_display', '1') !!}
                    {!! Form::checkbox('employer_display', 0, true, ['class' => 'field']) !!}
                    @else
                    {!! Form::label('employer_display', '勤務先を表示する') !!}
                    {!! Form::hidden('employer_display', '1') !!}
                    {!! Form::checkbox('employer_display', 0, 0, ['class' => 'field']) !!}
                    @endif
                </div>
                
                @if($errors->has('employee'))
                    @foreach($errors->get('employee') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif  
                
                <div class="form-group">
                    {!! Form::label('industry_id', '業種') !!}
                    {!! Form::select('industry_id', $industries, null, ['class' => 'form-control']) !!}
                </div>
                @if($errors->has('industry_id'))
                    @foreach($errors->get('industry_id') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif  
                
                <div class="form-group">
                    {!! Form::label('job_category_id', '職種') !!}
                    {!! Form::select('job_category_id', $job_categories, null, ['class' => 'form-control']) !!}
                </div>
                
                @if($errors->has('job_category_id'))
                    @foreach($errors->get('job_category_id') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif  
                
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
                
                @if($errors->has('career_change'))
                    @foreach($errors->get('career_change') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif  
                
                <div class="form-group">
                    {!! Form::label('marriage_status', '既婚／未婚') !!}
                    {!! Form::radio('marriage_status', 0, false, ['class' => 'field']) !!}
                    {!! Form::label('0', '未婚') !!}
                    {!! Form::radio('marriage_status', 1, false, ['class' => 'field']) !!}
                    {!! Form::label('1', '既婚') !!}
                </div>
                
                @if($errors->has('marriage_status'))
                    @foreach($errors->get('marriage_status') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif  
                
                <div class="form-group">
                    {!! Form::label('child_status', 'お子様の有無') !!}
                    {!! Form::radio('child_status', 0, false, ['class' => 'field']) !!}
                    {!! Form::label('0', 'なし') !!}
                    {!! Form::radio('child_status', 1, false, ['class' => 'field']) !!}
                    {!! Form::label('1', 'あり') !!}
                </div>
                
                @if($errors->has('child_status'))
                    @foreach($errors->get('child_status') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif  
                
                
                <div class="form-group">
                    {!! Form::label('can_mentor', '他の方の相談に乗ることができますか？') !!}
                    {!! Form::radio('can_mentor', 1, false, ['class' => 'field']) !!}
                    {!! Form::label('1', '可') !!}
                    {!! Form::radio('can_mentor', 0, false, ['class' => 'field']) !!}
                    {!! Form::label('0', '不可') !!}
                </div>
                
                
                @if($errors->has('can_mentor'))
                    @foreach($errors->get('can_mentor') as $message)
                    <p class="error-message mg-0">{{ $message }} </p>
                    @endforeach    
                @endif  
                
                <div class="form-group">
                    {!! Form::label('intro', '自己紹介文') !!}
                    {!! Form::textarea('intro', null, ['class' => 'form-control']) !!}
                </div>
                
                <div style="text-align: center">
                {!! Form::submit('更新', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</section>    
@endsection

