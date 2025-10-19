<?php
require 'config/Database.php';
$obj = new Query();


//making and associate array to insert data dynamically
$data = array(
    'name' =>'Amit',
    'email' => "amit@gmail.com",
    'phone'=>"9818898989" 
);

//insert data
$obj->insertData('users',$data);

//get and show data
$obj->getData('users','*');
print_r($obj->getData('users','*'));


// $obj->result;
?>


