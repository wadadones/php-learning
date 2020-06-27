<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="calendar.css">
  <title>Document</title>
</head>
<body>
  <? include("./calendar.php") ?>
  <p>
    <a href="calendarView.php?year=<?echo $prev_year?>&month=<?echo $prev_month?>">←</a>
    <? echo $year; ?>年<?php echo $month; ?>月のカレンダー
    <a href="calendarView.php?year=<?echo $next_year?>&month=<?echo $next_month?>">→</a>
  </p>
  <table>
    <tr>
      <th>日</th>
      <th>月</th>
      <th>火</th>
      <th>水</th>
      <th>木</th>
      <th>金</th>
      <th>土</th>
    </tr>
    <tr>
      <!--  :で?phpを跨いでforでつなげる -->
      <? $cnt = 0 ?>
      
      <? foreach($calendar as $key => $value): ?>
        <td><? echo $value["day"] ?></td>
        <? $cnt++; ?>
        <? if ($cnt == 7): ?>
          </tr>
          <tr>
          <? $cnt = 0 ?>
        <? endif ?>
        
      <? endforeach ?>

    </tr>

  </table>
</body>
</html>
