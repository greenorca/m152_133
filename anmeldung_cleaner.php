<?php include "tmpl_head.html"; ?>

            <!-- Carousel
    ================================================== -->
   

        <section class="container content">
            <h3>AJAX-Demo</h3>
            <form class="bootstrap-iso" id="form_anmeldung" action="#" method="GET">
            
	            <div class="form-group col-md-6">
                  <label for="inputEmail">Email address</label>
                  <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email" required="true">
                  <p class="error_help_msg" style="display:none;" id="p_username_help">Benutzername existiert bereits. Bitte anderen Namen wählen.</p>
              </div>
              <span class="clearfix"></span>
              <div class="form-group col-md-6">
                  <label for="inputPasswd1">Passwort</label>
                  <input type="text" class="form-control" name="inputPasswd1" id="inputPasswd1" placeholder="Passwort eingeben" required="true">
              </div>
 
              <div class="form-group col-md-6">
                  <label for="inputPasswd2">Passwort wiederholen</label>
                  <input type="text" class="form-control" name="inputPasswd2" id="inputPasswd2" placeholder="Passwort eingeben" required="true">
              </div>           
            </form>
        </section>
        <footer class="content">
            <a href="http://www.google.com"><span class="topomed-google"></span></a>
            <a href="http://www.facebook.com"><span class="topomed-facebook"></span></a>
            <a href="http://wwww.twitter.com"><span class="topomed-twitter"></span></a>
            <a href="http://behance.com"><span class="topomed-behance"></span></a>
            <a href="http://github.io"><span class="topomed-github"></span></a>
            <a href="http://vimeo"><span class="topomed-vimeo"></span></a>
        </footer>

    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				/* store response function as variable */
				var responseHandler = function (data, status) {
					console.log("Data: " + data + "\nStatus: " + status);
					if (data=="false") { $("#p_username_help").fadeIn();}
					else {$("#p_username_help").fadeOut();}
				}			
				/* username eval function */
				$('#inputEmail').blur(function () {
					var value = $('#inputEmail').val();
					$.post("ajax_handler.php",{
								email : value,
						},	
						responseHandler					
					);
				});
			});		
		</script>
</body>
</html>
