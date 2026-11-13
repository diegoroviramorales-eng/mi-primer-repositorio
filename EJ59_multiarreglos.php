<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Captura 4 productos en un Vector</title>
</head>
<body>

<h2>Captura 4 productos en un Vector</h2>
<!--formulario de captura-->
<form method="POST"action="">
<?php
 for($i=0;$i<3;$i++){
 	echo "producto";
 	echo "<input type='text' name='productos[]'>"." ";
 	echo "precio";
 	echo "<input type='number' name='precios[]'>"." ";
 	echo "cantidad";
 	echo "<input type='number' name='cantidades[]'>"." ";
 	echo "<br><br>";
 		}
	?>
<!--boton para guardar y calcular-->

<button type="submit" name="guardar" value ="guardar">
guardar y calcular</button>
<?php
	if(isset($_POST['guardar'])){
		$productos=$_POST['productos'];
		$precios=$_POST['precios'];
		$cantidades=$_POST['cantidades'];

		$subtotales =array();
		$iva =array();
		$totales =array();
 for($i=0;$i<3;$i++){
 	$subtotales[$i]=$precios[$i]*$cantidades[$i];
 	$iva[$i]=$subtotales[$i]*0.16;
 	$totales[$i]=$subtotales[$i]+$iva[$i];
 }
 echo"<h3>Arreglo de productos:</h3>";
		for($i=0;$i<3;$i++){
			echo$productos[$i]. "<br>";
		}
 echo"<h3>Arreglo de precios:</h3>";
		for($i=0;$i<3;$i++){
			echo"$".number_format($precios[$i],2) . "<br>";}
 echo"<h3>Arreglo de cantidades:</h3>";
		for($i=0;$i<3;$i++){
			echo ($cantidades[$i]) . "<br>";
		}
echo"<h3>Arreglo de subtotales :</h3>";
		for($i=0;$i<3;$i++){
			echo"$".number_format($subtotales[$i],2) . "<br>";
		}
		 echo"<h3>Arreglo de iva:</h3>";
		for($i=0;$i<3;$i++){
			echo"$".number_format($iva[$i],2) . "<br>";
		}
		 echo"<h3>Arreglo de totales:</h3>";
		for($i=0;$i<4;$i++){
			echo"$".number_format($totales[$i],2) . "<br>";
		}
	}
	?>
</body>
</html>

