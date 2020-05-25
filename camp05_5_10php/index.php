<?php 
  // phpの記述できる領域になります
  echo "<P>"."はじめてのphp"."</p>";
?>
<?php
echo 5+2 ;
echo '5+2';
?>

<?php
 $name ='変数はデータを入れる箱';

 echo $name;
 ?>

<?php
$apple = 'りんご';
echo $apple
?>
<?php
$num=10+10;
echo $num
?>


<?php
$keisan=30;
if($keisan>10){
    echo'30は10より大きい数字です';
}
// 条件が成立するため処理が実行される
?>

<?php

$a=1;

$b=2;

if($a ==1){
    echo '1が表示されました';
    
}
if($b == 2){
    echo '2が表示されました'.'<br>';
}
// 関数=ランダムな数字が出るものを体験しよう
$random =mt_rand(1,6);
// 今$randomに関数を使ってランダムな数字が収納されている状態です
// 確認は必ず「ブラウザをリロード」して確かめましょう！
echo $random;

if($random == 1){
    echo '大吉';
}
else if($random == 2){
    echo '中吉';
}
else if($random == 3){
    echo '小吉';
}
else if($random == 4){
    echo '吉';
}
else if($random == 5){
    echo '末';
}
else if($random == 6){
    echo '凶';
}

?>


<?php
echo '<p>'.'アイウエオ'.'</p>';

 $name="あいうえお";

echo $name;




$random=mt_rand(1,6);

echo $random

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylecss.php"/>
    <title>Document</title>
</head>
<body>
    <?php

    echo "初めてのPHP";



    ?>



</body>
</html>