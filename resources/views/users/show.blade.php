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
                <div class="row">
                    <aside class="col-sm-4">
                        @include('users.card')
                        @include('users.profile')
            
                    </aside>
                    
                    <div class="col-sm-8">
                    @include('users.navtabs')
                    </div>
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
                
                <div class= "pb-5 text-center">
                        <h3>プロフィール</h3>
                
                <div class= "pb-5 text-center">
                        <table class = "row justify-content-center pb-5">
                            <tbody>
                                <tr>
                                    <td>【最終学歴】</td>
                                    <td class="text-left">{{ $profile->education }}</td>
                                </tr>
                                <tr>
                                    <td>【社会人歴】</td>
                                    <td class="text-left">{{ $profile->working_years }}</td>
                                </tr>
                              
                                <tr>
                                    <td>【勤務先】</td>
                                    <td class="text-left">{{ $profile->employee }}</td>
                                </tr>
                                
                                <tr>
                                    <td>【業種】</td>
                                    <td class="text-left">{{ $industry }}</td>
                                </tr>
                                <tr>
                                    <td>【職種】</td>
                                    <td class="text-left">{{ $job_category }}</td>
                                </tr>
                                <tr>
                                    <td>【海外経験】</td>
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
                                    <td>【転職経験】</td>
                                    <td class="text-left">
                                        @if ($profile->career_change == 0)
                                            <p>なし</p>
                                        @else
                                            <p>あり</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>【既婚／未婚】</td>
                                    <td class="text-left">
                                        @if ($profile->marriage_status == 0)
                                            <p>既婚</p>
                                        @else
                                            <p>未婚</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>【子供の有無】</td>
                                    <td class="text-left">
                                        @if ($profile->child_status == 0)
                                            <p>なし</p>
                                        @else
                                            <p>あり</p>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>【自己紹介】</td>
                                    <td class="text-left"> {{$profile->intro}}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
            
                    <div class = "pb-5 text-center">    
                    {{--　リクエストボタン --}}
                    @include('mentor_request.request_button')
                    </div>
                
                    <div class= "pb-5 text-center">    
                    {{--　承認ボタン --}}
                    @include('mentor_request.accept_button')
                    </div>
                </div> 
            </div>    
        </div>
    </section>
    @endif
@endsection