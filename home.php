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
            <div class="intro-text">
                <p>This humble site is about more than Immortality. You may ask, what more is there?
                There is birth and death and the chosen life between this linear concept. If we look at life, 
                as we may at the time of our death, we might see it as a whole event, laid out as the pages
                of a book... Your Book of Life. Each page taken as separate 
                from the others makes little sense. But when placed in the context of your entire life, the 
                tapestry of your being emerges as a picture with purpose and meaning.</p>
            </div>
            <hr>
            <!-- Row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <a href="halloflearning.php"><img class="img-rounded" src="images/librarySmall.jpg" alt="library image"></a>
                    <h2>Hall of Learning</h2>
                    <p>"Lead us from Darkness to Light From Ignorance to Wisdom From Death to Immortality."&#42   Browse our repository of selected videos and texts.</p>
                    <p><a class="btn btn-primary" href="halloflearning.php" role="button">Enter &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <a href="products.php"><img class="img-rounded" src="images/cosmic-being.jpg" alt="wellness image"></a>
                    <h2>Our Products</h2>
                    <p>Take a look at our quality wellness products.  We carry products which we know from personal experiences to be beneficial to body and mind.</p>
                    <p><a class="btn btn-primary" href="products.php" role="button">View Products &raquo;</a></p>
                </div>
                <div class="col-md-4">
                    <a href="contact.php"><img class="img-rounded" src="images/cosmic-unity.jpg" alt="contact us image"></a>
                    <h2>Contact Us</h2>
                    <p>Schedule a personal consultation, ask a question regarding our products or services, sign up for our email, or just say hello.</p>
                    <p><a class="btn btn-primary" href="contact.php" role="button">Contact Us &raquo;</a></p>
                </div>
            </div>
            <hr>
            <i>&#42From the Upanishads </i>
        </div>
    
        <?php
            require_once('footer.php');
        ?>
  
    </body>
</html>
