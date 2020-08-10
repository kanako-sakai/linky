@extends('layouts.app_2')

@section('content')

    @if(Auth::id() == $user->id)
    
    <section class="ftco-section" id="coaches-section">
        	<div class="container">
        		<div class="row justify-content-center pb-5">
                	<div class="col-md-8 heading-section text-center">
                    	<h2 class="mb-4">マイページ</h2>
              		</div>
            	</div>
            	
                <div class="col-md-12">
                    @include('users.card')
                </div>
                <hr class ="cp_hr05" />
                
                <div class="col-md-12">
                    @include('users.navtabs')
                </div>    
                <div class="text-center">
                    @include('users.profile')
                </div>
            </div>
    </section>
    
    @else
    <section class="ftco-section" id="coaches-section">
        	<div class="container">
        		<div class="row justify-content-center pb-5">
                	<div class="col-md-8 heading-section text-center">
                    	<h2 class="mb-4">{{ $user->name }}</h2>
              		</div>
            	</div>
            	
                <div class="pb-5 text-center">
                   @include('users.icon')
                </div>	
                
                <hr class ="cp_hr05" />
                
                <div class= "pb-5 text-center">
                        <h3>プロフィール</h3>
                
                <div class= "col-md-12">
                        <table class = "profile">
                            <tbody>
                                <tr>
                                    <th>【最終学歴】</th>
                                    <td class="text-left">{{ $profile->education }}</td>
                                </tr>
                                <tr>
                                    <th>【社会人歴】</th>
                                    <td class="text-left">{{ $profile->working_years }}</td>
                                </tr>
                                @if($profile->employer_display==1)
                                
                                @else
                                <tr>
                                    <th>【勤務先】</th>
                                    <td class="text-left">{{ $profile->employee }}</td>
                                </tr>
                                @endif
                                
                                <tr>
                                    <th>【業種】</th>
                                    <td class="text-left">{{ $industry }}</td>
                                </tr>
                                <tr>
                                    <th>【職種】</th>
                                    <td class="text-left">{{ $job_category }}</td>
                                </tr>
                                <tr>
                                    <th>【海外経験】</th>
                                    <td class="text-left">
                                        @if ($profile->expat == 0)<p></p>
                                        @else
                                            <p>海外駐在・トレーニー</p>
                                        @endif    
                                        @if ($profile->mba == 0)
                                            <p></p>
                                        @else
                                            <p>MBA留学</p>
                                        @endif
                                        @if ($profile->other_study_abroad == 0)
                                            <p></p>
                                        @else
                                            <p>その他海外留学</p>
                                        @endif
                                        @if ($profile->returnee == 0)
                                            <p></p>
                                        @else
                                            <p>帰国子女</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>【転職経験】</th>
                                    <td class="text-left">
                                        @if ($profile->career_change == 0)
                                            <p>なし</p>
                                        @else
                                            <p>あり</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>【既婚／未婚】</th>
                                    <td class="text-left">
                                        @if ($profile->marriage_status == 0)
                                            <p>既婚</p>
                                        @else
                                            <p>未婚</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>【子供の有無】</th>
                                    <td class="text-left">
                                        @if ($profile->child_status == 0)
                                            <p>なし</p>
                                        @else
                                            <p>あり</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>【自己紹介】</th>
                                    <td class="text-left"> {{$profile->intro}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                    <hr class ="cp_hr05" />    
            
                    <div class = "col-md-6 offset-md-3 pb-5 text-center">    
                    {{--　リクエストボタン --}}
                    @include('mentor_request.request_button')
                    </div>
                
                    <div class= "col-md-6 offset-md-3 pb-5 text-center">    
                    {{--　承認ボタン --}}
                    @include('mentor_request.accept_button')
                    </div>
                </div> 
            </div>    
        </div>
    </section>
    @endif
@endsection