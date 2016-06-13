<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/8/2016
 * Time: 6:44 PM
 */
$firstName = "Cathy";
$lastName = "Miller";
$fullName = $firstName."-". $lastName;

echo $fullName.'<br>';


/*******for ($i=1 ; $i < 101; $i++){
    echo '<br>' .($i) ;
}

$i =1;
while ($i < 101) {
    echo '<br>' .($i) ;
    $i++;
}
 ***/
$myArr = array('Hello','World');
foreach($myArr as $val){
    echo $val.'<br>';
}

$myArray = array(1 => 'Hello', 2 => 'World');
foreach ($myArray as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}