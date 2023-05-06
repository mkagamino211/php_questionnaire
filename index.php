<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MULabo</title>
	<meta name="description" content="ページの説明">
	<link rel="stylesheet" href="style.css">
</head>
<body style="text-align:center">
<header>
		<h1 id="titile"><font size="7" color="white">MULabo</font></h1>
</header>

	<!-- 文章を右と左に分ける -->
	<div id="parent">
	<!-- 左に配置 -->
    <div id="child1">
    <font color="blue">
    	<p>このページはUrabeのPortfolioの１つです。</p>
		<p>バックエンド領域に携わりたいと考えており、現在、独学でPHPを勉強しております。</p>
		<p>勉強の一環として簡単なアンケートフォームを作りました。</p>
		<p>お名前、性別、血液型、ご意見を入力し、送信ボタンを押すと、</p>
		<p>指定したメールアドレスに以上の内容がメールで届きます。</p>
	</font>
    <!-- 参考にさせていただきました。ありがとうございました。 -->
	<h2><p>参考資料</p></h2>
	<font color="blue">
    <p>[1]PHP マニュアル,<a href="https://www.php.net/manual/ja/index.php">https://www.php.net/manual/ja/index.php</a> </p>
		<p>[2]SAMURAI ENGINEER,【PHP入門】メールを送信する方法(mail/mb_send_mail), <a href="https://www.sejuku.net/blog/24658">https://www.sejuku.net/blog/24658</a></p>
		<p>[3]いきなり始めるPHP ワクワク・ドキドキの入門教室</p>
		<p>[4]JavaScript入門, <a href="https://www.javadrive.jp/javascript/">https://www.javadrive.jp/javascript/</a></p>
		<p>[5]CSSボタンデザイン120個以上！どこよりも詳しく作り方を解説！, <a href="https://jajaaan.co.jp/css/button/">https://jajaaan.co.jp/css/button/</a></p>
	</font>
    </div>
    <!-- 右に配置 -->
    <div id="child2">
    	<h2><p>開発環境</p></h2>
    	<font color="blue"><p>Windows 11</p></font>
    	<font color="blue"><p>プログラミング言語 : PHP, HTML, CSS, JavaScript</p></font>
    	<p><a href="https://www.apachefriends.org/jp/index.html">XAMPP</a></p>
	    <p><a href="https://mergedoc.osdn.jp/">Eclipse 2022</a></p> 
    	<h2><p>制作期間<p></h2>
		<font color="blue"><p>およそ3週間<p></font>
		<h2><p>作者<p></h2>
		<font color="blue"><p>urabe<p></div></font>
    </div>
    
	<!-- JavaScriptによるフォーム送信の確認・キャンセル処理 -->
	<script type="text/javascript"> 
	function check_confirm(){
		if(window.confirm('送信してよろしいですか？')){ // 確認処理
			return true; // 送信
		}
		else{ // キャンセル処理
			window.alert('キャンセルされました'); 
			return false; // 送信を中止
		}
	}
	</script>
	
	<!-- アンケートフォーム -->
	<div class="form_back">
	<h2>アンケートフォーム</h2>
	<!-- セキュリティを考慮し、POST / onSumit="return check_confirm()"でメールの送信の確認・キャンセル -->
	<form action="form_post.php" method="post"  onSubmit="return check_confirm()">
    <p>お名前：<input type="text" name="name"></p>
    <p>性別：
      <input type="radio" name="gender" value="男性">男性
      <input type="radio" name="gender" value="女性">女性
      <input type="radio" name="gender" value="その他">その他
    </p>
    <p>血液型：
      <select name="blood">
        <option value="AB">AB</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="O">O</option>
      </select>
    </p>
    <p>ご意見：</p>
    <p><textarea name="opinion" cols="50" rows="5"></textarea></p>
    <p><input type="submit" name="submitBtn" class="btn btn--blue btn--radius" value="送信"></p>
  </form>
  </div>

<footer class="foot">	
	<font color="white"><h3>© 2023 MULabo</h3></font>
</footer>

</body>
</html>
