@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
        	<div class="container">
        		<div class="row justify-content-center pb-5">
                	<div class="col-md-8 heading-section text-center">
                    	<h2 class="mb-4">グループ相談会お支払い完了</h2>
              		</div>
            	</div>
            	
                <div class="col-md-12 text-center">
                    <p>グループ相談会の参加費のお支払いが完了しました。</p>
                    <p>入金が確認できましたら、参加リンクをメールにてお送りいたします。</p>
                    <p>2-3営業日しても参加リンクが送られてこない場合は、お手数ですがrolemy.info@gmail.comまでお問い合わせください。</p>
                    
                    {!! link_to_route('users.show', 'マイページへ', ['user' => Auth::id()], ['class'=>'btn btn-primary']) !!}

                </div>
            </div>
</section>
@endsection