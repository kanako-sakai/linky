@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">リクエスト内容確認</h2>
          		</div>
        	</div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">リクエスト内容確認</div></div>
                            <div class="panel-body">
                                <p>誤りがないことを確認のうえ送信ボタンをクリックしてください。</p>
                                
                                <div class="bg-light card-body">
                                    <form method="POST" action="{{ route('official.complete', $user->id) }}">
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">【ご希望のメンター】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$official_request->mentor->name }}</span>
                                                <input type="hidden" name="mentor_id" value="{{$official_request->mentor_id}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">【お名前】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$official_request->name}}</span>
                                                <input type="hidden" name="name" value="{{$official_request->name}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">【メールアドレス】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$official_request->email}}</span>
                                                <input type="hidden" name="email" value="{{$official_request->email}}">
                                            </div>
                                        </div>
                                        
                                                <input type="hidden" name="plan" value="{{$official_request->plan}}">

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">【メンタリングの目的】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$official_request->goal}}</span>
                                                <input type="hidden" name="goal" value="{{$official_request->goal}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">【お話しされたい内容】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$official_request->questions}}</span>
                                                <input type="hidden" name="questions" value="{{$official_request->questions}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">【ご希望時間】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$official_request->dates}}</span>
                                                <input type="hidden" name="dates" value="{{$official_request->dates}}">
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" name="precaution" value="{{$official_request->precaution}}">
                                      
                                        
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" name="action" value="submit" class="btn btn-primary">
                                                お支払いに進む
                                            </button>
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
</section>
@endsection
 
 
                