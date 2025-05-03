<?php
    session_start();
   if(isset($_POST['register_btn'])){
    
    // $extension = explode('.',$_FILES['profile_img']['name']);
    // var_dump(uniqid("user_").".".end( $extension));
    // //echo uniqid("user_");
    // exit();
    // collect user input
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $contact = test_input($_POST['contact']);
    $password = test_input($_POST['password']);
    $confirm_password = test_input($_POST['confirm_password']);

    $enc_password = sha1($password);

    // var_dump($enc_password);
    // exit();

    $profile_img = $_FILES['profile_img'];

    $role = $_POST['role'];
  
    //name validation
    if(empty($name)){
        $_SESSION['name_err'] ='Name is required';
        header("Location:../dashboard/register.php");
    }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
        $_SESSION['name_err'] = "Only letters and white space are allowed";
        header("Location:../dashboard/register.php");
    }elseif(empty($email)){
        $_SESSION['email_err'] ='Email is required';
        header("Location:../dashboard/register.php");
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $_SESSION['email_err'] ='Invalid Email';
        header("Location:../dashboard/register.php");
    }elseif(empty($contact)){
        $_SESSION['contact_err'] ='Contact is required';
        header("Location:../dashboard/register.php");
    }elseif(strlen($contact)<11 || strlen($contact)>11){
        $_SESSION['contact_err'] ='Contact Number Must be 11 digit';
        header("Location:../dashboard/register.php");
    }elseif(empty($password)){
        $_SESSION['password_err'] ="Password couldn't be empty";
        header("Location:../dashboard/register.php");
    }elseif(strlen($password)<8){
        $_SESSION['password_err'] ="Password at least 8 digit";
        header("Location:../dashboard/register.php");
    }elseif(empty($confirm_password)){
        $_SESSION['confirm_password_err'] ="Password couldn't be empty";
        header("Location:../dashboard/register.php");
   }elseif($password != $confirm_password){
        $_SESSION['confirm_password_err'] ="Password didn't match";
        header("Location:../dashboard/register.php");
   }elseif(empty($profile_img['name'])){
    $_SESSION['profile_img_err'] ="Image is required";
    header("Location:../dashboard/register.php");
   }elseif(empty($role)){
    $_SESSION['role_err'] ="Must be select one role";
    header("Location:../dashboard/register.php");
   }else{

    $uploaded_img_location = $_FILES['profile_img']['tmp_name'];
    $target_dir = '../uploads/';

    $image_name = $profile_img['name'];
    $image_array = explode('.', $image_name);
    $extension = end( $image_array);

    $new_image_name = uniqid("user_").".".$extension;

    if($extension != 'jpg' && $extension !='png' &&     $extension !='jpeg' && $extension!='gif'){
        $_SESSION['profile_img_err'] = 'Invalid Image Format'; 
        header("Location:../dashboard/register.php"); 
    }else{
        include_once'../env/env.php';
        move_uploaded_file( $uploaded_img_location,$target_dir.$new_image_name);

        //Update user in database
        $querry = "INSERT INTO users(name, email, contact, password, profile_img, role) VALUES ('$name','$email','$contact','$enc_password','$new_image_name','$role')";
        $insert = mysqli_query($conn,$querry);
        if($insert){
            $_SESSION['success_registration'] = 'You have resgistered successfully';
            header('Location:../dashboard/login.php');
        }
    }

    

   

   }

}

   //saitize user input
   function test_input($data){
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);

    return $data;
   }
?>