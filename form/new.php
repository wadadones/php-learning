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
<div><h2>お問い合わせ 内容入力</h2></div>
<div><p>お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p></div>
<div>
  <form action="confirm.php" method="post">
    <div>
      <label name="name">お名前</label>
      <input type="text" name="name" placeholder="例) 山田太郎">
    </div>
    <div>
      <label name="kana">ふりがな</label>
      <input type="text" name="kana">
    </div>
    <div>
      <label name="email">メールアドレス</label>
      <input type="text" name="email">
    </div>
    <div>
      <label name="phone">電話番号</label>
      <input type="text" name="phone">
    </div>
    <div>
      <label name="sex">性別</label>
      <input type="text" name="sex">
    </div>
    <div>
      <label name="problem">お問い合わせ項目</label>
      <input type="text" name="problem">
    </div>
    <div>
      <label name="contents">お問い合わせ内容</label>
      <input type="text" name="contents">
    </div>
    <input type="submit" value="確認画面へ">

  </form>
</div>
</body>
</html>