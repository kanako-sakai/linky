@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-10 heading-section text-center">
                	<h2 class="mb-4">公式メンター相談</h2>
                	<h5>価格：1回45分 2,500円(税込)</h5>
            		<p>公式メンターに相談されたい場合は、以下のリクエストフォームをご入力ください。フォーム入力後にお支払い画面に移りますので、お支払いを完了させてください。ご入金が確認できない場合には、キャンセル扱いとさせていただきます。</p>

          		</div>
        	</div>
        	
        	{{-- ユーザ一覧 --}}
            <div class="row m-1">
                @if(count($users)>0)
                @foreach ($users as $user)
                <div class="coach-wrap d-sm-flex">
                    <div class="img coach-img">
                    	@if(isset($user->picture)) <img src ="{{ $user->picture }}" class="official_icon"></div> 
                    	@else<p class="no_icon"></p></div>@endif
           
                	<div class="text pl-md-5">
                         <h2 class="official-name">{{ $user -> name }}</h2>
                        <p>{!! nl2br(e($user->profile->intro)) !!}</p>
                        <p class="text-center">{!! link_to_route('official.form1', 'リクエストを出す', ['id' => $user->id], ['class' => 'btn btn-primary']) !!}</p>
                    </div>
                </div>
                @endforeach
                @endif
            
            </div> 
        </div>
</section> 

<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="procedure">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-12 col-lg-12 pl-lg-5 py-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
				          <div class="col-md-12 heading-section ftco-animate">
				          	<span class="subheading">ご利用されたい方へ</span>
					            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">ご利用方法の流れ</h2>
				          		
				          		<div class="row m-2">
						            <p><i class="far fa-clipboard fa-3x fa-pull-left"></i>お話されたいメンターのプロフィール下にあるボタンをクリックし、リクエストフォームをご提出ください。リクエストフォームを出された際には、必ずその場でお支払いを完了してください。</p>
						            <p><i class="far fa-calendar-alt fa-3x fa-pull-left"></i>ご入金が確認できましたら、公式メンターからrolemy上でダイレクトメッセージが届きますので日程調整を行ってください。</p>
						            <p><i class="fas fa-video fa-3x fa-pull-left"></i> 当日はマイページの「公式相談」タブにあるスケジュールに記載されているZoomのリンクから入っていただき、メンターとお話しください。</p>
			            		</div>
				            	
				            	<div class="row m-2">
				            		<p>※ご利用される場合は、<a href="/precaution" target="_blank" rel="noopener noreferrer">注意事項</a>をご確認ください。</p>
						            <p>※メンターのスケジュール上、リクエストを頂いてから実際にメンタリングセッションを行っていただくまでにお時間を要することがございますがご了承ください。</p>
						            <p>※振替される場合は、遅くとも7日前までにメンターに直接ご連絡ください。7日前を過ぎますと振替できませんのでご注意ください。</p>
						            <p>※メンタリングが終わりますと、メンターには連絡できなくなりますのでご了承ください。</p>
						        </div>    
				           
				          </div>
			        	</div>
		        	</div>
	        	</div>
       		 </div>
    	</div>
    </section>
@endsection    