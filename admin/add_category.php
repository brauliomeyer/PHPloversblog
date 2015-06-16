<!-- Header of the Theme -->
<?php   include 'view/includes/header.php'; ?>

    <h1 class="blog-title">Admin Area</h1>
        <h3>Category</h3>
      </div>

<!-- ISSET Button Check -->
<?php

    //Create DB Object
    $db = new Database();

    if(isset($_POST['submit']) == "submit")
    {   
        //Assign Vars
        $name = mysqli_real_escape_string($db->link, $_POST['name']);
        
        //Simple validation
        if(empty($name)) 
        {
            $error = 'Please fill out all required fields';
        }   else
            {
                $query_posts =  "INSERT INTO categories (name) ". 
                                " VALUES ('$name')";
                $update_row = $db->update($query_posts);            
            }             
    }
?><div class="row">

        <div class="col-sm-12 blog-main">

<!-- Main of the Theme -->
<div class="container">
<form role="form" method="post" action="add_category.php">
    <div class="form-group">
        <label for="name">Category</label>
        <input name="name" type="text" class="form-control" placeholder="Enter category!">
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

        