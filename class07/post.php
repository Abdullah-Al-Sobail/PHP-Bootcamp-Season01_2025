<?php
    include_once 'navbar.php';
    include 'env.php';
    //print_r($_GET);
    $id = $_GET['id'];
    $querry = "SELECT name, des FROM posts WHERE id='$id'";
    
    $postDes = mysqli_query($conn,$querry);
    
    $fetch = mysqli_fetch_assoc($postDes);

    //print_r($fetch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single Post</title>
</head>
<body>
    <div class="card col-md-6 mx-auto mt-3">
        <div class="card-header d-flex justify-content-between">
            Post By : <span class="text-success fw-bold"><?=$fetch['name']?></span>
            <a href="./allPost.php" class="badge rounded-pill text-bg-danger btn">Back</a>
        </div>
        <div class="card-body">
          <form >
             <textarea rows="15" class="form-control"><?=$fetch['des']?></textarea>
          </form>
        </div>
    </div>
</body>
</html>