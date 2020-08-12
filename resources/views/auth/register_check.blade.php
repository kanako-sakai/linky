@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">仮会員登録確認</h2>
          		</div>
        	</div>

            <div class="offset-md-4 col-md-6">
                <form method="POST" action="{{ route('signup.post') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">メールアドレス</label>

                        <div class="col-md-6">
                            <span class="">{{$email}}</span>
                            <input type="hidden" name="email" value="{{$email}}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">パスワード</label>

                        <div class="col-md-6">
                            <span class="">{{$password_mask}}</span>
                            <input type="hidden" name="password" value="{{$password}}">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <span class="col-md-6 offset-4">
                           <input value= "前に戻る" onclick= "history.back();" type="button" class="btn btn-primary">
                        <span class="col-md-4">
                            <button type="submit" class="btn btn-primary">
                                仮登録
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>

@endsection