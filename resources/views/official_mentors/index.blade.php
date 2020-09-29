@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-10 heading-section">
                	<h2 class="mb-4 text-center">オフィシャルメンター</h2>
            			<p>Rolemy公式のメンターです。</p>
            			<p>公式メンターに相談されたい場合は、以下のリクエストフォームをご入力ください。</p>
            			<p>1回からリクエストいただくことも可能ですが、1-2か月に1度のペースで3-5回継続的にお話しいただくことをオススメしております。途中でメンターを変更することも可能ですので、その際はお気軽にご連絡ください。</p>
                     	<div class="col-md-12 text-center">
                     	{{-- リクエストページへのリンク --}}
    					{!! link_to_route('official.payment', 'リクエストを出す', ['id' => Auth::id()], ['class' => 'btn btn-primary']) !!}
    					</div>
          		</div>
        	</div>
        <div class="row m-1">
        	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/kanako_sakai.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Kanako Sakai</h2>
          			<p>【現職】ハーバードビジネススクール在籍中</p>
          			<p>【社会人歴】7年目</p>
          			<p>【職歴】「早くスキルを付けて、将来の選択肢を広げておきたい」という気持ちから、2014年新卒で外資系戦略コンサルティングファームに就職。主に日本国内で消費財・製薬企業のコンサルティングに従事。</p>
					<p>【ライフ】入社1年目で結婚、1年以上の妊活を経て社会人3年目に長男を出産。夫婦共にキャリアを築いたり、子育てしながらキャリアを積んだりするにはどうすべきかを日々考えております。</p>
					<p>【相談に乗れること】就活、外資コンサルでの働き方、MBA留学、育児・出産とキャリアの両立、夫婦関係の在り方など。その他キャリアや人生に関するお悩み等何でもお話しください！</p>
          		</div>
          	</div>
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/green.png);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Chihiro Shibata</h2>
          			<p>【現職】上場バイオベンチャー役員</p>
          			<p>【社会人歴】15年目</p>
          			<p>【職歴】公認会計士二次試験に大学4年で合格。4年間監査法人勤務後、アメリカ短期留学。帰国後、外資系生命保険会社に9年間勤務し、内部監査・コンプライアンス・IT開発プロジェクト管理等に従事。会計士協会の推薦で神奈川県や横浜市の委員を副業として務める。2020年に上場バイオベンチャーの監査役就任。</p>
					<p>【ライフ】小1、3歳、1歳の三姉妹の母。子育ての合間を見つけて、2019年にボリビアのウユニ塩湖、2017年にアイスランドへ1人でツアー旅行。</p>
					<p>【相談に乗れること】子育てと仕事の両立、ママの自分時間の作り方、キャリア相談、人脈の作り方。その他なんでもお気軽にお話してくださいね！</p>
          		</div>
          	</div> 
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/eiko_ichikawa.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Eiko Ichikawa</h2>
          			<p>【現職】ランサーズ株式会社新しい働き方LAB所長</p>
          			<p>【社会人歴】8年目</p>
          			<p>【職歴】新卒で外資系戦略コンサルティングファームに入社。文部科学省「トビタテ！留学JAPAN」プロジェクトを経て、スタンフォード大学にMBA×教育学を学ぶ。現在は「生き生きとした大人を増やす」ことを目標に、「個のエンパワメント」をミッションに掲げるランサーズ株式会社にて教育×コミュニティ事業を運営。</p>
					<p>【ライフ】モットーは「仕事ありきの人生ではなく、人生ありきの仕事を」。夫の米国駐在に伴って海外在住フルリモート社員をしてみたり、夫婦で世界一周をしながら仕事を続けたりと、様々な生き方・働き方に挑戦中。</p>
					<p>【相談に乗れること】モヤモヤを行動にうつす方法、ライフ・キャリアのつくりかた、海外留学・生活、等。</p>
          		</div>
          	</div>
	        
	        <div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/yuri_hamamura.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Yuri Hamamura</h2>
          			<p>【現職】プライベート・エクイティ</p>
          			<p>【社会人歴】9年目</p>
          			<p>【職歴】バレエのアシスタント講師（在学中）、金融庁、シカゴ大学ビジネススクールを経てプライベート・エクイティ勤務。</p>
					<p>【ライフ】パフォーミングアーツ他、芸術全般が好きです。</p>
					<p>【相談に乗れること】何か一歩踏み出してみること。Non-traditionalなキャリアパス、転職、女性の少ない業界、日本育ちからの海外留学。</p>
          		</div>
          	</div> 
          	
        	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/shoko_hamada.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Shoko Hamada</h2>
          			<p>【現職】外資系戦略コンサルティングファーム</p>
          			<p>【社会人歴】9年目</p>
          			<p>【職歴】ハーバードビジネススクールMBA修了。MBA留学前はP＆Gシンガポール・アジア本社にて柔軟剤ブランドの中長期的な目標設定、経営戦略の策定、収益管理を行うブランドマーケティングを担当。卒業後は外資系コンサルティングファーム米国オフィスに入社し、企業の海外進出などの支援に従事。</p>
					<p>【ライフ】大学時代より10年付き合った彼と５年ほどの遠距離を経て2020年に結婚。</p>
					<p>【相談に乗れること】海外留学全般、就職活動、転職活動、グローバルキャリアの築き方・歩み方、夫婦共にキャリアを築くための実体験などをお話しできるかと思います。その他何でも気軽にご相談ください！</p>
          		</div>
          	</div> 
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/marie_oshioka.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Marie Oshioka</h2>
          			<p>【現職】フィンテックベンチャー　社長室長</p>
          			<p>【社会人歴】12年目</p>
          			<p>【職歴】2009年経済産業省入省、特許法、商品先物取引法、民法等の改正プロジェクトに従事。社会人一年目に司法試験合格。2017年ペンシルベニア大学ウォートン校でMBA取得。外資系戦略コンサルティングファーム東京オフィスにて金融業等のコンサルティングに従事した後、フィンテックベンチャーに入社。個人向けの新規サービス開発を担当し、事業開発部長を経た後、現職。</p>
					<p>【ライフ】わんぱくざかりの5歳男子の母。限られた時間の中で自分が楽しめる仕事ができることを心がけています！</p>
					<p>【相談に乗れること】キャリアの在り方、女性特有の課題の捉え方など色々な角度からご相談に乗れるかな？と思います。どんなことでも気軽にお話しましょう！</p>
          		</div>
          	</div>
	              	
	        <div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/kei_takatsuka.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Kei Takatsuka</h2>
          			<p>【現職】ハーバードMBA在籍中</p>
          			<p>【社会人歴】5年目</p>
          			<p>【職歴】名古屋大学大学院にて脳神経科学を研究の後、25歳の時に新卒で外資系戦略コンサルティングファーム(東京オフィス)に入社。外資系消費財メーカーや製薬企業の経営計画策定などに参画の後、米国ボストンオフィスに転籍。2020年夏よりハーバードビジネススクールに進学・在籍中。</p>
					<p>【ライフ】長野県伊那市出身。小中高と地元の公立校を経て、名古屋大学へ。真剣に科学を学ぶにつれ、世界の広さを痛感。語学の習得や異文化の理解に奮闘するようになる。</p>
					<p> 会社の先輩と昨年結婚。直後、彼はMBA取得の為に渡米。入籍1週間後から別居婚になるも、転勤を果たし約半年遅れで米国入り。夫婦それぞれが妥協することなく、自分なりのキャリアを選択しながら家族一緒に支え合って暮らすことを大切にしています。</p>
					<p>【相談に乗れること】お仕事のことでも、人生設計のことでも、何とも言えないお悩みでも、お気軽にどうぞ！</p>
          		</div>
          	</div>    
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/itoko_shibata.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Itoko Shibata</h2>
          			<p>【現職】教育事業会社にて、講師・営業・事業開発などを担当</p>
          			<p>【社会人歴】8年目</p>
          			<p>【職歴】2013年新卒で外資系戦略コンサルティングファームに就職。通信・素材・エネルギーなどの業界に対するコンサルティングに従事。また、新卒採用・内定者フォローなどにも当時から関わる。戦略があっても、実行する「人」がいなければ実現しないことを痛感し、人材育成に関心を持ち、現職へ2018年転職。</p>
					<p>【ライフ】父の死別により母子家庭で育ったこともあり、女性のキャリアについては昔から関心あり。2014年に結婚、その後諸々あり2018年に離婚。お手本になれるタイプではないと思いますが、様々なお話はできると思います。</p>
					<p>【相談に乗れること】女性ならではの悩みはもちろん、就目の前の仕事のこと、これからのキャリアのこと、気軽に相談できるバーチャル先輩として使ってください！人材育成に携わる者としても、最大限サポートさせて頂きます。</p>
          		</div>
          	</div>
					
			<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/emiri_grimes.png);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Emiri Grimes</h2>
          			<p>【現職】外資系戦略コンサルティングファーム</p>
          			<p>【社会人歴】7年目</p>
          			<p>【職歴】京都大学薬学部卒業、薬剤師免許取得後、武田薬品の臨床開発部にて治験の管理に従事。産官学を通じた日本の医療システムの改善に興味を持ち、スイスチューリヒ工科大学にて医学産業薬学のマスターを取得。帰国後、外資系戦略コンサルティングファームにてコンサルタントとして働いています。</p>
					<p>【ライフ】3歳息子、1歳娘、4歳柴犬の母。旦那はアメリカ人であり、国際結婚です。</p>
					<p>【相談に乗れること】国際結婚、就職関連（製薬業界、コンサル業界）、海外留学、海外在住中の職の探し方、子育てと仕事の両立、犬の育て方</p>
          		</div>
          	</div> 
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/aki_ko.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Aki Ko</h2>
          			<p>【現職】ベンチャーキャピタル</p>
          			<p>【社会人歴】8年目</p>
          			<p>【職歴】コンサルティング会社で務めた後、ビジネススクールに入学。在学中はテックスタートアップやデザインコンサルでインターン。2019年にMBA卒業後、現職。</p>
					<p>【ライフ】テニスと読書が好きです。</p>
					<p>【相談に乗れること】コンサルでの働き方やMBA留学にご興味がある方、お力になれれば幸いです。</p>
          		</div>
          	</div>
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/kumiko_fukagawa.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Kumiko Fukagawa</h2>
          			<p>【現職】外資系戦略コンサルティングファーム</p>
          			<p>【社会人歴】7年目</p>
          			<p>【職歴】大学院で国際開発を学んだ後、ソーシャルビジネスによる貧困問題の解決への関心から、ビジネススキルを習得するために外資系戦略コンサルに入社。消費財や金融業、プライベート・エクイティ投資のプロジェクトに従事する傍ら、NPOを無償で支援するプロボノ活動にも多数参加。日本と欧州にて4年半の勤務を経て、2020年にハーバード・ビジネス・スクールでMBAを取得。</p>
					<p>【ライフ】アート、音楽、舞台鑑賞が大好きで、お休みの日は美術館やライブ会場に行ってリフレッシュしています！コロナ禍では、美術史や外国語のオンラインコースを通して、外出自粛期間も楽しく乗り切っています。</p>
					<p>【相談に乗れること】社会問題に関心のある方へのキャリア相談、MBA留学、グローバルなキャリアの築き方等。</p>
          		</div>
          	</div>
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/mari_tabata.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Mari Tabata</h2>
          			<p>【現職】ハーバードビジネススクール在学中</p>
          			<p>【社会人歴】7年目</p>
          			<p>【職歴】新卒でコンサルティング会社に入社し、日系の食品、消費財メーカーのM&A支援に従事。MBA留学前は国内の水産商社にて海外事業拡大を担当。</p>
					<p>【ライフ】ゴルフとハイキングが好きで、アメリカに留学中もいろいろなコースを廻って友達作りや絶景巡りを楽しんでいます！</p>
					<p>【相談に乗れること】食品やコンシューマービジネスに興味のある方のキャリア相談、就活、MBA留学準備など。</p>
          		</div>
          	</div>
          
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/reika_katsumata.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Reika Katsumata</h2>
          			<p>【現職】大学教員としてソフトマター/ナノテク研究室を主宰しています。</p>
          			<p>【社会人歴】3年目</p>
          			<p>【職歴】日本の大学で修士を収めた後、いち早く独立できるアメリカでラボを持ちたいと思い、一念発起してアメリカにて博士留学。ポスドクを経て現職。研究室のHPは<a href="https://katsumata4.wixsite.com/home" target="_blank" class="reika">こちら</a>です。</p>
					<p>【ライフ】ソフトボールとバンド活動が大好きです。最近、大学院時代の同級生と国際結婚しました。</p>
					<p>【相談に乗れること】アメリカ博士留学、アメリカの理工系アカデミアにおけるサバイバルなどなど、一緒にお話させて下さい！</p>
          		</div>
          	</div> 
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/kae_okoshi.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Kae Okoshi</h2>
          			<p>【現職】日本外科学会専門医、消化器外科学会専門医・指導医</p>
          			<p>【社会人歴】21年目</p>
          			<p>【職歴】日本外科学会専門医、消化器外科学会専門医・指導医です。消化器外科医としてずっと働いてきました。</p>
					<p>【ライフ】夫と小学生の子ども2人の4人家族です。</p>
					<p>【相談に乗れること】数少ない女性外科医（特に消化器外科医）なので、細々と生き延びているだけでも絶滅危惧種ではないかと思います。妊娠・出産・育児を経て外科医として研鑽を積む難しさを共有できる相談相手として考えていただければと思います。私自身、何が正解とかいうこともなく、まな道半ばで全く答えは見えていません。</p>
          		</div>
          	</div> 
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/anna_nakayasu.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Anna Nakayasu</h2>
          			<p>【現職】Stanford Graduate School of Business在籍中</p>
          			<p>【社会人歴】4年目</p>
          			<p>【職歴】東京大学医学部卒業後、都内で初期研修・産婦人科後期研修</p>
					<p>【ライフ】学生時代から医療とマネジメントに興味を持ったことをきっかけに、MBA留学にきています。趣味はヨガ、テニス、料理です。</p>
					<p>【相談に乗れること】まだ社会人歴が浅いので微力ですが、医療関係の方、MBA留学に興味がある方、それ以外のお悩みでもお力になれそうであればご相談ください！</p>
          		</div>
          	</div> 
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/shizuka_kato.jpg);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Shizuka Kato</h2>
          			<p>【現職】OECD教育政策アナリスト</p>
          			<p>【社会人歴】7年目</p>
          			<p>【職歴】DeNA（営業・マーケティング・休職）→ 大学職員（留学関連業務）→ オックスフォード大学院留学（教育学）→ 現職</p>
					<p>【ライフ】日本生まれ、日本育ち。25歳で大学院留学をするまで、海外経験はほぼなし。外国籍のパートナーと5年間同棲中。現在、パリ在住。</p>
					<p>【相談に乗れること】休職をはじめ、今までたくさん躓いてきたので、今エネルギーレベルが落ちている、誰かのパワーを貰いたい、特ににそんな人の力になれたらと思います。</p>
          		</div>
          	</div>
          	
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/yurie_mizukami.png);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Makiko Suzuki</h2>
          			<p>【現職】フリーアナウンサー。ナチュラルスキンケア&ソーシャルビジネスを展開するMS Inc.株式会社 取締役。</p>
          			<p>【社会人歴】12年目（NHKアナウンサー7年、MSInc.株式会社5年目)</p>
          			<p>【職歴】▼NHK仙台キャスター(日本語) ▼NHK World キャスター(英語) ▼MS Inc.株式会社 取締役</p>
					<p>【ライフ】▼ハーバード・ジャーナリズム在籍中。▼2018年バブソンカレッジMBA修了。</p>
					<p>【相談に乗れること】▼人前で話すプレゼンテーション・コミュニケーションについて（仕事のスキル）▼キャリアチェンジ（全く違う世界に飛び込んだ経験より）▼起業・スタートアップ（失敗談より話せるエピソード）▼ソーシャルビジネス（ソーシャルインパクトや社会貢献に興味がある人の輪を広げたい）▼30歳超えての恋愛・結婚について（経験より！笑）</p>
          		</div>
          	</div>
          	<div class="coach-wrap d-sm-flex">
          		<div class="img coach-img" style="background-image: url(/images/yurie_mizukami.png);"></div>
          		<div class="text pl-md-5">
          			<h2 class="official-name">Yurie Mizukami</h2>
          			<p>【現職】教育系スタートアップ HLAB, Inc. Director</p>
          			<p>【社会人歴】5年目</p>
          			<p>【職歴】1991年生まれ、東京育ち。慶大法学部在学中、英エディンバラ大学に交換留学。ロンドン大学大学院社会学部人権学科修士課程修了。2013年にHLAB東京実行委員、2014年にHLAB徳島サマースクール設立、委員長を務める。(独)国際協力機構アフリカ部にて勤務しマラウイ国協力戦略立案やザンビア国円借款業務に従事。WeWorkコミュニティマネジメント部を経て、2019年4月よりHLABにてレジデンシャル・カレッジのパートナーシップ構築とコミュニティマネジメント業務などを担当。</p>
					<p>【ライフ】未婚・最近子どもはほしいと思うように。母が三児を育てながら今でもフルタイムで働いているので、自分も自然とそうなりたいと思うようになりました。</p>
					<p>【相談に乗れること】海外大学院進学（特にMBA以外、英国）/ 国際協力業界におけるキャリア /ベンチャー（外資系・日系）と大企業のキャリアの考え方の違い /ソーシャルセクター（教育・人材系）の営業職</p>
          		</div>
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
						            <p><i class="fas fa-ticket-alt fa-3x"></i> 相談されたい回数分だけチケットを購入ください。後から回数を追加することも可能です。</p>
						            <p><i class="far fa-clipboard fa-3x fa-pull-left"></i>チケット購入後、お話しされたいメンターをご記載の上、リクエストフォームをお送りいただきます。3回分・5回分のチケットを購入された場合は、初回に話したいメンターをお選びください。2回目以降別のメンターに変更することも可能です。</p>
						            <p><i class="far fa-calendar-alt fa-3x fa-pull-left"></i>リクエストをいただきましたら、メンターとお繋ぎいたしますので、日程調整をお願いいたします。日程調整が済みましたら、当日ご使用いただくZoomのリンクをご登録のメールアドレスにお送りいたします。</p>
						            <p><i class="fas fa-video fa-3x fa-pull-left"></i> 当日はそのZoomのリンクから入っていただき、メンターとお話しください。</p>
			            		</div>
				            	
				            	<div class="row m-2">
				            		<p>※ご利用される場合は、<a href="/precaution" target="_blank" rel="noopener noreferrer">注意事項</a>をご確認ください。</p>
						            <p>※メンターのスケジュール上、リクエストを頂いてから実際にメンタリングセッションを行っていただくまでにお時間を要することがございますがご了承ください。</p>
						            <p>※振替される場合は、遅くとも7日前までにrolemy.info@gmail.comまでメールをお送りください。7日前を過ぎますと振替できませんのでご注意ください。</p>
						        </div>    
				            <div class="col-md-12 text-center">
	                     	{{-- リクエストページへのリンク --}}
	    					{!! link_to_route('official.payment', 'リクエストを出す', ['id' => Auth::id()], ['class' => 'btn btn-primary']) !!}
	    					</div>
				          </div>
			        	</div>
		        	</div>
	        	</div>
       		 </div>
    	</div>
    </section>
@endsection    