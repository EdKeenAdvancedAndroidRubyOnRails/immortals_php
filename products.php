<?php
    // Insert the page head element
    $page_title = '- Purchase Products';
    require_once ('head.php');
?>

  <body id="products" class="grad">
    
    <?php
        // Insert the navbar element
        require_once ('header.php');
    ?>
    
    <div class="jumbotron homebanner">
      <h1>Products</h1>
      <p class="lead">Explore our line of quality personal wellness products.</p>
    </div>
    
    <div class="container">
      
      <?php
          require_once('appvars.php');
          require_once('connectvars.php');

          // Connect to the database 
          $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                  or die('Error connecting to MySQL server.'); 
      
          // Retrieve the user data from MySQL
          $query = "SELECT product_id, name, description, price, qty_on_hand, picture FROM products";
          $data = mysqli_query($dbc, $query);
      
          // Loop through the array of user data, formatting it as HTML
          // using List Group - Custom content from Bootstrap
          echo '<h4>Our Current Inventory Includes: </h4><br /><br />' .
                  '<div class="list-group">';

          while ($row = mysqli_fetch_array($data)) 
          {
              if (is_file(I_UPLOADPATH . $row['picture']) && filesize(I_UPLOADPATH . $row['picture']) > 0) 
              {
                  echo '<li class="list-group-item"><img src="' . I_UPLOADPATH . $row['picture'] . '" alt="' . $row['name'] . '" />';
              }
              else   // If there is no picture available
              {
                  echo '<a href="#" class="list-group-item"><img src="' . I_UPLOADPATH . 'nopic.jpg' . '" alt="' . $row['name'] . '" /></a>';
              }
              
              
              echo '<h4 class="list-group-item-heading">' . $row['name'] . '</h4>' .
                      '<p class="list-group-item-text">' . $row['description'] . '<br />Price: ' . $row['price'] . '</p></li><hr>';

          }
          
          echo '</div>';

          mysqli_close($dbc);
      ?>
    
    </div>

    <?php
        require_once('footer.php');
    ?>
    
    </body>
</html>
