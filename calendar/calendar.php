<?php
// https://www.php.net/manual/ja/function.date.php
$year = date("Y"); //西暦


$month = date("n", mktime(0, 0, 0, $_GET["month"]+1, 0, $year)); //月

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

?>
