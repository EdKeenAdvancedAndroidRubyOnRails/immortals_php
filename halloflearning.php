<?php
    // Insert the page head element
    $page_title = '- Hall of Learning';
    require_once ('head.php');
?>

    <body id="hall" class="grad">
                
        <?php
            // Insert the navbar element
            require_once ('header.php');
        ?>
        
        <div class="jumbotron homebanner">
            <img src="images/Immortals-logo-green.jpg" alt="logo">
            <h1>Hall of Learning</h1></h1>
            <p class="lead"></p>
        </div>
        
        <div class="container">
            
            <div class="row">
                
                <div class="col-lg-4">
                    <a href="library/footnotes.php"><img class="img-circle" src="images/ancient-wisdom.jpg" alt="meditating Buddha" width="140" height="140" ></a>
                    <h2>Footnotes on Reality</h2>
                        <p>The ancient Maya believed that the creation of the universe is effected by nine waves. As we are nearing the end of the
                        eighth wave, what can we expect as the ninth and final wave unfolds?</p>
                        <p><a class="btn btn-primary" href="library/footnotes.php" role="button">Read More &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <a href="library/warrior.php"><img class="img-circle" src="images/warrior.jpg" alt="elightenment image" width="140" height="140" ></a>
                    <h2>Spiritual Warrior Training</h2>
                        <p>To be a spiritual warrior is to take ones battle to the most primary level, that of the Spirit. 
                        From the spiritual light of our Original Cause the Purpose of the Soul is constructed. 
                        The form that is created will fulfill that Purpose if rightly used.</p>
                        <p><a class="btn btn-primary" href="library/warrior.php" role="button">Read More &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <a href="library/wisdom.php"><img class="img-circle" src="images/ancient-wisdom2.jpg" alt="meditating Buddha" width="140" height="140" ></a>
                    <h2>Ancient Wisdom</h2>
                        <p>"We are like the spider. We weave our life and then move along in it.
                        We are like the dreamer who dreams and then lives in the dream.
                        This is true for the entire universe."&#42</p>
                        <p><a class="btn btn-primary" href="library/wisdom.php" role="button">Read More &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                
             </div><!-- /.row -->

        
        <!-- Featurette ------------------------------------------ -->    
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Mediations</h2>
                <p class="lead">The soul's meditation is rhythmic and cyclic in its nature as is all else in the cosmos. The soul 
                breathes and its form lives thereby. The rhythmic nature of the soul's meditation must not be 
                overlooked in the life of the aspirant.</p>
                <p><a class="btn btn-primary" href="library/meditations.php" role="button">Read More &raquo;</a></p>
            </div>
            <div class="col-md-5">
                <a href="library/meditations.php"><img class="img-rounded featurette-image img-responsive center-block" src="images/meditation.jpg" alt="meditation image"></a>
            </div>
        </div>
        
        <hr class="featurette-divider">
        
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">The Master Within</h2>
                <p class="lead">"As the flower unfolds to the Sun, the personality unfolds to the Light of the Soul.
                The long journey of becoming nears it's seeming end and the Master within reveals itself. 
                No longer do we follow any but the voice inside the heart that<em> KNOWS".</em>&#42</p>
                <p><a class="btn btn-primary" href="library/master.php" role="button">Read More &raquo;</a></p>
            </div>
            <div class="col-md-5">
                <a href="library/master.php"><img class="img-rounded featurette-image img-responsive center-block" src="images/innerMaster.jpg" alt="meditation image"></a>
            </div>
        </div>
        <i>&#42Devi </i>
        <hr class="featurette-divider">
        
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Light On the Path</h2>
                <p class="lead">The cosmic egg divides itself just as the egg of woman splits in two, 
                and polarity is born. Spirit and Matter, positive charge and negative charge creates 
                the spark of divine life. Finally the inter-action of the two creates duality and the
                great pendulum swings between them.</p>
                <p><a class="btn btn-primary" href="library/path.php" role="button">Read More &raquo;</a></p>
            </div>
            <div class="col-md-5">
                <a href="library/path.php"><img class="img-rounded featurette-image img-responsive center-block" src="images/pathlight.jpg" alt="meditation image"></a>
            </div>
        </div>
        
        <hr class="featurette-divider">
        <div>
            <a class="top" href="#">Back to Top</a>
        </div>    

        </div> <!-- /.container -->

        <?php
            require_once('footer.php');
        ?>
  
    </body>
</html>
