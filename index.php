<?php
include 'view/includes/header.php';

//Create DB Object
$db = new Database();

//Create Query
$query = "SELECT * FROM posts";
$new_query = "SELECT * FROM categories";

//Run query
$posts = $db->select($query);

//Run Query 
$categories = $db->select($new_query);
?>
<!--  Show specific page info -->
<?php if ($posts) : ?>
    <?php while($row = $posts->fetch_assoc()) : ?>
    <div class="blog-post">
        <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
        <p class="blog-post-meta">
            <?php echo formatDate($row['date']); ?> by
            <a href="post.php?id=<?php echo urlencode($row['id']); ?>">
                <?php echo $row['author']; ?>
            </a>
        </p>

        <p>
            <?php echo shortenText($row['body']); ?>
        </p>
        <a class="readmore" href="post.php?id=<?php echo urlencode($row['id']); ?>">Read more...!</a>
    </div>
    <!-- /.blog-post -->
    <?php endwhile; ?>
<?php else : ?>
    <p>There are no posts yet!</p>
<?php endif; ?>

<?php include 'view/includes/footer.php'; ?>