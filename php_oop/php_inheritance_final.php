<?php
final class Fruit {
  // some code
}

// will result in error
class Strawberry extends Fruit {
  // some code
}


class Fruit_2
{
    final public function intro()
    {
        // some code
    }
}

class Strawberry_2 extends Fruit_2
{
    // will result in error
    public function intro()
    {
        // some code
    }
}



