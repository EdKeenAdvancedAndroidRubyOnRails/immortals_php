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
          <h1>Contact Us</h1>
          <p class="lead"></p>
        </div>
        <div>
        
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
                    
                    echo '<div class="alert alert-success" role="alert">' . 
                            '<strong>Success!</strong> Thank you for signing up with us ' . $first_name . '</div>';
                }
                else
                {
                    echo '<p class="error alert alert-danger" role="alert">Signup incomplete: Enter appropriate information in all three fields.</p>';
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
                    <button class="btn btn-primary" data-toggle="modal"	data-target="#mymodal">Give Us a Call!</button>
                </div>
            </div>
            <hr />
        </div>
        
        <!-- Add email modal ------------------------------------------    -->
        <div class="modal fade" id="mysignupmodal">
          	<div class="modal-dialog">
            	<div class="modal-content">
          			<div class="modal-header">
          				  <h3>Let us keep you up to date.</h3>
          			</div>
          			<div class="modal-body">
          			    <form method="post" action="contact.php">
      				    <fieldset class="form-group">
                            <label for="firstname">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter first name">
                            <label for="lastname">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter last name">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                            <p class="text-muted">We will never share your email with anyone else.</p>
                            <input type="submit" class="btn btn-primary" name="submitemailform" id="submitemailform" value="Submit" />
                        </fieldset>
                        </form>
          			</div>
          			<div class="modal-footer">
      				    <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
          			</div>
          		</div>
          	</div>
        </div>
        <!-- End of modal --------------------------------- -->
  
        
        <!-- Phone us! modal ------------------------------------------    -->
        <div class="modal fade" id="mymodal">
          	<div class="modal-dialog">
            	<div class="modal-content">
          			<div class="modal-header">
          				  <h3>Give Us a Call!</h3>
          			</div>
          			<div class="modal-body">
      				    <p>Call from 9 am to 5 pm M - F. If we are unable to answer, leave a message, we will get right back to you.</p>
      				    <p>(608) 555 - 1234</p>
          			</div>
          			<div class="modal-footer">
      				    <button type="button" name="close" class="btn btn-default" data-dismiss="modal">Close</button>
          			</div>
          		</div>
          	</div>
        </div>
        <!-- End of modal --------------------------------- -->
  
        <?php
            require_once('footer.php');
        ?>
  
    </body>
</html>
