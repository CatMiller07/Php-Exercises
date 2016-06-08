
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/7/2016
 * Time: 7:16 PM
 */
<?php
  $name = '20#011bb';
  if (!preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*^/',$name))
         echo $name.' is not a valid PHP variable name';
  else
         echo $name.' is a valid PHP variable name';
?>

