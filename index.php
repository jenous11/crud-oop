<?php
require 'config/Database.php';
$obj = new Query();
$obj->getData('users','*');
print_r($obj->getData('users','*'));

$obj->insertData('users');
?>


