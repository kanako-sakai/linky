お客様より以下のお問い合わせがありました。<br>
<br>

==============================<br>
<br>
■お名前: {{ $content['from_name'] }}<br>
<br>
■メールアドレス: {{ $content['from'] }}<br>
<br>
■タイトル: {{ $content['title'] }}<br>
<br>
■お問い合わせ内容:<br>
<?php echo nl2br(htmlspecialchars($content['body'])); ?><br>
<br>

==============================<br>

<br>
