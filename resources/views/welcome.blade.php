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
                <p>登録会員の中から相談したい内容や経歴で相談したい相手を見つけ、相談リクエストを出すことで新たなネットワークを構築。</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2 text-center d-block">
              <div class="icon"><img src="/images/iconmonstr-customer-8-240.png" width:"70", height="70" alt="customer"></div>
              <div class="media-body">
                <h3 class="heading mb-3">公式メンターに相談</h3>
                <p>様々な経歴を持つ公式メンターとの1対1のオンライン面談で悩みを相談。</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services services-2 text-center d-block">
              <div class="icon"><img src="/images/iconmonstr-idea-14-240.png" width:"70", height="70" alt="idea"></div>
              <div class="media-body">
                <h3 class="heading mb-3">グループ相談会</h3>
                <p>テーマに沿った少人数のオンライン相談会で悩みを解決。</p>
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
  			          <div class="col-12 heading-section ftco-animate text-center">
  			          	<span class="subheading">About Us</span>
  			            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Mission</h2>
  			           </div>
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
    <section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-8 heading-section text-center ftco-animate">
          	<span class="subheading">Our Team</span>
            <h2 class="mb-4">公式メンター</h2>
            <p>様々なご経験を持たれている方々にメンターとしてご協力いただいております。</p>
          </div>
        </div>
        <div class="row">
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/kanako_sakai.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Kanako Sakai</h3>
									<span class="position mb-4">Founder/<br>Official Mentor</span>
									<p class="top-intro">ハーバードMBA在籍中。2014年新卒で外資系戦略コンサルに就職。社会人3年目で出産し、キャリアと育児の両立に悩んだ自身の経験から、女性がより活躍できる社会作りに貢献したく本サービスを開始。</p>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/eiko_ichikawa.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Eiko Ichikawa</h3>
									<span class="position mb-4">Official Mentor</span>
									<p class="top-intro">新卒で外資系戦略コンサルに入社。文部科学省「トビタテ！留学JAPAN」プロジェクトを経て、スタンフォード大学にてMBA×教育学を学ぶ。現在はランサーズ株式会社にて教育×コミュニティ事業を運営。</p>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/shoko_hamada.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Shoko Hamada</h3>
									<span class="position mb-4">Official Mentor</span>
									<p class="top-intro">ハーバードMBA修了。MBA留学前はP＆Gシンガポール・アジア本社にて柔軟剤ブランドの経営戦略の策定、ブランドマーケティング等を担当。MBA修了後は外資系戦略コンサル米国オフィスに勤務。</p>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/marie_oshioka.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Marie Oshioka</h3>
									<span class="position mb-4">Official Mentor</span>
									<p class="top-intro">2009年経済産業省入省、特許法、商品先物取引法、民法等の改正プロジェクトに従事。社会人一年目に司法試験合格。ウォートンMBA修了。外資系戦略コンサルに勤務後、フィンテックベンチャーに入社。個人向けの新規サービス開発を担当し、事業開発部長を経た後、現在社長室長。一児の母。</p>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/kei_takatsuka.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Kei Takatsuka</h3>
									<span class="position mb-4">Official Mentor</span>
									<p class="top-intro">名古屋大学大学院にて脳神経科学を研究の後、新卒で外資系戦略コンサル(東京オフィス)に入社。後に米国ボストンオフィスに転籍。現在ハーバードMBA在籍中。</p>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/itoko_shibata.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Itoko Shibata</h3>
									<span class="position mb-4">Official Mentor</span>
									<p class="top-intro">新卒で外資系戦略コンサルに就職。新卒採用・内定者フォローなどにも当時から関わる。戦略があっても、実行する「人」がいなければ実現しないことを痛感し、人材育成に関心を持ち、現職へ2018年転職。</p>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/emiri_grimes.png);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Emiri Grimes</h3>
									<span class="position mb-4">Official Mentor</span>
									<p class="top-intro">京都大学薬学部卒業、薬剤師免許取得後、武田薬品の臨床開発部にて治験の管理に従事。スイスチューリヒ工科大学にて医学産業薬学のマスターを取得。帰国後、外資系戦略コンサルに勤務。二児の母。</p>
		            </div>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/aki_ko.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Aki Ko</h3>
									<span class="position mb-4">Official Mentor</span>
									<p class="top-intro">新卒でコンサルティング会社に入社し、その後スタンフォードビジネススクールに入学。在学中はテックスタートアップやデザインコンサルでインターン。2019年にMBA修了後、西海岸のVCに勤務。</p>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/kumiko_fukagawa.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Kumiko Fukagawa</h3>
									<span class="position mb-4">Official Mentor</span>
									<p class="top-intro">ソーシャルビジネスによる貧困問題の解決への関心から、ビジネススキルを習得するため外資系戦略コンサルに入社。本業に従事する傍ら、NPOを無償で支援するプロボノ活動にも多数参加。日本と欧州にて4年半の勤務を経て、2020年ハーバードMBAを取得。</p>
		            </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(/images/mari_tabata.jpg);"></div>
							</div>
							<div class="text d-flex align-items-center pt-3 text-center">
								<div>
									<h3 class="mb-2">Mari Tabata</h3>
									<span class="position mb-4">Official Mentor</span>
									<p class="top-intro">新卒でコンサルティング会社に入社。日系食品、消費財メーカーのM&A支援に従事。MBA留学前は国内の水産商社にて海外事業拡大を担当。現在ハーバードMBA在籍中。</p>
		            </div>
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
			             <div class="col-12 heading-section ftco-animate text-center">
			               <span class="subheading">運営者から皆さまへ</span>
			               <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Founder</h2>
			             </div>  
    			            <h3>坂井華奈子 | Kanako Sakai</h3>
    			            <p>幼少期から高校までをヨーロッパで過ごした後、大学進学のため帰国。東京大学経済学部卒業。新卒で外資系戦略コンサルティングファームの東京支社に入社。主に製薬・消費財のプロジェクトに従事。1年目に社内結婚、3年目に長男を出産、2年間の育児休業を経て復職後、2019年よりハーバードMBAに夫と共に留学中。女性が家族との時間を楽しみながらも、肩身の狭い思いをせずにより活き活きと働ける社会を実現したいというパッションから本プラットフォームの運営を開始。</p>
    			            <p>現在の日本のジェンダー問題を解くには女性側だけの活動では足りませんが、なかなか大きな変革が起きない中、女性同士で支え合っていくことで草の根レベルでの変革が起こせるのではないかと信じております。</p>
    			            <p>女性同士で助けあってキャリアを追求していきたいと思う方はもちろん、少し先を行く先輩女性プロフェッショナルの方々も若手女性をサポートするため、そして女性が活躍しにくい社会を変えるために是非プラットフォームにご参加いただけますと幸いです。</p>
    			            <p>公式メンターとして本活動により参加したいと思っていただける場合は、お問い合わせフォームよりその旨をご連絡ください。公式メンター間でのネットワーキングイベントなども今後開催していく予定です。</p>
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
			             <div class="col-12 heading-section ftco-animate text-center">
			               <span class="subheading">ご利用前にお読みください</span>
			               <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">Q&A</h2>
			             </div>  
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
			                   お問い合わせフォームより退会の旨をお伝えください。その際には、本会員登録の際に登録されたメールアドレスをご記載ください。なお、退会されますとその時点で残っていた公式メンターとの相談チケットは無効となりますのでご注意ください。
			                 </div>
			               </div>
			             </div>
                </div>
  		        </div>
          </div>
        </div>	
    </section>
    
@endsection