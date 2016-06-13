<?php
/**
 * Created by PhpStorm.
 * User: Cathy
 * Date: 6/12/2016
 * Time: 10:49 PM
 */

if (!empty($_POST['data'])) {
    echo 'The following string was sent from form #1: ' .$_POST['data'];
} elseif (!empty($_GET['data'])) {
    echo 'The following string was sent from form #2: '.$_GET['data'];
}