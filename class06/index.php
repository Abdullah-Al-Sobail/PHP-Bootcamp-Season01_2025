
<?php
    include_once 'navbar.php';
    session_start();

?>

<div class="card col-md-6 mx-auto mt-2">
    <?php
        if(isset($_SESSION['success'])){?>
         <div class="alert alert-success">
            <?=$_SESSION['success'] ?>
         </div>   

       <?php }
    ?>
    <div class="card-header">
        Add New Post
    </div>

    <div class="card-body ">
        <form action="./controllers/post_validation.php" method="POST">
           <label for="">Name</label><span class="text-danger">*</span>
           <input type="text" class="form-control mt-2" placeholder="Only Letters and white space" name="name">
           <p class="text-danger">
            <?php
               if(isset($_SESSION['name_err'])){
                echo $_SESSION['name_err'];
               }
            ?>
           </p>


           
           <label for="">Email</label><span class="text-danger">*</span>
           <input type="text" class="form-control mt-2" placeholder="example@gmail.com" name="email">
           <p class="text-danger">
            <?php
               if(isset($_SESSION['email_err'])){
                echo $_SESSION['email_err'];
               }
            ?>
           </p>
           <label for="">Post Description</label><span class="text-danger">*</span>
           <textarea name="description" class="form-control mt-2"></textarea>
           <p class="text-danger">
            <?php
               if(isset($_SESSION['des_err'])){
                echo $_SESSION['des_err'];
               }
            ?>
           </p>
           
           <input type="submit" class="btn btn-primary w-100 my-2" value="Submit" name="submit_btn">
        </form>
    </div>
</div>
<?php
    session_unset();

?>
