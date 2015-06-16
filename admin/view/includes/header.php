<?php   include 'controller/helpers/error_reporting.php'; ?>
<?php   include 'controller/config/config.php'; ?>
<?php   include 'module/Database.php'; ?>
<?php   include 'controller/helpers/format_helper.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico">

    <title>Admin Area | Project Mars</title>
    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="view/css/blog.css" rel="stylesheet">
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/lib/bootstrap/js/bootstrap.min.js"></script>    
  </head>

  <body>
       <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Dashboard</a>
          <a class="blog-nav-item" href="add_post.php">Add Post</a>        
          <a class="blog-nav-item" href="add_category.php">Add Category</a>
          <a class="blog-nav-item pull-right" href="../index.php">Visit Blog</a>
        </nav>
      </div>
    </div>
    <div class="container">
    <div class="logo">
        <img src="images/robot_design_by_freepik.png" alt="robot_design_by_freepik">
    </div>
         
      <div class="blog-header">
        <?php if(isset($_GET['msg'])) : ?>
          <div class="alert alert-success"><?php echo htmlentities($_GET['msg']); ?></div>
        <?php endif; ?>