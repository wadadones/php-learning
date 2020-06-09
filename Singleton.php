<?php
class Singleton {
  private static $instance;

  public static function getInstance(): Singleton {//:の使い方がswiftと似ている
    if (null === static::$instance) {
      static::$instance = new static();
    }
    return static::$instance;
  }

  public function sayHi() {
    echo "sdfff";
  }

  function __construct(){}

  private function __clone(){}

  private function __wakeup(){}
}

$ss = new Singleton();
$ss->sayHi();