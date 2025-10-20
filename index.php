<?php
require 'config/Database.php';
$obj = new Query();


//making and associate array to insert data dynamically
$data = array(
    'name' =>'Shamit',
    'email' => "shamit@gmail.com",
    'phone'=>"9818000000" 
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

$id=12;
// $result=$obj->getDataById( 'users','*','id',$id );

// if($result->num_rows>0){
//     while($row =$result->fetch_assoc()){
//         echo "<pre>";
//         print_r($row);
//     }
// }
// exit;

print_r($obj->getData( 'users','*','id',$id));


?>


