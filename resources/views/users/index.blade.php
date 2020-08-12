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
            <div class="row p-5 bg-light">
            
                {!! Form::open(['route' => 'users.index', 'method' => 'get']) !!}
                    <div class="row">
                        <h4>キーワードで探す</h4>
                    </div>
                    <div class="form-group">
                        {!! Form::text('intro', empty($s_intro) ? null : $s_intro, ['class' => 'form-control']) !!}
                     </div>
                    
                    <div class="row">
                        <h4>業種で探す</h4>
                    </div>
                    <div class="form-group">
                        {!! Form::select('industry_id', $industries->prepend('指定なし', ''), empty($s_industry) ? null : $s_industry, ['class' => 'form-control']) !!}
                     </div>
                    
                    <div class="row">
                        <h4>職種で探す</h4>
                    </div>
                    <div class="form-group">
                        {!! Form::select('job_category_id', $job_categories->prepend('指定なし', ''), empty($s_jobcategory) ? null : $s_jobcategory, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="row">
                        <h4>その他の項目から探す</h4>
                    </div>
                    
                    <div class="form-group">
                   
                    <h5>{!! Form::checkbox('can_mentor', 1, empty($s_can_mentor) ? null : $s_can_mentor, ['class' => 'field']) !!}
                        {!! Form::label('can_mentor', '積極的に相談に乗れる方') !!}
                
                        {!! Form::checkbox('expat', 1, empty($s_expat) ? null : $s_expat, ['class' => 'field']) !!}
                        {!! Form::label('expat', '海外駐在・トレーニー') !!} 
        
                        {!! Form::checkbox('mba', 1, empty($s_mba) ? null : $s_mba, ['class' => 'field']) !!}
                        {!! Form::label('mba', 'MBA留学') !!}
                
                        {!! Form::checkbox('other_study_abroad', 1, empty($s_otherstudyabroad) ? null : $s_otherstudyabroad, ['class' => 'field']) !!}
                        {!! Form::label('other_study_abroad', 'その他留学') !!}
                        
                        {!! Form::checkbox('returnee', 1, empty($s_returnee) ? null : $s_returnee, ['class' => 'field']) !!}
                        {!! Form::label('returnee', '帰国子女') !!} 
              
                        {!! Form::checkbox('career_change', 1, empty($s_careerchange) ? null : $s_careerchange, ['class' => 'field']) !!}
                        {!! Form::label('career_change', '転職') !!} 
            
                        {!! Form::checkbox('marriage_status', 1, empty($s_marriage) ? null : $s_marriage, ['class' => 'field']) !!}
                        {!! Form::label('marriage_status', '結婚') !!} 
                 
                        {!! Form::checkbox('child_status', 1, empty($s_child) ? null : $s_child, ['class' => 'field']) !!}
                        {!! Form::label('child_status', '育児') !!} 
                    </h5>    
                    </div>
                    
                    <div class="form-group text-center">
                    {!! Form::submit('検索する', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                {!! Form::close() !!}
                    </div>
            </div>
            
            {{-- ユーザ一覧 --}}
            <div class="row">
                <div class="text-center">
                    <h3>相談相手リスト</h3>
                </div>
            
                <div class="container">
                    <!--検索ボタンが押された時に表示-->
                    @if(!empty($users))
                        <ul class="list-unstyled">
                            @foreach ($users as $user)
                                <!--$user->profile()->first()-->
                                <li class="media">
                                    {{-- アイコン --}}
                                    @if(isset($user->picture))
                                    	<img src = "{{ $user->picture }}" width=100 height=100>
                                    @else
                                    	<img src="{{ Gravatar::get($user->email, ['size' => 100]) }}" alt=""> 
                                    @endif
                                    <div class="media-body">
                                        <div class = col-md-12>
                                            {{-- ユーザ詳細ページへのリンク --}}
                                            <p>{!! link_to_route('users.show', $user->name, ['user' => $user->id]) !!}</p>
                                            <p>【業種】{{ $user->profile->industry()->first()->name }}</p>
                                            <p>【職種】{{ $user->profile->job_category()->first()->name }}</p>
                                            <p class="intro">【自己紹介】{{ $user->profile->intro }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach    
                        </ul>
                        {{-- ページネーションのリンク --}}
                        {{ $users->links() }}
                    </div>
                    @endif
                </div>
            </div> 
        </div>
</section>        
@endsection    