@extends('layouts.app_2')

@section('content')
    {{-- 検索　--}}
    <div class="row">
        <div class="text-center">
            <h2>相談相手を検索する</h3>
        </div>
    
        {!! Form::open(['route' => 'users.index', 'method' => 'get']) !!}
            <div class="row">
                <h3>業種で探す
            </div>
            <div class="form-group">
                {!! Form::select('s_industry', $industries, ['class' => 'form-control']) !!}
             </div>
            
            <div class="row">
                <h3>職種で探す
            </div>
            <div class="form-group">
                {!! Form::select('job_category_id', $job_categories, ['class' => 'form-control']) !!}
            </div>
            
            <div class="row">
                <h3>経験から探す
            </div>
            <div class="form-group">
                {!! Form::hidden('expat', '0') !!}
                {!! Form::checkbox('expat', 1, null, ['class' => 'field']) !!}
                {!! Form::label('expat', '海外駐在・トレーニー') !!} 
            </div>
            
            <div class="form-group">
                {!! Form::hidden('mba', '0') !!}
                {!! Form::checkbox('mba', 1, null, ['class' => 'field']) !!}
                {!! Form::label('1', 'MBA留学') !!}
            </div>
            
            <div class="form-group">
                {!! Form::hidden('other_study_abroad', '0') !!}
                {!! Form::checkbox('other_study_abroad', 1, null, ['class' => 'field']) !!}
                {!! Form::label('1', 'その他留学') !!}
            </div>
            
            <div class="form-group">
                
                {!! Form::checkbox('returnee', 1, null, ['class' => 'field']) !!}
                {!! Form::label('1', '帰国子女') !!} 
            </div>
            
            <div class="form-group">
                {!! Form::hidden('returnee', '0') !!}
                {!! Form::checkbox('career_change', 1, null, ['class' => 'field']) !!}
                {!! Form::label('1', '転職') !!} 
            </div>
            
            <div class="form-group">
                {!! Form::hidden('marriage_status', '0') !!}
                {!! Form::checkbox('marriage_status', 1, null, ['class' => 'field']) !!}
                {!! Form::label('1', '結婚') !!} 
            </div>
            
            <div class="form-group">
                {!! Form::hidden('child_status', '0') !!}
                {!! Form::checkbox('child_status', 1, null, ['class' => 'field']) !!}
                {!! Form::label('1', '育児') !!} 
            </div>    
            {!! Form::submit('検索する', ['class' => 'btn py-3 px-4 btn-primary']) !!}
        {!! Form::close() !!}
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
                        <li class="media">
                            {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                            <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="">
                            <div class="media-body">
                                <div>
                                    {{ $user->name }}
                                </div>
                                <div>
                                    {{-- ユーザ詳細ページへのリンク --}}
                                    <p>{!! link_to_route('users.show', 'プロフィールを見る', ['user' => $user->id]) !!}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach    
                </ul>
                {{-- ページネーションのリンク --}}
                {{ $users->links() }}
            @endif
        </div>
    </div>    
@endsection    