@extends('layouts.sub')

@section('content')
    {{-- 検索　--}}
    <div class="row">
        <h2>相談相手を検索する</h3>
    </div>
    
    {!! Form::open(['route' => 'search', 'method' => 'get']) !!}
        <div class="row">
            <h3>業種で探す
        </div>
        <div class="form-group">
            {!! Form::select('industry_id', $industries, ['class' => 'form-control']) !!}
         </div>
        
        <div class="row">
            <h3>職種で探す
        </div>
        <div class="form-group">
            {!! Form::select('job_category_id', $job_categories, ['class' => 'form-control']) !!}
            {!! Form::label('job_category_id', '職種') !!}
        </div>
        
        <div class="row">
            <h3>相談したい内容で探す
        </div>
        <div class="form-group">
            {!! Form::checkbox('expat', 1, null, ['class' => 'field']) !!}
            {!! Form::label('1', '海外駐在・トレーニー') !!}
        </div>
        
        <div class="form-group">
            {!! Form::checkbox('mba', 1, null, ['class' => 'field']) !!}
            {!! Form::label('1', 'MBA留学') !!}
        </div>
        
        <div class="form-group">
            {!! Form::checkbox('other_study_abroad', 1, null, ['class' => 'field']) !!}
            {!! Form::label('1', 'その他留学') !!}
        </div>
        
        <div class="form-group">
        {!! Form::checkbox('returnee', 1, null, ['class' => 'field']) !!}
        {!! Form::label('1', '帰国子女') !!} 
        </div>
        
        <div class="form-group">
        {!! Form::checkbox('career_change', 1, null, ['class' => 'field']) !!}
        {!! Form::label('1', '転職') !!} 
        </div>
        
        <div class="form-group">
        {!! Form::checkbox('marriage_status', 1, null, ['class' => 'field']) !!}
        {!! Form::label('1', '結婚とキャリア) !!} 
        </div>
        
        <div class="form-group">
        {!! Form::checkbox('child_status', 1, null, ['class' => 'field']) !!}
        {!! Form::label('1', '育児とキャリア') !!} 
        </div>
        
        {!! Form::submit('検索する', ['class' => 'btn py-3 px-4 btn-primary']) !!}
            {!! Form::close() !!}
        
    {{-- ユーザ一覧 --}}
    <div class="row">
        <h3>相談相手リスト</h3>
    </div>
    
    <div class="container">
        <!--検索ボタンが押された時に表示-->
        @if(!empty($data))
            <ul class="list-unstyled">
                @foreach ($data as $user)
                    <li class="media">
                        {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                        <img class="mr-2 rounded" src="{{ Gravatar::get($user->email, ['size' => 50]) }}" alt="">
                        <div class="media-body">
                            <div>
                                {{ $user->name }}
                            </div>
                            <div>
                                {{-- ユーザ詳細ページへのリンク --}}
                                <p>{!! link_to_route('users.show', 'View profile', ['user' => $user->id]) !!}</p>
                            </div>
                        </div>
                    </li>
                @endforeach    
            </ul>
            {{-- ページネーションのリンク --}}
            {{ $users->links() }}
        @endif
    </div>
@endsection    