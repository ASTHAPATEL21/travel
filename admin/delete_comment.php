<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<?php
    if(isset($_GET["delete"])){

    $comment_id = $_GET["delete"];

    $query = "DELETE FROM comments WHERE comment_id = $comment_id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed!" . mysqli_error($connection));
    }else{
        echo "<div class='alert alert-danger' role='alert'>
                    Comment deleted successfully!
                    </div>";

        header("Location:view_all_comments.php");
    }
	}
?>