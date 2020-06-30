<?

$calendar = array();
$weekList = array("日", "月", "火", "水", "木", "金", "土");

if ($_GET["year"] == null && $_GET["month"] == null) {
  $year = date("Y");
  $month = date('n');
} else if ($_GET["year"] != null && $_GET["month"] != null) {
  $year = $_GET["year"];
  $month = $_GET["month"];
}

// echo $year.":".$month."\n";
// echo getLastDay($year, $month);

$j = 0;
// echo "\n";
for ($i = 1; $i < getLastDay($year, $month) + 1; $i++) {
  $week = date("w", mktime(0, 0, 0, $month, $i, $year));

  // 1日より前を空欄にする
  if ($i == 1) {
    for ($s = 1; $s <= $week; $s++) {
      $calendar[$j] = '';
      $j++;
    }
  }

  $calendar[$j] = $i;
  $j++;

  // 月末日以降を空欄にする
  if ($i == getLastDay($year, $month)) {
 
    // 月末日から残りをループ
    for ($e = 1; $e <= 6 - $week; $e++) {

      // 後半に空文字をセット
      $calendar[$j] = '';
      $j++;

    }
  }
}

// var_dump($calendar);

// https://www.php.net/manual/ja/function.date.php
// 二つ目の引数はunixtime デフォルトでtime()(現在のunixtime)になる
// 月末の取得。7月0日を取得している -> 6/30
function getLastDay($year, $month) {
  return date('j', mktime(0, 0, 0, $month + 1, 0, $year));
}


function getPrevMonthValue($month) {
  if ($month - 1 < 1) {
    return 12;
  }
  return $month - 1;
}

function getNextMonthValue($month) {
  if ($month + 1 > 12) {
    return 1;
  }
  return $month + 1;
}

function getNextYearValue($year, $month) {
  if (getNextMonthValue($month) == 1) {
    return $year + 1;
  }
  return $year;
}

function getPrevYearValue($year, $month){
  if (getPrevMonthValue($month) == 12) {
    return $year - 1;
  }
  return $year;
}
