<?php
	

function sayHi($name = "don"){
	echo "hi! $name";
}

$lang = "ja";
function sayHi2($name){
	$lang = "php";
	return "hi! ".$name." from ".$lang;
}

sayHi("bob");
sayHi("kkk");

sayHi();

$a = sayHi("sdf");

echo $a;
var_dump($lang);

//組み込み関数

$x = 5.6;
$s1 = "sdf";
$s2 = "ねこ";
echo ceil($x);//6
echo floor($x);//5

echo rand(1,10); //1-10をランダムに

echo strlen($s1);//3
echo strlen($s2);//6
echo mb_strlen($s2)//2 (日本語はmulti byte)
//printf使える
?>