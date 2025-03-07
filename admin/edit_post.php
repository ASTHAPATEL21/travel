<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<div id="wrapper">

<!-- Navigation -->
<?php include "includes/navigation.php" ?>


<div id="page-wrapper">


<div class="row">
    <div class="col-lg-12">
    <h1 class="page-header">
    Edit Post
    <small>Author</small>
    </h1>



<?php 

if(isset($_GET["edit"])){
$the_post_id = $_GET["edit"];

$query = "SELECT * FROM posts WHERE post_id = $the_post_id";
$select_all_posts = mysqli_query($connection, $query);

while($row = mysqli_fetch_assoc($select_all_posts)){
    $post_id = $row["post_id"];
    $post_tags = $row["post_tags"];
    $post_comment_count = $row["post_comment_count"];
    $post_status = $row["post_status"];
    $post_category_id = $row["post_category_id"];
    $post_title = $row["post_title"];
    $post_author = $row["post_author"];
    $post_date = $row["post_date"];
    $post_image = $row["post_image"];
    $post_content = $row["post_content"]; 
}

if(isset($_POST["update_post"])){
    $post_title = $_POST["post_title"];
    $post_author = $_POST["post_author"];
    $post_status = $_POST["post_status"];
    $post_category_id = $_POST["post_category"];

    $post_image = $_FILES["post_image"]["name"];
    $post_image_temp = $_FILES["post_image"]["tmp_name"];

    $post_tags = $_POST["post_tags"];
    $post_content = $_POST["post_content"]; 

    move_uploaded_file( $post_image_temp,"../img/uploads/$post_image");

    if(empty($post_image)){
        $query = "SELECT * FROM posts WHERE post_id = $the_post_id";
        $select_image = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($select_image)){
            $post_image = $row["post_image"];
        }
    }

    
    $query  ="UPDATE posts SET ";
    $query .="post_title = '{$post_title}', ";
    $query .="post_author = '{$post_author}', ";
    $query .="post_date = now(), ";
    $query .="post_image = '{$post_image}', ";
    $query .="post_content = '{$post_content}', "; 
    $query .="post_tags = '{$post_tags}', ";
    $query .="post_category_id = '{$post_category_id}', ";
    $query .="post_status = '{$post_status}' ";
    $query .="WHERE post_id = $post_id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query Failed" . mysqli_error($connection));
    }else{
        echo "<div class='alert alert-success' role='alert'>
                    Post updated successfully!
                </div>";
    }

}

    ?>

    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" class="form-control" name="post_id" id="id" value="<?php echo $post_id; ?>">
    </div>
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="post_title" id="title" value="<?php echo $post_title; ?>" >
    </div>
    <div class="form-group">
        <select name="user_role" id="">
        <?php
$query = "SELECT * FROM users";
$select_all_users = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_all_users)) {
    $user_id = $row["user_id"];
    $user_role = $row["user_role"];
    ?>
				<option value="<?php echo $user_id; ?>"><?php echo $user_role; ?></option>
				<?php
}
?>
        </select>
</div>
    <div class="form-group">
        <select name="post_category" id="post_category">
        <?php 
			$query = "SELECT * FROM categories";
			$select_all_categories = mysqli_query($connection, $query);

		    while($row = mysqli_fetch_assoc($select_all_categories)){
				$cat_id = $row["cat_id"];
				$cat_title = $row["cat_title"];
				?>
				<option value="<?php echo $cat_id;?>"><?php echo $cat_title; ?></option>
				<?php
			}
	?> 
        </select>
    </div>
    <div class="form-group">
        <label for="tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags" id="tags" value="<?php echo $post_tags; ?>">
    </div>
    <div class="form-group">
        <img src="../img/uploads/<?php echo $post_image; ?>" width="100" alt="<?php echo $post_image; ?>">
        <input type="file" name="post_image">
    </div>
    <div class="form-group">
        <label for=status">Post Status</label>
        <input type="text" class="form-control" name="post_status" id=status" value="<?php echo $post_status; ?>">
    </div>
    
    <div class="form-group">
        <label for="author">Post Author</label>
        <input type="text" class="form-control" name="post_author" id="author" value="<?php echo $post_author; ?>">
    </div>
    
    <div class="form-group">
        <label for="content">Post Content</label>
        <br>
        <textarea name="post_content" id="content" cols="170" rows="5" value="<?php echo $post_content; ?>"><?php echo $post_content; ?></textarea>
    </div>
    <input type="submit" value="Update" name="update_post" class="btn btn-primary">
</form>

<?php
}

?>

<?php 
			
?>

<?php include "includes/footer.php"; ?>
