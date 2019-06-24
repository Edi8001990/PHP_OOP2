<?php

class Test{ //blueprint, pattern, object factory

  public $property1;
  protected $property2;

  // they belong only to the class
  static $ourStatic = 0;

    function __construct($value1){

        $this->property1 = $value1;
        self::$ourStatic ++ ;
        // $this->setValueForProperty('property2')

    }

    static function makeSomething($value){

    //static method can work only with static properties or static methods/public methods or protected methods
    $local_var = $value * self::$ourStatic;

    return self::callMe($local_var);

    }

    protected function callMe($received){
      return $received * 2;
      }

}

$object = new Test('example');
$object = new Test('example');
$object = new Test('example');


//echo $object->property2;

echo Test::makeSomething(3);

 ?>
