<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/12/2016
 * Time: 5:32 PM
 */
require_once 'Pet.php';

class Parrot extends Pet
{
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    public function speak(){
        return  'squawk. squawk. Wanna cracker!!';
    }

    public function plays(){
        return 'birdie basketball';
    }
}