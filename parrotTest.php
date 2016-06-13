<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/12/2016
 * Time: 5:56 PM
 */

require 'parrot.php';

$parrot = new Parrot('Billy');

echo 'The parrot\'s name is :'.$parrot->name.'<br>';
echo $parrot->name.' says: '.$parrot->speak().'<br>';
echo $parrot->name.' likes to play '.$parrot->plays().'<br>';
