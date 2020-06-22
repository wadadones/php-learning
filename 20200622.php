<?
class Simple {
  private $name;
  private $age;
  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function print() {
    echo "{$this->name}: {$this->age}";
  }
}

class Simple2 extends Simple {
  private $price;
  public function __construct($name, $age, $price) {
    parent::__construct($name, $age);
    $this->price = $price; 
  }

  public function print() {
    parent::print();
    echo $this->price;
  }
}

$xx = new Simple("sdf", 33);
$yy = new Simple2("sdff", 33, 124);

$xx->print();
$yy->print();
echo "</br>";
echo "sdfff";


?>
