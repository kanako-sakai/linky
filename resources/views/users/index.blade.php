@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">相談相手を探す</h2>
          		</div>
        	</div>
        	
            {{-- 検索　--}}
            <div class="col-md-10 p-5 search-box">
            
                {!! Form::open(['route' => 'users.index', 'method' => 'get']) !!}
                    <div class="row">
                        <h4 class="title_border_left">キーワードで探す</h4>
                    </div>
                    <div class="form-group">
                        {!! Form::text('intro', empty($s_intro) ? null : $s_intro, ['class' => 'form-control']) !!}
                     </div>
                    
                    <div class="row">
                        <h4 class="title_border_left" >業種で探す</h4>
                    </div>
                    <div class="form-group">
                        {!! Form::select('industry_id', $industries->prepend('指定なし', ''), empty($s_industry) ? null : $s_industry, ['class' => 'form-control']) !!}
                     </div>
                    
                    <div class="row">
                        <h4 class="title_border_left">職種で探す</h4>
                    </div>
                    <div class="form-group">
                        {!! Form::select('job_category_id', $job_categories->prepend('指定なし', ''), empty($s_jobcategory) ? null : $s_jobcategory, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="row">
                        <h4 class="title_border_left">社会人歴で探す</h4>
                    </div>
                    <div class="form-group">
                        {!! Form::select('working_years', $years, empty($s_working_years) ? null : $s_working_years, ['class' => 'form-control']) !!}
                    </div>    
      
                    <div class="row">
                        <h4 class="title_border_left">その他の項目から探す</h4>
                    </div>
                    
                    <div class="form-group clearfix">
                        {!! Form::checkbox('can_mentor', 1, empty($s_can_mentor) ? null : $s_can_mentor, ['class' => 'search', 'id'=>'can_mentor']) !!}
                        {!! Form::label('can_mentor', '積極的に相談に乗れる方', ['class' => 'label']) !!}
                
                        {!! Form::checkbox('expat', 1, empty($s_expat) ? null : $s_expat, ['class' => 'search', 'id'=>'expat']) !!}
                        {!! Form::label('expat', '海外駐在・トレーニー', ['class' => 'label']) !!} 
        
                        {!! Form::checkbox('mba', 1, empty($s_mba) ? null : $s_mba, ['class' => 'search', 'id'=>'mba']) !!}
                        {!! Form::label('mba', 'MBA留学',['class' => 'label']) !!}
                
                        {!! Form::checkbox('other_study_abroad', 1, empty($s_otherstudyabroad) ? null : $s_otherstudyabroad, ['class' => 'search', 'id'=>'other_study_abroad']) !!}
                        {!! Form::label('other_study_abroad', 'その他留学',['class' => 'label']) !!}
                        
                        {!! Form::checkbox('returnee', 1, empty($s_returnee) ? null : $s_returnee, ['class' => 'search', 'id'=>'returnee']) !!}
                        {!! Form::label('returnee', '帰国子女',['class' => 'label']) !!} 
              
                        {!! Form::checkbox('career_change', 1, empty($s_careerchange) ? null : $s_careerchange, ['class' => 'search', 'id'=>'career_change']) !!}
                        {!! Form::label('career_change', '転職',['class' => 'label']) !!} 
            
                        {!! Form::checkbox('marriage_status', 1, empty($s_marriage) ? null : $s_marriage, ['class' => 'search', 'id'=>'marriage_status']) !!}
                        {!! Form::label('marriage_status', '結婚',['class' => 'label']) !!} 
                 
                        {!! Form::checkbox('child_status', 1, empty($s_child) ? null : $s_child, ['class' => 'search', 'id'=>'child_status']) !!}
                        {!! Form::label('child_status', '育児',['class' => 'label']) !!} 
                    </div>
    
                    <div class="form-group text-center">
                        {!! Form::submit('検 索', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                {!! Form::close() !!}
                    </div>
            </div>
            
            {{-- ユーザ一覧 --}}
            <div class="col-md-10 member-list">
                <!--検索ボタンが押された時に表示-->
                @if(!empty($users))
                    <table class="userlist">
                        @foreach ($users as $user)
                            <tr>
                                <th>
                                    {{-- アイコン --}}
                                    @if(isset($user->picture))
                                    	<img src = "{{ $user->picture }}" class="profile_icon">
                                    @else
                                    	<p class="no_icon"></p> 
                                    @endif
                                </th>    
                                <td>
                                    {{-- ユーザ詳細ページへのリンク --}}
                                    @if($user->role != 0)
                                        {!! link_to_route('offical_mentors', $user->name) !!}
                                        <span class ="official_icon">
                                        <i class="fas fa-check-circle"></i>
                                        公式メンター</span>
                                        @else
                                        {!! link_to_route('users.show', $user->name, ['user' => $user->id]) !!} 
                                        @endif
                                        
                                         @if(Auth::user()->role == 1 && $user->role == 0)
                                        <span class="staff_auth_button">
                                            {{-- スタッフ権限を与えるボタン --}}
                                            {!! Form::open(['route' => ['staff_auth', $user->id], 'method' => 'put']) !!}
                                                {!! Form::submit('公式メンターにする', ['class' => "btn btn-primary"]) !!}
                                            {!! Form::close() !!}
                                        </span>
                                        @endif
                                    <p>【業種】{{ $user->profile->industry()->first()->name }}</p>
                                    <p>【職種】{{ $user->profile->job_category()->first()->name }}</p>
                                    @if($user->role == 0)
                                    <div class="intro">
                                        <p class="intro">【自己紹介】{{ $user->profile->intro }}</p>
                                    </div>    
                                    @endif
                                   
                                </td>
                            <tr>    
                            @endforeach
                        </table>

                        {{-- ページネーションのリンク --}}
                        {{ $users->links() }}

                    </div>
                    @endif
                </div>
            </div> 
        </div>
</section>        
@endsection    