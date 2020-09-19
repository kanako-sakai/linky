@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-10 heading-section text-center">
                	<h2 class="mb-4">本会員登録</h2>
                	<p>登録会員のみ以下のご登録情報を見ることができます。<br>ご勤務先を非表示にされたい場合は、登録後マイページより「プロフィール編集」に進みご設定ください。</p>
          		</div>
        	</div>
            
           {!! Form::open(['route' => 'register.main.check']) !!}
               @csrf
           <!--email_verify_tokenのデータを引き継ぐ-->
            {!! Form::hidden('email_verify_token', $email_verify_token); !!} 
           
            <div class="form-group">
                {!! Form::label('name', 'お名前 [必須]') !!}
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required value="{{old('name')}}">
                <div class="invalid-feedback">
                    @if($errors->has('name'))
                        @foreach($errors->get('name') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('working_years', '社会人歴 [必須]') !!}
                <input type="number" name="working_years" class="form-control @error('working_years') is-invalid @enderror" required value="{{old('working_years')}}">年目
              　<div class="invalid-feedback">
                    @if($errors->has('working_years'))
                        @foreach($errors->get('working_years') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
            </div>
          
            <div class="form-group">
                {!! Form::label('education', '最終学歴 [必須]') !!}
                <input type="text" name="education" class="form-control @error('education') is-invalid @enderror" required value="{{old('education')}}" placeholder="例：早稲田大学">
                <div class="invalid-feedback">
                    @if($errors->has('education'))
                        @foreach($errors->get('education') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('employee', 'ご勤務先（ご登録後マイページより公開・非公開を設定ください）[必須]') !!}
                <input type="text" name="employee" class="form-control @error('employee') is-invalid @enderror" required value="{{old('employee')}}">
                <div class="invalid-feedback">
                    @if($errors->has('employee'))
                        @foreach($errors->get('employee') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
            </div>
            
            <div class="form-group">
                {!! Form::label('industry_id', '業種 [必須]') !!}
                {!! Form::select('industry_id', $industries->prepend('お選びください', ''), null, ['class' => 'form-control', 'required']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('job_category_id', '職種 [必須]') !!}
                {!! Form::select('job_category_id', $job_categories->prepend('お選びください', ''), null, ['class' => 'form-control', 'required']) !!}
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
                <p>転職経験 [必須]</p>
                {!! Form::radio('career_change', 0, false, ['class' => 'field', 'id'=>'career-0', 'required']) !!}
                {!! Form::label('career-0', 'なし') !!}
                {!! Form::radio('career_change', 1, false, ['class' => 'field', 'id'=>'career-1', 'required']) !!}
                {!! Form::label('career-1', 'あり') !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('marriage_status', '既婚／未婚 [必須]') !!} <br>
                {!! Form::radio('marriage_status', 0, false, ['class' => 'field', 'id'=>'marriage-0', 'required']) !!}
                {!! Form::label('marriage-0', '未婚') !!}
                {!! Form::radio('marriage_status', 1, false, ['class' => 'field', 'id'=>'marriage-1', 'required']) !!}
                {!! Form::label('marriage-1', '既婚') !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('child_status', 'お子様の有無 [必須]') !!} <br>
                {!! Form::radio('child_status', 0, false, ['class' => 'field', 'id'=>'child-0', 'required']) !!}
                {!! Form::label('child-0', 'なし') !!}
                {!! Form::radio('child_status', 1, false, ['class' => 'field', 'id'=>'child-1', 'required']) !!}
                {!! Form::label('child-1', 'あり') !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('can_mentor', '他の方の相談に乗ることができますか？ [必須]') !!} <br>
                {!! Form::radio('can_mentor', 1, false, ['class' => 'field', 'id'=>'can-1', 'required']) !!}
                {!! Form::label('can-1', '可') !!}
                {!! Form::radio('can_mentor', 0, false, ['class' => 'field', 'id'=>'can-0', 'required']) !!}
                {!! Form::label('can-0', '不可') !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('intro', '自己紹介文(後から変更することができます)') !!}
                <textarea class="form-control @error('intro') is-invalid @enderror" name="intro" cols="50" rows="10" id="intro">{{old('intro')}}</textarea>

                <div class="invalid-feedback">
                    @if($errors->has('intro'))
                        @foreach($errors->get('intro') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
            </div>   
            
            <div class="form-group">
                <input class="accept-checkbox @error('agree') is-invalid @enderror" name="agree" type="checkbox" value="1" id="agree" required value="{{old('agree')}}">
                <label for="agree"><a href="/privacy" target="_blank" rel="noopener noreferrer">プライバシーポリシー・利用規約</a>に同意する。 [必須]</label>
                <div class="invalid-feedback">
                    @if($errors->has('agree'))
                        @foreach($errors->get('agree') as $message)
                        {{ $message }}
                        @endforeach    
                    @endif 
                </div>
            </div>
            <div style="text-align: center">
            {!! Form::submit('確認画面へ', ['class' => 'btn py-3 px-4 btn-primary']) !!}
            
            {!! Form::close() !!}
            </div>
        </div>
</section>    
@endsection