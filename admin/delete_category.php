<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<?php
    if(isset($_GET["delete"])){

    $cat_id = $_GET["delete"];

    $query = "DELETE FROM categories WHERE cat_id = $cat_id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed!" . mysqli_error($connection));
    }else{
        echo "<div class='alert alert-danger' role='alert'>
                    Post deleted successfully!
                    </div>";

        header("Location:view_all_categories.php");
    }
	}
?>