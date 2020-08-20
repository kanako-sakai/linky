{{ $content['to_name'] }} 様<br>
<br>
この度は公式メンターとの相談に申し込みいただき誠にありがとうございます。<br>
申込を受け付けましたので、ご連絡いたします。<br>
<br>

==============================<br>
<br>
■お名前: {{ $content['to_name'] }}<br>
<br>
■メールアドレス: {{ $content['to'] }}<br>
<br>
■希望メンター: {{ $content['mentor_id'] }}<br>
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

==============================<br>

<br>
内容を確認のうえ、担当よりご連絡致します。<br>
2-3営業日以内に連絡がない場合は、お手数ですが、rolemy.info@gmail.comまでご連絡お願いいたします。
<br>