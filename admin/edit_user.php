<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<div id="wrapper">

<!-- Navigation -->
<?php include "includes/navigation.php" ?>


<div id="page-wrapper">


<div class="row">
    <div class="col-lg-12">
    <h1 class="page-header">
    Edit User
    <small>Author</small>
    </h1>



<?php 

if(isset($_GET["edit"])){
$the_user_id = $_GET["edit"];

$query = "SELECT * FROM users WHERE user_id = $the_user_id";
$select_all_users = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_users)){
    $user_id = $row["user_id"];
    $username = $row["username"];
    $user_firstname = $row["user_firstname"];
    $user_lastname = $row["user_lastname"];
    $user_email = $row["user_email"];
    $user_role = $row["user_role"];
}

if(isset($_POST["update_user"])){
    $username = $_POST["username"];
    $user_firstname = $_POST["user_firstname"];
    $user_lastname = $_POST["user_lastname"];
    $user_email = $_POST["user_email"];
    $user_role = $_POST["user_role"];


    // $post_image = $_FILES["post_image"]["name"];
    // $post_image_temp = $_FILES["post_image"]["tmp_name"];
    // move_uploaded_file( $post_image_temp,"../img/uploads/$post_image");

    // if(empty($post_image)){
    //     $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
    //     $select_image = mysqli_query($connection, $query);
    //     while($row = mysqli_fetch_array($select_image)){
    //         $post_image = $row["post_image"];
    //     }
    // }

    
    $query  ="UPDATE users SET ";
    $query .="username = '{$username}', ";
    $query .="user_firstname = '{$user_firstname}', ";
    $query .="user_lastname = '{$user_lastname}', ";
    $query .="user_role = '{$user_role}', ";
    $query .="user_email = '{$user_email}' "; 
    $query .="WHERE user_id = $user_id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed" . mysqli_error($connection));
    }else{
        echo "<div class='alert alert-success' role='alert'>
                    User updated successfully!
                </div>";
    }

}
?>

    
<form action="" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="fname">First name</label>
    <input type="text" class="form-control" name="user_firstname" id="fname" value="<?php echo $user_firstname; ?>">
</div>
<div class="form-group">
    <label for="lname">Last name</label>
    <input type="text" class="form-control" name="user_lastname" id="lname" value="<?php echo $user_lastname; ?>">
</div>

<div class="form-group">
<select name="user_role" id="">
    <option value=""<?php echo $user_role; ?>""><?php echo $user_role; ?></option>
    <option value="admin">Admin</option>
    <option value="subscriber">Subscriber</option>
    </select>
</div>
<!-- <div class="form-group">
    <label for="image">Post Image</label>
    <input type="file" id="image" name="post_image">
</div> -->
<div class="form-group">
    <label for="uname">Username</label>
    <input type="text" class="form-control" name="username" id="uname" value="<?php echo $username; ?>">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="user_email" id="email" value="<?php echo $user_email; ?>">
</div>

<input type="submit" value="Create User" name="update_user" class="btn btn-primary">
</form>


<?php
}

?>

<?php 
			
?>

<?php include "includes/footer.php"; ?>
