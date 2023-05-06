<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
  <title>MULabo</title>
</head>
<body style="text-align:center">
<header>
	<h1 id="titile" href="index.php"><font size="7" color="white">MULabo</font></h1>
</header>
<?php
$name = $_POST["name"];
$gender = $_POST["gender"];
$blood = $_POST["blood"];
$opinion = $_POST["opinion"];

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//送信先のアドレス
$to = "***@***.com";//送信先のアドレスを入力
//メール件名
$subject = "testお問い合わせ";

$message = <<< EOM
アンケートフォーム

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【 お名前 】
{$_POST["name"]}

【 性別 】
{$_POST["gender"]}

【 血液型 】
{$_POST["blood"]}

【 アンケート内容 】
{$_POST["opinion"]}


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;

//送信元
$headers = "From: ***@***.com";//送信元のアドレスを入力

//メール送信
mb_send_mail($to, $subject, $message, $headers);

if(mb_send_mail($to, $subject, $message, $headers))
{
    echo "メール送信成功です";
}
else
{
    echo "メール送信失敗です";
}
?>
  <div>
  	<p><a class="btn btn--blue btn--radius" href="index.php">戻る</a></p>
  </div>
<footer class="foot2">	
	<font color="white"><h3>© 2023 MULabo</h3></font>
</footer>
</body>
</html>
