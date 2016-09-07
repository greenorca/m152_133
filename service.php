<?php
	session_start();
	require_once "class/model.php";
	$_SESSION['mySqlClass'] = new MySQLTables();
?>
<!DOCTYPE html>
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
    <!--link rel="stylesheet" href="css/print.css" media="print"-->
</head>
<body>
<?php include "tmpl_header.html"; ?>

        <article class="container content">
            <section class="col-md-6">
                <h3>Wartung</h3>
                <p>Bei der Manser-Truck AG erreichen Sie im Notfall immer jemanden. Unser Werkstatt-Team ist erreichbar unter ...

Gerne beraten wir Sie über Wartungsverträge, um die Verfügbarkeit Ihrer Fahrzeuge zu optimieren. </p>

            </section>
            <section class="col-md-6">
                <h3>An- und Verkauf</h3>
                <p>Aus Alt mach Neu? Oder einen geprüften Gebrauchten? Unser Verkaufteam berät Sie gerne, auch über günstige Finanzierungs-möglichkeiten.<br> <br> </p>
            </section>            
            <section class="col-md-6">
                <h3>Leasing</h3>
                <p>Bei der Manser Truck AG erwarten Sie fantastische Leasing-Angebote. Damit verringert sich der Kapitalaufwand bei der Anschaffung, und Ihr Unternehmen spart richtig Steuern- </p>
            </section>            
            <section class="col-md-6">
                <h3>Miete</h3>
                <p>Wir vermieten Ihnen gerne tage- oder wochenweise Liefer- und Spezialfahrzeuge. Über die aktuell verfügbaren Fahrzeuge und die günstigen Konditionen können Sie sich gerne telefonisch oder per email informieren. </p>
            </section>
            <section class="col-md-12">
                <h3>Bootstrap Glyphicons benutzen</h3>
                <p>Hier könnte ein Suchfenster markiert werden: <br>
                <span class="glyphicon glyphicon-search" aria-hidden="true">&nbsp;</span><input type="text" placeholder="search"/><br> Dazu nutzen Sie folgenden Code:
                </p>
                <pre>&lt;span class=&quot;glyphicon glyphicon-search&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
                </pre>
            </section>
            
						<section>
							<h3>Unsere Kunden</h3>						
							<table id="tbl_customers" class="table">
								<tr>
									 <th>id_customer</th>
									 <th>customer_name</th>
									 <th>street</th>
									 <th>zipcode</th>
									 <th>city</th>
									 <th>country</th>
								</tr>							
								<?php
									$customer_tbl = $_SESSION['mySqlClass']->getCustomers();
									echo $customer_tbl;
								?>							
							</table>
							
						</section>
            
            
        </article>
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
    <script type="text/javascript" src="js/bootstrap_hover_dropdown.js"></script>
		<script type="text/javascript" >
			$(document).ready(function () {
				var limit=10;
				var offset = limit;
				
				$(window).on('scroll', function() {
    			if($(window).scrollTop() == $(document).height() -   $(window).height()) {
         		//alert("reached the bottom");
         		$.post('ajax_handler.php',
         			{
         				offset: offset,
         				limit : limit,
         			},
         			function (data, status) {
         				if (status=="success"){
									$('#tbl_customers').append(data);
									offset+=limit;         				
         				}
         			}
         		
         		);
        }
    });				
			});
		</script>

</body>
</html>
