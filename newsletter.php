<?php
    // Insert the page head elements
    $page_title = '- Sign up for our newsletter!';
    require_once ('head.php');
?>

  <body class="grad">
    
    <?php
        // Insert the navbar element
        require_once ('header.php');
    ?>
      
    <div class="jumbotron homebanner">
      <h2>Email Newsletter Signup</h2>
      <p class="lead">Let us update you with important information.</p>
    </div>
    
    <div class="container">
      <form role = "form">
        <div class = "form-group">  
          <label for = "firstName">First Name</label>
          <input type = "text" class = "form-control" id = "firstName" name = "firstName" placeholder = "Enter First Name">
          <label for = "lastName">Last Name</label>
          <input type = "text" class = "form-control" id = "lastName" name = "lastName" placeholder = "Enter Last Name">
          <label for = "name">Email</label>
          <input type = "text" class = "form-control" id = "email" placeholder = "Enter Email">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <br />
      
      <p>Get on our email list so we can keep you up to date.  The Immortals promise never to 
              share your information with any outside agency.</p>
        
    </div>  
  
    <?php
        // Insert the footer element
        require_once('footer.php');
    ?>
    
  </body>
</html>