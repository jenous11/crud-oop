<?php
    require 'config/Database.php';
    $obj = new Query();

    
if($_SERVR["REQUEST_METHOD"]=="GET"){
    $name=$_GET['name'];
    $email=$_GET['email'];
    $password=$_GET['password'];
}

?>

<?php

# Get Data
// echo "<pre>";
// print_r( $obj->getData('users','*'));
// echo "</pre>";

//making and associate array to insert data dynamically
// $data = array(
//     'name' =>'joy',
//     'email' => "joy@gmail.com",
//     'phone'=>"9818089099"  
// );

//insert data
$obj->insertData('users',$data);

//deletion of data
// $id=10;
// $res = $obj->deleteData('users','id',$id);

//get and show data
// $id=12;
// $obj->getDataById( 'users','*','id',$id );
// print_r($obj->getData( 'users','*','id',$id));


// $id = 11;
// $result = $obj->getDataById('users', '*', 'id', $id);

// if (!empty($result)) {
//     foreach ($result as $row) {
//         echo "<pre>";
//         print_r($row);
//         echo "</pre>";
//     }
// } else {
//     echo "No record found.";
// }

//Update Data
// $data = array(
//     'name' =>"Zyren",
//     'email' => "zyren.com",
//     'phone'=>"98510050320" 
// );

// $res = $obj->updateData('users',$data,'id',$id);
?>
