<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/12/2016
 * Time: 5:24 PM
 */

class Pet
{
        public $name ;

        public function __construct($name){
              $this ->name = $name;

        }

        public function speak(){
            return 'nothing';
        }
};