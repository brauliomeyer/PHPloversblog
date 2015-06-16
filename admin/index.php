<!-- Header of the Theme -->
<?php include 'view/includes/header.php'; ?>
<div class="container">
    <h1 class="blog-title">Admin Area</h1>
</div>
<!-- DB Queries -->
<?php
//Create DB Object
$db = new Database();

/*
 * Create Query for Categories ordered by posts title
 */
$query_posts = "SELECT posts.*, categories.name" .
        " FROM posts INNER JOIN categories" .
        " ON posts.category = categories.id" .
        " ORDER BY posts.id DESC";

$query_categories = "SELECT * FROM categories" .
        " ORDER BY id DESC";
//Run query
$posts = $db->select($query_posts);
$categories = $db->select($query_categories);
?>

<div class="row">

    <div class="col-sm-12 blog-main">

        <!-- Main of the Theme -->
        <div class="container">
            <table class="table table-striped">
                <h2>Post</h2>
                <tr>
                    <th>#ID</th>
                    <th>#Title</th>
                    <th>#Category</th>
                    <th>#Author</th>
                    <th>#Date</th>
                </tr>
                <?php while ($row = $posts->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td><?php echo formatDate($row['date']); ?></td>
                    </tr>
                <?php endwhile; ?>    
            </table>
        </div>
        <div class="container">
            <table class="table table-striped">
                <h2>Category</h2>
                <tr>
                    <th>#ID</th>
                    <th>#Name</th>
                </tr>
                <?php while ($row = $categories->fetch_assoc()) : ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><a href="edit_category.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>			
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>

    </div>
</div>
<!-- Footer of the Theme -->
<?php include 'view/includes/footer.php'; ?>

