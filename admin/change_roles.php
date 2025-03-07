<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<?php
    if(isset($_GET["change_to_admin"])){

    $the_user_id = $_GET["change_to_admin"];

    $query = "UPDATE users SET  user_role = 'admin' WHERE user_id = $the_user_id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed!" . mysqli_error($connection));  
    }else{
        header("Location:view_all_users.php");
    }
	}
?>
<?php
    if(isset($_GET["change_to_subscriber"])){

    $the_user_id = $_GET["change_to_subscriber"];

    $query = "UPDATE users SET  user_role = 'subscriber' WHERE user_id = $the_user_id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed!" . mysqli_error($connection));  
    }else{
        header("Location:view_all_users.php");
    }
	}
?>

