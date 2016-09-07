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

<?php include "tmpl_header.html" ?>

    <section class="container content">
      <h3>JQuery.validate + AJAX-Demo</h3>

    <?php if (isset($_GET["inputEmail"])){
			echo "<h3>Hallo ".$_GET["inputEmail"]."</h3><p>vielen Dank für Ihre Anmeldung</p>";
    }
		else {  ?>
        <form class="bootstrap-iso cmxform col-md-10" id="form_anmeldung" action="#" method="GET">
        	<div class="form-group col-md-8">
              <label for="inputVorname">Vorname</label>
              <input type="text" class="form-control" name="inputVorname" id="inputVorname" placeholder="Ihr Vorname">
          </div>
					<div class="form-group col-md-8">
              <label for="inputFamilienname">Familienname</label>
              <input type="text" class="form-control" name="inputFamilienname" id="inputFamilienname" placeholder="Familienname">
          </div>
					          
          
          <div class="form-group col-md-8">
              <label for="inputEmail">Email</label>
              <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email">
          </div>
          <div class="form-group col-md-8">
              <label for="inputPasswd1">Passwort</label>
              <span class="glyphicon glyphicon-eye-open"></span><input type="text" class="form-control" name="inputPasswd1" id="inputPasswd1" minlength="6" placeholder="Passwort eingeben">
          </div>
 
          <div class="form-group col-md-8">
              <label for="inputPasswd2">Passwort wiederholen</label>
              <span class="glyphicon glyphicon-eye-open"></span><input type="text" class="form-control" name="inputPasswd2" id="inputPasswd2" placeholder="Passwort erneut eingeben">
          </div>  
          <span class="clearfix"></span> 
          <div class="form-group col-md-6"> 
          	<button type="submit" class="btn btn-primary">Absenden</button>
          </div> 
          <span class="clearfix"></span>      
        </form>
    <?php } ?>
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
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			/* toggle visibility of passwords */
			$('span.glyphicon').click(function () {
				if ($(this).hasClass('glyphicon-eye-open')){
					$(this).removeClass('glyphicon-eye-open').addClass('glyphicon-eye-close');
					$(this).next().type='password';				
				}
				else {
					$(this).addClass('glyphicon-eye-open').removeClass('glyphicon-eye-close');
					$(this).next().type='text';				

				}				
			})			
			
			jQuery.validator.addMethod("checkNames", function (value, element) {
				return this.optional(element) || /^([A-Za-z\u00C0-\u017F-]{2,15} ?([A-Za-z\u00C0-\u017F]{2,15})$)/.test(value);
			}, "Der Name ist Quatsch!");
			
			$('#form_anmeldung').validate({
				rules:{
						inputVorname:{
								required: true,
								minlength: 2,
								checkNames : true,					
						},					
						
						inputFamilienname:{
								required: true,
								minlength: 2,
								checkNames : true,						
						},					
					
						inputEmail:{
							required: true,
							email: true,	
							remote: {
								url: "ajax_handler.php",type: "post",
								data: {
									user: function(){ return $('#inputEmail').val();}
								}	
							}				
						},
						inputPasswd1:{
							required: true,
							minlength: 6,							
						},
						inputPasswd2:{
							required: true,
							equalTo: "#inputPasswd1",							
						},
				},
				messages: {
					inputEmail: {
						remote : "Benutzer existiert bereits",
					}
				}					
				
				});
		});		
	
	</script>
</body>
</html>
