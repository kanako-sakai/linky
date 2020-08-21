<!DOCTYPE html>
<html lang="ja">
<style>
  body { 
    background-color: #fffacd;
  }
  h1 {
    font-size: 16px;
    color: #ff6666;
  }
  #button {
    width: 200px;
    text-align: center;
  }
  #button a {
    padding: 10px 20px;
    display: block;
    border: 1px solid #2a88bd;
    background-color: #FFFFFF;
    color: #2a88bd;
    text-decoration: none;
    box-shadow: 2px 2px 3px #f5deb3;
  }
  #button a:hover {
    background-color: #2a88bd;
    color: #FFFFFF;
  }
</style>
<body>
<h2>
  【ROLEMY】パスワード再設定について
</h2>

<div="container">
<p>
  ROLEMYにご登録いただき、誠にありがとうございます。<br>
  このメールは、本メールアドレスで登録されている会員の<br>
  パスワード再設定手続を行われたお客様に送信させていただいております。<br>
  <br>
  以下のURLを開き、画面の指示に従ってお手続きください。<br>
  ※セキュリティ保持のため有効期限が設けられております。<br>
  申請後一定時間を経過すると期限切れとなりますのでご注意ください。<br>
</p>
<p id="button">
  <a href="{{$reset_url}}">{{ $reset_url }}</a>
</p>

<footer>
  <p>■ROLEMY</p>
  <p>www.rolemy.jp</p>
</footer>
</body>
</html>