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
    <a href="calendarView.php?year=<?echo getPrevYearValue($year, $month)?>&month=<?echo getPrevMonthValue($month)?>">←</a>
    <? echo $year; ?>年<?php echo $month; ?>月のカレンダー
    <a href="calendarView.php?year=<?echo  getNextYearValue($year, $month)?>&month=<?echo getNextMonthValue($month)?>">→</a>
  </p>
  <table>
    <tr>
      <? foreach($weekList as $weekday): ?>
        <th><? echo $weekday ?></th>
      <? endforeach ?>
    </tr>
    <tr>
      <!--  :で?phpを跨いでforでつなげる -->
      <? $cnt = 0 ?>
      <? foreach($calendar as $key => $value): ?>
        <td class="day"><? echo $value ?></td>
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
