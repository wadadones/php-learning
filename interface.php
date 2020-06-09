<?php

namespace Dotinstall\Lib;

interface Greet{
	public function sayHi();
	public function sayHello();
}

class User implements Greet{

	public $name;

	public function __construct($name){//function忘れずに
		$this->name = $name;
	}
	public function sayHi(){
		echo "Hello, $this->name!";
	}
	public function sayHello(){
		echo "Hello, World!";
	}
}

$user = new User("gogo");

$user->sayHi();

$user = new User("sss");




?>