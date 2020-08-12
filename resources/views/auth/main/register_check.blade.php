@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">本会員登録確認</h2>
          		</div>
        	</div>

            <div class="bg-light card-body">
                <form method="POST" action="{{ route('register.main.registered') }}">
                    @csrf
                    
                <!--email_verify_tokenのデータを引き継ぐ-->
                {!! Form::hidden('email_verify_token', $email_verify_token); !!}
                
                    <div class="form-group row">
                        <label for="name" class="col-md-5 col-form-label text-md-right">【お名前】</label>
                        <div class="col-md-7">
                            <span class="">{{$user->name}}</span>
                            <input type="hidden" name="name" value="{{$user->name}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="working_years" class="col-md-5 col-form-label text-md-right">【社会人歴】</label>
                        <div class="col-md-7">
                            <span class="">{{$profile->working_years}}年目</span>
                            <input type="hidden" name="working_years" value="{{$profile->working_years}}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="education" class="col-md-5 col-form-label text-md-right">【最終学歴】</label>
                        <div class="col-md-7">
                            <span class="">{{$profile->education}}</span>
                            <input type="hidden" name="education" value="{{$profile->education}}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="employee" class="col-md-5 col-form-label text-md-right">【ご勤務先】</label>
                        <div class="col-md-7">
                            <span class="">{{$profile->employee}}</span>
                            <input type="hidden" name="employee" value="{{$profile->employee}}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="industry_id" class="col-md-5 col-form-label text-md-right">【業種】</label>
                        <div class="col-md-7">
                            <span class="">{{$industry}}</span>
                            <input type="hidden" name="industry_id" value="{{$profile->industry_id}}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="job_category_id" class="col-md-5 col-form-label text-md-right">【職種】</label>
                        <div class="col-md-7">
                            <span class="">{{$job_category}}</span>
                            <input type="hidden" name="job_category_id" value="{{$profile->job_category_id}}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="oversea_exp" class="col-md-5 col-form-label text-md-right">【海外経験】</label>
                        <div class="col-md-7">
                            <span class="">
                                @if ($profile->expat == 0)
                                    <p></p>
                                @else
                                    <p>海外駐在・トレーニー</p>
                                @endif
                                <input type="hidden" name="expat" value="{{$profile->expat}}">
                      
                                @if ($profile->mba == 0)
                                    <p></p>
                                @else
                                    <p>MBA留学</p>
                                @endif 
                                <input type="hidden" name="mba" value="{{$profile->mba}}">

                                @if ($profile->other_study_abroad == 0)
                                    <p></p>
                                @else
                                    <p>その他海外留学</p>
                                @endif
                                <input type="hidden" name="other_study_abroad" value="{{$profile->other_study_abroad}}">
                            
                                @if ($profile->returnee == 0)
                                    <p></p>
                                @else
                                    <p>帰国子女</p>
                                @endif
                                <input type="hidden" name="returnee" value="{{$profile->returnee}}">
                            </span>
                        </div>
                        
                    </div>
                    
                    <div class="form-group row">
                        <label for="job_category_id" class="col-md-5 col-form-label text-md-right">【転職経験】</label>
                        <div class="col-md-7">
                            @if ($profile->career_change == 0)
                                <p>なし</p>
                            @else
                                <p>あり</p>
                            @endif
                        </div>
                        <input type="hidden" name="career_change" value="{{$profile->career_change}}">
                    </div>
                    
                    <div class="form-group row">
                        <label for="marriage_status" class="col-md-5 col-form-label text-md-right">【既婚／未婚】</label>
                        <div class="col-md-7">
                            @if ($profile->marriage_status == 0)
                                <p>未婚</p>
                            @else
                                <p>既婚</p>
                            @endif
                        </div>
                        <input type="hidden" name="marriage_status" value="{{$profile->marriage_status}}">
                    </div>
                    
                    <div class="form-group row">
                        <label for="child_status" class="col-md-5 col-form-label text-md-right">【お子様の有無】</label>
                        <div class="col-md-7">
                            @if ($profile->child_status == 0)
                                <p>なし</p>
                            @else
                                <p>あり</p>
                            @endif
                        </div>
                        <input type="hidden" name="child_status" value="{{$profile->child_status}}">
                    </div>
                    
                    <div class="form-group row">
                        <label for="intro" class="col-md-5 col-form-label text-md-right">【自己紹介文】</label>
                        <div class="col-md-7">
                            <span class="">{{$profile->intro}}</span>
                            <input type="hidden" name="intro" value="{{$profile->intro}}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="can_mentor" class="col-md-5 col-form-label text-md-right">【相談に乗ることの可否】</label>
                        <div class="col-md-7">
                            @if ($profile->can_mentor == 0)
                                <p>不可</p>
                            @else
                                <p>可</p>
                            @endif
                        </div>
                        <input type="hidden" name="can_mentor" value="{{$profile->can_mentor}}">
                    </div>
                        <input type="hidden" name="agree" value="{{$user->agree}}">
                    
                    <div class="form-group">
                        <span class="col-md-6 offset-4">
                           <input value= "前に戻る" onclick= "history.back();" type="button" class="btn btn-primary">
                        <span class="col-md-4">
                            <button type="submit" name="action" value="submit" class="btn btn-primary">
                                本登録
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
