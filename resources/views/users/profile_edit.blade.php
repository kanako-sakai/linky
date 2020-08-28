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
                    {!! Form::label('working_years', '社会人歴') !!}
                    <input type="number" name="working_years" class="form-control @error('working_years') is-invalid @enderror" value="{{ $profile->working_years }}">
                   <div class="invalid-feedback">
                        @if($errors->has('working_years'))
                            @foreach($errors->get('working_years') as $message)
                            {{ $message }}
                            @endforeach    
                        @endif 
                    </div>
                </div>
              
                <div class="form-group">
                    {!! Form::label('education', '最終学歴') !!}
                    <input type="text" name="education" class="form-control @error('education') is-invalid @enderror" value="{{ $profile->education }}">
                    <div class="invalid-feedback">
                        @if($errors->has('education'))
                            @foreach($errors->get('education') as $message)
                            {{ $message }}
                            @endforeach    
                        @endif 
                    </div>
                </div>
                
                <div class="form-group">
                    {!! Form::label('employee', 'ご勤務先') !!}
                    <input type="text" name="employee" class="form-control @error('employee') is-invalid @enderror" value="{{ $profile->employee }}">
                    <div class="invalid-feedback">
                        @if($errors->has('employee'))
                            @foreach($errors->get('employee') as $message)
                            {{ $message }}
                            @endforeach    
                        @endif 
                    </div>
                    @if($profile->employer_display == 0)
                    {!! Form::label('display', '勤務先を表示する') !!}
                    {!! Form::hidden('employer_display', '1') !!}
                    {!! Form::checkbox('employer_display', 0, true, ['class' => 'field', 'id'=>'display']) !!}
                    @else
                    {!! Form::label('no-display', '勤務先を表示する') !!}
                    {!! Form::hidden('employer_display', '1') !!}
                    {!! Form::checkbox('employer_display', 0, 0, ['class' => 'field', 'id'=>'no-display']) !!}
                    @endif
                </div>
                
                <div class="form-group">
                    {!! Form::label('industry_id', '業種') !!}
                    {!! Form::select('industry_id', $industries, null, ['class' => 'form-control', 'id'=>'industry_id']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('job_category_id', '職種') !!}
                    {!! Form::select('job_category_id', $job_categories, null, ['class' => 'form-control', 'id'=>'industry_id']) !!}
                </div>

                <div class="form-group">
                    <div class="row">
                        海外経験
                    </div>
                    {!! Form::hidden('expat', '0') !!}
                    {!! Form::checkbox('expat', 1, null, ['class' => 'field', 'id'=>'expat']) !!}
                    {!! Form::label('expat', '海外駐在・トレーニー') !!} <br>
                    
                    {!! Form::hidden('mba', '0') !!}
                    {!! Form::checkbox('mba', 1, null, ['class' => 'field', 'id'=>'mba']) !!}
                    {!! Form::label('mba', 'MBA留学') !!} <br>
                    
                    {!! Form::hidden('other_study_abroad', '0') !!}
                    {!! Form::checkbox('other_study_abroad', 1, null, ['class' => 'field', 'id'=>'other_study_abroad']) !!}
                    {!! Form::label('other_study_abroad', 'その他留学') !!} <br>
                    
                    {!! Form::hidden('returnee', '0') !!}
                    {!! Form::checkbox('returnee', 1, null, ['class' => 'field', 'id'=>'returnee']) !!}
                    {!! Form::label('returnee', '帰国子女') !!} 
                </div>
                
                <div class="form-group">
                    {!! Form::label('career_change', '転職経験') !!}
                    {!! Form::radio('career_change', 0, false, ['class' => 'field', 'id'=>'career-0']) !!}
                    {!! Form::label('career-0', 'なし') !!}
                    {!! Form::radio('career_change', 1, false, ['class' => 'field', 'id'=>'career-1']) !!}
                    {!! Form::label('career-1', 'あり') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('marriage_status', '既婚／未婚') !!}
                    {!! Form::radio('marriage_status', 0, false, ['class' => 'field', 'id'=>'marriage-0']) !!}
                    {!! Form::label('marriage-0', '未婚') !!}
                    {!! Form::radio('marriage_status', 1, false, ['class' => 'field', 'id'=>'marriage-1']) !!}
                    {!! Form::label('marriage-1', '既婚') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('child_status', 'お子様の有無') !!}
                    {!! Form::radio('child_status', 0, false, ['class' => 'field', 'id'=>'child-0']) !!}
                    {!! Form::label('child-0', 'なし') !!}
                    {!! Form::radio('child_status', 1, false, ['class' => 'field', 'id'=>'child-1']) !!}
                    {!! Form::label('child-1', 'あり') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('can_mentor', '他の方の相談に乗ることができますか？') !!}
                    {!! Form::radio('can_mentor', 1, false, ['class' => 'field', 'id'=>'can-1']) !!}
                    {!! Form::label('can-1', '可') !!}
                    {!! Form::radio('can_mentor', 0, false, ['class' => 'field', 'id'=>'can-0']) !!}
                    {!! Form::label('can-0', '不可') !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('intro', '自己紹介文') !!}
                    <textarea class="form-control @error('intro') is-invalid @enderror" name="intro" cols="50" rows="10" id="intro">{{ old('intro') }}</textarea>

                    <div class="invalid-feedback">
                        @if($errors->has('intro'))
                            @foreach($errors->get('intro') as $message)
                            {{ $message }}
                            @endforeach    
                        @endif 
                    </div>
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

