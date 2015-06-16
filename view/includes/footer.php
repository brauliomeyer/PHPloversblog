        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p><?php echo $site_description; ?></p>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>
			<?php if($categories) : ?>
            <ol class="list-unstyled">
				<?php while($new_row = $categories->fetch_assoc()) : ?>
<li><a href="posts.php?category=<?php echo $new_row['id']; ?>"><?php echo $new_row['name']; ?></a></li>
				<?php endwhile; ?>
            </ol>
			<?php else : ?>
				<p>There are no categories yet</p>
			<?php endif; ?>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->


    <footer class="blog-footer">
          <p>Blog by <a href="http://www.brauliodesignresearch.com">BDR</a>.</p>
          <p><a href="#">Back to top</a></p>
          <div class="logo-footer">
        <img src="images/robot_design_by_freepik.png" alt="robot_design_by_freepik">
    </div>
    </footer>
  </body>
</html>
