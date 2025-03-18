<?php
    session_start();
    include '../env.php';
    $id = $_GET['id'];
    $querry = "DELETE FROM `posts` WHERE id='$id'";
    $delete = mysqli_query($conn,$querry);
    if($delete){
        $_SESSION['delete'] = "Your post has been deleted successfully";
        header("Location:../allPost.php");
    }

?>