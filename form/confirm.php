<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="contact.js"></script>
</head>
<body>
<div><h1>Company Name</h1></div>
<div><h2>お問い合わせ 内容入力確認</h2></div>
  <?php echo "<p>{$_POST["name"]}</p>"; ?>
  <?php echo $_POST["kana"]; ?>
  <?php echo $_POST["email"]; ?>
  <?php echo $_POST["phone"]; ?>
  <?php echo $_POST["sex"]; ?>
  <?php echo $_POST["problem"]; ?>
  <?php echo $_POST["contents"]; ?>
</div>
</body>
</html>