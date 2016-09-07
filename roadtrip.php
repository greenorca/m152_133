<!DOCTYPE html>
<?php 
	session_start();
	require_once "class/model.php"; 
	$mySqlClass = new MySQLTables();
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
    <link rel="stylesheet" href="css/slimbox2.css" media="screen">
    <!--link rel="stylesheet" href="css/print.css" media="print"-->

</head>
<body>
		<?php include "tmpl_header.html"; ?>
        <article class="content container">
        	<button onclick="myToggleFun()">Toggle me!</button><p id="demo" style="color:white;">Guggus</p>
          <section class="clearfix">
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_7220.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_7220.JPG" alt="Urlaubsbild"></a></div>  
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_7274.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_7274.JPG" alt="Urlaubsbild"></a></div>  
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_7631.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_7631.JPG" alt="Urlaubsbild"></a></div>  
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_8079.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_8079.JPG" alt="Urlaubsbild"></a></div>
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_7222.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_7222.JPG" alt="Urlaubsbild"></a></div>  
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_7602.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_7602.JPG" alt="Urlaubsbild"></a></div>  
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_7698.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_7698.JPG" alt="Urlaubsbild"></a></div>  
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_8201.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_8201.JPG" alt="Urlaubsbild"></a></div>
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_7261.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_7261.JPG" alt="Urlaubsbild"></a></div> 
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_7617.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_7617.JPG" alt="Urlaubsbild"></a></div>  
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_7737.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_7737.JPG" alt="Urlaubsbild"></a></div>  
							<div class="col-md-2 col-xs-4"><a href="img/gallery/SAM_8253.JPG" rel="lightbox-roadtrip"><img class="gallery_pic" src="img/gallery/thumbs/SAM_8253.JPG" alt="Urlaubsbild"></a></div>
          </section>
        </article>
        <footer class="content">
            <a href="http://www.google.com"><span class="topomed-google"></span></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.cyclocross-store.de/de/frames-rahmen-parts/frames-racing-series/frame-gunsha-atr-disc"><span class="topomed-facebook"></span></a>
            <a href="http://wwww.twitter.com"><span class="topomed-twitter"></span></a>
            <a href="http://behance.com"><span class="topomed-behance"></span></a>
            <a href="http://github.io"><span class="topomed-github"></span></a>
            <a href="http://vimeo"><span class="topomed-vimeo"></span></a>
            
        </footer>
        <div class="content footer">
            <!-- google -->
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32" height="32" viewBox="0 0 16 16">
              <path fill="#000000" d="M8 0c-4.419 0-8 3.581-8 8s3.581 8 8 8 8-3.581 8-8-3.581-8-8-8zM8.119 14c-3.316 0-6-2.684-6-6s2.684-6 6-6c1.619 0 2.975 0.591 4.019 1.569l-1.628 1.569c-0.447-0.428-1.225-0.925-2.391-0.925-2.050 0-3.719 1.697-3.719 3.787s1.672 3.787 3.719 3.787c2.375 0 3.266-1.706 3.403-2.588h-3.403v-2.056h5.666c0.050 0.3 0.094 0.6 0.094 0.994 0.003 3.428-2.294 5.863-5.759 5.863z"></path>
            </svg>
            <!-- google -->
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
<path fill="#000000" d="M14.5 0h-13c-0.825 0-1.5 0.675-1.5 1.5v13c0 0.825 0.675 1.5 1.5 1.5h6.5v-7h-2v-2h2v-1c0-1.653 1.347-3 3-3h2v2h-2c-0.55 0-1 0.45-1 1v1h3l-0.5 2h-2.5v7h4.5c0.825 0 1.5-0.675 1.5-1.5v-13c0-0.825-0.675-1.5-1.5-1.5z"></path>
</svg>



        </div>

    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap_hover_dropdown.js"></script>
    <script type="text/javascript" src="js/slimbox2.js"></script>
    <script type="text/javascript">
    	var toggleState=false;
					function myToggleFun() {
						if (toggleState==false){
					   	document.getElementById("demo").innerHTML = "Paragraph changed.";}
						else {
						document.getElementById("demo").innerHTML = "Guggus";
						}
						toggleState = !toggleState;
					}
    </script>
</body>
</html>
