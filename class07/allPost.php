<?php
session_start();
    include_once 'navbar.php';
    include 'env.php';

    $querry = "SELECT * FROM posts WHERE 1";
    $select = mysqli_query($conn, $querry);

    $posts = mysqli_fetch_all($select,1);
    // echo "<pre>";
    // print_r($posts);
    // echo "</pre>";
    // exit();
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Post</title>
</head>
<body>
   <div class="card col-md-8 mx-auto mt-3">
    <?php
        if(isset($_SESSION['update_success'])){
            
            ?>
            <div class="alert alert-warning fw-bold">
                <?=$_SESSION['update_success']?>
            </div>

<?php
        }
    ?>

<?php
        if(isset($_SESSION['delete'])){
            
            ?>
            <div class="alert alert-danger fw-bold">
                <?=$_SESSION['delete']?>
            </div>

<?php
        }
    ?>
   <div class="card-header">
    All Post
   </div>

   <div class="card-body">
   <table class="table">
       <thead>
       <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
       </thead>
       <tbody>

        <?php
            foreach($posts as $key=>$post){?>

           
                <tr>
                <td>
                   <?=++$key?>
                </td>
                <td> <?=$post['name']?></td>
                <td> <?=$post['email']?></td>
                <td> 
                    <?php
                        if(strlen($post['des'])>30){
                           echo substr($post['des'],0,20)."...";
                        }else{
                           echo $post['des']; 
                        }
                    ?>



                </td>
                <td>
                <div class="btn-group">
                        <a href="./post.php?id=<?=$post['id']?>" class="btn btn-sm btn-primary">Show</a>
                        <a href="./editPost.php?id=<?=$post['id']?>" class="btn btn-sm btn-warning">Edit</a>
                        <a href="./controllers/deletePost.php?id=<?=$post['id']?>" class="btn btn-sm btn-danger">Delete</a>
                    </div>
                </td>
            </tr>

        <?php
            }
        
        ?>

       
       </tbody>
    </table>
   </div>
   </div>
</body>
</html>

<?php
    session_unset();

?>