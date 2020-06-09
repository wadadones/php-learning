<?php
abstract class BaseUser{
	public $name;
	abstract public function sayHi(); //具象クラスで実装されないといけない。実装しないとエラーが出る
}

class User extends BaseUser{
	public function sayHi(){
		echo "hello from user";
	}
}

$john = new User();

$john->sayHi();


abstract class XUSer {
	public abstract function print($name);
}


class XUSer2 extends XUser { //オプション引数使ってもよし
	public function print($name, $age=2) {
		return $name.$age;
	}
}

$xuser = new XUser2();

echo $xuser->print();
?>
