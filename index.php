<?php 
$test = array(); //  Buno Geovane
$test[1] = "pag1.html";
$test[2] = "pag2.html";
$test[3] = "pag3.html";
$test[4] = "pag1.html";
$test[5] = "pag2.html";
$test[6] = "pag3.html";
$test[1] = "pag1.html";
$test[2] = "pag2.html";
$test[3] = "pag3.html";
$test[4] = "pag1.html";
$test[5] = "pag2.html";
$test[6] = "pag3.html";
$test[1] = "pag1.html";
$test[2] = "pag2.html";
$test[3] = "pag3.html";
$test[4] = "pag1.html";
$test[5] = "pag2.html";
$test[6] = "pag3.html";

$contador = count($test); 
$aleatorio = rand(1,$contador); 
?>

<html>
 <head>
  <body>

	  
	  <a href=<?php echo $test[$aleatorio]; ?>>sistema random de redirecionamento de páginas</a>
  </body>
 </head>
</html>