<?php

class Enemy {
  public $ATK;
  public $HP;
  public $name;

  public function __construct($name, $hp, $atk) {
    $this->$ATK = $atk;
    $this->$HP = $hp;
    $this->$name = $name;
  }
}

$slime = new Enemy("slime", 100, 10);

echo $slime->name;