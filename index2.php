
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/7/2016
 * Time: 7:16 PM
 */
<?php
class Bar {
    private $foo = 9;

    function __construct() {
        $varName = 'this';
        $$varName = 'text'; // sets $this to 'text'

        // outputs 'text'
        echo $this;

        // instead of Notice: Trying to get property of non-object, outputs 9
        echo $this->foo;
    }
}

$a = new Bar;
var_dump($a); // object(Bar)#1 (1) {...}
?>

