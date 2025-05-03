<?php

    session_start();
    if(isset($_POST['login_btn'])){
        $user_email = $_POST['email'];
        $user_password = $_POST['password'];
        $enc_password = sha1($user_password);
       
        //validate email and pssword
        if(empty($user_email)){
            $_SESSION['email_err'] = 'Email is required';
            header('Location:../dashboard/login.php');
        }elseif(!filter_var($user_email,FILTER_VALIDATE_EMAIL)){
            $_SESSION['email_err'] = 'Invalid Email';
            header('Location:../dashboard/login.php');
        }elseif(empty($user_password)){
            $_SESSION['password_err'] = 'Password is required';
            header('Location:../dashboard/login.php');
        }elseif(strlen($user_password)<8){
            $_SESSION['password_err'] ="Password at least 8 digit";
            header("Location:../dashboard/login.php");
        }else{
            include'../env/env.php';
            $query = "SELECT email FROM users WHERE email='$user_email'";
            $search_email = mysqli_query($conn,$query);
        

            if($search_email->num_rows>0){

                //password check 
                $pass_query = "SELECT name, email, password, profile_img, role FROM users WHERE email='$user_email' && password='$enc_password'";

                $pass_verify = mysqli_query($conn,$pass_query);
                $auth = mysqli_fetch_assoc($pass_verify);

                // print_r($pass_verify);
                if($pass_verify->num_rows>0){
                    $_SESSION['auth_user'] =  $auth;
                    $_SESSION['isLogin'] = true;
                    header("Location:../dashboard/dashboard.php");
                }
                

            }

            //print_r($search_email);
        }
}

?>