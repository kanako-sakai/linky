@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
        	<div class="container">
        		<div class="row justify-content-center pb-5">
                	<div class="col-md-8 heading-section text-center">
                    	<h2 class="mb-4"></h2>
              		</div>
            	</div>
            	
                <div class="col-md-12">
                    <p>大変恐縮ですが、{{$mentor->name}}メンターの予約枠が全て埋まっております。お時間を空けて再度ご確認ください。</p>
                    <p>他の公式メンターの枠が空いている可能性がございますので、そちらも合わせてご確認ください。</p>
                </div>
            </div>
</section>
@endsection