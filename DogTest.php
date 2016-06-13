<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/9/2016
 * Time: 9:54 PM
 */
require 'Dog.php';

$dog = new Dog('Fido');

echo 'The dog\'s name is :'.$dog->name.'<br>';
echo 'The dog says: '.$dog->speak().'<br>';

$dog = new Dog('Sonja');
echo 'The dog\'s name is :'.$dog->name.'<br>';
echo 'The dog says: '.$dog->speak().'<br>';