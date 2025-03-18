 <?php

    session_start();
    //var_dump($_POST);

    //button validation
    
    if(isset($_POST['update_btn'])){
        //collect user input
        $name = test_input($_POST['name']);
        $email =test_input( $_POST['email']);
        $des = test_input($_POST['description']);
        $id = $_POST['id'];

        //name validation
        if(empty($name)){
            $_SESSION['name_err'] = "Name field can't be empty";
            header("Location:../editPost.php?id=$id");
            exit();
        }elseif(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $_SESSION['name_err'] = "Only letters and white space are allowed";
            header("Location:../editPost.php?id=$id");
            exit();
        }

        //email validation
        if(empty($email)){
            $_SESSION['email_err'] = "Email field can't be empty";
            header("Location:../editPost.php?id=$id");
            exit();
        }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $_SESSION['email_err'] = "invalid Email";
            header("Location:../editPost.php?id=$id");
            exit();
        }

        //description validation

        if(empty($des)){
            $_SESSION['des_err'] = "Description field can't be empty";
            header("Location:../editPost.php?id=$id");
            exit();
        }

        //Data inserted in database 
        include '../env.php';
        $querry = "UPDATE posts SET name='$name',email='$email',des='$des' WHERE id='$id'";

        $update = mysqli_query($conn,$querry);
        if($update){
            $_SESSION['confirmation'] = 'Your post has been updated successfully';
            header("Location:../allPost.php");
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

