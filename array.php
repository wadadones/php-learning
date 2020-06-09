<?php

  //配列というよりハッシュだなあ。
  $sales = array(
  	"taguchi"=>200,
  	"ooo"=>234
  );

  //php 5.4以降

  $sales2 = [
  	"sdf" => "sdfdds"
  ];
  //キーを指定しないと配列になる
  $colors = [234,5345,6456];

  echo $sales2["sdf"];
  echo $colors[2];

  echo count($colors);//3
  echo implode("@",$colors);//@で連結
?>