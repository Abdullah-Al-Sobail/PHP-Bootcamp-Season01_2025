<?php

$db_hostname = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'test_form_data';

$conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

// if($conn->connect_errno){
//     die("Connetion Err");
// }else{
//     echo "Connected Successfully";
// }

?>