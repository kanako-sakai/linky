@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">退会のお手続き</h2>
                	<h3>ご利用ありがとうございました。</h3>
          		</div>
    	    </div>
    	</div>   
        <div class="container">
            <div class="row justify-content-center pb-5">
                <div class="card">
                    <div class="card-header">    
                        <p>メールアドレス</p>
                        <h4>{{ $user->email }}</h4>
                        
                        <p>お名前</p>
                        <h4>{{ $user->name }} 様</h4>
                    </div>    
                    
                    <div class="card-body">
                    <h4>お手数ですが、退会の理由をお聞かせください。</h4>        
                    
                    <div class = "col-sm-12">
                    {!! Form::open(['route' => ['cancel_confirmed', $user->id]]) !!}
                         <div class="form-group">
                            {!! Form::radio('cancel_reason_id', 1, false, ['class' => 'field']) !!}
                            {!! Form::label('1', '自分のキャリアに近い相談相手(オフィシャルメンター以外)を見つけられなかった') !!}<br>
                            {!! Form::radio('career_reason_id', 2, false, ['class' => 'field']) !!}
                            {!! Form::label('2', '自分とは違うキャリアの人に相談したかったが、いい相談相手(オフィシャルメンター以外)が見つからなかった') !!}
                        </div>    
                    </div>
                    <div style="text-align: center">
                        {!! Form::submit('退会する', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                            
                        {!! Form::close() !!}
                    </div>
                </div>    
            </div>
        </div>
</section>        

@endsection    