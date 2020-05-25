<?php
 function h($val){
     return htmlspecialchars($val,ENT_QUOTES);
 }

$name = $_POST["name"];
// $age = $_POST["age"];




?>


<!DOCTYPE html>
<html lang="ja">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="css/style.css">
 <title>じゃんけんphp</title>
</head>
<body>
<header>
<div class="header_log">PHPじゃんけんアプリ</div>
</header>
<main>

    <p><?= h($name."さんの出す手を選んで"); ?></p>
    <!-- <p><?= h($age."歳"); ?></p> -->

    <form method="post"action="php01kadai_2.php">
    <div class=selection>
    <label for="gu" >
    <input type="radio" title="plhand" name="plhand"value="グー"　id="gu">
    <img src="php.img/gu.png"></label>
    <label for="cho">
    <input type="radio" title="plhand" name="plhand"value="チョキ"　id="cho">
    <img src="php.img/ch.png"></label>
    <label for="pa">
    <input type="radio" title="plhand" name="plhand"value="パー"　id="pa">
    <img src="php.img/pa.png">
    </label>
    </div>
    <p><input type="submit" value="勝負" class=btn_hajimeru ></p>
    <pclass="modoru"><a  href="kadai_form.php">>>登録に戻る</a></p>
 </main>

 <footer class="footer">
    <div class = wrapper>
 <small  class="copyrights" >php01kadai.php</small>
</div>
</footer>

</body>
</html>