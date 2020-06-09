<?php
$msg = "john";	//変数は$,

define("MY_EMAIL","google");//定数

var_dump(__LINE__); //現在の行
var_dump(__FILE__); //ファイル名
var_dump(__DIR__); //path

echo MY_EMAIL;	//定数は$いらん
echo $msg;

$s = 4;
$s++;//インクリメントok

echo $s;

var_dump($msg);	//型と中身を知れる
var_dump(23);


echo "hello, {$msg}!\n"; //変数は$

$mrg = $msg."ffdfd";//文字列連結は"."

echo $mrg;

$score = 75;
// ===は中身とデータの型も比較
if ($score > 80){
	echo "great!";
} elseif ($score > 60) {
	echo "good";
} else {
	echo "so so...";
}

$x = 9;

if ($x){
	echo "greattttt";
}

// falseになる場合
// string: "", "0"
// int: 0,0.0
// bool; false
// array:要素0

 

//""だと\n\tが使える
?>

<!DOCTYPE html>
<html lang="ja">
<body>
  <p><?php ?></p>
  <p>Hello, World <?php echo "from PHP"?></p>
</body>