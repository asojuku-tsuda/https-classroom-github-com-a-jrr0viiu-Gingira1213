<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
<?php
// ひらがな、カタカナ、漢字のいずれか1文字以上を許可
echo "あなたが入力した値<br>";
if (mb_ereg('^[ぁ-んァ-ン一-龯]{1,20}$', $_GET['username']) === false) {
  die("20文字以内で名前を入力してください。記号等は利用できません。");
}

if (mb_ereg('^[ぁ-んァ-ン一-龯0-9ー -]{1,50}$', $_GET['useraddress']) === false) {
  die("50文字以内で住所を入力してください。記号等は利用できません。");
}

if (mb_ereg('^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$', $_GET['usermail']) === false) {
  die("無効なメールアドレス形式です。");
}

echo "名前：" . $_GET['username'] . "<br>";
echo "住所：" . $_GET['useraddress']. "<br>";
echo "メールアドレス：" . $_GET['usermail'];
?>
    </h2>
    </div>
  </body>
</html>
