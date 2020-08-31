@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">本会員登録</h2>
          		</div>
        	</div>
            
           {!! Form::open(['route' => 'register.main.check']) !!}
               @csrf
           <!--email_verify_tokenのデータを引き継ぐ-->
            {!! Form::hidden('email_verify_token', $email_verify_token); !!} 
           
            <div class="form-group">
                {!! Form::label('name', 'お名前') !!}
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
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
                <input type="number" name="working_years" class="form-control @error('working_years') is-invalid @enderror">
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
                <input type="text" name="education" class="form-control @error('education') is-invalid @enderror">
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
                <input type="text" name="employee" class="form-control @error('employee') is-invalid @enderror">
                <div class="invalid-feedback">
                    @if($errors->has('employee'))
                        @foreach($errors->get('employee') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('industry_id', '業種') !!}
                {!! Form::select('industry_id', $industries->prepend('お選びください', ''), null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('job_category_id', '職種') !!}
                {!! Form::select('job_category_id', $job_categories->prepend('お選びください', ''), null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                <p>海外経験 （ない場合は選択不要） </p>
                
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
                <p>転職経験</p>
                {!! Form::radio('career_change', 0, false, ['class' => 'field', 'id'=>'career-0']) !!}
                {!! Form::label('career-0', 'なし') !!}
                {!! Form::radio('career_change', 1, false, ['class' => 'field', 'id'=>'career-1']) !!}
                {!! Form::label('career-1', 'あり') !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('marriage_status', '既婚／未婚') !!} <br>
                {!! Form::radio('marriage_status', 0, false, ['class' => 'field', 'id'=>'marriage-0']) !!}
                {!! Form::label('marriage-0', '未婚') !!}
                {!! Form::radio('marriage_status', 1, false, ['class' => 'field', 'id'=>'marriage-1']) !!}
                {!! Form::label('marriage-1', '既婚') !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('child_status', 'お子様の有無') !!} <br>
                {!! Form::radio('child_status', 0, false, ['class' => 'field', 'id'=>'child-0']) !!}
                {!! Form::label('child-0', 'なし') !!}
                {!! Form::radio('child_status', 1, false, ['class' => 'field', 'id'=>'child-1']) !!}
                {!! Form::label('child-1', 'あり') !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('can_mentor', '他の方の相談に乗ることができますか？') !!} <br>
                {!! Form::radio('can_mentor', 1, false, ['class' => 'field', 'id'=>'can-1']) !!}
                {!! Form::label('can-1', '可') !!}
                {!! Form::radio('can_mentor', 0, false, ['class' => 'field', 'id'=>'can-0']) !!}
                {!! Form::label('can-0', '不可') !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('intro', '自己紹介文(後から変更することができます)') !!}
                <textarea class="form-control @error('intro') is-invalid @enderror" name="intro" cols="50" rows="10" id="intro"></textarea>

                <div class="invalid-feedback">
                    @if($errors->has('intro'))
                        @foreach($errors->get('intro') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
            </div>   
            
            <div class="form-group">
                {!! Form::checkbox('agree', 1, null, ['class' => 'field']) !!}
                <a href="/privacy_policy" target="_blank" rel="noopener noreferrer">プライバシーポリシー</a>に同意する。
            </div>
            
            <div style="text-align: center">
            {!! Form::submit('確認画面へ', ['class' => 'btn py-3 px-4 btn-primary']) !!}
            
            {!! Form::close() !!}
            </div>
        </div>
</section>    
@endsection
    
    
