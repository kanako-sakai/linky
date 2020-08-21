@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">仮会員登録確認</h2>
          		</div>
        	</div>

            <div class="col-md-12 m-5">
                <table class="confirm table-bordered">
                    <tr>
                        <th>メールアドレス</th>
                        <td>{{$email}}</td>
                    </tr>  
                    <tr>
                        <th>パスワード</th>
                        <td>{{$password_mask}}</td>
                    </tr>
                        
                </table>
            </div>
            <form method="POST" action="{{ route('signup.post') }}">
                    @csrf
                    <input type="hidden" name="email" value="{{$email}}">
                    <input type="hidden" name="password" value="{{$password}}">
                    <div class="form-group row mb-0">
                        <span class="col-md-6 offset-4">
                           <input value= "前に戻る" onclick= "history.back();" type="button" class="btn btn-light">
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