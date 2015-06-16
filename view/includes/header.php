<?php include 'controller/helpers/error_reporting.php'; ?>
<?php include 'controller/config/config.php'; ?>
<?php include 'module/Database.php'; ?>
<?php include 'controller/helpers/format_helper.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon.ico">

        <title>PHPLoversBlog</title>
        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="view/css/blog.css" rel="stylesheet">
        <script src="controller/js/ie-emulation-modes-warning.js"></script>
        <script src="lib/jquery/jquery-1.11.2.min.js" ></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="blog-masthead">
            <div class="container">
                <nav id="tim" class="blog-nav">
                    <a class="blog-nav-item active" href="index.php">Home</a>
                    <a class="blog-nav-item" href="posts.php">All posts</a>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="logo">
                <img src="images/robot_design_by_freepik.png" alt="robot_design_by_freepik">
            </div>



            <div class="blog-header">
                <h1 class="blog-title">PHPLovers Blog</h1>
                <p class="lead blog-description">News, tuts, videos &amp; more!</p>
            </div>

            <div class="row">

                <div class="col-sm-8 blog-main">

