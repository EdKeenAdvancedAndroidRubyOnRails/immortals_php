<?php
    // Insert the page head element
    $page_title = '- Admin Page';
    require_once ('head.php');
?>

  <body id="admin" class="grad">
    
    <?php
        // Insert the navbar element
        require_once ('header.php');
    ?>
    
    <div class="jumbotron homebanner">
      <h1>Product Database</h1>
      <p class="lead"></p>
    </div>
    <div class="container">
      <h1>Administrator Only</h1>
      <h2>Add, Edit and Delete Products.</h2><br />
      <div>
          <p><a class="btn btn-primary btn-lg" id="button" href="#" role="button">Add New Product</a></p>
      </div>
      <div>
        <form method='post' id="form" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        </form>
      </div>
    </div>
    <?php
        require_once('footer.php');
    ?>

  </body>
</html>
