<?php   include 'view/includes/header.php'; 
        include 'controller/helpers/validation_get_var.php';
        
        //Create DB Object
        $db = new Database();

        //Check URL for Category
        if(isset($_GET['category'])) 
        {
            $category = test_input($_GET['category']);
            
            //Create Query
            $query = "SELECT * FROM posts WHERE category = ".$category;
                
            //Run query
            $posts = $db->select($query);              
            
        }   else 
            {
                //Create Query
                $query = "SELECT * FROM posts";
                
                //Run query
                $posts = $db->select($query);              
            }

            //Create Query
            $query_new = "SELECT * FROM categories";

            //Run Query
            $categories = $db->select($query_new);
?>
<?php if($posts) : ?>
    <?php while($row = $posts->fetch_assoc()) : ?>
        <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by 
            <a href="#"><?php echo $row['author']; ?></a></p>

            <p><?php echo $row['body']; ?></p>
            
          </div><!-- /.blog-post -->
    <?php endwhile; ?>
<?php else : ?>
    <p>There are no posts yet!</p>
<?php endif; ?>

<?php   include 'view/includes/footer.php'; ?>

        