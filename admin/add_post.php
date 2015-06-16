<!-- Header of the Theme -->
<?php   include 'view/includes/header.php'; ?>

    <h1 class="blog-title">Admin Area</h1>
        <h3>Post</h3>
      </div>

<!-- ISSET Button Check -->
<?php

    //Create DB Object
    $db = new Database();

    if(isset($_POST['submit']) == "submit")
    {   
        //Assign Vars
        $title = mysqli_real_escape_string($db->link, $_POST['title']);
		$body = mysqli_real_escape_string($db->link, $_POST['body']);
		$category = mysqli_real_escape_string($db->link, $_POST['category']);
		$author = mysqli_real_escape_string($db->link, $_POST['author']);
		$tags = mysqli_real_escape_string($db->link, $_POST['tags']);
        
        //Simple validation
        if(empty($title) || empty($body) || empty($category) || empty($author) || empty($author) || empty($tags)) 
        {
            $error = 'Please fill out all required fields';
        }   else
            {
                $query_posts =    "INSERT INTO posts (title,body,category,author,tags) ". 
                            "VALUES ('$title','$body','$category','$author','$tags')";
                $insert_row = $db->insert($query_posts);            
            }             
    }
?>
<!-- DB Queries -->
<?php 
        //Create Query
        $query_categories = "SELECT * FROM categories";
        
        //Run query
        $categories = $db->select($query_categories);  
?>
<div class="row">

        <div class="col-sm-12 blog-main">

<!-- Main of the Theme -->
<div class="container">
<form role="form" method="post" action="add_post.php">
    <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter title!">
    </div>
        <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" type="text" cols="10" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="category">Category</label>
        <select name="category" class="form-group">
		<?php while($row = $categories->fetch_assoc()) : ?>
			<?php if($row['id'] == $post['category']){
				$selected = 'selected';
			} else {
				$selected = '';
			}
			?>	
			<option <?php echo $selected; ?> value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
		<?php endwhile; ?>                        
        </select>
    </div>    
    <div class="form-group">
        <label for="author">Author</label>
        <input name="author" type="text" class="form-control" placeholder="Enter author name!">
    </div>
    <div class="form-group">
        <label for="tags">Tags</label>
        <input name="tags" type="text" class="form-control" placeholder="Enter tags!">
    </div>
<div class="form-group">
    <input name="submit" type="submit" class="btn btn-success" value="Submit">
    <a name="cancel" class="btn btn-warning" href="index.php">Cancel</a>
    <button name="delete" type="submit" class="btn btn-danger">Delete</button>
  </div>
</form>
</div>

</div>
</div>
<!-- Footer of the Theme -->
<?php   include 'view/includes/footer.php'; ?>

        