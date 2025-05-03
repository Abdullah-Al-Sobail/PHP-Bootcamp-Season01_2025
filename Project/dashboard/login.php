<?php
    session_start();
    if(isset($_SESSION["isLogin"])){
        header('Location:./dashboard.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="card col-md-6 mx-auto">
        <?php
            if(isset( $_SESSION['success_registration'])){?>
                <div class="alert alert-success">
                    <?=
                         $_SESSION['success_registration']
                    ?>
                </div>
        <?php
            }
        ?>
     
        <div class="card-header">Login User</div>
        <div class="card-body">
            <form action="../controller/login_user.php" method="POST">
               <input type="text" class="form-control my-2" placeholder="email" name="email">
             
               <?php
                if(isset($_SESSION['email_err'])){?>
                <p class='text-danger'>
                    <?=$_SESSION['email_err']?>
                </p>
                  <?php  
                }
               ?>
             
               <input type="text" class="form-control my-2" placeholder="password" name="password">
               <?php
                if(isset($_SESSION['password_err'])){?>
                <p class='text-danger'>
                    <?=$_SESSION['password_err']?>
                </p>
                  <?php  
                }
               ?>
               <input type="submit" class="form-control my-2 btn btn-primary w-100" name="login_btn" value="Login">
               <a href="./register.php" class="form-control my-2 btn btn-success w-100">Register</a>
              
            </form>
        </div>
    </div>
</body>
</html>

<?php
    unset( $_SESSION['success_registration']);
    unset( $_SESSION['email_err']);
    unset( $_SESSION['password_err']);
?>