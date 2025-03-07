<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<?php
    if(isset($_GET["delete"])){

    $user_id = $_GET["delete"];

    $query = "DELETE FROM users WHERE user_id = $user_id ";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed!" . mysqli_error($connection));
    }else{
        echo "<div class='alert alert-danger' role='alert'>
                    User deleted successfully!
                    </div>";

        header("Location:view_all_users.php");
    }
	}
?>