@extends('layouts.sub')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $user->name }}</h3>
                </div>
                <div class="card-body">
                    {{-- ユーザのメールアドレスをもとにGravatarを取得して表示 --}}
                    <img class="rounded img-fluid" src="{{ Gravatar::get($user->email, ['size' => 500]) }}" alt="">
                </div>
            </div>
        </aside>
        
        <div class="col-sm-9">
            <h2>プロフィール</h2>
                <table>
                    <tbody>
                        <tr>
                            <td>最終学歴</td>
                            <td class="text-left">$user->education</td>
                        </tr>
                        <tr>
                            <td>社会人歴</td>
                            <td class="text-left">$user->working_years</td>
                        </tr>
                        
                        {{-- 表示させたい人のみという条件をつける --}}
                        <tr>
                            <td>勤務先</td>
                            <td class="text-left">employee</td>
                        </tr>
                        
                        <tr>
                            <td>業種</td>
                            <td class="text-left">industry_id</td>
                        </tr>
                        <tr>
                            <td>職種</td>
                            <td class="text-left">job_category_id</td>
                        </tr>
                        <tr>
                            <td>海外経験</td>
                            <td class="text-left">#</td>
                        </tr>
                        <tr>
                            <td>転職経験</td>
                            <td class="text-left">career_change</td>
                        </tr>
                        <tr>
                            <td>既婚／未婚</td>
                            <td class="text-left">marriage_status</td>
                        </tr>
                        <tr>
                            <td>子供の有無</td>
                            <td class="text-left">child_status</td>
                        </tr>
                    </tbody>
                </table>
                
                 <div class="row">
                    <div class="mb-5 mt-5 col-sm-6 offset-sm-3 pt-5">
                        {!! Form::open(['route' => 'signup.post']) !!}
                            <div class="form-group">
                                {!! Form::text('message', null, ['class' => 'form-control', 'placeholder' => 'リクエストのメッセージをご記入ください。']) !!}
                            </div>
                        {!! Form::submit('リクエストを送信', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                        {!! Form::close() !!}    

                    </div>
                </div>
@endsection