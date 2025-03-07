<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>


    <?php
    if(isset($_GET["approve"])){

    $comment_id = $_GET["approve"];

    $query = "UPDATE comments SET  comment_status = 'approved' WHERE comment_id = $comment_id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed!" . mysqli_error($connection));  
    }else{
        header("Location:view_all_comments.php");
    }
	}
    ?>

    <?php
    if(isset($_GET["unapprove"])){

    $comment_id = $_GET["unapprove"];

    $query = "UPDATE comments SET  comment_status = 'unapproved' WHERE comment_id = $comment_id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed!" . mysqli_error($connection));
    }else{
        header("Location:view_all_comments.php");
    }
	}
    ?>
