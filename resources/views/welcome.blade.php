@extends('layouts.app_2')

@section('content')
  <section class="welcome">
    <div class="container-fluid">
    	<div class="hero text offset-md-2 col-md-4">
         <span class="subhead">Get inspired, Move forward</span><br>
          <h1 class="catch"><span>女性のキャリアを<br>より自由に<br>より前向きに</span></h1>
           <p>先輩女性プロフェッショナルや公式女性メンターに相談して、<br>キャリアの悩みを解決しましょう</p>
      </div>     
      <div class="col-md-6 offset-md-2">     
          @if (Auth::check())
          <p></p>
          @else
          <p class="text-center">
            {{-- ユーザ登録ページへのリンク --}}
            {!! link_to_route('signup.get', '今すぐ無料会員登録', [], ['class' => 'btn btn-primary px-5 py-3 mt-3']) !!}
          @endif
          </p>
      </div>     
    </div>
  </section>
		
    <section class="ftco-section ftco-services ftco-no-pt ftco-no-pb">
      <div class="container">
        <div class="row no-gutters services-section mb-5">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><img src="/images/iconmonstr-friend-4-240.png" width:"70", height="70" alt="friend"></div>
              <div class="media-body">
                <h3 class="heading mb-3">相談相手を見つける</h3>
                <p>相談したい内容や経歴で相談したい相手を見つけ、相談リクエストを出しましょう。</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2 text-center d-block">
              <div class="icon"><img src="/images/iconmonstr-customer-8-240.png" width:"70", height="70" alt="customer"></div>
              <div class="media-body">
                <h3 class="heading mb-3">公式メンターに相談</h3>
                <p>公式メンターとの1対1のオンライン面談で悩みを相談しましょう。</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2 text-center d-block">
              <div class="icon"><img src="/images/iconmonstr-idea-14-240.png" width:"70", height="70" alt="idea"></div>
              <div class="media-body">
                <h3 class="heading mb-3">グループ相談会</h3>
                <p>テーマごとのオンライン座談会で悩みを解決しましょう。</p>
              </div>
            </div>    
          </div>
        </div>
      </div>  
    </section>
    
    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
  				<div class="py-md-5">
      				<div class="row justify-content-start pb-3">
  			          <div class="col-12 heading-section ftco-animate">
  			          	<span class="subheading">About Us</span>
  			            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Mission</h2>
    			            <p>「身近に女性のロールモデルがいない」</p>
    			            <p>「女性ならではのキャリアの悩みを相談できる人がいない」</p>
    			            <p>　</p>
    			            <p>プロフェッショナルとして頑張る女性の多くが抱えている課題。</p>
    			            <p>自分だけの問題と思い抱え込んでしまうことが多いですが、その多くがその他多くの女性に共通するものです。人生の少し前を歩く先輩に話すことで解決されることも多いのです。</p>
    			          　<p>キャリアにおける様々な悩みを相談したり、中長期のキャリアについて相談する上で、社内のメンターを持つことに加え社外にもメンターを持つことが非常に重要です。ご自身のいる会社の人とは全く違うモノの見方をする人と話すことでご自身の可能性がここまで広かったのかと気づくことも多いでしょう。</p>
                      <p>このプラットフォームの目的は、そういった悩みを解決することに加え、ご自身の「ロールモデル」を作り上げていただくこと。</p>
                      <p>自分の目指したいと思うロールモデルは必ずしもある一人の個人を指すものではありません。多数の人のいい所を積み上げて出来上がったご自身の中での「理想像」に近いと考えております。様々なメンターと話したり、メンバー間で交流することで、ご自身の「ロールモデル」を確立していただければ幸いです。</p>
  			            </div>
              </div>
            </div>
          </div>  
       </div>
    </section>   
	 
  	<section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
      	<div class="container">
      		<div class="row d-flex"> 
      		  <div class="py-md-5">
  	    				<div class="row justify-content-start pb-3">
			             <div class="col-12 heading-section ftco-animate">
			               <span class="subheading">運営者から皆さまへ</span>
			               <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Founder</h2>
    			            <h3>坂井華奈子 | Kanako Sakai</h3>
    			            <p>幼少期から高校までをヨーロッパで過ごした後、大学進学のため帰国。東京大学経済学部卒業。新卒で外資系戦略コンサルティングファームの東京支社に入社。主に製薬・消費財のプロジェクトに従事。1年目に社内結婚、3年目に長男を出産、2年間の育児休業を経て復職後、2019年よりハーバードビジネススクールにMBAに夫と共に留学中。女性が家族との時間を楽しみながらも、肩身の狭い思いをせずにより活き活きと働ける社会を実現したいというパッションから本プラットフォームの運営を開始。</p>
    			            <p>女性同士で助けあってキャリアを追求していきたいと思う方はもちろん、少し先を行く先輩女性プロフェッショナルの方々も若手女性をサポートするため、そして女性が活躍しにくい社会を変えるために是非プラットフォームにご参加いただけますと幸いです。</p>
  			            </div>
                </div>
  		        </div>
          </div>
        </div>	
    </section>
    
    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
      	<div class="container">
      		<div class="row d-flex"> 
      		  <div class="py-md-5">
  	    				<div class="row justify-content-start pb-3">
			             <div class="col-12 heading-section ftco-animate">
			               <span class="subheading">ご利用前にお読みください</span>
			               <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Q&A</h2>
			               <div class="card" style="mb-3">
			                 <div class="card-header">
			                   <h5 class="card-title">Q. 会員登録は有料ですか？</h5>
			                 </div>
			                 <div class="card-body">
			                   会員登録は無料です。また登録会員の中から相談相手を見つけ、お話しされる場合は全て無料でご利用いただくことができます。公式メンターとの面談、グループ座談会のみ有料となります。
			                 </div>
			               </div>
			               <div class="card">
			                 <div class="card-header">
			                   <h5 class="card-title">Q. どのような人に相談できるのですか？</h5>
			                 </div>
			                 <div class="card-body">
			                   ご自身がお話しされたいと思う方を業種や職種、子育ての経験など様々な項目で検索し、無料でお話ししていただくことが可能です。また公式メンターとして、MBAホルダーを含めた様々なキャリアを積んだ女性プロフェッショナルが皆様のご相談に乗らせていただきます(こちらは有料となります)。
			                 </div>
			               </div>
			               <div class="card">
			                 <div class="card-header">
			                   <h5 class="card-title">Q. 相談はどのような形式になりますか？</h5>
			                 </div>
			                 <div class="card-body">
			                   公式メンターとの面談はZoomを使用したオンラインとなります。会員登録者同士でお話しされる場合は、ご自由に決めていただき構いませんが、基本的にはオンラインでの面談を推奨しております。
			                 </div>
			               </div>
			               <div class="card">
			                 <div class="card-header">
			                   <h5 class="card-title">Q. 誰かの相談に乗るには何か資格などが必要ですか？</h5>
			                 </div>
			                 <div class="card-body">
			                   いいえ、全く必要ございません。ご自身のご経験が他の方の役に立つと思われる場合は、積極的に他の方のご相談に乗っていただけますと幸いです。また多くの方の相談に乗っていただいた場合は、公式メンターとしてお声がけさせていただく可能性もございます。
			                 </div>
			               </div>
			               <div class="card">
			                 <div class="card-header">
			                   <h5 class="card-title">Q. 男性でも利用できますか？</h5>
			                 </div>
			                 <div class="card-body">
			                   大変申し訳ございませんが、こちらは女性限定のサービスです。キャリアに悩む女性のご友人やパートナーの方に是非お勧めいただければ幸いです。
			                 </div>
			               </div>
			               <div class="card">
			                 <div class="card-header">
			                   <h5 class="card-title">Q. 退会したい場合はどうしたらいいですか？</h5>
			                 </div>
			                 <div class="card-body">
			                   お問い合わせフォームより退会の旨をお伝えください。
			                 </div>
			               </div>
			             </div>
                </div>
  		        </div>
          </div>
        </div>	
    </section>
    
@endsection