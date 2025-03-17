<?php

    session_start();
    //var_dump($_POST);

    //button validation

    if(isset($_POST['submit_btn'])){
        //collect user input
        $name = test_input($_POST['name']);
        $email =test_input( $_POST['email']);
        $des = test_input($_POST['description']);

        //name validation
        if(empty($name)){
            $_SESSION['name_err'] = "Name field can't be empty";
            header("Location:../index.php");
            exit();
        }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $_SESSION['name_err'] = "Only letters and white space are allowed";
            header("Location:../index.php");
            exit();
        }

        //email validation
        if(empty($email)){
            $_SESSION['email_err'] = "Email field can't be empty";
            header("Location:../index.php");
            exit();
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $_SESSION['email_err'] = "invalid Email";
            header("Location:../index.php");
            exit();
        }

        //description validation

        if(empty($des)){
            $_SESSION['des_err'] = "Description field can't be empty";
            header("Location:../index.php");
            exit();
        }

        //Data inserted in database 
        include '../env.php';
        $querry = "INSERT INTO posts(name, email, des) VALUES ('$name','$email','$des')";
        $insert = mysqli_query($conn,$querry);
        if($insert){
            $_SESSION['success'] = "Your data has been inserted successfully!";
            header("Location:../index.php");
        }


    }


    //Sanitize User Input
    function test_input($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
        
    }

?>