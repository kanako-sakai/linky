@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">お問い合わせ内容確認</h2>
          		</div>
        	</div>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">お問い合わせ内容確認</div>
                            <div class="panel-body p-3">
                                <p>入力内容にお間違いがないか確認の上、「送信」ボタンを押してください。</p>
                                <p>再度ご入力される場合は、「戻る」ボタンを押してください。</p>
                            </div>    
                                <div class="card-body">
                                    <form method="POST" action="{{ route('contact.send') }}">
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-left">【お名前】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$contact->name}}</span>
                                                <input type="hidden" name="name" value="{{$contact->name}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-left">【メールアドレス】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$contact->email}}</span>
                                                <input type="hidden" name="email" value="{{$contact->email}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="title" class="col-md-4 col-form-label text-md-left">【件　名】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$contact->title}}</span>
                                                <input type="hidden" name="title" value="{{$contact->title}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label for="body" class="col-md-4 col-form-label text-md-left">【お問い合わせ内容】</label>
                                            <div class="col-md-6">
                                                <span class="">{{$contact->body}}</span>
                                                <input type="hidden" name="body" value="{{$contact->body}}">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <span class="col-md-6 offset-4">
                                               <input value= "前に戻る" onclick= "history.back();" type="button" class="btn btn-light">
                                            </span>   
                                            <span class="col-md-4">
                                                <button type="submit" name="action" value="submit" class="btn btn-primary">
                                                    送信する
                                                </button>
                                            </span>    
                                        </div>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
        </div>
</section>
@endsection
 
 
                