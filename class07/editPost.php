<?php
session_start();
    include_once 'navbar.php';
    include 'env.php';
    //print_r($_GET);

    $id = $_GET['id'];
    $querry = "SELECT * FROM posts WHERE id='$id'";
    $post = mysqli_query($conn,$querry);
    $fetch = mysqli_fetch_assoc($post);
    //print_r($fetch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
<div class="card col-md-6 mx-auto mt-2">
   
    <div class="card-header">
        Edit Post
    </div>

    <div class="card-body ">
        <form action="./controllers/edit_validation.php" method="POST">
            <input type="hidden" value="<?=$id?>" name="id">
           <label for="">Name</label><span class="text-danger">*</span>
           <input type="text" class="form-control mt-2" placeholder="Only Letters and white space" name="name" value="<?=$fetch['name']?>">
           <p class="text-danger">
            <?php
               if(isset($_SESSION['name_err'])){
                echo $_SESSION['name_err'];
               }
            ?>
           </p>
           <label for="">Email</label><span class="text-danger">*</span>
           <input type="text" class="form-control mt-2" placeholder="example@gmail.com" name="email" value="<?=$fetch['email']?>">
           <p class="text-danger">
            <?php
               if(isset($_SESSION['email_err'])){
                echo $_SESSION['email_err'];
               }
            ?>
           </p>
           <label for="">Post Description</label><span class="text-danger">*</span>
           <textarea name="description" class="form-control mt-2"><?=$fetch['des']?></textarea>
           <p class="text-danger">
            <?php
               if(isset($_SESSION['des_err'])){
                echo $_SESSION['des_err'];
               }
            ?>
           </p>
       
           <input type="submit" class="btn btn-primary w-100 my-2" value="Update" name="update_btn">
        </form>
    </div>
</div>
</body>
</html>
<?php
    session_unset();
?>