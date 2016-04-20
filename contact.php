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
            <hr />
            <h3>Get on our mailing list and let us keep you up to date.</h3>
            <button class="btn btn-primary" data-toggle="modal"	data-target="#mymodal">Join Our Mailing List</button>
            <hr />
        </div>
        
        <div class="modal fade" id="mymodal">
          	<div class="modal-dialog">
            	<div class="modal-content">
          			<div class="modal-header">
          				  <h3>Let us send you updates and important information!</h3>
          			</div>
          			<div class="modal-body">
      				    <form>
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                <small class="text-muted">We'll never share your email with anyone else.</small>
                            </fieldset>
                        </form>
          			</div>
          			<div class="modal-footer">
          				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          			</div>
          		</div>
          	</div>
        </div>
      
        <?php
            require_once('footer.php');
        ?>
  
    </body>
</html>
