<?php include "../includes/db.php"; ?>
<?php include "includes/header.php"; ?>

<div id="wrapper">

<!-- Navigation -->
<?php include "includes/navigation.php" ?>


<div id="page-wrapper">


<div class="row">
    <div class="col-lg-12">
    <h1 class="page-header">
    Add Post
    <small>Author</small>
    </h1>


    <?php 
			if(isset($_POST["create_post"])){
                $_POST["post_title"];

                $post_title = $_POST["post_title"];
				$post_author = $_POST["post_author"];
                $post_status = $_POST["post_status"];
				$post_category_id = $_POST["post_category_id"];

                $post_image = $_FILES["post_image"]["name"];
                $post_image_temp = $_FILES["post_image"]["tmp_name"];

				$post_tags = $_POST["post_tags"];
                $post_content = $_POST["post_content"]; 
                $post_date = date('d-m-y');
				// $post_comment_count = $_POST["post_comment_count"];

                move_uploaded_file( $post_image_temp,"../img/uploads/$post_image");
				
				$query = "INSERT INTO posts(post_category_id, post_title,post_author,post_date,post_image,post_content,post_tags,post_status) VALUES({$post_category_id},'{$post_title}','{$post_author}','{$post_date}','{$post_image}','{$post_content}','{$post_tags}','{$post_status}' )";

                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("Query Failed" . mysqli_error($connection));
                }else{
                    echo "<div class='alert alert-success' role='alert'>
                    Post added successfully!
                </div>";
                }
				
			}
?>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="hidden" class="form-control" name="post_id" id="id" >
    </div>
    <div class="form-group">
        <label for="title">Post Title</label>
        <input type="text" class="form-control" name="post_title" id="title" >
    </div>
<div class="form-group">
        <select name="post_category_id" id="post_category_id">
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
    <!-- <div class="form-group">
        <label for="category_id">Post Category ID</label>
        <input type="text" class="form-control" name="post_category_id" id="category_id" >
    </div> -->
    <div class="form-group">
        <label for="tags">Post Tags</label>
        <input type="text" class="form-control" name="post_tags" id="tags" >
    </div>
    <div class="form-group">
        <label for="image">Post Image</label>
        <input type="file" id="image" name="post_image">
    </div>
    <div class="form-group">
        <label for=status">Post Status</label>
        <input type="text" class="form-control" name="post_status" id=status" >
    </div>
    
    <div class="form-group">
        <label for="author">Post Author</label>
        <input type="text" class="form-control" name="post_author" id="author">
    </div>
    
    <div class="form-group">
        <label for="content">Post Content</label>
        <br>
        <textarea name="post_content" id="content" cols="170" rows="5"></textarea>
    </div>
    <input type="submit" value="submit" name="create_post" class="btn btn-primary">
</form>

<?php include "includes/footer.php"; ?>
