<?php
require 'config/Database.php';
$obj = new Query();
$obj->getData('users','*');
echo $obj->getData('users','*');

$obj->insertData('users');
?>


