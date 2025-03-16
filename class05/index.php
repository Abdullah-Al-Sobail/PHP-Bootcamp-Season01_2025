<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    
           
    <div class="card col-md-6 mx-auto">
        <?php
        if(isset($_SESSION['success_insert'] )){?>
            <div class="alert alert-success">
                <?=$_SESSION['success_insert']?>
            </div>
        <?php
        }
        ?>
      
        <div class="card-header">Contact Form</div>

        <div class="card-body">
            <form action="./formData.php" method="POST" >
                <label for="">Name </label>
                <input type="text" class="form-control my-2" name="name">
               <span class="text-danger">
                <?php
                    if(isset($_SESSION['name_err'])){
                        echo $_SESSION['name_err'];
                    }
                ?>
               </span><br>
                <label for="">Email </label>
                <input type="text" class="form-control my-2" name="email">
                <span class="text-danger">
                    <?php
                        if(isset($_SESSION['email_err'])){
                            echo $_SESSION['email_err'];
                        }
                    
                    ?>
                </span>
                <button  class="btn btn-primary my-2 w-100" name="submit_btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
 session_unset();
 //unset($_SESSION['name_err']);
// echo "$name";
// // echo "<pre>";
// // print_r($_SERVER);
// // echo "</pre>";
// $_SESSION['error_message'] = "This is err message";
// $_SESSION['error_message1'] = "This is err message1";
// $_SESSION['error_message2'] = "This is err message2";
// print_r($_SESSION);


?>