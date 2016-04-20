<?php
    require_once('authorize.php');
    // Insert the page head element --------
    $page_title = '- Edit Product';
    require_once ('head.php');
?>

  <body id="edit-product" class="grad">
    
    <?php
        // Insert the navbar element ------
        require_once ('header.php');
    ?>
    
    <div class="jumbotron homebanner">
      <h1>Product Database</h1>
      <p class="lead"></p>
    </div>
    
    <div class="container">
      <h1>Administrator Only</h1>
      <h2>Edit Product.</h2><br />
      
      <?php
          require_once('appvars.php');
          require_once('connectvars.php');
      
          // Connect to the database
          $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                  or die('Error connecting to MySQL server.');
      
          // Grab the profile data from the POST
          if (isset($_POST['submit'])) 
          {
              $name = mysqli_real_escape_string($dbc, trim($_POST['name']));
              $description = mysqli_real_escape_string($dbc, trim($_POST['description']));
              $price = mysqli_real_escape_string($dbc, trim($_POST['price']));
              $old_picture = mysqli_real_escape_string($dbc, trim($_POST['old_picture']));
              $new_picture = mysqli_real_escape_string($dbc, trim($_FILES['new_picture']['name']));
              $new_picture_type = $_FILES['new_picture']['type'];
              $new_picture_size = $_FILES['new_picture']['size'];
              $qty_on_hand = mysqli_real_escape_string($dbc, trim($_POST['qty_on_hand']));
              list($new_picture_width, $new_picture_height) = getimagesize($_FILES['new_picture']['tmp_name']);
              $error = false;
              
              // Validate the image file.
              if ((($new_picture_type == 'image/gif') || ($new_picture_type == 'image/jpeg') || ($new_picture_type == 'image/pjpeg') ||
                      ($new_picture_type == 'image/png')) && ($new_picture_width <= I_MAXIMGWIDTH) && ($new_picture_height <= I_MAXIMGHEIGHT)) 
              {
                  if ($_FILES['file']['error'] == 0) 
                  {
                      // Move the file to the target upload folder
                      $target = I_UPLOADPATH . basename($new_picture);
                      if (move_uploaded_file($_FILES['new_picture']['tmp_name'], $target)) 
                      {
                          // If the new picture file move is successful, make sure any old picture is deleted
                          if (!empty($old_picture) && ($old_picture != $new_picture)) 
                          {
                              @unlink(I_UPLOADPATH . $old_picture);
                          }
                          
                      }
                      else 
                      {
                          // The new picture file move failed, so delete the temporary file and set the error flag
                          @unlink($_FILES['new_picture']['tmp_name']);
                          $error = true;
                          echo '<p class="error">Sorry, there was a problem uploading your picture.</p>';
                      }
                  }
              }
              else 
              {
                  echo '<p class="error">The image must be a GIF, JPEG, or PNG image file no greater than ' . I_MAXIMGWIDTH  . 
                          ' px in width and ' . I_MAXIMGHEIGHT . ' px in height for display uniformity.</p>';
                  $error = true;
              } // End of image validation -----------------
              
              // Update the profile data in the database
              if (!$error) 
              {
                  enterIntoDb($dbc, $name, $description, $price, $new_picture, $qty_on_hand);
                  @unlink($_FILES['new_picture']['tmp_name']);
                  
                  echo 'Item successfully entered into database.';
              }
          }
          else 
          {
              // Grab the profile data from the database
              $query = "SELECT product_id, name, description, price, picture, qty_on_hand FROM products WHERE product_id = '" . $_GET['id'] . "'";
              $data = mysqli_query($dbc, $query);
              $row = mysqli_fetch_array($data);
          
              if ($row != NULL) 
              {
                  $name = $row['name'];
                  $description = $row['description'];
                  $price = $row['price'];
                  $old_picture = $row['picture'];
                  $qty_on_hand = $row['qty_on_hand'];
              }
              else 
              {
                  echo '<p class="error">There was a problem accessing your product.</p>';
              }
          }
              
      ?>
      
      <div>
        <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
          <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo MM_MAXFILESIZE; ?>" />
          <div class='form-group'><label for='name'>Name</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php if (!empty($name)) echo $name; ?>" /></div>
          <div class='form-group'><label for='description'>Description</label>
          <input type="textarea" class="form-control" id="description" name="description" value="<?php if (!empty($description)) echo $description; ?>" /></div>
          <div class='form-group'><label for='price'>Price</label>
          <input type='text' class='form-control' name='price' value="<?php if (!empty($price)) echo $price; ?>" /></div>
          <input type="hidden" name="old_picture" value="<?php if (!empty($old_picture)) echo $old_picture; ?>" />
          <div class='form-group'><label for="new_picture">Picture:</label>
          <input type="file" id="new_picture" name="new_picture" /></div>
          
            <?php if (!empty($old_picture)) 
            {
                echo '<img class="profile" src="' . I_UPLOADPATH . $old_picture . '" alt="Profile Picture" />';
            } ?>
          
          <div class='form-group'><label for='qty_on_hand'>Quantity On Hand: </label>
          <input type='text' class='form-control' name='qty_on_hand' value="<?php if (!empty($qty_on_hand)) echo $qty_on_hand; ?>" /></div>
          <input type="submit" value="Save Information" name="submit" />
        </form>
      </div>
    </div>
    
    <?php
        // Display the footer ------
        require_once('footer.php');
    ?>
    
  </body>
</html>
