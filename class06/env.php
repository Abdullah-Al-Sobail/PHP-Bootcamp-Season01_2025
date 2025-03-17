<?php
    $db_hostname = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'crud_project';

    $conn = mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

    // if($conn->connect_error){
    //     echo 'Connection faild';
    // }else{
    //     echo 'connected successfully!';
    // }
?>