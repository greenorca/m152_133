<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guggus</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<article class="content container">
  <table class="table table-bordered table-hover">
    <tr><th>n</th><th>sin(n)</th><th>cos(x)</th></tr>
    <?php 
      for ($x = 0; $x <= 10; $x=$x+0.1) {
        echo "<tr>";
        echo "<td>".$x."</td>";
        echo "<td>".round(sin($x),3)."</td>";
        echo "<td>".round(cos($x),3)."</td></tr>";
      } 
    ?>
   </table>
   </article>
</body>
</html>