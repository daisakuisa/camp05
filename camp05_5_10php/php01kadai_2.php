<?php
$hands = ["グー","チョキ","パー"];
// var_dump($hands[1]);

if (isset($_POST['plhand'])) {
    // プレイヤーの手を代入
    $plhand = $_POST['plhand'];

    $key = array_rand($hands);
    $pchand = $hands[$key];

    // 勝敗を判定
    if ($plhand == $pchand) {
        $result ='あいこ';
    } elseif ($plhand == 'グー' && $pchand == 'チョキ') {
        $result = '勝ち';
    } elseif ($plhand == 'チョキ' && $pchand == 'パー') {
        $result = '勝ち';
    } elseif ($plhand == 'パー' && $pchand == 'グー') {
        $result = '勝ち';
    } else {
        $result = '負け';
    }
}
// $arybattle = array(
//     'win' => 0,
//     'lose'=> 0
//     'draw'=> 0
//     'cout'=> 0
//     )
// foreach($arybattle as $key => $val){
//     echo '<input type="radio" name="'.$key.'"val="'.$valu.'"
// }

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
<h2>・・・結果は・・・</h2>
<div class="result-box">
            <p class="result-word"><?= $result ?>！</p>

            あなた：<?= $plhand ?><br>
            コンピューター：<?= $pchand ?><br>


<p><a class="red" href="php01kadai.php">>>もう一回勝負する</a></p>
</main>

<footer class="footer">
    <div class = wrapper>
 <small  class="copyrights" >php01kadai.php</small>
</div>
</footer>

    
</body>
</html>