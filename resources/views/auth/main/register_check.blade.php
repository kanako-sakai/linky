@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">本会員登録確認</h2>

          		</div>
        	</div>
            
            <div class="col-md-12 mb-5">
                <table class="confirm table-bordered">
                    <tr>
                        <th>お名前</th>
                        <td>{{$user->name}}</td>
                    </tr>  
                    <tr>
                        <th>社会人歴</th>
                        <td>{{$profile->working_years}} 年目</td>
                    </tr>
                    <tr>
                        <th>最終学歴</th>
                        <td>{{$profile->education}}</td>
                    </tr>
                    <tr>
                        <th>ご勤務先</th>
                        <td>{{$profile->employee}}</td>
                    </tr>
                    <tr>
                        <th>業種</th>
                        <td>{{$industry}}</td>
                    </tr>
                    <tr>
                        <th>職種</th>
                        <td>{{$job_category}}</td>
                    </tr>
                    <tr>
                        <th>海外経験</th>
                        <td>@if ($profile->expat == 1)海外駐在・トレーニー
                            @endif
                            @if ($profile->mba == 1)MBA留学
                            @endif 
                            @if ($profile->other_study_abroad == 1)その他海外留学
                            @endif
                            @if ($profile->returnee == 1)帰国子女
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>転職経験</th>
                        <td>@if ($profile->career_change == 0)
                                なし
                            @else
                                あり
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>既婚/未婚</th>
                        <td> @if ($profile->marriage_status == 0)
                                未婚
                            @else
                                既婚
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>子供の有無</th>
                        <td>@if ($profile->child_status == 0)
                                なし
                            @else
                                あり
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>自己紹介</th>
                        <td>{{$profile->intro}}</td>
                    </tr>
                    <tr>
                        <th>相談に乗ることはできますか</th>
                        <td>@if ($profile->can_mentor == 0)
                                不可
                            @else
                                可
                            @endif
                        </td>
                    </tr>
                </table>    
            </div>    
                    
            <form method="POST" action="{{ route('register.main.registered') }}">
                @csrf
                
            <!--email_verify_tokenのデータを引き継ぐ-->
            {!! Form::hidden('email_verify_token', $email_verify_token); !!}
            
                
                <input type="hidden" name="name" value="{{$user->name}}">
                <input type="hidden" name="working_years" value="{{$profile->working_years}}">
                <input type="hidden" name="education" value="{{$profile->education}}">
                <input type="hidden" name="employee" value="{{$profile->employee}}">
                <input type="hidden" name="industry_id" value="{{$profile->industry_id}}">
                <input type="hidden" name="job_category_id" value="{{$profile->job_category_id}}">
                <input type="hidden" name="expat" value="{{$profile->expat}}">
                <input type="hidden" name="mba" value="{{$profile->mba}}">
                <input type="hidden" name="other_study_abroad" value="{{$profile->other_study_abroad}}">
                <input type="hidden" name="returnee" value="{{$profile->returnee}}">
　                   <input type="hidden" name="career_change" value="{{$profile->career_change}}">
                <input type="hidden" name="marriage_status" value="{{$profile->marriage_status}}">
                <input type="hidden" name="child_status" value="{{$profile->child_status}}">
                <input type="hidden" name="intro" value="{{$profile->intro}}">
                <input type="hidden" name="can_mentor" value="{{$profile->can_mentor}}">
                <input type="hidden" name="agree" value="{{$user->agree}}">
            
            <div class="submit-return-buttons text-center">
                <span>
                   <input value= "前に戻る" onclick= "history.back();" type="button" class="btn btn-light">
                </span>
                <span>
                    <button type="submit" name="action" value="submit" class="btn btn-primary">
                        本登録
                    </button>
                </span>    
            </div>
            </form>
        </div>
</section>
@endsection
