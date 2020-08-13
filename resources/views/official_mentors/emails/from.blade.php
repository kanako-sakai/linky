お客様より以下の公式メンターの申し込みがありました。<br>
<br>

==============================<br>
<br>
■お名前: {{ $content['from_name'] }}<br>
<br>
■メールアドレス: {{ $content['from'] }}<br>
<br>
■プラン:<br>
<?php echo nl2br(htmlspecialchars($content['plan'])); ?><br>
<br>
■希望メンター: {{ $content['mentor_pref'] }}<br>
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
