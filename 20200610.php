<?
  interface Printable {
    function print();
  }

  interface Printable2 extends Printable {
    function print2();
  }

  class Pet implements Printable2 {
    private $name;

    public function __construct($name) {
      $this->name = $name;
    }
    function print() {
      echo "Printable!\n";
    }

    function print2() {
      echo "Printable2!\n";
    }

    function printName() {
      echo "print {$this->name}\n";
    }

    static function staticPrint() {
      echo "StaticPrint!\n";
    }
  }

  $pet = new Pet("john");

  $pet->print();
  $pet->print2();

  Pet::staticPrint();
  $pet->printName();

  // anonymous class
  echo get_class($pet);
  echo "\n";
  echo get_class(new class {});

?>
