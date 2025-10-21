<?php
require 'config/Database.php';
$obj = new Query();


//making and associate array to insert data dynamically
$data = array(
    'name' =>'joy',
    'email' => "joy@gmail.com",
    'phone'=>"9818089099" 
);

//insert data
// $obj->insertData('users',$data);

//deletion of data
// $id=10;
// $res = $obj->deleteData('users','id',$id);

//get and show data
// $id=12;
// $obj->getDataById( 'users','*','id',$id );
// print_r($obj->getData( 'users','*','id',$id));


$id = 12;
$result = $obj->getDataById('users', '*', 'id', $id);

if (!empty($result)) {
    foreach ($result as $row) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
} else {
    echo "No record found.";
}

//Update Data
$data = array(
    'name' =>"Ganesh",
    'email' => "ganeshh@gmail.com",
    'phone'=>"9818089999" 
);

$res = $obj->updateData('users',$data,'id',$id);
?>


