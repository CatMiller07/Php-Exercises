<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/7/2016
 * Time: 7:16 PM
 */

    function getArray() {
        return array(1,2,3);
    }

 //
//echo "<br>The value is " . $secondElement = getArray()[1];
 $tmp = getArray();
$firstElement = 0;
$secondElement = 0;
$thirdElement = 0;
list( $firstElement,$secondElement, $thirdElement)= getArray()
echo "<br>The value of second element is ".$secondElement." ;
?>

