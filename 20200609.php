<?php

interface Powered {
  function getPower();
}

interface GreatPowered extends Powered {
  function getGreatPower();
}


class Enemy implements GreatPowered {
  function getPower() {

  }
  function getGreatPower() {
    echo "great power";
  }
}

$enemy = new Enemy();

/* =====================================================
# php trait
# コードの再利用
# overrideとかはいらん、そのまま使える
# https://www.php.net/manual/ja/language.oop5.traits.php

traitのusecase
- メソッドの中身が確定していて使いまわしたい時に有効？
- 
===================================================== */

class Base {
  public function sayHello() {
    echo "Hello ";
  }
}

trait SayWorld {
  public function sayHello() {
    parent::sayHello();
    echo "World";
  }
}

class MyHelloWorld extends Base {
  use SayWorld;
  public function sayHello() {
    parent::sayHello();
  }
}

$hello = new MyHelloWorld();
$hello->sayHello();
//MyHelloWorld -> SayWorld -> Baseの順に読みに行く


trait MethodsA {
  public function method1() { echo "A1\n"; }
  public function method2() { echo "A2\n"; }
}

trait MethodsB {
  public function method1() { echo "B1\n"; }
  public function method2() { echo "B2\n"; }
}

trait StaticMethod {
  public static function sss() {
    echo "static\n";
  }
}



class MethodUser {
  private $xx = "d";
  use MethodsA, MethodsB, StaticMethod {
    MethodsB::method1 insteadOf MethodsA;
    MethodsA::method2 insteadOf MethodsB;
    MethodsA::method1 as johnson;
  }

  function iterate() {
		foreach($this as $key => $value) {
			echo "{$key} => {$value}\n";
		}
	}
}

$methodUser = new MethodUser();

$methodUser->method1();
$methodUser->method2();
$methodUser->johnson();
MethodUser::sss();
$methodUser->iterate();

?>
