{{ $content['mentor_name'] }}　メンター<br>
<br>
お客様より以下の公式メンターの申し込みがありました。<br>
<br>
【この後の手続き】<br>
①お客様からのご入金が確認できましたら、坂井よりご連絡します。<br>
②入金完了の連絡が来ましたら、rolemyの管理画面の「メンティー一覧」より該当するメンティーにメッセージをお送りください。サンプルメッセージを以下記載しておりますのでご活用ください。<br>
③スケジュールが決まりましたら、管理画面の「メンティー一覧」より該当するメンティーの横にある「スケジュールボタン」をクリック、次の画面で「新規スケジュール登録」ボタンをクリックし、スケジュールをご登録ください。<br>
④当日メンタリングが終わりましたら、管理画面の「メンティー一覧」より該当するメンティーの横にある「スケジュール」ボタンをクリックし、該当するスケジュールの横にある「実施」ボタンをクリックください。<br>
<br>
<br>
==============================<br>
【リクエスト内容】
<br>
■お名前: {{ $content['from_name'] }}　様<br>
<br>
■メールアドレス: {{ $content['from'] }}<br>
<br>
■希望メンター: {{ $content['mentor_name'] }}<br>
<br>
■メンタリングの目的:<br>
<?php echo nl2br(htmlspecialchars($content['goal'])); ?><br>
<br>
■お話しされたい内容:<br>
<?php echo nl2br(htmlspecialchars($content['questions'])); ?><br>
<br>
■ご希望日時:<br>
<?php echo nl2br(htmlspecialchars($content['dates'])); ?><br>
<br>
<br>
==============================<br>
【サンプルメッセージ】<br>
この度は公式メンター相談にお申込みいただき誠にありがとうございます。<br>
この度ご指名いただきました〇〇です。<br>
早速日程調整をさせていただきたいと思いますが、〇月〇日〇時はいかがでしょうか。<br>
当日は以下のZoomのリンク（{{ $content['zoom'] }}）よりお入りください。<br>
お話させていただくのを楽しみにしております。<br>
よろしくお願いいたします。<br>
<br>
<br>
==============================<br>
rolemy - 女性のキャリアをより自由に　より前向きに<br>
www.rolemy.jp