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
            <!-- Row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <h2>Hall of Learning</h2>
                    <p>Follow the path of the spiritual warrior and discover the wisdom of the Ancients.  Browse our repository of selected videos and texts.</p>
                    <p><a class="btn btn-default" href="halloflearning.php" role="button">Enter &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Our Online Store</h2>
                    <p>Take a look at our quality wellness products.  We carry products which we know from personal experiences to be beneficial to body and mind.</p>
                    <p><a class="btn btn-default" href="products.php" role="button">View Products &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Contact Us</h2>
                    <p>Schedule a personal consultation, ask a question regarding our products or services, sign up for our email, or just say hello.</p>
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
