<?php
    require_once('authorize.php');
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
            <h1>Products Database</h1>
            <p class="lead"></p>
        </div>

        <div class="container">
         
            <h1>Administrator Only</h1><br />
            
            <h4>Choose a database to edit:</h4>
            <div class="btn-group" role="group">
                <a class="btn btn-primary active">Products</button>
                <a class="btn btn-primary" href="admin_friends.php">Contacts</a>
            </div>
            
            <h2>Add, Delete and Edit Products.</h2><br />
            <div>
                <p><a class="btn btn-primary btn-lg" id="button" href="#" role="button">Add New Product</a></p><br />
            </div>
      
            <form enctype="multipart/form-data" method="post" id="add_product" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              
                <?php
                    require_once('appvars.php');
                    require_once('connectvars.php');
                    require_once('edfunctions.php');
        
                    if (isset($_POST['submit_product'])) 
                    {
                        // Connect to the database
                        $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                                or die('Error connecting to MySQL server.');
                  
                        $name = mysqli_real_escape_string($dbc, trim($_POST['name']));
                        $description = mysqli_real_escape_string($dbc, trim($_POST['description']));
                        $price = mysqli_real_escape_string($dbc, trim($_POST['price']));
                        $qty_on_hand = mysqli_real_escape_string($dbc, trim($_POST['qty_on_hand']));
                        $picture = mysqli_real_escape_string($dbc, trim($_FILES['picture']['name']));
                        $picture_type = $_FILES['picture']['type'];
                        $picture_size = $_FILES['picture']['size'];
                        list($picture_width, $picture_height) = getimagesize($_FILES['picture']['tmp_name']);
                        
                        // Validate the uploaded information.
                        if ((!empty($picture)) && (!empty($name)) && (!empty($price))) 
                        {
                            // Validate the image file.
                            if ((($picture_type == 'image/gif') || ($picture_type == 'image/jpeg') || ($picture_type == 'image/pjpeg') ||
                                    ($picture_type == 'image/png')) && ($picture_width <= I_MAXIMGWIDTH) && ($picture_height <= I_MAXIMGHEIGHT)) 
                            {
                                // Move the file to the target upload folder
                                $target = I_UPLOADPATH . $picture;
                                if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) 
                                {
                                    enterIntoDb($dbc, $name, $description, $price, $picture, $qty_on_hand);
        
                                    echo 'Item successfully entered into database.';
                                }
                                else 
                                {
                                    echo '<p class="error">Sorry, there was a problem uploading your image.</p>';
                                }
                            }
                            else 
                            {
                                echo '<p class="error">The image must be a GIF, JPEG, or PNG image file no greater than ' . I_MAXIMGWIDTH  . 
                                        ' px in width and ' . I_MAXIMGHEIGHT . ' px in height for display uniformity.</p>';
                            }
                            
                            // Try to delete the temporary image file
                            @unlink($_FILES['picture']['tmp_name']);
                        }
                        else 
                        {
                            echo '<p class="error">Name, picture and price are required.</p>';
                        }
                        
                      
                    } // End of  if (isset($_POST['submit_product'])) statement.
                ?>
            </form>
            
            <h3>Current Products in Database: </h3>  
            <h4>Click on a product to edit.</h4>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
              
                <?php
                    require_once('connectvars.php');
                    require_once('edfunctions.php');
                    
                    // Connect to the database
                    $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                            or die('Error connecting to MySQL server.');

                    displayProducts($dbc);
                ?>
              
                <input class="btn btn-primary" type="submit" name="submit" value="Remove Selected Items From Database" />
            
            </form>
        </div>

        <?php
            // Display the footer ------
            require_once('footer.php');
        ?>
  
    </body>
</html>
