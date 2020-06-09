<?php



class User{
	//property

	public $name;
	static public $count = 0;
	//constructor:.が->になる
	//名前が決まっている
	public function __construct($name){
		$this->name = $name;
		self::$count++;		//くらす内から自身のクラスを呼び出す
 	}

 	public function sayHi(){
 		echo "hi, i am $this->name!";
 	}

 	static public function getMessage(){
 		echo "Hello from User class";
 	}
}

class AdminUser extends User{

	//override
	public function sayHi(){
		echo "[admin] hi, i am $this->name!";
	}
	public function sayHello(){
		echo "hello from Admin!";
	}
}



$tom = new User("Tom");
$bob = new User("Bob");

echo $tom->name;

$bob->sayHi();

User::getMessage();//クラスメソッド呼び出し

$steve = new AdminUser("Steve");

$steve->sayHi();
$steve->sayHello();

echo User::$count
?>