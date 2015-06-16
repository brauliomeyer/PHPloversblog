<!-- Header of the Theme -->
<?php include 'view/includes/header.php'; ?>

<h1 class="blog-title">Admin Area</h1>
<h3>Editt</h3>
</div>

    <!-- ISSET Button Check -->
<?php
    $id = htmlentities($_GET['id']);

    //Create DB Object
    $db = new Database();

    //Create Query
    $query = "SELECT * FROM posts WHERE id = " . $id;

    //Run Query
    $post = $db->select($query)->fetch_assoc();

    //Create Query
    $query = "SELECT * FROM categories";
    //Run Query
    $categories = $db->select($query);

        //Event click on button submit
        if (isset($_POST['submit'])) 
        {
            //Assign Vars
            $title = mysqli_real_escape_string($db->link, $_POST['title']);
            $body = mysqli_real_escape_string($db->link, $_POST['body']);
            $category = mysqli_real_escape_string($db->link, $_POST['category']);
            $author = mysqli_real_escape_string($db->link, $_POST['author']);
            $tags = mysqli_real_escape_string($db->link, $_POST['tags']);
        
            //Simple Validation               
            if (empty($title) || empty($body) || empty($category) || empty($author)) 
            {            
                //Set Error
                $error = 'Please fill out all required fields';
            } else 
            {
                $query_posts = "UPDATE posts SET title = '$title', body = '$body', ".
                "category = '$category', author = '$author', tags = '$tags' WHERE id = " . $id;

                $update_row = $db->update($query_posts);
            }
        }   

    //Event click on button delete
    if (isset($_POST['delete'])) 
    {
        $query_posts = "DELETE FROM posts WHERE id = " . $id;

        $delete_row = $db->delete($query_posts);
    }
?>
<div class="row">

    <div class="col-sm-12 blog-main">
        <div class="container">
            <form role="form" method="post" action="edit_post.php?id=<?php echo $id; ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $post['title']; ?>" >
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea name="body" class="form-control" placeholder="Enter Post Body"><?php echo $post['body']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" class="form-group">
                        <?php while ($row = $categories->fetch_assoc()) : ?>
                            <?php
                            if ($row['id'] == $post['category']) {
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
                    <label>Author</label>
              <input name="author" type="text" class="form-control" placeholder="Enter Author Name" value="<?php echo $post['author']; ?>">
                </div>
                <div class="form-group">
                    <label>Tags</label>
                    <input name="tags" type="text" class="form-control" placeholder="Enter Tags" value="<?php echo $post['tags']; ?>">
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
<?php include 'view/includes/footer.php'; ?>