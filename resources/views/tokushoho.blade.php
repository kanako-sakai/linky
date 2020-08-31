@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
            	<div class="col-md-8 heading-section text-center ftco-animate">
                	<h2 class="mb-4">特定商取引法に基づく表記</h2>
                	
                	<div class="col-md-12">
                        <table class="profile table-bordered">
                            <tbody>
                                <tr>
                                    <th class="text-left">販売業者名</th>
                                    <td class="text-left">坂井　華奈子</td>
                                </tr>
                                <tr>
                                    <th class="text-left">販売責任者</th>
                                    <td class="text-left">坂井　華奈子</td>
                                </tr>
                                <tr>
                                    <th class="text-left">所在地</th>
                                    <td class="text-left">Soldiers Field, Boston, MA02163, USA</td>
                                </tr>
                                <tr>
                                    <th class="text-left">電話番号</th>
                                    <td class="text-left">+1-857-347-9061 <br>※当サイトでは、サービス内容のお問い合わせに関する電話窓口をご用意しておりません。サービス内容のお問い合わせについては、以下の問い合わせフォームをご利用ください。</td>
                                </tr>
                                <tr>
                                    <th class="text-left">お問い合わせ先</th>
                                    <td class="text-left">{!! link_to_route('contact.index', 'こちら') !!}よりお問い合わせください。</td>
                                </tr>
                                <tr>
                                    <th class="text-left">販売価格</th>
                                    <td class="text-left">サービス詳細ページに表示された価格に基づきます。なお、当該価格には消費税が含まれております。</td>
                                </tr>
                                <tr>
                                    <th class="text-left">販売価格以外に必要な費用</th>
                                    <td class="text-left">通信料などインターネットを利用するために必要となる費用</td>
                                </tr>
                                <tr>
                                    <th class="text-left">支払い方法</th>
                                    <td class="text-left">クレジットカード</td>
                                </tr>
                                <tr>
                                    <th class="text-left">支払方法・支払時期</th>
                                    <td class="text-left"><p>【お支払方法】</p>
                                    <p>クレジットカード</p>
                                    <p>【お支払時期】</p>
                                    <p>①公式メンター相談：公式メンター相談のチケットをご購入される段階でのお支払いとなります。複数回分のチケットをご購入される場合においても、全回分前払いとなります。</p>
                                    <p>②グループ相談会：お申込み時点でのお支払いとなります。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-left">提供時期・提供方法</th>
                                    <td class="text-left"><p>①公式メンター相談：ご購入後、直ちにリクエストフォームをご提出いただけます。</p>
                                    <p>直ちにリクエストフォームを出されなかった場合、当サイトがご利用者様からの入金を確認した段階で、マイページからリクエストフォームをご提出いただくいことが可能です。</p>
                                    <p>リクエストフォームをご提出されてから、実際のメンタリングまでのお時間は公式メンターの予定次第となり、即時実施することはお約束できませんのでご注意ください。</p>
                                    <p>②グループ相談会：詳細ページに表記の日程での実施となります。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-left">提供期間</th>
                                    <td class="text-left">公式メンター相談チケットの有効期限は、チケットのご購入した月を1ヵ月目と起算し、6カ月目の末日までとなります。</td>
                                </tr>
                                <tr>
                                    <th class="text-left">返品・キャンセルについて</th>
                                    <td class="text-left"><p>ご購入後のお客様都合による返品・キャンセルはお受けしておりませんので、予めご了承ください。</p>
                                    <p>メンタリング日決定後の日程変更は必ず７日前までにメンターに直接ご連絡ください。日程変更のご要望は、各メンタリング日に対して１回までとさせていただきます。７日前までのご連絡がない場合や２回以上の日程変更のご要望には応じられませんし、ご返金させていただくことはできませんので、ご注意ください。</p>
                                    <p>なお、メンタリング日決定後、メンターの都合に基づく日程変更の要請によりメンタリングの実施が困難になった場合は、当該メンタリングに対応する料金をご返金いたします。</p></p>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-left">不良品について</th>
                                    <td class="text-left">公式メンターは真摯に利用者と面談を行いますが、利用者の悩みの解消を保証するものではありません。悩みが解決されなかった等の理由で返金することはできません。</td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>    
                </div>
            </div>
        </div>
</section>

@endsection