<?php
    // Insert the page head element
    $page_title = '- Home';
    require_once ('head.php');
?>

  <body id="home" class="grad">
    
    <?php
        // Insert the navbar element
        require_once ('header.php');
    ?>
    
    <div class="jumbotron homebanner">
      <h1>Welcome</h1>
      <p class="lead"></p>
    </div>

    <div class="container">
        <hr>
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Hall of Learning</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="halloflearning.php" role="button">Enter &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Spiritual Warrior Training</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Personal Consultations</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">Schedule a Time &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Sign Up For Our Newsletter</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="newsletter.php" role="button">Sign Up Now &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Purchase Products</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="products.php" role="button">View Products &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Contact Us</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
            <p><a class="btn btn-default" href="contact.php" role="button">Contact Us &raquo;</a></p>
          </div>
        </div>
      <hr>
    </div>

    <?php
        require_once('footer.php');
    ?>

  </body>
</html>
