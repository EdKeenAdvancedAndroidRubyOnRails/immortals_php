<?php
    require_once('connectvars.php');
    
    /* Enters the given parameters into the database
    *  @param $dbc the database connection
    *  @param $name product name
    *  @param $description product description
    *  @param $price unit price
    *  @param $picture product picture
    *  @param $qty_on_hand Quantity of product on hand
    */
    function enterIntoDb($dbc, $name, $description, $price, $picture, $qty_on_hand)
    {
        $query = "INSERT INTO products (name, description, price, picture, qty_on_hand) VALUES ('$name', '$description', '$price', '$picture', '$qty_on_hand')";
        mysqli_query($dbc, $query);
        mysqli_close($dbc);
    }
    
    /* Displays all of the products in the database
    *  with checkboxs for deleting.
    *  @param $dbc the database connection
    */
    function displayProducts($dbc)
    {
        // Delete the customer rows (only if the form has been submitted)
        if (isset($_POST['submit']) && isset($_POST['todelete'])) 
        {
            //variable to keep a running count of removed items
            $count = 0;
          
            foreach ($_POST['todelete'] as $delete_id) 
            {
                $query = "DELETE FROM products WHERE product_id = $delete_id";
                $count++;
                
                mysqli_query($dbc, $query)
                        or die('Error querying database.');
            } 
        
            echo $count . '' . ' Product(s) removed.<br />';
        }
        
        // Display rows with checkboxes for deleting
        $query = "SELECT * FROM products";
        $result = mysqli_query($dbc, $query);
        
        echo '<table class="table table-bordered">' . 
                '<tr><th>Delete</th><th>Name</th><th>Description</th><th>Price</th><th>Quantity On Hand</th></tr>';
        
        while ($row = mysqli_fetch_array($result)) 
        {
            // Each entry is a link to the editProduct page
            echo '<tr><td><input type="checkbox" value="' . $row['product_id'] . '" name="todelete[]" /></td>' .
                    '<td><a href="editProduct.php?id=' . $row['product_id'] . '">' . $row['name'] . '</a></td>' .
                    '<td><a href="editProduct.php?id=' . $row['product_id'] . '">' . $row['description'] . '</a></td>' .
                    '<td><a href="editProduct.php?id=' . $row['product_id'] . '">' . $row['price'] .'</a></td>' .
                    '<td><a href="editProduct.php?id=' . $row['product_id'] . '">' . $row['qty_on_hand'] . '</a></td></tr>';
        }
        
        echo '</table>';
        mysqli_close($dbc);
    }
?>