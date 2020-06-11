<?

// オーバーロード
// https://www.php.net/manual/ja/language.oop5.overloading.php
// 宣言されていない、アクセス違反したメソッドやプロパティを実行しようとすると呼ばれる
// 

class PropertyTest {
  private $pri;
  public $data = array();

  // privateの$priにアクセスしようとすると呼ばれる
  // $nameは違反したproperty名。今回はpri
  // エラー処理とかに有効かな？
  function __get($name) {
    echo "{$name} is private.";
  }

  // $nameは違反したメソッド名
  function __call($name, $argument) {
    echo "{$name} {$argument} is bad";
  }
}

$pro = new PropertyTest();

echo $pro->pri;
echo "\n";

echo $pro->exs("sdf", "sdf");
echo "\n";

// オブジェクトのクローン作成
// https://www.php.net/manual/ja/language.oop5.cloning.php
// 
// シャローコピーとディープコピー
// https://kurochan-note.hatenablog.jp/entry/20110316/1300267023

class Cloneable {
  public $num = 2;
  public $sum = 5;
  private $pri = 6;
  function __clone() {
    echo "cloned!\n";
  }
}

$clone1 = new Cloneable();
$clone2 = clone $clone1; //clone付ければ値だけのコピーになる

$clone1->num = 4;


print_r($clone1);
print_r($clone2);
?>
