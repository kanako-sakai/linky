@extends('layouts.sub')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center">
                	<h2 class="mb-4">オフィシャルメンター</h2>
            			<p>Linky公式のメンターです。</p>
            			<p>公式メンターに相談されたい場合は、以下のリクエストフォームをご入力ください。</p>
            			<p>1回からリクエストいただくことも可能ですが、1-2か月に1度のペースで3-5回継続的にお話しいただくことをオススメしております。途中でメンターを変更することも可能ですので、その際はお気軽にご連絡ください。</p>
                     	{{-- リクエストページへのリンク --}}
    					{!! link_to_route('official.form', 'リクエストを出す', ['id' => Auth::id()], ['class' => 'btn btn-primary']) !!}
    		
          		</div>
        	</div>
        <div class="row">
        	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/kanako_sakai.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2>Kanako Sakai</a></h2>
          			<p>【現職】ハーバードビジネススクール在学中</p>
          			<p>【社会人歴】7年目</p>
          			<p>【職歴】「早くスキルを付けて、将来の選択肢を広げておきたい」という気持ちから、2014年新卒で外資系戦略コンサルティングファームに就職。主に日本国内で消費財・製薬企業のコンサルティングに従事。</p>
					<p>【ライフ】入社1年目で結婚、1年以上の妊活を経て社会人3年目に長男を出産。夫婦共にキャリアを築いたり、子育てしながらキャリアを積んだりするにはどうすべきかを日々考えております。</p>
					<p>【相談に乗れること】就活、外資コンサルでの働き方、MBA留学、育児・出産とキャリアの両立、夫婦関係の在り方など。その他キャリアや人生に関するお悩み等何でもお話しください！</p>
          		</div>
          	</div>
	              	
        	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/shoko_hamada.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2>Shoko Hamada</a></h2>
          			<p>【現職】外資系戦略コンサルティングファーム</p>
          			<p>【社会人歴】9年目</p>
          			<p>【職歴】ハーバードビジネススクールMBA修了。MBA留学前はP＆Gシンガポール・アジア本社にて柔軟剤ブランドの中長期的な目標設定、経営戦略の策定、収益管理を行うブランドマーケティングを担当。卒業後は外資系コンサルティングファーム米国オフィスに入社し、企業の海外進出などの支援に従事。</p>
					<p>【ライフ】大学時代より10年付き合った彼と５年ほどの遠距離を経て2020年に結婚。</p>
					<p>【相談に乗れること】海外留学全般、就職活動、転職活動、グローバルキャリアの築き方・歩み方、夫婦共にキャリアを築くための実体験などをお話しできるかと思います。その他何でも気軽にご相談ください！</p>
          		</div>
          	</div> 
	              	
	        <div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/kei_takatsuka.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2>Kei Takatsuka</a></h2>
          			<p>【現職】外資系戦略コンサルタント@ボストン</p>
          			<p>【社会人歴】5年目</p>
          			<p>【職歴】名古屋大学大学院にて脳神経科学を研究の後、25歳の時に新卒で外資系戦略コンサルティングファーム(東京オフィス)に入社。外資系消費財メーカーや製薬企業の経営計画策定などに参画の後、米国ボストンオフィスに転籍・現職。2020年夏よりハーバードビジネススクールに進学予定。</p>
					<p>【ライフ】長野県伊那市出身。小中高と地元の公立校を経て、名古屋大学へ。真剣に科学を学ぶにつれ、世界の広さを痛感。語学の習得や異文化の理解に奮闘するようになる。</p>
					<p> 会社の先輩と昨年結婚。直後、彼はMBA取得の為に渡米。入籍1週間後から別居婚になるも、転勤を果たし約半年遅れで米国入り。夫婦それぞれが妥協することなく、自分なりのキャリアを選択しながら家族一緒に支え合って暮らすことを大切にしています。</p>
					<p>【相談に乗れること】お仕事のことでも、人生設計のことでも、何とも言えないお悩みでも、お気軽にどうぞ！</p>
          		</div>
          	</div>       	
					
			<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/emiri_grimes.png);"></div>
          		<div class="text pl-md-5">
          			<h2>Emiri Grimes</a></h2>
          			<p>【現職】外資系戦略コンサルティングファーム</p>
          			<p>【社会人歴】7年目</p>
          			<p>【職歴】京都大学薬学部卒業、薬剤師免許取得後、武田薬品の臨床開発部にて治験の管理に従事。産官学を通じた日本の医療システムの改善に興味を持ち、スイスチューリヒ工科大学にて医学産業薬学のマスターを取得。帰国後、外資系戦略コンサルティングファームにてコンサルタントとして働いています。</p>
					<p>【ライフ】3歳息子、1歳娘、4歳柴犬の母。旦那はアメリカ人であり、国際結婚です。</p>
					<p>【相談に乗れること】国際結婚、就職関連（製薬業界、コンサル業界）、海外留学、海外在住中の職の探し方、子育てと仕事の両立、犬の育て方</p>
          		</div>
          	</div> 
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/itoko_shibata.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2>Itoko Shibata</a></h2>
          			<p>【現職】教育事業会社にて、講師・営業・事業開発などを担当</p>
          			<p>【社会人歴】8年目</p>
          			<p>【職歴】2013年新卒で外資系戦略コンサルティングファームに就職。通信・素材・エネルギーなどの業界に対するコンサルティングに従事。また、新卒採用・内定者フォローなどにも当時から関わる。戦略があっても、実行する「人」がいなければ実現しないことを痛感し、人材育成に関心を持ち、現職へ2018年転職。</p>
					<p>【ライフ】父の死別により母子家庭で育ったこともあり、女性のキャリアについては昔から関心あり。2014年に結婚、その後諸々あり2018年に離婚。お手本になれるタイプではないと思いますが、様々なお話はできると思います。</p>
					<p>【相談に乗れること】女性ならではの悩みはもちろん、就目の前の仕事のこと、これからのキャリアのこと、気軽に相談できるバーチャル先輩として使ってください！人材育成に携わる者としても、最大限サポートさせて頂きます。</p>
          		</div>
          	</div>
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/itoko_shibata.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2>Aki Jiang</a></h2>
          			<p>【現職】ベンチャーキャピタル</p>
          			<p>【社会人歴】8年目</p>
          			<p>【職歴】コンサルティング会社で務めた後、ビジネススクールに入学。在学中はテックスタートアップやデザインコンサルでインターン。2019年にMBA卒業後、現職。</p>
					<p>【ライフ】テニスと読書が好きです。</p>
					<p>【相談に乗れること】コンサルでの働き方やMBA留学にご興味がある方、お力になれれば幸いです。</p>
          		</div>
          	</div>
    	</div>
    </section>
    
    <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb" id="procedure">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
    				<div class="py-md-5">
	    				<div class="row justify-content-start pb-3">
			          <div class="col-md-12 heading-section ftco-animate">
			          	<span class="subheading">ご利用されたい方へ</span>
			            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">ご利用方法の流れ</h2>
			            <p>相談されたい回数分だけチケットを購入(後から追加することも可能です。)</p>
			            <p>チケット購入後、お話しされたいメンターをご記載の上、リクエストフォームをお送りいただきます。</p>
			            <p>リクエストをいただきましたら、メンターと直接ご連絡いただき日程調整をしていただきます。</p>
			            <p>日程調整が済みましたら、当日ご使用いただくZoomのリンクをお送りいたします。</p>
			            <p>当日はそのZoomのリンクから入っていただき、メンターとお話しください。</p>
			          </div>
			        </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
@endsection    