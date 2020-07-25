@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
        	<div class="col-md-8 heading-section text-center">
            	<h2 class="mb-4">プロフィール画像の編集</h2>
      		</div>
      	</div>	
      	
      	<form action="{{ action('UsersController@upload', $user->id) }}" method="post" enctype="multipart/form-data">
    <!-- アップロードフォームの作成 -->
            <input type="file" name="image">
            {{ csrf_field() }}
            <input type="submit" value="アップロード">
          </form>
                </div>
            </div>    
</section>

@endsection