<?php include "../includes/db.php";?>
<?php include "includes/header.php";?>

<div id="wrapper">

<!-- Navigation -->
<?php include "includes/navigation.php"?>


<div id="page-wrapper">


<div class="row">
    <div class="col-lg-12">
    <h1 class="page-header">
    Add User
    <small>Author</small>
    </h1>


    <?php
if (isset($_POST["create_user"])) {
    
    $username = $_POST["username"];
    $user_firstname = $_POST["user_firstname"];
    $user_lastname = $_POST["user_lastname"];
    $user_email = $_POST["user_email"];
    $user_password = $_POST["user_password"];
    $user_role = $_POST["user_role"];

    // $post_image = $_FILES["post_image"]["name"];
    // $post_image_temp = $_FILES["post_image"]["tmp_name"];

    // $post_comment_count = $_POST["post_comment_count"];

    // move_uploaded_file($post_image_temp, "../img/uploads/$post_image");

    $query = "INSERT INTO users(username,user_password, user_firstname,user_lastname,user_email,user_role) VALUES('{$username}','{$user_password}','{$user_firstname}','{$user_lastname}','{$user_email}','{$user_role}')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
        die("Query Failed" . mysqli_error($connection));
    } else {
        echo "<div class='alert alert-success' role='alert'>
                    User added successfully!
                </div>";
    }

}
?>

<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="fname">First name</label>
        <input type="text" class="form-control" name="user_firstname" id="fname" >
    </div>
    <div class="form-group">
        <label for="lname">Last name</label>
        <input type="text" class="form-control" name="user_lastname" id="lname" >
    </div>

<div class="form-group">
<select name="user_role" id="">
		<option value="subscriber">Select Options</option>
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
        <input type="text" class="form-control" name="username" id="uname" >
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="user_email" id="email">
    </div>

    <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" class="form-control" name="user_password" id="pwd">
    </div>
    <input type="submit" value="Create User" name="create_user" class="btn btn-primary">
</form>

<?php include "includes/footer.php";?>
