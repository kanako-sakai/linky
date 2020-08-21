@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
        	<div class="container">
        		<div class="row justify-content-center pb-5">
                	<div class="col-md-8 heading-section text-center">
                    	<h2 class="mb-4">本会員登録完了</h2>
              		</div>
            	</div>
            	
                <div class="col-md-12 text-center">
                    <p>本会員登録が完了しました。</p>
                    {!! link_to_route('users.show', 'マイページへ', ['user' => Auth::id()], ['class'=>'btn btn-primary']) !!}

                </div>
            </div>
</section>
@endsection