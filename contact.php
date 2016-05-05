<?php
    // Insert the page head element
    $page_title = '- Contact Us';
    require_once ('head.php');
?>

    <body id="products" class="grad">
      
        <?php
            // Insert the navbar element
            require_once ('header.php');
        ?>
        
        <div class="jumbotron homebanner">
            <img src="images/Immortals-logo-green.jpg" alt="logo">
            <h1>Contact Us</h1>
            <p class="lead"></p>
        </div>
        <div>
            <img src="images/contact.jpg" class="img-rounded" alt="fingers touching"></img>
            <h3>Feel free to contact us. We will answer any questions that you may have.</h3>
        
        <?php
            require_once('connectvars.php');
            require_once('edfunctions.php');
            
            // Connect to the database
                $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                        or die('Error connecting to MySQL server.');

            if (isset($_POST['submitemailform'])) 
            {
                // Grab the profile data from the POST
                $first_name = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
                $last_name = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
                $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
                
                   
                if (!empty($first_name) && !empty($last_name) && !empty($email))
                {
                
                    enterEmailIntoDb($dbc, $first_name, $last_name, $email);
                    
                    echo '<div class="alert alert-success alert-dismissible" role="alert">' . 
                            '<strong>Success!</strong> Thank you for signing up with us ' . $first_name . '</div>';
                }
                else
                {
                    echo '<p class="error alert alert-danger alert-dismissible" role="alert">Signup incomplete: Enter appropriate information in all three fields.</p>';
                }
            }
        ?>
        
        </div>
        
        <div class="container">
            <hr />
            <div class="row">
                <div>
                    <h4>Email Us @</h4>
                    <h4><a href="mailto:edkeen@yahoo.com"> quantuministries@gmail.com</a></h4>
                    </div>
                <hr />
                <div>
                    <h4>Join Our Mailing List!</h4>
                    <button type="button" class="btn btn-primary" data-toggle="modal"	data-target="#mysignupmodal">Signup</button>
                </div>
                <hr />
                <div>
                    <h4>By Phone:</h4>
                    <button class="btn btn-primary" data-toggle="modal"	data-target="#myphonemodal">Give Us a Call!</button>
                </div>
            </div>
            <hr />
        </div>
        
        <?php
            // Insert modal element
            require('edModals.php');
        ?>

        <?php
            require_once('footer.php');
        ?>
  
    </body>
</html>
