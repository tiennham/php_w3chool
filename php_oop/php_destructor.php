<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
    print_r("This is the END of script");
  }
}

$apple = new Fruit("Apple", "red");
print_r("This is in the BODY of script");
?>

