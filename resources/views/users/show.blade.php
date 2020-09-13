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

                <div class="col-md-12">
                    @include('users.navtabs')
                </div>    
                
                <hr class ="cp_hr05" />
                
                <div class="text-center">
                    <div class="row pb-2">
                        <div class="offset-3 offset-md-9">
                        <a href="{{ route('users.edit', ['user' => $user]) }}" class="btn btn-primary">
                        <i class="fas fa-pen"></i>　プロフィールを編集</a>
                        </div>
                    </div>
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
            	
                <div class="text-center">
                   @include('users.icon')
                </div>	
                
                <hr class ="cp_hr05" />
                
                <div class= "pb-5 text-center">
                        <h3>プロフィール</h3>
                
                @if($profile->exists())

                    <div class="col-md-12">
                        <table class="profile table-bordered">
                            <tbody>
                                <tr>
                                    <th class="text-left"><i class="fas fa-university fa-lg"></i> 最終学歴</th>
                                    <td class="text-left">{{ $profile->education }}</td>
                                </tr>
                                <tr>
                                    <th class="text-left"><i class="fas fa-briefcase fa-lg"></i> 社会人歴</th>
                                    <td class="text-left">{{ $profile->working_years }}　年目</td>
                                </tr>
                                
                                @if($profile->employer_display==1)
                                @else
                                <tr>
                                    <th class="text-left"><i class="fas fa-building fa-lg"></i> 勤務先</th>
                                    <td class="text-left">{{ $profile->employee }} 
                                </tr>
                                @endif
                                <tr>
                                    <th class="text-left"><i class="fas fa-certificate fa-lg"></i> 業種</th>
                                    <td class="text-left">{{ $industry }}</td>
                                </tr>
                                <tr>
                                    <th class="text-left"><i class="fas fa-bullseye fa-lg"></i> 職種</th>
                                    <td class="text-left">{{ $job_category }}</td>
                                </tr>
                                <tr>
                                    <th class="text-left"><i class="fas fa-plane fa-lg"></i> 海外経験</th>
                                    <td class="text-left">
                                        @if ($profile->expat == 1)
                                            <span class=oversea>海外駐在・トレーニー</span>
                                        @endif    
                                        @if ($profile->mba == 1)
                                            <span class=oversea>MBA留学</span>
                                        @endif
                                        @if ($profile->other_study_abroad == 1)
                                            <span class=oversea>その他海外留学</span>
                                        @endif
                                        @if ($profile->returnee == 1)
                                            <span class=oversea>帰国子女</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-left"><i class="fas fa-exchange-alt fa-lg"></i> 転職経験</th>
                                    <td class="text-left">@if ($profile->career_change == 0) なし
                                                            @else あり
                                                            @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-left"><i class="fas fa-heart fa-lg"></i> 結婚</th>
                                    <td class="text-left">
                                        @if ($profile->marriage_status == 0)
                                            未婚
                                        @else
                                            既婚
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-left"><i class="fas fa-baby fa-lg"></i>子供の有無</th>
                                    <td class="text-left">
                                        @if ($profile->child_status == 0)
                                            なし
                                        @else
                                            あり
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-left" valign="top"><i class="fas fa-bullhorn fa-lg"></i> 自己紹介</th>
                                    <td class="text-left"> {!! nl2br(e($profile->intro)) !!}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>    
                        
                    @endif
                        
                    <hr class ="cp_hr05" />    
            
                    <div class = "col-md-6 offset-md-3 pb-5 text-center">    
                    {{--　リクエストボタン --}}
                    @include('mentor_request.request_button')
                    </div>
                
                    <!--<div class= "col-md-6 offset-md-3 pb-5 text-center">    -->
                    <!--{{--　承認ボタン --}}-->
                    <!--@include('mentor_request.accept_button')-->
                    <!--</div>-->
                </div> 
            </div>    
        </div>
    </section>
    @endif
@endsection