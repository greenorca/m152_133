<!DOCTYPE html>
<?php 
	session_start();
	require_once "class/model.php"; 
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="sven" >
    <link rel="icon" type="image/ico" href="favicon.ico">

	<title>Manser Truck AG</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/carousel.css" media="screen">
    <link rel="stylesheet" href="scss/style.css" media="screen">
    <link rel="stylesheet" href="css/clickdemo.css" media="screen">
    <!--link rel="stylesheet" href="css/print.css" media="print"-->

</head>
<body>
		<?php include "tmpl_header.html"; ?>
		

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
				$('#inputEmail').blur(function () {
					var value = $('#inputEmail').val();
					if (value.length>4){
					$.post("ajax_handler.php",{
								email : value,
						},	
						function (data, status) {
							if (data=="false") {
								$("#p_username_help").text("Benutzer existiert bereits").fadeIn();
								$('#inputEmail').parent().addClass('has-error').removeClass("has-success");								
							}
							else {
								$("#p_username_help").fadeOut();
								$('#inputEmail').parent().addClass('has-success').removeClass("has-error");
							}
						}				
					);
				} else {
								$("#p_username_help").text("Benutzername mindestens 5 Zeichen").fadeIn();		
				}
				});
			});		
		
		</script>
</body>
</html>
