<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="card col-md-6 mx-auto">
        <div class="card-header">Register User</div>
        <div class="card-body">
            <form action="../controller/store_user.php" method="POST" enctype="multipart/form-data">
               <input type="text" class="form-control my-2" placeholder="name" name="name">
              <span class="text-danger">
              <?php
                if(isset( $_SESSION['name_err'] )){
                    echo  $_SESSION['name_err'];
                }
               ?>
              </span>
               <input type="text" class="form-control my-2" placeholder="email" name="email">

               <span class="text-danger">
              <?php
                if(isset( $_SESSION['email_err'] )){
                    echo  $_SESSION['email_err'];
                }
               ?>
              </span>
               <input type="text" class="form-control my-2" placeholder="contact" name="contact">
               <span class="text-danger">
              <?php
                if(isset( $_SESSION['contact_err'] )){
                    echo  $_SESSION['contact_err'];
                }
               ?>
              </span>
               <input type="text" class="form-control my-2" placeholder="password" name="password">
               <span class="text-danger">
              <?php
                if(isset( $_SESSION['password_err'] )){
                    echo  $_SESSION['password_err'];
                }
               ?>
              </span>
               <input type="text" class="form-control my-2" placeholder="confirm password" name="confirm_password">
               <span class="text-danger">
              <?php
                if(isset( $_SESSION['confirm_password_err'] )){
                    echo  $_SESSION['confirm_password_err'];
                }
               ?>
              </span>
               <input type="file" class="form-control my-2" name="profile_img">
               <p class="text-danger">
              <?php
                if(isset( $_SESSION['profile_img_err'])){
                    echo $_SESSION['profile_img_err'];
                }
               ?>
              </p>

              <input type="radio" class="form-check-input" name="role" id="admin" value="admin">
              <label for="admin" class="text-danger">Admin</label>
              <input type="radio" class="form-check-input " name="role" id="editor" value="editor">
              <label for="editor" class="text-warning">Editor</label>
              <input type="radio" class="form-check-input" name="role" id="contributor" value="contributor">
              <label for="contributor" class="text-success">Contributor</label>
              <input type="radio" class="form-check-input " name="role" id="user" value="user">
              <label for="user" class="text-info">User</label>
              <p class="text-danger">
              <?php
                if(isset(  $_SESSION['role_err'])){
                    echo  $_SESSION['role_err'];
                }
               ?>
              </p>
               
               <input type="submit" class="form-control my-2 btn btn-success w-100" value="Register" name="register_btn">
               <a href="./login.php" class="form-control my-2 btn btn-primary w-100">Back To Login</a>
            </form>
        </div>
    </div>
</body>
</html>
<?php
    session_unset();

?>