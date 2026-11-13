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
 	echo "numero 1";
 	echo "<input type='number' name='numeros 1[]'>"." ";
 	echo "numero 2";
 	echo "<input type='number negative' name='numeros 2[]'>"." ";
    echo "<br><br>";}
	?>
<!--boton para guardar y calcular-->

<button type="submit" name="guardar" value ="guardar">
guardar y calcular</button>
<?php
	if(isset($_POST['guardar'])){
		$numero1=$_POST['numero1'];
		$numero2=$_POST['numero2'];
if ($numero1>=51 and $numero1<= 99)
if ($numero1>=-50 and $numero1<=-1)

		$suma =array();
		$resta =array();
		$multiplicacion =array();
		$division =array();

 for($i=0;$i<3;$i++){
 	$suma[$i]=$numero1[$i]+$numero2[$i];
 	$resta[$i]=$numero1[$i]-$numero2[$i];
 	$multiplicacion[$i]=$numero1[$i]*$numero2[$i];
 	$divicion[$i]=$numero1[$i]/$numero2[$i];
 }
 echo"<h3>Arreglo de numero1:</h3>";
		for($i=0;$i<3;$i++){
			echo$numeros1[$i]. "<br>";
		}
 echo"<h3>Arreglo de numero2:</h3>";
		for($i=0;$i<3;$i++){
			echo"$".number_format($numero2[$i],2) . "<br>";}
echo"<h3>Arreglo de suma :</h3>";
		for($i=0;$i<3;$i++){
			echo"$".number_format($suma[$i],2) . "<br>";
		}
		 echo"<h3>Arreglo de resta:</h3>";
		for($i=0;$i<3;$i++){
			echo"$".number_format($resta[$i],2) . "<br>";
		}
		 echo"<h3>Arreglo de multiplicacion:</h3>";
		for($i=0;$i<4;$i++){
			echo"$".number_format($multiplicacion[$i],2) . "<br>";
		}
			 echo"<h3>Arreglo de division:</h3>";
		for($i=0;$i<4;$i++){
			echo"$".number_format($division[$i],2) . "<br>";
		}
	}
else
	echo ("Introduce un valor");
	return;
	?>
</body>
</html>