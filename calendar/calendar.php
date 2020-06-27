<?php

if ($_GET["year"] == null && $_GET["month"] == null) {
  $year = date("Y");
  $month = date('n');
} else if ($_GET["year"] != null && $_GET["month"] != null) {
  $year = $_GET["year"];
  $month = $_GET["month"];
} 


// https://www.php.net/manual/ja/function.date.php
$last_day = date('j', mktime(0, 0, 0, $month + 1, 0, $year));
// 二つ目の引数はunixtime デフォルトでtime()(現在のunixtime)になる
// 月末の取得。7月0日を取得している -> 6/30

// echo $year.":".$month."\n";
// echo $last_day;

$calendar = array();
$j = 0;
// echo "\n";
for ($i = 1; $i < $last_day + 1; $i++) {
  $week = date("w", mktime(0, 0, 0, $month, $i, $year));

  // 1日より前を空欄にする
  if ($i == 1) {
    for ($s = 1; $s <= $week; $s++) {
      $calendar[$j]["day"] = '';
      $j++;
    }
  }

  $calendar[$j]["day"] = $i;
  $j++;

  // 月末日以降を空欄にする
  if ($i == $last_day) {
 
    // 月末日から残りをループ
    for ($e = 1; $e <= 6 - $week; $e++) {

      // 後半に空文字をセット
      $calendar[$j]['day'] = '';
      $j++;

    }
  }
}


// month 1 2 3 4 5 6 7 8 9 10 11 12
//nmonth 2 3 4 5 6 7 8 9 10 11 12 1
//pmonth 12 1 2 3 4 5 6 7 8 9 10 11
$next_year = $year;
$prev_year = $year;
$next_month = $month + 1;
if ($next_month == 13) {
  $next_month = 1;
  $next_year += 1;
}

$prev_month = $month - 1;
if ($prev_month == 0){
  $prev_month = 12;
  $prev_year -= 1;
}



?>
