<?php

session_start();
  // var_dump($_POST);
//    $name_error="";
    
//    if(true){
//      $name = $_POST['name'];
//      $email = $_POST['email'];
//      if(empty($name)){
//          $name_error = "Name is required";
//      }
     
//    }

// print_r($_SESSION);

if(isset($_POST['submit_btn'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    if(empty($name)){
        $_SESSION['name_err'] = "Name is required";
        header("Location:./index.php");
    }elseif(empty($email)){
        $_SESSION['email_err'] = "email is required";
        header("Location:./index.php");
    }else{
    include "./env.php";
      $querry = "INSERT INTO users(name, email) VALUES ('$name','$email')";
      mysqli_query($conn,$querry);
      $_SESSION['success_insert'] = "Your data has been inserted";
      header("Location:./index.php");
    }

}

?>