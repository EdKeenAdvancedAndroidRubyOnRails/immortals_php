<?php
    // Insert the page head element
    $page_title = '- About Us';
    require_once ('head.php');
?>

  <body id="about" class="grad">
    
    <?php
        // Insert the navbar element
        require_once ('header.php');
    ?>
    
    <div class="jumbotron homebanner">
      <h1>About Us</h1>
      <p class="lead"></p>
    </div>
    
 
        <div class="container">
            
    
            <div class="row">
                
                <div class="col-sm-8 blog-main">
                    

                    
                    <nav>
                        <ul class="pager">
                            <li><a href="#">Previous</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </nav>
                    
                </div><!-- /.blog-main -->
                
                <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                    <div class="sidebar-module sidebar-module-inset">
                        <h4>About</h4>
                        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                    </div>
                    
                    <div class="sidebar-module">
                        <a href="https://wftda.com/"><img src="images/wftdaLogo.png" alt="Wftda logo" /></a>
                    </div>
                </div><!-- /.blog-sidebar -->

            </div> <!-- row -->
        </div><!--container-->

    
    <?php
        require_once('footer.php');
    ?>

  </body>
</html>
