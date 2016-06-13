<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/9/2016
 * Time: 9:50 PM
 */

require_once 'Pet.php';

class Dog extends Pet
{
 
    
    public function speak(){
        return 'Woof! Woof!';
    }

    public function plays(){
         return 'fetch';
    }
}