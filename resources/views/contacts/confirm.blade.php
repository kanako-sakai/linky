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
                <div class="col-md-12 text-center">
                    <p>入力内容にお間違いがないか確認の上、「送信」ボタンを押してください。</p>
                    <p>再度ご入力される場合は、「戻る」ボタンを押してください。</p>
                </div>
                <div class="col-md-12 m-5">
                    <table class="contact-confirm table-bordered">
                        <tr><th>お名前</th><td>{{$contact->name}}</td></tr>
                        <tr><th>メールアドレス</th><td>{{$contact->email}}</td></tr>
                        <tr><th>件名</th><td>{{$contact->title}}</td></tr>
                        <tr><th>お問い合わせ内容</th><td>{{$contact->body}}</td></tr>
                    </table>    
                    
                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf
                
                        <input type="hidden" name="name" value="{{$contact->name}}">
                        <input type="hidden" name="email" value="{{$contact->email}}">
                        <input type="hidden" name="title" value="{{$contact->title}}">
                        <input type="hidden" name="body" value="{{$contact->body}}">
                </div>
                
                <div class="col-md-12">
                    <span class="col-md-6 offset-5">
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
</section>
@endsection
 
 
                